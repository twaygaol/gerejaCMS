<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pernikahan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_nikah';

    protected $fillable = [
        'id_jemaat',
        'pas_pria',
        'ttl_pria',
        'pas_wanita',
        'nama_saksi1',
        'nama_saksi2',
    ];

    protected $casts = [
        'ttl_pria' => 'date',
    ];
}
