<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /* 
        for status coloumn
        Pending
Paid
Unpaid
Partially Paid
Cancelled
Draft
Issued
Paid in Full
Payment Failed

for created_at updated_at current timsestapm will be inserted
        */
        DB::table('invoice_statuses')->insert([
            ['status' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Paid', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Unpaid', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Partially Paid', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Cancelled', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Draft', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Issued', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Paid in Full', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Payment Failed', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
