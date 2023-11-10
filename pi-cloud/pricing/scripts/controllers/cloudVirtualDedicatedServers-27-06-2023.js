(function () {
  var app = angular.module("PiStore");

  var cloudVirtualDedicatedServersController = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", "$timeout", function ($scope, $rootScope, pistoreServies, piPricingSliders, $timeout) {
    $scope.sname = $scope.servertype;
    $scope.sentname = $scope.sendname;
    $scope.cpuValues = $scope.ramValues = $scope.diskSpaceValues = $scope.dataTransferValues =
      $scope.selectOs = $scope.selectDb = $scope.selectIp = $scope.selectBackUp = {};
    var selectdef = {
      os: "Choose...",
      price: "0",
      database: "Choose...",
      vpn: "Choose..."
   
    }

    // $scope.selectOs = $scope.selectdef;

    var databaseCpuPrice;


    piPricingSliders.cpuSlider("cpucores");
    piPricingSliders.ramSlider();
    piPricingSliders.diskspaceSlider();
    piPricingSliders.datatransferSlider();
    piPricingSliders.ticks("speedometer");
    piPricingSliders.ticks("speedometer2");
    piPricingSliders.ticks("speedometer3");
    piPricingSliders.ticks("speedometer4");

    var authrequest = {};
    authrequest.api_key = "PI_RHP";
    // authrequest.auth_token = "d4326c59ed44a8b54dc93e02096c6fec3b074bb5dae20d5fc8924b13331b7304";
    // authrequest.customer_id = "000141";
    authrequest.sendserver = $scope.sname;
    $scope.naomi = ['1', '2', '3'];
    debugger;

    $scope.databaseDiskPrice = [];
    pistoreServies.getpriceValues(authrequest).then(function (result) {
      console.log("result is ", result);
      debugger;
      $scope.databaseCpuValues = result['cpu'];
      $scope.databaseRamValues = result['ram'];
      $scope.databaseDiskValues = result['diskspace'];
      $scope.databaseDtValues = result['datatransfer'];
      $scope.databaseOsValues = result['os'];
      $scope.databaseOsValues.unshift(selectdef);
      $scope.databaseDatabaseValues = result['database'];
      $scope.databaseDatabaseValues.unshift(selectdef);
      $scope.databaseIpValues = result['ip'];
      $scope.databaseBackupValues = result['backup'];
      $scope.vpns = result['vpn'];
      $scope.vpns.unshift(selectdef);
      $scope.databaseDiscount = result['discount'];
      $scope.databsetenures = result['tenure'];
      $scope.grandTotalTenureText = "Per Month"
      $scope.plan = result.plan;
      $scope.subplan = result.subplan;
      console.log($scope.databaseDiscount);
      // $scope.$apply();
      $scope.selectTenure = $scope.databsetenures[0];
      $scope.selectIp = $scope.databaseIpValues[0];
      $scope.selectBackUp = $scope.databaseBackupValues[0];
      $scope.selectOs = $scope.databaseOsValues[0];
      $scope.selectDb = $scope.databaseDatabaseValues[0];
      $scope.selectVpn = $scope.vpns[0];
      // $scope.$apply();
      getTotal();

    }, function (error) {
	console.error(error);
    });


    $('#cpucores').on('change', function (event) {
      // var val = parseInt($(this).roundSlider("option", "value"));
      // var rval = parseInt($("#ram").roundSlider("option", "value"));
      // if (val == 1) {
      //   $("#ram").roundSlider("option", "value", 1);
      // } else if (val == 2 || val == 3) {
      //   // debugger;
      //   if ($.inArray(rval, [2, 3]) <= -1) {
      //     $("#ram").roundSlider("option", "value", 2);
      //   }
      // } else if (val == 4) {
      //   if ($.inArray(rval, [3, 4]) <= -1) {
      //     $("#ram").roundSlider("option", "value", 3);
      //   }
      // } else if (val == 5 || val == 6) {
      //   if ($.inArray(rval, [4, 5]) <= -1) {
      //     $("#ram").roundSlider("option", "value", 4);
      //   }
      // }

      debugger;
      // $scope.$apply();      

      // getTotal();
      // changeCpuRam();

      var cval = parseInt($("#cpucores").roundSlider("option", "value"));
      $scope.cpuValues = $scope.databaseCpuValues[cval - 1];

      getTotal();
      $scope.$apply();

    });

    $('#ram').on('change', function (event) {
      // event.preventDefault();

      // var val = parseInt($(this).roundSlider("option", "value"));
      // var cval = parseInt($("#cpucores").roundSlider("option", "value"));
      // if (val == 1) {
      //   $("#cpucores").roundSlider("option", "value", 1);
      // } else if (val == 2 || val == 3) {
      //   if ($.inArray(cval, [2, 3]) <= -1) {
      //     $("#cpucores").roundSlider("option", "value", 2);
      //   }
      // } else if (val == 4) {
      //   if ($.inArray(cval, [4, 5]) <= -1) {
      //     $("#cpucores").roundSlider("option", "value", 4);
      //   }
      // } else if (val == 5) {
      //   if ($.inArray(cval, [5, 6]) <= -1) {
      //     $("#cpucores").roundSlider("option", "value", 5);
      //   }
      // }
      debugger;

      // $scope.$apply();      

      // getTotal();
      // changeCpuRam();

      var rval = parseInt($("#ram").roundSlider("option", "value"));
      $scope.ramValues = $scope.databaseRamValues[rval - 1];

      getTotal();
      $scope.$apply();

    });

    $('#diskspace').on('change', function (event) {
      var val = parseInt($(this).roundSlider("option", "value"));
      $scope.diskSpaceValues = $scope.databaseDiskValues[val - 1];
      getTotal();
      $scope.$apply();
    });

    $('#datatransfer').on('change', function (event) {
      var val = parseInt($(this).roundSlider("option", "value"));
      $scope.dataTransferValues = $scope.databaseDtValues[val - 1];
      getTotal();
      // changeCpuRam();
      $scope.$apply();
    });


    // $scope.oschange = function(selectos){
    //     debugger;
    //   console.log(selectos);
    //   // $scope.chooseos = os;
    // }



    var changeCpuRam = function (val) {
      var cval = parseInt($("#cpucores").roundSlider("option", "value"));
      var rval = parseInt($("#ram").roundSlider("option", "value"));
      $scope.ramValues = $scope.databaseRamValues[rval - 1];
      $scope.cpuValues = $scope.databaseCpuValues[cval - 1];

      getTotal();
      $scope.$apply();
    }
    $scope.changedb = function (db) {
      // alert(db.price+' '+db.database);
      if (db.database == "MS SQL Standard*" || db.database == "MS SQL Enterprise*" || db.database == "MS SQL Web*") {
        $scope.corelicence = true;
        $timeout(function () {
          $scope.corelicence = false;
        }, 4000)
      }
      getTotal();
    }
    $scope.changeOs = function (os) {
      // alert(os.price+' '+os.os);
      getTotal();
    }
    $scope.changeIp = function (ip) {
      // alert(ip.price+' '+ip.ip);
      getTotal();
    }
    // $scope.changeBackUp = function (bu) {
    //   // alert(bu.price+' '+bu.backup);
    //   getTotal();
    // }

    $scope.changeBackUp = function (bu) {
      // alert(bu.price+' '+bu.backup);
      if ($scope.selectBackUp.backup != "0 GB") {
        // $scope.additionaBackUpMessage = " * The price displayed does not include backup license. On completion of purchase of this cloud instance, your service account manager would further assist you.";
        // alert("The price displayed does not include backup license. On completion of purchase of this cloud instance, your service account manager would further assist you.");

        $scope.additionaBackUpMessage = " * The price displayed does not include backup license. Please write to us at sales@pidatacenters.com for purchasing additional backup licenses.";
        alert("The price displayed does not include backup license. Please write to us at sales@pidatacenters.com for purchasing additional backup licenses.");

      } else {
        $scope.additionaBackUpMessage = "";
      }
      getTotal();
    }

    $scope.changeTenure = function (tn) {
      //  console.log(tn);
      if ($scope.selectTenure.name == "1 Month (Monthly Advance)") {
        $scope.grandTotalTenureText = "Per Month"
      } else if ($scope.selectTenure.name == "1 year (Quarterly Advance)") {
        $scope.grandTotalTenureText = "Per Quarter"
      } else if ($scope.selectTenure.name == "1 year (50% Advance)") {
        $scope.grandTotalTenureText = "Per Six Months"
      } else if ($scope.selectTenure.name == "1 year (100% Advance)") {
        $scope.grandTotalTenureText = "Per Year"
      } else if ($scope.selectTenure.name == "2 years (100% Advance)") {
        $scope.grandTotalTenureText = "Per Two Years"
      } else {
        $scope.grandTotalTenureText = "Per Three Years"
      }

      getTotal();
    }

    $scope.changeVpn = function () {
      getTotal();
    }

    $scope.vpnqty = 1;
    $scope.increaseVpnQty = function () {
      $scope.vpnqty > 0 ? $scope.vpnqty += 1 : 1;
      getTotal();
    }
    $scope.decreaseVpnQty = function () {
      $scope.vpnqty > 1 ? $scope.vpnqty -= 1 : 1;
      getTotal();
    }

    var getTotal = function () {
      $scope.cpuPrice = $scope.cpuValues.price || $scope.databaseCpuValues[0].price;
      $scope.ramPrice = $scope.ramValues.price || $scope.databaseRamValues[0].price;
      $scope.diskSpacePrice = $scope.diskSpaceValues.price || $scope.databaseDiskValues[0].price;
      $scope.dataTransferPrice = $scope.dataTransferValues.price || $scope.databaseDtValues[0].price;


      var sendqt = {};
      sendqt.cpu = $scope.cpuValues.cpu || $scope.databaseCpuValues[0].cpu;
      sendqt.ram = $scope.ramValues.ram || $scope.databaseRamValues[0].ram;
      sendqt.diskspace = $scope.diskSpaceValues.diskspace || $scope.databaseDiskValues[0].diskspace;
      sendqt.datatransfer = $scope.dataTransferValues.datatransfer || $scope.databaseDtValues[0].datatransfer;
      sendqt.cpuPrice = $scope.cpuValues.price || $scope.databaseCpuValues[0].price;
      sendqt.ramPrice = $scope.ramValues.price || $scope.databaseRamValues[0].price;
      sendqt.diskSpacePrice = $scope.diskSpaceValues.price || $scope.databaseDiskValues[0].price;
      sendqt.dataTransferPrice = $scope.dataTransferValues.price || $scope.databaseDtValues[0].price;

      sendqt.os = $scope.selectOs.os == "Choose..." ? null : $scope.selectOs.os;
      sendqt.osPrice = $scope.selectOs.price || 0;

      sendqt.database = $scope.selectDb.database == "Choose..." ? null : $scope.selectDb.database;
      sendqt.databasePrice = $scope.selectDb.price || 0;

      sendqt.ip = $scope.selectIp.ip;
      sendqt.IpPrice = $scope.selectIp.price;

      sendqt.backup = $scope.selectBackUp.backup;
      sendqt.backupPrice = $scope.selectBackUp.price;
      sendqt.servername = $scope.sname;

      sendqt.name = $scope.selectTenure.name || $scope.databsetenures[0].name;
      sendqt.tenure = $scope.selectTenure.months || $scope.databsetenures[0].months;
      sendqt.notes = $scope.selectTenure.notes || $scope.databsetenures[0].notes;
      // sendqt.vpn = $scope.selectVpn.vpn;
      sendqt.vpn = $scope.selectVpn.vpn == "Choose..." ? null : $scope.selectVpn.vpn;
      // sendqt.vpnPrice = $scope.selectVpn.price;
      sendqt.vpnPrice = $scope.selectVpn.price * $scope.vpnqty;
      sendqt.vpnqty = $scope.vpnqty;
      $scope.beforeDiscountMonthlycost = Number(sendqt.cpuPrice) + Number(sendqt.ramPrice) + Number(sendqt.diskSpacePrice) + Number(sendqt.dataTransferPrice);


      $scope.getDiscount($scope.selectTenure.months, Number($scope.beforeDiscountMonthlycost));

      $scope.monthlycost = Number($scope.monthlycost) + Number(sendqt.osPrice) + Number(sendqt.databasePrice) + Number(sendqt.IpPrice) + Number(sendqt.backupPrice) + Number(sendqt.vpnPrice);
      $scope.totalMonthlyCost = $scope.monthlycost * Number($scope.selectTenure.months);

      sendqt.beforeDiscountMonthlycost = Number($scope.beforeDiscountMonthlycost);
      sendqt.discount = $scope.discountAmount || 0;
      sendqt.serverdiscount = $scope.databaseDiscount;
      sendqt.promoDiscount = 0;
      sendqt.quantity = 1;
      sendqt.monthlycost = $scope.monthlycost;
      sendqt.plan_price = $scope.totalMonthlyCost;
      sendqt.amount = $scope.totalMonthlyCost;
      sendqt.plan = $scope.plan;
      sendqt.subplan = $scope.subplan;
      sendqt.subcription_period = 0;

      sendqt.additionaBackUpMessage = $scope.additionaBackUpMessage;

      sendqt.grandTotalTenureText = $scope.grandTotalTenureText;

      console.log('sendqt is ', sendqt);
      $scope.displayMonthyCost = $scope.monthlycost;



      return sendqt;
    }





    $scope.getDiscount = function (tenure, beforedeoscount) {
      $scope.monthlycost = beforedeoscount;
      if (tenure > 1) {

        for (i = 0; i <= $scope.databaseDiscount.length - 1; i++) {
          if ($scope.databaseDiscount[i].tenure_in_months == tenure) {
            discountPercentage = $scope.databaseDiscount[i].discount;
          }
        }
        $scope.discountCalc(beforedeoscount, discountPercentage);

      }
    }

    $scope.discountCalc = function (beforedeoscount, discountPercentage) {
      $scope.discountAmount = Number(beforedeoscount) * Number(discountPercentage) * 0.01;
      $scope.afterDiscountMonthlyCost = beforedeoscount - Number($scope.discountAmount);
      $scope.monthlycost = Number($scope.afterDiscountMonthlyCost);
    }
    // $scope.$watch('displayMonthyCost', function (newValue, oldValue) {
    //   alert(newValue);
    //   $scope.displayMonthyCost = Math.round($scope.monthlycost);
    // })
    $scope.addtocart = function () {
      var sndqt = getTotal();
      // console.log('addcart ', sndqt);
      var items = pistoreServies.addcart(sndqt);
      // $rootScope.cartcount = items.length;
      //  console.log(items.length);



      $scope.$emit('callCart');
    }

    /*  $scope.$on('cloudserverscarttenure', function (e, msg) {
        console.log('from cld ', msg);
        debugger;
        var index = msg.message.indexNumber;
        var tn = msg.message.tn;
        $scope.cartItems = pistoreServies.cartList();
        $scope.list = $scope.cartItems[index];
        var disc = $scope.databaseDiscount[index];
        console.log('disc ', $scope.list);
        var beforedeoscount = $scope.list.beforeDiscountMonthlycost;
        var authrequest = {};
        authrequest.api_key = "PI_RHP";
        authrequest.sendserver = 'cloud-servers';

        pistoreServies.getpriceValues(authrequest).then(function (result) {
          $scope.databaseDiscount = result['discount'];

        })



        var discountPercentage = $scope.databaseDiscount;
        console.log('discountPercentage ', discountPercentage);
        $scope.getDiscount(tn.months, beforedeoscount);
        var updateqt = {};
        updateqt.status = 'update';
        updateqt.index = index;
        updateqt.tenure = tn.name;
        updateqt.months = tn.months;
        updateqt.notes = tn.notes;
        updateqt.discountPercentage = discountPercentage;
        updateqt.monthlycost = $scope.monthlycost;
        updateqt.plan_price = Number($scope.monthlycost) * Number(tn.months);

        console.log('updateqt ', updateqt);
        var items = pistoreServies.addcart(updateqt);
      })*/


  }]






  // app.controller('cartDirectiveController', function($scope, pistoreServies){

  //   // console.log(items);
  // })


  var cloudVirtualDecicatedServer = function () {
    return {
      restrict: 'EA',
      controller: "cloudVirtualDedicatedServersController",
      // template: '<ul><li >{{dataSource}}</li></ul> ',          
      scope: {
        servertype: '@',
        sendname: '@',
        // sendBtn: '&',
        dataSource: '='
      },
      // replace: true,
      // transclude: true,
      templateUrl: "views/directives/cloudvirtualservers.html"
    }
  }





  app.controller("cloudVirtualDedicatedServersController", cloudVirtualDedicatedServersController);
  app.directive("cloudVirtualDecicatedServer", cloudVirtualDecicatedServer);

})()