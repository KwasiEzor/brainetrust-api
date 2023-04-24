<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'start_date'=>$this->faker->dateTime(now(),'europe/brussels'),
            'end_date'=>$this->faker->dateTime(now(),'europe/brussels'),
            'details'=>$this->faker->realText()
        ];
    }
}
