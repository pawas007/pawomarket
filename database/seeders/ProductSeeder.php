<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Faker\Factory as Faker;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $productNames = ['T-Shirt Form Girls','Woman Full Silver Dress','Blue Dress ','Woman Full Red Dress'];

        Product::truncate();
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            $product = new Product();
            $product->name = $productNames[array_rand($productNames)];
            $product->vendor_code = strtoupper($faker->regexify('[A-Za-z0-9]{6}'));
            $product->description =$faker->text(666);
            $product->information=$faker->paragraph(5);
            $product->new=rand(0,1);
            $product->hot=rand(0,1);
            $product->price = $faker->numberBetween(400,500);
            $product->old_price = $faker->numberBetween(600,700);
            $product->save();



        }
    }
}
