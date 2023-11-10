(function(){
    var app = angular.module("PiStore");

    var cloudStorageCtrl = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", function($scope, $rootScope, pistoreServies, piPricingSliders){
        // alert("cld");
        $scope.servername = $scope.servertype;
        var storagename  = $scope.storagename;

        setTimeout(function(){
            piPricingSliders.ecsSlider();
            piPricingSliders.ddsSlider();
            piPricingSliders.ddsSsdSlider();
            var seriesnameId = "#"+storagename;
            
            $(seriesnameId).on('change', function (event) {
                var val = parseInt($(this).roundSlider("option", "value"));
                $scope.discspaceValues = $scope.databaseDsValues[val-1];
                $scope.val = Number(val);                
                getTotal();
                $scope.$apply();
              });
              $("#ddsSsd").on('change', function (event) {
                var val = parseInt($(this).roundSlider("option", "value"));
                $scope.discspaceValues = $scope.databaseDsValues[val-1];
                $scope.val = Number(val);                
                getTotal();
                $scope.$apply();
              });
        }, 500)
        


        $scope.drivesList = [
            {
                "name": "Cloud Storage",
                "value": "Cloud_Storage",
                "storage":"ecs"
            },
            {
                "name": "EMC Scale IO",
                "value": "EMC_Scale_IO",
                "storage":"ecs"
            },
            {
                "name": "SATA 7.2K",
                "value": "SATA_7.2K",
                "storage":"dds"
            },
            {
                "name": "SAS 10K",
                "value": "SAS_10k",
                "storage":"dds"
            },
            {
                "name": "SSD",
                "value": "SSD",
                "storage":"dds"
            }
            
        ]
        
        $scope.shouldShow = function(drivesList){
            return drivesList.storage == storagename ;
        }

        $scope.ser = [];
        $scope.ser[storagename] = {};
        $scope.ser[storagename].selectDrive = $scope.drivesList[0];
        if(storagename == "dds")$scope.ser[storagename].selectDrive = $scope.drivesList[2];  
        
        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        // authrequest.sendserver = "enterprise-cloud-storage";
        authrequest.sendserver = "cloud-storage";
        pistoreServies.getpriceValues(authrequest).then(function (result) {
            var seriesCodes = [];
            $scope.databaseDsValues = result.diskspace;
            $scope.databaseDtValues = result.datatransfer;
            $scope.databaseDiscount = result.discount;
            $scope.tenures = result.tenure;
            // $scope.plan = 'Coud Storage';
            $scope.plan = result.plan;
            $scope.maintitle = result.plan;
            
            // console.log('length is ', $scope.databaseDsValues);
            // $scope.ser[storagename].selectDiskspace = '';tenure
            $scope.ser[storagename].selectTenure = $scope.tenures[0];
            $scope.ser[storagename].selectDt = $scope.databaseDtValues[0];
            if(storagename == "ecs"){
            $scope.subplan = result.subplan1;            
            }else{
            $scope.subplan = result.subplan2;            
            }
            $scope.val = 1; 
            $scope.tenureIndex = 0;          
            $scope.changeDrive($scope.ser[storagename].selectDrive);
            
        });
              


        $scope.changeDrive = function(driveDetails){
            $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
            getTotal();
        }
        $scope.changeDt = function(){
            getTotal();
        }
        $scope.changeTenure = function (ser) {
            debugger;
            $scope.tenureIndex = $scope.tenures.indexOf(ser);
            var tenureIndex = $scope.tenureIndex;

            // shortCode(ser, tenureIndex);            
            getTotal();


        }
        $scope.getDiscount = function (tenure, beforedeoscount) {
            // $scope.monthlycost = beforedeoscount;
            var discountPercentage;
            debugger;
            if (tenure > 1) {

                for (i = 0; i <= $scope.databaseDiscount.length - 1; i++) {
                    if ($scope.databaseDiscount[i].tenure_in_months == tenure) {
                        discountPercentage = $scope.databaseDiscount[i].discount;
                        break;
                    }
                }
                $scope.discountCalc(beforedeoscount, discountPercentage);

            } else {
                $scope.afterDiscountDt = Math.round(beforedeoscount);
            }
        }
        $scope.discountCalc = function (beforedeoscount, discountPercentage) {
            $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
            $scope.afterDiscountDt = beforedeoscount - $scope.discountAmount;
            $scope.afterDiscountDt = Math.round($scope.afterDiscountDt);
            
        }

        var getMonthlyCost = function(c){
            debugger;
            $scope.getDiscount(c, $scope.datatransferPrice);

            $scope.dismonthlycost = Number($scope.diskspacePrice) + Number($scope.afterDiscountDt);
            $scope.dismonthlycost = Math.round($scope.dismonthlycost);

        }
        var getTotal = function () {
            // alert('gt');
            debugger;
            // shortCode($scope.ser[seriesname], $scope.tenureIndex);

            var sendqt = {};
            sendqt.drive = $scope.ser[storagename].selectDrive.name;
            sendqt.driveValue = $scope.ser[storagename].selectDrive.value;
            sendqt.diskspace = $scope.ser[storagename].selectDiskspace[$scope.val-1].name;
            sendqt.tenure = $scope.ser[storagename].selectTenure.name;
            sendqt.tenurearr = [$scope.ser[storagename].selectTenure];
            sendqt.months = $scope.ser[storagename].selectTenure.months;
            sendqt.notes = $scope.ser[storagename].selectTenure.notes;
            var a= $scope.val-1 || 0;
            var b = $scope.tenureIndex || 0;

            $scope.diskspacePrice = $scope.ser[storagename].selectDiskspace[a].values[b].tenure_price;
            $scope.datatransferPrice = $scope.ser[storagename].selectDt.price;
            $scope.datatransfer = $scope.ser[storagename].selectDt.datatransfer;

            sendqt.datatransfer =  $scope.datatransfer;
            

            getMonthlyCost($scope.ser[storagename].selectTenure.months);
            
            // $scope.displayMonthlycost = $scope.monthlycost;
            sendqt.monthlycost = $scope.dismonthlycost;
            sendqt.plan_price = Number($scope.dismonthlycost) * Number($scope.ser[storagename].selectTenure.months);
            sendqt.servername = storagename;
            sendqt.promoDiscount = 0;
            sendqt.quantity = 1; 

            sendqt.plan = $scope.plan;
            sendqt.subplan = $scope.subplan;
            sendqt.storagediskspace = $scope.ser[storagename].selectDiskspace[a];
            sendqt.storagedatatransfer = $scope.ser[storagename].selectDt;
            sendqt.storagediscount = $scope.databaseDiscount;
            console.log('sendqt is ', sendqt);
            // $scope.$apply();
            return sendqt;
        }


        $scope.submitfn = function (ser) {
            var getqt = getTotal();
 
            pistoreServies.addcart(getqt);
            // $scope.ser = [];
            // $scope.ser[storagename] = {};
            $scope.$emit('callCart');
         }


         $scope.$on('cloudstoragecarttenure', function(e, msg){
            debugger;
            var index = msg.message.indexNumber;
            var tn = msg.message.tn;
            var months = msg.message.tn.months;
            // var storagename = msg.message.servername;
            // $scope.ser[storagename].selectTenure = tn;
            // tn = tn.shift();
            console.log('cloudstoragecarttenure ', msg);
            debugger;
            $scope.cartItems = pistoreServies.cartList();
            $scope.list = $scope.cartItems[index];
            $scope.diskSpace = $scope.list.diskspace;
            $scope.datatransfer = $scope.list.datatransfer;
            var subplan = $scope.list.driveValue;
            var tenureIndex =msg.message.tenureIndex;
           

            
            

            var authrequest = {};
            authrequest.api_key = "PI_RHP";
            authrequest.sendserver = 'cloud-storage';
  
            pistoreServies.getpriceValues(authrequest).then(function(result){  
                $scope.databaseDsValues = result.diskspace;
                $scope.originalTenure = result.tenurearr
                $scope.databaseDtValues = result.datatransfer;
                
                // $scope.tenures = result.tenure;
                if(subplan){
                    for(i=0;i<=$scope.databaseDsValues[subplan].length-1;i++){
                        debugger;
                        if($scope.databaseDsValues[subplan][i].name == $scope.diskSpace){
                            $scope.val = i;
                            $scope.diskspacePrice = $scope.databaseDsValues[subplan][i-1].values[tenureIndex].tenure_price
                            break;
                        }
                    }
                }

                for(i=0;i<=$scope.databaseDtValues.length-1;i++){
                    debugger;
                    if($scope.databaseDtValues[i].datatransfer == $scope.datatransfer){
                        $scope.datatransferPrice = $scope.databaseDtValues[i].price;
                        
                        break;
                    }
                }
                

             
          })
            

            // var a= $scope.val-1;
            // var b = tenureIndex;
debugger;
            // $scope.diskspacePrice = $scope.ser[storagename].selectDiskspace[a].values[b].tenure_price;
            // $scope.diskspacePrice = $scope.databaseDsValues[driveDetails.value]
            // $scope.datatransferPrice = $scope.databaseDtValues.selectDt.price;

            getMonthlyCost(months);

            var updateqt = {};
            updateqt.status = 'update';
            updateqt.index = index;
            updateqt.tenure = tn.name;
            updateqt.months = tn.months;
            updateqt.notes = tn.notes;
            updateqt.monthlycost = $scope.dismonthlycost;
            updateqt.plan_price = Number($scope.dismonthlycost)*Number(tn.months);
            // $scope.ser[storagename].selectTenure = $scope.originalTenure;
            // sendqt.tenurearr = [$scope.ser[storagename].selectTenure];
            console.log('updateqt ', updateqt);
           pistoreServies.addcart(updateqt);
           $scope.$emit('callCart');

        });









    }]


    var cloudStorage = function () {
        return {
            restrict: 'EA',
            controller: "cloudStorageCtrl",
            // template: '<ul><li >{{dataSource}}</li></ul> ',          
            scope: {
                servertype: '@',
                storagename: '@',
                maintitle: '='
                // sendBtn: '&',
                // dataSource: '='
            },
            // replace: true,
            // transclude: true,
            templateUrl: "views/directives/cloudStorageDirective.html"
        }
    }


    app.directive("cloudStorage", cloudStorage);

    app.controller("cloudStorageCtrl", cloudStorageCtrl);
})()