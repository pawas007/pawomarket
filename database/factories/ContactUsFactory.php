<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;

class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'subject'=>$this->faker->word,
            'message'=>$this->faker->text(150) ,
            'phone'=>$this->faker->phoneNumber
        ];
    }
}
