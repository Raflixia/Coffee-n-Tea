@extends('layouts.home')

@section('home')

    <!-- HERO -->
    <main>
        <section class="bg-white py-12">
            <div class="container mx-auto flex flex-col md:flex-row items-center gap-8 px-4">
              <div class="flex-1">
                <p class="flex items-center text-amber-600 font-semibold mb-2">
                  <img src="./assets/images/before-subtitle.png" class="h-6 w-6 mr-2" alt="apple">
                  100% genuine Products
                </p>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Garden's Most<br>Favorite Food</h1>
                <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <button class="bg-amber-600 text-white px-6 py-2 rounded hover:bg-amber-700 font-semibold">Explore Products</button>
              </div>
              <div class="flex-1 flex justify-center">
                <img src="./assets/images/hero-banner.png" alt="hero banner" class="rounded-lg shadow-lg w-full max-w-md">
              </div>
            </div>
          </section>

          <!-- FEATURE -->
          <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/feature-1.svg" class="h-24 mb-4" alt="orders">
                  <h4 class="font-bold text-lg mb-2">Free shipping</h4>
                  <p class="text-gray-500">On all orders over $49.00</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/feature-2.svg" class="h-24 mb-4" alt="guarantee">
                  <h4 class="font-bold text-lg mb-2">15 days returns</h4>
                  <p class="text-gray-500">Moneyback guarantee</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/feature-3.svg" class="h-24 mb-4" alt="checkout">
                  <h4 class="font-bold text-lg mb-2">Secure checkout</h4>
                  <p class="text-gray-500">Protected by Paypal</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/feature-4.svg" class="h-24 mb-4" alt="offer gift">
                  <h4 class="font-bold text-lg mb-2">Offer & gift here</h4>
                  <p class="text-gray-500">On all orders over</p>
                </div>
              </div>
            </div>
          </section>

          <!-- ABOUT -->
          <section class="py-12 bg-white">
            <div class="container mx-auto flex flex-col md:flex-row items-center gap-8 px-4">
              <div class="flex-1 flex justify-center">
                <img src="./assets/images/about-banner.png" alt="about banner" class="rounded-lg shadow-lg w-full max-w-md">
              </div>
              <div class="flex-1">
                <p class="text-amber-600 font-semibold mb-2">KNOW MORE ABOUT SHOP</p>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Trusted Organic<br>Food Store</h2>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                <span class="block text-gray-500 mb-4">
                  sellers who aspire to be good, do good, and spread goodness. We democratic, self-sustaining, two-sided
                  marketplace which thrives on trust and is built on community and quality content.
                </span>
                <div class="flex items-center space-x-6">
                  <div>
                    <h4 class="font-bold">Jerry Henson</h4>
                    <span class="text-gray-400 text-sm">/ Shop Director</span>
                  </div>
                  <img src="./assets/images/author-sign.png" class="h-8" alt="author sign">
                </div>
              </div>
            </div>
          </section>

          <!-- CATEGORIES -->
          <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
              <div class="relative mb-8">
                <img src="./assets/images/category-banner.jpg" class="w-full h-64 object-cover rounded-lg" alt="categorie banner">
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                  <h2 class="text-3xl md:text-4xl font-bold text-white">Top Categories</h2>
                </div>
              </div>
              <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
                <!-- Repeat for each category -->
                <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                  <img src="./assets/images/category-1.png" class="h-20 mb-2" alt="categories">
                  <h4 class="font-bold">Brows all</h4>
                  <p class="text-gray-500 text-sm">(235 item)</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                  <img src="./assets/images/category-2.png" class="h-20 mb-2" alt="categories">
                  <h4 class="font-bold">Vegetables</h4>
                  <p class="text-gray-500 text-sm">(78 item)</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                  <img src="./assets/images/category-3.png" class="h-20 mb-2" alt="categories">
                  <h4 class="font-bold">Fruits</h4>
                  <p class="text-gray-500 text-sm">(45 item)</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                  <img src="./assets/images/category-4.png" class="h-20 mb-2" alt="categories">
                  <h4 class="font-bold">Meat</h4>
                  <p class="text-gray-500 text-sm">(15 item)</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                  <img src="./assets/images/category-5.png" class="h-20 mb-2" alt="categories">
                  <h4 class="font-bold">Fish</h4>
                  <p class="text-gray-500 text-sm">(25 item)</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center text-center">
                  <img src="./assets/images/category-5.png" class="h-20 mb-2" alt="categories">
                  <h4 class="font-bold">Others</h4>
                  <p class="text-gray-500 text-sm">(85 item)</p>
                </div>
              </div>
            </div>
          </section>

          <!-- PRODUCT -->
          <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
              <h2 class="text-3xl md:text-4xl font-bold mb-8">Our Products</h2>
              <div class="flex flex-wrap gap-2 mb-8">
                  <button class="px-4 py-2 rounded bg-amber-600 text-white font-semibold">kopi</button>

              </div>
                <!-- Repeat for each product -->
                  <livewire:produk />
                <!-- Tambahkan produk lain dengan pola di atas -->
            </div>
          </section>

          <!-- STATES -->
          <section class="py-12 bg-amber-50">
            <div class="container mx-auto px-4">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/states-1.png" class="h-16 mb-2" alt="states">
                  <h3 class="text-2xl font-bold">733<span class="text-amber-600">+</span></h3>
                  <p class="text-gray-500">Active Clients</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/states-2.png" class="h-16 mb-2" alt="states">
                  <h3 class="text-2xl font-bold">33K<span class="text-amber-600">+</span></h3>
                  <p class="text-gray-500">Cup Of Coffee</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/states-3.png" class="h-16 mb-2" alt="states">
                  <h3 class="text-2xl font-bold">100<span class="text-amber-600">+</span></h3>
                  <p class="text-gray-500">Get Rewards</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/states-4.png" class="h-16 mb-2" alt="states">
                  <h3 class="text-2xl font-bold">21<span class="text-amber-600">+</span></h3>
                  <p class="text-gray-500">Country Cover</p>
                </div>
              </div>
            </div>
          </section>

          <!-- BLOG -->
          <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
              <h2 class="text-3xl md:text-4xl font-bold mb-8">Leatest Blog</h2>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Repeat for each blog -->
                <div class="bg-white rounded-lg shadow p-4 flex flex-col">
                  <img src="./assets/images/blog-1.jpg" class="h-48 w-full object-cover mb-4 rounded" alt="blog">
                  <div class="flex items-center text-xs text-gray-500 mb-2">
                    <ion-icon name="person-outline"></ion-icon>
                    <span class="ml-1 mr-4">by: Admin</span>
                    <ion-icon name="pricetags"></ion-icon>
                    <span class="ml-1">Services</span>
                  </div>
                  <h4 class="font-bold mb-2">Common Engine Oil Problems and Solutions</h4>
                  <div class="flex items-center justify-between text-xs text-gray-400">
                    <div class="flex items-center">
                      <ion-icon name="calendar-outline"></ion-icon>
                      <span class="ml-1">June 24, 2020</span>
                    </div>
                    <button class="text-amber-600 font-semibold">Read more</button>
                  </div>
                </div>
                <!-- Tambahkan blog lain dengan pola di atas -->
              </div>
            </div>
          </section>

          <!-- SERVICE -->
          <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/service-1.png" class="h-12 mb-2" alt="service">
                  <h4 class="font-bold mb-1">Curated Products</h4>
                  <p class="text-gray-500 text-sm">Provide Curated Products for all product over $100</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/service-2.png" class="h-12 mb-2" alt="service">
                  <h4 class="font-bold mb-1">Handmade</h4>
                  <p class="text-gray-500 text-sm">We ensure the product quality that is our main goal</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/service-3.png" class="h-12 mb-2" alt="service">
                  <h4 class="font-bold mb-1">Natural Food</h4>
                  <p class="text-gray-500 text-sm">Return product within 3 days for any product you buy</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                  <img src="./assets/images/service-4.png" class="h-12 mb-2" alt="service">
                  <h4 class="font-bold mb-1">Free home delivery</h4>
                  <p class="text-gray-500 text-sm">We ensure the product quality that you can trust easily</p>
                </div>
              </div>
            </div>
          </section>
        </main>

@endsection