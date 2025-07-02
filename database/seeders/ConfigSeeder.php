<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configs = [
            [
                'id' => 1,
                'key' => 'APP_NAME',
                'value' => 'Laravel Ecommerce',
                'description' => 'Nama aplikasi',
            ],
            [
                'id' => 2,
                'key' => 'APP_ENV',
                'value' => env('APP_ENV', 'production'),
                'description' => 'Mode aplikasi',
            ],
            [
                'id' => 3,
                'key' => 'APP_DEBUG',
                'value' => env('APP_DEBUG', false),
                'description' => 'Mode debug aplikasi',
            ],
            [
                'id' => 4,
                'key' => 'APP_URL',
                'value' => env('APP_URL', 'http://localhost'),
                'description' => 'URL aplikasi',
            ],
            [
                'id' => 5,
                'key' => 'EMAIL_FROM_ADDRESS',
                'value' => env('EMAIL_FROM_ADDRESS', 'noreply@laravel.com'),
                'description' => 'Alamat email pengirim',
            ],
            [
                'id' => 6,
                'key' => 'EMAIL_FROM_NAME',
                'value' => env('EMAIL_FROM_NAME', 'Laravel Ecommerce'),
                'description' => 'Nama pengirim email',
            ],
            [
                'id' => 7,
                'key' => 'TAX',
                'value' => env('TAX', 10),
                'description' => 'Persentase Pajak',
            ],
        ];

        $now = now();

        foreach ($configs as $config) {
            DB::table('configs')->updateOrInsert(
                ['id' => $config['id']],
                array_merge($config, [
                    'created_by' => 'Admin',
                    'created_at' => $now,
                    'updated_by' => 'Admin',
                    'updated_at' => $now,
                ])
            );
        }
    }
};