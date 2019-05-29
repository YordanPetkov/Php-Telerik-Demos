<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div>
            header
        </div>

        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            @yield('sidebar')
        </div>
    </body>
</html>