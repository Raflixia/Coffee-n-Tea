<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach ($frontData as $item)

        <div class="bg-white rounded-lg shadow p-4 flex flex-col">
            <img src="./assets/images/product-1.png" class="h-48 w-full object-contain mb-4" alt="product">
            <div class="flex items-center mb-2">
            <span class="bg-amber-100 text-amber-600 text-xs px-2 py-1 rounded mr-2">-19%</span>
            <div class="flex text-amber-400 text-sm">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star-outline"></ion-icon>
            </div>
            <span class="ml-2 text-xs text-gray-500">(24)</span>
        </div>
        <h4 class="font-bold mb-1">{{ $item->nama }}</h4>
        <div class="flex items-center space-x-2">
          <span class="text-lg font-bold text-amber-600">$32.00</span>
          <span class="line-through text-gray-400">$46.00</span>
        </div>
      </div>
            @endforeach
        </div>
</div>
