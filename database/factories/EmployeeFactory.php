<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\Province;
use App\Models\EmployeeType;
use App\Models\EmployeeStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'mobile' => $this->faker->phoneNumber, // Generates a random phone number
            'email' => $this->faker->unique()->safeEmail, // Generates a unique email
            'address' => $this->faker->address, // Generates a random address
            'postal_code' => $this->faker->postcode, // Generates a random postal code
            'passport' => $this->faker->unique()->word, // Generates a unique passport number
            'city_id' => City::inRandomOrder()->first()->id, // References an existing city ID
            'province_id' => Province::inRandomOrder()->first()->id, // References an existing province ID
            'employee_type_id' => EmployeeType::inRandomOrder()->first()->id, // References an existing employee type ID
            'employee_status_id' => EmployeeStatus::inRandomOrder()->first()->id, // References an existing employee status ID
        ];
    }
}
