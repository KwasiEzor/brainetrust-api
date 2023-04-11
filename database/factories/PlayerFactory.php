<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'affiliation_number'=>$this->faker->numberBetween(10000,99999),
            //'user_id'=>User::inRandomOrder()->first()->id,
            'club_id'=>7,
            'details'=>$this->faker->realTextBetween(150,200)
        ];
    }
}
