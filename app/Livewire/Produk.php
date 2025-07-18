<?php

namespace App\Livewire;


use App\Models\Produks;
use Livewire\Component;

class Produk extends Component
{
    protected $produk;

public function DisplayProduk()
{
    $this->produk = Produks::paginate(5); // Assign to the property and retrieve the data
}

public function render()
{
    $this->DisplayProduk(); // Make sure to call the method before rendering the view

    return view('livewire.produk', ['frontData' => $this->produk]);
}

    }
