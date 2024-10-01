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
        Schema::create('jadwal_ibadahs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_ibadah');
            $table->string('hari');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->string('tempat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_ibadahs');
    }
};
