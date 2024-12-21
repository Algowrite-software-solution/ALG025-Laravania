<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;
use App\Models\User;
use App\Models\City;
use App\Models\Province;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
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
            'postal_code' => $this->faker->postcode, // Generates a random postal code
            'address' => $this->faker->address, // Generates a random address
            'user_id' => User::inRandomOrder()->first()->id, // References an existing user
            'city_id' => City::inRandomOrder()->first()->id, // References an existing city
            'province_id' => Province::inRandomOrder()->first()->id, // References an existing province
        ];
    }
}
