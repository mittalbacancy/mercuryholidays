<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotelReview;

class HotelReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelReview::factory()->count(10)->create();
    }
}
