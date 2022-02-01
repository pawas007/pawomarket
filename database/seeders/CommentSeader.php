<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $comments = [
            [
                'commentable_id' => 30,
                'commentable_type' => 'App\Models\Post',
                'name' => 'Jon',
                'rating' => null,
                'email' => 'jonredoVich@gmail.com',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
            ],
            [
                'commentable_id' => 30,
                'commentable_type' => 'App\Models\Post',
                'name' => 'Ivan',
                'rating' => null,
                'email' => 'lorenAwq@gmail.com',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '
            ],
            [
                'commentable_id' => 20,
                'commentable_type' => 'App\Models\Product',
                'name' => 'Jon',
                'rating' => 5,
                'email' => 'jonredoVich@gmail.com',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
            ],
            [
                'commentable_id' => 20,
                'commentable_type' => 'App\Models\Product',
                'name' => 'Jon',
                'rating' => 4,
                'email' => 'osticAww@gmail.com',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<<<<<'
            ]
        ];

        foreach ($comments as $comment) {

            DB::table('comments')->insert([
                'commentable_id' => $comment['commentable_id'],
                'commentable_type' => $comment['commentable_type'],
                'name' => $comment['name'],
                'email' => $comment['email'],
                'message' => $comment['message'],
                'rating' => $comment['rating']
            ]);

        }


    }
}


