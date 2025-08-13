<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Detailkeranjang;
use App\Models\DetailTransaksi;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Checkbox;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

#[Layout('layouts.pages')]
class Keranjang extends Component
{

    use WithPagination;

    // --- Properti Tampilan & Seleksi ---
    public $SelectProduk = [];
    public $selectAll = false;
    public $produkDiHalaman = [];

    // --- Properti Kalkulasi Harga ---
    public $subtotal = 0;
    public $biaya_pengiriman = 15000; // Contoh biaya tetap, bisa dibuat dinamis
    public $total = 0;

    /**
     * Dijalankan saat komponen pertama kali dimuat.
     * Mengambil data seleksi dari session dan menghitung total awal.
     */
    public function mount()
    {
        $this->SelectProduk = session('selected_produk', []);
        $this->hitungTotal();
    }

    /**
     * Dijalankan setiap kali properti $SelectProduk diperbarui.
     * Menyimpan seleksi ke session, memeriksa status 'selectAll', dan menghitung ulang total.
     */
    public function updatedSelectProduk()
    {
        session(['selected_produk' => $this->SelectProduk]);
        $this->selectAll = count($this->SelectProduk) === count($this->produkDiHalaman) && count($this->produkDiHalaman) > 0;
        $this->hitungTotal();
    }

    public function toggleProduk($id)
    {
        if (in_array($id, $this->SelectProduk)) {
            $this->SelectProduk = array_diff($this->SelectProduk, [$id]);
        } else {
            $this->SelectProduk[] = $id;
        }
    }

    /**
     * Menghitung subtotal dan total harga berdasarkan produk yang dipilih.
     */
    public function hitungTotal()
    {
        $this->subtotal = Detailkeranjang::whereIn('id', $this->SelectProduk)->get()->sum(function ($item) {
                // Menghitung subtotal dari (harga * jumlah) untuk setiap item
                return $item->produk->harga * $item->jumlah;
            });

        // Menambahkan biaya pengiriman jika ada produk yang dipilih
        if ($this->subtotal > 0) {
            $this->total = $this->subtotal + $this->biaya_pengiriman;
        } else {
            $this->total = 0;
        }
    }

    /**
     * Menambah jumlah kuantitas produk.
     */
    public function tambahJumlah($itemId)
    {
        $item = Detailkeranjang::find($itemId);
        if ($item) {
            $item->increment('jumlah');
            $this->hitungTotal(); // Hitung ulang total setelah kuantitas berubah
        }
    }

    /**
     * Mengurangi jumlah kuantitas produk, minimal 1.
     */
    public function kurangiJumlah($itemId)
    {
        $item = Detailkeranjang::find($itemId);
        if ($item && $item->jumlah > 1) {
            $item->decrement('jumlah');
            $this->hitungTotal(); // Hitung ulang total setelah kuantitas berubah
        }
    }

    /**
     * Menghapus satu item dari keranjang.
     */
    public function hapusItem($itemId)
    {
        Detailkeranjang::destroy($itemId);
        // Hapus item dari array yang diseleksi jika ada
        $this->SelectProduk = array_diff($this->SelectProduk, [$itemId]);
        session()->flash('success', 'Produk berhasil dihapus dari keranjang.');
        $this->updatedSelectProduk(); // Panggil untuk sinkronisasi dan hitung ulang
    }

    /**
     * Menghapus semua produk yang dipilih.
     */
    public function hapusTerpilih()
    {
        if (empty($this->SelectProduk)) return;

        Detailkeranjang::whereIn('id', $this->SelectProduk)->delete();
        session()->flash('success', 'Produk terpilih berhasil dihapus.');

        $this->SelectProduk = [];
        $this->updatedSelectProduk(); // Panggil untuk sinkronisasi dan hitung ulang
    }

    /**
     * Memproses produk yang dipilih ke halaman checkout.
     */
    public function checkoutTerpilih()
    {
        if (empty($this->SelectProduk)) {
            session()->flash('error', 'Tidak ada produk yang dipilih untuk checkout.');
            return;
        }

        $selectedDetails = Detailkeranjang::with('produk')->whereIn('id', $this->SelectProduk)->get();
        $checkoutItems = [];
        $totalHargaTransaksi = 0;

        foreach ($selectedDetails as $detail) {
            // Hitung subtotal untuk setiap item
            $subtotal = $detail->jumlah * $detail->produk->harga;
            
            // Tambahkan subtotal ke total harga transaksi
            $totalHargaTransaksi += $subtotal;

            // Tambahkan item ke array checkout
            $checkoutItems[] = [
                'id'            => $detail->id,
                'produk_id'     => $detail->produk_id,
                'nama_produk'   => $detail->produk->nama ?? 'Nama Tidak Diketahui',
                'harga_satuan'  => $detail->produk->harga,
                'jumlah'        => $detail->jumlah,
                'subtotal'      => $subtotal,
            ];
        }
        $totalHargaTransaksi += $this->biaya_pengiriman;
        dd([$checkoutItems,$totalHargaTransaksi]);
        // Simpan data detail checkout dan total harga ke dalam session
        session(['checkout_items' => $checkoutItems]);
        session(['total_transaksi' => $totalHargaTransaksi]);
        return redirect()->route('shop'); // Ganti dengan route checkout Anda
    }

    /**
     * Merender komponen dan mengirimkan data ke view.
     */
    public function render()
    {
        $keranjang = Detailkeranjang::with('produk')
            ->orderByDesc('id')
            ->paginate(5); // Mengurangi jumlah per halaman agar lebih fokus

        // Mengambil ID produk di halaman saat ini untuk fitur 'selectAll'
        $this->produkDiHalaman = $keranjang->pluck('id')->toArray();

        // Selalu pastikan total terhitung dengan benar sebelum render
        $this->hitungTotal();

        return view('livewire.keranjang', [
            'produk_item' => $keranjang
        ]);
    }

}


