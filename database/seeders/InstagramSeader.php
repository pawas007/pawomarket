<?php

namespace Database\Seeders;

use App\Models\Instagram;
use Illuminate\Database\Seeder;

class InstagramSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instagram::truncate();
        Instagram::create(
            [
                'password'=>'password',
                'name'=>'account name',
                'account' =>'account',
            ]
        )  ;
    }
}
