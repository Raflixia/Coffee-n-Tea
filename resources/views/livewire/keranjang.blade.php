<div>


{{--
    File: resources/views/livewire/keranjang-belanja.blade.php
--}}

<div class="bg-gray-100 min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Judul Halaman --}}
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Keranjang Belanja Anda</h1>
            <a href="/" wire:navigate class="text-blue-600 hover:text-blue-800 transition">Lanjutkan Belanja &rarr;</a>
        </div>

        {{-- Notifikasi Sukses --}}
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        {{-- Konten Utama: Daftar Produk & Ringkasan --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Kolom Kiri: Daftar Produk --}}
            <div class="lg:col-span-2 bg-white rounded-xl shadow-md border border-gray-200 p-6">

                {{-- Header Tabel (Hanya terlihat di layar besar) --}}
                <div class="hidden md:flex justify-between items-center border-b pb-4 mb-4 text-sm font-semibold text-gray-600">
                    <div class="w-2/5">Produk</div>
                    <div class="w-1/5 text-center">Harga</div>
                    <div class="w-1/5 text-center">Kuantitas</div>
                    <div class="w-1/5 text-right">Subtotal</div>
                </div>

                {{-- Daftar Produk --}}
                <div class="space-y-6">
                    @forelse ($produk_item as $item)
                        <div wire:key="item-{{ $item->id }}" class="flex flex-col md:flex-row justify-between items-center">

                            {{-- Info Produk --}}
                            <div class="w-full md:w-2/5 flex items-center mb-4 md:mb-0">
                                <input type="checkbox"
                                    wire:click="toggleProduk({{ $item->id }})"
                                    {{ in_array($item->id, $SelectProduk) ? 'checked' : '' }}
                                    class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500 mr-4">

                                {{-- Ganti 'path/to/default-image.jpg' dengan gambar placeholder Anda --}}
                                <img src="{{ $item->produk->gambar ?? 'https://via.placeholder.com/80' }}" alt="{{ $item->produk->nama }}" class="w-20 h-20 object-cover rounded-lg mr-4">

                                <div>
                                    <h2 class="font-bold text-gray-800">{{ $item->produk->nama }}</h2>
                                    <p class="text-sm text-gray-500">SKU: {{ $item->produk->stok ?? 'N/A' }}</p>
                                </div>
                            </div>

                            {{-- Harga Satuan --}}
                            <div class="w-full md:w-1/5 text-left md:text-center mb-2 md:mb-0">
                                <span class="md:hidden font-semibold">Harga: </span>
                                Rp {{ number_format($item->produk->harga, 0, ',', '.') }}
                            </div>

                            {{-- Kuantitas --}}
                            <div class="w-full md:w-1/5 flex justify-start md:justify-center items-center mb-4 md:mb-0">
                                <div class="flex items-center border border-gray-300 rounded-md">
                                    <button wire:click="kurangiJumlah({{ $item->id }})" class="px-3 py-1 text-gray-600 hover:bg-gray-200 transition rounded-l-md">-</button>
                                    <input type="number" readonly value="{{ $item->jumlah }}" class="w-12 text-center border-l border-r p-1 focus:outline-none">
                                    <button wire:click="tambahJumlah({{ $item->id }})" class="px-3 py-1 text-gray-600 hover:bg-gray-200 transition rounded-r-md">+</button>
                                </div>
                            </div>

                            {{-- Subtotal --}}
                            <div class="w-full md:w-1/5 text-left md:text-right font-semibold">
                               <span class="md:hidden font-semibold">Subtotal: </span>
                               Rp {{ number_format($item->produk->harga * $item->jumlah, 0, ',', '.') }}
                            </div>
                        </div>
                        <hr class="last:hidden">
                    @empty
                        <div class="text-center py-16">

                            <h2 class="text-xl font-semibold text-gray-700 mb-2">Keranjang Anda Kosong</h2>
                            <p class="text-gray-500">Sepertinya Anda belum menambahkan produk apapun.</p>
                        </div>
                    @endforelse
                </div>
                 {{-- Pagination --}}
                <div class="mt-6">
                    {{ $produk_item->links() }}
                </div>
            </div>

            {{-- Kolom Kanan: Ringkasan Pesanan --}}
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 sticky top-10">
                    <h2 class="text-xl font-bold text-gray-800 border-b pb-4 mb-4">Ringkasan Pesanan</h2>

                    <div class="space-y-4 text-gray-700">
                        <div class="flex justify-between">
                            <span>Subtotal ({{ count($SelectProduk) }} item)</span>
                            {{-- Anda perlu menghitung subtotal ini di komponen Livewire --}}
                            <span class="font-semibold">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                         <div class="flex justify-between">
                            <span>Biaya Pengiriman</span>
                            <span class="font-semibold">Rp {{ number_format($biaya_pengiriman, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between border-t pt-4">
                            <span class="text-lg font-bold">Total</span>
                             {{-- Anda perlu menghitung total ini di komponen Livewire --}}
                            <span class="text-lg font-bold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        @if (count($SelectProduk) > 0)
                            <button wire:click="checkoutTerpilih" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition shadow-lg">
                                Lanjutkan ke Checkout
                            </button>
                        @else
                            <button class="w-full bg-gray-400 text-white font-bold py-3 px-4 rounded-lg cursor-not-allowed">
                                Pilih Produk untuk Checkout
                            </button>
                        @endif
                    </div>
                     {{-- Tombol Hapus Terpilih --}}
                     @if (count($SelectProduk) > 0)
                     <div class="mt-4 text-center">
                        <button wire:click="hapusTerpilih" wire:confirm="Anda yakin ingin menghapus item yang dipilih?" class="text-red-600 hover:text-red-800 font-semibold transition text-sm">
                            Hapus Item Terpilih
                        </button>
                     </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>


</div>
