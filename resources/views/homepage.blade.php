@extends('layouts.public.layoutPublic')

@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Bienvenue sur Ville Promo</h1>
                <p class="lead text-muted">Venez shopper l'objet que vous recherchez !</p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                {{-- @foreach ($produits as $produit) --}}
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                {{-- src="{{ $produit->picture }}" role="img" aria-label="Placeholder: Thumbnail" --}}
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                            <div class="card-body">
                                {{-- <h2>{{ $produit->name }}</h2> --}}
                                {{-- <p class="card-text">{{ $produit->description }}</p> --}}
                                <div class="d-flex justify-content-between align-items-center">
                                    {{-- <span class="price">{{ number_format($produit->price, 2) }}€</span> --}}
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Plus d'informations <svg
                                            class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" data-prefix="fas"
                                            data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z">
                                            </path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>

    <div class="container">
        <p class="float-right">
            <a href="#">Haut de page ^</a>
        </p>
        <p>Ville Promo</p>
    </div>

@endsection
