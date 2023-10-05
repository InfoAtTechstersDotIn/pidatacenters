<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PartnerSeeder;
use Database\Seeders\PartnerPersonalInfoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CountrySeeder::class,
            PartnerSeeder::class,
            PartnerPersonalInfoSeeder::class,
        ]);
    }
}
