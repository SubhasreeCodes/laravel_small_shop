<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for the "products" table
        $products = [
            ['name' => 'Laptop'],
            ['name' => 'Smartphone'],
            ['name' => 'Headphones'],
            ['name' => 'Tablet'],
            ['name' => 'Smartwatch'],
            ['name' => 'Keyboard'],
            ['name' => 'Mouse'],
            ['name' => 'Monitor'],
            ['name' => 'Printer'],
            ['name' => 'Camera'],
            ['name' => 'Wireless Speaker'],
            ['name' => 'Bluetooth Earbuds'],
            ['name' => 'USB Flash Drive'],
            ['name' => 'External Hard Drive'],
            ['name' => 'Router'],
            ['name' => 'Power Bank'],
            ['name' => 'Game Console'],
            ['name' => 'E-Reader'],
        ];

        foreach ($products as $row) 
        {
            Product::create($row);
        }
    }
}
