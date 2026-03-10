<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    private $produk = [
        ["nama" => "Laptop", "harga" => 8000000],
        ["nama" => "Mouse", "harga" => 150000],
        ["nama" => "Keyboard", "harga" => 300000],
        ["nama" => "Monitor", "harga" => 2000000],
        ["nama" => "Flashdisk", "harga" => 100000],
    ];

    public function index()
    {
        return view('katalog.index', [
            "produk" => $this->produk
        ]);
    }

    public function show($id)
    {
        $produk = $this->produk[$id];

        return view('katalog.show', [
            "produk" => $produk
        ]);
    }
}