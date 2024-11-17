<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for the "orders" table (only numeric order numbers)
        $orders = [
            ['order_number' => 1001],
            ['order_number' => 1002],
            ['order_number' => 1003],
            ['order_number' => 1004],
            ['order_number' => 1005],
            ['order_number' => 1006],
            ['order_number' => 1007],
            ['order_number' => 1008],
            ['order_number' => 1009],
            ['order_number' => 1010],
            ['order_number' => 1011],
            ['order_number' => 1012],
            ['order_number' => 1013],
            ['order_number' => 1014],
            ['order_number' => 1015],
            ['order_number' => 1016],
            ['order_number' => 1017],
            ['order_number' => 1018],
        ];

        foreach ($orders as $row) {
            Order::create($row);  // Insert each order into the database
        }
    }
}
