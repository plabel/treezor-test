<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <x-navbar/>
        <h1>@yield('title')</h1>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
