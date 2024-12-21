<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        for color coloumn 
        Black
White
Gray
Red
Blue
Green
Yellow
Orange
Purple
Pink
Silver
Gold
Rose Gold
Space Gray
Platinum
Rainbow
Gradient Blue
Gradient Purple
Black and Red
Black and Blue
Maroon
Crimson
Burgundy
Navy Blue
Sky Blue
Teal
Lime Green
Olive Green
Forest Green
Mustard
Pale Yellow
Light Gray
Dark Gray
Charcoal
Beige
Brown
Cyan
Magenta

for  created_at updated_at current timsestapm will be inserted
         */

        DB::table('colors')->insert([
            ['color' => 'Black', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'White', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Gray', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Red', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Blue', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Green', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Yellow', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Orange', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Purple', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Pink', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Silver', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Gold', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Rose Gold', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Space Gray', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Platinum', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Rainbow', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Gradient Blue', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Gradient Purple', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Black and Red', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Black and Blue', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Maroon', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Crimson', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Burgundy', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Navy Blue', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Sky Blue', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Teal', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Lime Green', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Olive Green', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Forest Green', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Mustard', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Pale Yellow', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Light Gray', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Dark Gray', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Charcoal', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Beige', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Brown', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Cyan', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Magenta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
