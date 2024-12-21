<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'first_name' => $this->faker->firstName, // Generates a random first name
            'last_name' => $this->faker->lastName, // Generates a random last name
            'email' => $this->faker->unique()->safeEmail, // Generates a unique email
            'mobile' => $this->faker->unique()->phoneNumber, // Generates a random phone number
        ];
    }
}
