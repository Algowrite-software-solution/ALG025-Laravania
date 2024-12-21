<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarrantySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*  for warranty coloumn 
        No Warranty
1 Month
3 Months
6 Months
9 Months
1 Year
2 Years
3 Years
4 Years
5 Years
Lifetime Warrant

for created_at updated_at current timsestapm will be inserted
*/

        DB::table('warranties')->insert([
            ['warranty' => 'No Warranty', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '1 Month', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '3 Months', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '6 Months', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '9 Months', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '1 Year', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '2 Years', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '3 Years', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '4 Years', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => '5 Years', 'created_at' => now(), 'updated_at' => now()],
            ['warranty' => 'Lifetime Warranty', 'created_at' => now(), 'updated_at' => now()],
        ]);


    }
}
