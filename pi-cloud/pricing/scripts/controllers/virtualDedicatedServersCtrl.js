(function(){
    var app = angular.module("PiStore");

    var virtualDedicatedServersCtrl = ["$scope", function($scope){
        alert("cld");
    }]

    app.controller("virtualDedicatedServersCtrl", virtualDedicatedServersCtrl);
})()