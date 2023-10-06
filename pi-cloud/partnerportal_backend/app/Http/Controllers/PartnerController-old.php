<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationApprovalMail;
use Illuminate\Support\Facades\Config;
use App\Mail\RegistrationRejectionMail;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function test() {
        return response()->json(['status' => 'ok', 'msg' => 'the api is working']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              
        $partners = Partner::where("is_verified", 0)
			    ->orderByDesc('id')
                            ->with('PartnerPersonalInfo')
                            ->with('PartnerOrgInfo')
                            ->with('PartnerTechInfo')
                            ->get();
   
        return response()->json(['status' => 'ok', 'partners' => $partners]);
    }

    public function partners(Request $request)
    {
       // dd($request->status);

       if ($request->status === 'approved') {
            $partners = Partner::where([["is_verified",'=', Config::get('constants.partners_is_verified.APPROVED')],['user_type', '!=', 'admin']])
	    ->orderByDesc('id')
            ->with('PartnerPersonalInfo')
            ->with('PartnerOrgInfo')
            ->with('PartnerTechInfo')
            ->get();
       } else if ($request->status === 'rejected') {
            $partners = Partner::where([["is_verified",'=', Config::get('constants.partners_is_verified.REJECTED')],['user_type', '!=', 'admin']])
	    ->orderByDesc('id')
            ->with('PartnerPersonalInfo')
            ->with('PartnerOrgInfo')
            ->with('PartnerTechInfo')
            ->get();
       }else {

            $partners = Partner::where([["is_verified",'=', Config::get('constants.partners_is_verified.PENDING')],['user_type', '!=', 'admin']])
	    ->orderByDesc('id')
            ->with('PartnerPersonalInfo')
            ->with('PartnerOrgInfo')
            ->with('PartnerTechInfo')
            ->get();
	    
	    
            foreach ($partners as $part) {
		
                $part['certificate'] = "";
                $path = public_path('certificates/');
                $certFileName = $path."certificate_".$part->partner_ref_no.".pdf";

                if (is_file($certFileName)) {
                    $part['certificate'] = url("certificates/certificate_".$part->partner_ref_no.".pdf");
                }
            }
       }
        foreach ( $partners as $part ) {
            if ( $part->partnerOrgInfo != null ) {
                $part->partnerOrgInfo->client_base = str_replace(array('[',']','\\','"'), "", $part->partnerOrgInfo->client_base);
                $part->partnerOrgInfo->client_base = str_replace(array(','), ", ", $part->partnerOrgInfo->client_base);
            }

            if ( $part->partnerTechInfo != null ) {
                $part->partnerTechInfo->use_case_expertise = str_replace(array('[',']','\\','"'), "", $part->partnerTechInfo->use_case_expertise);
                $part->partnerTechInfo->use_case_expertise = str_replace(array(','), ", ", $part->partnerTechInfo->use_case_expertise);

                $part->partnerTechInfo->technology_expertise = str_replace(array('[',']','\\','"'), "", $part->partnerTechInfo->technology_expertise);
                $part->partnerTechInfo->technology_expertise = str_replace(array(','), ", ", $part->partnerTechInfo->technology_expertise);

                $part->partnerTechInfo->professional_services_offered = str_replace(array('[',']','\\','"'), "", $part->partnerTechInfo->professional_services_offered);
                $part->partnerTechInfo->professional_services_offered = str_replace(array(','), ", ", $part->partnerTechInfo->professional_services_offered);

                $part->partnerTechInfo->interested_ser_prod_at_pi = str_replace(array('[',']','\\','"'), "", $part->partnerTechInfo->interested_ser_prod_at_pi);
                $part->partnerTechInfo->interested_ser_prod_at_pi = str_replace(array(','), ", ", $part->partnerTechInfo->interested_ser_prod_at_pi);
                
            }
        }    
        return response()->json(['status' => 'ok', 'partners' => $partners]);
        
    }

    public function approvedindex()
    {
        //$partners = Partner::where("is_verified", 0)->get();
        $partners = Partner::where("is_verified", 2)
			    ->orderByDesc('id')
                            ->with('PartnerPersonalInfo')
                            ->with('PartnerOrgInfo')
                            ->with('PartnerTechInfo')
                            ->get();

        return response()->json(['status' => 'ok', 'partners' => $partners]);
    }

    public function rejectedindex()
    {
        //$partners = Partner::where("is_verified", 0)->get();
        $partners = Partner::where("is_verified", 3)
			    ->orderByDesc('id')
                            ->with('PartnerPersonalInfo')
                            ->with('PartnerOrgInfo')
                            ->with('PartnerTechInfo')
                            ->get();

        return response()->json(['status' => 'ok', 'partners' => $partners]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rbp)
    {
         $partner = Partner::where('partner_ref_no', '=', $rbp)
                            ->with('PartnerPersonalInfo')
                            ->with('PartnerOrgInfo')
                            ->with('PartnerTechInfo')
                            ->first();
        // $partner = Partner::where('id', '=', $rbp)
        //                      ->first();
        if ( $partner == null ) {
            return response()->json([
                "status" => "error",
                "msg" => "Partner not found",
            ]);
        }
        
        $partner['certificate'] = "";
        $path = public_path('certificates/');
        $certFileName = $path."certificate_".$partner->partner_ref_no.".pdf";
            
        if (is_file($certFileName)) {
            $partner['certificate'] = url("certificates/certificate_".$partner->partner_ref_no.".pdf");
        }    

        return response()->json([
            "status" => "success",
            "msg"   =>  "Partner found",
            "partnerdetails" => $partner,
        ]);
    }

    /**
     * Display the authenticated resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        $partner = Partner::where('business_email', '=', $user->email)
                    ->with('PartnerPersonalInfo')
                    ->with('PartnerOrgInfo')
                    ->with('PartnerTechInfo')
                    ->first();  

        if ( $partner == null ) {
            return response()->json([
                "status" => "error",
                "msg" => "Partner not found",
            ]);
        }
        
        $partner['certificate'] = "";
        $path = public_path('certificates/');
        $certFileName = $path."certificate_".$partner->partner_ref_no.".pdf";
            
        if (is_file($certFileName)) {
            $partner['certificate'] = url("certificates/certificate_".$partner->partner_ref_no.".pdf");
        }    

        return response()->json([
            "status" => "success",
            "msg"   =>  "Partner found",
            "partnerprofile" => $partner,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $partner)
    {
        
    }

    public function updatepersonalinfo(Request $request)
    {

        $partner = Partner::where("partner_ref_no", '=', $request->partner_ref)->first();

        if ($partner != null) {
            $personalinfo = $partner->partnerPersonalInfo;

            if ($personalinfo != null) {
                $personalinfo->designation = $request->jobtitle;
                $personalinfo->mobile_number = $request->partnermobile;

                if ($personalinfo->save()) {
                    return response()->json([
                        "status" => "success",
                        "msg" => "Profile updated successfully",
                    ]);
                }

                return response()->json([
                    "status" => "error",
                    "msg" => "Error in updating profile",
                ]);
            }
            
        }
        return response()->json([
            "status" => "error",
            "msg" => "Partner not found ",
            'ref' =>$request->partner_ref,
            
        ]);
        
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

    public function approve(Request $request, $partner)
    {

        //if ( $file = $request->file('certdoc') ) {
            //validate the file
            $validator = Validator::make($request->all(), [
                'certdoc' => 'required|mimes:pdf',
            ]);
 
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error', 'message' => 'Approval request failed. Attachments missing or not in pdf formats.',
                ], 400); 
            }

            $partner = Partner::where('id', '=', $partner)->first();

            if ($partner != null) {
                $file = $request->file('certdoc');
                $path = $file->storeAs('certificates', $file->getClientOriginalName());
                //$name = $file->getClientOriginalName();

                $partner->is_verified = Config::get('constants.partners_is_verified.APPROVED');
                $partner->status = Config::get('constants.options.APPROVED');

                if ($partner->save()) {
                    $maildetails = [
                        'subject' => Config::get('constants.mails.PARTNER_APPROVAL_MAIL_SUBJECT'), 
                        'partner_name' => $partner->partnerOrgInfo->comp_name,
                        'partner_admin_name' => $partner->partnerPersonalInfo->first_name . " " . $partner->partnerPersonalInfo->last_name,
                        'cert_path' => $path,
                        'partner_email' => $partner->business_email,
                        'partner_pass' => $partner->partner_ref_no,
                    ];

                    $to = $partner->business_email;
                    Mail::to($to)->send(new RegistrationApprovalMail($maildetails));

                } else {
                    return response()->json([
                        'status' => 'error', 'message' => 'Error in approving the partner registration.',
                    ], 400);
                }
            }

        // }else {
        //     $name = "file not found";
        // }

        return response()->json(['status' => 'ok', 'partner' => $partner, 'file' => $path]);
    }

    public function reject(Request $request, $partner)
    {
        //$request->validate(['' => '',])

        $partner = Partner::find($partner);
        if ($partner != null) {
            $partner->is_verified = Config::get('constants.partners_is_verified.REJECTED');
            $partner->status = Config::get('constants.options.REJECTED');
            $partner->rejection_comment = $request->msg;
            if ($partner->save()) {
                $maildetails = [
                    'subject' => Config::get('constants.mails.PARTNER_REJECTION_MAIL_SUBJECT'),  
                    'partner_ref_no' => $partner->partner_ref_no,
                    'partner_admin_name' => $partner->partnerPersonalInfo->first_name . " " . $partner->partnerPersonalInfo->last_name,
                ];
        
                $to = $partner->business_email;
                Mail::to($to)->send(new RegistrationRejectionMail($maildetails));
        
                //$this->sendRejectionEmail($request, $partner);
            }
        }  

        return response()->json(['status' => 'ok', 'partner' => $partner]);
    }

    public function sendRejectionEmail(Request $request, $partner) {
        //$partner = Partner::findOrFail($partner);

        $maildetails = [
            'subject' => Config::get('constants.mails.PARTNER_REJECTION_MAIL_SUBJECT'),  
            'body' =>   $request->msg,
        ];

        //$to = $partner->business_email;
        $to = Config::get('constants.mails.MAIL_TEST_TO');
        $cc = Config::get('constants.mails.PI_ADMIN_MAIL');
        Mail::to($to)->cc($cc)->send(new RegistrationRejectionMail($maildetails));

        return ;
    }


    public function htmlPdf(Request $request, $partner ) {

        $partner = Partner::where('id', '=', $partner)->first();

        if ($partner != null) {

            $data=[
                'company' => $partner->partnerOrgInfo->comp_name,
                'expdate' => $request->expdate,
                'partnerrefno' => $partner->partner_ref_no,
            ];

            $pdf = PDF::loadView('htmlView', $data);
            // $customPaper = array(0,0,500,250);
            // $pdf->setPaper($customPaper);
            $pdf->setPaper('legal', 'landscape');    

            $path = public_path('certificates/');
            //$path = storage_path('app/certificates/');
            $filename = "certificate_".$partner->partner_ref_no.".pdf";
            $pdf->save($path . '/' . $filename);
            $generated_pdf_link = url('certificates/'.$filename);
            return response()->json($generated_pdf_link);

        } else{
            return response()->json([
                'status' => 'error',
                'message' => 'Partner not found',
            ]);
        }

        

        
  
    }

    
}
