<!DOCTYPE html>
<html lang="id">
<head>
    <title>Manifes Penerbangan & Pilot</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #e6f7ff; }
    </style>
</head>
<body>
    <h2>Jadwal Penerbangan & Otorisasi Pilot</h2>
    <a href="{{ route('pesawat.index') }}">← Kelola Data Pesawat</a>

    <table>
        <thead>
            <tr>
                <th>Kode Penerbangan</th>
                <th>Rute (Dari -> Ke)</th>
                <th>Pesawat yang Digunakan</th>
                <th>Daftar Pilot yang Ditugaskan (Bisa Membawa Pesawat Ini)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataPenerbangan as $pen)
            <tr>
                <td><strong>{{ $pen->kode_penerbangan }}</strong></td>
                <td>{{ $pen->berangkat_dari }} ➔ {{ $pen->tujuan_ke }}</td>
                <td>{{ $pen->pesawat->nama_pesawat }} ({{ $pen->kode_pesawat }})</td>
                <td>
                    @if($pen->pesawat->pilot->isEmpty())
                        <span style="color: red;">Belangko / Belum ada pilot ditugaskan</span>
                    @else
                        <ul>
                            @foreach($pen->pesawat->pilot as $pilot)
                                <li>{{ $pilot->nama }} (No. Lisensi: {{ $pilot->no_lisensi }})</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
