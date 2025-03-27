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
    public function run()
    {
        $products = [
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with USB receiver.',
                'price' => 29.99,
                'stock_quantity' => 100,
                'image_url' => 'https://example.com/images/wireless-mouse.jpg',
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'RGB backlit mechanical keyboard with tactile switches.',
                'price' => 79.99,
                'stock_quantity' => 50,
                'image_url' => 'https://example.com/images/mechanical-keyboard.jpg',
            ],
            [
                'name' => 'Gaming Headset',
                'description' => 'Surround sound gaming headset with noise cancellation.',
                'price' => 59.99,
                'stock_quantity' => 75,
                'image_url' => 'https://example.com/images/gaming-headset.jpg',
            ],
            [
                'name' => 'Laptop Stand',
                'description' => 'Adjustable aluminum laptop stand.',
                'price' => 34.99,
                'stock_quantity' => 120,
                'image_url' => 'https://example.com/images/laptop-stand.jpg',
            ],
            [
                'name' => 'USB-C Hub',
                'description' => 'Multi-port USB-C hub with HDMI and USB 3.0 ports.',
                'price' => 49.99,
                'stock_quantity' => 60,
                'image_url' => 'https://example.com/images/usb-c-hub.jpg',
            ],
            [
                'name' => 'Smartphone Tripod',
                'description' => 'Portable tripod with Bluetooth remote.',
                'price' => 24.99,
                'stock_quantity' => 90,
                'image_url' => 'https://example.com/images/smartphone-tripod.jpg',
            ],
            [
                'name' => 'Portable SSD',
                'description' => '1TB portable SSD with fast data transfer.',
                'price' => 149.99,
                'stock_quantity' => 40,
                'image_url' => 'https://example.com/images/portable-ssd.jpg',
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'Fitness tracker with heart rate monitor and GPS.',
                'price' => 199.99,
                'stock_quantity' => 30,
                'image_url' => 'https://example.com/images/smartwatch.jpg',
            ],
            [
                'name' => 'Bluetooth Speaker',
                'description' => 'Waterproof Bluetooth speaker with deep bass.',
                'price' => 89.99,
                'stock_quantity' => 70,
                'image_url' => 'https://example.com/images/bluetooth-speaker.jpg',
            ],
            [
                'name' => 'Power Bank',
                'description' => '10,000mAh portable charger with fast charging support.',
                'price' => 39.99,
                'stock_quantity' => 150,
                'image_url' => 'https://example.com/images/power-bank.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
