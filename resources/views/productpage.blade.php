@extends('layouts.public.layoutPublic')

@section('content')
    {{-- {{ dump($produit) }} --}}
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ $produit->picture }}" alt="Card image cap">
                </div>
            </div>
            <div class="col-6">
                <h1 class="jumbotron-heading">{{ $produit->name }}</h1>
                <h5>{{ $produit->price }} €</h5>
                <p class="lead text-muted">{{ $produit->description }}</p>
                <hr>
                <form action="{{ route('cart_add',['id'=>$produit->id]) }}" method="POST" id="panier_add">
                    @csrf
                    <label for="quantity">Choisissez votre quantité</label>
                    <input class="form-control" name="quantity" id=""quantity type="number" value="1">
                </form>
                <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au
                    Panier
                    </button>
            </div>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <h3>Vous aimerez aussi :</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="" class="card-img-top img-fluid" alt="Responsive image">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="" class="card-img-top img-fluid" alt="Responsive image">

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="" class="card-img-top img-fluid" alt="Responsive image">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
