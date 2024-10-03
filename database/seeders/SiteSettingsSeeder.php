<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_settings')->insert([

            [
                'logo' => 'upload/site/1811562616857505.png',
                'phone' => '+1609-453-1654',
                'address' => '2504 Ivins Avenue, Egg Harbor Township, NJ 08234',
                'email' => 'support@easylearningbd.com',
                'facebook' => 'https://www.facebook.com/hotel',
                'twitter' => 'https://www.twitter.com/hotel',
                'copyright' => 'Copyright © 2024 Easy Hotel All Rights Reserved.',
            ],

        ]);

    }
}
