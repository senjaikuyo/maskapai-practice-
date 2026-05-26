<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Pesawat & Profil</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, textarea { width: 300px; padding: 8px; }
    </style>
</head>
<body>
    <h2>Edit Data Pesawat: {{ $pesawat->kode_pesawat }}</h2>
    <a href="{{ route('pesawat.index') }}">📂 Batal</a>
    <br><br>

    <form action="{{ route('pesawat.update', $pesawat->kode_pesawat) }}" method="POST">
        @csrf
        @method('PUT') {{-- Wajib untuk Update di Route Resource --}}

        <h3>Data Utama Pesawat</h3>
        <div class="form-group">
            <label>Nama Pesawat:</label>
            <input type="text" name="nama_pesawat" value="{{ $pesawat->nama_pesawat }}" required>
        </div>
        <div class="form-group">
            <label>Kapasitas (Kursi):</label>
            <input type="number" name="kapasitas" value="{{ $pesawat->kapasitas }}" required>
        </div>

        <h3>Data Profil Spesifikasi (1:1)</h3>
        <div class="form-group">
            <label>Tahun Produksi:</label>
            <input type="number" name="tahun_produksi" value="{{ $pesawat->profil->tahun_produksi ?? '' }}" required>
        </div>
        <div class="form-group">
            <label>Deskripsi Teknis:</label>
            <textarea name="deskripsi" rows="4">{{ $pesawat->profil->deskripsi ?? '' }}</textarea>
        </div>

        <button type="submit" style="padding: 10px 20px; background-color: blue; color: white; border: none; cursor: pointer;">Update Data</button>
    </form>
</body>
</html>
