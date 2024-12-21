<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CusProblem;

class CusProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //call the factory
        CusProblem::factory()->count(50)->create(); // Creates 10 accessory models with related accessories and brands
    }
}
