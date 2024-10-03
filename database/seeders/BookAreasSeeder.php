<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book_areas')->insert([

            [
                'image' => 'upload/bookarea/1810983362014170.jpg',
                'short_title' => 'MAKE A QUICK BOOKING',
                'main_title' => 'We Are the Best in All-time & So Please Get a Quick Booking',
                'short_desc' => 'Atoli is one of the best resorts in the global market and that\'s why you will get a luxury life period on the global market. We always provide you a special support for all of our guests and that\'s will be the main reason to be the most popular.',
                'link_url' => 'http://127.0.0.1:8000/',
            ]
        ]);
    }
}
