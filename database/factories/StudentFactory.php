<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'firstname' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween($min = 17, $max = 25),
            'state' => $this->faker->boolean(),

        ];
    }
}
