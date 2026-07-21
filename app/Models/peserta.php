<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_whatsapp',
        'surat_id',
        'jam_belajar',
        'status',
    ];

    public function surat()
    {
        return $this->belongsTo(surat::class);
    }
}
