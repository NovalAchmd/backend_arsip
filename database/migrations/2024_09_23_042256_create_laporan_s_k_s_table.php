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
        Schema::create('laporan_s_k_s', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('jurusan_id');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('sub_kategori_id');
            $table->string('nomor_surat');
            $table->string('tanggal_surat');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('tahun_ajaran');
            $table->string('file');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_s_k_s');
    }
};
