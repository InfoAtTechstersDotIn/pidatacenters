(function () {
    var app = angular.module("PiStore");

    var serverCoLocationCtrl = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", function ($scope, $rootScope, pistoreServies, piPricingSliders) {
        // alert("cld");

        piPricingSliders.sclpowerSlider();
        piPricingSliders.scrackspaceSlider();
        piPricingSliders.datatransferSlider();
        piPricingSliders.ticks("speedometer");
        piPricingSliders.ticks("speedometer2");
        piPricingSliders.ticks("speedometer3");


        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        // authrequest.auth_token = "d4326c59ed44a8b54dc93e02096c6fec3b074bb5dae20d5fc8924b13331b7304";
        // authrequest.customer_id = "000141";
        authrequest.sendserver = "server-colocation";
        pistoreServies.getpriceValues(authrequest).then(function (result) {
            console.log('result is', result);
            $scope.databaseRackSpaceValues = result['rackspace'];
            $scope.databaseSclPowerValues = result['power'];
            $scope.databaseDtValues = result['datatransfer'];
            $scope.databaseIpValues = result['ip'];
            $scope.tenures = result['tenure'];
            $scope.databaseDiscount = result['discount'];

            $scope.rackSpaceValues = $scope.databaseRackSpaceValues[0];
            $scope.sclpowerValues = $scope.databaseSclPowerValues[0];
            $scope.datatransferValues = $scope.databaseDtValues[0];
            $scope.selectTenure = $scope.tenures[0];
            $scope.selectIp = $scope.databaseIpValues[0];

            $scope.plan = result.plan;
            $scope.subplan = result.subplan;
            // $scope.$apply();
            getTotal();
        });

        $('#scrackspace').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            $scope.rackSpaceValues = $scope.databaseRackSpaceValues[val - 1];
            getTotal();
            $scope.$apply();
        });

        $('#sclpower').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            $scope.sclpowerValues = $scope.databaseSclPowerValues[val - 1];
            getTotal();
            $scope.$apply();
        });
        $('#datatransfer').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            $scope.datatransferValues = $scope.databaseDtValues[val - 1];
            getTotal();
            $scope.$apply();
        });

        $scope.changeTenure = function (ser) {
            // // debugger;
            // $scope.tenureIndex = $scope.tenures.indexOf(ser);
            // var tenureIndex = $scope.tenureIndex;

            // shortCode(ser, tenureIndex);            
            getTotal();


        }
        $scope.changeIp = function () {
              
            getTotal();


        }

        $scope.getDiscount = function (tenure, beforedeoscount) {
            // $scope.monthlycost = beforedeoscount;
            var discountPercentage;
            // debugger;
            if (tenure > 1) {

                for (i = 0; i <= $scope.databaseDiscount.length - 1; i++) {
                    if ($scope.databaseDiscount[i].tenure_in_months == tenure) {
                        discountPercentage = $scope.databaseDiscount[i].discount;
                        break;
                    }
                }
                $scope.discountCalc(beforedeoscount, discountPercentage);

            } else {
                $scope.afterDiscountDt = beforedeoscount;
            }
        }
        $scope.discountCalc = function (beforedeoscount, discountPercentage) {
            $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
            $scope.afterDiscountDt = beforedeoscount - $scope.discountAmount;
            $scope.afterDiscountDt = $scope.afterDiscountDt;
        }

        var getTotal = function () {
            // debugger;
            $scope.rackspace = $scope.rackSpaceValues.name;
            $scope.power = $scope.sclpowerValues.name;
            $scope.datatransfername = $scope.datatransferValues.datatransfer;

            // $scope.getDiscount($scope.selectTenure.months, $scope.datatransferValues.price);
            // $scope.monthlycost = Number($scope.rackSpaceValues.price) + Number($scope.sclpowerValues.price) + Number($scope.selectIp.price) + Number($scope.afterDiscountDt);
            $scope.monthlycost = Number($scope.rackSpaceValues.price) + Number($scope.sclpowerValues.price) + Number($scope.selectIp.price) + Number($scope.datatransferValues.price);
            // $scope.monthlycost
        }
        $scope.addtocart = function () {
            var sndqt = getTotal();
            // console.log('addcart ', sndqt);
            // var items = pistoreServies.addcart(sndqt);
            // $rootScope.cartcount = items.length;
            //  console.log(items.length);
            var sendqt = {};
            sendqt.ip = $scope.selectIp.ip;

           

            sendqt.rackspace = $scope.rackSpaceValues.name;
            sendqt.power = $scope.sclpowerValues.name;
            sendqt.datatransfer = $scope.datatransferValues.datatransfer;


            sendqt.name = $scope.selectTenure.name;
            sendqt.tenure = $scope.selectTenure.months;
            sendqt.notes = $scope.selectTenure.notes;

            sendqt.monthlycost = $scope.monthlycost;
            sendqt.plan_price = $scope.monthlycost * $scope.selectTenure.months;
            sendqt.amount = $scope.monthlycost * $scope.selectTenure.months;
            sendqt.quantity = 1;

            sendqt.plan = $scope.plan;
            sendqt.subplan = $scope.subplan;
            sendqt.servername = "server-colocation";
            
            pistoreServies.addcart(sendqt);
            $scope.$emit('callCart');
        }
        // getTotal();








    }]

    app.controller("serverCoLocationCtrl", serverCoLocationCtrl);
})()