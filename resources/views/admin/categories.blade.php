@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="categorieControlleur">
        <div class="row justify-content-center">
            <div class="col">
                <br>
                <table class="ui compact celled definition table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Catégories</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Modifier la catégorie</th>
                            <th>Supprimer la catégorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="categorie in categories">
                            <td class="collapsing">
                                {{-- <div class="ui fitted checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div> --}}
                            </td>
                            <td> @{{ categorie . name }} </td>
                            <td>@{{ categorie . description }}</td>
                            <td>@{{ categorie . picture }}</td>
                            <td> <button ng-click="startEdit(categorie)">Editer</button> </td>
                            <td> <button class="ui small button" ng-click="startDelete(categorie)">Supprimer</button> </td>
                        </tr>
                    </tbody>


                    <tfoot class="full-width">
                        <tr>
                            <th></th>

                            <th colspan="6">
                                Page : @{{ page }} sur @{{ totalpages }}

                                <button ng-if="page>1" ng-click="previous()">PRECEDENT</button>

                                <button ng-click="GoTo(p)" ng-repeat="(key , p) in paginationsButtons  track by key"
                                    ng-if="page !== p">@{{ p }}</button>

                                <button ng-if="page<totalpages" ng-click="next()">SUIVANT</button>

                                <div class="ui right floated small primary button" ng-click="stratAdd()">
                                    Ajouter une catégorie
                                </div>
                            </th>
                        </tr>
                    </tfoot>
                </table>


            </div>

            {{------------------------------------------- MODAL
            -------------------------------------------}}
            <div ng-show="showModal" class="modal-angular">
                <div class="modal" ng-show="showModal">

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
                        <div class="ui red basic cancel button" ng-click="showModal = false">
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
