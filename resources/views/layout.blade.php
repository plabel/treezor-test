<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/bootstrap.min.css">
    </head>
    <body>
        <x-navbar/>
        <h1>@yield('title')</h1>
        <div class="container">
            @yield('content')
        </div>
        <script src="/bootstrap.bundle.min.js" type="text/javascript">          
        </script>
    </body>
</html>
