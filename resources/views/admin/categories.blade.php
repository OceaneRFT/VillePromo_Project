@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="categorieControlleur">
        <div class="row justify-content-center">
                <br>
                <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Catégories</th>
                            <th scope="col">Description</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Modifier la catégorie</th>
                            <th scope="col">Supprimer la catégorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="categorie in categories">
                            <td> @{{ categorie . name }} </td>
                            <td>@{{ categorie . description }}</td>
                            <td>@{{ categorie . picture }}</td>
                            <td> <button class="btn btn-outline-success" ng-click="startEdit(categorie)">Editer</button> </td>
                            <td> <button class="btn btn-outline-danger" ng-click="startDelete(categorie)">Supprimer</button> </td>
                        </tr>
                        <div class="btn btn-outline-info" ng-click="stratAdd()">
                            Ajouter une catégorie
                        </div>
                    </tbody>

                    <tfoot class="full-width">
                        <tr>
                            <th></th>

                            <th colspan="10">
                                Page : @{{ page }} sur @{{ totalpages }}

                                <button class="SelPag" ng-if="page>1" ng-click="previous()">«</button>

                                <button class="@{{ page !== p ? 'SelPag' : 'unSelPag' }}" ng-click="GoTo(p)"
                                    ng-repeat="(key , p) in paginationsButtons  track by key">@{{ p }}</button>

                                <button class="SelPag" ng-if="page<totalpages" ng-click="next()">»</button>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            {{------------------------------------------- MODAL
            -------------------------------------------}}
            <div ng-if="showModal" class="modal_vp">
                <div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="field">
                                <label>Nom catégorie</label>
                                <input type="text" ng-model="toEdit.name" placeholder="Nom de la catégorie">
                            </div>
                            <div class="field">
                                <label>Description</label>
                                <input type="text" ng-model="toEdit.description" placeholder="Description de la catégorie">
                            </div>
                            <div class="field">
                                <label>Photo</label>
                                <input type="text" ng-model="toEdit.picture" placeholder="Photo de la catégorie">
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
