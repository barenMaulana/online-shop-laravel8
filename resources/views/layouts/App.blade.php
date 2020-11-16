<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title }}</title>
    @include('includes.app.style')
</head>

<body id="home">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#home">
                <img src="{{ url('/frontend/assets/img/logo-icon.png') }}" alt="">
                SportLine
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/products') }}">Product</a></li>
                @guest
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/login') }}">Login</a></li>
                @endguest
                @auth
                <li class="nav-item" type="submit">
                    <form action="{{ route('logout') }} " method="POST">
                     @csrf
                     <button type="submit" class="btn btn-sm" style="margin-top: 7%">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © SportLine Website 2020</div>
    </footer>

    @include('includes.app.script')
</body>

</html>