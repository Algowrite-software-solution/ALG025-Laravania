<?php

namespace Database\Factories;

use App\Models\AccessoryModel;
use App\Models\Accessory;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessoryModelFactory extends Factory
{
    protected $model = AccessoryModel::class;

    public function definition()
    {
        return [
            'model_name' => $this->faker->word, // Generates a random word for model_name
            'description' => $this->faker->paragraph, // Optional long text description
            'accessory_id' => Accessory::inRandomOrder()->first()->id, // Use existing accessory ID
            'brand_id' => Brand::inRandomOrder()->first()->id, // Use existing brand ID
        ];
    }
}