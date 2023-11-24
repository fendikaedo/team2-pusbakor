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
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->decimal('longitude');
            $table->decimal('latitude');
            $table->string('alamat');
            $table->decimal('investasi');
            $table->integer('perusahaan_id');
            $table->integer('modal_id');
            $table->integer('resiko_id');
            $table->integer('skala_usaha_id');
            $table->integer('kecamatan_id');
            $table->integer('desa_id');
            $table->integer('kbli_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek');
    }
};
