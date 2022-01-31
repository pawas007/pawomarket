<?php

namespace Database\Seeders;


use App\Models\Subscribe;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Subscribe::truncate();
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            $subscriber = new Subscribe();
            $subscriber->email = $faker->email;
            $subscriber->active = rand(0, 1);
            $subscriber->save();
        }
    }
}
