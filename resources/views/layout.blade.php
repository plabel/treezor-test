<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/bootstrap.min.css">
    </head>
    <body>
        <x-navbar/>
        <hr>
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-sm-8">
              @yield('content')
            </div>
            <div class="col-sm-12">
            </div>
          </div>
        </div>
        <script src="/bootstrap.bundle.min.js" type="text/javascript">
        </script>
    </body>
</html>
