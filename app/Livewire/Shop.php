<?php

namespace App\Livewire;

use App\Models\Produks;
use Livewire\Component;
use App\Models\Detailkeranjang;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

#[Layout('layouts.pages')]
class Shop extends Component
{
    public $produk;
    public  $keranjang = [];

    public function Keranjang($ProdukId)
    {
        // 1. Cek apakah pengguna sudah login
        if (Auth::check()) {
            // Pengguna sudah login, lanjutkan proses...
            $produk = Produks::find($ProdukId);

            if (!$produk) {
                // Gunakan SweetAlert juga untuk pesan error agar konsisten
                Alert::error('Gagal', 'Produk tidak ditemukan.');
                return;
            }

            // Cek apakah produk sudah ada di keranjang, jika ya, tambahkan jumlahnya
            $itemKeranjang = Detailkeranjang::where('keranjang_id', Auth::id())
                                            ->where('produk_id', $produk->id)
                                            ->first();

            if ($itemKeranjang) {
                // Jika produk sudah ada, tambah jumlahnya
                $itemKeranjang->increment('jumlah');
            } else {
                // Jika produk belum ada, buat entri baru
                Detailkeranjang::create([
                    'keranjang_id' => Auth::id(), // Di sini asumsikan keranjang_id adalah user_id
                    'produk_id'    => $produk->id,
                    'jumlah'       => 1,
                    'subtotal'     => $produk->harga, // Tambahkan harga saat membuat
                ]);
            }

            // **PERBAIKAN BAGIAN SUKSES**
            // Beri notifikasi sukses dan tetap di halaman yang sama.
            // Livewire akan me-refresh tampilan secara otomatis.
            Alert::success('Berhasil', 'Produk telah ditambahkan ke keranjang.');

            // Dispatch event untuk update komponen lain jika perlu (misal: ikon keranjang di header)
            $this->dispatch('keranjang-updated');

            // Tidak perlu redirect di sini, biarkan pengguna tetap di halaman shop
            return $this->redirect(route('keranjang'), navigate: true);

        } else {
            // **BAGIAN UNTUK PENGGUNA YANG BELUM LOGIN (SUDAH BENAR)**
            // 2. Pengguna belum login

            // Simpan pesan warning ke session
            Alert::warning('Anda Belum Login', 'Silakan login terlebih dahulu untuk melanjutkan.');

            // 3. Redirect ke halaman login.
            // Setelah halaman login dimuat, skrip SweetAlert akan menampilkan pesan.
            return $this->redirect(route('shop'), navigate: true);
        }
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
