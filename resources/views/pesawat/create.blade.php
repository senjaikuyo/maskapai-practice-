<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Pesawat & Profil</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, textare { width: 300px; padding: 8px; }
    </style>
</head>
<body>
    <h2>Form Tambah Pesawat & Profil Baru</h2>
    <a href="{{ route('pesawat.index') }}">📂 Kembali ke Daftar</a>
    <br><br>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pesawat.store') }}" method="POST">
        @csrf
        <h3>Data Utama Pesawat</h3>
        <div class="form-group">
            <label>Kode Pesawat (String PK):</label>
            <input type="text" name="kode_pesawat" placeholder="Contoh: PK-LJJ" required>
        </div>
        <div class="form-group">
            <label>Nama Pesawat:</label>
            <input type="text" name="nama_pesawat" required>
        </div>
        <div class="form-group">
            <label>Kapasitas (Kursi):</label>
            <input type="number" name="kapasitas" required>
        </div>

        <h3>Data Profil Spesifikasi (1:1 Relasi)</h3>
        <div class="form-group">
            <label>ID Profil:</label>
            <input type="text" name="profil_id" placeholder="Contoh: PRF-001" required>
        </div>
        <div class="form-group">
            <label>Tahun Produksi:</label>
            <input type="number" name="tahun_produksi" placeholder="Contoh: 2024" required>
        </div>
        <div class="form-group">
            <label>Deskripsi Teknis:</label>
            <textarea name="deskripsi" rows="4"></textarea>
        </div>

        <button type="submit" style="padding: 10px 20px; background-color: green; color: white; border: none; cursor: pointer;">Simpan Data</button>
    </form>
</body>
</html>
