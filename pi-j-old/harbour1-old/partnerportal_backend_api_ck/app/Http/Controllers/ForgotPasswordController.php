<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Carbon\Exceptions\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ForgotPasswordRequest;

class ForgotPasswordController extends Controller
{
    public function forgot(ForgotPasswordRequest $request) {

        $validator = Validator::make($request->all(), [
            'email' => "required|email",
        ]);

        if ($validator->fails()) {

            return response()->json(['status' => "error", "message" => "email is required"]);
        }

        
        $email = $request->input('email');
      
        //if (User::where('email', $email)->doesntExist()) {
        if (Partner::where('business_email', $email)
                    ->where('status', '!=', Config::get('constants.options.REJECTED'))
                    ->doesntExist()) {

            return response()->json([
                'status' => 'error',
                'message' => 'This email is not registered with us.',
            ], 404);
        }

        $token = Str::random(10);
        

        try {
            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token,
		'created_at' => date('Y-m-d H:i:s'),
            ]);

            //send an email
            $mailDetails = [
                'token' => $token,
                'email' => $email,
                'subject' => Config::get('constants.auth.FORGOT_PASSWORD_MAIL_SUBJECT'),
            ];
            //Mail::send(new ForgotPasswordMail($mailDetails))->to($email);
            Mail::to($email)->send(new ForgotPasswordMail($mailDetails));

            return response()->json([
                'status' => 'success',
                'message' => Config::get('constants.auth.FORGOT_PASSWORD_MESSAGE'),
            ]); 

        } catch(\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 400);
        }
    }


    public function reset(ResetPasswordRequest $request) {

        $token = $request->input('token');

        $curDateTime = date('Y-m-d H:i:s');
        $validTokenCreateTime = date('Y-m-d H:i:s', strtotime('- 5 minute', strtotime($curDateTime)));
        
        if ( !$passwordResets = DB::table('password_resets')
                                ->where('token', $token)
                                ->where('created_at', ">=", $validTokenCreateTime)
                                ->first() ) {

            return response([
                'status' => 'error',
                'message' => 'Token expired or was invalid.',
            ], 400);

        }
	
	$partner = Partner::where('business_email', $passwordResets->email)
                            ->where('status', '!=', Config::get('constants.options.REJECTED'))
                            ->first();

        if ( $partner == null  ){

            return response([
                'status' => 'error',
                'message' => 'User doesn\'t exist!',
            ], 404);

        }

        //$partner->password = bcrypt($request->input('password'));
        $partner->password = Hash::make($request->input('password'));
        $partner->save();
	
	$user = User::where('email', $partner->business_email)->where('user_is_active', '=', 1)->first();
        if ( $user != null ) {
            $user->password = $partner->password;
            $user->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully',
        ]);

    }
}
