<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    protected $fillable = ['nama', 'harga', 'stok','berat', 'deskripsi', 'thumbnail', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function detail_transaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
    public function detail_keranjang()
    {
        return $this->hasMany(Detailkeranjang::class);
    }
}
