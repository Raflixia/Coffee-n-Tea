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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->constrained('users');
            $table->decimal('total_harga', 12, 2);
            $table->string('metode_pembayaran', 50);
            $table->enum('status_pembayaran', [
                'belum_bayar',
                'menunggu_konfirmasi',
                'diproses',
                'gagal',
                'dibatalkan',
                'sukses',
            ])->default('belum_bayar');
            $table->timestamp('tanggal_transaksi')->useCurrent();

            // Bagian shipping
            $table->text('alamat_pengiriman')->comment('Alamat lengkap pelanggan');
            $table->decimal('ongkir', 12, 2)->default(0.00)->comment('Biaya ongkir jika ada');
            $table->string('status_pengiriman', 50)->default('belum dikirim')->comment('belum dikirim / dikirim / sampai / dibatalkan');
            $table->string('nama_penerima', 100)->comment('Nama penerima barang');
            $table->string('no_hp_penerima', 20)->comment('Kontak untuk kurir');
            $table->string('kurir', 50)->comment('JNE / J&T / kurir internal / ambil sendiri');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
