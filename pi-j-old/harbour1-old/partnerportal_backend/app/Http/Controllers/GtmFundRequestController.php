<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\GTMFundRequest;
use App\Mail\NewGTMFundRequestMail;
use App\Mail\GTMFundReqApprovalMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Helpers\HelperFunctions;
use App\Mail\GTMFundReqRejectionMail;
use App\Mail\GTMFundRequestDeleteMail;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\GTMFundFormRequest;

class GtmFundRequestController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //$partner = Partner::where('business_email', '=', $user->email)->first();   
	$partner = HelperFunctions::getAuthPartner();

        if ( $partner == null ) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Unauthorized user',
            ], 400);
        }

        if ( $user->user_type === Config::get('constants.user_types.PIADMIN')) {
            $fundRequests = GTMFundRequest::where('is_active','=',1)->orderByDesc('id')->get();
        } else{
            $fundRequests = GTMFundRequest::where('partner_id', '=', $partner->id)
                            ->where('is_active', '=', 1)
                            ->orderByDesc('id')->get();
        }

        foreach($fundRequests as $req) {

            /*The isEditable property is set to true when the loged in user is the author of this item and hence it signifies
            that the loged in user is entitled to edit the item. If this is true the edit option for this item will be activated
            for the logged in user */
            if ( $partner->id == $req->partner_id ) {
                $req['isEditable'] = "true";    
            }else {
                $req['isEditable'] = "false";
            }

            if ( $req->fund_requested == null ) {
                $req->fund_requested = "";
            }
        }

        return response()->json([
            'status' => 'success',
            'gtmfundrequests' => $fundRequests,
        ]);
    }

    public function create()
    {
    }

    public function store(GTMFundFormRequest $request)
    {
     
        $user = Auth::user();
        //$partner = Partner::where('business_email', '=', $user->email)->first();
	$partner = HelperFunctions::getAuthPartner();

        if ( $partner == null ){

            return response()->json([
                'status' => 'error',
                'msg' => 'Unauthorized user',
            ], 400);
        } 

        $validated = $request->validated();    

        $gtmFundReq = new GTMFundRequest();
        $gtmFundReq->project_name = $validated['gtm_proj_name'];
        $gtmFundReq->gmt_prod_services = $validated['gtm_fundreq_products'];
        $gtmFundReq->gmt_prod_services_others = $validated['gtm_fundreq_prod_other'];
        $gtmFundReq->estimated_event_cost = $validated['gtm_fundreq_proj_cost'];
        $gtmFundReq->objective = $validated['gtm_fundreq_objective'];
        $gtmFundReq->target_market = $validated['gtm_fundreq_market'];
        $gtmFundReq->partner_ownership = $validated['gtm_fundreq_part_ownership'];
        $gtmFundReq->existing_sponsors = $validated['gtm_fundreq_sponsers'];
        $gtmFundReq->sponsor_deliverables = $validated['gtm_fundreq_spon_deliverables'];
        $gtmFundReq->pi_deliverables = $validated['gmt_fundreq_pi_deliverables'];
        $gtmFundReq->fund_requested = $validated['gtm_fundreq_fund_requested'];
        $gtmFundReq->comments = $validated['gtm_fundreq_comments'];
        $gtmFundReq->executive_name = $validated['gtm_fundreq_exe_name'];
        $gtmFundReq->executive_email = $validated['gtm_fundreq_exe_email'];
        $gtmFundReq->executive_mobile_code = null;
        $gtmFundReq->executive_mobile_no = $validated['gtm_fundreq_exe_mob'];
        $gtmFundReq->executive_desig = $validated['gtm_fundreq_exe_desig'];
        $gtmFundReq->marteking_cname = $validated['gtm_fundreq_mark_name'];
        $gtmFundReq->marteking_cemail = $validated['gtm_fundreq_mark_email'];
        $gtmFundReq->marteking_cmobile_code = null;
        $gtmFundReq->marteking_cmobile_no = $validated['gtm_fundreq_mark_mob'];
        $gtmFundReq->success_parameters = $validated['gtm_fundreq_success_params'];
        $gtmFundReq->success_metrics = $validated['gtm_fundreq_success_metrics'];
        $gtmFundReq->partner_id = $partner->id;
        $gtmFundReq->status = 'pending';
        $gtmFundReq->status_date = date('Y-m-d H:i:s');


        if ( $request->hasFile('budget_plan_doc') ) {
            $file = $request->file('budget_plan_doc');
            $tempPath = $request->budget_plan_doc->storeAs('public/uploads/gtm_fund_requests', $file->getClientOriginalName());
            //$gtmFundReq->budget_plan_doc_path = str_replace("public/uploads", "public/storage/uploads", $tempPath);
            $gtmFundReq->budget_plan_doc_path = str_replace("public/uploads", "storage/app/public/uploads", $tempPath);
        }

        if ( $gtmFundReq->save() ) { 
            
            $maildetails = [
                'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                'subject' => Config::get('constants.mails.GTMFundReq_CREATION_MAIL_SUBJECT'),  
                'partner_title' => $gtmFundReq->partner->partnerPersonalInfo->title,
                'partner_name' => $gtmFundReq->partner->partnerPersonalInfo->first_name . " " . $gtmFundReq->partner->partnerPersonalInfo->last_name,
                //'partner_org_name' => $fundReq->partner->partnerOrgInfo->comp_name,
                'project_name' => $gtmFundReq->project_name,
            ];

            $to = Config::get('constants.mails.PI_ADMIN_MAIL');
            $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
            Mail::to($to)->cc($cc)->send(new NewGTMFundRequestMail($maildetails));

            return response()->json([
                'status' => 'success',
                'msg' => 'GTM Fund Request submitted',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'msg' => 'Error in submitting GTM Fund Request',
        ], 400);   
          
    }

    public function update(GTMFundFormRequest $request, $id)
    {
        $user = Auth::user();
        //$partner = Partner::where('business_email', '=', $user->email)->first();
	$partner = HelperFunctions::getAuthPartner();

        if ( $partner == null ){

            return response()->json([
                'status' => 'error',
                'msg' => 'Unauthorized user',
            ], 400);
        }

        $validated = $request->validated();

        $gtmFundReq = GTMFundRequest::where('id', '=', $id)->first();
        if ( $gtmFundReq != null ) {
            $gtmFundReq->project_name = $validated['gtm_proj_name'];
            $gtmFundReq->gmt_prod_services = $validated['gtm_fundreq_products'];

            if ( isset($validated['gtm_fundreq_prod_other']) ) {
                $gtmFundReq->gmt_prod_services_others = $validated['gtm_fundreq_prod_other'];
            }
            $gtmFundReq->estimated_event_cost = $validated['gtm_fundreq_proj_cost'];
            $gtmFundReq->objective = $validated['gtm_fundreq_objective'];
            $gtmFundReq->target_market = $validated['gtm_fundreq_market'];
            $gtmFundReq->partner_ownership = $validated['gtm_fundreq_part_ownership'];
            $gtmFundReq->existing_sponsors = $validated['gtm_fundreq_sponsers'];
            $gtmFundReq->sponsor_deliverables = $validated['gtm_fundreq_spon_deliverables'];
            $gtmFundReq->pi_deliverables = $validated['gmt_fundreq_pi_deliverables'];
            $gtmFundReq->fund_requested = $validated['gtm_fundreq_fund_requested'];
            $gtmFundReq->comments = $validated['gtm_fundreq_comments'];
            $gtmFundReq->executive_name = $validated['gtm_fundreq_exe_name'];
            $gtmFundReq->executive_email = $validated['gtm_fundreq_exe_email'];
            $gtmFundReq->executive_mobile_code = null;
            $gtmFundReq->executive_mobile_no = $validated['gtm_fundreq_exe_mob'];
            $gtmFundReq->executive_desig = $validated['gtm_fundreq_exe_desig'];
            $gtmFundReq->marteking_cname = $validated['gtm_fundreq_mark_name'];
            $gtmFundReq->marteking_cemail = $validated['gtm_fundreq_mark_email'];
            $gtmFundReq->marteking_cmobile_code = null;
            $gtmFundReq->marteking_cmobile_no = $validated['gtm_fundreq_mark_mob'];
            $gtmFundReq->success_parameters = $validated['gtm_fundreq_success_params'];
            $gtmFundReq->success_metrics = $validated['gtm_fundreq_success_metrics'];

            if ( $request->hasFile('budget_plan_doc') ) {
                $file = $request->file('budget_plan_doc');
                $tempPath = $request->budget_plan_doc->storeAs('public/uploads/gtm_fund_requests', $file->getClientOriginalName());
               // $gtmFundReq->budget_plan_doc_path = str_replace("public/uploads", "public/storage/uploads", $tempPath);
               $gtmFundReq->budget_plan_doc_path = str_replace("public/uploads", "storage/app/public/uploads", $tempPath);
            }

            if ( $gtmFundReq->save() ) {
                return response()->json([
                    'status' => 'success',
                    'msg' => 'GTM Fund Request updated',
                ]);
            }

            return response()->json([
                'status' => 'error',
                'msg' => 'Error in updating GTM Fund Request',
            ], 400); 
        }
        
        return response()->json([
            'status' => 'error',
            'msg' => 'Selected Fund Request not found',
        ], 400); 
       
    }

    public function approve(Request $request, $id) {

        $fundReq = GTMFundRequest::where("id", '=', $id)->first();

        if ( ($fundReq != null) && ($fundReq->status != Config::get('constants.options.APPROVED')) ) {
            $fundReq->status = Config::get('constants.options.APPROVED');
            $fundReq->status_date = date('Y-m-d H:i:s');

            if ( $fundReq->save() ) {
                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMFundReq_APPROVAL_MAIL_SUBJECT'),  
                    'partner_name' => $fundReq->partner->partnerPersonalInfo->first_name . " " . $fundReq->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $fundReq->partner->partnerOrgInfo->comp_name,
                    'project_name' => $fundReq->project_name,
                ];

                $to = $fundReq->partner->business_email;
                Mail::to($to)->send(new GTMFundReqApprovalMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'GTM Fund Request Approved'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in approving GTM Fund Request'
            ]);
        }
    }

    public function reject(Request $request, $id) {

        $fundReq = GTMFundRequest::where("id", '=', $id)->first();

        if ( ($fundReq != null) && ($fundReq->status != Config::get('constants.options.REJECTED')) ) {
            $fundReq->status = Config::get('constants.options.REJECTED');
            $fundReq->rejection_comment = $request['fr_rejection_msg'];
            $fundReq->status_date = date('Y-m-d H:i:s');

            if ( $fundReq->save() ) {
                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMFundReq_REJECTION_MAIL_SUBJECT'),  
                    'partner_name' => $fundReq->partner->partnerPersonalInfo->first_name . " " . $fundReq->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $fundReq->partner->partnerOrgInfo->comp_name,
                    'project_name' => $fundReq->project_name,
                ];

                $to = $fundReq->partner->business_email;
                Mail::to($to)->send(new GTMFundReqRejectionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'GTM Fund Request Rejected'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in rejecting GTM Fund Request'
            ]);
        }

    }

    public function destroy($id) {

        $fundRequest = GTMFundRequest::find($id);

        if ( $fundRequest != null ) {
            $fundRequest->is_active = 0;

            if ( $fundRequest->save() ) {
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMFundReq_DELETION_MAIL_SUBJECT'),  
                    'partner_title' => $fundRequest->partner->partnerPersonalInfo->title,
                    'partner_name' => $fundRequest->partner->partnerPersonalInfo->first_name . " " . $fundRequest->partner->partnerPersonalInfo->last_name,
                    'project_name' => $fundRequest->project_name,
                ];

                $adminEmail = Config::get('constants.mails.PI_ADMIN_MAIL');
                $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];

                Mail::to($adminEmail)
                    ->cc($cc)
                    ->send(new GTMFundRequestDeleteMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg'   =>  "GTM Fund Request Deleted",
                ]);
            }

            return response()->json([
                'status' => "error",
                'msg'   =>  "Error in deleting GTM Fund Request",
            ]);

        }

        return response()->json([
            'status' => "error",
            'msg'   =>  "GTM Fund Request not found",
        ]);

    }

}
