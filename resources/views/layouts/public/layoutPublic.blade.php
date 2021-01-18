<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'villePromo') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-ie8-build/1.4.7/angular.min.js" defer></script>
    <script src="{{ asset('js/ngcustom.js') }}" defer></script>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
        crossorigin="anonymous" />

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
        integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw=="
        crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    {{-- <div id="app">

        <nav class="ui menu nav_menu">
            <a href="/" class="header item">
                LOGO
            </a>
            <a href="/shop" class="item">
                Boutique
            </a>
            <a href="/product" class="item">
                Catégorie produits
            </a>
            <a class="item">
                A propos
            </a>




            <section class="container search">
                <div class="ui action input nav">
                    <input type="text" placeholder="Rechercher un produit...">
                    <select class="ui compact selection dropdown">
                        <option value="all">Tout</option>
                        <option value="products">Produits</option>
                    </select>
                    <div class="ui button">Rechercher</div>
                </div>
            </section>

            <section class="container customer">
                <div class="ui vertical animated button" tabindex="0">
                    <div class="hidden content">Panier</div>
                    <div class="visible content">
                        <i class="shop icon"></i>
                    </div>
                </div>
                @guest

                <div class="item_sign">
                    <a href="/register" class="ui primary button">S'enregistrer</a>
                </div>
                <div class="item_login">
                    <a href="/login" class="ui button">Se connecter</a>
                </div>
                @endguest

                @auth
                @if (Auth::user()->isadmin > 0)
                    <a href="/admin" class="ui toggle button">Tableau de bord</a>
                @endif

                <div class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        Bienvenue {{ Auth::user()->pseudo }}
                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __(' Se déconnecter') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endauth

            </section>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <!--Footer-->
        <section class="newsletter">
            <div class="ui column grid">
                <div class="column">
                    <div class="ui segment">
                        <h1>Newsletter</h1>
                        <p>Inscrivez vous afin de recevoir en avant première nos offres exclusives</p>
                        <div class="ui fluid action input">
                            <input type="text" placeholder="Indiquez votre adresse mail...">
                            <div class="ui button">S'inscrire</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/shop">Boutique
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A Propos</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
            </form>

            <div>
                <button type="button" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bag-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z">
                        </path>
                    </svg>
                    Panier
                </button>
                @guest
                    <a type="button" href="/register" class="btn btn-info">S'enregistrer</a>
                    <a type="button" href="/login" class="btn btn-secondary">Se connecter</a>
                @endguest
            </div>
        </div>
    </nav>
    @auth
        @if (Auth::user()->isadmin > 0)
            <a type="button" href="/admin" class="btn btn-secondary">Tableau de bord</a>
        @endif
        <div class="nav-item dropdown">
            Bienvenue {{ Auth::user()->pseudo }}
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                {{ __(' Se déconnecter') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </div>

    @endauth

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>
