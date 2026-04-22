<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    private $produk = [
        ["nama" => "Laptop ASUS", "harga" => 8000000],
        ["nama" => "Mouse Wireless Logitech", "harga" => 600000],
        ["nama" => "Keyboard Mechanical", "harga" => 550000],
        ["nama" => "Monitor Samsung 24 inch", "harga" => 2500000],
        ["nama" => "Flashdisk Sandisk 32GB", "harga" => 150000],
        ["nama" => "Headset Gaming", "harga" => 350000],
        ["nama" => "Webcam HD", "harga" => 400000],
        ["nama" => "Speaker Bluetooth", "harga" => 300000],
        ["nama" => "Power Bank 10000mAh", "harga" => 180000],
        ["nama" => "Printer Epson", "harga" => 2200000],
    ];

    public function index()
    {
        return view('katalog.index', [
            "produk" => $this->produk
        ]);
    }

    public function show($id)
    {
        if (!isset($this->produk[$id])) {
            abort(404);
        }

        $produk = $this->produk[$id];

        return view('katalog.show', [
            "produk" => $produk
        ]);
    }
}