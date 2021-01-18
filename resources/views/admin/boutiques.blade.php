@extends('layouts.private.layoutPrivate')
@section('content')

    <div class="container" ng-app="villepromo" ng-controller="boutiqueControlleur">
        <div class="row justify-content-center">
            <div class="col">
                <br>
                <table class="ui compact celled definition table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Boutiques</th>
                            <th>Photo</th>
                            <th>Description</th>
                            <th>Numéro de téléphone</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Pays</th>
                            <th>Date de création</th>
                            <th>Date de mise à jour</th>
                            <th>Modifier la boutique</th>
                            <th>Supprimer la boutique</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="boutique in boutiques">
                            <td class="collapsing">
                                {{-- <div class="ui fitted checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div> --}}
                            </td>
                            <td> @{{ boutique . name }} </td>
                            <td>@{{ boutique . picture }}</td>
                            <td>@{{ boutique . description }}</td>
                            <td>@{{ boutique . phone }}</td>
                            <td>@{{ boutique . adress }}</td>
                            <td>@{{ boutique . code_postal }}</td>
                            <td>@{{ boutique . country }}</td>
                            <td>@{{ boutique . created_at }}</td>
                            <td>@{{ boutique . updated_at }}</td>
                            <td> <button ng-click="startEdit(boutique)">Editer</button> </td>
                            <td> <button class="ui small button" ng-click="startDelete(boutique)">Supprimer</button> </td>
                        </tr>
                    </tbody>


                    <tfoot class="full-width">
                        <tr>
                            <th></th>

                            <th colspan="11">
                                Page : @{{ page }} sur @{{ totalpages }}

                                <button ng-if="page>1" ng-click="previous()">PRECEDENT</button>

                                <button ng-click="GoTo(p)" ng-repeat="(key , p) in paginationsButtons  track by key"
                                    ng-if="page !== p">@{{ p }}</button>

                                <button ng-if="page<totalpages" ng-click="next()">SUIVANT</button>

                                <div class="ui right floated small primary button" ng-click="stratAdd()">
                                    Ajouter une boutique
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
