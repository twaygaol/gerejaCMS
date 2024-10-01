<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'panguruses'; // Nama tabel yang digunakan di database

    protected $primaryKey = 'id_pengurus'; // Kolom primary key

    /**
     * Kolom yang bisa diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'jabatan',
        'status',
        'gambar', // Pastikan kolom ini diisi saat melakukan operasi massal
    ];
}
