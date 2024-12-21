<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        /*
        for name coloumn with appropiate accessory_category_id foriegn key values
        
1. Input Devices
Mouse (Wired/ Wireless)
Keyboard (Mechanical/ Membrane/ Wireless)
Trackpads
Graphic Tablets
Joysticks
Game Controllers

2. Output Devices
Monitors
Speakers
Headphones
Earphones
Projectors
Printers (Inkjet/ Laser)

3. Storage Devices
External Hard Drives
Solid State Drives (SSD)
Hard Disk Drives (HDD)
USB Flash Drives
Memory Cards (SD/ microSD)
Network Attached Storage (NAS)

4. Power Supplies and Batteries
Power Supply Units (PSU)
Laptop Batteries
Universal Power Adapters
Uninterruptible Power Supplies (UPS)
Surge Protectors
Power Banks

5. Cables and Adapters
HDMI Cables
VGA Cables
DisplayPort Cables
USB Cables (USB-A, USB-C, Micro USB)
Ethernet Cables
Audio Cables (3.5mm, Optical)
Power Cables
Adapters (HDMI to VGA, USB-C to HDMI)

6. Networking Equipment
Routers
Modems
Network Switches
Wi-Fi Extenders
Network Cards
Antennas

7. Cooling and Airflow Accessories
CPU Coolers (Air/ Liquid)
Case Fans
Thermal Paste
Cooling Pads for Laptops

8. Graphics and Video
Graphics Cards (GPUs)
Capture Cards
Video Adapters
VR Headsets

9. RAM and Memory Modules
Desktop RAM (DDR3, DDR4, DDR5)
Laptop RAM
Server RAM

10. Motherboards and Components
Motherboards (ATX/ Micro-ATX/ Mini-ITX)
CMOS Batteries
PCIe Expansion Cards (Wi-Fi/ Ethernet/ USB)

11. Processors
Desktop Processors (Intel/ AMD)
Laptop Processors (Mobile CPUs)

12. Cases and Enclosures
PC Cases (Full-Tower/ Mid-Tower/ Mini-Tower)
External Drive Enclosures

13. Peripherals
Webcams
Microphones
Docking Stations
Card Readers

14. Printing and Scanning
Scanners
Printer Ink and Toner
3D Printing Filaments

15. Security Accessories
Security Locks for Laptops
CCTV Cameras
Biometric Readers

16. Miscellaneous Accessories
Dust Covers
Cable Management Accessories (Clips, Ties)
Screen Cleaning Kits
Laptop Stands
Mouse Pads
Available,
Out of stock

for device_type_id foriegn key  this is it seeder add sutable values to match that
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

    crated_at updated_at current timestamp will be inserted





         */
         // Current timestamp
         $timestamp = Carbon::now();

         // Accessory data with foreign key associations and default type for undefined cases
         $accessories = [
             // Input Devices
             ['name' => 'Mouse (Wired)', 'accessory_category_id' => 1, 'device_type_id' => 7, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Mouse (Wireless)', 'accessory_category_id' => 1, 'device_type_id' => 7, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Keyboard (Mechanical)', 'accessory_category_id' => 1, 'device_type_id' => 6, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Keyboard (Membrane)', 'accessory_category_id' => 1, 'device_type_id' => 6, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Trackpads', 'accessory_category_id' => 1, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Graphic Tablets', 'accessory_category_id' => 1, 'device_type_id' => 28, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Joysticks', 'accessory_category_id' => 1, 'device_type_id' => 27, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Game Controllers', 'accessory_category_id' => 1, 'device_type_id' => 27, 'created_at' => $timestamp, 'updated_at' => $timestamp],
 
             // Output Devices
             ['name' => 'Monitors', 'accessory_category_id' => 2, 'device_type_id' => 3, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Speakers', 'accessory_category_id' => 2, 'device_type_id' => 8, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Headphones', 'accessory_category_id' => 2, 'device_type_id' => 9, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Earphones', 'accessory_category_id' => 2, 'device_type_id' => 9, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Projectors', 'accessory_category_id' => 2, 'device_type_id' => 31, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Printers (Inkjet)', 'accessory_category_id' => 2, 'device_type_id' => 4, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Printers (Laser)', 'accessory_category_id' => 2, 'device_type_id' => 4, 'created_at' => $timestamp, 'updated_at' => $timestamp],
 
             // Storage Devices
             ['name' => 'External Hard Drives', 'accessory_category_id' => 3, 'device_type_id' => 32, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Solid State Drives (SSD)', 'accessory_category_id' => 3, 'device_type_id' => 12, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Hard Disk Drives (HDD)', 'accessory_category_id' => 3, 'device_type_id' => 11, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'USB Flash Drives', 'accessory_category_id' => 3, 'device_type_id' => 23, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Memory Cards (SD)', 'accessory_category_id' => 3, 'device_type_id' => 24, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Network Attached Storage (NAS)', 'accessory_category_id' => 3, 'device_type_id' => 35, 'created_at' => $timestamp, 'updated_at' => $timestamp],
 
             // Power Supplies and Batteries
             ['name' => 'Power Supply Units (PSU)', 'accessory_category_id' => 4, 'device_type_id' => 17, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Laptop Batteries', 'accessory_category_id' => 4, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Universal Power Adapters', 'accessory_category_id' => 4, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Uninterruptible Power Supplies (UPS)', 'accessory_category_id' => 4, 'device_type_id' => 37, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Surge Protectors', 'accessory_category_id' => 4, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
 
             // Cables and Adapters
             ['name' => 'HDMI Cables', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'VGA Cables', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'DisplayPort Cables', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'USB Cables', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Ethernet Cables', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Power Cables', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Adapters', 'accessory_category_id' => 5, 'device_type_id' => 25, 'created_at' => $timestamp, 'updated_at' => $timestamp],

             //Networking 5
             ['name' => 'Routers', 'accessory_category_id' => 6, 'device_type_id' => 34, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Modems', 'accessory_category_id' => 6, 'device_type_id' => 34, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Network Switches', 'accessory_category_id' => 6, 'device_type_id' => 34, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Wi-Fi Extenders', 'accessory_category_id' => 6, 'device_type_id' => 34, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Network Cards', 'accessory_category_id' => 6, 'device_type_id' => 34, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Antennas', 'accessory_category_id' => 6, 'device_type_id' => 34, 'created_at' => $timestamp, 'updated_at' => $timestamp],

             // Cooling and Airflow Accessories
             ['name' => 'CPU Coolers (Air)', 'accessory_category_id' => 7, 'device_type_id' => 17, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'CPU Coolers (Liquid)', 'accessory_category_id' => 7, 'device_type_id' => 17, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Case Fans', 'accessory_category_id' => 7, 'device_type_id' => 17, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Thermal Paste', 'accessory_category_id' => 7, 'device_type_id' => 17, 'created_at' => $timestamp, 'updated_at' => $timestamp],
             ['name' => 'Cooling Pads for Laptops', 'accessory_category_id' => 7, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Graphics and Video
                ['name' => 'Graphics Cards (GPUs)', 'accessory_category_id' => 8, 'device_type_id' => 16, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Capture Cards', 'accessory_category_id' => 8, 'device_type_id' => 16, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Video Adapters', 'accessory_category_id' => 8, 'device_type_id' => 16, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'VR Headsets', 'accessory_category_id' => 8, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // RAM and Memory Modules
                ['name' => 'Desktop RAM (DDR3)', 'accessory_category_id' => 9, 'device_type_id' => 13, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Desktop RAM (DDR4)', 'accessory_category_id' => 9, 'device_type_id' => 13, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Desktop RAM (DDR5)', 'accessory_category_id' => 9, 'device_type_id' => 13, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Laptop RAM', 'accessory_category_id' => 9, 'device_type_id' => 13, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Server RAM', 'accessory_category_id' => 9, 'device_type_id' => 13, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Motherboards and Components
                ['name' => 'Motherboards (ATX)', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Motherboards (Micro-ATX)', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Motherboards (Mini-ITX)', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'CMOS Batteries', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'PCIe Expansion Cards (Wi-Fi)', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'PCIe Expansion Cards (Ethernet)', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'PCIe Expansion Cards (USB)', 'accessory_category_id' => 10, 'device_type_id' => 14, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Processors
                ['name' => 'Desktop Processors (Intel)', 'accessory_category_id' => 11, 'device_type_id' => 15, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Desktop Processors (AMD)', 'accessory_category_id' => 11, 'device_type_id' => 15, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Laptop Processors (Mobile CPUs)', 'accessory_category_id' => 11, 'device_type_id' => 15, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Cases and Enclosures
                ['name' => 'PC Cases (Full-Tower)', 'accessory_category_id' => 12, 'device_type_id' => 18, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'PC Cases (Mid-Tower)', 'accessory_category_id' => 12, 'device_type_id' => 18, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'PC Cases (Mini-Tower)', 'accessory_category_id' => 12, 'device_type_id' => 18, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'External Drive Enclosures', 'accessory_category_id' => 12, 'device_type_id' => 30, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Peripherals
                ['name' => 'Webcams', 'accessory_category_id' => 13, 'device_type_id' => 29, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Microphones', 'accessory_category_id' => 13, 'device_type_id' => 9, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Docking Stations', 'accessory_category_id' => 13, 'device_type_id' => 30, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Card Readers', 'accessory_category_id' => 13, 'device_type_id' => 30, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Printing and Scanning
                ['name' => 'Scanners', 'accessory_category_id' => 14, 'device_type_id' => 5, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Printer Ink and Toner', 'accessory_category_id' => 14, 'device_type_id' => 4, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => '3D Printing Filaments', 'accessory_category_id' => 14, 'device_type_id' => 30, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                // Security Accessories
                ['name' => 'Security Locks for Laptops', 'accessory_category_id' => 15, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'CCTV Cameras', 'accessory_category_id' => 15, 'device_type_id' => 5, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Biometric Readers', 'accessory_category_id' => 15, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],

                //Miscellaneous 
                ['name' => 'Dust Covers', 'accessory_category_id' => 16, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Cable Management Accessories (Clips, Ties)', 'accessory_category_id' => 16, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Screen Cleaning Kits', 'accessory_category_id' => 16, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Laptop Stands', 'accessory_category_id' => 16, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
                ['name' => 'Mouse Pads', 'accessory_category_id' => 16, 'device_type_id' => 7, 'created_at' => $timestamp, 'updated_at' => $timestamp],
               
            //  // Default values for missing items
            //  ['name' => 'Miscellaneous', 'accessory_category_id' => 16, 'device_type_id' => 1, 'created_at' => $timestamp, 'updated_at' => $timestamp],
         ];
 
         // Insert all accessories
         DB::table('accessories')->insert($accessories);
    }
}
