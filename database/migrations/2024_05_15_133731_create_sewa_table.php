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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();    
            $table->unsignedBigInteger('no_pol');
            $table->foreign('no_pol')->references('id')->on('kendaraan');      
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
            $table->string('tlp_tujuan');
            $table->text('alamat_tujuan');
            $table->integer('biaya_sewa');
            $table->string('kota', 50)->default('pontianak');
            $table->unsignedBigInteger('id_penyewa')->default(0);
            $table->foreign('id_penyewa')->references('id')->on('penyewa');   
            $table->integer('jlh_penumpang');
            $table->unsignedBigInteger('id_kwitansi'); 
            $table->foreign('id_kwitansi')->references('id')->on('kwitansi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
