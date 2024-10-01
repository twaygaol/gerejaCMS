<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalIbadah extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_ibadah',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
    ];

    protected $casts = [
        'waktu_mulai' => 'datetime',
        'waktu_selesai' => 'datetime',
    ];
}
