<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Laptop',
                'description' => 'Kategori produk laptop dan notebook',
            ],
            [
                'id' => 2,
                'name' => 'Smartphone',
                'description' => 'Kategori produk smartphone dan tablet',
            ],
            [
                'id' => 3,
                'name' => 'Tablet',
                'description' => 'Kategori produk tablet dan phablet',
            ],
            [
                'id' => 4,
                'name' => 'Smartwatch',
                'description' => 'Kategori produk smartwatch dan wearable',
            ],
            [
                'id' => 5,
                'name' => 'Audio',
                'description' => 'Kategori produk audio dan headphone',
            ],
            [
                'id' => 6,
                'name' => 'Kamera',
                'description' => 'Kategori produk kamera dan perangkat fotografi',
            ],
            [
                'id' => 7,
                'name' => 'Game Console',
                'description' => 'Kategori produk game console dan perangkat gaming',
            ],
            [
                'id' => 8,
                'name' => 'Peripheral',
                'description' => 'Kategori produk peripheral dan perangkat komputer',
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['id' => $category['id']],
                [
                    'name' => $category['name'],
                    'description' => $category['description'],
                    'slug' => Str::slug($category['name']),
                    'is_active' => true,
                    'created_by' => 'System',
                    'updated_by' => 'System',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
};