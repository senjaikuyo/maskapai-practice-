<?php

namespace App\Models;

use App\Models\Pesawat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penerbangan extends Model
{
    protected $table = 'penerbangan';
    protected $primaryKey = 'kode_penerbangan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['kode_penerbangan', 'kode_pesawat',
    'tujuan_ke', 'berangkat_dari'];

    // Kebalikan dari 1:M (Penerbangan dilakukan oleh Pesawat)
    public function pesawat(): BelongsTo
    {
        return $this->belongsTo(Pesawat::class, 'kode_pesawat',
        'kode_pesawat');
    }
}
