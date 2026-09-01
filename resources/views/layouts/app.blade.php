<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara Heritage</title>
    <meta name="description" content="Website pelestarian budaya menampilkan informasi Bahasa, Gamelan, dan Wayang">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="bg-glow"></div>

    <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">NUSANTARA.</a>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('bahasa') }}" class="{{ request()->routeIs('bahasa') ? 'active' : '' }}">Bahasa</a></li>
            <li><a href="{{ route('gamelan') }}" class="{{ request()->routeIs('gamelan') ? 'active' : '' }}">Gamelan</a></li>
            <li><a href="{{ route('wayang') }}" class="{{ request()->routeIs('wayang') ? 'active' : '' }}">Wayang</a></li>
            <li><a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang Kami</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Nusantara Heritage. Melestarikan Budaya Bangsa.</p>
    </footer>
</body>
</html>
