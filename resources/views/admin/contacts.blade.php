@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="clientControlleur">
        <div class="row justify-content-center">
            <div class="col">
                <br>
                <table class="ui compact celled definition table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Utilisateurs</th>
                            <th>Date d'inscription</th>
                            <th>Adresse email</th>
                            <th>Numéro de téléphone</th>
                            <th>Modifier l'utilisateur</th>
                            <th>Supprimer l'utilisateur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="client in clients">
                            <td class="collapsing">
                                {{-- <div class="ui fitted checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div> --}}
                            </td>
                            <td> @{{ client . first_name }} @{{ client . last_name }}</td>
                            <td>@{{ client . created_at }}</td>
                            <td>@{{ client . email }}</td>
                            <td>@{{ client . phone }}</td>
                            <td> <button ng-click="startEdit(client)">Editer</button> </td>
                            <td> <button class="ui small button" ng-click="startDelete(client)">Supprimer</button> </td>
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

                                <div class="ui right floated small primary labeled icon button" ng-click="stratAdd()">
                                    <i class="user icon"></i>
                                    Ajouter un client
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
