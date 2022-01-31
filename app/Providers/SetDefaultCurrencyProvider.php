<?php

namespace App\Providers;

use App\Models\Currency;
use Illuminate\Support\ServiceProvider;

class SetDefaultCurrencyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!session()->has('currency')){
            session(['currency' => Currency::where('is_main',true)->first()->code]);
        }
    }
}
