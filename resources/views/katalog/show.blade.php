@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded-xl shadow">

    <h1 class="text-2xl font-bold text-blue-900 mb-4">
        Detail Produk
    </h1>

    <p class="mb-2">
        <span class="font-semibold">Nama:</span> {{ $produk['nama'] }}
    </p>

    <p class="mb-4">
        <span class="font-semibold">Harga:</span> 
        Rp {{ number_format($produk['harga'], 0, ',', '.') }}
    </p>

    <a href="/katalog" 
       class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
        ← Kembali
    </a>

</div>

@endsection