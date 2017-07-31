<div class="app">
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
                        {{Auth::user()->first_name}} <span class="icon"><i class="fa fa-caret-down"></i></span>
                        <ul class="dropdown-menu ">
                            <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
                            <li><a href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications</a></li>
                            <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Réglages</a></li>
                            <li class="separator"></li>
                            <li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="icon">
                                        <i class="fa fa-fw m-r-10 fa-sign-out"></i>
                                    </span>
                                    Déconnexion
                                </a>
                                @include('_includes.forms.logout')
                            </li>
                        </ul>
                    </button>
                @endif
            </div>
        </div>
    </nav> <!-- Fin navbar -->
</div>