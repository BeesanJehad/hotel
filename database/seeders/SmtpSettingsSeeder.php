<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SmtpSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('smtp_settings')->insert([

            [
                'mailer' => 'smtp',
                'host' => 'sandbox.smtp.mailtrap.io',
                'port' => '587',
                'username' => 'bee57d200cd021',
                'password' => 'd8327cae8a66b4',
                'encryption' => 'tls',
                'from_address' => 'hello@example.com',
            ]
        ]);
    }
}
