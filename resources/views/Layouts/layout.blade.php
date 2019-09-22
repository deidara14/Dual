<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Plataforma Dual</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("https://use.fontawesome.com/releases/v5.8.2/css/all.css")}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset("css/mdb.min.css")}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
</head>

<body>
<header>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-light white-color lighten-1">
        <a class="navbar-brand" href="#">Plataforma de Control para Sistema Dual</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Tutores Internos
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="{{url("tinternos")}}">Mostrar</a>
                        <a class="dropdown-item" href="{{url("tinternos")}}/create">Registrar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Tutores Externos
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="{{url("texternos")}}">Mostrar</a>
                        <a class="dropdown-item" href="{{url("texternos")}}/create">Registrar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Coordinadores
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="{{url("coordinadores")}}">Mostrar</a>
                        <a class="dropdown-item" href="{{url("coordinadores")}}/create">Registrar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Alumnos
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="{{url("sexos")}}">Sexos</a>
                        <a class="dropdown-item" href="{{url("semestres")}}">Semestres</a>
                        <a class="dropdown-item" href="{{url("carreras")}}">Carreras</a>
                    </div>
                </li>
            </ul>
            <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle light-color" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>


</header>
<main class="container pt-4">
    @yield("content")
</main>
<footer class="bg-white text-center">
    <div>
        <span class="text-warning"> Powered by TeamOffice</span>
    </div>
</footer>
<!--/.Card-->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
