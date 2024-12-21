<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCardStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        for job_status coloumn
        Pending
In Progress
Completed
Cancelled
Under Repair

for created_at updated_at current timsestapm will be inserted

         */
        DB::table('job_card_statuses')->insert([
            ['job_status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['job_status' => 'In Progress', 'created_at' => now(), 'updated_at' => now()],
            ['job_status' => 'Completed', 'created_at' => now(), 'updated_at' => now()],
            ['job_status' => 'Cancelled', 'created_at' => now(), 'updated_at' => now()],
            ['job_status' => 'Under Repair', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
