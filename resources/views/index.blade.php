<!-- filepath: c:\xampp\htdocs\Coffe-n-Tea\resources\views\index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Broccoli - Organic Food website</title>
  <meta name="title" content="Broccoli - Organic Food website">
  <meta name="description" content="this is Ecommerce Html Template made by DuoDevs">
  <link rel="shortcut icon" href="./favicon.png" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Rajdhani:wght@700&display=swap" rel="stylesheet">
  <!-- TAILWIND CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
</head>
<body id="back-to-top" class="bg-gray-50 font-sans">

  <!-- Topbar -->
  <div class="bg-amber-600 text-white text-sm">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center py-2 px-4">
      <ul class="flex space-x-4 mb-2 md:mb-0">
        <li class="flex items-center space-x-1">
          <ion-icon name="location-outline"></ion-icon>
          <span>15/A, Nest Tower, NYC</span>
        </li>
        <li class="flex items-center space-x-1">
          <ion-icon name="mail-outline"></ion-icon>
          <span>info@webmail.com</span>
        </li>
      </ul>
      <div class="flex items-center space-x-4">
        <div class="flex items-center space-x-1 cursor-pointer">
          <span>English</span>
          <ion-icon name="arrow-down-outline"></ion-icon>
        </div>
        <ul class="flex space-x-2">
          <li><ion-icon name="logo-facebook"></ion-icon></li>
          <li><ion-icon name="logo-twitter"></ion-icon></li>
          <li><ion-icon name="logo-instagram"></ion-icon></li>
          <li><ion-icon name="logo-dribbble"></ion-icon></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Header/Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-4 md:px-8">
      <a href="#" class="flex items-center">
        <img src="./assets/images/logo-dark.png" alt="logo" class="h-10 w-auto">
      </a>
      <button class="md:hidden text-gray-700" id="nav-toggle">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
      <nav class="hidden md:flex space-x-6 items-center" id="nav-menu">
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Home</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">About</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Shop</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">News</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Pages</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Contact</a>
        <div class="flex space-x-4 ml-4">
          <a href="#" class="text-gray-500 hover:text-amber-600"><ion-icon name="person-outline"></ion-icon></a>
          <a href="#" class="text-gray-500 hover:text-amber-600"><ion-icon name="heart-outline"></ion-icon></a>
          <a href="#" class="text-gray-500 hover:text-amber-600"><ion-icon name="cart-outline"></ion-icon></a>
        </div>
      </nav>
    </div>
    <!-- Mobile menu -->
    <div class="md:hidden" id="nav-mobile" style="display:none;">
      <div class="px-4 pb-4 space-y-2 bg-white shadow">
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">Home</a>
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">About</a>
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">Shop</a>
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">News</a>
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">Pages</a>
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">Contact</a>
        <div class="flex space-x-4 mt-2">
          <a href="#" class="text-gray-500 hover:text-amber-600"><ion-icon name="person-outline"></ion-icon></a>
          <a href="#" class="text-gray-500 hover:text-amber-600"><ion-icon name="heart-outline"></ion-icon></a>
          <a href="#" class="text-gray-500 hover:text-amber-600"><ion-icon name="cart-outline"></ion-icon></a>
        </div>
      </div>
    </div>
  </header>
  <script>
    document.getElementById('nav-toggle').onclick = function() {
      var nav = document.getElementById('nav-mobile');
      nav.style.display = nav.style.display === 'none' || nav.style.display === '' ? 'block' : 'none';
    }
  </script>

  <main>
    <!-- HERO -->
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
            @foreach ($kategori as $item)
            <button class="px-4 py-2 rounded bg-amber-600 text-white font-semibold">{{ $item->nama_kategori}}</button>
            @endforeach
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <!-- Repeat for each product -->
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
            <h4 class="font-bold mb-1">Carrots Group Scal</h4>
            <div class="flex items-center space-x-2">
              <span class="text-lg font-bold text-amber-600">$32.00</span>
              <span class="line-through text-gray-400">$46.00</span>
            </div>
          </div>
          <!-- Tambahkan produk lain dengan pola di atas -->
        </div>
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

  <!-- FOOTER -->
  <footer class="bg-amber-600 text-white pt-12 pb-6">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-5 gap-8">
      <div class="md:col-span-2">
        <a href="#" class="inline-block mb-4">
          <img src="./assets/images/logo-light.png" alt="logo" class="h-10">
        </a>
        <p class="mb-4">Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.</p>
        <ul class="mb-4">
          <li class="flex items-center mb-2">
            <ion-icon name="location-outline" class="mr-2"></ion-icon>
            <span>Brooklyn, New York, United States</span>
          </li>
          <li class="flex items-center mb-2">
            <ion-icon name="call-outline" class="mr-2"></ion-icon>
            <span>+0123-456789</span>
          </li>
          <li class="flex items-center">
            <ion-icon name="mail-outline" class="mr-2"></ion-icon>
            <span>example@example.com</span>
          </li>
        </ul>
        <div class="flex space-x-3">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
          <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
        </div>
      </div>
      <div>
        <h5 class="font-bold mb-2">Company</h5>
        <ul>
          <li><a href="#" class="hover:underline">About</a></li>
          <li><a href="#" class="hover:underline">Blog</a></li>
          <li><a href="#" class="hover:underline">All Products</a></li>
          <li><a href="#" class="hover:underline">Locations Map</a></li>
          <li><a href="#" class="hover:underline">FAQ</a></li>
          <li><a href="#" class="hover:underline">Contact us</a></li>
        </ul>
      </div>
      <div>
        <h5 class="font-bold mb-2">Services</h5>
        <ul>
          <li><a href="#" class="hover:underline">Order tracking</a></li>
          <li><a href="#" class="hover:underline">Wish List</a></li>
          <li><a href="#" class="hover:underline">Login</a></li>
          <li><a href="#" class="hover:underline">My account</a></li>
          <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
          <li><a href="#" class="hover:underline">Promotional Offers</a></li>
        </ul>
      </div>
      <div>
        <h5 class="font-bold mb-2">Customer Care</h5>
        <ul>
          <li><a href="#" class="hover:underline">Logic</a></li>
          <li><a href="#" class="hover:underline">My account</a></li>
          <li><a href="#" class="hover:underline">Wish List</a></li>
          <li><a href="#" class="hover:underline">Order tracking</a></li>
          <li><a href="#" class="hover:underline">FAQ</a></li>
          <li><a href="#" class="hover:underline">Contact us</a></li>
        </ul>
      </div>
      <div>
        <h5 class="font-bold mb-2">Newsletter</h5>
        <p class="mb-2">Subscribe to our weekly Newsletter and receive updates via email.</p>
        <form class="flex mb-2">
          <input type="email" placeholder="Email*" class="px-2 py-1 rounded-l text-gray-800" required>
          <button class="bg-white text-amber-600 px-3 py-1 rounded-r"><ion-icon name="navigate"></ion-icon></button>
        </form>
        <span class="block mb-2">We Accept</span>
        <img src="./assets/images/payment-4.png" class="w-full max-w-xs" alt="payment image">
      </div>
    </div>
    <div class="container mx-auto px-4 mt-8 flex flex-col md:flex-row justify-between items-center border-t border-amber-400 pt-4">
      <a href="#" class="text-sm">All Rights @DuoDevs 2023</a>
      <ul class="flex space-x-4 mt-2 md:mt-0 text-sm">
        <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
        <li><a href="#" class="hover:underline">Claim</a></li>
        <li><a href="#" class="hover:underline">Privacy & Policy</a></li>
      </ul>
    </div>
  </footer>

  <!-- BACK TO TOP -->
  <a href="#back-to-top" class="fixed bottom-6 right-6 bg-amber-600 text-white p-3 rounded-full shadow-lg hover:bg-amber-700 transition">
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>