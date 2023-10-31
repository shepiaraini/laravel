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
        Schema::create('notaris', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nama');
            $table->foreignId('wilayah_id');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('no_sk');
            $table->foreignId('praktik_id');
            $table->string('file');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();

            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->foreign('praktik_id')->references('id')->on('praktik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notaris');
    }
};
