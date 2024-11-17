<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cart; // import the Cart model

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for the "carts" table
        $carts = [
            ['name' => 'Shopping Cart 1'],
            ['name' => 'Shopping Cart 2'],
            ['name' => 'Shopping Cart 3'],
            ['name' => 'Shopping Cart 4'],
            ['name' => 'Shopping Cart 5'],
            ['name' => 'Shopping Cart 6'],
            ['name' => 'Shopping Cart 7'],
            ['name' => 'Shopping Cart 8'],
            ['name' => 'Shopping Cart 9'],
            ['name' => 'Shopping Cart 10'],
            ['name' => 'Shopping Cart 11'],
            ['name' => 'Shopping Cart 12'],
            ['name' => 'Shopping Cart 13'],
            ['name' => 'Shopping Cart 14'],
            ['name' => 'Shopping Cart 15'],
            ['name' => 'Shopping Cart 16'],
            ['name' => 'Shopping Cart 17'],
            ['name' => 'Shopping Cart 18'],
        ];

        foreach ($carts as $row) 
        {
            Cart::create($row);  // Insert each cart into the database
        }
    }
}
