<?php

namespace App\Http\Services;

use App\Models\Currency;

class CurrencyConversion
{
    static function convert($price, $targetCurrencyCode = null)
    {
        $mainCurrencyValue = Currency::where('is_main', true)->first();
        if (is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', $mainCurrencyValue->code);
            $targetCurrencyValue = Currency::where('code', $targetCurrencyCode)->first();
        }
        $price = (float)$price / (float)$mainCurrencyValue->value * (float)$targetCurrencyValue->value;
        return round($price,2);
    }
}
