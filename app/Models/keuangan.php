<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenispemasukan',
        'tanggal',
        'jumlah',
        'sumber_dana',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jumlah' => 'float',
    ];
}
