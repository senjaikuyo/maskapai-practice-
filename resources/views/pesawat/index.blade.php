<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Pesawat & Profil</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Daftar Armada Pesawat & Spesifikasi Profil</h2>
    <a href="{{ route('pesawat.create') }}">+ Tambah Pesawat Baru</a>

    <table>
        <thead>
            <tr>
                <th>Kode Pesawat</th>
                <th>Nama Pesawat</th>
                <th>Kapasitas</th>
                <th>Tahun Produksi (Profil)</th>
                <th>Deskripsi Teknis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftarPesawat as $p)
            <tr>
                <td>{{ $p->kode_pesawat }}</td>
                <td>{{ $p->nama_pesawat }}</td>
                <td>{{ $p->kapasitas }} Kursi</td>
                <td>{{ $p->profil->tahun_produksi ?? 'Belum Diatur' }}</td>
                <td>{{ $p->profil->deskripsi ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
