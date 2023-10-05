<?php
namespace App\Http\Helpers;

use App\Models\Partner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class HelperFunctions {

    function func_test($param) {
        return "hello ".$param ;
    }

    static function uniqueId($length = 5, $check_count = 0){
        
        $digits = '';
        
        $numbers = range(0,9);
        shuffle($numbers);
        for($i = 0; $i < $length; $i++){
            global $digits;
            $digits .= $numbers[$i];
        }
        
        $uniqueId_gen = 'RBP_'.$digits;

        /**
            *check the UniqueId is exists or not
            *if exist generate the new id
            *otherwise continue
        */  
        $check_uni_id = Partner::where('partner_ref_no', $uniqueId_gen)->get();
        
        if(sizeof($check_uni_id) == 0){
            return $uniqueId_gen;
        }else{
            // $check_count = $check_count + 1;
            if($check_count == 10){
                return 'limit reached';
            }else{        
                return uniqueId($length, $check_count + 1);
                // return $check_count + 1;
            }
            // return $check_uni_id;
        }
    }

    // static function getAuthPartner() {

    //     $user = Auth::user();
    //     $partner = Partner::where('business_email', '=', $user->email)->get();

    //     if ($partner != null) {
    //         return $partner[0];
    //     }
    //     return null;
    // }

    static function getAuthPartner() {

        $user = Auth::user();
        $partner = Partner::where('business_email', '=', $user->email)
                    ->where('status', '!=', Config::get('constants.options.REJECTED'))
                    ->first();
        if ( $user->password != $partner->password ) {
            return null;
        }

        return $partner;
    }

    static function getAuthPartnerWithDetails() {

        $user = Auth::user();
        $partner = Partner::where('business_email', '=', $user->email)
                    ->where('status', '!=', Config::get('constants.options.REJECTED'))
                    ->with('PartnerPersonalInfo')
                    ->with('PartnerOrgInfo')
                    ->with('PartnerTechInfo')
                    ->first();
        if ( $user->password != $partner->password ) {
            return null;
        }

        return $partner;
    }

    static function getPartnerByEmail($busEmail) {

        $partner = Partner::where('business_email', '=', $busEmail)
                            ->where('status', '!=', Config::get('constants.options.REJECTED'))
                            ->first();

        return $partner;

    }
   
}
