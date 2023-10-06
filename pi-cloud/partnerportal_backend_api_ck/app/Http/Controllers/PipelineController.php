<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\State;
use App\Models\SBUnit;
use App\Models\Partner;
use App\Models\Pipeline;
use App\Models\SBUProduct;
use App\Models\AccountType;
use App\Models\PaymentTerm;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use App\Mail\NewPipelineMail;
use App\Mail\PipelineUpdateMail;
use App\Models\CommissionType;
use App\Models\ContractPeriod;
use App\Models\PipelineRating;
use App\Models\BusinessIndustry;
use App\Mail\PipelineApprovalMail;
use App\Mail\PipelineRejectionMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorePipelineRequest;
use App\Mail\PipelineStageUpdateMail;
use App\Http\Helpers\HelperFunctions;

class PipelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //$partner = $this->getAuthPartner();
	$partner = HelperFunctions::getAuthPartner();

        $pipelines = null;

        if ($user->user_type === Config::get('constants.user_types.PIADMIN'))  {

            $pipelines = Pipeline::orderByDesc('id')
                            ->with('sbUnit')
                            ->with('product')
                            ->get();

        } else if ($user->user_type === Config::get('constants.user_types.PARTNERADMIN')) {
            /*
            Users of this type should be able to view pipeline created by him or by any partner sales
            person from his own organisation.
            */
            /*TODO:: need to change the query*/
            $pipelines = Pipeline::where('partner_id', '=', $partner->id)
                            ->orderByDesc('id')
                            ->with('sbUnit')
                            ->with('product')
                            ->get();

        } else if ($user->user_type === Config::get('constants.user_types.PARTNERSALES')) {
            /*User of this type should be able to view pipeline created by him only*/
            $pipelines = Pipeline::where('partner_id', '=', $partner->id)
                            ->orderByDesc('id')
                            ->with('sbUnit')
                            ->with('product')
                            ->get();

            

        } else {
            ;
        }


        if ($pipelines != null) {
            foreach($pipelines as $pipe) {
                $pipe['rbp_state'] = State::find($pipe['rbp_state']);
                $pipe['customer_state'] = State::find($pipe['customer_state']);
                $pipe['rating'] = PipelineRating::find($pipe['rating_id']);
                $pipe['stage'] = Stage::find($pipe['stage']);
                //$pipe['contract_period'] = ContractPeriod::find($pipe['contract_period']);
                $pipe['customer_type'] = CustomerType::find($pipe['customer_type']);
                $pipe['account_type'] = AccountType::find($pipe['account_type']);
                $pipe['business_industry'] = BusinessIndustry::find($pipe['business_industry']);
                $pipe['commission_type'] = CommissionType::find($pipe['commission_type']);
                $pipe['payment_terms'] = PaymentTerm::find($pipe['payment_terms']);
            }
        }

        $dependencies = [];
        $dependencies['states'] = State::all();
        $dependencies['sbus'] = SBUnit::all();
        $dependencies['sbuProducts'] = SBUProduct::all();
        $dependencies['ratings'] = PipelineRating::all();
        $dependencies['commission_types'] = CommissionType::all();
        $dependencies['customer_types'] = CustomerType::all();
        $dependencies['account_types'] = AccountType::all();
        $dependencies['business_industries'] = BusinessIndustry::all();
        $dependencies['stages'] = Stage::all();
        $dependencies['contract_periods'] = ContractPeriod::all();
        $dependencies['payment_terms'] = PaymentTerm::all();

        return response()->json(['status' => 'ok', 'pipelines' => $pipelines, 'dependencies' => $dependencies, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pipelineForm = [];        

        //$potentialId = $this->getPotentialId();
        $pipelineForm['potential_id'] = $this->getPotentialId();
        $pipelineForm['states'] = State::all();
        $pipelineForm['sbus'] = SBUnit::all();
        $pipelineForm['sbuProducts'] = SBUProduct::all();
        $pipelineForm['ratings'] = PipelineRating::all();
        $pipelineForm['commission_types'] = CommissionType::all();
        $pipelineForm['customer_types'] = CustomerType::all();
        $pipelineForm['account_types'] = AccountType::all();
        $pipelineForm['business_industries'] = BusinessIndustry::all();
        $pipelineForm['stages'] = Stage::all();
        $pipelineForm['contract_periods'] = ContractPeriod::all();
        $pipelineForm['payment_terms'] = PaymentTerm::all();

        $partner = HelperFunctions::getAuthPartnerWithDetails();

        $pipelineForm['partner']['ro'] = "";
        if ($partner != null) {
            $pipelineForm['partner']['ro'] = $partner->PartnerOrgInfo->ro_name;
        }

        //return response()->json($pipelineForm) ;
        return response()->json(['status' => 'ok', 'pipelineform' => $pipelineForm]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePipelineRequest $request)
    {
        //any validations
        $validated = $request->validated();
        $potentialId = $this->getPotentialId();

	$uploadedDocs = array();
        if ( $request->hasFile('opportunity_docs') ) {
            $docs = $request->file('opportunity_docs');

            foreach ($docs as $file) {
                $tempPath = $file->storeAs('public/uploads/pipelines/'.$potentialId, $file->getClientOriginalName());
                $tempPath = str_replace("public/uploads", "storage/app/public/uploads", $tempPath);
                array_push($uploadedDocs, $tempPath);
            }
        }

        //$partner = $this->getAuthPartner();
	$partner = HelperFunctions::getAuthPartner();
        $partnerId = ( $partner != null ) ? $partner->id : 0;
        
        $calculatedAVC = ($validated['pmrc'] * 12) + $validated['potc'] + $validated['parc'];
        $calculatedAVC = round($calculatedAVC, 2);

        $calculatedTVC = ($validated['pmrc'] * $validated['cpinmonths']) + $validated['potc'] + ($validated['parc'] * ($validated['cpinmonths']/12));
        $calculatedTVC = round($calculatedTVC, 2);

        $calculatedPC = $this->calculatePC($request, $calculatedAVC);

        $pipeline = Pipeline::create([
            'potential_id' => $potentialId,    
            'rbp_name' => $validated['rbpname'],
            'rbp_state' => $validated['rbpregion'],
            'sales_owner' => $validated['salesowner'],
            'customer_state' => $validated['cregion'],
            'customer_name' => $validated['customername'],
            'customer_email_id' => $validated['customeremilid'],
            'business_industry' => $validated['industry'],
            'account_type' => $validated['cactype'],
            'sbunits_id' => $validated['sbu'],
            'sbu_product_id' => $validated['cproduct'],
            'opportunity_details' => $request->ooppdetails,
            'stage' => $validated['pstage'],
            'rating_id' => $validated['prating'],
            'mrc' => $validated['pmrc'],
            'otc' => $validated['potc'],
            'arc' => $validated['parc'],
            'acv' => $calculatedAVC,
            'tcv' => $calculatedTVC,
            'contract_period' => $validated['cpinmonths'],
            'payment_terms' => $validated['paymentterm'],
            'opportunity_date' => date('Y-m-d'),
            'proposal_date' => $validated['pprdate'],
            'closing_date' => $validated['pclosingdate'],
            'customer_type' => $validated['cpcusttype'],
            'commission_type' => $validated['cmmsontype'],
            'projected_commission' => $calculatedPC,
            'customer_website' => $validated['ppcwebsite'],
	    'opportunity_docs' => implode(";", $uploadedDocs),
            'partner_id' => $partnerId,  
        ]);



        $maildetails = [
            'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
            'subject' => Config::get('constants.mails.PIPELINE_CREATION_MAIL_SUBJECT'), 
	    'partner_title' => $partner->partnerPersonalInfo->title, 
            'partner_name' => $partner->partnerPersonalInfo->first_name . " " . $partner->partnerPersonalInfo->last_name,
            'partner_org_name' => $partner->partnerOrgInfo->comp_name,
            'pipe_potential_id' => $pipeline->potential_id,
            'pipe_mrc' => $pipeline->mrc,
            'pipe_otc' => $pipeline->otc,
            'pipe_arc' => $pipeline->arc,
            'pipe_cp' => $pipeline->contract_period,
        ];

        $to = Config::get('constants.mails.PI_ADMIN_MAIL');
        $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
        Mail::to($to)->cc($cc)->send(new NewPipelineMail($maildetails));
        
        return response()->json(['status' => 'ok', 'pipeline' => $pipeline] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the fields

        $validator = Validator::make($request->all(), [
            'rbpname' => "required",
            'rbpstate' => "required",
            'salesowner' => "required",
            'customerstate' => "required",
            'custname' => "required",
            'custemail' => "required|email",
            'business_industry' => "required",
            'account_type' => "required",
            'sbu' => "required",
            'product' => "required",
            'stage' => "required",
            'rating' => "required",
            'pmrc' => 'required',
            'potc' => 'required',
            'parc' => 'required',
            'cpinmonths' => "required",
            'payment_term' => "required",
            //'opportunity_dt' => "required",
            'proposal_dt' => "required",
            'closing_dt' => "required",
            'cpcusttype' => "required",
            'cmmsontype' => "required",
            'customer_website' => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'msg' => 'All fields required', 'request' => $request->all()]);
        }
	
 	//$partner = $this->getAuthPartner();
	$partner = HelperFunctions::getAuthPartner();
        $partnerId = ( $partner != null ) ? $partner->id : 0;

        $pipeline = Pipeline::find($id);

        /*The pipeline cannot be edited unless it has been approved by the admin*/
        if ($pipeline->status != Config::get('constants.options.APPROVED')) {
            return response()->json([
                'status' => 'error', 'msg' => 'Pipeline cannot be edited unless approved.',
            ]);
        }

	$uploadedDocs = array();
        if ( $request->hasFile('opportunity_docs') ) {
            $docs = $request->file('opportunity_docs');

            foreach ($docs as $file) {
                $tempPath = $file->storeAs('public/uploads/pipelines/'.$pipeline->potential_id, $file->getClientOriginalName());
                $tempPath = str_replace("public/uploads", "storage/app/public/uploads", $tempPath);
                array_push($uploadedDocs, $tempPath);
            }
        }

        $calculatedAVC = ($request->pmrc * 12) + $request->potc + $request->parc;
        $calculatedTVC = ($request->pmrc * $request->cpinmonths) + $request->potc + ($request->parc * ($request->cpinmonths/12));
        $calculatedPC = $this->calculatePC($request, $calculatedAVC);

	$pipeOldStage = $pipeline->stage;

        //if ($pipeline->status !=  Config::get('constants.options.REJECTED') || $pipeline->status !=  Config::get('constants.options.APPROVED')) {
	if ($pipeline->status ==  Config::get('constants.options.APPROVED')) {
            $pipeline->rbp_name = $request->rbpname;
            $pipeline->rbp_state = $request->rbpstate;
            $pipeline->sales_owner = $request->salesowner;
            $pipeline->customer_state = $request->customerstate;
            $pipeline->customer_name = $request->custname;
            $pipeline->customer_email_id = $request->custemail;
            $pipeline->business_industry = $request->business_industry;
            $pipeline->account_type = $request->account_type;
            $pipeline->sbunits_id = $request->sbu;
            $pipeline->sbu_product_id = $request->product;
            $pipeline->stage = $request->stage;
            $pipeline->rating_id = $request->rating;
            $pipeline->mrc = $request->pmrc;
            $pipeline->otc = $request->potc;
            $pipeline->arc = $request->parc;
            $pipeline->acv = $calculatedAVC;
            $pipeline->tcv = $calculatedTVC;
            $pipeline->contract_period = $request->cpinmonths;
            $pipeline->payment_terms = $request->payment_term;
            //$pipeline->opportunity_date = $request->opportunity_dt;
            $pipeline->proposal_date = $request->proposal_dt;
            $pipeline->closing_date = $request->closing_dt;
            $pipeline->customer_type = $request->cpcusttype;
            $pipeline->commission_type = $request->cmmsontype;
            $pipeline->projected_commission = $calculatedPC;
            $pipeline->customer_website = $request->customer_website;

	    if (!empty($uploadedDocs)) {
                $pipeline->opportunity_docs = implode(";",$uploadedDocs);
            }
	
	    $stagesForEmail = ["po-received-payment-pending", "closed-won-payent-received", "closed-dropped", "closed-lost-to-competition"];

            if ($pipeline->save()) {
                $maildetails = [
                    /*'subject' => Config::get('constants.mails.PIPELINE_UPDATE_MAIL_SUBJECT'),*/
                    'partner_title' => $partner->partnerPersonalInfo->title, 
                    'partner_name' => $partner->partnerPersonalInfo->first_name . " " . $partner->partnerPersonalInfo->last_name,
                    'partner_org_name' => $partner->partnerOrgInfo->comp_name,
                    'pipe_potential_id' => $pipeline->potential_id,
                    'pipe_mrc' => $pipeline->mrc,
                    'pipe_otc' => $pipeline->otc,
                    'pipe_arc' => $pipeline->arc,
                    'pipe_cp' => $pipeline->contract_period,
                ];
		if ( ($pipeOldStage != $pipeline->stage)  && ( in_array($pipeline->stagemaster->display_value, $stagesForEmail )) ) {

                        $maildetails['pipeline_old_stage'] = Stage::find($pipeOldStage)->display_name;
                        $maildetails['pipeline_new_stage'] = $pipeline->stagemaster->display_name;

			$maildetails['subject'] = "Pipeline Updated from ".$maildetails['pipeline_old_stage']." to ".$maildetails['pipeline_new_stage'];

                        $to = Config::get('constants.mails.PI_ADMIN_MAIL');
                        $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
                        Mail::to($to)->cc($cc)->send(new PipelineStageUpdateMail($maildetails));

                } else {
		    
		    $maildetails['subject'] = Config::get('constants.mails.PIPELINE_UPDATE_MAIL_SUBJECT');

                    $to = Config::get('constants.mails.PI_ADMIN_MAIL');
                    $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
                    Mail::to($to)->cc($cc)->send(new PipelineUpdateMail($maildetails));
                }
            }

            return response()->json(['status' => 'ok', 'msg' => 'Pipeline updated']);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getProductsForSBU(Request $request, $id) {

        $sbunit = SBUnit::where('id', '=', $id)->get();
        //$products = $sbunit->products;
        $products = SBUProduct::where('sbunits_id', '=', $sbunit[0]->id)->get();

        return response()->json(['status' => 'ok', 'sbu' => $sbunit, 'products' => $products]);
    }

    public function getRating(Request $request, $id) {

        $rating = PipelineRating::find($id);
        return response()->json(['status' => 'ok', 'rating' => $rating]);
    }

    public function calculatePC(Request $request, $acv) {

        $projectedCommission = 0;

        $commisionTypeEntity = CommissionType::find($request->cmmsontype);
        $commisionType = ( $commisionTypeEntity != null) ? $commisionTypeEntity->display_value : '';

        $custTypeEntity = CustomerType::find($request->cpcusttype);
        $custType = ( $custTypeEntity != null) ? $custTypeEntity->customer_type_value : '';

        if ($commisionType == 'onetime') {
            if ($request->pmrc >= 1) {
                $projectedCommission = $acv * 0.1;
            }else{
		$projectedCommission = $acv * 0.07;
	    }
        }else if($commisionType == 'recurring') {
            if ($custType == 'new-logo') {
                $projectedCommission = $request->pmrc * 0.1 * $request->cpinmonths;
            }else if(strtolower($request->cpcusttype) == 'existing-logo') {
                $projectedCommission = $request->pmrc * 0.5 * $request->cpinmonths;
            }else{
                ;
            }
        }else {
            ;
        }

        $projectedCommission = round($projectedCommission, 2);
        return $projectedCommission;
    }

    private function getPotentialId() {
       
        $userEmail = Auth::user()->email;
        $partner = Partner::where('business_email', '=', $userEmail)->get();   

        if ($partner != null) {
            $partner = $partner[0];

            $partPipesOnDate = Pipeline::where('partner_id', '=', $partner->id)
                                ->whereDate('created_at', '=', date('Y-m-d'))
                                ->get();

            $partPipeCnt = $partPipesOnDate->count();
            $newPipeSl = $partPipeCnt + 1;
       
            $partnerRef = $partner->partner_ref_no;
            $potentialId = $partnerRef ."_". date('d') .  date('m') . date('Y') . $newPipeSl ;  

        }else {

            $potentialId = "";
        }

        return $potentialId;

    }

    public function reject(Request $request, $id) {

        $pipeline = Pipeline::find($id);


        if ($pipeline != null) {
            $pipeline->status = Config::get('constants.options.REJECTED');
            $pipeline->status_date = date("Y-m-d H:i:s");
            $pipeline->rejection_comment = $request->adminmsg;
            
            if ( $pipeline->save() ) {

                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => config('constants.mails.PIPELINE_REJECTION_MAIL_SUBJECT'), 
                    'partner_name' => $pipeline->partner->partnerPersonalInfo->first_name . " " . $pipeline->partner->partnerPersonalInfo->last_name,
                    'partner_org_name' => $pipeline->partner->partnerOrgInfo->comp_name,
                    'pipe_potential_id' => $pipeline->potential_id,
                ];
                
                $to = $pipeline->partner->business_email;
                Mail::to($to)->send(new PipelineRejectionMail($maildetails));
                
            }
        }

        return response()->json(['status' => 'ok', 'msg' => 'Pipeline updated successfully.']);
    }

    public function approve(Request $request, $id) {

        $pipeline = Pipeline::find($id);
       
        if (($pipeline != null) && ($pipeline->status != Config::get('constants.options.REJECTED'))) {
            $pipeline->status = Config::get('constants.options.APPROVED');
            $pipeline->status_date = date("Y-m-d H:i:s");
            if ( $pipeline->save() ) {

                //Send mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.PIPELINE_APPROVAL_MAIL_SUBJECT'),  
                    'partner_name' => $pipeline->partner->partnerPersonalInfo->first_name . " " . $pipeline->partner->partnerPersonalInfo->last_name,
                    'partner_org_name' => $pipeline->partner->partnerOrgInfo->comp_name,
                    'pipe_potential_id' => $pipeline->potential_id,
                    'pipe_mrc' => $pipeline->mrc,
                    'pipe_otc' => $pipeline->otc,
                    'pipe_arc' => $pipeline->arc,
                    //'pipe_cp' => $pipeline->contractPeriod->display_name,
		    'pipe_cp' => $pipeline->contract_period,
                ];

                $to = $pipeline->partner->business_email;
                Mail::to($to)->send(new PipelineApprovalMail($maildetails));

            }
        }

        return response()->json(['status' => 'ok', 'msg' => 'Pipeline updated successfully.']);
    }

/*
    public function getAuthPartner() {

        $user = Auth::user();
        $partner = Partner::where('business_email', '=', $user->email)->get();

        if ($partner != null) {
            return $partner[0];
        }
        return null;
    }
*/
    
}
