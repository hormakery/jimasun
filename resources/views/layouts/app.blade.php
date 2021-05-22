<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>php</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bold-BS4-Jumbotron-with-Particles-js-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bold-BS4-Jumbotron-with-Particles-js.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dark-NavBar-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dark-NavBar-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Dark-NavBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer-Basic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Login-Form-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Modal-Login-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Registration-Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Registration-Form-with-Photo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div></div>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="icon ion-ios-infinite" id="brand-logo"></i></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                    @else
                   
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
                </ul>
            </div>
        </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer-basic"></footer><footer id="footer">
    
    <div style= "background: black; text-align: center; margin: 0px; padding:10px">
        <p style= "color:grey; font-family: raleway">Copyright (c) 2021 Hormakery</p>
    </div>
</footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Bold-BS4-Jumbotron-with-Particles-js.js') }}"></script>
</body>

</html>

