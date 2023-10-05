<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\GTMJointEventRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Helpers\HelperFunctions;
use App\Mail\NewGTMJointEventReqMail;
use Illuminate\Support\Facades\Config;
use App\Mail\GTMJointEventReqApprovalMail;
use App\Mail\GTMJointEventReqDeletionMail;
use App\Mail\GTMJointEventReqRejectionMail;
use App\Http\Requests\GTMJointEventFormRequest;

class GTMJointEventRequestController extends Controller
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
            $gtmJErequests = GTMJointEventRequest::where('is_active', '=', 1)->orderByDesc('id')->get();
        } else{
            $gtmJErequests = GTMJointEventRequest::where('partner_id', '=', $partner->id)->where('is_active', '=', 1)->orderByDesc('id')->get();
        }

        foreach($gtmJErequests as $req) {

            if ( $partner->id == $req->partner_id ) {
                $req['isEditable'] = "true";
            }else {
                $req['isEditable'] = "false";
            }
        }

        return response()->json([
            'status' => 'success',
            'gtmJErequests' => $gtmJErequests,
        ]);
    }

    public function store(GTMJointEventFormRequest $request)
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

        $gtmJEReq = new GTMJointEventRequest();
        $gtmJEReq->event_name = $validated['je_event_name'];
        $gtmJEReq->gmt_prod_services = $validated['gtm_je_products'];
        $gtmJEReq->gmt_prod_services_others = $validated['gtm_je_prod_other'];
        $gtmJEReq->estimated_event_cost = $validated['je_proj_cost'];
        $gtmJEReq->objective = $validated['je_objective'];
        $gtmJEReq->target_market = $validated['je_audience'];
        //$gtmJEReq->partner_ownership = $validated['gtm_fundreq_part_ownership'];
        $gtmJEReq->existing_sponsors = $validated['je_existing_sponsors'];
        $gtmJEReq->sponsor_deliverables = $validated['je_part_deliverables'];
        $gtmJEReq->pi_deliverables = $validated['je_pi_deliverables'];
        //$gtmJEReq->fund_requested = $validated['gtm_fundreq_fund_requested'];
        $gtmJEReq->comments = $validated['je_comments'];
        $gtmJEReq->executive_name = $validated['je_exec_name'];
        $gtmJEReq->executive_email = $validated['je_exec_email'];
        $gtmJEReq->executive_mobile_code = null;
        $gtmJEReq->executive_mobile_no = $validated['je_exec_mob'];
        $gtmJEReq->executive_desig = $validated['je_exec_desig'];
        $gtmJEReq->marteking_cname = $validated['je_mark_name'];
        $gtmJEReq->marteking_cemail = $validated['je_mark_email'];
        $gtmJEReq->marteking_cmobile_code = null;
        $gtmJEReq->marteking_cmobile_no = $validated['je_mark_mob'];
        $gtmJEReq->success_parameters = $validated['je_success_params'];
        $gtmJEReq->success_metrics = $validated['je_success_metrics'];
        $gtmJEReq->loc_covered = $validated['je_loc'];
        $gtmJEReq->social_media = $validated['je_social_media'];
        $gtmJEReq->print_media = $validated['je_print_media'];
        $gtmJEReq->institutional_building = $validated['je_inst_branding'];
        $gtmJEReq->status = "pending";
        $gtmJEReq->status_date = date('Y-m-d H:i:s');
        $gtmJEReq->partner_id = $partner->id;


        if ( $request->hasFile('budget_plan_doc') ) {
            $file = $request->file('budget_plan_doc');
            $tempPath = $request->budget_plan_doc->storeAs('public/uploads/gtm_joint_event_requests', $file->getClientOriginalName());
            //$gtmJEReq->budget_plan_doc_path = str_replace("public/uploads", "public/storage/uploads", $tempPath);
            $gtmJEReq->budget_plan_doc_path = str_replace("public/uploads", "storage/app/public/uploads", $tempPath);
        }

        if ( $gtmJEReq->save() ) {

            $prodOrServices = "";
                
            if ( (strtolower($gtmJEReq->gmt_prod_services) == "other") && ($gtmJEReq->gtm_prod_services_others != null) ) {
                $prodOrServices = $gtmJEReq->gmt_prod_services . " (" .$gtmJEReq->gtm_prod_services_others . ") ";
            }else {
                $prodOrServices = $gtmJEReq->gmt_prod_services ;
            }

            $maildetails = [
                'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                'subject' => Config::get('constants.mails.GTMJEReq_CREATION_MAIL_SUBJECT'),  
                'partner_title' => $gtmJEReq->partner->partnerPersonalInfo->title,
                'partner_name' => $gtmJEReq->partner->partnerPersonalInfo->first_name . " " . $gtmJEReq->partner->partnerPersonalInfo->last_name,
                'product_services' => $prodOrServices,
                'event_name'    => $gtmJEReq->event_name,
            ];

            $to = Config::get('constants.mails.PI_ADMIN_MAIL');
            $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
            Mail::to($to)->cc($cc)->send(new NewGTMJointEventReqMail($maildetails));
   
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

    public function update(GTMJointEventFormRequest $request, $id)
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

        $gtmJEReq = GTMJointEventRequest::where('id', '=', $id)->first();
        if ( $gtmJEReq != null ) {
            $gtmJEReq->event_name = $validated['je_event_name'];
            $gtmJEReq->gmt_prod_services = $validated['gtm_je_products'];
            $gtmJEReq->gmt_prod_services_others = $validated['gtm_je_prod_other'];
            $gtmJEReq->estimated_event_cost = $validated['je_proj_cost'];
            $gtmJEReq->objective = $validated['je_objective'];
            $gtmJEReq->target_market = $validated['je_audience'];
            //$gtmJEReq->partner_ownership = $validated['gtm_fundreq_part_ownership'];
            $gtmJEReq->existing_sponsors = $validated['je_existing_sponsors'];
            $gtmJEReq->sponsor_deliverables = $validated['je_part_deliverables'];
            $gtmJEReq->pi_deliverables = $validated['je_pi_deliverables'];
            //$gtmJEReq->fund_requested = $validated['gtm_fundreq_fund_requested'];
            $gtmJEReq->comments = $validated['je_comments'];
            $gtmJEReq->executive_name = $validated['je_exec_name'];
            $gtmJEReq->executive_email = $validated['je_exec_email'];
            $gtmJEReq->executive_mobile_code = null;
            $gtmJEReq->executive_mobile_no = $validated['je_exec_mob'];
            $gtmJEReq->executive_desig = $validated['je_exec_desig'];
            $gtmJEReq->marteking_cname = $validated['je_mark_name'];
            $gtmJEReq->marteking_cemail = $validated['je_mark_email'];
            $gtmJEReq->marteking_cmobile_code = null;
            $gtmJEReq->marteking_cmobile_no = $validated['je_mark_mob'];
            $gtmJEReq->success_parameters = $validated['je_success_params'];
            $gtmJEReq->success_metrics = $validated['je_success_metrics'];
            $gtmJEReq->loc_covered = $validated['je_loc'];
            $gtmJEReq->social_media = $validated['je_social_media'];
            $gtmJEReq->print_media = $validated['je_print_media'];
            $gtmJEReq->institutional_building = $validated['je_inst_branding'];
           
            $gtmJEReq->partner_id = $partner->id;

            if ( $request->hasFile('budget_plan_doc') ) {
                $file = $request->file('budget_plan_doc');
                $tempPath = $request->budget_plan_doc->storeAs('public/uploads/gtm_joint_event_requests', $file->getClientOriginalName());
                //$gtmJEReq->budget_plan_doc_path = str_replace("public/uploads", "public/storage/uploads", $tempPath);
                $gtmJEReq->budget_plan_doc_path = str_replace("public/uploads", "storage/app/public/uploads", $tempPath);
            }

            if ( $gtmJEReq->save() ) {
                return response()->json([
                    'status' => 'success',
                    'msg' => 'GTM Joint Event Request updated',
                    //"hasFile" => $hasFile,
                ]);
            }

            return response()->json([
                'status' => 'error',
                'msg' => 'Error in updating GTM Joint Event Request',
            ], 400); 
        }
        
        return response()->json([
            'status' => 'error',
            'msg' => 'Selected Joint Event Request not found',
        ], 400); 
       
    }

    public function approve(Request $request, $id) {

        $GTMJEReq = GTMJointEventRequest::where("id", '=', $id)->first();

        if ( ($GTMJEReq != null) && ($GTMJEReq->status != Config::get('constants.options.APPROVED')) ) {
            $GTMJEReq->status = Config::get('constants.options.APPROVED');
            $GTMJEReq->status_date = date('Y-m-d H:i:s');

            if ( $GTMJEReq->save() ) {
                
                $prodOrServices = "";
                
                if ( (strtolower($GTMJEReq->gmt_prod_services) == "other") && ($GTMJEReq->gtm_prod_services_others != null) ) {
                    $prodOrServices = $GTMJEReq->gmt_prod_services . " (" .$GTMJEReq->gtm_prod_services_others . ") ";
                }else {
                    $prodOrServices = $GTMJEReq->gmt_prod_services ;
                }

                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMJEReq_APPROVAL_MAIL_SUBJECT'),  
                    'partner_name' => $GTMJEReq->partner->partnerPersonalInfo->first_name . " " . $GTMJEReq->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $GTMJEReq->partner->partnerOrgInfo->comp_name,
                    'product_services' => $prodOrServices,
                    'event_name'    => $GTMJEReq->event_name,
                ];

                $to = $GTMJEReq->partner->business_email;
                Mail::to($to)->send(new GTMJointEventReqApprovalMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'GTM Joint Event Request Approved'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in approving GTM Joint Event Request'
            ]);
        }
    }

    public function reject(Request $request, $id) {

        $GTMJEReq = GTMJointEventRequest::where("id", '=', $id)->first();

        if ( ($GTMJEReq != null) && ($GTMJEReq->status != Config::get('constants.options.REJECTED')) ) {
            $GTMJEReq->status = Config::get('constants.options.REJECTED');
            $GTMJEReq->rejection_comment = $request['je_rejection_msg'];
            $GTMJEReq->status_date = date('Y-m-d H:i:s');

            if ( $GTMJEReq->save() ) {

                $prodOrServices = "";
                
                if ( (strtolower($GTMJEReq->gmt_prod_services) == "other") && ($GTMJEReq->gtm_prod_services_others != null) ) {
                    $prodOrServices = $GTMJEReq->gmt_prod_services . " (" .$GTMJEReq->gtm_prod_services_others . ") ";
                }else {
                    $prodOrServices = $GTMJEReq->gmt_prod_services ;
                }

                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMJEReq_REJECTION_MAIL_SUBJECT'),  
                    'partner_name' => $GTMJEReq->partner->partnerPersonalInfo->first_name . " " . $GTMJEReq->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $collateralRequests->partner->partnerOrgInfo->comp_name,
                    'product_services' => $prodOrServices,
                    'event_name'    => $GTMJEReq->event_name,
                ];

                $to = $GTMJEReq->partner->business_email;
                Mail::to($to)->send(new GTMJointEventReqRejectionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'GTM Joint Event Request Rejected'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in rejecting GTM Joint Event Request'
            ]);
        }

    }

    public function destroy($id) {

        $GTMJEReq = GTMJointEventRequest::find($id);

        if ( $GTMJEReq != null ) {
            $GTMJEReq->is_active = 0;

            if ( $GTMJEReq->save() ) {
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMJEReq_DELETION_MAIL_SUBJECT'),  
                    'partner_title' => $GTMJEReq->partner->partnerPersonalInfo->title,
                    'partner_name' => $GTMJEReq->partner->partnerPersonalInfo->first_name . " " . $GTMJEReq->partner->partnerPersonalInfo->last_name,
                    'event_name'    => $GTMJEReq->event_name,
                ];

                $adminEmail = Config::get('constants.mails.PI_ADMIN_MAIL');
                $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];

                Mail::to($adminEmail)
                    ->cc($cc)
                    ->send(new GTMJointEventReqDeletionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg'   =>  "Joint Event Request Deleted",
                ]);
            }

            return response()->json([
                'status' => "error",
                'msg'   =>  "Error in deleting Joint Event Collateral Request",
            ]);

        }

        return response()->json([
            'status' => "error",
            'msg'   =>  "Joint Event Request not found",
        ]);

    }
}
