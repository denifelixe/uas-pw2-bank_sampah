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
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi')->nullable();
            $table->string('nama_nasabah')->nullable();
            $table->unsignedBigInteger('jenis_sampah_id')->nullable();
            $table->foreign('jenis_sampah_id')->references('id')->on('bank_sampah');
            $table->integer('berat_sampah')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabah');
    }
};
