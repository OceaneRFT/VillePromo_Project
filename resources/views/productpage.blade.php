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
                <label for="size">Choisissez votre quantité</label>
                <select name="size" id="size" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p>
                    <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au
                        Panier</a>
                </p>
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
