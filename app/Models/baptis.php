<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baptis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jemaat',
        'nama_baptis',
        'jenis_kelamin',
        'tg_lahir',
        'nama_ayah',
        'nama_ibu',
        'tgl_nikah_ortu',
        'nama_saksi1',
        'nama_saksi2',
    ];

    protected $casts = [
        'tg_lahir' => 'date',
        'tgl_nikah_ortu' => 'date',
    ];
}
