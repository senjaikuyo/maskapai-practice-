<?php

namespace App\Http\Controllers;

use App\Models\Pesawat;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    public function index()
    {
        $daftarPesawat = Pesawat::with('profil')->get();
        return view('pesawat.index', compact('daftarPesawat'));
    }

    public function create()
    {
        return view('pesawat.create'); // Sekarang file ini sudah ada
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_pesawat' => 'required|unique:pesawat,kode_pesawat',
            'nama_pesawat' => 'required',
            'kapasitas'    => 'required|numeric',
            'profil_id'    => 'required|unique:profil,profil_id',
            'tahun_produksi' => 'required|numeric',
            'deskripsi'    => 'nullable',
        ]);

        $pesawat = Pesawat::create([
            'kode_pesawat' => $request->kode_pesawat,
            'nama_pesawat' => $request->nama_pesawat,
            'kapasitas'    => $request->kapasitas
        ]);

        $pesawat->profil()->create([
            'profil_id' => $request->profil_id,
            'tahun_produksi' => $request->tahun_produksi,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('pesawat.index')->with('success', 'Data Berhasil Disimpan!');
    }

    // 1. Menampilkan Form Edit
    public function edit($id)
    {
        // Karena PK kustom string, kita cari berdasarkan $id yang dikirim rute (berisi kode_pesawat)
        $pesawat = Pesawat::with('profil')->findOrFail($id);
        return view('pesawat.edit', compact('pesawat'));
    }

    // 2. Memproses Update Data Pesawat & Profil
    public function update(Request $request, $id)
    {
        $pesawat = Pesawat::findOrFail($id);

        $request->validate([
            'nama_pesawat' => 'required',
            'kapasitas'    => 'required|numeric',
            'tahun_produksi' => 'required|numeric',
            'deskripsi'    => 'nullable',
        ]);

        // Update tabel utama (pesawat)
        $pesawat->update([
            'nama_pesawat' => $request->nama_pesawat,
            'kapasitas'    => $request->kapasitas
        ]);

        // Update atau Buat data baru jika profil belum ada (1:1 relation handling)
        $pesawat->profil()->updateOrCreate(
            ['kode_pesawat' => $pesawat->kode_pesawat],
            [
                'tahun_produksi' => $request->tahun_produksi,
                'deskripsi' => $request->deskripsi
            ]
        );

        return redirect()->route('pesawat.index')->with('success', 'Data Berhasil Diperbarui!');
    }

    // 3. Menghapus Data Pesawat (Akan otomatis menghapus Profil karena ON DELETE CASCADE di SQL)
    public function destroy($id)
    {
        $pesawat = Pesawat::findOrFail($id);
        $pesawat->delete();

        return redirect()->route('pesawat.index')->with('success', 'Data Pesawat dan komponen relasinya berhasil dihapus!');
    }
}
