<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-blue-500 text-white px-6 py-3 flex justify-between items-center flex-wrap shadow">

    <div class="text-xl font-bold">
        🌊 Shop
    </div>

    <div class="flex gap-4 flex-wrap">
        <a href="/" class="hover:underline">Home</a>
        <a href="/katalog" class="hover:underline">Katalog</a>
        <a href="/about" class="hover:underline">About</a>
        <a href="/contact" class="hover:underline">Contact</a>
    </div>

    <a href="/katalog" class="bg-green-500 px-4 py-2 rounded-lg font-semibold">
        + Tambah Produk
    </a>

</nav>

<!-- CONTENT -->
<main class="max-w-6xl mx-auto p-4 min-h-screen">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-blue-500 text-white mt-11">

    <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center gap-6">

        <div class="text-sm">
            © {{ date('Y') }} MyShop. All rights reserved.
        </div>

        <div class="flex gap-5 text-sm">
            <a href="/" class="hover:underline">Home</a>
            <a href="/katalog" class="hover:underline">Katalog</a>
            <a href="/about" class="hover:underline">About</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </div>

    </div>

</footer>

</body>
</html>