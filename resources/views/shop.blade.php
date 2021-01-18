@extends('layouts.public.layoutPublic')

@section('content')
<!-- affichage dynamique  -->
<section class="view container">
    <div class="ui column grid">
        <div class="column">
            <div class="ui segment view_item">
                <img />
            </div>
        </div>
    </div>
</section>

<!-- affichage catégories-->
<div class="container category_shoppage">
    <div class="row item_category1">
        <div class="ui unstackable items">
            <div class="item category">
                <div class="image">
                    <img src="">
                </div>
                <div class="content">
                    <a class="header">CATEGORIE</a>
                    <div class="meta">
                        <span>Description</span>
                    </div>
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="extra">
                        Additional Details
                    </div>
                </div>
            </div>

            <div class="item category2">
                <div class="image">
                    <img src="">
                </div>
                <div class="content">
                    <a class="header">CATEGORIE</a>
                    <div class="meta">
                        <span>Description</span>
                    </div>
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="extra">
                        Additional Details
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row item_category">
        <div class="ui unstackable items">
            <div class="item category3">
                <div class="image">
                    <img src="">
                </div>
                <div class="content">
                    <a class="header">CATEGORIE</a>
                    <div class="meta">
                        <span>Description</span>
                    </div>
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="extra">
                        Additional Details
                    </div>
                </div>
            </div>
            <div class="item category4">
                <div class="image">
                    <img src="">
                </div>
                <div class="content">
                    <a class="header">CATEGORIE</a>
                    <div class="meta">
                        <span>Description</span>
                    </div>
                    <div class="description">
                        <p></p>
                    </div>
                    <div class="extra">
                        Additional Details
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui divider"></div>

<section class="container featured_category">
    <div class="ui four column grid container">
        <div class="column">
            <h1 class="title_category">CATEGORIE</h1>
            <div class="ui segment featuredcategory_item">
                <img>
            </div>
        </div>
        <div class="column">
            <h1 class="title_category">CATEGORIE</h1>
            <div class="ui segment featuredcategory_item">
                <img>
            </div>
        </div>
        <div class="column">
            <h1 class="title_category">CATEGORIE</h1>
            <div class="ui segment featuredcategory_item">
                <img>
            </div>
        </div>
        <div class="column">
            <h1 class="title_category">CATEGORIE</h1>
            <div class="ui segment featuredcategory_item">
                <img>
            </div>
        </div>
    </div>
</section>

<div class="ui divider"></div>

<section class="container product_container">
    <div class="row">
        <div class="ui vertical menu category">
            <div class="item category-menu">
                <div class="header">CATEGORIE NUMERO 1</div>
                <div class="menu">
                    <a class="item">Products 1</a>
                    <a class="item">Products 2</a>
                </div>
            </div>
            <div class="item category-menu">
                <div class="header">CATEGORIE NUMERO 2</div>
                <div class="menu">
                    <a class="item">Products 1</a>
                    <a class="item">Products 2</a>
                </div>
            </div>
            <div class="item category-menu">
                <div class="header">CATEGORIE NUMERO 3</div>
                <div class="menu">
                    <a class="item">Products 1</a>
                    <a class="item">Products 2</a>
                </div>
            </div>
            <div class="item category-menu">
                <div class="header">CATEGORIE NUMERO 4</div>
                <div class="menu">
                    <a class="item">Products 1</a>
                    <a class="item">Products 2</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row product_content">
        <div class="ui one column grid container">
            <div class="column">
                <div class="ui segment">
                    <div class="search-product">
                        <div class="ui action input">
                            <input type="text" placeholder="Chercher un article...">
                            <select class="ui compact selection dropdown">
                                <option value="tout voir">Tout voir</option>
                                <option value="nouveauté">Nouveautés</option>
                                <option value="populaires">Les plus populaires</option>
                            </select>
                            <div class="ui button">Rechercher</div>
                        </div>
                    </div>
                    <div class="row product_view">
                        <div class="ui three column grid">
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product_view">
                        <div class="ui three column grid">
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product_view">
                        <div class="ui three column grid">
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product_view">
                        <div class="ui three column grid">
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui segment product_view">
                                    <img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection