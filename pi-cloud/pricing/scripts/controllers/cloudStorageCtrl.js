(function () {
    var app = angular.module("PiStore");

    var cloudStorageCtrl = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", function ($scope, $rootScope, pistoreServies, piPricingSliders) {
        // alert("cld");
        $scope.servername = $scope.servertype;
        var storagename = $scope.storagename;
        console.log("storage name is::::" + storagename)
        var storagenamessd = storagename + 'ddsticks';
        var storagenameecs = storagename + 'ticks';
        conditionalDisabling=false;

        $scope.username = "";
        $scope.useremail = "";
        $scope.userphone = "";

        setTimeout(function () {
            piPricingSliders.ecsSlider();
            piPricingSliders.ddsSlider();
            piPricingSliders.ddsSsdSlider();
            piPricingSliders.datatransferSlider();
            piPricingSliders.ticks("speedometer");
            piPricingSliders.ticks(storagenameecs);
            piPricingSliders.ticks(storagenamessd);
            // piPricingSliders.ticks("speedometer3");
            var seriesnameId = "#" + storagename;

            $(seriesnameId).on('change', function (event) {
                var val = parseInt($(this).roundSlider("option", "value"));
                $scope.discspaceValues = $scope.databaseDsValues[val - 1];
                $scope.val = Number(val);
                getTotal();
                $scope.$apply();
            });
            $("#ddsdds").on('change', function (event) {
                if (storagename == "dds") {
                    var val = parseInt($(this).roundSlider("option", "value"));
                    $scope.discspaceValues = $scope.databaseDsValues[val - 1];
                    $scope.val = Number(val);
                    getTotal();
                    $scope.$apply();
                }

            });
            $("#ddsSsd").on('change', function (event) {
                if (storagename == "dds") {
                    var val = parseInt($(this).roundSlider("option", "value"));
                    $scope.discspaceValues = $scope.databaseDsValues[val - 1];
                    $scope.val = Number(val);
                    getTotal();
                    $scope.$apply();
                }

            });
            $('#datatransfer').on('change', function (event) {
                var val = parseInt($(this).roundSlider("option", "value"));
                $scope.dataTransferValues = $scope.databaseDtValues[val - 1];
                console.log("result aaaaaa ", JSON.stringify($scope.dataTransferValues));
                $scope.dataTransferPrice = $scope.dataTransferValues.price;
                getTotal();
                // changeCpuRam();
                $scope.$apply();
            });

        }, 500)


        $scope.dataTransferValues = {};

        $scope.dedicatedBandwidthValues= [
            {
              "bandwidth": "0 Mbps",
              "Mbps": 0,
              "price": "0.00"
            },
            {
              "bandwidth": "1 Mbps",
              "Mbps": 1,
              "price": "350.00"
            },
            {
              "bandwidth": "2 Mbps",
              "Mbps": 2,
              "price": "700.00"
            },
            {
              "bandwidth": "3 Mbps",
              "Mbps": 3,
              "price": "1050.00"
            },
            {
              "bandwidth": "4 Mbps",
              "Mbps": 4,
              "price": "1400.00"
            },
            {
              "bandwidth": "5 Mbps",
              "Mbps": 5,
              "price": "1750.00"
            },
            {
              "bandwidth": "6 Mbps",
              "Mbps": 6,
              "price": "2100.00"
            },
            {
              "bandwidth": "7 Mbps",
              "Mbps": 7,
              "price": "2450.00"
            },
            {
              "bandwidth": "8 Mbps",
              "Mbps": 8,
              "price": "2800.00"
            },
            {
              "bandwidth": "9 Mbps",
              "Mbps": 9,
              "price": "3150.00"
            },
            {
              "bandwidth": "10 Mbps",
              "Mbps": 10,
              "price": "3500.00"
            },
            {
              "bandwidth": "11 Mbps",
              "Mbps": 11,
              "price": "3850.00"
            },
            {
              "bandwidth": "12 Mbps",
              "Mbps": 12,
              "price": "4200.00"
            },
            {
              "bandwidth": "13 Mbps",
              "Mbps": 13,
              "price": "4550.00"
            },
            {
              "bandwidth": "14 Mbps",
              "Mbps": 14,
              "price": "4900.00"
            },
            {
              "bandwidth": "15 Mbps",
              "Mbps": 15,
              "price": "5250.00"
            },
            {
              "bandwidth": "16 Mbps",
              "Mbps": 16,
              "price": "5600.00"
            },
            {
              "bandwidth": "17 Mbps",
              "Mbps": 17,
              "price": "5950.00"
            },
            {
              "bandwidth": "18 Mbps",
              "Mbps": 18,
              "price": "6300.00"
            },
            {
              "bandwidth": "19 Mbps",
              "Mbps": 19,
              "price": "6650.00"
            },
            {
              "bandwidth": "20 Mbps",
              "Mbps": 20,
              "price": "7000.00"
            },
            {
              "bandwidth": "21 Mbps",
              "Mbps": 21,
              "price": "7350.00"
            },
            {
              "bandwidth": "22 Mbps",
              "Mbps": 22,
              "price": "7700.00"
            },
            {
              "bandwidth": "23 Mbps",
              "Mbps": 23,
              "price": "8050.00"
            },
            {
              "bandwidth": "24 Mbps",
              "Mbps": 24,
              "price": "8400.00"
            },
            {
              "bandwidth": "25 Mbps",
              "Mbps": 25,
              "price": "8750.00"
            },
            {
              "bandwidth": "26 Mbps",
              "Mbps": 26,
              "price": "9100.00"
            },
            {
              "bandwidth": "27 Mbps",
              "Mbps": 27,
              "price": "9450.00"
            },
            {
              "bandwidth": "28 Mbps",
              "Mbps": 28,
              "price": "9800.00"
            },
            {
              "bandwidth": "29 Mbps",
              "Mbps": 29,
              "price": "10150.00"
            },
            {
              "bandwidth": "30 Mbps",
              "Mbps": 30,
              "price": "10500.00"
            },
            {
              "bandwidth": "31 Mbps",
              "Mbps": 31,
              "price": "10850.00"
            },
            {
              "bandwidth": "32 Mbps",
              "Mbps": 32,
              "price": "11200.00"
            },
            {
              "bandwidth": "33 Mbps",
              "Mbps": 33,
              "price": "11550.00"
            },
            {
              "bandwidth": "34 Mbps",
              "Mbps": 34,
              "price": "11900.00"
            },
            {
              "bandwidth": "35 Mbps",
              "Mbps": 35,
              "price": "12250.00"
            },
            {
              "bandwidth": "36 Mbps",
              "Mbps": 36,
              "price": "12600.00"
            },
            {
              "bandwidth": "37 Mbps",
              "Mbps": 37,
              "price": "12950.00"
            },
            {
              "bandwidth": "38 Mbps",
              "Mbps": 38,
              "price": "13300.00"
            },
            {
              "bandwidth": "39 Mbps",
              "Mbps": 39,
              "price": "13650.00"
            },
            {
              "bandwidth": "40 Mbps",
              "Mbps": 40,
              "price": "14000.00"
            },
            {
              "bandwidth": "41 Mbps",
              "Mbps": 41,
              "price": "14350.00"
            },
            {
              "bandwidth": "42 Mbps",
              "Mbps": 42,
              "price": "14700.00"
            },
            {
              "bandwidth": "43 Mbps",
              "Mbps": 43,
              "price": "15050.00"
            },
            {
              "bandwidth": "44 Mbps",
              "Mbps": 44,
              "price": "15400.00"
            },
            {
              "bandwidth": "45 Mbps",
              "Mbps": 45,
              "price": "15750.00"
            },
            {
              "bandwidth": "46 Mbps",
              "Mbps": 46,
              "price": "16100.00"
            },
            {
              "bandwidth": "47 Mbps",
              "Mbps": 47,
              "price": "16450.00"
            },
            {
              "bandwidth": "48 Mbps",
              "Mbps": 48,
              "price": "16800.00"
            },
            {
              "bandwidth": "49 Mbps",
              "Mbps": 49,
              "price": "17150.00"
            },
            {
              "bandwidth": "50 Mbps",
              "Mbps": 50,
              "price": "17500.00"
            }
          ],

          $scope.selectDedicatedBw = $scope.dedicatedBandwidthValues[0];

        $scope.drivesList = [
            {
                "name": "Cloud Storage",
                "value": "Cloud_Storage",
                "storage": "ecs"
            },
            {
                "name": "EMC Scale IO",
                "value": "EMC_Scale_IO",
                "storage": "ecs"
            },
            {
                "name": "SAS 10K",
                "value": "SAS_10k",
                "storage": "dds"
            },
            {
                "name": "SSD",
                "value": "SSD",
                "storage": "dds"
            }

        ]

        $scope.shouldShow = function (drivesList) {
            return drivesList.storage == storagename;
        }

        // debugger;

        $scope.ser = [];
        $scope.ser[storagename] = {};
        $scope.ser[storagename].selectDrive = $scope.drivesList[0];
        if (storagename == "dds") $scope.ser[storagename].selectDrive = $scope.drivesList[2];

        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        // authrequest.sendserver = "enterprise-cloud-storage";
        authrequest.sendserver = "cloud-storage";
        pistoreServies.getpriceValues(authrequest).then(function (result) {

            console.log("result isasdasf ", JSON.stringify(result));

            var seriesCodes = [];
            $scope.databaseDsValues = result.diskspace_cs_vd;
            $scope.databaseDtValues = result.datatransfer;
            $scope.databaseDiscount = result.discount;
            $scope.tenures = result.tenure;
            // $scope.plan = 'Coud Storage';
            $scope.plan = result.plan;
            $scope.maintitle = result.plan;

            // console.log('length is ', $scope.databaseDsValues);
            // $scope.ser[storagename].selectDiskspace = '';tenure
            $scope.ser[storagename].selectTenure = $scope.tenures[0];

            $scope.grandTotalTenureText = "Grand Total Payable for first 3 months";
            $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
 
            $scope.ser[storagename].selectDt = $scope.databaseDtValues[1];

            $scope.dataTransferPrice = $scope.ser[storagename].selectDt.price

            if (storagename == "ecs") {
                $scope.subplan = result.subplan1;
            } else {
                $scope.subplan = result.subplan2;
            }
            $scope.val = 1;
            $scope.tenureIndex = 0;
            $scope.changeDrive($scope.ser[storagename].selectDrive);

        });

        $scope.changeUsername = function (name) {
          $scope.username = name;
        }

        $scope.changeUseremail = function (email) {
          $scope.useremail = email;
        }

        $scope.changeUserphone = function (phone) {
          $scope.userphone = phone;
        }



        $scope.changeDrive = function (driveDetails) {
            // $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
            // getTotal();

            // if ($scope.ser[storagename].selectDrive.name == "SATA 7.2K") {
            //     $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
            //     var val = 1;
            //     $scope.val = Number(val);

            //     $("#ddsdds").roundSlider({
            //         sliderType: "min-range",
            //         editableTooltip: false,
            //         handleShape: "round",
            //         width: 7,
            //         handleSize: 15,
            //         radius: "83",
            //         min: 1,
            //         max: 15,
            //         step: 1,
            //         startAngle: 317,
            //         endAngle: "+268",
            //         value: 0,
            //         // tooltipFormat: function (e) {
            //         //     var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
            //         //     ];
            //         //     return months[e.value];
            //         // }

            //         tooltipFormat: function (e) {
            //             var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
            //                 "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>"
            //             ];

            //             return months[e.value];
            //         }
            //     });
            //     getTotal();

            // }

            if ($scope.ser[storagename].selectDrive.name == "SAS 10K") {
              this.conditionalDisabling=false;
                $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
                $scope.diskspace = $scope.ser[storagename].selectDiskspace
                var val = 2;
                $scope.val = Number(val);

                $("#ddsdds").roundSlider({
                    sliderType: "min-range",
                    editableTooltip: false,
                    handleShape: "round",
                    width: 7,
                    handleSize: 15,
                    radius: "83",
                    min: 1,
                    max: 19,
                    step: 1,
                    startAngle: 317,
                    endAngle: "+268",
                    value: 2,
                    // tooltipFormat: function (e) {
                    //     var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
                    //     ];
                    //     return months[e.value];
                    // }

                  tooltipFormat: function (e) {
            var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 150</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 250</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 1500</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
         ];

            return months[e.value];
          }
       });
                getTotal();

            } else {
              this.conditionalDisabling=false;
                $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
                $scope.diskspace = $scope.ser[storagename].selectDiskspace
                var val = 2;
                $scope.val = Number(val);

                $("#ddsSsd").roundSlider({
                    sliderType: "min-range",
                    editableTooltip: false,
                    handleShape: "round",
                    width: 7,
                    handleSize: 15,
                    radius: "83",
                    min: 1,
                    max: 19,
                    value: 2,
                    step: 1,
                    startAngle: 317,
                    endAngle: "+268",

                  tooltipFormat: function (e) {
            var months = ["0","<span class='sliderinnertext1'> 0</span><sup>GB</sup>",
            "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 150</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 250</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 1500</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
           "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>",
         ];

            return months[e.value];
          }
        });

                getTotal();
            }
        }
        $scope.changeDt = function () {
            getTotal();
        }


        $scope.changeDedicatedBw = function (dedicatedBw) {
      
            getTotal();
          }

        $scope.changeTenure = function (ser) {
            // debugger;

            if ($scope.ser[storagename].selectTenure.name == "1 year (Quarterly Advance)") {
              $scope.grandTotalTenureText = "Grand Total Payable for first 3 months"
              $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
            } else if ($scope.ser[storagename].selectTenure.name == "1 year (50% Advance)") {
              $scope.grandTotalTenureText = "Grand Total Payable for first 6 months"
              $scope.grandTotalTenurePostText = "Grand Total Payable for post 6 months"
            } else if ($scope.ser[storagename].selectTenure.name == "1 year (100% Advance)") {
              $scope.grandTotalTenureText = ""
              $scope.grandTotalTenurePostText = ""
            } else if ($scope.ser[storagename].selectTenure.name == "2 years (Quarterly Advance)") {
              $scope.grandTotalTenureText = "Grand Total Payable for first 3 months"
              $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
            } else if ($scope.ser[storagename].selectTenure.name == "2 years (100% Advance)") {
              $scope.grandTotalTenureText = ""
              $scope.grandTotalTenurePostText = ""
            }
            else if ($scope.ser[storagename].selectTenure.name == "3 years (Quarterly Advance)") {
              $scope.grandTotalTenureText = "Grand Total Payable for first 3 months"
              $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
            }
            else if ($scope.ser[storagename].selectTenure.name == "3 years (100% Advance)") {
              $scope.grandTotalTenureText = ""
              $scope.grandTotalTenurePostText = ""
            }

            $scope.tenureIndex = $scope.tenures.indexOf(ser);
            var tenureIndex = $scope.tenureIndex;

            // shortCode(ser, tenureIndex);            
            getTotal();


        }
        $scope.getDiscount = function (tenure, beforedeoscount) {
          $scope.displayMonthlycost = beforedeoscount;
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
                $scope.afterDiscountDt = Math.round(beforedeoscount);
            }
        }
        $scope.discountCalc = function (beforedeoscount, discountPercentage) {
            $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
            $scope.afterDiscountDt = beforedeoscount - $scope.discountAmount;
            $scope.displayMonthlycost = Math.round($scope.afterDiscountDt);

        }

        // var getMonthlyCost = function(c){
        //     // debugger;
        //     $scope.getDiscount(c, $scope.datatransferPrice);

        //     $scope.dismonthlycost = Number($scope.diskspacePrice) + Number($scope.afterDiscountDt);
        //     $scope.dismonthlycost = Math.round($scope.dismonthlycost);

        // }
        var getTotal = function () {


            // alert('gt');
            // debugger;
            // shortCode($scope.ser[seriesname], $scope.tenureIndex);



            var sendqt = {};
            sendqt.drive = $scope.ser[storagename].selectDrive.name;
            sendqt.driveValue = $scope.ser[storagename].selectDrive.value;

            $scope.diskspace = $scope.ser[storagename].selectDiskspace[$scope.val - 1].GB;
            if ($scope.diskspace >= 1000) {
                $scope.diskspace = $scope.diskspace / 1000 + ' TB';
            } else {
                $scope.diskspace = $scope.ser[storagename].selectDiskspace[$scope.val - 1].name;
            }
            sendqt.diskspace = $scope.diskspace;
            sendqt.name = $scope.ser[storagename].selectTenure.name;
            sendqt.tenurearr = [$scope.ser[storagename].selectTenure];
            sendqt.tenure = $scope.ser[storagename].selectTenure.months;
            sendqt.notes = $scope.ser[storagename].selectTenure.notes;
            var a = $scope.val - 1 || 0;
            var b = $scope.tenureIndex || 0;

            $scope.diskspacePrice = $scope.ser[storagename].selectDiskspace[a].values[b].tenure_price;
            $scope.datatransferPrice = $scope.dataTransferValues.price || $scope.databaseDtValues[1].price;

            $scope.datatransfer = $scope.dataTransferValues.datatransfer || $scope.databaseDtValues[1].datatransfer;

            sendqt.datatransfer = $scope.datatransfer;

            sendqt.dataTransferPrice = $scope.datatransferPrice;
            sendqt.diskspacePrice = $scope.diskspacePrice;

            sendqt.dedicatedBw = $scope.selectDedicatedBw.bandwidth;
            sendqt.dedicatedBwPrice = $scope.selectDedicatedBw.price;


            // getMonthlyCost($scope.ser[storagename].selectTenure.months);

            $scope.beforeDiscountMonthlycost = Number($scope.diskspacePrice) + Number($scope.datatransferPrice);

            $scope.getDiscount(Number($scope.ser[storagename].selectTenure.months), Number($scope.beforeDiscountMonthlycost));

            $scope.displayMonthlycost = Number($scope.displayMonthlycost) + Number(sendqt.dedicatedBwPrice);
            $scope.monthlycost = $scope.displayMonthlycost;

            sendqt.beforeDiscountMonthlycost = Number($scope.beforeDiscountMonthlycost);
            sendqt.monthlycost = $scope.displayMonthlycost;
            sendqt.plan_price = Number($scope.monthlycost) * Number($scope.ser[storagename].selectTenure.months);
            sendqt.amount = Number($scope.monthlycost) * Number($scope.ser[storagename].selectTenure.months);
            sendqt.servername = storagename;
            sendqt.promoDiscount = 0;
            sendqt.quantity = 1;

            sendqt.plan = $scope.plan;
            sendqt.subplan = $scope.subplan;
            sendqt.storagediskspace = $scope.ser[storagename].selectDiskspace[a];
            sendqt.storagedatatransfer = $scope.ser[storagename].selectDt;
            sendqt.storagediscount = $scope.databaseDiscount;
            sendqt.username = $scope.username;
            sendqt.useremail = $scope.userphone;

            sendqt.grandTotalTenureText = $scope.grandTotalTenureText;
            sendqt.grandTotalTenurePostText = $scope.grandTotalTenurePostText;

            console.log('sendqt is ', sendqt);
            // $scope.$apply();
            return sendqt;
        }

        var validatePhoneNumber = function (phoneNumber) {
          var regex = /^\d{10}$/;
          return regex.test(phoneNumber);
        }

        var validateEmail = function(email) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }

        $scope.submitfn = function (ser) {

            console.log("monthly cost issssssssss"+ $scope.displayMonthlycost);

            if ($scope.username == "") { alert('Please Enter name'); return false; };
            if ($scope.userphone == "") { alert('Please Enter phone'); return false; };
            if ($scope.useremail == "") {alert('Please Enter email'); return false;};

            if (!validatePhoneNumber($scope.userphone)) {
              alert('Please Enter a valid phone'); return false;
            }

            if (!validateEmail($scope.useremail)) {
              alert('Please Enter a valid email'); return false;
            }

            if ($scope.displayMonthlycost == 0) {
                alert("Your Cart Value Must Be Greater Than INR 0.00");
            }
            else {
                // debugger;
                var getqt = getTotal();
                
                const data = {
                  'disk_space': getqt.diskspace,
                  'data_transfer': getqt.datatransfer,
                  'storage_type': getqt.drive,
                  'tenure': getqt.tenurearr[0].name,
                  'bandwidth': getqt.dedicatedBw,
                  'name': $scope.username,
                  'email': $scope.useremail,
                  'phone': $scope.userphone,
                  'monthly_cost': getqt.monthlycost
                }

                fetch(`https://pidatacenters.com/pi-cloud/pricing/cloud-storage-checkout.php?${new URLSearchParams(data).toString()}`).
                then((result) => {
                  alert('Your message is successfully sent. We will get in touch with you soon')
                })
            }


        }
        /*
        
                 $scope.$on('cloudstoragecarttenure', function(e, msg){
                    // debugger;
                    var index = msg.message.indexNumber;
                    var tn = msg.message.tn;
                    var months = msg.message.tn.months;
                    // var storagename = msg.message.servername;
                    // $scope.ser[storagename].selectTenure = tn;
                    // tn = tn.shift();
                   // console.log('cloudstoragecarttenure ', msg);
                    // debugger;
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
                                // debugger;
                                if($scope.databaseDsValues[subplan][i].name == $scope.diskSpace){
                                    $scope.val = i;
                                    $scope.diskspacePrice = $scope.databaseDsValues[subplan][i-1].values[tenureIndex].tenure_price
                                    break;
                                }
                            }
                        }
        
                        for(i=0;i<=$scope.databaseDtValues.length-1;i++){
                            // debugger;
                            if($scope.databaseDtValues[i].datatransfer == $scope.datatransfer){
                                $scope.datatransferPrice = $scope.databaseDtValues[i].price;
                                
                                break;
                            }
                        }
                        
        
                     
                  });
                    
        
                    // var a= $scope.val-1;
                    // var b = tenureIndex;
        // debugger;
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
                   // console.log('updateqt ', updateqt);
                   pistoreServies.addcart(updateqt);
                   $scope.$emit('callCart');
        
                });*/









    }]


    var cloudStorage = function () {
        return {
            restrict: 'EA',
            controller: "cloudStorageCtrl",
            // template: '<ul><li >{{dataSource}}</li></ul> ',          
            scope: {
                servertype: '@',
                storagename: '@'
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