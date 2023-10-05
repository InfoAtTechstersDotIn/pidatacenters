<?php

namespace Database\Seeders;

use App\Models\PipelineRating;
use Illuminate\Database\Seeder;

class PipelineRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PipelineRating::create([
            'rate_name' => 'Hot - Closure within 30 days',
            'rate_probability' => 90, /*In percent*/
        ]);

        PipelineRating::create([
            'rate_name' => 'Warm - Closure within 31-90 days',
            'rate_probability' => 60, /*In percent*/
        ]);

        PipelineRating::create([
            'rate_name' => 'Cold - Prospective beyond 90 days',
            'rate_probability' => 40, /*In percent*/
        ]);

        PipelineRating::create([
            'rate_name' => 'Win',
            'rate_probability' => 100, /*In percent*/
        ]);

        PipelineRating::create([
            'rate_name' => 'Passive - yet to establish connect',
            'rate_probability' => 20, /*In percent*/
        ]);

        PipelineRating::create([
            'rate_name' => 'Lost',
            'rate_probability' => 0, /*In percent*/
        ]);

        PipelineRating::create([
            'rate_name' => 'Dropped',
            'rate_probability' => 0, /*In percent*/
        ]);

    }
}
