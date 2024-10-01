<?php

namespace App\Http\Controllers;

use App\Models\JadwalIbadah;
use App\Models\Pengurus;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\JadwalPelayanan;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data jadwal ibadah
        $jadwalIbadah = JadwalIbadah::all();

        // Ambil data pengurus
        $pengurus = Pengurus::all();

        // Ambil data artikel
        $artikel = Artikel::all();

        // Ambil data jadwal pelayanan
        $jadwalPelayanan = JadwalPelayanan::with('pengurus')->get();

        // Ambil data galeri
        $galeri = Galeri::all();

        // Kirim data ke view
        return view('home', compact('jadwalIbadah', 'pengurus', 'jadwalPelayanan', 'galeri','artikel'));
    }

    public function showArtikel($id)
    {
        // Ambil artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Kirim data artikel ke view
        return view('artikel.show', compact('artikel'));
    }
}
