(function () {
    var app = angular.module("PiStore");

    var paymentcnfController = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", '$location', function ($scope, $rootScope, pistoreServies, piPricingSliders, $location) {

        // localStorage.removeItem("localStorageCart");

        var localStorageCart = [];

        localStorage.setItem("localStorageCart",[]); 
        $scope.clearUserDetails = function () {

            localStorage.removeItem("userdetails");
            // $location.path('https://pidatacenters.com/');
            window.location = 'https://pidatacenters.com/';
            // $window.location.reload();
        }
        
        var getId = $location.search().pid;
        if (getId) {
            pistoreServies.getPrchaged(getId).then(function (result) {
                // console.log('purchased ', result);
                debugger;
                $scope.items = result.message.order.products;
                $scope.purchasedDetails = result.message.order;
                $scope.base_total = 0;
                // // console.log($scope.items.length);
                for(var i = 0 ; i < $scope.items.length ; i++){
                    // console.log($scope.items[i].amount);
                    $scope.base_total = $scope.base_total +  parseInt($scope.items[i].amount);
                }
            })
        }
       

    }]

    

    app.controller("paymentcnfController", paymentcnfController);
})()