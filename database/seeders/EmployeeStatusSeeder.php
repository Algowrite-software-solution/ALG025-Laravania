<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // write seeder with this value Active,
//Inactive

        DB::table('employee_statuses')->insert([
            ['status' => 'Active'],
            ['status' => 'Inactive'],
        ]);


        
    }
}
