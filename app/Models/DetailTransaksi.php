<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksis'; // atau 'transaksi_details' sesuai penamaanmu

    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'jumlah',
        'harga',
    ];

    /**
     * Relasi ke model Transaksi
     */
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    /**
     * Relasi ke model Produk
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
