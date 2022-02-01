<?php

namespace App\Http\Services;

use App\Models\Currency;
use Illuminate\Support\Facades\Http;

class CurrencyProvider
{
    static function getCurrencyes()
    {
        $params = [
            'base_currency' => Currency::where('is_main', true)->first()->code,
            'apikey' => env('FREECURRENCY_API_KEY'),
        ];

        return $response = Http::get('https://freecurrencyapi.net/api/v2/latest', $params)->json();
    }

}
