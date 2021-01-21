var app = angular.module('villepromo', []);

app.run(function ($rootScope, $http) {
    // ------------------------------------------ Pagination ------------------------------------------ //
    $rootScope.page = 1;
    $rootScope.nbr_ligne = 3;
    $rootScope.totalpages = 0;
    $rootScope.paginationsButtons = [];
    $rootScope.loading = false;

    $rootScope.activeTab = null;
    $rootScope.setActiveTab = function(tabName){
        $rootScope.activeTab = tabName;
        $rootScope.getAjax(true);
    }

    $rootScope.getAjax = function (resetPagination = false) {
        if(!$rootScope.activeTab){
            return;
        }
        const tableName = $rootScope.activeTab;
        if(resetPagination){
            $rootScope.paginationsButtons = [];
        }
        
        $rootScope.items = null;
        $rootScope.loading = true;

        $http.post("/get", { table: tableName, page: $rootScope.page, nbr_ligne: $rootScope.nbr_ligne }).then(function (data) {     //Afficher les données de la bdd
            console.log("data", data);
            $rootScope.loading = false;

            $rootScope.items = data.data.data;
            if(resetPagination){
                $rootScope.total = data.data.total;
                $rootScope.totalpages = Math.round($rootScope.total / $rootScope.nbr_ligne);
                for (var i = 1; i <= $rootScope.totalpages; i++) {
                    //console.log(i);
                    $rootScope.paginationsButtons.push(i);
                    //console.log("$rootScope.paginationsButtons" , $rootScope.paginationsButtons);
                }
            }
        });
    };

    $rootScope.next = function () {   // Gestion bouton pagination
        $rootScope.page++;
        $rootScope.getAjax()
    }

    $rootScope.previous = function () {
        $rootScope.page--;
        $rootScope.getAjax()
    }

    $rootScope.GoTo = function (page) {
        $rootScope.page = page;
        $rootScope.getAjax()
    }

    // ------------------------------------------ Modal ------------------------------------------ //

    $rootScope.showModal = false;

    $rootScope.openmodal = function(){
        $rootScope.showModal = true;
     };
    $rootScope.closemodal = function(){
       $rootScope.showModal = false;
    };
});

app.controller('clientControlleur', function ($scope, $http) {
    $scope.setActiveTab('users');

    // ------------------------------------------ Editer client ------------------------------------------ //
    $scope.startEdit = function (client) {
        // $scope.openmodal();
        $scope.openmodal();
        $scope.toEdit = client;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'users', toEdit: toEdit }).then(function (data) {

            $scope.toEdit = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Ajouter client ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.openmodal();
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'users', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Supprimer client ------------------------------------------ //
    $scope.startDelete = function (client) {
        $scope.openmodal();
        $scope.toEdit = client;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'users', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.closemodal();
        });
    }
});


app.controller('categorieControlleur', function ($scope, $http) {
   $scope.setActiveTab('categories');

    // ------------------------------------------ Editer categorie ------------------------------------------ //
    $scope.startEdit = function (categorie) {
        $scope.openmodal();
        $scope.toEdit = categorie;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'categories', toEdit: toEdit }).then(function (data) {
            $scope.toEdit = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Ajouter categorie ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.openmodal();
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'categories', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Supprimer categorie ------------------------------------------ //
    $scope.startDelete = function (categorie) {
        $scope.openmodal();
        $scope.toEdit = categorie;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'categories', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.closemodal();
        });
    }
});


app.controller('produitControlleur', function ($scope, $http) {
    $scope.setActiveTab('products');
    

    // ------------------------------------------ Editer produit ------------------------------------------ //
    $scope.startEdit = function (produit) {
        $scope.openmodal();
        $scope.toEdit = produit;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'products', toEdit: toEdit }).then(function (data) {
            $scope.toEdit = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Ajouter produit ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.openmodal();
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'products', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Supprimer produit ------------------------------------------ //
    $scope.startDelete = function (produit) {
        $scope.openmodal();
        $scope.toEdit = produit;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'products', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.closemodal();
        });
    }
});


app.controller('boutiqueControlleur', function ($scope, $http) {
    $scope.setActiveTab('shops');
    

    // ------------------------------------------ Editer boutique ------------------------------------------ //
    $scope.startEdit = function (boutique) {
        $scope.openmodal();
        $scope.toEdit = boutique;
        $scope.etatREST = "edit";
    };

    $scope.editAjax = function (toEdit) {
        $http.post("/edit", { table: 'shops', toEdit: toEdit }).then(function (data) {
            $scope.toEdit = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Ajouter boutique ------------------------------------------ //
    $scope.stratAdd = function () {
        $scope.openmodal();
        $scope.toEdit = null;
        $scope.etatREST = "add";
    }

    $scope.addAjax = function (toAdd) {
        $http.post("/add", { table: 'shops', toAdd: toAdd }).then(function (data) {
            // console.log("data", data);
            $scope.toAdd = null;
            $scope.closemodal();
        });
    }

    // ------------------------------------------ Supprimer boutique ------------------------------------------ //
    $scope.startDelete = function (boutique) {
        $scope.openmodal();
        $scope.toEdit = boutique;
        $scope.etatREST = "delete";
    };

    $scope.deleteAjax = function (toDelete) {
        $http.post("/delete", { table: 'shops', toDelete: toDelete }).then(function (data) {
            // console.log("data", data);
            $scope.toDelete = null;
            $scope.closemodal();
        });
    }
});












