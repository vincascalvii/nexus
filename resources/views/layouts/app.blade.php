<!DOCTYPE html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="description" content="@yield('description', 'Dashboard')">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css">
    @vite(['resources/sass/app.scss'])
    @stack('styles')
</head>
<body>
    <div>
        @include('layouts.sidebar')
        <main>
            @yield('content')
        </main>
    </div>
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>
</html>