<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Multi-Vendor Portal')</title>
    <!-- Add CSS links here -->
</head>
<body>
    <header>
        <!-- Navigation bar -->
        @include('partials.navbar')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Footer content -->
        @include('partials.footer')
    </footer>
    <!-- Add JS scripts here -->
</body>
</html>
