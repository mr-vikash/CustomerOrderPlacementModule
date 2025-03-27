<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        $methods = [
            'Credit Card',
            'Debit Card',
            'Net Banking',
            'UPI',
            'Wallet',
            'Cash on Delivery',
            'PayPal',
            'Google Pay',
            'Apple Pay',
            'Bank Transfer'
        ];

        foreach ($methods as $method) {
            PaymentMethod::create(['method_name' => $method]);
        }
    }
}
