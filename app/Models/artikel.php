<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_artikel',
        'isi_artikel',
        'tgl_artikel',
        'gambar',
    ];

    protected $casts = [
        'tgl_artikel' => 'date',
    ];
}
