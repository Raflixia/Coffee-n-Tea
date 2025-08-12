<!-- filepath: c:\xampp\htdocs\Coffe-n-Tea\resources\views\index.blade.php -->



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
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Dashboard</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">About</a>
        <a href="{{ route('shop') }}" class="text-gray-700 hover:text-amber-600 font-semibold">Shop</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">News</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Pages</a>
        <a href="#" class="text-gray-700 hover:text-amber-600 font-semibold">Contact</a>
        <div class="flex space-x-4 ml-4">
          <a href="{{ route('login') }}" class="text-gray-500 hover:text-amber-600"><ion-icon name="person-outline"></ion-icon></a>
          <a href="{{ route('keranjang') }}" class="text-gray-500 hover:text-amber-600"><ion-icon name="cart-outline"></ion-icon></a>
        </div>
      </nav>
    </div>
    <!-- Mobile menu -->
    <div class="md:hidden" id="nav-mobile" style="display:none;">
      <div class="px-4 pb-4 space-y-2 bg-white shadow">
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">Dashboard</a>
        <a href="#" class="block text-gray-700 hover:text-amber-600 font-semibold">About</a>
        <a href="{{ route('shop') }}" class="block text-gray-700 hover:text-amber-600 font-semibold">Shop</a>
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