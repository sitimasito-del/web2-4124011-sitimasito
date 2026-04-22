<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = [
            [
                "nama" => "Siti Masito",
                "nim" => "4124011",
                "prodi" => "Sistem Informasi",
                "semester" => "4",
                "keahlian" => ["Microsoft Word", "Excel", "MC Formal", "Kerja tim"]
            ],
            [
                "nama" => "Joened Sastra",
                "nim" => "4124017",
                "prodi" => "Sistem Informasi",
                "semester" => "4",
                "keahlian" => ["Microsoft Word", "Excel", "MC Formal", "Kerja tim"]
            ]
        ];

        return view('profil', compact('profil'));
    }

    public function show($nim)
    {
        return "Menampilkan profil mahasiswa dengan NIM: " . $nim;
    }
}