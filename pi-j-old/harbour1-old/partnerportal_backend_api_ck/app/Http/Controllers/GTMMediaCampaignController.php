<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Helpers\HelperFunctions;
use Illuminate\Support\Facades\Config;
use App\Models\GTMMediaCampaignRequest;
use App\Mail\NewGTMJointCampaignReqMail;
use App\Mail\GTMJointCampaignReqApprovalMail;
use App\Mail\GTMJointCampaignReqDeletionMail;
use App\Mail\GTMJointCampaignReqRejectionMail;
use App\Http\Requests\GTMMediaCampaignRequest as GTMMediaCampaignRequestFR;

class GTMMediaCampaignController extends Controller
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
            $mCampaignRequests = GTMMediaCampaignRequest::where('is_active', '=', 1)->orderByDesc('id')->get();
        } else{
            $mCampaignRequests = GTMMediaCampaignRequest::where('partner_id', '=', $partner->id)->where('is_active', '=', 1)->orderByDesc('id')->get();
        }

        foreach($mCampaignRequests as $req) {

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
            'gtmmediacampaignrequests' => $mCampaignRequests,
        ]);
    }

    public function store(GTMMediaCampaignRequestFR $request)
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

        $mCampaignReq = new GTMMediaCampaignRequest();
        $mCampaignReq->project_name = $validated['gtm_proj_name'];
        $mCampaignReq->gmt_prod_services = $validated['gtm_mcampaign_products'];
        $mCampaignReq->gmt_prod_services_others = $validated['gtm_mcampaign_prod_other'];
        $mCampaignReq->estimated_event_cost = $validated['gtm_mcampaign_proj_cost'];
        $mCampaignReq->objective = $validated['gtm_mcampaign_objective'];
        $mCampaignReq->target_market = $validated['gtm_mcampaign_market'];
        $mCampaignReq->partner_ownership = $validated['gtm_mcampaign_part_ownership'];
        $mCampaignReq->existing_sponsors = $validated['gtm_mcampaign_sponsors'];
        $mCampaignReq->sponsor_deliverables = $validated['gtm_mcampaign_spon_deliverables'];
        $mCampaignReq->pi_deliverables = $validated['gmt_mcampaign_pi_deliverables'];
        $mCampaignReq->fund_requested = $validated['gtm_mcampaign_fund_requested'];
        $mCampaignReq->comments = $validated['gtm_mcampaign_comments'];
        $mCampaignReq->executive_name = $validated['gtm_mcampaign_exe_name'];
        $mCampaignReq->executive_email = $validated['gtm_mcampaign_exe_email'];
        $mCampaignReq->executive_mobile_code = null;
        $mCampaignReq->executive_mobile_no = $validated['gtm_mcampaign_exe_mob'];
        $mCampaignReq->executive_desig = $validated['gtm_mcampaign_exe_desig'];
        $mCampaignReq->marteking_cname = $validated['gtm_mcampaign_mark_name'];
        $mCampaignReq->marteking_cemail = $validated['gtm_mcampaign_mark_email'];
        $mCampaignReq->marteking_cmobile_code = null;
        $mCampaignReq->marteking_cmobile_no = $validated['gtm_mcampaign_mark_mob'];
        $mCampaignReq->success_parameters = $validated['gtm_mcampaign_success_params'];
        $mCampaignReq->success_metrics = $validated['gtm_mcampaign_success_metrics'];
        $mCampaignReq->media_house_online = $validated['gtm_mcampaign_media_online'];
        $mCampaignReq->media_house_offline = $validated['gtm_mcampaign_media_offline'];
        $mCampaignReq->status = 'pending';
        $mCampaignReq->status_date = date('Y-m-d H:i:s');
        $mCampaignReq->partner_id = $partner->id;
        $mCampaignReq->created_at = date('Y-m-d H:i:s');
        $mCampaignReq->updated_at = date('Y-m-d H:i:s');

        if ( $request->hasFile('budget_plan_doc') ) {
            $file = $request->file('budget_plan_doc');
            $tempPath = $request->budget_plan_doc->storeAs('public/uploads/gtm_media_campaign_requests', $file->getClientOriginalName());
            $mCampaignReq->budget_plan_doc_path = str_replace("public/uploads", "public/storage/uploads", $tempPath);
        }

        if ( $mCampaignReq->save() ) {   
    
            $maildetails = [
                'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                'subject' => Config::get('constants.mails.GTMCAMPAIGN_CREATION_MAIL_SUBJECT'),  
                'partner_title' => $mCampaignReq->partner->partnerPersonalInfo->title,
                'partner_name' => $mCampaignReq->partner->partnerPersonalInfo->first_name . " " . $mCampaignReq->partner->partnerPersonalInfo->last_name,
                'project_name' => $mCampaignReq->project_name,
            ];

            $to = Config::get('constants.mails.PI_ADMIN_MAIL');
            $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];
            Mail::to($to)->cc($cc)->send(new NewGTMJointCampaignReqMail($maildetails));

            return response()->json([
                'status' => 'success',
                'msg' => 'GTM Media Campaign Request submitted',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'msg' => 'Error in submitting GTM Media Campaign Request',
        ], 400);   
          
    }


    public function update(GTMMediaCampaignRequestFR $request, $id)
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

        $mCampaignReq = GTMMediaCampaignRequest::where('id', '=', $id)->first();
        if ( $mCampaignReq != null ) {

            $mCampaignReq->project_name = $validated['gtm_proj_name'];
            $mCampaignReq->gmt_prod_services = $validated['gtm_mcampaign_products'];
            if ( isset($validated['gtm_mcampaign_prod_other']) ) {
                $mCampaignReq->gmt_prod_services_others = $validated['gtm_mcampaign_prod_other'];
            }
            $mCampaignReq->estimated_event_cost = $validated['gtm_mcampaign_proj_cost'];
            $mCampaignReq->objective = $validated['gtm_mcampaign_objective'];
            $mCampaignReq->target_market = $validated['gtm_mcampaign_market'];
            $mCampaignReq->partner_ownership = $validated['gtm_mcampaign_part_ownership'];
            $mCampaignReq->existing_sponsors = $validated['gtm_mcampaign_sponsors'];
            $mCampaignReq->sponsor_deliverables = $validated['gtm_mcampaign_spon_deliverables'];
            $mCampaignReq->pi_deliverables = $validated['gmt_mcampaign_pi_deliverables'];
            $mCampaignReq->fund_requested = $validated['gtm_mcampaign_fund_requested'];
            $mCampaignReq->comments = $validated['gtm_mcampaign_comments'];
            $mCampaignReq->executive_name = $validated['gtm_mcampaign_exe_name'];
            $mCampaignReq->executive_email = $validated['gtm_mcampaign_exe_email'];
            $mCampaignReq->executive_mobile_code = null;
            $mCampaignReq->executive_mobile_no = $validated['gtm_mcampaign_exe_mob'];
            $mCampaignReq->executive_desig = $validated['gtm_mcampaign_exe_desig'];
            $mCampaignReq->marteking_cname = $validated['gtm_mcampaign_mark_name'];
            $mCampaignReq->marteking_cemail = $validated['gtm_mcampaign_mark_email'];
            $mCampaignReq->marteking_cmobile_code = null;
            $mCampaignReq->marteking_cmobile_no = $validated['gtm_mcampaign_mark_mob'];
            $mCampaignReq->success_parameters = $validated['gtm_mcampaign_success_params'];
            $mCampaignReq->success_metrics = $validated['gtm_mcampaign_success_metrics'];
            $mCampaignReq->media_house_online = $validated['gtm_mcampaign_media_online'];
            $mCampaignReq->media_house_offline = $validated['gtm_mcampaign_media_offline'];
            $mCampaignReq->partner_id = $partner->id;
            $mCampaignReq->updated_at = date('Y-m-d H:i:s');   
            
            if ( $request->hasFile('budget_plan_doc') ) {
                $file = $request->file('budget_plan_doc');
                $tempPath = $request->budget_plan_doc->storeAs('public/uploads/gtm_media_campaign_requests', $file->getClientOriginalName());
                $mCampaignReq->budget_plan_doc_path = str_replace("public/uploads", "public/storage/uploads", $tempPath);
            }
    

            if ( $mCampaignReq->save() ) {
                return response()->json([
                    'status' => 'success',
                    'msg' => 'Joint Media Campaign Request Updated',
                ]);
            }

            return response()->json([
                'status' => 'error',
                'msg' => 'Error in submitting Joint Media Campaign Request',
            ], 400); 
        }
        
        return response()->json([
            'status' => 'error',
            'msg' => 'Selected Joint Media Campaign not found',
        ], 400); 
       
    }

    public function approve(Request $request, $id) {

        $mCampaignReq = GTMMediaCampaignRequest::where("id", '=', $id)->first();

        if ( ($mCampaignReq != null) && ($mCampaignReq->status != Config::get('constants.options.APPROVED')) ) {
            $mCampaignReq->status = Config::get('constants.options.APPROVED');
            $mCampaignReq->status_date = date('Y-m-d H:i:s');

            if ( $mCampaignReq->save() ) {
                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMCAMPAIGN_APPROVAL_MAIL_SUBJECT'),  
                    'partner_name' => $mCampaignReq->partner->partnerPersonalInfo->first_name . " " . $mCampaignReq->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $mCampaignReq->partner->partnerOrgInfo->comp_name,
                    'project_name' => $mCampaignReq->project_name,
                ];

                $to = $mCampaignReq->partner->business_email;
                Mail::to($to)->send(new GTMJointCampaignReqApprovalMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'Joint Media Campaign Request Approved'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in approving Joint Media Campaign'
            ]);
        }
    }

    public function reject(Request $request, $id) {

        $mCampaignReq = GTMMediaCampaignRequest::where("id", '=', $id)->first();

        if ( ($mCampaignReq != null) && ($mCampaignReq->status != Config::get('constants.options.REJECTED')) ) {
            $mCampaignReq->status = Config::get('constants.options.REJECTED');
            $mCampaignReq->rejection_comment = $request['mcampaign_rejection_msg'];
            $mCampaignReq->status_date = date('Y-m-d H:i:s');

            if ( $mCampaignReq->save() ) {
                //send a mail to partner
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMFundReq_REJECTION_MAIL_SUBJECT'),  
                    'partner_name' => $mCampaignReq->partner->partnerPersonalInfo->first_name . " " . $mCampaignReq->partner->partnerPersonalInfo->last_name,
                    //'partner_org_name' => $mCampaignReq->partner->partnerOrgInfo->comp_name,
                    'project_name' => $mCampaignReq->project_name,
                ];

                $to = $mCampaignReq->partner->business_email;
                Mail::to($to)->send(new GTMJointCampaignReqRejectionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg' => 'Joint Media Campaign Request Rejected'
                ]);
            }
            return response()->json([
                'status' => "error",
                'msg' => 'Error in rejecting Joint Media Campaign Request'
            ]);
        }


    }
    public function destroy($id) {

        $mCampaignReq = GTMMediaCampaignRequest::find($id);

        if ( $mCampaignReq != null ) {
            $mCampaignReq->is_active = 0;

            if ( $mCampaignReq->save() ) {
                $maildetails = [
                    'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                    'subject' => Config::get('constants.mails.GTMCAMPAIGN_DELETION_MAIL_SUBJECT'),  
                    'partner_title' => $mCampaignReq->partner->partnerPersonalInfo->title,
                    'partner_name' => $mCampaignReq->partner->partnerPersonalInfo->first_name . " " . $mCampaignReq->partner->partnerPersonalInfo->last_name,
                    'project_name' => $mCampaignReq->project_name,
                ];

                $adminEmail = Config::get('constants.mails.PI_ADMIN_MAIL');
                $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];

                Mail::to($adminEmail)
                    ->cc($cc)
                    ->send(new GTMJointCampaignReqDeletionMail($maildetails));

                return response()->json([
                    'status' => "success",
                    'msg'   =>  "Joint Media Campaign Request Deleted",
                ]);
            }

            return response()->json([
                'status' => "error",
                'msg'   =>  "Error in deleting Joint Media Campaign Request",
            ]);

        }

        return response()->json([
            'status' => "error",
            'msg'   =>  "Joint Media Campaign Request not found",
        ]);

    }
}
