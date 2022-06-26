<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug'=>$this->faker->word(),
            'fname'=>$this->faker->firstNameMale(),
            'lname'=>$this->faker->lastName(),
            'picture'=>$this->faker->image(),
            'weight'=>$this->faker->numberBetween(50, 100),
            'height'=>$this->faker->numberBetween(150, 210),
            'country'=>'Jupiter-topia',
            'player_number'=>$this->faker->unique()->numberBetween(1, 100),
            'position_id'=>$this->faker->numberBetween(1, 4),
            'joining_date'=>$this->faker->dateTimeThisYear(),
            'dob'=>$this->faker->dateTimeThisCentury(),
        ];
    }
}
