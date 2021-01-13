<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    @include('parts.head')
</head>
<body class="d-flex flex-column h-100">
<header>
    @include('parts.header')
</header>
<main class="flex-shrink-0">
    @include('static.welcome')
    @yield('content')
</main>
<footer class="footer mt-auto py-3 bg-light text-muted">
    @include('parts.footer')
</footer>
</body>
</html>
