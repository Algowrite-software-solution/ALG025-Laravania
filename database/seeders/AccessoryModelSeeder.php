<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AccessoryModel;

class AccessoryModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //call the factory
        AccessoryModel::factory()->count(10)->create(); // Creates 10 accessory models with related accessories and brands
    }
}
