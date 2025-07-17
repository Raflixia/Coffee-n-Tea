<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detailkeranjang extends Model
{
    protected $table = 'detail_keranjangs';

    protected $fillable = [
        'keranjang_id',
        'produk_id',
        'jumlah',
        'subtotal',
    ];

    /**
     * Relasi ke model Keranjang
     */
    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

    /**
     * Relasi ke model Produk
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
