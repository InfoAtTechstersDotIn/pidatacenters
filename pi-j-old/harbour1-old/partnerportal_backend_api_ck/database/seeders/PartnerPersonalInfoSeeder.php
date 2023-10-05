<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartnerPersonalInfo;

class PartnerPersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        PartnerPersonalInfo::create([
            `partner_ref_no` => 'pi_partner_53781', 
            `title` => 'Mr.', 
            `first_name` => 'Nizam', 
            `last_name` => 'Khan', 
            `designation` => 'SAP Global Head', 
            `business_email` => 'nizam.k@microsys-tech.com', 
            `mobile_code` => '+91', 
            `mobile_number` => '9137241542', 
            'partner_id' => 1,
        ]);

        PartnerPersonalInfo::create([
            `partner_ref_no` => 'pi_partner_67918', 
            `title` => 'Mr.', 
            `first_name` => 'Neeraj', 
            `last_name` => 'Bahirat', 
            `designation` => 'Sr VP', 
            `business_email` => 'neeraj@securematrix.in', 
            `mobile_code` => '+91', 
            `mobile_number` => '9503549967', 
            'partner_id' => 2,
        ]);

    }
}
