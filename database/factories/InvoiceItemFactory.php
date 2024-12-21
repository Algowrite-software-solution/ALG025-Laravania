<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
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
            'quantity' => $this->faker->numberBetween(1, 10), // Random quantity between 1 and 10
            'size' => $this->faker->word, // Random size (nullable)
            'color' => $this->faker->colorName, // Random color
            'capacity' => $this->faker->word, // Random capacity (nullable)
            'item_price' => $this->faker->randomFloat(2, 10, 1000), // Random item price (between 10 and 1000)
            'item_name' => $this->faker->word, // Random item name
            'discount' => $this->faker->randomFloat(2, 0, 100), // Random discount (nullable)
            'model' => $this->faker->word, // Random model (nullable)
            'brand' => $this->faker->company, // Random brand (nullable)
            'condition' => $this->faker->word, // Random condition (nullable)
            'warrenty' => $this->faker->word, // Random warranty (nullable)
            'stock_code' => $this->faker->unique()->word, // Random stock code (nullable)
            'line_total' => $this->faker->randomFloat(2, 10, 1000), // Random line total (between 10 and 1000)

            'invoice_id' => Invoice::inRandomOrder()->first()->id, // Random invoice ID from the invoices table
        ];
    }
}
