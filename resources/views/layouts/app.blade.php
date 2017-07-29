<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dz-Pharm</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow"> <!-- Debut navbar -->
            <div class="container">
                <div class="nav-left">
                    <a href="{{route('home')}}" class="nav-item">
                        <img src="{{asset('images/Logo-DZPharm-01.png')}}" alt="DZ-Pharm Logo">
                    </a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Produits</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Pharmacies</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Nouveautées !</a>
                </div>
                <div class="nav-right" style="overflow: visible">
                    @if(Auth::guest())
                        <a href="{{route('login')}}" class="nav-item is-tab">Connexion</a>
                        <a href="{{route('register')}}" class="nav-item is-tab">Enregistrement</a>
                    @else
                        <button class="nav-item is-tab dropdown is-aligned-right">
                            Oussama DJILAH <span class="icon"><i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu ">
                                <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications</a></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Réglages</a></li>
                                <li class="separator"></li>
                                <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Déconnexion</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav> <!-- Fin navbar -->

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
