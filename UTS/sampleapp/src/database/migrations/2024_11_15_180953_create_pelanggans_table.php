<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id(); // ID unik untuk pelanggan
            $table->string('nama'); // Nama pelanggan
            $table->string('alamat'); // Alamat pelanggan
            $table->string('telepon')->unique(); // Nomor telepon pelanggan (unik)
            $table->string('email')->unique(); // Email pelanggan (unik)
            $table->string('preferensi_produk')->nullable(); // Preferensi produk (nullable)
            $table->date('tanggal_registrasi'); // Tanggal registrasi
            $table->boolean('status')->default(true); // Status aktif (default true)
            $table->timestamps(); // Created at dan updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
}

