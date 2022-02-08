<?php

namespace App\Http\Services;

use App\Models\Currency;

class CurrencyConversion
{


    public static $container;

    public static function loadContainer()
    {
        if (is_null(self::$container)) {
            self::$container = Currency::get();
        }
    }

    static function convert($price, $targetCurrencyCode = null)
    {
        self::loadContainer();
        $mainCurrency = self::$container->firstWhere('is_main', 1);
        if (is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', $mainCurrency->code);
            $targetCurrencyValue = self::$container->firstWhere('code', $targetCurrencyCode);
        }
        $price = (float)$price / (float)$mainCurrency->value * (float)$targetCurrencyValue->value;
        return round($price, 2);
    }
}
