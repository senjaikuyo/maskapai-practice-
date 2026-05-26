<?php

namespace App\Models;

use App\Models\Pesawat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pilot extends Model
{
    protected $table = 'pilot';
    protected $primaryKey = 'no_lisensi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['no_lisensi', 'nama'];

    // Many Pilot Menerbangkan Many Pesawat
    public function pesawat(): BelongsToMany
    {
        return $this->belongsToMany(Pesawat::class, 'pesawat_pilot',
        'no_lisensi', 'kode_pesawat');
    }
}
