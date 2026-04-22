@extends('layouts.app')

@section('title', 'Katalog')

@section('content')

<h1 class="text-3xl font-bold mb-6 text-blue-900">
    Produk
</h1>

<div class="grid md:grid-cols-3 gap-6">

    @foreach ($produk as $i => $item)
    <div class="bg-blue-50 border border-blue-200 p-4 rounded-xl shadow hover:shadow-lg transition">

        <h2 class="font-semibold text-blue-800 text-lg">
            {{ $item['nama'] }}
        </h2>

        <p class="my-3 text-gray-700">
            Rp {{ number_format($item['harga'], 0, ',', '.') }}
        </p>

        <a href="/katalog/{{ $i }}" 
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-lg">
            Detail
        </a>

    </div>
    @endforeach

</div>

@endsection