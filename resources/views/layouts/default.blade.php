<!doctype html>
<html>
<head>
    @include('includes.head')
    @yield('styles')
</head>
<body>
    @include('includes.header')
    <main class="container">
        @yield('content')
    </main>
    <footer class="section">
        @include('includes.footer')
    </footer>
    @yield('scripts')
</body>
</html>
