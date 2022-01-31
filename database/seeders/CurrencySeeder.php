<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->truncate();
        $currency = [
            [
                'code' => 'USD',
                'symbol' => '$',
                'is_main' => 1,
                'value'=> 1,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'EUR',
                'symbol' => '€',
                'is_main' => 0,
                'value'=> 0.345,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'UAH',
                'symbol' => '₴',
                'is_main' => 0,
                'value'=> 28.837,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'RUB',
                'symbol' => '₽',
                'is_main' => 0,
                'value'=> 80.837,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
        ];


        Currency::insert($currency);

    }
}
