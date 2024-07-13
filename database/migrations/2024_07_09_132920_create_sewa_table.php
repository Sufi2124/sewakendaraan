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
            $table->id('id_sewa'); // Primary Key
            $table->string('no_pol', 10); // Foreign Key
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
            $table->string('tlp_tujuan', 15);
            $table->text('alamat_tujuan');
            $table->integer('biaya_sewa');
            $table->string('kota', 50)->default('PONTIANAK');
            $table->unsignedBigInteger('id_penyewa')->default(1); // Foreign Key with a default value
            $table->integer('jlh_penumpang');
            $table->unsignedBigInteger('id_kwitansi'); // Foreign Key

            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan');
            $table->foreign('id_penyewa')->references('id')->on('penyewa');
            $table->foreign('id_kwitansi')->references('id')->on('kwitansi');
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
