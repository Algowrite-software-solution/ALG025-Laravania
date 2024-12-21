<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         /*
         for status coloumn Available,
Out of stock

created_at updated_at current timsestapm will be inserted




          */

        DB::table('stock_statuses')->insert([
            ['status' => 'Available', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Out of stock', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
