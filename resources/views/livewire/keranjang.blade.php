<div>
    <div class="max-w-4xl mx-auto my-10">
        <div class="p-6 bg-white rounded-xl shadow-md border border-gray-200">

            {{-- Notifikasi sukses --}}
            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Checkbox pilih semua --}}
            <div class="flex items-center mb-5">
                <h1>Keranjang</h1>
            </div>

            {{-- Daftar Produk --}}
            <div class="space-y-3">
                @forelse ($produk_item as $item)
                    <div wire:key="item-{{ $item->id }}"
                         class="flex justify-between items-center bg-gray-100 hover:bg-gray-200 transition rounded-lg p-4">
                        <label class="flex items-center space-x-3">
                            <span class="text-gray-800 font-semibold">
                                {{ $item->produk->nama }}
                                <span class="text-sm text-gray-500 ml-2">Rp {{ number_format($item->produk->harga, 0, ',', '.') }}</span>
                            </span>
                        </label>
                        <span class="text-gray-600 text-sm">Qty: {{ $item->jumlah }}</span>
                        <input type="checkbox"
    wire:click="toggleProduk({{ $item->id }})"
    @if(in_array($item->id, $SelectProduk)) checked @endif
    class="h-5 w-5 text-blue-600 border-gray-300 rounded">

                    </div>
                @empty
                    <div class="text-gray-500 text-center py-8">Tidak ada produk di keranjang.</div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-6">
                {{ $produk_item->links() }}
            </div>


            {{-- Aksi: Hapus & Checkout --}}
            @if (count($SelectProduk) > 0 )
            <div class="mt-6 flex flex-wrap gap-3">
                <button wire:click="hapusTerpilih"
                        class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg transition">
                    Hapus ({{ count($SelectProduk) }})
                </button>

                <button wire:click="checkoutTerpilih"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition">
                    Checkout ({{ count($SelectProduk) }})
                </button>
            </div>
            @endif

        </div>
    </div>


</div>
