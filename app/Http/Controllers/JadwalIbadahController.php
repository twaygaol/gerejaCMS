<?php

namespace App\Http\Controllers;

use App\Models\JadwalIbadah;
use Illuminate\Http\Request;

class JadwalIbadahController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel jadwal ibadah
        $jadwalIbadah = JadwalIbadah::all();
        
        // Mengirim data ke view
        return view('partials.seremons', compact('jadwalIbadah'));
    }
}
