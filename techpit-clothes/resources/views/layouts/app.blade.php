<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
<head>
    <title>@yield('title') | {{ config('app.name', 'Laravel')}}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="/" class="navbar-brand">{{ config('app.name', 'Laravel')}}</a>
            <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
            <a href="{{ route('cart.index')}}" class="fas fa-shopping-cart"></a>
        </div>
    </nav>
    @yield('content')
</body>
</html>