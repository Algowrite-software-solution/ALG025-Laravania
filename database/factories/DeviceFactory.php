<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Device;
use App\Models\DeviceType;
use App\Models\Color;
use App\Models\DeviceModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
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
            'serial_number' => $this->faker->unique()->numerify('SN-#####'), // Generates a unique serial number
            'device_type_id' => DeviceType::inRandomOrder()->first()->id, // References an existing device type ID
            'color_id' => Color::inRandomOrder()->first()->id, // References an existing color ID
            'device_model_id' => DeviceModel::inRandomOrder()->first()->id, // References an existing device model ID
        ];
    }
}
