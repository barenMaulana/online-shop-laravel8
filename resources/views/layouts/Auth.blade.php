<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('includes.app.style')
    <title>{{ $title }}</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>

    @include('includes.app.script')
  </body>
</html>