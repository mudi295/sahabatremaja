<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->site_name ?? 'Sahabat Remaja' }}</title>

    <meta name="description"
      content="{{ $setting->hero_subtitle ?? 'Website resmi Sahabat Remaja' }}">
    
    <!-- Google Fonts (Optional untuk Tipografi Premium) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <link
rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css">

<script
src="https://unpkg.com/leaflet/dist/leaflet.js">
</script>

    <!-- AOS Animation Stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        /* Menghilangkan kedipan Alpine.js sebelum termuat sempurna */
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#FAFAF7] text-gray-800 antialiased overflow-x-hidden">

    <!-- Membungkus isi konten agar tidak tertutup Navbar Fixed -->
    <div class="min-h-screen flex flex-col justify-between">
        @include('components.navbar')
        <main class="flex-grow">
            @yield('content')
        </main>

    </div>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800, // Durasi animasi dalam milidetik
                easing: 'ease-out', // Jenis akselerasi transisi
                once: true, // Animasi hanya berjalan sekali saat di-scroll pertama kali
                offset: 100 // Jarak picu animasi dari tepi bawah layar
            });
        });
    </script>
</body>
</html>