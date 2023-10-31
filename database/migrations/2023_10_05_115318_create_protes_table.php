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
        Schema::create('protes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wilayah_id');
            $table->foreignId('notaris_id');
            $table->string('nomor');
            $table->string('daftar_srt');
            $table->string('tgl_no');
            $table->date('tanggal');
            $table->string('status');
            $table->timestamps();


            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->foreign('notaris_id')->references('id')->on('notaris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protes');
    }
};
