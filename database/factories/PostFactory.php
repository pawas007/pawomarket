<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->company;

        $content = '  <p>Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat.
                                Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna
                                dictum porta.
                                Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat.
                                Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan
                                tincidunt.
                                Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere
                                blandit.
                                Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                            <blockquote>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                                Curabitur arcu erat,
                                accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada.
                                Sed porttitor
                                lectus nibh.</blockquote>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                Curae;
                                Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                Curae;
                                Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin
                                eget tortor risus.
                                Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit.
                                Donec rutrum congue leo eget malesuada.</p>';
        return [
            'title' => $title ,
            'slug' => Str::slug($title,'-'),
            'image' => 'blog/posts/post.png',
            'content' => $content,
            'short_description' => $this->faker->text(300) ,
        ];
    }
}
