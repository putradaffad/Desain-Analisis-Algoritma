// database/migrations/xxxx_xx_xx_xxxxxx_create_riwayat_pembelians_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPembeliansTable extends Migration
{
    public function up()
    {
        Schema::create('riwayat_pembelians', function (Blueprint $table) {
            $table->id(); // ID unik untuk transaksi
            $table->foreignId('pelanggan_id')->constrained()->onDelete('cascade'); // Relasi ke tabel pelanggans
            $table->string('produk'); // Nama produk yang dibeli
            $table->integer('jumlah'); // Jumlah produk yang dibeli
            $table->decimal('harga', 10, 2); // Harga produk
            $table->decimal('total', 10, 2); // Total harga transaksi
            $table->date('tanggal_transaksi'); // Tanggal transaksi
            $table->timestamps(); // Created at dan updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_pembelians');
    }
}
