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
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notaris_id');
            $table->string('waktu_cuti');
            $table->foreignId('notpengganti_id');
            $table->string('file');
            $table->string('status');
            $table->timestamps();


            $table->foreign('notaris_id')->references('id')->on('notaris');
            $table->foreign('notpengganti_id')->references('id')->on('notpengganti');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
