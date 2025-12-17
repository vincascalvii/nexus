<!DOCTYPE html>
<head lang="en">
    @php /* --- Meta --- */ @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | Nexus</title>
    <meta name="description" content="@yield('description', 'Dashboard')">
    @php /* --- Styles --- */ @endphp
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css">
    @vite(['resources/sass/app.scss'])
    @stack('styles')
</head>
<body>
    <div>
        @include('layouts.sidebar')
        <main>
            @php /* --- Main panel --- */ @endphp
            @yield('content')
        </main>
    </div>
    @php /* --- Scripts --- */ @endphp
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>
</html>