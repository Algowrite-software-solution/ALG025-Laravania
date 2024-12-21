<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /* 
         for capacity coloumn 
         512 MB
● 1 GB
● 2 GB
● 4 GB
● 8 GB
● 16 GB
● 32 GB
● 64 GB
● 128 GB
● 256 GB
● 512 GB
● 1 TB
● 2 TB
● 4 TB
● 8 TB
12 TB
16 TB
24 TB
48 TB
120 GB
250 GB
256 GB
500 GB
512 GB
10 GB
6 GB
24 GB
10,000 Pages
5,000 Pages
2,500 Pages
1,000 Pages
500 Pages

for  created_at updated_at current timsestapm will be inserted

        */

        DB::table('capacities')->insert([
            ['capacity' => '512 MB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '1 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '2 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '4 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '8 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '16 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '32 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '64 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '128 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '256 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '512 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '1 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '2 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '4 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '8 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '12 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '16 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '24 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '48 TB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '120 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '250 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' =>'256 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '500 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '512 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '10 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '6 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '24 GB', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '10,000 Pages', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '5,000 Pages', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '2,500 Pages', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '1,000 Pages', 'created_at' => now(), 'updated_at' => now()],
            ['capacity' => '500 Pages', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
