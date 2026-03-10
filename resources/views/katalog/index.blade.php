<h1>Katalog Produk</h1>

<ul>
@foreach($produk as $index => $item)
<li>
{{ $item['nama'] }} - Rp {{ $item['harga'] }}
<a href="/katalog/{{ $index }}">Detail</a>
</li>
@endforeach
</ul>