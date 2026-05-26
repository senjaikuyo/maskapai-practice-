<?php

namespace App\Http\Controllers;

use App\Models\Penerbangan;

class LaporanPenerbanganController extends Controller
{
    public function index()
    {
        // Mengambil semua penerbangan, relasi pesawat,
        // dan relasi pilot di dalam model pesawat tersebut
        $dataPenerbangan = Penerbangan::with('pesawat.pilot')->get();

        return view('penerbangan.index', compact('dataPenerbangan'));
    }
}
