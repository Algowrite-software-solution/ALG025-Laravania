<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stock;
use App\Models\StockStatus;
use App\Models\Capacity;
use App\Models\Warranty;
use App\Models\Size;
use App\Models\AccessoryModel;
use App\Models\Supplier;
use App\Models\Color;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
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
            'quantity' => $this->faker->numberBetween(1, 100), // Random quantity between 1 and 100
            'price' => $this->faker->randomFloat(2, 10, 500), // Random price (between 10 and 500)
            'discount' => $this->faker->randomFloat(2, 0, 100), // Random discount (nullable)
            'stock_id' =>$this->faker->numberBetween(1,1232111232), // Random stock ID
            'stock_status_id' => StockStatus::inRandomOrder()->first()->id, // Random stock status ID from the stock_status table

            'capacity_id' => Capacity::inRandomOrder()->first()->id, // Random capacity ID from the capacity table (nullable)
            'warranty_id' => Warranty::inRandomOrder()->first()->id, // Random warranty ID from the warranty table (nullable)
            'size_id' => Size::inRandomOrder()->first()->id, // Random size ID from the size table (nullable)

            'accessory_model_id' => AccessoryModel::inRandomOrder()->first()->id, // Random accessory model ID (nullable)
            'supplier_id' => Supplier::inRandomOrder()->first()->id, // Random supplier ID from the suppliers table (nullable)
            'color_id' => Color::inRandomOrder()->first()->id, // Random color ID from the color table (nullable)

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
