<?php

namespace App\Models;

use App\Models\Pesawat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profil extends Model
{
    protected $table = 'profil';
    protected $primaryKey = 'profil_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['profil_id', 'kode_pesawat', 'tahun_produksi',
    'deskripsi'];

    // Kebalikan dari 1:1 (Profil dimiliki oleh Pesawat)
    public function pesawat(): BelongsTo
    {
        // Parameter: NamaModel, FK di tabel ini, PK di tabel tujuan (pesawat)
        return $this->belongsTo(Pesawat::class, 'kode_pesawat',
        'kode_pesawat');
    }
}
