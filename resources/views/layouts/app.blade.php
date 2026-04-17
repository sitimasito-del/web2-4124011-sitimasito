<!DOCTYPE html>
<html>
<head>
    <title>MyShop</title>
</head>

<body style="margin:0; font-family:Arial, sans-serif; background:#f5f6fa;">

<!-- NAVBAR -->
<nav style="
    background: linear-gradient(90deg, #0984e3, #74b9ff);
    padding: 12px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    color: white;
    box-shadow: 0 3px 6px rgba(0,0,0,0.2);
">

    <div style="font-size:20px; font-weight:bold;">
        🌊 Shop
    </div>

    <div style="display:flex; gap:15px; flex-wrap:wrap;">
        <a href="/" style="color:white; text-decoration:none;">Home</a>
        <a href="/katalog" style="color:white; text-decoration:none;">Katalog</a>
        <a href="/about" style="color:white; text-decoration:none;">About</a>
        <a href="/contact" style="color:white; text-decoration:none;">Contact</a>
    </div>

    <div>
        <a href="/katalog" style="
            background:#00b894;
            color:white;
            padding:8px 14px;
            border-radius:6px;
            text-decoration:none;
            font-weight:bold;
        ">
            + Tambah Produk
        </a>
    </div>

</nav>

<!-- CONTENT -->
<main style="padding:20px; min-height:80vh;">
    @yield('content')
</main>

<!-- FOOTER -->
<footer style="
    background: linear-gradient(90deg, #0984e3, #74b9ff);
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 14px;
    margin-top: 30px;
">
    © {{ date('Y') }} MyShop. All rights reserved.
</footer>

</body>
</html>