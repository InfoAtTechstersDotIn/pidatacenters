<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create(['partner_ref_no' => 'pi_partner_53781',
            'business_email' => 'nizam.k@microsys-tech.com',
            'password' => 'pi_partner_53781',
            'mobile_code' => '+91',
            'mobile_number' => '9137241542',
            'is_verified' => 0,
            'status' => 'pending',
            'login_role' => 'supper_admin']);

        Partner::create(['partner_ref_no' => 'pi_partner_67918',
            'business_email' => 'neeraj@securematrix.in',
            'password' => 'pi_partner_67918',
            'mobile_code' => '+91',
            'mobile_number' => '9503549967',
            'is_verified' => 0,
            'status' => 'pending',
            'login_role' => 'supper_admin']);

        Partner::create(['partner_ref_no' => 'pi_partner_87612',
            'business_email' => 'jerry.thomas@copiousconsult.com',
            'password' => 'pi_partner_87612',
            'mobile_code' => '+91',
            'mobile_number' => '9626242333',
            'is_verified' => 2,
            'status' => 'approved',
            'login_role' => 'supper_admin']);

        Partner::create(['partner_ref_no' => 'pi_partner_25983',
            'business_email' => 'dammaganesh411@pidatenters.com',
            'password' => 'pi_partner_25983',
            'mobile_code' => '+91',
            'mobile_number' => '9898989898',
            'is_verified' => 0,
            'status' => 'pending',
            'login_role' => 'supper_admin']);

        Partner::create(['partner_ref_no' => 'pi_partner_06385',
            'business_email' => 'jayraj.joshi@niyogin.in',
            'password' => 'pi_partner_06385',
            'mobile_code' => '+91',
            'mobile_number' => '9820628683',
            'is_verified' => 3,
            'status' => 'rejected',
            'login_role' => 'supper_admin']);
    }
}
