<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('panguruses', function (Blueprint $table) {
            $table->id('id_pengurus'); // ID Pengurus
            $table->string('nama'); // Nama Pengurus
            $table->string('jabatan'); // Jabatan Pengurus
            $table->string('status'); // Status (Aktif/Nonaktif)
            $table->binary('gambar'); // Gambar (Blob)
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panguruses');
    }
};
