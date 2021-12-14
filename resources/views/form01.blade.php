<html>
    <head>
        <title>アプリ名 - @yield('フォーム')</title>
    </head>
    <body>
        @section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>