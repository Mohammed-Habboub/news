<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
             //
            'title'        => $this->faker->word(),
            'description'  =>  $this->faker->word(),
            'image_url'    => $this->faker->imageUrl(),
            'userc_id'      => User::inRandomOrder()->first()->id,

        ];
    }
}
