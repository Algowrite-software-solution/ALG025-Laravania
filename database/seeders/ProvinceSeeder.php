<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /* 
    for pro_name coloumn
    Western
Central
Southern
Northern
Eastern
North Western
North Central
Uva
Sabaragamuwa

for created_at updated_at current timsestapm will be inserted
    */
    public function run(): void
    {
        //
        DB::table('provinces')->insert([
            ['pro_name' => 'Western', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'Central', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'Southern', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'Northern', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'Eastern', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'North Western', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'North Central', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'Uva', 'created_at' => now(), 'updated_at' => now()],
            ['pro_name' => 'Sabaragamuwa', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
