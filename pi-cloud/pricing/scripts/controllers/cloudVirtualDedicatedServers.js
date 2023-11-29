(function () {
  var app = angular.module("PiStore");

  var cloudVirtualDedicatedServersController = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", "$timeout", function ($scope, $rootScope, pistoreServies, piPricingSliders, $timeout) {

    //started new code

    var storagename = $scope.servertype;
    console.log(storagename);
    var storagenamessd = storagename + 'ddsticks';
    var storagenameecs = storagename + 'ticks';

    
    $scope.disableSelect=false;

    setTimeout(function () {
      piPricingSliders.ecsSlider();
      piPricingSliders.ddsSlider();
      piPricingSliders.ddsSsdSlider();
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
        if (storagename == "cloud-servers") {
          var val = parseInt($(this).roundSlider("option", "value"));
          $scope.discspaceValues = $scope.databaseDsValues[val - 1];
          $scope.val = Number(val);
          getTotal();
          $scope.$apply();
        } else {
          var val = parseInt($(this).roundSlider("option", "value"));
          $scope.discspaceValues = $scope.databaseDsValues[val - 1];
          $scope.val = Number(val);
          getTotal();
          $scope.$apply();
        }

      });
      $("#ddsSsd").on('change', function (event) {
        if (storagename == "cloud-servers") {
          var val = parseInt($(this).roundSlider("option", "value"));
          $scope.discspaceValues = $scope.databaseDsValues[val - 1];
          $scope.val = Number(val);
          getTotal();
          $scope.$apply();
        } else {
          var val = parseInt($(this).roundSlider("option", "value"));
          $scope.discspaceValues = $scope.databaseDsValues[val - 1];
          $scope.val = Number(val);
          getTotal();
          $scope.$apply();
        }

      });
    }, 500)



    $scope.drivesList = [
      {
        "name": "SAS 10K",
        "value": "SAS_10k",
        "storage": "cloud-servers"
      },
      {
        "name": "SSD",
        "value": "SSD",
        "storage": "cloud-servers"
      }

    ]

    $scope.backUpLicenseList = [
      {
        "name": "Select",
        "price": "0.00"
      },
      {
        "name": "VM Level",
        "price": "950.00"
      },
      {
        "name": "File/Folder",
        "price": "900.00"
      },
      {
        "name": "Database Level",
        "price": "950.00"
      }
    ]

    $scope.selectBackUpLicence = $scope.backUpLicenseList[0];

  
    $scope.shouldShow = function (drivesList) {
      return drivesList.storage == storagename;
    }

    $scope.ser = [];
    $scope.ser[storagename] = {};
    if ($scope.servertype == "cloud-servers") {
      $scope.selectDrive = $scope.drivesList[0];
      $scope.ser[storagename].selectDrive = $scope.selectDrive;
    } else {
      $scope.selectDrive = $scope.drivesList[0];
      $scope.ser[storagename].selectDrive = $scope.selectDrive;

    }




    $scope.changeDrive = function (driveDetails) {
      // $scope.ser[storagename].selectDiskspace = $scope.databaseDiskValues[driveDetails.value];
      // getTotal();
      $scope.ser[storagename].selectDrive = driveDetails;

      if ($scope.ser[storagename].selectDrive.name == "SATA 7.2K") {
        $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
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
          max: 15,
          step: 1,
          startAngle: 317,
          endAngle: "+268",
          value: 0,

          tooltipFormat: function (e) {
            var months = ["0", "<span class='sliderinnertext1'> 50</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 100</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 200</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 300</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 400</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 500</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 600</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 700</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 800</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 900</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 1000</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 2000</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 3000</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 4000</span><sup>GB</sup>",
              "<span class='sliderinnertext1'> 5000</span><sup>GB</sup>"
            ];

            return months[e.value];
          }
        });
        getTotal();

      } else if ($scope.ser[storagename].selectDrive.name == "SAS 10K") {
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
          value:2,
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

      } else {
        $scope.ser[storagename].selectDiskspace = $scope.databaseDsValues[driveDetails.value];
        $scope.diskspace = $scope.ser[storagename].selectDiskspace

        var val = 2;
        $scope.val = Number(val);

        console.log("dsfhddfdsf dsfhdsjfhdf");

        $("#ddsSsd").roundSlider({
          sliderType: "min-range",
          editableTooltip: false,
          handleShape: "round",
          width: 7,
          handleSize: 15,
          radius: "83",
          min: 1,
          max: 19,
          value:2,
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

    //ended new code


    $scope.sname = $scope.servertype;
    $scope.sentname = $scope.sendname;
    $scope.cpuValues = $scope.ramValues = $scope.diskSpaceValues = $scope.dataTransferValues =
      $scope.selectOs = $scope.selectDb = $scope.selectIp = $scope.selectTwoFactorAuthentication = $scope.selectElasticLoadBalancer  = $scope.selectDrreplicationTool=$scope.selectMigrationTool=$scope.selectBackUp = {};
    var selectdef = {
      os: "Select",
      price: "0",
      database: "Select",
      vpn: "Select",
      ms_rdp_license: "Select",
      ssl_certificate: "Select",
      web_panel:"Select",
      dedicated_firewall:"Select",
      migration_tool:'Select',
     antivirus_name:"Select"
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

    // $("#datatransfer").roundSlider("disable");

    var authrequest = {};
    authrequest.api_key = "PI_RHP";
    // authrequest.auth_token = "d4326c59ed44a8b54dc93e02096c6fec3b074bb5dae20d5fc8924b13331b7304";
    // authrequest.customer_id = "000141";
    authrequest.sendserver = $scope.sname;
    $scope.naomi = ['1', '2', '3'];
    // debugger;

    $scope.databaseDiskPrice = [];
    pistoreServies.getpriceValues(authrequest).then(function (result) {
      console.log("result isasdasf ", JSON.stringify(result));
      // debugger;
      $scope.databaseCpuValues = result['cpu'];
      $scope.databaseRamValues = result['ram'];
      $scope.databaseDiskValues = result['diskspace'];
      $scope.databaseDsValues = result.diskspace_cs_vd;
      $scope.databaseDtValues = result['datatransfer'];
      $scope.databaseOsValues = result['os'];
      $scope.databaseOsValues.unshift(selectdef);
      $scope.databaseDatabaseValues = result['database'];
      $scope.databaseDatabaseValues.unshift(selectdef);
      $scope.databaseIpValues = result['ip'];
      $scope.databaseBackupValues = result['backup'];
      $scope.vpns = result['vpn'];
      $scope.vpns.unshift(selectdef);

      $scope.MRCLList=result['ms_rdp_cal_license'];
      $scope.MRCLList.unshift(selectdef);

      $scope.SSLCertificateValues=result['ssl_certificate'];
      $scope.SSLCertificateValues.unshift(selectdef);

      $scope.WebpannelValues=result['web_panel'];
      $scope.WebpannelValues.unshift(selectdef);

      $scope.DedicatedFirewallValues=result['dedicated_firewall'];
      $scope.DedicatedFirewallValues.unshift(selectdef);

      $scope.DrreplicationValues = result['dr_replication_tool'];
      $scope.TwoFactorAuthenticationValues = result['two_factor_authentication'];
      $scope.ElastiCLoadBalencerValues = result['elastic_load_balencer'];
      $scope.MigrationToolValues = result['migration_tool'];


      $scope.dedicatedBandwidthValues = result['dedicatedbw'];

     $scope.antivirusValues=result['antivirus'];
      $scope.antivirusValues.unshift(selectdef);

      $scope.databaseDiscount = result['discount'];
      $scope.databsetenures = result['tenure'];
      $scope.grandTotalTenureText = "Grand Total Payable for first 3 months";
      $scope.grandTotalTenurePostText = "Grand Total Payable for post 3 months"
      $scope.plan = result.plan;
      $scope.subplan = result.subplan;
      console.log($scope.databaseDiscount);
      // $scope.$apply();
      $scope.selectTenure = $scope.databsetenures[0];
      $scope.ser[storagename].selectTenure = $scope.selectTenure;

      $scope.selectIp = $scope.databaseIpValues[0];
      $scope.selectBackUp = $scope.databaseBackupValues[0];
      $scope.selectOs = $scope.databaseOsValues[0];
      $scope.selectDb = $scope.databaseDatabaseValues[0];
      $scope.selectVpn = $scope.vpns[0];
      $scope.selectMRCLicence=$scope.MRCLList[0];
      $scope.selectSSLCertificate=$scope.SSLCertificateValues[0];
      $scope.selectWebpanel=$scope.WebpannelValues[0];
      $scope.selectDedicatedFirewall=$scope.DedicatedFirewallValues[0];
      $scope.selectDrreplicationTool = $scope.DrreplicationValues[0];
      $scope.selectTwoFactorAuthentication = $scope.TwoFactorAuthenticationValues[0];
      $scope.selectElasticLoadBalancer = $scope.ElastiCLoadBalencerValues[0];
      $scope.selectMigrationTool = $scope.MigrationToolValues[0];
      $scope.selectDedicatedBw = $scope.dedicatedBandwidthValues[0];

     $scope.selectAntiVirus=$scope.antivirusValues[0];

      $scope.val = 1;
      $scope.tenureIndex = 0;
      $scope.changeDrive($scope.selectDrive);
      // $scope.$apply();
      getTotal();

    });


    $('#cpucores').on('change', function (event) {
      // var val = parseInt($(this).roundSlider("option", "value"));
      // var rval = parseInt($("#ram").roundSlider("option", "value"));
      // if (val == 1) {
      //   $("#ram").roundSlider("option", "value", 1);
      // } else if (val == 2 || val == 3) {
      //   // // debugger;
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
      // // debugger;
      // // $scope.$apply();      
      // getTotal();
      // changeCpuRam();
      // // $scope.$apply();

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
      // // debugger;

      // // $scope.$apply();      
      // getTotal();
      // changeCpuRam();

      var rval = parseInt($("#ram").roundSlider("option", "value"));
      $scope.ramValues = $scope.databaseRamValues[rval - 1];
      getTotal();
      $scope.$apply();

    });

    // $('#diskspace').on('change', function (event) {
    //   var val = parseInt($(this).roundSlider("option", "value"));
    //   $scope.diskSpaceValues = $scope.databaseDiskValues[val - 1];
    //   getTotal();
    //   $scope.$apply();
    // });


    $('#datatransfer').on('change', function (event) {
      
      var val = parseInt($(this).roundSlider("option", "value"));

      // if(val >1){
      //   $scope.disableSelect=true;
      // }
      // else if(val ==1){
      //   $scope.disableSelect=false; 
      // }

      $scope.dataTransferValues = $scope.databaseDtValues[val - 1];
      getTotal();
      // changeCpuRam();
      $scope.$apply();
    });


    // $scope.oschange = function(selectos){
    //     // debugger;
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

    $scope.changeDedicatedBw = function (dedicatedBw) {

      // if(dedicatedBw.bandwidth >"0 Mbps"){
      //   $("#datatransfer").roundSlider("disable"); 
      // }
      //  else if(dedicatedBw.bandwidth =="0 Mbps"){
      //   $("#datatransfer").roundSlider("enable"); 
      // }

      getTotal();
    }

    // $scope.selectBackUpLicencePrice=$scope.selectBackUpLicence.price;

    $scope.changeBackUpLicence = function (ip) {
      getTotal();
    }


    // $scope.changeBackUp = function (bu) {
    //   // alert(bu.price+' '+bu.backup);
    //   getTotal();
    // }

    $scope.changeBackUp = function (bu) {
      // alert(bu.price+' '+bu.backup);
           if ($scope.selectBackUp.backup == "0 GB") {
        $scope.backUpLicenseList = [
          {
            "name": "Select",
            "price": "0.00"
          },
          {
            "name": "VM Level",
            "price": "950.00"
          },
          {
            "name": "File/Folder",
            "price": "900.00"
          },
          {
            "name": "Database Level",
            "price": "950.00"
          }
        ]

        $scope.selectBackUpLicence = $scope.backUpLicenseList[0];
      }
      else {
        $scope.additionaBackUpMessage = "";
      }
      getTotal();
    }

    $scope.changeTenure = function (ser) {
      // debugger;
      $scope.ser[storagename].selectTenure = ser

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

      $scope.tenureIndex = $scope.databsetenures.indexOf(ser);
      var tenureIndex = $scope.tenureIndex;

      // shortCode(ser, tenureIndex);            
      getTotal();


    }

    $scope.changeVpn = function () {
      getTotal();
    }

    $scope.changeMRCLicence = function () {
      getTotal();
    }

    $scope.changeSSLCertificate=function(){
      getTotal();
    }

    $scope.changeWebpanel=function(){
      getTotal(); 
    }

    $scope.changeDedicatedFirewall=function(){
      getTotal(); 
    }

    $scope.changeTFA=function(){
      getTotal(); 
    }

    $scope.changeELB=function(){
      getTotal(); 
    }

    $scope.changeDRRT=function(){
      getTotal(); 
    }

    $scope.changeMGT=function(){
      getTotal(); 
    }


 $scope.changeAntiVirus = function () {
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

    $scope.mrcqty = 1;
    $scope.increaseMrcQty = function () {
      $scope.mrcqty > 0 ? $scope.mrcqty += 1 : 1;
      getTotal();
    }
    $scope.decreaseMrcQty = function () {
      $scope.mrcqty > 1 ? $scope.mrcqty -= 1 : 1;
      getTotal();
    }

    $scope.sslqty = 1;
    $scope.increaseSSLQty = function () {
      $scope.sslqty > 0 ? $scope.sslqty += 1 : 1;
      getTotal();
    }
    $scope.decreaseSSLQty = function () {
      $scope.sslqty > 1 ? $scope.sslqty -= 1 : 1;
      getTotal();
    }

    $scope.webpanelqty = 1;
    $scope.increaseWebPanelQty = function () {
      $scope.webpanelqty > 0 ? $scope.webpanelqty += 1 : 1;
      getTotal();
    }
    $scope.decreaseWebPanelQty = function () {
      $scope.webpanelqty > 1 ? $scope.webpanelqty -= 1 : 1;
      getTotal();
    }

    // $scope.dfirewallqty = 1;
    // $scope.increaseDFirewallQty = function () {
    //   $scope.dfirewallqty > 0 ? $scope.dfirewallqty += 1 : 1;
    //   getTotal();
    // }
    // $scope.decreaseDFirewallQty = function () {
    //   $scope.dfirewallqty > 1 ? $scope.dfirewallqty -= 1 : 1;
    //   getTotal();
    // }

    var getTotal = function () {

      // debugger;

      $scope.cpuPrice = $scope.cpuValues.price || $scope.databaseCpuValues[1].price;
      $scope.ramPrice = $scope.ramValues.price || $scope.databaseRamValues[1].price;
      $scope.diskSpacePrice = $scope.diskSpaceValues.price || $scope.databaseDiskValues[1].price;
      $scope.dataTransferPrice = $scope.dataTransferValues.price || $scope.databaseDtValues[1].price;

      $scope.selectBackUpLicencePrice = $scope.selectBackUpLicence.price;



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

      sendqt.cpu = $scope.cpuValues.cpu || $scope.databaseCpuValues[1].cpu;
      sendqt.ram = $scope.ramValues.ram || $scope.databaseRamValues[1].ram;
      // sendqt.diskspace = $scope.diskSpaceValues.diskspace || $scope.databaseDiskValues[0].diskspace;
      sendqt.datatransfer = $scope.dataTransferValues.datatransfer || $scope.databaseDtValues[1].datatransfer;
      sendqt.cpuPrice = $scope.cpuValues.price || $scope.databaseCpuValues[1].price;
      sendqt.ramPrice = $scope.ramValues.price || $scope.databaseRamValues[1].price;

      sendqt.name = $scope.ser[storagename].selectTenure.name;
      sendqt.tenurearr = [$scope.ser[storagename].selectTenure];
      sendqt.tenure = $scope.ser[storagename].selectTenure.months;
      sendqt.notes = $scope.ser[storagename].selectTenure.notes;

      var a = $scope.val - 1 || 0;
      var b = $scope.tenureIndex || 0;

      $scope.diskspacePrice = $scope.ser[storagename].selectDiskspace[a].values[b].tenure_price;
      // sendqt.diskSpacePrice = $scope.diskSpaceValues.price || $scope.databaseDiskValues[0].price;
      sendqt.dataTransferPrice = $scope.dataTransferValues.price || $scope.databaseDtValues[1].price;

      sendqt.diskspacePrice = $scope.diskspacePrice;

      sendqt.antivirus = $scope.selectAntiVirus.antivirus_name == "Select" ? null : $scope.selectAntiVirus.antivirus_name;
      sendqt.antiVirusPrice = $scope.selectAntiVirus.price || 0;

      sendqt.os = $scope.selectOs.os == "Select" ? null : $scope.selectOs.os;
      sendqt.osPrice = $scope.selectOs.price || 0;

      sendqt.database = $scope.selectDb.database == "Select" ? null : $scope.selectDb.database;
      sendqt.databasePrice = $scope.selectDb.price || 0;

      sendqt.ip = $scope.selectIp.ip;
      sendqt.IpPrice = $scope.selectIp.price;


      sendqt.dedicatedBw = $scope.selectDedicatedBw.bandwidth;
      sendqt.dedicatedBwPrice = $scope.selectDedicatedBw.price;

      if ($scope.selectBackUpLicence.name == "Select") {

        sendqt.backUpLicense = null;
      } else {

        sendqt.backUpLicense = $scope.selectBackUpLicence.name;
      }


      sendqt.backUpLicensePrice = $scope.selectBackUpLicencePrice;

      sendqt.backup = $scope.selectBackUp.backup;
      sendqt.backupPrice = $scope.selectBackUp.price;
      sendqt.servername = $scope.sname;

      // sendqt.name = $scope.selectTenure.name || $scope.databsetenures[0].name;
      // sendqt.tenure = $scope.selectTenure.months || $scope.databsetenures[0].months;
      // sendqt.notes = $scope.selectTenure.notes || $scope.databsetenures[0].notes;
      // sendqt.vpn = $scope.selectVpn.vpn;
      sendqt.vpn = $scope.selectVpn.vpn == "Select" ? null : $scope.selectVpn.vpn;
      // sendqt.vpnPrice = $scope.selectVpn.price;
      sendqt.vpnPrice = $scope.selectVpn.price * $scope.vpnqty;
      sendqt.vpnqty = $scope.vpnqty;

       sendqt.MRCLicense = $scope.selectMRCLicence.ms_rdp_license == "Select" ? null : $scope.selectMRCLicence.ms_rdp_license;
      sendqt.MRCLicensePrice = $scope.selectMRCLicence.price * $scope.mrcqty;
      sendqt.MRCLicenseqty = $scope.mrcqty;

      sendqt.SSLCertificate = $scope.selectSSLCertificate.ssl_certificate == "Select" ? null : $scope.selectSSLCertificate.ssl_certificate;
      sendqt.SSLCertificatePrice = $scope.selectSSLCertificate.price * $scope.sslqty;
      sendqt.SSLCertificateqty = $scope.sslqty;

      sendqt.Webpanel = $scope.selectWebpanel.web_panel == "Select" ? null : $scope.selectWebpanel.web_panel;
      sendqt.WebpanelPrice = $scope.selectWebpanel.price * $scope.webpanelqty;
      sendqt.Webpanelqty = $scope.webpanelqty;

      sendqt.dedicatedFirewall= $scope.selectDedicatedFirewall.dedicated_firewall == "Select" ? null : $scope.selectDedicatedFirewall.dedicated_firewall;
      sendqt.dedicatedFirewallPrice = $scope.selectDedicatedFirewall.price;
      // sendqt.dedicatedFirewallqty = $scope.dfirewallqty;

      sendqt.TwoFactorAuthentication = $scope.selectTwoFactorAuthentication.two_factor_auth;
      sendqt.TwoFactorAuthenticationPrice = $scope.selectTwoFactorAuthentication.price;

      sendqt.ElasticLoadBalancer = $scope.selectElasticLoadBalancer.elastic_load_balencer;
      sendqt.ElasticLoadBalancerPrice = $scope.selectElasticLoadBalancer.price;

      sendqt.DRReplicationTool = $scope.selectDrreplicationTool.dr_replication_tool; 
      sendqt.DRReplicationToolPrice = $scope.selectDrreplicationTool.price;

      sendqt.MigrationTool = $scope.selectMigrationTool.migration_tool;
      sendqt.MigrationToolOtcPrice = $scope.selectMigrationTool.price_otc;

      $scope.beforeDiscountMonthlycost = Number(sendqt.cpuPrice) + Number(sendqt.ramPrice) + Number($scope.diskspacePrice) + Number(sendqt.dataTransferPrice);


      $scope.getDiscount(Number($scope.ser[storagename].selectTenure.months), Number($scope.beforeDiscountMonthlycost));

      $scope.monthlycost = Number($scope.monthlycost) + Number(sendqt.osPrice) + Number(sendqt.databasePrice) + Number(sendqt.IpPrice) + Number(sendqt.backupPrice) + Number(sendqt.vpnPrice)+ Number(sendqt.MRCLicensePrice) + Number(sendqt.SSLCertificatePrice) +Number(sendqt.WebpanelPrice)+ Number(sendqt.dedicatedFirewallPrice)+Number(sendqt.TwoFactorAuthenticationPrice)+Number(sendqt.ElasticLoadBalancerPrice)+Number(sendqt.DRReplicationToolPrice)+Number(sendqt.backUpLicensePrice) + Number(sendqt.dedicatedBwPrice)+Number(sendqt.antiVirusPrice);
      $scope.totalMonthlyCost = $scope.monthlycost * Number($scope.ser[storagename].selectTenure.months);

      sendqt.beforeDiscountMonthlycost = Number($scope.beforeDiscountMonthlycost);
      sendqt.discount = $scope.discountAmount || 0;
      sendqt.serverdiscount = $scope.databaseDiscount;
      sendqt.promoDiscount = 0;
      sendqt.quantity = 1;
      sendqt.monthlycost = $scope.monthlycost;
      sendqt.plan_price = $scope.totalMonthlyCost;
      sendqt.amount = Number($scope.totalMonthlyCost) + Number($scope.selectMigrationTool.price_otc);
      sendqt.plan = $scope.plan;
      sendqt.subplan = $scope.subplan;
      sendqt.storagediskspace = $scope.ser[storagename].selectDiskspace[a];
      sendqt.subcription_period = 0;

      sendqt.additionaBackUpMessage = $scope.additionaBackUpMessage;

      sendqt.grandTotalTenureText = $scope.grandTotalTenureText;
      sendqt.grandTotalTenurePostText = $scope.grandTotalTenurePostText;

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

      // $rootScope.cartcount = items.length;
      //  console.log(items.length);

      console.log("monthly cost issssssssss"+ $scope.displayMonthyCost)

      if ($scope.selectBackUp.backup > "0 GB" && $scope.selectBackUpLicencePrice == 0.00) {

        alert("Please Select Backup Licence");
      }
      else if($scope.displayMonthyCost ==0){

        alert("Your Cart Value Must Be Greater Than INR 0.00");

      }

      // else if($scope.displayMonthyCost >50000){

      //   alert("hsdajdhajsdh asskdjksjdksj dksklksaldklak");

      // }
      else {
        var sndqt = getTotal();
        // console.log('addcart ', sndqt);
        var items = pistoreServies.addcart(sndqt);
        $scope.$emit('callCart');
      }


    }

    $scope.closecart = function () {

      $scope.sideCart = false;
    }

    

    /*  $scope.$on('cloudserverscarttenure', function (e, msg) {
        console.log('from cld ', msg);
        // debugger;
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