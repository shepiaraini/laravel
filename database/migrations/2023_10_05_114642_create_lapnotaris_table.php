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
        Schema::create('lapnotaris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wilayah_id');
            $table->foreignId('notaris_id');
            $table->string('no_urut');
            $table->string('no_bulanan');
            $table->foreignId('akta_id');
            $table->string('namapenghadap');
            $table->date('tanggal');
            $table->string('status');
            $table->timestamps();


            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->foreign('notaris_id')->references('id')->on('notaris');
            $table->foreign('akta_id')->references('id')->on('akta');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapnotaris');
    }
};
