<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk; // Sangat penting: Import model Produk di sini

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Laptop ASUS ROG',
                'harga' => 18500000,
                'stok' => 5,
                'kategori' => 'Elektronik',
                'aktif' => true
            ],
            [
                'nama' => 'Mouse Gaming Logitech',
                'harga' => 450000,
                'stok' => 25,
                'kategori' => 'Aksesoris',
                'aktif' => true
            ],
            [
                'nama' => 'Keyboard Mechanical',
                'harga' => 1200000,
                'stok' => 10,
                'kategori' => 'Aksesoris',
                'aktif' => true
            ],
            [
                'nama' => 'Monitor Samsung 24 Inch',
                'harga' => 2300000,
                'stok' => 7,
                'kategori' => 'Elektronik',
                'aktif' => true
            ],
            [
                'nama' => 'Webcam Full HD',
                'harga' => 750000,
                'stok' => 15,
                'kategori' => 'Elektronik',
                'aktif' => false // Contoh produk tidak aktif
            ],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}