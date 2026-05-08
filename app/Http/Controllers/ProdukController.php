<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // 1. PASTIKAN FUNGSI INDEX ADA DI SINI
    public function index(Request $request)
    {
        $q = $request->query('q');

        $produks = Produk::when($q, function ($query) use ($q) {
                return $query->where('nama', 'like', '%' . $q . '%')
                             ->orWhere('kategori', 'like', '%' . $q . '%');
            })
            ->latest()
            ->paginate(6);

        return view('produk.index', compact('produks', 'q'));
    }

    // 2. FUNGSI STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'kategori' => 'nullable',
        ]);

        Produk::create($validated);
        return redirect()->back()->with('success', 'Produk berhasil ditambah!');
    }

    // 3. FUNGSI DESTROY (HAPUS)
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
} // <--- Pastikan kurung tutup ini ada di paling bawah file!