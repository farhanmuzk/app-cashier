<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Product A', 'price' => 10.00, 'stock' => 100]);
        Product::create(['name' => 'Product B', 'price' => 20.00, 'stock' => 50]);
    }
}
