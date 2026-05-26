<?php

use App\Http\Controllers\PesawatController;
use App\Http\Controllers\LaporanPenerbanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/pesawat');
});
// 1. CRUD Utama Pesawat & Profil (Menggunakan Resource Controller)
Route::resource('pesawat', PesawatController::class);

// 2. Halaman Khusus untuk Melihat Informasi Manifes Penerbangan, Pesawat, dan Pilotnya
Route::get('laporan-penerbangan', [LaporanPenerbanganController::class, 'index'])->name('penerbangan.index');
