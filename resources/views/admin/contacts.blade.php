@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="clientControlleur">
        <div class="row justify-content-center">
            <br>
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Utilisateurs</th>
                            <th scope="col">Date d'inscription</th>
                            <th scope="col">Adresse email</th>
                            <th scope="col">Numéro de téléphone</th>
                            <th scope="col">Modifier l'utilisateur</th>
                            <th scope="col">Supprimer l'utilisateur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-if="!items && loading">
                            <td><div class="spinner-border" role="status">
                                <span class="sr-only">Chargement...</span>
                            </div></td>
                        </tr>
                        <tr ng-repeat="client in items">
                            <td> @{{ client . first_name }} @{{ client . last_name }}</td>
                            <td>@{{ client . created_at }}</td>
                            <td>@{{ client . email }}</td>
                            <td>@{{ client . phone }}</td>
                            <td> <button class="btn btn-outline-success" ng-click="startEdit(client)">Editer</button> </td>
                            <td> <button class="btn btn-outline-danger" ng-click="startDelete(client)">Supprimer</button>
                            </td>
                        </tr>
                        <div class="btn btn-outline-info" ng-click="stratAdd()">
                            Ajouter un utilisateur
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

                    <div class="ui form">
                        <div class="four fields">
                            <div class="field">
                                <label>Nom de famille</label>
                                <input type="text" ng-model="toEdit.first_name" placeholder="Nom utilisateur">
                            </div>
                            <div class="field">
                                <label>Prénom(s)</label>
                                <input type="text" ng-model="toEdit.last_name" placeholder="Prénom utilisateur">
                            </div>
                            <div class="field">
                                <label>Email</label>
                                <input type="text" ng-model="toEdit.email" placeholder="Email">
                            </div>
                            <div class="field">
                                <label>Numéro de téléphone</label>
                                <input type="text" ng-model="toEdit.phone" placeholder="Numéro de téléphone">
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
