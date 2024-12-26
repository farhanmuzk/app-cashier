<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::create([
            'user_id' => 1,
            'total_price' => 30.00,
            'payment_method' => 'Cash',
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => 1,
            'quantity' => 2,
            'price' => 20.00,
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 10.00,
        ]);
    }
}
