<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /* 
        for name coloumn values
        Laptop
Desktop
Monitor
Printer
Scanner
Keyboard
Mouse
Speaker
Headphone
Microphone
Hard Disk Drive (HDD)
Solid State Drive (SSD)
RAM
Motherboard
Processor
Graphics Card
Power Supply Unit (PSU)
Cooling Fan
Case/Enclosure
Network Router
Network Switch
USB Drive
Memory Card
Cable
Adapter
Game Console
Mobile Phone
Tablet
Web Camera
Projector
External Hard Drive
Power Bank
Stylus Pen
Docking Station
NAS (Network Attached Storage)
Smart Watch
UPS (Uninterruptible Power Supply)

create at updated at current timestamp will be inserted

        */

        DB::table('device_types')->insert([
            ['name' => 'Laptop', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Desktop', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Monitor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Printer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Scanner', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Keyboard', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mouse', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Speaker', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Headphone', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Microphone', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hard Disk Drive (HDD)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Solid State Drive (SSD)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RAM', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Motherboard', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Processor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Graphics Card', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Power Supply Unit (PSU)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cooling Fan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Case/Enclosure', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Router', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Switch', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'USB Drive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Memory Card', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cable', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Adapter', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Game Console', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mobile Phone', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tablet', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Web Camera', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Projector', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'External Hard Drive', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Power Bank', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stylus Pen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Docking Station', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NAS (Network Attached Storage)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smart Watch', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'UPS (Uninterruptible Power Supply)', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
