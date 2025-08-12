<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Detailkeranjang;
use App\Models\DetailTransaksi;
use Livewire\Attributes\Layout;
use Filament\Forms\Components\Checkbox;
use RealRashid\SweetAlert\Facades\Alert;

#[Layout('layouts.pages')]
class Keranjang extends Component
{

    use WithPagination;

    public $SelectProduk = [];
    public $selectAll = false;
    public $produkDiHalaman = [];

    public function updatedSelectAll($value)
    {
        $this->SelectProduk = $value ? $this->produkDiHalaman : [];
    }

    public function updatedSelectProduk()
    {
        session(['selected_produk' => $this->SelectProduk]);
        $this->selectAll = count($this->SelectProduk) === count($this->produkDiHalaman);
    }

    public function mount()
    {
        $this->SelectProduk = session('selected_produk', []);
    }

    public function toggleProduk($id)
    {
        if (in_array($id, $this->SelectProduk)) {
            $this->SelectProduk = array_diff($this->SelectProduk, [$id]);
        } else {
            $this->SelectProduk[] = $id;
        }
    }


    public function checkoutTerpilih()
    {
        if (empty($this->SelectProduk)) {
            session()->flash('error', 'Tidak ada produk yang dipilih untuk checkout.');
            return;
        }

        $items = [];

        foreach ($this->SelectProduk as $id) {
            $detail = Detailkeranjang::find($id);

            if ($detail) {
                $items[] = [
                    'id'         => $detail->id,
                    'produk_id'  => $detail->produk_id,
                    'nama_produk'=> $detail->produk->nama ?? '', // kalau relasi produk ada
                    'jumlah'     => $detail->jumlah,
                    'harga'      => $detail->harga,
                    'subtotal'   => $detail->jumlah * $detail->harga
                ];
            }
        }

        // Simpan ke session
        session(['checkout_items' => $items]);
        
        // Opsional: redirect ke halaman konfirmasi checkout
        return redirect()->route('shop');
    }


    public function hapusTerpilih()
    {
        Detailkeranjang::whereIn('id', $this->SelectProduk)->delete();
        $this->SelectProduk = [];
        $this->selectAll = false;
        session()->flash('success', 'Produk terpilih berhasil dihapus.');
    }


    public function render()
    {
        $keranjang = Detailkeranjang::with('produk')
            ->orderByDesc('id')
            ->paginate(8)
            ->withQueryString(); // supaya pagination tetap bawa data query

        $this->produkDiHalaman = $keranjang->pluck('id')->toArray();

        return view('livewire.keranjang', [
            'produk_item' => $keranjang
        ]);
    }

}


