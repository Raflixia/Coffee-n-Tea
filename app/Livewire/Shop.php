<?php

namespace App\Livewire;

use App\Models\Produks;
use Livewire\Component;

class Shop extends Component
{
    public $produk;

    public function ShowProduk(){
        $this->produk = Produks::all();
    }
    public function render()
    {
        $this->ShowProduk();
        return view('livewire.shop', ['DataProduk'=> $this->produk]);
    }
}
