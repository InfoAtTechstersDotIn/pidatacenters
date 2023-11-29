(function () {
    var app = angular.module("PiStore", ['ngRoute', 'ngAnimate', 'ui.bootstrap', 'angular-jwt']);

    app.config(['$routeProvider', '$locationProvider', '$httpProvider', 'jwtInterceptorProvider', 'jwtOptionsProvider', function ($routeProvider, $locationProvider, $httpProvider, jwtInterceptorProvider, jwtOptionsProvider) {
        $httpProvider.useApplyAsync(true);
        jwtOptionsProvider.config({
            
                  whiteListedDomains: ['pidatacenters.com', 'localhost']
        });
        // jwtInterceptorProvider.tokenGetter = function(jwtHelper, $http, pistoreServies) {
        //     var refreshToken = localStorage.getItem('refresh_token');
        //     if (refreshToken && jwtHelper.isTokenExpired(refreshToken)) {
        //         // debugger;
        //         pistoreServies.getToken(refreshToken).then(function(result){
        //             // debugger;
        //             console.log('newtk ', result);
        //         })
        //     } 
        //   }
       
        $httpProvider.interceptors.push('jwtInterceptor');

        $routeProvider
            .when("/cloudServers", {
                templateUrl: "views/cloudservers.html",
                cache: false
                
            })
            .when("/virtualDedicatedServers", {
                templateUrl: "views/virtualDedicatedServers.html",
                cache: false
            })
            .when("/enterpriseDedicatedServers", {
                // templateUrl: "views/enterpriseDedicatedServers.html",
                templateUrl: "views/enterpriseDedicated.html",
                // controller:"enterpriseDedicatedServersCtrl",
                cache: false
            })
            .when("/cloudStorage", {
                templateUrl: "views/cloudstorage.html",
                // controller: "cloudStorageCtrl",
                cache: false
            })
            .when("/serverCoLocation", {
                templateUrl: "views/serverCoLocation.html",
                controller: "serverCoLocationCtrl"
            })
            .when("/rackCoLocation", {
                templateUrl: "views/rackCoLocation.html",
                controller: "rackCoLocationCtrl"
            })
            .when("/checkout", {
                templateUrl: "views/checkout.html",
                cache: false,
                controller: "cartController",                
                resolve:{ lol:function($location, $rootScope) {
                    // debugger;
                    $rootScope.users = false;
                    // var lol = localStorage.getItem('userdetails');
                    // if (!lol) {
                    //     return $rootScope.users = false;
                    // }
                    return true;
                }
            //     checktn:function(jwtHelper, pistoreServies){
            //         var refreshToken = localStorage.getItem('refresh_token');
            //         if(refreshToken){
            //             // debugger;
            //             var exp = jwtHelper.isTokenExpired(refreshToken);
            //             if(exp){
            //                 pistoreServies.getToken(refreshToken).then(function(result){
            //                     console.log('newtk ', result);
            //                 })
            //             }
                       
            //         }
            //     }
            }
            
            })
            .when('/finalreview', {
                templateUrl:"views/finalreview.html",
                cache:false,
                // resolve:{
                //     checktn:function(jwtHelper, pistoreServies){
                //         var refreshToken = localStorage.getItem('refresh_token');
                //         if(refreshToken){
                //             // debugger;
                //             var exp = jwtHelper.isTokenExpired(refreshToken);
                //             if(exp){
                //                 pistoreServies.getToken(refreshToken).then(function(result){
                //                     // debugger;
                //                     console.log('newtk ', result);
                //                 })
                //             }
                           
                //         }
                //     }
                // },
                controller:"checkoutController"
                
            })
            .when('/paymentcnf', {
                templateUrl:"views/paymentcnf.html",
                controller:"paymentcnfController"
            })
            .when('/payment_failure', {
                templateUrl:"views/payment_failure.html",
                controller:"paymentcnfController"
            })
            .otherwise("cloudServers");

        $locationProvider.hashPrefix('');
        $locationProvider.html5Mode(false);
    }])

    app.run(function(){
        // var refreshToken = localStorage.getItem('refresh_token');
        // if(refreshToken){
        //     // debugger;
        //     refreshToken = JSON.parse(refreshToken);
        //     jwtInterceptorProvider.tokenGetter = function(jwtHelper, $http) {
        //         var config = {
        //             headers: {
        //               'Authorization': refreshToken
        //             }
        //           };
                
        //         if (jwtHelper.isTokenExpired(refreshToken)) {
        //             return $http.get('https://pricing.pidatacenters.com/priceimport/webservices/public/api/refresh', refreshToken, config).then(function(response) {
        //                 // debugger;
        //                 // localStorage.setItem('refresh_token', response.data.token);
        //                 return response.data;
        //             });
        //         } 
        //     }
        // }        
    })

})();