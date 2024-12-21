<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeviceModel;
class DeviceModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //call the factory
        DeviceModel::factory()->count(50)->create(); // Creates 10 accessory models with related accessories and brands
    }
}
