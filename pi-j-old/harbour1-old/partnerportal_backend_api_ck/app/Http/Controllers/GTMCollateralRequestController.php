<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\GTMCollateralRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Helpers\HelperFunctions;
use Illuminate\Support\Facades\Config;
use App\Mail\GTMCollateralApprovalMail;
use App\Mail\GTMCollateralDeletionMail;
use App\Mail\GTMCollateralRejectionMail;
use App\Mail\NewGTMJMCollateralRequestMail;
use App\Http\Requests\GTMMediaCollateralRequest;

class GTMCollateralRequestController extends Controller
{

    public function index() {

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
            $collateralRequests = GTMCollateralRequest::where('is_active', '=', 1)->orderByDesc('id')->get();
        } else{
            $collateralRequests = GTMCollateralRequest::where('partner_id', '=', $partner->id)->where('is_active', '=', 1)->orderByDesc('id')->get();
        }

        foreach($collateralRequests as $req) {

            if ( $partner->id == $req->partner_id ) {
                $req['isEditable'] = "true";
            }else {
                $req['isEditable'] = "false";
            }
        }

        return response()->json([
            'status' => 'success',
            'gtmcollateralrequests' => $collateralRequests,
        ]);
    }

    public function store(GTMMediaCollateralRequest $request)
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

        $collateralTypes = implode(",", $validated['gtm_collateral_types']);

        $gtmCollateral = new GTMCollateralRequest();
        $gtmCollateral->event_name = $validated['gtm_event_name'];
        $gtmCollateral->collateral_name = $validated['gtm_collateral_name'];
        $gtmCollateral->gtm_prod_services = $validated['gtm_collateral_product'];
        $gtmCollateral->gtm_prod_services_others = $validated['gtm_collateral_prod_other'];
        $gtmCollateral->collateral_type = $collateralTypes;
        $gtmCollateral->objective = $validated['gtm_collateral_objective'];
        $gtmCollateral->target_audience = $validated['gtm_target_audience'];
        $gtmCollateral->status = "pending";
        $gtmCollateral->status_date = date('Y-m-d H:i:s');
        //$gtmFundReq->budget_plan_doc_path = "";
        $gtmCollateral->partner_id = $partner->id;

       

        if ( $gtmCollateral->save() ) {

            // if ( $request->hasFile('budget_plan_doc') ) {
            //     $file = $request->file('budget_plan_doc');
            //     $request->budget_plan_doc->storeAs('public/uploads/gtm_fund_requests', $file->getClientOriginalName());
            // }
            $prodOrServices = "";
            if ( strtolower($gtmCollateral->gtm_prod_services) != "other" ) {
                $prodOrServices = $gtmCollateral->gtm_prod_services;
            }else {
                $prodOrServices = $gtmCollateral->gtm_prod_services . " (" .$gtmCollateral->gtm_prod_services_others . ") ";
            }

            $maildetails = [
                'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                'subject' => Config::get('constants.mails.GTMCOLLATERAL_CREATION_MAIL_SUBJECT'),  
                'partner_title' => $gtmCollateral->partner->partnerPersonalInfo->title,
                'partner_name' => $gtmCollateral->partner->partnerPersonalInfo->first_name . " " . $gtmCollateral->partner->partnerPersonalInfo->last_name,
                //'partner_org_name' => $fundReq->partner->partnerOrgInfo->comp_name,
                'product_services' => $prodOrServices,
                'event_name'    => $gtmCollateral->event_name,
            ];

            $to = Config::get('constants.mails.PI_ADMIN_MAIL');
            $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
            Mail::to($to)->cc($cc)->send(new NewGTMJMCollateralRequestMail($maildetails));
    
            return response()->json([
                'status' => 'success',
                'msg' => 'GTM Media Collateral Request submitted',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'msg' => 'Error in submitting GTM Media Collateral Request',
        ], 400);   
          
    }

    public function update(GTMMediaCollateralRequest $request, $id)
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

        $gtmCollateral = GTMCollateralRequest::where('id', '=', $id)->first();
        if ( $gtmCollateral != null ) {
            // $gtmCollateral->project_name = $validated['gtm_event_name'];
            // $gtmCollateral->gmt_prod_services = $validated['gtm_collateral_product'];

            // if ( isset($validated['gtm_collateral_prod_other']) ) {
            //     $gtmCollateral->gmt_prod_services_others = $validated['gtm_collateral_prod_other'];
            // }
            $collateralTypes = implode(",", $validated['gtm_collateral_types']);
            $gtmCollateral->event_name = $validated['gtm_event_name'];
            $gtmCollateral->collateral_name = $validated['gtm_collateral_name'];
            $gtmCollateral->gtm_prod_services = $validated['gtm_collateral_product'];
            $gtmCollateral->gtm_prod_services_others = $validated['gtm_collateral_prod_other'];
            $gtmCollateral->collateral_type = $collateralTypes;
            $gtmCollateral->objective = $validated['gtm_collateral_objective'];
            $gtmCollateral->target_audience = $validated['gtm_target_audience'];
            

            if ( $gtmCollateral->save() ) {
                return response()->json([
                    'status' => 'success',
                    'msg' => 'GTM Media Collateral Request updated',
                ]);
            }

            return response()->json([
                'status' => 'error',
                'msg' => 'Error in updating GTM Media Collateral Request',
            ], 400); 
        }
        
        return response()->json([
            'status' => 'error',
            'msg' => 'Selected GTM Media Collateral Request not found',
        ], 400); 
       
    }

    public function approve(Request $request, $id) {

        $collateralRequests = GTMCollateralRequest::where("id", '=', $id)->first();

        if ( ($collateralRequests != null) && ($collateralRequests->status != Config::get('constants.options.APPROVED')) ) {
            $collateralRequests->status = Config::get('constants.options.APPROVED');
            $collateralRequests->status_date = date('Y-m-d H:i:s');

            if ( $collateralRequests->save() ) {

                $prodOrServices = "";
                if ( strtolower($collateralRequests->gtm_prod_services) != "other" ) {
                    $prodOrServices = $collateralRequests->gtm_prod_services;
                }else {
                    $prodOrServices = $collateralRequests->gtm_prod_services . " (" .$collateralRequests->gtm_prod_services_others . ") ";
                }
                
                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMCOLLATERAL_APPROVAL_MAIL_SUBJECT'),  
                    'partner_name' => $collateralRequests->partner->partnerPersonalInfo->first_name . " " . $collateralRequests->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $collateralRequests->partner->partnerOrgInfo->comp_name,
                    'product_services' => $prodOrServices,
                    'event_name'    => $collateralRequests->event_name,
                ];

                $to = $collateralRequests->partner->business_email;
                Mail::to($to)->send(new GTMCollateralApprovalMail($maildetails));
                return response()->json([
                    'status' => "success",
                    'msg' => 'GTM Joint Media Collateral Request Approved'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in approving GTM Joint Media Collateral'
            ]);
        }
    }

    public function reject(Request $request, $id) {

        $collateralRequests = GTMCollateralRequest::where("id", '=', $id)->first();

        if ( ($collateralRequests != null) && ($collateralRequests->status != Config::get('constants.options.REJECTED')) ) {
            $collateralRequests->status = Config::get('constants.options.REJECTED');
            $collateralRequests->rejection_comment = $request['collateral_rejection_msg'];
            $collateralRequests->status_date = date('Y-m-d H:i:s');

            if ( $collateralRequests->save() ) {
                $prodOrServices = "";
                if ( strtolower($collateralRequests->gtm_prod_services) != "other" ) {
                    $prodOrServices = $collateralRequests->gtm_prod_services;
                }else {
                    $prodOrServices = $collateralRequests->gtm_prod_services . " (" .$collateralRequests->gtm_prod_services_others . ") ";
                }

                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMCOLLATERAL_REJECTION_MAIL_SUBJECT'),  
                    'partner_name' => $collateralRequests->partner->partnerPersonalInfo->first_name . " " . $collateralRequests->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $collateralRequests->partner->partnerOrgInfo->comp_name,
                    'product_services' => $prodOrServices,
                    'event_name'    => $collateralRequests->event_name,
                ];

                $to = $collateralRequests->partner->business_email;
                Mail::to($to)->send(new GTMCollateralRejectionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'GTM Joint Media Collateral Request Rejected'
                ]);
            }

            return response()->json([
                'status' => "error",
                'msg' => 'Error in rejecting GTM Joint Media Collateral Request'
            ]);
        }

    }

    public function destroy($id) {

        $collateralRequests = GTMCollateralRequest::find($id);

        if ( $collateralRequests != null ) {
            $collateralRequests->is_active = 0;

            if ( $collateralRequests->save() ) {
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMCOLLATERAL_DELETION_MAIL_SUBJECT'),  
                    'partner_title' => $collateralRequests->partner->partnerPersonalInfo->title,
                    'partner_name' => $collateralRequests->partner->partnerPersonalInfo->first_name . " " . $collateralRequests->partner->partnerPersonalInfo->last_name,
                    'event_name'    => $collateralRequests->event_name,
                ];

                $adminEmail = Config::get('constants.mails.PI_ADMIN_MAIL');
                $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];

                Mail::to($adminEmail)
                    ->cc($cc)
                    ->send(new GTMCollateralDeletionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg'   =>  "Joint Media Collateral Request Deleted",
                ]);
            }

            return response()->json([
                'status' => "error",
                'msg'   =>  "Error in deleting Joint Media Collateral Request",
            ]);

        }

        return response()->json([
            'status' => "error",
            'msg'   =>  "Joint Media Collateral Request not found",
        ]);

    }
    
}
