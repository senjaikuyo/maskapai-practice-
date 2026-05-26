<?php

namespace App\Models;

use App\Models\Penerbangan;
use App\Models\Pilot;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pesawat extends Model
{
    protected $table = 'pesawat';
    protected $primaryKey = 'kode_pesawat';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'kode_pesawat',
        'nama_pesawat',
        'kapasitas'
    ];

    // 1 Pesawat Memiliki 1 Profil
    public function profil(): HasOne
    {
        // Parameter: NamaModel, FK di tabel profil, PK di tabel pesawat
        return $this->hasOne(Profil::class, 'kode_pesawat',
        'kode_pesawat');
    }

    // 1 Pesawat Melakukan Many Penerbangan
    public function penerbangan(): HasMany
    {
        // Parameter: NamaModel, FK di tabel penerbangan, PK di tabel pesawat
        return $this->hasMany(Penerbangan::class, 'kode_pesawat',
        'kode_pesawat');
    }

    // Many Pesawat Menerbangkan Many Pilot (Many-to-Many)
    public function pilot(): BelongsToMany
    {
        // Parameter: NamaModel, Nama Tabel Pivot, FK model ini di pivot, FK model target di pivot
        return $this->belongsToMany(Pilot::class, 'pesawat_pilot',
        'kode_pesawat', 'no_lisensi');
    }
}
