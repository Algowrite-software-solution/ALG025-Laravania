<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        for name coloumn
        Dell
Apple
HP (Hewlett-Packard)
Lenovo
ASUS
Acer
MSI
Samsung
Toshiba
Microsoft
Razer
Logitech
Corsair
Kingston
Seagate
Western Digital (WD)
Kingston
Intel
AMD
NVIDIA
EVGA
Gigabyte
Canon
Epson
Brother
LG
ViewSonic
BenQ
Thermaltake
Cooler Master
NZXT
Corsair
TP-Link
Netgear
Linksys
Huawei
Xiaomi
Realme
OnePlus
Sony

for created_at updated_at current timsestapm will be inserted
       
*/
    
        DB::table('brands')->insert([
            ['name' => 'Dell', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HP (Hewlett-Packard)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lenovo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ASUS', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Acer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MSI', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Samsung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Toshiba', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Microsoft', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Razer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Logitech', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corsair', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kingston', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seagate', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Western Digital (WD)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kingston', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Intel', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AMD', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NVIDIA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'EVGA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gigabyte', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Canon', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Epson', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brother', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LG', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ViewSonic', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BenQ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thermaltake', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cooler Master', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NZXT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corsair', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TP-Link', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Netgear', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Linksys', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Huawei', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Xiaomi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Realme', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'OnePlus', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sony', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
