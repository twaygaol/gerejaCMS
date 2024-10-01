<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jemaatBaru extends Model
{
    use HasFactory;

    protected $table = 'jemaat_barus';

    protected $primaryKey = 'id_jemaat';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_telp',
        'pindah_gereja',
        'pindah_kota',
        'status',
    ];

    protected $casts = [
        'tgl_lahir' => 'date',
        'pindah_gereja' => 'boolean',
        'pindah_kota' => 'boolean',
    ];
}
