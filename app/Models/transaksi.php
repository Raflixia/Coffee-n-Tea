<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksis';

    protected $fillable = [
        'user_id',
        'total_harga',
        'metode_pembayaran',
        'status_pembayaran',
        'tanggal_transaksi',
        'alamat_pengiriman',
        'ongkir',
        'status_pengiriman',
        'nama_penerima',
        'no_hp_penerima',
        'kurir',
    ];

    protected $casts = [
        'tanggal_transaksi' => 'datetime',
        'total_harga' => 'decimal:2',
        'ongkir' => 'decimal:2',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Contoh relasi tambahan jika ada tabel detail transaksi
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
