<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            TagSeeder::class,
            PostSeeder::class,
            CommentSeader::class,
            CategoryPostSeeder::class,
            InstagramSeader::class,
            ContactSeeder::class,
            ProductSeeder::class,
            CurrencySeeder::class,
            SubscriberSeeder::class

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
