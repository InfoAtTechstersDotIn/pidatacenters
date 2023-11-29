(function () {
    var app = angular.module("PiStore");

    var serverCoLocationCtrl = ["$scope", "$rootScope", "$window", "pistoreServies", "piPricingSliders", function ($scope, $rootScope, $window, pistoreServies, piPricingSliders) {
        // alert("cld");
        $rootScope.loading = false;
        piPricingSliders.sclpowerSlider();
        piPricingSliders.scrackspaceSlider();
        piPricingSliders.datatransferSlider();
        piPricingSliders.ticks("speedometer");
        piPricingSliders.ticks("speedometer2");
        piPricingSliders.ticks("speedometer3");

        $scope.qtUser = {
            // "first_name": "ram",
            // "last_name": "ram",
            // "company": "ram",
            // "email": "sriram@pidatacenters.com",
            // "mobile": "9463031377",
            // "country_code": "+91"
        };

        $scope.iplist = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
         $scope.datatransferlist = ['0','50','100','200','300','400','500','600','700','800','900','1000', '2000', '3000','4000', '5000','7000', '10000'];


        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        // authrequest.auth_token = "d4326c59ed44a8b54dc93e02096c6fec3b074bb5dae20d5fc8924b13331b7304";
        // authrequest.customer_id = "000141";
        authrequest.sendserver = "server-colocation";
        // pistoreServies.getpriceValues(authrequest).then(function (result) {
        //     console.log('result is', result);
        //     $scope.databaseRackSpaceValues = result['rackspace'];
        //     $scope.databaseSclPowerValues = result['power'];
        //     $scope.databaseDtValues = result['datatransfer'];
        //     $scope.databaseIpValues = result['ip'];
        //     $scope.tenures = result['tenure'];
        //     $scope.databaseDiscount = result['discount'];

        //     $scope.rackSpaceValues = $scope.databaseRackSpaceValues[0];
        //     $scope.sclpowerValues = $scope.databaseSclPowerValues[0];
        //     $scope.datatransferValues = $scope.databaseDtValues[0];
        //      $scope.selectTenure = $scope.tenures[0];
        //     $scope.selectIp = $scope.databaseIpValues[0];

        //     $scope.plan = result.plan;
        //     $scope.subplan = result.subplan;
        //    $scope.$apply();
        //     updateqt();
        // });

        $scope.datatransferValues = $scope.datatransferlist[1];
        $scope.sclpowerValues = "200 Watts";
        $scope.rackSpaceValues = "2 Units";

        $('#scrackspace').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            // $scope.rackSpaceValues = $scope.databaseRackSpaceValues[val - 1];

            if (val == 1) {
                $scope.rackSpaceValues = "2 Units";
            } else if (val == 2) {
                $scope.rackSpaceValues = "3 Units";
            } else if (val == 3) {
                $scope.rackSpaceValues = "4 Units";
            }
            else if (val == 4) {
                $scope.rackSpaceValues = "6 Units";
            }

            updateqt();
            $scope.$apply();
        });

        $('#sclpower').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            // $scope.sclpowerValues = $scope.databaseSclPowerValues[val - 1];
            $scope.sclpowerValues = val + ' Watts';
            if (val == 1) {
                $scope.sclpowerValues = "200 Watts";
            }else if (val == 2) {
                $scope.sclpowerValues = "400 Watts";
            } else if (val == 3) {
                $scope.sclpowerValues = "600 Watts";
            }
            else if (val == 4) {
                $scope.sclpowerValues = "800 Watts";
            }else if (val == 5) {
                $scope.sclpowerValues = "1000 Watts";
            }
            updateqt();
            $scope.$apply();
        });
        $('#datatransfer').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            $scope.datatransferValues = $scope.datatransferlist[val - 1];
            updateqt();
            $scope.$apply();
        });

        var updateqt = function () {
            // debugger;

            $scope.rackspace = $scope.rackSpaceValues;
            $scope.power = $scope.sclpowerValues;
            $scope.datatransfername = $scope.datatransferValues + "GB";
        }
        updateqt();

        $scope.getqt = function (checkitems) {
            // debugger;
            // $scope.checkoutbtn(checkitems);
            var authDetails = localStorage.getItem('userdetails');
            if (!authDetails) {
                $scope.qtRegister = true;
            } else {
                authDetails = JSON.parse(authDetails);
                // lol = authDetails. mobile_code
                var tempJson = {};
                tempJson = authDetails.user[0].profile;
                tempJson.email = authDetails.user[0].email
                // tempJson.country_code = authDetails.user[0].profile;
                $scope.submitqt(tempJson);
            }
            // console.log('save ', checkitems);
        }

        $scope.submitqt = function (qtUser) {

            $rootScope.loading = true;

            // debugger;
            var saveOrderDetails = {};
            saveOrderDetails = qtUser;
            var gtqtitems = {};
            gtqtitems.plan = 'server-colocation';

            gtqtitems.ip = $scope.ipSelect || 0;
            gtqtitems.rackspace = $scope.rackSpaceValues;
            gtqtitems.power = $scope.sclpowerValues;
            gtqtitems.datatransfer = $scope.datatransferValues;

            saveOrderDetails.product = gtqtitems;

            saveOrderDetails.total = $scope.totalplanprice;
            saveOrderDetails.type = "save";
            saveOrderDetails.promocode = "NOPROMOCODE";
            // console.log('saveOrderDetails ', saveOrderDetails);
            var lol = JSON.stringify(saveOrderDetails);
            pistoreServies.getquote(lol).then(function (result) {
                // console.log('getquote ', JSON.stringify(result));
                // debugger;
                $scope.qtRegister = true;
                $scope.authSaveOrder = true;
                $scope.returnMessage = true;
                if (result.status == 200) {
                    $rootScope.loading = false;
                    // alert(result.testing);
                    // $scope.qtRegister = true;
                    // $scope.authSaveOrder = true;
                    // $scope.returnMessage = true;
                    $scope.savedmsg = "Your request has been sent successfully.";
                    // $window.location.href = 'checkout?pid=' + result.testing;
                }
            }, function () {
                $scope.savedmsg = "Something went wrong.";
            });
            // alert('Submitted your quote successfuly.');
            // $scope.qtRegister = false;
        }


        $scope.okBtnClickEvent = function () {
            $scope.qtRegister = false;
            $scope.savedmsg = '';
            $scope.returnMessage = false;
            $window.location.reload();
        }


        // $scope.changeTenure = function (ser) {
        //     // // debugger;
        //     // $scope.tenureIndex = $scope.tenures.indexOf(ser);
        //     // var tenureIndex = $scope.tenureIndex;

        //     // shortCode(ser, tenureIndex);            
        //     getTotal();


        // }
        // $scope.changeIp = function () {

        //     getTotal();


        // }

        // $scope.getDiscount = function (tenure, beforedeoscount) {
        //     // $scope.monthlycost = beforedeoscount;
        //     var discountPercentage;
        //     // debugger;
        //     if (tenure > 1) {

        //         for (i = 0; i <= $scope.databaseDiscount.length - 1; i++) {
        //             if ($scope.databaseDiscount[i].tenure_in_months == tenure) {
        //                 discountPercentage = $scope.databaseDiscount[i].discount;
        //                 break;
        //             }
        //         }
        //         $scope.discountCalc(beforedeoscount, discountPercentage);

        //     } else {
        //         $scope.afterDiscountDt = beforedeoscount;
        //     }
        // }
        // $scope.discountCalc = function (beforedeoscount, discountPercentage) {
        //     $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
        //     $scope.afterDiscountDt = beforedeoscount - $scope.discountAmount;
        //     $scope.afterDiscountDt = $scope.afterDiscountDt;
        // }

        // var getTotal = function () {
        //     // debugger;
        //     $scope.rackspace = $scope.rackSpaceValues.name;
        //     $scope.power = $scope.sclpowerValues.name;
        //     $scope.datatransfername = $scope.datatransferValues.datatransfer;

        //     // $scope.getDiscount($scope.selectTenure.months, $scope.datatransferValues.price);
        //     // $scope.monthlycost = Number($scope.rackSpaceValues.price) + Number($scope.sclpowerValues.price) + Number($scope.selectIp.price) + Number($scope.afterDiscountDt);
        //     $scope.monthlycost = Number($scope.rackSpaceValues.price) + Number($scope.sclpowerValues.price) + Number($scope.selectIp.price) + Number($scope.datatransferValues.price);
        //     // $scope.monthlycost
        // }
        // $scope.addtocart = function () {
        //     var sndqt = getTotal();
        //     // console.log('addcart ', sndqt);
        //     // var items = pistoreServies.addcart(sndqt);
        //     // $rootScope.cartcount = items.length;
        //     //  console.log(items.length);
        //     var sendqt = {};
        //     sendqt.ip = $scope.selectIp.ip;



        //     sendqt.rackspace = $scope.rackSpaceValues.name;
        //     sendqt.power = $scope.sclpowerValues.name;
        //     sendqt.datatransfer = $scope.datatransferValues.datatransfer;


        //     sendqt.name = $scope.selectTenure.name;
        //     sendqt.tenure = $scope.selectTenure.months;
        //     sendqt.notes = $scope.selectTenure.notes;

        //     sendqt.monthlycost = $scope.monthlycost;
        //     sendqt.plan_price = $scope.monthlycost * $scope.selectTenure.months;
        //     sendqt.amount = $scope.monthlycost * $scope.selectTenure.months;
        //     sendqt.quantity = 1;

        //     sendqt.plan = $scope.plan;
        //     sendqt.subplan = $scope.subplan;
        //     sendqt.servername = "server-colocation";

        //     pistoreServies.addcart(sendqt);
        //     $scope.$emit('callCart');
        // }
        // getTotal();








    }]

    app.controller("serverCoLocationCtrl", serverCoLocationCtrl);
})()