<?php

namespace Database\Factories;

use App\Models\DeviceModel;
use App\Models\DeviceType;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;
use App\Models\JobCard;
use App\Models\Employee;
use App\Models\Seller;
use App\Models\InvoiceStatus;
use App\Models\Supplier;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
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
            'sub_total' => $this->faker->randomFloat(2, 100, 1000), // Random sub-total amount between 100 and 1000
            'cus_mobile' => User::inRandomOrder()->first()->mobile ?? $this->faker->phoneNumber, // Random customer mobile number from User table or faker
            'cus_first_name' => User::inRandomOrder()->first()->first_name ?? $this->faker->firstName, // Random first name from User table or faker
            'cus_last_name' => User::inRandomOrder()->first()->last_name ?? $this->faker->lastName, // Random last name from User table or faker
            'cus_email' => User::inRandomOrder()->first()->email ?? $this->faker->unique()->safeEmail, // Random unique email from User table or faker
            'cus_id' => User::inRandomOrder()->first()->id, // Random customer ID from User table
            'job_card_id' => JobCard::inRandomOrder()->first()->id ?? null, // References a random JobCard or null
            'employee_id' => Employee::inRandomOrder()->first()->id, // Random Employee ID
            'employee_name' => $this->faker->name, // Random employee name
            'seller_id' => Supplier::inRandomOrder()->first()->id, // Random Seller ID
            'seller_name' =>Supplier::inRandomOrder()->first()->supplier_name, // Random seller name
            'total' => $this->faker->randomFloat(2, 100, 1000), // Random total amount between 100 and 1000
            'model' =>  DeviceModel::inRandomOrder()->first()->id, // Random model (optional field)
            'device_type' =>  DeviceType::inRandomOrder()->first()->id, // Random device type
            'serial_number' => $this->faker->unique()->word, // Random serial number (optional field)
            'toatl_discount' => $this->faker->randomFloat(2, 0, 100), // Random total discount
            'special_notice' => $this->faker->paragraph, // Random special notice (nullable field)
            'invoice_status_id' => InvoiceStatus::inRandomOrder()->first()->id, // Random Invoice Status ID
        ];
    }
}
