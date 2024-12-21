<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // TODO: Add seeding logic here
        $this->call([
            InvoiceStatusSeeder::class,
            CitySeeder::class,
            ProvinceSeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            ColorSeeder::class,
            SizeSeeder::class,
            CapacitySeeder::class,
            BrandSeeder::class,
            WarrantySeeder::class,
            EmployeeStatusSeeder::class,
            EmployeeTypeSeeder::class,
            EmployeeSeeder::class,
            StockStatusSeeder::class,
            DeviceModelSeeder::class,
            DeviceTypeSeeder::class,
            DeviceSeeder::class,
            JobCardStatusSeeder::class,
            AccessoryCategoriesSeeder::class,
            AccessorySeeder::class,
            AccessoryModelSeeder::class,
            CusProblemSeeder::class,
            JobCardSeeder::class,
            SupplierSeeder::class,
            StockSeeder::class,
            InvoiceSeeder::class,
            InvoiceItemSeeder::class,
        ]);
    }
}
