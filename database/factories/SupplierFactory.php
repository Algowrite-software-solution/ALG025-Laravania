<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\Province;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
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
            'supplier_name' => $this->faker->company, // Random company name
            'postal_code' => $this->faker->postcode, // Random postal code
            'address' => $this->faker->address, // Random address
            'supplier_email' => $this->faker->email, // Random supplier email
            'supplier_mobile' => $this->faker->phoneNumber, // Random supplier mobile number
            'city_id' => City::inRandomOrder()->first()->id, // Random City ID
            'province_id' => Province::inRandomOrder()->first()->id, // Random Province ID
        ];
    }
}
