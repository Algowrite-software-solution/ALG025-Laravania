<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoryCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /* 
        name column  values
        Input Devices
Output Devices
Storage Devices
Power Supplies and Batteries
Cables and Adapters
Networking Equipment
Cooling and Airflow Accessories
Graphics and Video
RAM and Memory Modules
Motherboards and Components
Processors
Cases and Enclosures
Peripherals
Printing and Scanning
Security Accessories
Miscellaneous

for created_at updated_at current timsestapm will be inserted

        */

        DB::table('accessory_categories')->insert([
            ['name' => 'Input Devices', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Output Devices', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Storage Devices', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Power Supplies and Batteries', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cables and Adapters', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Networking Equipment', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cooling and Airflow Accessories', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Graphics and Video', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RAM and Memory Modules', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Motherboards and Components', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Processors', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cases and Enclosures', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Peripherals', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Printing and Scanning', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Security Accessories', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Miscellaneous', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
