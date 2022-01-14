<?php

namespace Database\Seeders;


use App\Models\ContactUs;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUs::truncate();
        ContactUs::factory()->count(40)->create();

    }
}
