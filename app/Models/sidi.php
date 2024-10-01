<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sidi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jemaat',
        'nama_sidi',
        'jenis_kelamin',
        'tg_lahir',
        'nama_ayah',
        'nama_ibu',
        'nama_saksi1',
        'nama_saksi2',
    ];

    protected $casts = [
        'tg_lahir' => 'date',
    ];
}
