<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gamelan Enggal Jaya Solo')</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('about.css') }}">
    <link rel="stylesheet" href="{{ asset('gamelan.css') }}">
    <link rel="stylesheet" href="{{ asset('galeri.css') }}">
    <link rel="stylesheet" href="{{ asset('contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @stack('head')
</head>
<body>
    <!-- Header -->
    <header>
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('logo.jpg') }}" alt="Logo" style="height: 50px; margin-right: 10px;">
            Gamelan Enggal Jaya Solo
        </a>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/gamelan') }}">Gamelan</a></li>
                <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer style="background-color: #000000; padding: 20px 0;">
        <div class="footer-content">
            <p style="color: #888; text-align: center; margin: 0;">© 2025 Gamelan Enggal Jaya Solo. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
