<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $now = Carbon::now();

        DB::table('cart_items')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'product_name' => 'Product 1',
                'quantity' => 2,
                'price' => 100.00,
                'product_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'customer_id' => 1,
                'product_name' => 'Product 2',
                'quantity' => 1,
                'price' => 50.00,
                'product_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'customer_id' => 1,
                'product_name' => 'Product 3',
                'quantity' => 3,
                'price' => 75.50,
                'product_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
