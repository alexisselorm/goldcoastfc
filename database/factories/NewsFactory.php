<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'slug'=>$this->faker->sentence(),
            'title'=>$this->faker->sentence(),
            'excerpt'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
        ];
    }
}
