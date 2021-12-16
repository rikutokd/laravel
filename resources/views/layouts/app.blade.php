<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('/js/test.js') }}"></script>
    <title>@yield('title')</title>
    </head>
    <body>
        <div class="header">
            @yield('header')
        </div>

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>