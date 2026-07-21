<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_surat',
        'nomor_surat',
        'juz'
    ];

    public function peserta()
    {
        return $this->belongsTo(peserta::class);
    }
}
