<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Food','Hungry','Water','School','Children','Summer' ];
        Tag::truncate();
        foreach ($tags as $index => $tag){
            $Tag = new Tag();
            $Tag->name = $tag;
            $Tag->slug = Str::slug($tag,'-');
            $Tag->save();
            $Tag->posts()->sync([
                rand(10,30),



            ]);


        }
    }
}
