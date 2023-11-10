(function(){
    var app = angular.module("PiStore");

    var rackCoLocationCtrl = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", function($scope, $rootScope, pistoreServies, piPricingSliders){
        // alert("cld");

        piPricingSliders.rackSpaceSlider();
        piPricingSliders.rclpowerSlider();        
        piPricingSliders.datatransferSlider();
        piPricingSliders.ticks("speedometer");
        piPricingSliders.ticks("speedometer2");
        piPricingSliders.ticks("speedometer3");

        // $scope.qtUser = {
        //     "first_name": "ram",
        //     "last_name": "ram",
        //     "company": "ram",
        //     "email": "sriram@pidatacenters.com",
        //     "mobile": "9463031377",
        //     "country_code": "+91"
        // };

        $scope.qtUser = {
            "first_name": "",
            "last_name": "",
            "company": "",
            "email": "",
            "mobile": "",
            "country_code": "+91"
        };

        $scope.iplist = ['0','1','2','3','4','5','6','7','8','9','10'];
        $scope.datatransferlist = ['0','50','100','200','300','400','500','600','700','800','900','1000', '2000', '3000','4000', '5000','7000', '10000'];
        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        // authrequest.auth_token = "d4326c59ed44a8b54dc93e02096c6fec3b074bb5dae20d5fc8924b13331b7304";
        // authrequest.customer_id = "000141";
        authrequest.sendserver = "server-colocation";
        // pistoreServies.getquote(authrequest).then(function (result) {
            // // console.log('result is', result);
            // $scope.databaseRackSpaceValues = result['rackspace'];
            // $scope.databaseSclPowerValues = result['power'];
            // $scope.databaseDtValues = result['datatransfer'];
            // $scope.databaseIpValues = result['ip'];
            // $scope.tenures = result['tenure'];
            // $scope.databaseDiscount = result['discount'];

            // $scope.rackSpaceValues = $scope.databaseRackSpaceValues[0];
            // $scope.sclpowerValues = $scope.databaseSclPowerValues[0];
            // $scope.datatransferValues = $scope.databaseDtValues[0];
            // $scope.selectTenure = $scope.tenures[0];
            // $scope.selectIp = $scope.databaseIpValues[0];

            // $scope.plan = result.plan;
            // $scope.subplan = result.subplan;
            // // $scope.$apply();
            // getTotal();
        // });
        $scope.datatransferValues = $scope.datatransferlist[1];
        $scope.rclpowerValues = "1 KVA";
        $scope.rackSpaceValues = "10 Units";

        $('#rackSpace').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            if(val == 1){
                $scope.rackSpaceValues = "10 Units";
            }else if(val == 2){
                $scope.rackSpaceValues = "21 Units";
            }else if(val == 3){
                $scope.rackSpaceValues = "42 Units";
            }
            
            updateqt();
            $scope.$apply();
        });

        $('#rclpower').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
             $scope.rclpowerValues = val + ' KVA';
            if(val == 5){
                $scope.rclpowerValues = "6 KVA";
            }
            updateqt();
            $scope.$apply();
        });
        $('#datatransfer').on('change', function (event) {
            var val = parseInt($(this).roundSlider("option", "value"));
            // $scope.datatransferValues = $scope.databaseDtValues[val - 1];
            $scope.datatransferValues = $scope.datatransferlist[val-1];
            // getTotal();
            updateqt();
            $scope.$apply();
        });

        var updateqt = function(){
            debugger;
            $scope.rackspace = $scope.rackSpaceValues;
            $scope.power = $scope.rclpowerValues;
            $scope.datatransfername = $scope.datatransferValues + "GB";
        }
        updateqt();
        

        // $scope.getqt = function(){
            
        $scope.getqt = function (checkitems) {
            debugger;
            // $scope.checkoutbtn(checkitems);
            var authDetails = localStorage.getItem('userdetails');
            if (!authDetails) {
                $scope.qtRegister = true;
            }else{
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
            debugger;
            var saveOrderDetails = {};
            saveOrderDetails = qtUser;
            var gtqtitems = {};
            gtqtitems.plan = 'Rack Co-Location';
            gtqtitems.rackspace = $scope.rackSpaceValues;
            gtqtitems.power = $scope.rclpowerValues;
            gtqtitems.datatransfer = $scope.datatransferValues;
            gtqtitems.ip = $scope.ipSelect || 0;

            saveOrderDetails.product = gtqtitems;

            saveOrderDetails.total = $scope.totalplanprice;
            saveOrderDetails.type = "save";
            saveOrderDetails.promocode = "NOPROMOCODE";
            // console.log('saveOrderDetails ', saveOrderDetails);
            var lol = JSON.stringify(saveOrderDetails);
            pistoreServies.getquote(lol).then(function (result) {
                // console.log('getquote ', result);
                debugger;
                $scope.qtRegister = true;
                $scope.authSaveOrder = true;
                $scope.returnMessage = true;
                if (result.status == 200) {
                    // alert(result.testing);
                    // $scope.qtRegister = true;
                    // $scope.authSaveOrder = true;
                    // $scope.returnMessage = true;
                    $scope.savedmsg = "Your request has been sent successfully.";
                    // $window.location.href = 'checkout?pid=' + result.testing;
                }
            }, function(){
                $scope.savedmsg = "Something went wrong.";
            });
            // alert('Submitted your quote successfuly.');
            // $scope.qtRegister = false;
        }
        // }
    }]

    app.controller("rackCoLocationCtrl", rackCoLocationCtrl);
})()