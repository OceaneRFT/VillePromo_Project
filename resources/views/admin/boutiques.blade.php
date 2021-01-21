@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="boutiqueControlleur">
        <div class="row justify-content-center">
            <br>
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Boutiques</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Description</th>
                            <th scope="col">Numéro de téléphone</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Code Postal</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Date de mise à jour</th>
                            <th scope="col">Modifier la boutique</th>
                            <th scope="col">Supprimer la boutique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="boutique in boutiques">
                            <td> @{{ boutique . name }} </td>
                            <td>@{{ boutique . picture }}</td>
                            <td>@{{ boutique . description }}</td>
                            <td>@{{ boutique . phone }}</td>
                            <td>@{{ boutique . adress }}</td>
                            <td>@{{ boutique . code_postal }}</td>
                            <td>@{{ boutique . country }}</td>
                            <td>@{{ boutique . created_at }}</td>
                            <td>@{{ boutique . updated_at }}</td>
                            <td> <button class="btn btn-outline-success" ng-click="startEdit(boutique)">Editer</button>
                            </td>
                            <td> <button class="btn btn-outline-danger" ng-click="startDelete(boutique)">Supprimer</button>
                            </td>
                        </tr>
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
                                <label>Nom boutique</label>
                                <input type="text" ng-model="toEdit.name" placeholder="Nom de la boutique">
                            </div>
                            <div class="field">
                                <label>Photo</label>
                                <input type="text" ng-model="toEdit.picture" placeholder="Photo boutique">
                            </div>
                            <div class="field">
                                <label>Description</label>
                                <input type="text" ng-model="toEdit.description" placeholder="Description de la boutique">
                            </div>
                            <div class="field">
                                <label>Numéro de téléphone</label>
                                <input type="text" ng-model="toEdit.phone" placeholder="Contact téléphonique">
                            </div>
                            <div class="field">
                                <label>Adresse</label>
                                <input type="text" ng-model="toEdit.adress" placeholder="Adresse de la boutique">
                            </div>
                            <div class="field">
                                <label>Code Postal</label>
                                <input type="text" ng-model="toEdit.code_postal" placeholder="Code Postal">
                            </div>
                            <div class="field">
                                <label>Pays</label>
                                <input type="text" ng-model="toEdit.country" placeholder="Pays">
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
