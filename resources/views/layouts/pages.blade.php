<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Broccoli - Organic Food Website</title>
  <meta name="title" content="Broccoli - Organic Food Website">
  <meta name="description" content="This is an ecommerce HTML template made by DuoDevs.">

  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Rajdhani:wght@700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN (pastikan digunakan hanya untuk prototyping, bukan produksi) -->
  <script src="https://cdn.tailwindcss.com"></script>
  @vite(['resources/css/app.css'])


  @livewireStyles
</head>

<body id="back-to-top" class="bg-gray-50 font-sans">

  @include('header.header')

  <main>
    {{ $slot }}
  </main>
  @include('footer.footer')

  @livewireScripts
</body>
</html>