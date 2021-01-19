@extends('layouts.public.layoutPublic')

@section('content')

    <main role="main">
        <div class="py-3">
            <div class="container-fluid">
                <div class="row">
                    @foreach ( $produits as $produit)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ $produit->picture }}" class="card-img-top img-fluid" alt="{{ $produit->name }}">
                            <div class="card-body">
                                <p class="card-text">{{ $produit->name }} <br>{{ $produit->description }} </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">{{ number_format($produit->price,2) }} €</span>
                                    <a href="{{ route('voir_produit',['id'=>$produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
