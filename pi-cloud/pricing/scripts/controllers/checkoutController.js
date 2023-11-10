(function () {
    var app = angular.module("PiStore");

    var checkoutController = ["$scope", "$window", "$rootScope", "pistoreServies", "piPricingSliders", "$location", "jwtHelper", function ($scope, $window, $rootScope, pistoreServies, piPricingSliders, $location, jwtHelper) {


        $scope.critems = pistoreServies.cartList();
        $scope.items = $scope.critems;

        // $rootScope.cartcount = pistoreServies.cartList();
        // $rootScope.$watch($rootScope.cartcount, function () {
        //     $scope.critems = pistoreServies.cartList();
        // })

        var checktoken = function () {


        }




        $scope.checkoutbtn = function (checkitems) {
            debugger;
            var authDetails = localStorage.getItem('userdetails');

            if (!authDetails) {

            } else {
                authDetails = JSON.parse(authDetails);
                $scope.gst_num = authDetails.user[0].gst_num;
            }
            if (!checkitems) {
                return false;
            }
            var sendqt = {};
            var otctotal = total = discount_total = afterdiscount = tax = grandTotal = 0;
            angular.forEach(checkitems, function (eachitem) {
                // // console.log('each ', eachitem.plan_price);
                debugger;

                total += parseInt(eachitem.amount);
                if (eachitem.otc) {
                    otctotal += parseInt(eachitem.otc);
                }
                if (eachitem.MigrationToolOtcPrice) {
                    total_otctotal += parseInt(eachitem.MigrationToolOtcPrice);
                }
                // eachitem.tenure = eachitem.months;
                if (!eachitem.amount) {
                    eachitem.amount = eachitem.plan_price;
                }
                // discount_total += parseInt(eachitem.promodiscount);

            }, this);
            afterdiscount = Math.round(total) + Math.round(otctotal);
            tax = Math.round(Number(afterdiscount) * 0.18);
            grandTotal = Math.round(afterdiscount) + Math.round(tax);

            $scope.totalplanprice = Math.round(total);
            $scope.totalotcprice = Math.round(total);
            // $scope.totalplanprice = Math.round(total);

            $scope.otc_total = Math.round(total_otctotal);
            $scope.total_tax = Math.round(tax);
            $scope.grand_total = Math.round(grandTotal);


            // sendqt.total = total;
            // sendqt.otc_total = otctotal;
            // // sendqt.discount_total = discount_total;
            // sendqt.total_tax = tax;
            // sendqt.grand_total = grandTotal;
            // // console.log('checkoutbtn ', sendqt);

            // $scope.items  = {};
            // pistoreServies.removeItemCart(checkitems);
            // $location.path('/checkout');
            // $scope.finalcart($scope.items);
        }
        $scope.removeProduct = function ($index, e, checkitems) {
            e.preventDefault();
            e.stopPropagation();
            debugger;
            var cartList = checkitems.splice($index, 1);
            pistoreServies.removeItemCart(checkitems);
            $scope.checkoutbtn(checkitems);
            // console.log('checklist ', cartList);
            debugger;
            $scope.finalcart(checkitems);
        }
        $scope.paymethod = "online";

        $scope.finalcart = function (items, msg) {
            if (items.length > 0) {

                debugger;
                var refreshToken = localStorage.getItem('refresh_token');
                var oldtoken = refreshToken;
                debugger;
                var exp = jwtHelper.isTokenExpired(refreshToken);
                // var refreshToken = localStorage.getItem('refresh_token');

                if (exp) {
                    // checktoken();
                    pistoreServies.getToken(refreshToken).then(function (result) {
                        debugger;
                        // console.log('newtk ', result);
                        $scope.newpaymentservice(items, msg);

                    })
                } else {
                    $scope.newpaymentservice(items, msg);
                }
            } else {
                $window.location.href = 'cloudServers';
            }


        }

        $scope.newpaymentservice = function (items, msg) {

            var fcart = {};
            fcart.products = items;
            if (msg == 'promo') {
                fcart.type = "promocheck";
            } else {
                fcart.type = $scope.paymethod;
            }

            fcart.additional = "none";
            fcart.devicename = "mobile";
            fcart.gst_num = $scope.gst_num;
            fcart.grand_total = $scope.grand_total;
            fcart.promocode = $scope.promocode || "NOPROMOCODE";
            if (msg == "pgateway") {
                fcart.grand_total = $scope.api_grand_total;
                // fcart.promocode = $scope.promocode;         
            }
            debugger;
            // console.log('fcart ', JSON.stringify(fcart));
            pistoreServies.paymentServices(fcart).then(function (result) {
                debugger;
                // console.log(result);
                // if(result.message.order_details.api_total == 0){
                //     alert('Invalid Promo Code');
                //     return false;
                // }
                // // console.log(result.status);
                // // console.log(result.message.status_message);
                // if (result.status == "err" && result.message.status_message == "Limit Reached") {
                //     // alert('Your limit reached, Your remaning amount is : '+result.RemainingMonthlyLimit);
                //     alert('You monthly limit is exceeded., Your remaning amount is : ' + result.RemainingMonthlyLimit + '. Please write to us at sales@pidatacenters.com');
                //     window.location.href = "index.php";
                //     return false;
                // }

                if (fcart.type = "promocheck" && result.message.order_details.api_discount_total == 0 && fcart.promocode != "NOPROMOCODE") {
                    alert('Invalid Promo Code');
                    return false;
                }
                $scope.itemList = result.message.order_details.products;
                $scope.api_total = Math.round(result.message.order_details.api_total);
                $scope.api_discount_total = Math.round(result.message.order_details.api_discount_total);
                $scope.api_otc_total = Math.round(result.message.order_details.api_otc_total);
                $scope.api_total_tax = Math.round(result.message.order_details.api_total_tax);
                $scope.api_grand_total = Math.round(result.message.order_details.api_grand_total);
                $scope.appliedPromo = result.message.order_details.promocode;
                if ($scope.api_discount_total > 0) {
                    $scope.discnt = true;
                }
                // $scope.$apply();
                if ($scope.paymethod == "offline") {
                    // alert("We will reach you soon");
                    // alert($location.host);
                     window.location.href = 'https://pricing.pidatacenters.com/priceimport/webservices/public/_payment?p_id=' + result.message.id;
                     //window.location.href = 'http://.73.84/priceimport/webservices/public/_payment?p_id=' + result.message.id;
                    // $window.location.href = 'paymentcnf?pid='+result.message.id;
                } else if (msg == 'pgateway') {
                     window.location.href = 'https://pricing.pidatacenters.com/priceimport/webservices/public/_payment?p_id=' + result.message.id;
                     //window.location.href = 'http://103.210.73.84/priceimport/webservices/public/_payment?p_id=' + result.message.id;
                    // var form = document.getElementById('myform');
                    // form.submit();
                }
            }, function (result) {
                // console.log(result);
                alert("Someting went wrong. Please try again later.");
            })
        }
        $scope.removePromo = function () {
            $window.location.reload();
            // $scope.promocode = 'NOPROMOCODE';
            // $scope.finalcart($scope.items);
        }
        $scope.checkoutbtn($scope.items);
        $scope.finalcart($scope.items);


























    }];

    // var cartDirective = function () {
    //     return {
    //         restrict: 'EA',
    //         controller: "checkoutController",
    //         templateUrl: "views/directives/cart.html"
    //     }
    // }










    app.controller("checkoutController", checkoutController);
    // app.directive("checkoutController", checkoutController);

})()