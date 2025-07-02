<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'MacBook Pro 16"',
                'category_id' => 1,
                'price' => 45000000,
                'stock' => 5,
                'description' => 'Laptop profesional dengan performa tinggi untuk kebutuhan kreatif dan produktivitas.'
            ],
            [
                'id' => 2,
                'name' => 'Dell XPS 15',
                'category_id' => 1,
                'price' => 40000000,
                'stock' => 8,
                'description' => 'Laptop premium dengan desain elegan dan kinerja handal untuk pekerjaan berat.'
            ],
            [
                'id' => 3,
                'name' => 'Asus ROG Strix',
                'category_id' => 1,
                'price' => 35000000,
                'stock' => 10,
                'description' => 'Laptop gaming dengan performa tinggi dan tampilan visual yang memukau.'
            ],
            [
                'id' => 4,
                'name' => 'iPhone 14 Pro',
                'category_id' => 2,
                'price' => 20000000,
                'stock' => 15,
                'description' => 'Smartphone canggih dengan kamera mutakhir dan desain premium.'
            ],
            [
                'id' => 5,
                'name' => 'Samsung Galaxy S23',
                'category_id' => 2,
                'price' => 18000000,
                'stock' => 20,
                'description' => 'Smartphone flagship dengan fitur inovatif dan tampilan layar yang tajam.'
            ],
            [
                'id' => 6,
                'name' => 'Google Pixel 7',
                'category_id' => 2,
                'price' => 15000000,
                'stock' => 12,
                'description' => 'Smartphone Android dengan kamera yang menakjubkan dan performa responsif.'
            ],
            [
                'id' => 7,
                'name' => 'iPad Pro 12.9"',
                'category_id' => 3,
                'price' => 18000000,
                'stock' => 7,
                'description' => 'Tablet dengan layar besar dan performa luar biasa untuk produktivitas dan hiburan.'
            ],
            [
                'id' => 8,
                'name' => 'Samsung Galaxy Tab S8',
                'category_id' => 3,
                'price' => 12000000,
                'stock' => 10,
                'description' => 'Tablet canggih dengan fitur multi-tasking dan desain modern.'
            ],
            [
                'id' => 9,
                'name' => 'Apple Watch Ultra',
                'category_id' => 4,
                'price' => 10000000,
                'stock' => 12,
                'description' => 'Smartwatch premium dengan fitur kebugaran lengkap dan konektivitas optimal.'
            ],
            [
                'id' => 10,
                'name' => 'Garmin Fenix 7',
                'category_id' => 4,
                'price' => 9000000,
                'stock' => 10,
                'description' => 'Smartwatch olahraga dengan fitur GPS dan daya tahan baterai yang tinggi.'
            ],
            [
                'id' => 11,
                'name' => 'Sony WH-1000XM5',
                'category_id' => 5,
                'price' => 6000000,
                'stock' => 15,
                'description' => 'Headphone noise-cancelling premium dengan kualitas suara superior.'
            ],
            [
                'id' => 12,
                'name' => 'Bose QuietComfort 45',
                'category_id' => 5,
                'price' => 5500000,
                'stock' => 20,
                'description' => 'Headphone dengan kenyamanan luar biasa dan suara yang jernih untuk mendengarkan musik.'
            ],
            [
                'id' => 13,
                'name' => 'Canon EOS R6',
                'category_id' => 6,
                'price' => 35000000,
                'stock' => 8,
                'description' => 'Kamera mirrorless profesional dengan kemampuan video 4K dan performa tinggi.'
            ],
            [
                'id' => 14,
                'name' => 'Sony A7 IV',
                'category_id' => 6,
                'price' => 37000000,
                'stock' => 6,
                'description' => 'Kamera mirrorless dengan sensor full-frame dan kemampuan fotografi tinggi.'
            ],
            [
                'id' => 15,
                'name' => 'GoPro Hero 11',
                'category_id' => 6,
                'price' => 8000000,
                'stock' => 15,
                'description' => 'Kamera aksi tahan banting untuk merekam petualangan ekstrem dengan kualitas HD.'
            ],
            [
                'id' => 16,
                'name' => 'PlayStation 5',
                'category_id' => 7,
                'price' => 9000000,
                'stock' => 20,
                'description' => 'Konsol game generasi terbaru dengan performa grafis tinggi dan gameplay imersif.'
            ],
            [
                'id' => 17,
                'name' => 'Xbox Series X',
                'category_id' => 7,
                'price' => 8500000,
                'stock' => 18,
                'description' => 'Konsol game dengan kemampuan gaming 4K dan kecepatan tinggi untuk pengalaman bermain yang mulus.'
            ],
            [
                'id' => 18,
                'name' => 'Nintendo Switch OLED',
                'category_id' => 7,
                'price' => 6000000,
                'stock' => 25,
                'description' => 'Konsol hybrid dengan layar OLED menawan untuk hiburan di rumah dan mobile gaming.'
            ],
            [
                'id' => 19,
                'name' => 'Razer BlackWidow Keyboard',
                'category_id' => 8,
                'price' => 2500000,
                'stock' => 30,
                'description' => 'Keyboard mekanik gaming dengan respons cepat dan desain ergonomis untuk para gamer.'
            ],
            [
                'id' => 20,
                'name' => 'Logitech MX Master 3',
                'category_id' => 8,
                'price' => 2000000,
                'stock' => 25,
                'description' => 'Mouse wireless premium dengan desain ergonomis dan akurasi tinggi untuk produktivitas.'
            ],
            [
                'id' => 21,
                'name' => 'Samsung 49" UltraWide Monitor',
                'category_id' => 8,
                'price' => 15000000,
                'stock' => 10,
                'description' => 'Monitor ultra lebar dengan resolusi tinggi dan warna yang akurat untuk kebutuhan profesional.'
            ],
            [
                'id' => 22,
                'name' => 'Corsair Gaming Headset',
                'category_id' => 8,
                'price' => 2000000,
                'stock' => 15,
                'description' => 'Headset gaming dengan suara jernih dan mikrofon berkualitas untuk komunikasi yang optimal.'
            ],
            [
                'id' => 23,
                'name' => 'SteelSeries Mouse',
                'category_id' => 8,
                'price' => 1500000,
                'stock' => 20,
                'description' => 'Mouse gaming dengan sensor presisi tinggi dan desain ergonomis untuk performa maksimal.'
            ],
            [
                'id' => 24,
                'name' => 'Elgato Stream Deck',
                'category_id' => 8,
                'price' => 2500000,
                'stock' => 15,
                'description' => 'Perangkat kontrol untuk streaming dengan fungsi kustomisasi yang luas untuk para content creator.'
            ],
            [
                'id' => 25,
                'name' => 'Apple AirPods Pro',
                'category_id' => 5,
                'price' => 4000000,
                'stock' => 30,
                'description' => 'Earbuds nirkabel dengan kualitas suara superior dan fitur noise cancellation yang canggih.'
            ],
            [
                'id' => 26,
                'name' => 'JBL Bluetooth Speaker',
                'category_id' => 5,
                'price' => 3000000,
                'stock' => 40,
                'description' => 'Speaker Bluetooth portabel dengan suara bass yang kuat dan desain stylish.'
            ],
            [
                'id' => 27,
                'name' => 'Oculus Quest 2',
                'category_id' => 7,
                'price' => 7000000,
                'stock' => 10,
                'description' => 'Headset VR all-in-one dengan pengalaman imersif dan mudah digunakan.'
            ],
            [
                'id' => 28,
                'name' => 'DJI Mini 3 Drone',
                'category_id' => 6,
                'price' => 10000000,
                'stock' => 12,
                'description' => 'Drone ringan dengan kamera HD dan kemampuan terbang yang stabil untuk fotografi udara.'
            ],
            [
                'id' => 29,
                'name' => 'MSI Gaming Laptop',
                'category_id' => 1,
                'price' => 30000000,
                'stock' => 8,
                'description' => 'Laptop gaming dengan performa tinggi dan sistem pendingin yang efektif untuk para gamer.'
            ],
            [
                'id' => 30,
                'name' => 'Dell Ultrasharp Monitor',
                'category_id' => 8,
                'price' => 10000000,
                'stock' => 12,
                'description' => 'Monitor profesional dengan resolusi tinggi dan warna yang akurat untuk keperluan desain grafis.'
            ],
        ];

        foreach ($products as &$product) {
            $product['slug'] = Str::slug($product['name']);
            $product['image'] = strtolower(str_replace(' ', '_', $product['name'])) . '.jpg';
            $product['is_active'] = true;
            // $product['discount'] = rand(0, 10) * 1.00;
            $product['barcode'] = rand(1000000000, 9999999999);
            $product['created_by'] = 'System';
            $product['updated_by'] = 'System';
            $product['created_at'] = now();
            $product['updated_at'] = now();
        }

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['id' => $product['id']], 
                $product
            );
        }
    }
};