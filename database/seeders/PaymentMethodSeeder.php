<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            [
                'id' => 1,
                'name' => 'Credit Card',
                'image' => 'credit_card.png',
                'is_cash' => false,
            ],
            [
                'id' => 2,
                'name' => 'PayPal',
                'image' => 'paypal.png',
                'is_cash' => false,
            ],
            [
                'id' => 3,
                'name' => 'Cash',
                'image' => 'cash.png',
                'is_cash' => true,
            ],
            // Add more payment methods as needed
        ];

        $now = now();

        foreach ($paymentMethods as $method) {
            DB::table('payment_methods')->updateOrInsert(
                ['id' => $method['id']],
                array_merge($method, [
                    'created_by' => 'system',
                    'created_at' => $now,
                    'updated_by' => 'system',
                    'updated_at' => $now,
                ])
            );
        }
    }
};