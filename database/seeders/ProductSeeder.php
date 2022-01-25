<?php

namespace Database\Seeders;

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
        Product::truncate();
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            $product = new Product();
            $product->name = $faker->jobTitle;
            $product->sku = $faker->randomLetter.'ASYUUA';
            $product->description =$faker->text(666);
            $product->information=$faker->paragraph(5);
            $product->old_price = $faker->numberBetween(500,700);
            $product->price = $faker->numberBetween(400,500);
            $product->save();
           $product->attributeValues()->sync([1,2,3,4,5]);
        }
    }
}
