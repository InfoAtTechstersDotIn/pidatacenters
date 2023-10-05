<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Helpers\HelperFunctions;

class ChangePasswordController extends Controller
{
    public function change_password(Request $request) {
        
        //$user = Auth::guard('api')->user();
        $user = Auth::user();
        //$partner = Partner::where('business_email', '=', $user->email)->first();
        $partner = HelperFunctions::getAuthPartner();

        if ( $partner != null ) {

            $validator = Validator::make($request->all(), [
                'old_password' => 'required',
                'new_password' => 'required',
                'confirm_password' => 'required|same:new_password',
            ]);

            $validData = $validator->validate();

            if ( $validator->fails() ) {
                return response()->json([
                    'status' => 'error',
                    'msg' => 'All fields are required and the confirm password must be same as the new password',
                ]);
            }

            if ( Hash::check($validData['old_password'], $user->password) == false) {
                return response()->json([
                    'status' => 'error',
                    'msg' => 'Invalid old password',
                ]);
            }

            if ( Hash::check($validData['new_password'], $user->password) == true ) {
                return response()->json([
                    'status' => 'error',
                    'msg' => 'New password can not be same as the old password',
                ]);
            }

            $newPass = Hash::make($validData['new_password']);

            // Partner::where('id', '=', $partner->id)->update(['password' => $newPass]);
            // User::where('id', '=', $user->id)->update(['password' => $newPass]);

            $partner->password = $newPass;
            $user->password = $newPass;

            $partner->save();
            $user->save();

            //Auth::user()->token()->revoke();
            Auth::user()->AauthAcessToken()->delete();           
           

            return response()->json([
                'status' => 'success',
                'msg' => 'Password changed successfully.',
            ]);

        } else {
            return response()->json([
                'status' => 'error',
                'msg' => 'Please login to change password',
            ],400);
        }

        
    }
}
