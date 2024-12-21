<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JobCard;
use App\Models\User;
use App\Models\JobCardStatus;
use App\Models\CusProblem;
use App\Models\Device;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobCard>
 */
class JobCardFactory extends Factory
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
            'checking_price' => $this->faker->randomFloat(2, 50, 500), // Random checking price between 50 and 500
            'user_id' => User::inRandomOrder()->first()->id, // Random User ID
            'job_card_status_id' => JobCardStatus::inRandomOrder()->first()->id, // Random JobCard Status ID
            'cus_problem_id' => CusProblem::inRandomOrder()->first()->id, // Random Customer Problem ID
            'device_id' => Device::inRandomOrder()->first()->id, // Random Device ID
        ];
    }
}
