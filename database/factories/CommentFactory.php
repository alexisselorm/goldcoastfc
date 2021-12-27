<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'news_id'=> News::factory(),
            'user_id' => News::facatory(),
            'body' => $this->faker->paragraph()
        ];
    }
}
