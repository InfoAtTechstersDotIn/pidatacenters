(function () {
    var app = angular.module("PiStore");

    var cartController = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", "$location", "$routeParams", "$window", "jwtHelper", function ($scope, $rootScope, pistoreServies, piPricingSliders, $location, $routeParams, $window, jwtHelper) {


        // $scope.critems = pistoreServies.cartList();
        $scope.items = pistoreServies.cartList();
        // $rootScope.cartcount = pistoreServies.cartList();
        // $rootScope.$watch($rootScope.cartcount, function () {
        //     $scope.critems = pistoreServies.cartList();
        // })
        // $scope.showauth = true;
        $scope.emptyCart = false;
        $scope.emptyCartCC = false;

        var authDetails = localStorage.getItem('userdetails');

        if (!authDetails) {

        } else {
            authDetails = JSON.parse(authDetails);
            $scope.remainMsmeLimit = authDetails.msme_limt_details;

            // console.log($scope.remainMsmeLimit);
        }



        if ($rootScope.users == false) {
            $scope.showauth = true;
            // $scope.showcheckout = false;
        } else {
            // $scope.showcheckout = true;

        }
        $scope.gotoPricing = function () {
            $scope.emptyCartCC = false;
        }
        // var refreshToken = localStorage.getItem('refresh_token');
        // if(refreshToken){
        //     // debugger;
        //     var exp = jwtHelper.isTokenExpired(refreshToken);
        //     if(exp){
        //         pistoreServies.getToken(refreshToken).then(function(result){
        //             // console.log('newtk ', result);
        //         })
        //     }

        // }

        $scope.$on('authcall', function () {
            $scope.showauth = false;

            // console.log("authcallauthcallshowauthshowauthshowauthfalse");
            var authDetails = localStorage.getItem('userdetails');

            if (!authDetails) {

            } else {
                authDetails = JSON.parse(authDetails);
                $scope.checkRemainLimit = authDetails.msme_limt_details;
                $scope.gstnum = authDetails.user[0].gst_num;

                // console.log("user[0].gst_num "+authDetails.user[0].gst_num);
                // console.log("$scope.gstnum "+$scope.gstnum);
                // console.log($scope.checkRemainLimit);
            }


        })
        // var saveId = $location.search().pid || '2FLLXC5I';
        var saveId = $location.search().pid;
        if (saveId) {
            pistoreServies.getSaveOrder(saveId).then(function (result) {
                // console.log('from saved ', result);
                // debugger;
                $scope.items = result.message.order_details.products;
                $scope.checkoutbtn($scope.items);
            })
        }
        // else{
        //     $scope.checkoutbtn($scope.items);
        // }
        // alert(saveId);
        $scope.saveReg = {
            // "first_name": "ram",
            // "last_name": "ram",
            // "company": "ram",
            // "email": "sriram@pidatacenters.com",
            // "mobile": "9463031377",
            "country_code": "+91"
        };
        $scope.increaseQty = function (item) {
           
            // $scope.$apply();

            if($scope.servername == 'Cloud Servers'){
                item.quantity > 0 ? item.quantity = Number(item.quantity) + 1 : 1;
                // debugger;
                item.amount = (Math.round(item.monthlycost || item.api_monthly_price) * Number(item.quantity) * Number(item.tenure))+Number(item.MigrationToolOtcPrice);
                $scope.checkoutbtn($scope.items);
            }
            else{
                item.quantity > 0 ? item.quantity = Number(item.quantity) + 1 : 1;
                // debugger;
                item.amount = (Math.round(item.monthlycost || item.api_monthly_price) * Number(item.quantity) * Number(item.tenure));
                $scope.checkoutbtn($scope.items);  
            }

        }
        $scope.decreaseQty = function (item) {
           
            // $scope.$apply();

            if($scope.servername == 'Cloud Servers'){

                item.quantity > 1 ? item.quantity = Number(item.quantity) - 1 : 1;
                // debugger;
                item.amount = (Math.round(item.monthlycost || item.api_monthly_price) * Number(item.quantity) * Number(item.tenure))+Number(item.MigrationToolOtcPrice);
                $scope.checkoutbtn($scope.items);
            }

            else{
                item.quantity > 1 ? item.quantity = Number(item.quantity) - 1 : 1;
                // debugger;
                item.amount = (Math.round(item.monthlycost || item.api_monthly_price) * Number(item.quantity) * Number(item.tenure));
                $scope.checkoutbtn($scope.items);
            }
        }
        $scope.$on('callCart', function () {
            $scope.items = pistoreServies.cartList();
            $scope.checkoutbtn($scope.items);
            $scope.sideCart = true;
            $scope.cartFixedIcons = true;
        })
        $scope.showcartItem = [];
        $scope.showcartlist = function (index) {
            $scope.showcartItem[index] = !$scope.showcartItem[index];
        }

        $scope.tenures = [
            {
              "name": "1 year (Quarterly Advance)",
              "months": 3,
              "notes": "Total bill is for first quarter only. Subsequent invoices will be generated on quarterly basis hereafter."
            },
            {
              "name": "1 year (50% Advance)",
              "months": 6,
              "notes": "Total bill is for first six months only. Subsequent invoices will be generated on half yearly basis hereafter."
            },
            {
              "name": "1 year (100% Advance)",
              "months": 12,
              "notes": "Total bill is for the period of one year in full."
            },
            {
              "name": "2 years (Quarterly Advance)",
              "months": 3,
              "notes": "Total bill is for first quarter only. Subsequent invoices will be generated on quarterly basis hereafter."
            },
            {
              "name": "2 years (100% Advance)",
              "months": 24,
              "notes": "Total bill is for the period of two years in full."
            },
            {
              "name": "3 years (Quarterly Advance)",
              "months": 3,
              "notes": "Total bill is for first quarter only. Subsequent invoices will be generated on quarterly basis hereafter."
            },
            {
              "name": "3 years (100% Advance)",
              "months": 36,
              "notes": "Total bill is for the period of three years in full."
            }
          ]
        $scope.tenuresenterprise = [
            {
              "name": "1 year (Quarterly Advance)",
              "months": 3,
              "notes": "Total bill is for first quarter only. Subsequent invoices will be generated on quarterly basis hereafter."
            },
            {
              "name": "1 year (50% Advance)",
              "months": 6,
              "notes": "Total bill is for first six months only. Subsequent invoices will be generated on half yearly basis hereafter."
            },
            {
              "name": "1 year (100% Advance)",
              "months": 12,
              "notes": "Total bill is for the period of one year in full."
            },
            {
              "name": "2 years (Quarterly Advance)",
              "months": 3,
              "notes": "Total bill is for first quarter only. Subsequent invoices will be generated on quarterly basis hereafter."
            },
            {
              "name": "2 years (100% Advance)",
              "months": 24,
              "notes": "Total bill is for the period of two years in full."
            },
            {
              "name": "3 years (Quarterly Advance)",
              "months": 3,
              "notes": "Total bill is for first quarter only. Subsequent invoices will be generated on quarterly basis hereafter."
            },
            {
              "name": "3 years (100% Advance)",
              "months": 36,
              "notes": "Total bill is for the period of three years in full."
            }
          ]
        // debugger;
        $scope.changeCartTenurelol = function (tn, index) {
            // debugger;
            if (!tn) {
                $scope.items = pistoreServies.cartList();
                tn = {};
                tn.months = $scope.items[index].tenure;
                tn.name = $scope.items[index].name;
                tn.notes = $scope.items[index].notes;
            }


              if (tn.name == "1 year (Quarterly Advance)") {
                $scope.grandTotalTenureText = "Grand Total Payable for first 3 months"
                $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
              } else if (tn.name == "1 year (50% Advance)") {
                $scope.grandTotalTenureText = "Grand Total Payable for first 6 months"
                $scope.grandTotalTenurePostText = "Grand Total Payable for post 6 months"
              } else if (tn.name == "1 year (100% Advance)") {
                $scope.grandTotalTenureText = ""
                $scope.grandTotalTenurePostText = ""
              } else if (tn.name == "2 years (Quarterly Advance)") {
                $scope.grandTotalTenureText = "Grand Total Payable for first 3 months"
                $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
              } else if (tn.name == "2 years (100% Advance)") {
                $scope.grandTotalTenureText = ""
                $scope.grandTotalTenurePostText = ""
              }
              else if (tn.name == "3 years (Quarterly Advance)") {
                $scope.grandTotalTenureText = "Grand Total Payable for first 3 months"
                $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
              }
              else if (tn.name == "3 years (100% Advance)") {
                $scope.grandTotalTenureText = ""
                $scope.grandTotalTenurePostText = ""
              }

            $scope.servername = $scope.items[index].subplan;

            if ($scope.servername == 'E3 - Series' || $scope.servername == 'E5 - Series') {
                var tenureIndex = $scope.tenureindexid(tn.name);
                tenureIndex = tenureIndex;
            } else {
                var tenureIndex = $scope.tenureindexid(tn.name);
            }
            // debugger;
            $scope.modify = {
                indexNumber: index,
                tn: tn,
                tenureIndex: tenureIndex,
                servername: $scope.servername
            };


            if ($scope.servername == 'Cloud Servers' || $scope.servername == 'Virtual Dedicated Servers') {
                $scope.getdiscount($scope.servername, index, tn, tenureIndex);


            } else if ($scope.servername == 'E3 - Series' || $scope.servername == 'E5 - Series') {
                var enterprisePlan = $scope.items[index].enterprise;
                var seriesname;
                if ($scope.servername == 'E3 - Series') {
                    seriesname = 'e3Series';
                } else if ($scope.servername == 'E5 - Series') {
                    seriesname = 'e5Series';
                }
                $scope.seriesplanPrice(seriesname, index, tn, enterprisePlan, tenureIndex);



            } else if ($scope.servername == 'Enterprise Cloud Storage' || $scope.servername == 'Dedicated Disk Storage') {
                $scope.getstorage($scope.servername, index, tn, tenureIndex);

            } else if ($scope.servername == 'Cloud Storage') {
                $scope.getstorage($scope.servername, index, tn, tenureIndex);
            } else if ($scope.servername == 'Server Co-Location') {
                $scope.items[index].amount = $scope.items[index].monthlycost * tn.months;
                $scope.checkoutbtn($scope.items);
            }
            $scope.items[index].tenure = tn.months;
            $scope.items[index].name = tn.name;

            $scope.items[index].grandTotalTenureText = $scope.grandTotalTenureText;
            $scope.items[index].grandTotalTenurePostText = $scope.grandTotalTenurePostText;

            $scope.items[index].notes = tn.notes;
            // debugger;
            // $scope.checkoutbtn($scope.items);
        }

        var authrequest = {};
        authrequest.api_key = "PI_RHP";

        $scope.getdiscount = function (gd, index, tn, tenureIndex) {
            authrequest.sendserver = 'cloud-servers';
            pistoreServies.getpriceValues(authrequest).then(function (result) {
                // console.log("result is ", result);
                // debugger;
                $scope.databaseDiscount = result['discount'];
                $scope.items[index].serverdiscount = result['discount'];

                $scope.changeCloudServerTnures(index, tn, tenureIndex);
            });

        }

        //commented on 30-05-2020

        $scope.changeCloudServerTnures = function (index, tn, tenureIndex) {
            if (saveId) {
                var beforedeoscount = Number($scope.items[index].api_cpu_price) + Number($scope.items[index].api_ram_price) + Number($scope.items[index].api_diskspace_price) + Number($scope.items[index].api_datatransfer_price);
                var othersPrice = Number($scope.items[index].api_os_price) + Number($scope.items[index].api_database_price) + Number($scope.items[index].api_ip_price) + Number($scope.items[index].api_backup_price) + Number($scope.items[index].api_vpn_price)  + Number($scope.items[index].api_backuplicense_price) + Number($scope.items[index].api_dedicatedbw_price) + Number($scope.items[index].api_antivirus_price);
            } else {
                var beforedeoscount = Number($scope.items[index].beforeDiscountMonthlycost);
                var othersPrice = Number($scope.items[index].osPrice) + Number($scope.items[index].databasePrice) + Number($scope.items[index].IpPrice) + Number($scope.items[index].backupPrice) + Number($scope.items[index].vpnPrice) + Number($scope.items[index].MRCLicensePrice) + Number($scope.items[index].DRReplicationToolPrice)+Number($scope.items[index].SSLCertificatePrice) + Number($scope.items[index].WebpanelPrice) + Number($scope.items[index].dedicatedFirewallPrice) + Number($scope.items[index].TwoFactorAuthenticationPrice) + Number($scope.items[index].ElasticLoadBalancerPrice) +Number($scope.items[index].backUpLicensePrice) + Number($scope.items[index].dedicatedBwPrice) + Number($scope.items[index].antiVirusPrice);
            }
            if (tenureIndex == 0) {
                var discountPercentage = 0;
            } else {
                //  var discountPercentage = $scope.items[index].serverdiscount[tenureIndex - 1].discount;
                 var discountPercentage = $scope.items[index].serverdiscount[tenureIndex].discount;
            }
            $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
            $scope.afterDiscountMonthlyCost = beforedeoscount - $scope.discountAmount;
            $scope.monthlycost = Number($scope.afterDiscountMonthlyCost + Number(othersPrice));
            $scope.items[index].monthlycost = Number($scope.monthlycost);
            $scope.items[index].amount = (Math.round($scope.monthlycost * tn.months * $scope.items[index].quantity)) + Number($scope.items[index].MigrationToolOtcPrice);
            $scope.checkoutbtn($scope.items);
        }

         //new one on 30-05-2020

         $scope.changeCloudStorageTnures = function (index, tn, tenureIndex) {
            // $scope.diskspacePrice = $scope.items[index].storagediskspace.values[tenureIndex].tenure_price
            // $scope.dataTransferPrice = $scope.items[index].dataTransferPrice || $scope.items[index].api_datatransfer_price;
            // $scope.dedicatedBandWidthPrice = $scope.items[index].dedicatedBwPrice || $scope.items[index].api_dedicatedbw_price;
            // $scope.dismonthlycost = Number($scope.diskspacePrice) + Number($scope.dataTransferPrice) + Number($scope.dedicatedBandWidthPrice);

            if (saveId) {
                var beforedeoscount = Number($scope.items[index].api_diskspace_price) + Number($scope.items[index].api_datatransfer_price);
                var othersPrice = $scope.items[index].dedicatedBwPrice || $scope.items[index].api_dedicatedbw_price;
            } else {
                var beforedeoscount = Number($scope.items[index].beforeDiscountMonthlycost);
                var othersPrice = $scope.items[index].dedicatedBwPrice || $scope.items[index].api_dedicatedbw_price;
            }
            if (tenureIndex == 0) {
                var discountPercentage = 0;
            } else {
                //  var discountPercentage = $scope.items[index].serverdiscount[tenureIndex - 1].discount;
                 var discountPercentage = $scope.items[index].serverdiscount[tenureIndex].discount;
            }
            $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
            $scope.afterDiscountMonthlyCost = beforedeoscount - $scope.discountAmount;
            $scope.monthlycost = Number($scope.afterDiscountMonthlyCost + Number(othersPrice));

            $scope.items[index].monthlycost = Number($scope.monthlycost);
            $scope.items[index].amount = Math.round($scope.monthlycost * tn.months * $scope.items[index].quantity);
            $scope.checkoutbtn($scope.items);
        }

        //new changes on 30-05-2020

        // $scope.changeCloudServerTnures = function (index, tn, tenureIndex) {
        //     if (saveId) {
        //         var beforedeoscount = Number($scope.items[index].api_cpu_price) + Number($scope.items[index].api_ram_price) + Number($scope.items[index].api_diskspace_price) + Number($scope.items[index].api_datatransfer_price);
        //         var othersPrice = Number($scope.items[index].api_os_price) + Number($scope.items[index].api_database_price) + Number($scope.items[index].api_ip_price) + Number($scope.items[index].api_backup_price) + Number($scope.items[index].api_vpn_price) + Number($scope.items[index].api_backuplicense_price) + Number($scope.items[index].api_dedicatedbw_price) + Number($scope.items[index].api_antivirus_price);
        //     } else {
        //         var beforedeoscount = Number($scope.items[index].beforeDiscountMonthlycost);
        //         var othersPrice = Number($scope.items[index].osPrice) + Number($scope.items[index].databasePrice) + Number($scope.items[index].IpPrice) + Number($scope.items[index].backupPrice) + Number($scope.items[index].vpnPrice) + Number($scope.items[index].backUpLicensePrice) + Number($scope.items[index].dedicatedBwPrice) + Number($scope.items[index].antiVirusPrice);
        //     }
        //     if (tenureIndex == 0) {
        //         var discountPercentage = 0;
        //     } else {
        //         var discountPercentage = $scope.items[index].serverdiscount[tenureIndex - 1].discount;
        //     }
        //     $scope.discountAmount = beforedeoscount * Number(discountPercentage) * 0.01;
        //     $scope.afterDiscountMonthlyCost = beforedeoscount - $scope.discountAmount;
        //     $scope.monthlycost = Number($scope.afterDiscountMonthlyCost + Number(othersPrice));
        //     $scope.items[index].monthlycost = Number($scope.monthlycost);
        //     $scope.items[index].amount = Math.round($scope.monthlycost tn.months $scope.items[index].quantity);
        //     $scope.checkoutbtn($scope.items);
        // }


        $scope.seriesplanPrice = function (gp, index, tn, enterprisePlan, tenureIndex) {
            authrequest.sendserver = 'enterprise-dedicated-servers';
            pistoreServies.getpriceValues(authrequest).then(function (result) {
                // console.log("result is ", result);
                // debugger;
                $scope.items[index].seriesplans = result[gp][0][enterprisePlan];

                $scope.changeEnterpriseServerTnures(index, tn, enterprisePlan, tenureIndex);
            });

        }
        $scope.changeEnterpriseServerTnures = function (index, tn, enterprisePlan, tenureIndex) {
            $scope.tenurePrice = $scope.items[index].seriesplans[tenureIndex].tenure_price;
            $scope.otc = $scope.items[index].seriesplans[tenureIndex].otc;
            if (saveId) {
                $scope.factorPrice = (Number($scope.otc) + Number($scope.items[index].api_ip_price) + Number($scope.items[index].api_datatransfer_price)) * Number($scope.items[index].seriesplans[tenureIndex].factor);
                $scope.monthlycost = Number($scope.tenurePrice) + Number($scope.items[index].api_datatransfer_price) + Number($scope.items[index].api_ip_price) + Number($scope.items[index].api_rackspace_price);
            } else {
                $scope.factorPrice = (Number($scope.otc) + Number($scope.items[index].ipPrice) + Number($scope.items[index].datatransferPrice)) * Number($scope.items[index].seriesplans[tenureIndex].factor);
                $scope.monthlycost = Number($scope.tenurePrice) + Number($scope.items[index].datatransferPrice) + Number($scope.items[index].ipPrice) + Number($scope.items[index].rackspacePrice);
            }

            $scope.items[index].monthlycost = Number($scope.monthlycost);
            $scope.items[index].otc = Number($scope.factorPrice);
            $scope.items[index].amount = Math.round($scope.monthlycost * tn.months * $scope.items[index].quantity);
            $scope.checkoutbtn($scope.items);
        }

        
       


        $scope.getstorage = function (gp, index, tn, tenureIndex) {
            authrequest.sendserver = 'cloud-storage';
            // var drivename = 'Cloud_Storage';
            var drivename = $scope.items[index].drive;
            drivename = drivename.replace(" ", "_");
            pistoreServies.getpriceValues(authrequest).then(function (result) {
                // console.log("result is ", result);
                // debugger;
                // $scope.items[index].storagediskspace = result['diskspace'][drivename][0];

                $scope.databaseDiscount = result['discount'];
                $scope.items[index].serverdiscount = result['discount'];

                for (var i = 0; i > result.length; i++) {
                    $scope.items[index].storagediskspace = result['diskspace_cs_vd'][drivename][result.diskspace];
                }

                $scope.changeCloudStorageTnures(index, tn, tenureIndex);
            });

        }

        //commented on 30-05-2020
        // $scope.changeCloudStorageTnures = function (index, tn, tenureIndex) {
        //     $scope.diskspacePrice = $scope.items[index].storagediskspace.values[tenureIndex].tenure_price
        //     $scope.dataTransferPrice = $scope.items[index].datatransferPrice || $scope.items[index].api_datatransfer_price;
        //     $scope.dismonthlycost = Number($scope.diskspacePrice) + Number($scope.dataTransferPrice);
        //     $scope.items[index].monthlycost = Number($scope.dismonthlycost);
        //     $scope.items[index].amount = Math.round($scope.dismonthlycost * tn.months * $scope.items[index].quantity);
        //     $scope.checkoutbtn($scope.items);
        // }


        $scope.checkoutbtn = function (checkitems) {
            // debugger;
            // if (!checkitems || checkitems.length <= 0) {
            //     // $window.location.href = 'cloudServers';
            //     return false;
            // }
            // var sendqt = {};
            // var otctotal = total = discount_total = afterdiscount = tax = grandTotal = 0;
            // angular.forEach(checkitems, function (eachitem) {
            //     // debugger;
            //     total += Number(eachitem.amount);
            //     if (eachitem.otc) {
            //         otctotal += Number(eachitem.otc);
            //     } 
            //     // debugger;
            //     var eachnotes = $scope.tenureindexid(eachitem.tenure);
            //     eachitem.notes = $scope.tenures[eachnotes].notes;
            //     eachitem.name = $scope.tenures[eachnotes].name;

            // });
            // afterdiscount = Number(total) + Math.round(otctotal);
            // tax = Number(afterdiscount) * 0.18;
            // grandTotal = Number(afterdiscount) + Number(tax);

            // $scope.totalplanprice = Math.round(total);
            // $scope.otc_total = Math.round(otctotal);
            // $scope.total_tax = Math.round(tax);
            // $scope.grand_total = Math.round(grandTotal);

            // debugger;
            // if (!checkitems) {
            //     return false;
            // }
            if (!checkitems || checkitems.length < 1) {
                $scope.emptyCart = true;
                $scope.showauth = false;
                return false;
            }
            // else if (checkitems || checkitems.length > 0) {
            //     $scope.emptyCart = false;
            // }
            var sendqt = {};
            var otctotal =total_otctotal= total = discount_total = afterdiscount = tax = grandTotal = totalmsme = 0;
            var remainlimit = 0;
            // // console.log("$rootScope.users : " + $rootScope.users);
            angular.forEach(checkitems, function (eachitem) {
                // // console.log('each ', eachitem.plan_price);eachitem.api_otc_total
                // debugger;

                totalmsme += parseInt(eachitem.monthlycost) * parseInt(eachitem.quantity);

                total += parseInt(eachitem.amount);
                if (eachitem.api_otc_price) {
                    otctotal += parseInt(eachitem.api_otc_price);
                }
                  if (eachitem.MigrationToolOtcPrice) {
                    total_otctotal += parseInt(eachitem.MigrationToolOtcPrice);
                }
                // eachitem.tenure = eachitem.months;
                if (!eachitem.amount) {
                    eachitem.amount = eachitem.plan_price;
                }
                var eachnotes = $scope.tenureindexid(eachitem.name);
                eachitem.notes = $scope.tenures[eachnotes].notes;
                eachitem.name = $scope.tenures[eachnotes].name;
                // discount_total += parseInt(eachitem.promodiscount);

            }, this);
            afterdiscount = Math.round(total) + Math.round(otctotal);
            // afterdiscount = Math.round(total);
            tax = Math.round(Number(afterdiscount) * 0.18);
            grandTotal = Math.round(afterdiscount) + Math.round(tax);

            $scope.totalmsmelimit = Math.round(totalmsme);
            // console.log("$scope.totalmsmelimit : " + $scope.totalmsmelimit);
            $scope.gst_num = $scope.gstnum;
            $scope.totalplanprice = Math.round(total);
            // $scope.totalplanprice = Math.round(total);
            $scope.otc_total = Math.round(total_otctotal);
            $scope.total_tax = Math.round(tax);
            $scope.grand_total = Math.round(grandTotal);

            pistoreServies.removeItemCart(checkitems);

        }

        $scope.tenureindexid = function (tm) {
            // debugger;
            for (i = 0; i <= $scope.tenures.length - 1; i++) {
                if ($scope.tenures[i].name == tm) {
                    var opo = $scope.tenures[i];
                      $scope.selectCartTenure =  $scope.tenures[i];
                    return i;
                    break;
                }
            }
        }

        $scope.checktenureslist = function (tenure) {
            // console.log('tn is ', $scope.selecttn);
            return tenure.nomonth !== $scope.selecttn;
        }

        $scope.removeProduct = function ($index, e, checkitems) {
            e.preventDefault();
            e.stopPropagation();
            // debugger;
            var cartList = checkitems.splice($index, 1);
            pistoreServies.removeItemCart(checkitems);
            if (!checkitems || checkitems.length <= 0) {
                $scope.totalplanprice = 0;
            }
            $scope.checkoutbtn(checkitems);
            // console.log('checklist ', cartList);
        }
        if (!saveId) {
            $scope.checkoutbtn($scope.items);
        }

        // $scope.checkoutbtn($scope.items);
        // window.onbeforeunload = function() {
        //     localStorage.removeItem('localStorageCart');
        //   };

        $scope.paynow = function (checkitems) {
            // debugger;
            // $scope.checkRemainLimit = $rootScope.msme_limt_details;
            if ($scope.terms == true) {
                pistoreServies.removeItemCart(checkitems);
            } else {
                // // console.log("$rootScope.msme_limt_details : "+ $rootScope.msme_limt_details);
                alert('To proceed further, please accept terms and conditions');
                return false;
                // break;
            }
        }

       $scope.loaderDiv = false;

        $scope.saveOrder = function (checkitems) {
            // debugger;

            if (!checkitems || checkitems.length < 1) {
                $scope.emptyCartCC = true;
                return false;
            }

            $scope.checkoutbtn(checkitems);
            var authDetails = localStorage.getItem('userdetails');
            if (!authDetails) {
                $scope.saveRegister = true;
            } else {
                authDetails = JSON.parse(authDetails);
                // lol = authDetails. mobile_code
                var tempJson = {};
                tempJson = authDetails.user[0].profile;
                tempJson.email = authDetails.user[0].email
                // tempJson.country_code = authDetails.user[0].profile;
                $scope.saveOrderUserDetails(tempJson);
            }
            // console.log('save ', checkitems);
        }


        $scope.loaderDiv = false;


        $scope.downloadPdf = function (checkitems) {

            $('#mydiv').show();
            $scope.loaderDiv = true;

            if($scope.emptyCart==true){
                checkitems.total =  $scope.totalplanprice;  
            }
            else{
                checkitems.total =  $scope.grand_total;
            }

    
        var fileName = "estimation.pdf";
        var a = document.createElement("a");
        document.body.appendChild(a);

           pistoreServies.saveOrderPdf(checkitems).then(function (result) {
            var file = new Blob([result.data], {type: 'application/pdf'});
            var fileURL = window.URL.createObjectURL(file);
            a.href = fileURL;
            a.download = fileName;
            a.click();
            $('#mydiv').hide();
            $scope.loaderDiv = false;
           });

       }

        $scope.saveOrderUserDetails = function (saveReg) {
            $('#mydiv').show();
            $scope.loaderDiv = true;
            var saveOrderDetails = {};
            saveOrderDetails = saveReg;
            saveOrderDetails.products = $scope.items;
            saveOrderDetails.total = $scope.totalplanprice;
            saveOrderDetails.type = "save";
            saveOrderDetails.promocode = "NOPROMOCODE";
            // console.log('saveOrderDetails ', saveOrderDetails);
            var lol = JSON.stringify(saveOrderDetails);
            pistoreServies.saveOrderItems(lol).then(function (result) {
                // console.log('saveOrderItems ', result);
                $scope.saveRegister = true;
                $scope.authSaveOrder = true;
                $scope.returnMessage = true;
                if (result.status == 200) {

                    $('#mydiv').hide();
                    $scope.loaderDiv = false;
                    // alert(result.testing);
                    // $scope.saveRegister = true;
                    // $scope.authSaveOrder = true;
                    // $scope.returnMessage = true;
                    $scope.savedmsg = "Your order has been saved successfuly.";
                    // $window.location.href = 'checkout?pid=' + result.testing;
                }
            }, function () {
                   $('#mydiv').hide();
                    $scope.loaderDiv = false;
                $scope.savedmsg = "Something went wrong.";
            });
        }

     $scope.reload=function(){
            
            $window.location.reload();
        }

        $scope.extraCores = function (ecl) {
            if (ecl == 'MS SQL Standard*' || ecl == 'MS SQL Enterprise*' || ecl == 'MS SQL Web*') {
                return true;
            }
        }











    }];

    var cartDirective = function () {
        return {
            restrict: 'EA',
            controller: "cartController",
            replace: true,
            transclude: true,
            templateUrl: "views/directives/cart.html"
        }
    }











    app.controller("cartController", cartController);
    app.directive("cartDirective", cartDirective);

})()