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
        Schema::create('sidis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sidi');
            $table->string('jenis_kelamin');
            $table->date('tg_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_saksi1');
            $table->string('nama_saksi2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidis');
    }
};
