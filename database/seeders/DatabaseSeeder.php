<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
        
        User::factory()->create([
            'name' => 'subha',
            'email' => 'subha@gmail.com',
            'password' => Hash::make('subha')
        ]);

        // Call the ProductSeeder
        $this->call(ProductSeeder::class);

        // Call the CartSeeder
        $this->call(CartSeeder::class);

        // Call the OrderSeeder
        $this->call(OrderSeeder::class);
    }
}
