<?php

namespace Database\Seeders;

use App\Models\CategoryPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryPost::truncate();
        $categories = ['Accesssories', 'Box', 'Chair', 'Deco', 'Glass', 'Fashion'];
        foreach ($categories as $category) {
           $category = CategoryPost::create([
                'name' => $category,
                'slug' => Str::slug($category, '-'),
                'parent_id' => 0
            ]);
           $category->posts()->sync([
                rand(28,30),
            ]);
        }
    }
}
