@extends('layouts.app')

@section('content')

<h1 style="font-size:28px; font-weight:bold; margin-bottom:20px; color:#0a3d62;">
    🌊 Katalog Produk
</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
    @foreach ($produk as $i => $item)
    <div style="
        background:linear-gradient(to bottom, #dff9fb, #c7ecee);
        border:1px solid #74b9ff;
        padding:15px;
        width:220px;
        border-radius:10px;
        box-shadow:3px 3px 8px rgba(0,0,0,0.1);
    ">

        <h2 style="font-weight:bold; color:#0984e3;">
            {{ $item['nama'] }}
        </h2>

        <p style="margin:10px 0;">
            Rp {{ number_format($item['harga']) }}
        </p>

        <a href="/katalog/{{ $i }}" style="
            display:inline-block;
            background:#0984e3;
            color:white;
            padding:5px 10px;
            border-radius:5px;
            text-decoration:none;
        ">
            Detail
        </a>

    </div>
    @endforeach
</div>

@endsection