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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_kwitansi');
            $table->unsignedBigInteger('id_penyewa');
            $table->string('no_pol', 10);

            // Assuming you have tables 'kwitansi', 'penyewa', and 'pol' with columns 'id'
            $table->foreign('id_kwitansi')->references('id')->on('kwitansi');
            $table->foreign('id_penyewa')->references('id')->on('penyewa');
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
