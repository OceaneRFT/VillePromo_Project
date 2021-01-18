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
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

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

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('TABLEAU DE BORD ADMINISTRATEUR') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <main class="container dashbordAdmin">
            <div class="row dashbordAdmin">

                <div class="ui vertical menu">
                    <a class="item" href="/admin/contacts">
                        <h4 class="ui header">Contacts</h4>
                    </a>
                    <a class="item" href="/admin/categories">
                        <h4 class="ui header">Catégories</h4>
                    </a>
                    <a class="item" href="/admin/produits">
                        <h4 class="ui header">Produits</h4>
                    </a>
                    <a class="item" href="/admin/boutiques">
                        <h4 class="ui header">Boutiques</h4>
                    </a>
                </div>

            </div>
            <div class="row">@yield('content')</div>

        </main>

        <!--Footer-->
        {{-- <section class="">
            <div class="ui column grid">
                <div class="column">
                    <div class="ui segment">
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
</body>

</html>
