<!doctype html>
<html lang="hu">
    @include('partials._head')
<body class="bg-white dark:bg-black">
    <div id="app-guest">
        @include('partials._nav')

        @yield('content')
    </div>

    @include('partials._footer')
</body>
</html>
