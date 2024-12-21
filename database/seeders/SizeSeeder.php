<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        for size coloumn 

        7 inches
8 inches
10 inches
11.6 inches
13.3 inches
14 inches
15 inches
15.6 inches
17 inches
19 inches
21.5 inches
23 inches
24 inches
27 inches
32 inches
34 inches
49 inches
Mini-Tower
Mid-Tower
Full-Tower
Small Form Factor
Rackmount
A4
A3
A5
Legal
Letter
1 foot
3 feet
6 feet
10 feet
25 feet
50 feet
100 feet
80 mm
92 mm
120 mm
140 mm
200 mm
2.5 inches
3.5 inches
M.2
Small Mouse Pad
Medium Mouse Pad
Large Mouse Pad
Extra Large Mouse Pad
Laptop Sleeve 13 inches
Laptop Sleeve 15 inches
Laptop Sleeve 17 inches
Single Monitor Arm
Dual Monitor Arm
Triple Monitor Arm
4-port USB Hub
7-port USB Hub
10-port USB Hub

create at updated at current timestamp will be inserted
         */

        DB::table('sizes')->insert([
            ['size' => '7 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '8 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '10 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '11.6 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '13.3 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '14 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '15 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '15.6 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '17 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '19 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '21.5 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '23 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '24 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '27 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '32 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '34 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '49 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Mini-Tower', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Mid-Tower', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Full-Tower', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Small Form Factor', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Rackmount', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'A4', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'A3', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'A5', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Legal', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Letter', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '1 foot', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '3 feet', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '6 feet', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '10 feet', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '25 feet', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '50 feet', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '100 feet', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '80 mm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '92 mm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '120 mm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '140 mm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '200 mm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '2.5 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '3.5 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'M.2', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Small Mouse Pad', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Medium Mouse Pad', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Large Mouse Pad', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Extra Large Mouse Pad', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Laptop Sleeve 13 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Laptop Sleeve 15 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Laptop Sleeve 17 inches', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Single Monitor Arm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Dual Monitor Arm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => 'Triple Monitor Arm', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '4-port USB Hub', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '7-port USB Hub', 'created_at' => now(), 'updated_at' => now()],
            ['size' => '10-port USB Hub', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
