@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="produitControlleur">
        <div class="row justify-content-center">

            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Produits</th>
                        <th scope="col">Description</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Stock produit</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Modifier le produit</th>
                        <th scope="col">Supprimer le produit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="produit in produits">
                        <td> @{{ produit . name }} </td>
                        <td>@{{ produit . description }}</td>
                        <td>@{{ produit . price }}</td>
                        <td>@{{ produit . SKU }}</td>
                        <td>@{{ produit . picture }}</td>
                        <td> <button class="btn btn-outline-success" ng-click="startEdit(produit)">Editer</button> </td>
                        <td> <button class="btn btn-outline-danger" ng-click="startDelete(produit)">Supprimer</button> </td>
                    </tr>
                </tbody>

                <tfoot class="full-width">
                    <tr>
                        <th></th>

                        <th colspan="7">
                            Page : @{{ page }} sur @{{ totalpages }}

                            <button class="SelPag" ng-if="page>1" ng-click="previous()">«</button> 

                            <button class="@{{ page !== p ? 'SelPag' : 'unSelPag' }}" ng-click="GoTo(p)" ng-repeat="(key , p) in paginationsButtons  track by key">@{{ p }}</button>

                            <button class="SelPag" ng-if="page<totalpages" ng-click="next()">»</button>

                            <div class="btn btn-outline-info" ng-click="stratAdd()">
                                Ajouter un produit
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>




            {{------------------------------------------- MODAL
            -------------------------------------------}}
            showModal : @{{ showModal }}
            <div ng-if="showModal" class="modal_vp"> <!--ng-show="showModal"-->
                <div >
                    <span class="close" ng-click="closemodal()">x</span>
                    <div class="ui form">
                        <div class="five fields">
                            <div class="field">
                                <label>Nom produit</label>
                                <input type="text" ng-model="toEdit.name" placeholder="Nom du produit">
                            </div>
                            <div class="field">
                                <label>Description</label>
                                <input type="text" ng-model="toEdit.description" placeholder="Description du produit">
                            </div>
                            <div class="field">
                                <label>Prix</label>
                                <input type="text" ng-model="toEdit.description" placeholder="Prix du produit">
                            </div>
                            <div class="field">
                                <label>Stock</label>
                                <input type="text" ng-model="toEdit.description" placeholder="Stock produit">
                            </div>
                            <div class="field">
                                <label>Photo</label>
                                <input type="text" ng-model="toEdit.picture" placeholder="Photo du produit">
                            </div>

                        </div>
                    </div>
                    <div class="actions">
                        <div class="ui red basic cancel button" ng-click="closemodal()">
                            <i class="remove icon"></i>
                            Annuler
                        </div>
                        <div ng-if="etatREST == 'delete'" ng-click="deleteAjax(toEdit)"
                            class="ui orange ok inverted button">
                            <i class="checkmark icon"></i>
                            Supprimer
                        </div>
                        <div ng-if="etatREST == 'edit'" ng-click="editAjax(toEdit)" class="ui green ok inverted button">
                            <i class="checkmark icon"></i>
                            Editer
                        </div>
                        <div ng-if="etatREST == 'add'" ng-click="addAjax(toEdit)" class="ui blue ok inverted button">
                            <i class="checkmark icon"></i>
                            Ajouter
                        </div>
                    </div>
                </div>
            </div>

            {{------------------------------------------- MODAL
            -------------------------------------------}}
        </div>

    </div>
@endsection
