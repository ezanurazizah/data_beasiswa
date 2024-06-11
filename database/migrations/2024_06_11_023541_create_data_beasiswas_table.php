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
        Schema::create('data_beasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('deskripsi');
        $table->date('tanggal mulai');
        $table->date('tanggal berakhir');
        $table->string('jumlah');      
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_beasiswas');
    }
};
