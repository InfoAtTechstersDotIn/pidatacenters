<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\State;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\Relationowner;
use App\Models\PartnerOrgInfo;
use App\Models\PartnerTechInfo;
use Illuminate\Support\Facades\DB;
use App\Models\PartnerPersonalInfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Helpers\HelperFunctions;
use App\Jobs\SendRegistrationEmailJob;
use Illuminate\Support\Facades\Config;
use App\Mail\RegistrationInitiationMail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    /*
    Checks if the business email entered during the partner registration process
    is already registered. Registration with the same email will not be allowed.
    */
    public function checkemail(Request $request) {

 
        $validator = Validator::make($request->all(), [
            'p_bemail' => 'required|email',
        ]);

        if ($validator->fails()) {

            return Response::json([
                'status' => 'error',
                'status_code' => 200,
                'message' => $validator->errors->first('p_bemail'),
            ], 201);
        }

        //$partner = Partner::where('business_email', '=', $request->p_bemail)->first();
        $partner = HelperFunctions::getPartnerByEmail($request->p_bemail);

        if ( $partner != null ) {

            return Response::json([
                'status' => 'error',
                'status_code' => 401,
                'message'=>'Business Email-Id already registred',
            ],201);
        } else {
            
            return Response::json([
                'status' => 'success',
                'status_code' => 400,
                'message'=>'Business Email-Id does not exist.',
            ],201);

        }
    }

    public function register(Request $request) {

        try{

            $validator = Validator::make($request->all(), [
                //'p_bemail' => "required|email|unique:partners,business_email",
                'p_bemail' => "required|email",
                'phone' => 'required|digits:10',
		        'agreement_doc' => "required|mimes:pdf",
                'nda' => "required|mimes:pdf",
            ]);

            if ($validator->fails()) {
                return Response::json([
                    'status' => 'error',
                    'status_code' => 200,
                    'message' => $validator->errors(),
                ], 201);
            }

            $input = $request->all();
            $input['p_bemail'] = trim($input['p_bemail']);

            //get the random number(Unique ID)
            $uniqueId = HelperFunctions::uniqueId();

            //check Bussiness mail id exists or not
            //$record = Partner::where('business_email', '=', $input['p_bemail'])->first();
            $record = HelperFunctions::getPartnerByEmail($input['p_bemail']);

            if ($record != null) {
                return Response::json([
                    'status' => 'error',
                    'status_code' => 401,
                    'message'=>'Business Email-Id already registred',
                ],201);
            }

            //Create Partners object
            $partner = Partner::create([
                'partner_ref_no' => $uniqueId,
                'password' => bcrypt($uniqueId),
                'business_email' => $request->p_bemail,
                'mobile_code' => $request->m_code,
                'mobile_number' => $request->phone,
                'email' => $request->p_bemail,
                'user_type' => Config::get('constants.user_types.PARTNERADMIN'),
            ]);

            if ($partner != null) {

                $user = User::create([
                    'name' => '',
                    'email' => $request->p_bemail,
                    'password' => $partner->password,
                    'user_type' => Config::get('constants.user_types.PARTNERADMIN'),
                    'user_is_active' => 1,
                ]);

                $partnerPersonal = PartnerPersonalInfo::create([
                    'partner_ref_no' => $partner->partner_ref_no,
                    'title' => $request->titledrpdwn,
                    'first_name' => $request->p_fname,
                    'last_name' => $request->p_lname,
                    'designation' => $request->p_jobtitle,
                    'business_email' => trim($request->p_bemail),
                    'mobile_code' => $request->m_code,
                    'mobile_number' => $request->phone,
                    'partner_id' => $partner->id,
                ]);

                if ($partnerPersonal != null) {
		/*
                    $selectedState = State::where('state_name', '=', trim($request->o_csr_state))->first();
                    $rhName = "";
                    if ( $selectedState != null ) {
                        $rhName = $selectedState->regionhead->rh_name;
                    }
		*/

		    $ro = Relationowner::where('ro_name', '=', trim($request->ro_name))->first();
                    $rhName = "";

                    if ($ro != null) {
                        $rh = $ro->regionhead;
                        $rhName = $rh->rh_name;
                    }

                    $partnerOrg = PartnerOrgInfo::create([
                        'partner_ref_no' => $partner->partner_ref_no,
                        'comp_name' => $request->o_cname,
                        'comp_website' => $request->o_cwebsite,
                        'comp_hq' => $request->o_chq,
                        'comp_desc' => $request->o_cdesc,
                        'comp_size' => $request->empstrength,
                        'industry' => $request->o_indvertical,
                        'annual_revenue' => $request->o_arevenue,
                        'lob' => $request->lob,
			'lob_other' => $request->lob_oth,
                        'city' => $request->city,
                        'ro_name' => $request->ro_name,
                        'rh_name' => $rhName,  
                        'state' => $request->o_csr_state,
                        'country' => $request->countrydd,
                        'pincode' => $request->o_czipcode,
                        'loc_o_b' => json_encode($request->loc_o_b),
                        'client_base' => json_encode($request->tar_cli_base),
                        'client_base_other' => $request->tar_cli_base_oth,
                        'partnership_model' => json_encode($request->partnership_model),
                        'partner_id' => $partner->id,
                    ]);

                    if ($partnerOrg != null) {
			if ( $request->hasFile('agreement_doc') ) {
                            $file = $request->file('agreement_doc');
                            $agreementDocPath = $request->agreement_doc->storeAs('public/uploads/registrations', $file->getClientOriginalName());
                            $agreementDocPath = str_replace("public/uploads", "storage/app/public/uploads", $agreementDocPath);
                        }

                        if ( $request->hasFile('nda') ) {
                            $file = $request->file('nda');
                            $ndaDocPath = $request->nda->storeAs('public/uploads/registrations', $file->getClientOriginalName());
                            $ndaDocPath = str_replace("public/uploads", "storage/app/public/uploads", $ndaDocPath);
                        }
                        $partnerTech = PartnerTechInfo::create([

                            'partner_ref_no' => $partner->partner_ref_no,
                            'use_case_expertise' => json_encode($request->u_case_expe),
                            'use_case_expertise_other' => $request->u_case_expe_oth,
                            'technology_expertise' => json_encode($request->tech_expe),
                            'technology_expertise_other' => $request->tech_expe_oth,
                            'professional_services_offered' => json_encode($request->prof_ser_off),
                            'professional_services_offered_other' => $request->prof_ser_off_oth,
                            'interested_ser_prod_at_pi' => json_encode($request->int_ser_prov),
                            'interested_ser_prod_at_pi_other' => $request->int_ser_prov_oth,
                            'busi_case_brief' => $request->b_brieftxt,
                            'partner_type' => $request->partnership_model,
                            'partner_id' => $partner->id,
			    'agreement_doc' => $agreementDocPath,
                            'nda_doc' => $ndaDocPath,
                            
                        ]);

                        if ($partnerTech != null) {
                            /*Send out the emails to selected ro and rh heads */
                            //$rhEmail = $selectedState->regionhead->rh_email;
                            //$rhName = $selectedState->regionhead->rh_name;
                            //$ro = $selectedState->relationowners->where('ro_name', '=', trim($request->ro_name))->first();

                            $maildetails = [
                                'from' => Config::get('constants.mails.MAIL_DEFAULT_FROM'),
                                'subject' => 'Registration Initiated : '.$partnerOrg->comp_name .' _ Unique Ref ID:'. $partner->partner_ref_no,
                                'partner_title' => $partnerPersonal->title,
                                'partner_name' => $partnerPersonal->first_name." ".$partnerPersonal->last_name,
                                'comp_name' => $partnerOrg->comp_name,
                                'partner_ref_id' => $partner->partner_ref_no,
                            ]; 
                            
			
                            if ( $ro != null ) {

                                $roEmail = $ro->ro_email;
                                $roName = $ro->ro_name;

                                $rodetails= ['ro_name' => $roName,'rh_name' => $rhName];
                                $maildetails = array_merge($maildetails,$rodetails);

                                // dispatch(new SendRegistrationEmailJob($maildetails, 'regionhead'));
                                // $maildetails['to'] = $rhEmail;
                                // dispatch(new SendRegistrationEmailJob($maildetails, 'regionhead'));

                                if ($roEmail != "" ) {
                                    Mail::to($roEmail)
                                        ->send(new RegistrationInitiationMail($maildetails, 'relationshipowner'));
                                }
                                if ($rh->rh_email != "") {
                                    Mail::to($rh->rh_email)
                                        ->send(new RegistrationInitiationMail($maildetails, 'regionhead'));
                                }

                            }

                            $adminEmail = Config::get('constants.mails.PI_ADMIN_MAIL');
			    $cc = [Config::get('constants.mails.PI_ADMIN_MAIL2'), Config::get('constants.mails.PI_ADMIN_MAIL3')];

                            Mail::to($adminEmail)
				->cc($cc)
                                ->send(new RegistrationInitiationMail($maildetails, 'admin'));
                            
                            if ( $partnerPersonal->business_email != null ) { 
                                Mail::to($partnerPersonal->business_email)
                                ->send(new RegistrationInitiationMail($maildetails, 'partner'));
                            }

                        } else{
                            $partnerOrg->delete();
                            $partnerPersonal->delete();
                            $partner->delete();
                        }
                    } else{
                        $partnerPersonal->delete();
                        $partner->delete();
                    }
                } else{
                    $partner->delete();
                }
            } else {

            }

        
            return response()->json(['status' => 'success', 'msg' => 'Partner registered']);
           

        }catch(\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
        
    }

    
    public function login(Request $request) {

        if(Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
                'user_is_active' => 1,
            ]
            )
        ) {
            $user = Auth::user();

            //$partner = Partner::where('business_email', '=', $user->email)->first();
            $partner = HelperFunctions::getAuthPartner();
            if ($partner == null) {
                return response()->json(['status' => 'failure', 'msg' => 'Incorrect username or password. Failed to login']);//, 'user'=>$user, 'partner' => $partner]);
            }
            
	        $toChangePwd = false;
            $name = "";
            if ($partner != null) {
                if ($partner->user_type == Config::get('constants.user_types.PIADMIN')) {
                    $name = "Admin" ; 
                }else {
                    if ($partner->partnerOrgInfo != null) {
                        $name = $partner->partnerOrgInfo->comp_name;
                    }
			
		    if ( Hash::check($partner->partner_ref_no, $partner->password) ) {
                        $toChangePwd = true;
                    }
                }
            }
            // if (($partner != null) && ($partner->partnerOrgInfo != null)) {
            //     $name = $partner->partnerOrgInfo->comp_name;
            // }
            //$name = $partner->partnerOrgInfo->comp_name;
            
            $success['token'] = $user->createToken('PartnerPortal')->accessToken;
            $success['name'] = $name;
            $success['email'] = $user->email;
            $success['type'] = $user->user_type;
	        $success['tochangepwd'] = $toChangePwd;

            return response()->json(['status' => 'success', 'msg' => 'User logged in successfully', 'user' => $success, 'partner' => $partner]);
        }else {
            return response()->json(['status' => 'failure', 'msg' => 'Incorrect username or password. Failed to login']);
        }
    }
    

    public function logout(Request $request) {

        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response(['message' => 'You have been successfully logged out.'], 200);
    }

    
}
