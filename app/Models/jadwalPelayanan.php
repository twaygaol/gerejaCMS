<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelayanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaPelayanan',
        'jdwlMulai',
        'jdwlSelesai',
        'pelayan', // Ganti dengan nama kolom yang benar
    ];

    protected $casts = [
        'jdwlMulai' => 'datetime',
        'jdwlSelesai' => 'datetime',
    ];

    /**
     * Relasi dengan model Pengurus
     */
    public function pengurus()
    {
        return $this->belongsTo(Pengurus::class, 'pelayan', 'id_pengurus'); // Sesuaikan dengan nama kolom dan kunci yang benar
    }
}
