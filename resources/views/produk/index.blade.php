@extends('layouts.app')

@section('content')
<div style="margin-top: 2rem; font-family: sans-serif;">
    
    <div style="background: white; border-radius: 15px; shadow: 0 4px 6px rgba(0,0,0,0.1); overflow: hidden; border: 1px solid #e5e7eb;">
        
        <div style="background-color: #1e3a8a; padding: 1.5rem; display: flex; justify-content: space-between; align-items: center;">
            <h2 style="color: white; margin: 0; font-size: 1.25rem; font-weight: bold;">📦 Daftar Produk Terintegrasi</h2>
            <div style="color: #bfdbfe; font-size: 0.875rem;">NIM: 4124011</div>
        </div>

        <div style="padding: 1.5rem;">
            
            <form action="{{ route('produk.index') }}" method="GET" style="margin-bottom: 1.5rem; display: flex; gap: 10px;">
                <input type="text" name="q" value="{{ request('q') }}" 
                       placeholder="Cari nama produk..." 
                       style="flex-grow: 1; padding: 10px 15px; border: 1px solid #d1d5db; border-radius: 8px; outline: none;">
                <button type="submit" style="background-color: #2563eb; color: white; padding: 10px 25px; border: none; border-radius: 8px; cursor: pointer; font-weight: bold;">
                    Cari
                </button>
            </form>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="background-color: #f9fafb; border-bottom: 2px solid #e5e7eb;">
                            <th style="padding: 12px; color: #4b5563; font-size: 0.75rem; text-transform: uppercase;">Nama Produk</th>
                            <th style="padding: 12px; color: #4b5563; font-size: 0.75rem; text-transform: uppercase;">Harga</th>
                            <th style="padding: 12px; color: #4b5563; font-size: 0.75rem; text-transform: uppercase; text-align: center;">Stok</th>
                            <th style="padding: 12px; color: #4b5563; font-size: 0.75rem; text-transform: uppercase;">Kategori</th>
                            <th style="padding: 12px; color: #4b5563; font-size: 0.75rem; text-transform: uppercase; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produks as $p)
                        <tr style="border-bottom: 1px solid #f3f4f6;">
                            <td style="padding: 15px; font-weight: 600; color: #111827;">{{ $p->nama }}</td>
                            <td style="padding: 15px; color: #059669; font-weight: bold;">Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                            <td style="padding: 15px; text-align: center;">
                                <span style="background-color: #dbeafe; color: #1e40af; padding: 4px 12px; border-radius: 999px; font-size: 0.75rem; font-weight: 500;">
                                    {{ $p->stok }} Unit
                                </span>
                            </td>
                            <td style="padding: 15px; color: #6b7280;">{{ $p->kategori ?? '-' }}</td>
                            <td style="padding: 15px; text-align: center;">
                                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button style="color: #dc2626; background: none; border: none; cursor: pointer; font-weight: bold; font-size: 0.875rem;">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" style="padding: 40px; text-align: center; color: #9ca3af; font-style: italic;">Data tidak ditemukan...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div style="margin-top: 1.5rem;">
                {{ $produks->links() }}
            </div>

        </div>
    </div>
</div>
@endsection