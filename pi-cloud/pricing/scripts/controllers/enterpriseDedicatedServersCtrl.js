(function () {
    var app = angular.module("PiStore");

    var enterpriseDedicatedServersCtrl = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", function ($scope, $rootScope, pistoreServies, piPricingSliders) {
        // alert("cld");


        $scope.servername = $scope.servertype;
        $scope.seriesname = $scope.sendname;
        var seriesname = $scope.seriesname;
        var ticksid = seriesname+'ds';


        setTimeout(function () {
            piPricingSliders.seriesSlider(seriesname);
            var seriesnameId = "#"+seriesname;
            piPricingSliders.ticks(ticksid);
            // piPricingSliders.ticks("speedometer2");
            // piPricingSliders.ticks("speedometer3");
            
            $(seriesnameId).on('change', function (event) {
                var val = parseInt($(this).roundSlider("option", "value"));
                $scope.dataTransferValues = $scope.databaseDtValues[val-1];
                $scope.ser[seriesname].selectDataTransfer = $scope.dataTransferValues;
                getTotal();
                $scope.$apply();
                // // console.log($scope.dataTransferValues);
                
              });
            // $scope.submitfn();
        }, 500);


        $scope.coresDropdown = [{
                "e3series": [{
                        "name": "4 Cores",
                        "value": "C4",
                        "seriesname": "e3series"
                    },
                    {
                        "name": "2x4 Cores",
                        "value": "C8",
                        "seriesname": "e3series"
                    }
                ],
                "e5series": [{
                        "name": "6 Cores",
                        "value": "C6",
                        "seriesname": "e5series"
                    },
                    {
                        "name": "2x6 Cores",
                        "value": "C12",
                        "seriesname": "e5series"
                    },
                    {
                        "name": "8 Cores",
                        "value": "C8",
                        "seriesname": "e5series"
                    },
                    {
                        "name": "2x8 Cores",
                        "value": "C16",
                        "seriesname": "e5series"
                    }
                ]
            }

        ]
        $scope.ramDrapdown = [{
                "e3series": [{
                        "name": "8 GB",
                        "value": "R8",
                        "seriesname": "e3series"
                    },
                    {
                        "name": "16 GB",
                        "value": "R16",
                        "seriesname": "e3series"
                    }

                ],
                "e5series": [{
                        "name": "16 GB",
                        "value": "R16",
                        "seriesname": "e5series"
                    },
                    {
                        "name": "32 GB",
                        "value": "R32",
                        "seriesname": "e5series"
                    },
                    {
                        "name": "64 GB",
                        "value": "R64",
                        "seriesname": "e5series"
                    }
                ]
            }

        ]
        $scope.diskspaceDrapdown = [{
            "e3series": [{
                "name": "2x1 TB",
                "value": "S2TB"
                }
            ],
            "e5series": [{
                "name": "2x2 TB",
                "value": "S4TB"
                }
            ]
        }

    ]
        if (seriesname == 'e3series') {
            $scope.coresDropdownlist = $scope.coresDropdown[0].e3series;
            $scope.ramDrapdownlist = $scope.ramDrapdown[0].e3series;
            $scope.diskspaceDrapdownlist = $scope.diskspaceDrapdown[0].e3series;
        } else {
            $scope.coresDropdownlist = $scope.coresDropdown[0].e5series;
            $scope.ramDrapdownlist = $scope.ramDrapdown[0].e5series;
            $scope.diskspaceDrapdownlist = $scope.diskspaceDrapdown[0].e5series;
        }

        $scope.osDrapdown = [
            {
                "name": "Linux",
                "value": "L"
            },
            {
                "name": "Windows",
                "value": "W"
            }
            
        ]
        $scope.tenures = [{
                'name': 'Monthly',
                'value': '1_tenure',
                'multiplyWith': 1
            },
            {
                'name': '1 year (Quarterly Advance)',
                'value': '3_tenure',
                'multiplyWith': 3
            },
            {
                'name': '1 year (50% Advance)',
                'value': '6_tenure',
                'multiplyWith': 6
            },
            {
                'name': '1 year (100% Advance)',
                'value': '12_tenure',
                'multiplyWith': 12
            },
            {
                'name': '2 year (100% Advance)',
                'value': '24_tenure',
                'multiplyWith': 24
            },
            {
                'name': '3 year (100% Advance)',
                'value': '36_tenure',
                'multiplyWith': 36
            }
        ];

        


        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        authrequest.sendserver = "enterprise-dedicated-servers";
        pistoreServies.getpriceValues(authrequest).then(function (result) {
            // console.log(result.e3Series);
            // console.log(result.e5Series);
            // debugger;
            var seriesCodes = [];
            seriesCodes['e3series'] = result.e3Series;
            seriesCodes['e5series'] = result.e5Series;
            $scope.databaseIpValues = result['ip'];
            $scope.selectIp = $scope.databaseIpValues;
            $scope.databseTenures = result['tenure'];
            $scope.databaseRackspace = result['rackspace'];
            $scope.databaseDtValues = result['datatransfer'];
            $scope.databaseDiscount = result['discount'];
            $scope.enterpriceValues = seriesCodes[seriesname];
            $scope.plan = $scope.enterpriceValues[0].plan;
            $scope.subplan = $scope.enterpriceValues[0].subplan;
            $scope.maintitle = result.plan;


            $scope.ser[seriesname].selectCores = $scope.coresDropdownlist[0];
            $scope.ser[seriesname].selectRam = $scope.ramDrapdownlist[0];
            $scope.ser[seriesname].selectDiskspace = $scope.diskspaceDrapdownlist[0];
            $scope.ser[seriesname].selectOs = $scope.osDrapdown[0];
            $scope.ser[seriesname].selectIp = $scope.databaseIpValues[0];
            $scope.ser[seriesname].selectTenures = $scope.databseTenures[0];
            $scope.ser[seriesname].selectRackspace = $scope.databaseRackspace[0];
            $scope.ser[seriesname].selectDataTransfer = $scope.databaseDtValues[0];
        
            getTotal();
            
        });

        
        // debugger;
        $scope.ser = [];
        $scope.ser[seriesname] = {};
        
       
        $scope.sendqt = [];
        $scope.sendqt['e3series'] = {};
        $scope.sendqt['e5series'] = {};
        $scope.tenureIndex = 0;
        $scope.changeTenure = function (ser, index) {
            // debugger;
            $scope.tenureIndex = $scope.databseTenures.indexOf(ser.selectTenures);
            var tenureIndex = $scope.tenureIndex;
            shortCode(ser, tenureIndex);            
            getTotal();


        }
        $scope.changeCores = function (ser) {
            $scope.changeRam(ser);
            // console.log(ser);
            getTotal();
        }
        $scope.changeRackspace = function (ser) {
            // console.log(ser);
            getTotal();
        }
        $scope.changeIp = function (ser) {
            // console.log(ser);
            getTotal();
        }
        $scope.changeOs = function (ser) {
            // console.log(ser);
            getTotal();
        }
        $scope.changDiskspace = function (ser) {
            // console.log(ser);
            getTotal();
        }
        $scope.changeRam = function (ser) {
            // debugger;
            if(ser.selectCores.value == "C6"){
                $scope.ser[seriesname].selectRam = $scope.ramDrapdownlist[0];
            }else if(ser.selectCores.value == "C8"){
                $scope.ser[seriesname].selectRam = $scope.ramDrapdownlist[1];
            }else if(ser.selectCores.value == "C12"){
                $scope.ser[seriesname].selectRam = $scope.ramDrapdownlist[1];
            }else if(ser.selectCores.value == "C16"){
                $scope.ser[seriesname].selectRam = $scope.ramDrapdownlist[2];
            }
            // // console.log(ser);
            getTotal();
            // getTotal(data, seriesname);
        }

        var shortCode = function(ser, tenureIndex){
            var code = ser.selectOs.value+ser.selectCores.value+ser.selectRam.value+ser.selectDiskspace.value;
            $scope.shortCode = code;
            getMonthlyCost(code, tenureIndex);
        }

        var getMonthlyCost = function(code, tenureIndex){
            // debugger;
            var scode = $scope.enterpriceValues[0][code];
            // console.log(scode);
            $scope.tenurePrice = scode[tenureIndex+1].tenure_price;
            $scope.otc = scode[tenureIndex+1].otc;

            $scope.factorPrice = (Number($scope.otc) + Number($scope.ser[seriesname].selectIp.price) + Number($scope.ser[seriesname].selectDataTransfer.price)) * Number(scode[tenureIndex+1].factor);
            
            $scope.monthlycost = Number($scope.tenurePrice) + Number($scope.ser[seriesname].selectDataTransfer.price) + Number($scope.ser[seriesname].selectIp.price) + Number($scope.ser[seriesname].selectRackspace.price);
            $scope.monthlycost = $scope.monthlycost;            
        }
        $scope.submitfn = function (ser) {
           var getqt = getTotal();

           pistoreServies.addcart(getqt);
           $scope.$emit('callCart');
        }

        $scope.$on('enterprisecarttenure', function(e, msg){
            // debugger;
            var index = msg.message.indexNumber;
            var tn = msg.message.tn;
            // tn = tn.shift();
            // console.log('enterprisecarttenure ', msg);
            
            $scope.cartItems = pistoreServies.cartList();
            $scope.list = $scope.cartItems[index];
            var code = $scope.list.shortCode;

            var authrequest = {};
            authrequest.api_key = "PI_RHP";
            authrequest.sendserver = 'enterprise-dedicated-servers';
  
            pistoreServies.getpriceValues(authrequest).then(function(result){  
                var seriesCodes = [];
                seriesCodes['e3series'] = result.e3Series;
                seriesCodes['e5series'] = result.e5Series;        
              $scope.databseTenures = result['tenure'];
              $scope.databaseDtValues = result['datatransfer'];
              $scope.enterpriceValues = seriesCodes[seriesname];


             
          })
            var tenureIndex =msg.message.tenureIndex;


            getMonthlyCost(code, tenureIndex);

            var updateqt = {};
            updateqt.status = 'update';
            updateqt.index = index;
            updateqt.tenure = tn.name;
            updateqt.months = tn.months;
            updateqt.notes = tn.notes;
            updateqt.monthlycost = $scope.monthlycost;
            updateqt.otc = $scope.otc;
            updateqt.plan_price = Number($scope.monthlycost)*Number(tn.months);
  
            // console.log('updateqt ', updateqt);
            var items = pistoreServies.addcart(updateqt);
        });

        var getTotal = function () {
            // alert('gt');
            // debugger;
            shortCode($scope.ser[seriesname], $scope.tenureIndex);

            $scope.datatransferPrice = $scope.ser[seriesname].selectDataTransfer.price;
            var sendqt = {};
            sendqt.cpu = $scope.ser[seriesname].selectCores.name;
            sendqt.ram = $scope.ser[seriesname].selectRam.name;
            sendqt.diskspace = $scope.ser[seriesname].selectDiskspace.name;
            // sendqt.diskspacePrice = $scope.ser[seriesname].selectDiskspace.price;
            sendqt.os = $scope.ser[seriesname].selectOs.name;
            sendqt.ip = $scope.ser[seriesname].selectIp.ip;
            sendqt.ipPrice = $scope.ser[seriesname].selectIp.price;
            sendqt.rackspace = $scope.ser[seriesname].selectRackspace.name;
            sendqt.rackspacePrice = $scope.ser[seriesname].selectRackspace.price;
            sendqt.name = $scope.ser[seriesname].selectTenures.name;
            sendqt.tenure = $scope.ser[seriesname].selectTenures.months;
            sendqt.notes = $scope.ser[seriesname].selectTenures.notes;
            sendqt.datatransfer = $scope.ser[seriesname].selectDataTransfer.datatransfer;
            sendqt.datatransferPrice = $scope.ser[seriesname].selectDataTransfer.price;
            sendqt.shortCode = $scope.shortCode;
            sendqt.enterprise = $scope.shortCode;
            sendqt.plan = $scope.plan;
            sendqt.subplan = $scope.subplan;
            sendqt.nomonth = "nomonth";
            
            // getMonthlyCost();
            
            sendqt.monthlycost = $scope.monthlycost;
            sendqt.seriesdiscount = $scope.databaseDiscount;
            sendqt.seriesplans = $scope.enterpriceValues[0][$scope.shortCode];
            sendqt.otc = $scope.factorPrice;
            sendqt.promoDiscount = 0;
            sendqt.quantity = 1; 
            sendqt.plan_price = Number($scope.monthlycost) * Number($scope.ser[seriesname].selectTenures.months);
            sendqt.amount = Number($scope.monthlycost) * Number($scope.ser[seriesname].selectTenures.months);
            sendqt.servername = $scope.servername;
            // console.log('sendqt is ', sendqt);
            // $scope.$apply();
            return sendqt;
        }
        // getTotal();
        
        // $scope.$on('cloudserverscarttenures', function (e, msg) {
        //     // console.log('from cld ', msg);
        //     var index = msg.message.indexNumber;
        //     var tn = msg.message.tn;
        //     alert(index);
        //     $scope.$broadcast('cloudserverscarttenure', {message:msg});
        // });




















    }]

    var enterpriseDedicatedServers = function () {
        return {
            restrict: 'EA',
            controller: "enterpriseDedicatedServersCtrl",
            // template: '<ul><li >{{dataSource}}</li></ul> ',          
            scope: {
                servertype: '@',
                sendname: '@',
                // sendBtn: '&',
                dataSource: '=',
                maintitle: '='
            },
            replace: false,
            // transclude: true,
            templateUrl: "views/directives/enterpriseDedicatedServers.html"
        }
    }


    app.controller("enterpriseDedicatedServersCtrl", enterpriseDedicatedServersCtrl);
    app.directive("enterpriseDedicatedServers", enterpriseDedicatedServers);
})()