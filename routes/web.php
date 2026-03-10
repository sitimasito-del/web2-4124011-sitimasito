<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

 

Route::get('/', function () {

    return view('welcome');

});

 

// Tugas 2

Route::get('/perkenalan', function () {

    return '<h1>Halo! Nama saya Siti Masito</h1>

            <p>NIM: 4124011 | Prodi: Sistem Informasi</p>

            <p>Saya siap belajar Laravel! 🚀</p>';

});

// Route 3 buah atau tugas 3
Route::get('/about', function () {
    return "<h1>Halaman About</h1>";
})->name('about.index');

Route::get('/kontak', function () {
    return "<h1>Halaman Kontak</h1>";
})->name('kontak.index');

Route::get('/help', function () {
    return "<h1>Halaman Bantuan</h1>";
})->name('help.index');

// Route Controller
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');

Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');

Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');