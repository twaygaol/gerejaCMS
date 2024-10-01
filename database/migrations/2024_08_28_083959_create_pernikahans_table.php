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
        if (!Schema::hasTable('pernikahans')) {
            Schema::create('pernikahans', function (Blueprint $table) {
                $table->id();
                $table->binary('pas_pria');
                $table->date('ttl_pria');
                $table->binary('pas_wanita');
                $table->string('nama_saksi1');
                $table->string('nama_saksi2');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pernikahans');
    }
};
