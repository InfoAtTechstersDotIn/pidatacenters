(function(){
    var app = angular.module("PiStore");

    var cloudserversCtrl = ["$scope", function($scope){
        alert("cld");
    }]

    app.controller("cloudserversCtrl", cloudserversCtrl);
})()