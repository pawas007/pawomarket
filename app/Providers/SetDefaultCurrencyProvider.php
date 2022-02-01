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
        if (!session()->has('currency') && !session()->has('currency_symbol')){
            $mainCurrency = Currency::where('is_main',true)->first();
            return session(['currency' => $mainCurrency->code, 'currency_symbol' => $mainCurrency->symbol]);
        }
    }
}
