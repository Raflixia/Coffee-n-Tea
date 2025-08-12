<?php

namespace App\Livewire;

use App\Models\Produks;
use Livewire\Component;
use App\Models\Detailkeranjang;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.pages')]
class Shop extends Component
{
    public $produk;
    public  $keranjang = [];

    public function Keranjang($ProdukId)
    {
        if(Auth::user() == true){

            $produk = Produks::find($ProdukId);

        if (!$produk) {
            session()->flash('error', 'Produk tidak ditemukan.');
            return;
        }

        Detailkeranjang::create([
            'keranjang_id' => Auth::id(), // pastikan ini benar sesuai logika keranjangmu
            'produk_id' => $produk->id,
            'jumlah' => 1,
            'subtotal' => $produk->harga,
        ]);

        }else{
            return redirect('/login');
        }
        return redirect('/keranjang')->with('success', 'Produk berhasil ditambahkan ke keranjang.');

    }

    public function ShowProduk(){
        $this->produk = Produks::all();
    }
    public function render()
    {
        $this->ShowProduk();
        return view('livewire.shop', ['DataProduk'=> $this->produk]);
    }
}
