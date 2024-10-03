<?php

namespace App\Providers;

use App\Models\SmtpSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('smtp_settings')) {
            $smtpsetting = SmtpSetting::first();

            if ($smtpsetting) {
               $data = [
                 'driver' => $smtpsetting->mailer,
                 'host' => $smtpsetting->host,
                 'port' => $smtpsetting->port,
                 'username' => $smtpsetting->username,
                 'password' => $smtpsetting->password,
                 'encryption' => $smtpsetting->encryption,
                 'from' => [
                     'address' => $smtpsetting->from_address,
                     'name' => 'Easyhotel'
                 ]
               ];
               Config::set('mail',$data);
            }

         } // end if
    }
}
