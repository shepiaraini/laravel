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
        Schema::create('pelantikkan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notpengganti_id');
            $table->foreignId('wilayah_id');
            $table->foreignId('pengajuan_id');
            $table->date('tanggal_pelantikkan');
            $table->boolean('delstatus')->default(true);
            $table->timestamps();
            
            $table->foreign('notpengganti_id')->references('id')->on('notpengganti');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
            $table->foreign('pengajuan_id')->references('id')->on('pengajuan');
			
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelantikkan');
    }
};
