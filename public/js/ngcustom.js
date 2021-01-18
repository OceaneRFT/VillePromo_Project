var app = angular.module('villepromo', []);
app.controller('clientControlleur', function ($scope, $http) {
    $scope.page = 1;
    $scope.nbr_ligne = 3;
    $scope.totalpages = 0;
    $scope.paginationsButtons = [];

    $scope.getAjax = function () {
        $scope.paginationsButtons = [];
        $http.post("/get", { table: "users", page: $scope.page, nbr_ligne: $scope.nbr_ligne }).then(function (data) {     //Afficher les données de la bdd
            console.log("data", data);
            $scope.clients = data.data.data;
            $scope.total = data.data.total;
            $scope.totalpages = Math.round($scope.total / $scope.nbr_ligne);
            for (var i = 1; i <= $scope.totalpages; i++) {
                //console.log(i);
                $scope.paginationsButtons.push(i);
                //console.log("$scope.paginationsButtons" , $scope.paginationsButtons);
            }
        });
    };


    $scope.getAjax();

    $scope.next = function () {   // Gestion bouton pagination
        $scope.page++;
        $scope.getAjax()
    }

    $scope.previous = function () {
        $scope.page--;
        $scope.getAjax()
    }

    $scope.GoTo = function (page) {
        // console.log("here");
        $scope.page = page;
        $scope.getAjax()
    }

    // ------------------------------------------ Editer client ------------------------------------------ //
    $scope.startEdit = function (client) {
        $scope.showModal = true;
        $scope.toEdit = client;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'users', toEdit: toEdit }).then(function (data) {

            $scope.toEdit = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Ajouter client ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.showModal = true;
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'users', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Supprimer client ------------------------------------------ //
    $scope.startDelete = function (client) {
        $scope.showModal = true;
        $scope.toEdit = client;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'users', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.showModal = false;
        });
    }
});


app.controller('categorieControlleur', function ($scope, $http) {
    $scope.page = 1;
    $scope.nbr_ligne = 3;
    $scope.totalpages = 0;
    $scope.paginationsButtons = [];

    $scope.getAjax = function () {
        $scope.paginationsButtons = [];
        $http.post("/get", { table: "categories", page: $scope.page, nbr_ligne: $scope.nbr_ligne }).then(function (data) {     //Afficher les données de la bdd
            console.log("data", data);
            $scope.categories = data.data.data;
            $scope.total = data.data.total;
            $scope.totalpages = Math.round($scope.total / $scope.nbr_ligne);
            for (var i = 1; i <= $scope.totalpages; i++) {
                //console.log(i);
                $scope.paginationsButtons.push(i);
                //console.log("$scope.paginationsButtons" , $scope.paginationsButtons);
            }
        });
    };

    $scope.getAjax();

    $scope.next = function () {   // Gestion bouton pagination
        $scope.page++;
        $scope.getAjax()
    }

    $scope.previous = function () {
        $scope.page--;
        $scope.getAjax()
    }

    $scope.GoTo = function (page) {
        // console.log("here");
        $scope.page = page;
        $scope.getAjax()
    }

    // ------------------------------------------ Editer categorie ------------------------------------------ //
    $scope.startEdit = function (categorie) {
        $scope.showModal = true;
        $scope.toEdit = categorie;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'categories', toEdit: toEdit }).then(function (data) {
            $scope.toEdit = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Ajouter categorie ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.showModal = true;
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'categories', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Supprimer categorie ------------------------------------------ //
    $scope.startDelete = function (categorie) {
        $scope.showModal = true;
        $scope.toEdit = categorie;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'categories', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.showModal = false;
        });
    }
});


app.controller('produitControlleur', function ($scope, $http) {
    $scope.page = 1;
    $scope.nbr_ligne = 3;
    $scope.totalpages = 0;
    $scope.paginationsButtons = [];

    $scope.getAjax = function () {
        $scope.paginationsButtons = [];
        $http.post("/get", { table: "products", page: $scope.page, nbr_ligne: $scope.nbr_ligne }).then(function (data) {     //Afficher les données de la bdd
            // console.log("data", data);
            $scope.produits = data.data.data;
            // console.log("$scope.produits" , $scope.produits);
            $scope.total = data.data.total;
            $scope.totalpages = Math.round($scope.total / $scope.nbr_ligne);
            for (var i = 1; i <= $scope.totalpages; i++) {
                //console.log(i);
                $scope.paginationsButtons.push(i);
                //console.log("$scope.paginationsButtons" , $scope.paginationsButtons);
            }
        });
    };

    $scope.getAjax();

    $scope.next = function () {   // Gestion bouton pagination
        $scope.page++;
        $scope.getAjax()
    }

    $scope.previous = function () {
        $scope.page--;
        $scope.getAjax()
    }

    $scope.GoTo = function (page) {
        // console.log("here");
        $scope.page = page;
        $scope.getAjax()
    }

    // ------------------------------------------ Editer produit ------------------------------------------ //
    $scope.startEdit = function (produit) {
        $scope.showModal = true;
        $scope.toEdit = produit;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'products', toEdit: toEdit }).then(function (data) {
            $scope.toEdit = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Ajouter produit ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.showModal = true;
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'products', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Supprimer produit ------------------------------------------ //
    $scope.startDelete = function (produit) {
        $scope.showModal = true;
        $scope.toEdit = produit;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'products', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.showModal = false;
        });
    }
});


app.controller('boutiqueControlleur', function ($scope, $http) {
    $scope.page = 1;
    $scope.nbr_ligne = 3;
    $scope.totalpages = 0;
    $scope.paginationsButtons = [];

    $scope.getAjax = function () {
        $scope.paginationsButtons = [];
        $http.post("/get", { table: "shops", page: $scope.page, nbr_ligne: $scope.nbr_ligne }).then(function (data) {     //Afficher les données de la bdd
            console.log("data", data);
            $scope.boutiques = data.data.data;
            $scope.total = data.data.total;
            $scope.totalpages = Math.round($scope.total / $scope.nbr_ligne);
            for (var i = 1; i <= $scope.totalpages; i++) {
                //console.log(i);
                $scope.paginationsButtons.push(i);
                //console.log("$scope.paginationsButtons" , $scope.paginationsButtons);
            }
        });
    };

    $scope.getAjax();

    $scope.next = function () {   // Gestion bouton pagination
        $scope.page++;
        $scope.getAjax()
    }

    $scope.previous = function () {
        $scope.page--;
        $scope.getAjax()
    }

    $scope.GoTo = function (page) {
        // console.log("here");
        $scope.page = page;
        $scope.getAjax()
    }

    // ------------------------------------------ Editer boutique ------------------------------------------ //
    $scope.startEdit = function (boutique) {
        $scope.showModal = true;
        $scope.toEdit = boutique;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'shops', toEdit: toEdit }).then(function (data) {
            $scope.toEdit = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Ajouter boutique ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.showModal = true;
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'shops', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.showModal = false;
        });
    }

    // ------------------------------------------ Supprimer boutique ------------------------------------------ //
    $scope.startDelete = function (boutique) {
        $scope.showModal = true;
        $scope.toEdit = boutique;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'shops', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.showModal = false;
        });
    }
});












