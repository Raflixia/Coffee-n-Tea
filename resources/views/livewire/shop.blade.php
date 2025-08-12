<div>


    <div class="my-5 px-4 md:px-10 lg:px-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($DataProduk as $item)
            <div class="bg-white rounded-lg shadow p-4 mx-3 flex flex-col justify-between h-full">
                <img src="{{ asset('assets/images/product-1.png') }}" class="h-48 w-full object-contain mb-4" alt="product">

                <div class="mx-5">
                    <h4 class="font-bold text-base">{{ $item->nama }}</h4>
                    <span class="text-sm font-bold text-amber-600">Rp.{{ number_format($item->harga, 0, ',', '.') }}</span>
                </div>
                <!-- Tombol Bayar di posisi bawah -->
                <div class="mx-5 mt-2 bg-red-100 flex items-center justify-center gap-2 px-3 py-2 rounded hover:bg-red-200 transition ">
                    <img class="w-6 h-6" src="{{ asset('assets/images/carts.png') }}" alt="cart">
                    <button wire:click="Keranjang({{ $item->id }})" class="text-sm font-semibold text-red-700">Tambahka keranjang</button>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
