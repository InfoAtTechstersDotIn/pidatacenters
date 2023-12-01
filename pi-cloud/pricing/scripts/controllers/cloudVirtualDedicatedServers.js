(function () {
  var app = angular.module("PiStore");

  var cloudVirtualDedicatedServersController = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", "$timeout", function ($scope, $rootScope, pistoreServies, piPricingSliders, $timeout) {

    //started new code

    var storagename = $scope.servertype;
    console.log(storagename);
    var storagenamessd = storagename + 'ddsticks';
    var storagenameecs = storagename + 'ticks';

    $scope.username = "";
    $scope.useremail = "";
    $scope.userphone = "";
    
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



      var sndqt = {};


      sndqt.drive = $scope.ser[storagename].selectDrive.name;
      sndqt.driveValue = $scope.ser[storagename].selectDrive.value;

      $scope.diskspace = $scope.ser[storagename].selectDiskspace[$scope.val - 1].GB;
      if ($scope.diskspace >= 1000) {
        $scope.diskspace = $scope.diskspace / 1000 + ' TB';
      } else {
        $scope.diskspace = $scope.ser[storagename].selectDiskspace[$scope.val - 1].name;
      }
      sndqt.diskspace = $scope.diskspace;

      sndqt.cpu = $scope.cpuValues.cpu || $scope.databaseCpuValues[1].cpu;
      sndqt.ram = $scope.ramValues.ram || $scope.databaseRamValues[1].ram;
      // sndqt.diskspace = $scope.diskSpaceValues.diskspace || $scope.databaseDiskValues[0].diskspace;
      sndqt.datatransfer = $scope.dataTransferValues.datatransfer || $scope.databaseDtValues[1].datatransfer;
      sndqt.cpuPrice = $scope.cpuValues.price || $scope.databaseCpuValues[1].price;
      sndqt.ramPrice = $scope.ramValues.price || $scope.databaseRamValues[1].price;

      sndqt.name = $scope.ser[storagename].selectTenure.name;
      sndqt.tenurearr = [$scope.ser[storagename].selectTenure];
      sndqt.tenure = $scope.ser[storagename].selectTenure.months;
      sndqt.notes = $scope.ser[storagename].selectTenure.notes;

      var a = $scope.val - 1 || 0;
      var b = $scope.tenureIndex || 0;

      $scope.diskspacePrice = $scope.ser[storagename].selectDiskspace[a].values[b].tenure_price;
      // sndqt.diskSpacePrice = $scope.diskSpaceValues.price || $scope.databaseDiskValues[0].price;
      sndqt.dataTransferPrice = $scope.dataTransferValues.price || $scope.databaseDtValues[1].price;

      sndqt.diskspacePrice = $scope.diskspacePrice;

      sndqt.antivirus = $scope.selectAntiVirus.antivirus_name == "Select" ? null : $scope.selectAntiVirus.antivirus_name;
      sndqt.antiVirusPrice = $scope.selectAntiVirus.price || 0;

      sndqt.os = $scope.selectOs.os == "Select" ? null : $scope.selectOs.os;
      sndqt.osPrice = $scope.selectOs.price || 0;

      sndqt.database = $scope.selectDb.database == "Select" ? null : $scope.selectDb.database;
      sndqt.databasePrice = $scope.selectDb.price || 0;

      sndqt.ip = $scope.selectIp.ip;
      sndqt.IpPrice = $scope.selectIp.price;


      sndqt.dedicatedBw = $scope.selectDedicatedBw.bandwidth;
      sndqt.dedicatedBwPrice = $scope.selectDedicatedBw.price;

      if ($scope.selectBackUpLicence.name == "Select") {

        sndqt.backUpLicense = null;
      } else {

        sndqt.backUpLicense = $scope.selectBackUpLicence.name;
      }


      sndqt.backUpLicensePrice = $scope.selectBackUpLicencePrice;

      sndqt.backup = $scope.selectBackUp.backup;
      sndqt.backupPrice = $scope.selectBackUp.price;
      sndqt.servername = $scope.sname;

      // sndqt.name = $scope.selectTenure.name || $scope.databsetenures[0].name;
      // sndqt.tenure = $scope.selectTenure.months || $scope.databsetenures[0].months;
      // sndqt.notes = $scope.selectTenure.notes || $scope.databsetenures[0].notes;
      // sndqt.vpn = $scope.selectVpn.vpn;
      sndqt.vpn = $scope.selectVpn.vpn == "Select" ? null : $scope.selectVpn.vpn;
      // sndqt.vpnPrice = $scope.selectVpn.price;
      sndqt.vpnPrice = $scope.selectVpn.price * $scope.vpnqty;
      sndqt.vpnqty = $scope.vpnqty;

       sndqt.MRCLicense = $scope.selectMRCLicence.ms_rdp_license == "Select" ? null : $scope.selectMRCLicence.ms_rdp_license;
      sndqt.MRCLicensePrice = $scope.selectMRCLicence.price * $scope.mrcqty;
      sndqt.MRCLicenseqty = $scope.mrcqty;

      sndqt.SSLCertificate = $scope.selectSSLCertificate.ssl_certificate == "Select" ? null : $scope.selectSSLCertificate.ssl_certificate;
      sndqt.SSLCertificatePrice = $scope.selectSSLCertificate.price * $scope.sslqty;
      sndqt.SSLCertificateqty = $scope.sslqty;

      sndqt.Webpanel = $scope.selectWebpanel.web_panel == "Select" ? null : $scope.selectWebpanel.web_panel;
      sndqt.WebpanelPrice = $scope.selectWebpanel.price * $scope.webpanelqty;
      sndqt.Webpanelqty = $scope.webpanelqty;

      sndqt.dedicatedFirewall= $scope.selectDedicatedFirewall.dedicated_firewall == "Select" ? null : $scope.selectDedicatedFirewall.dedicated_firewall;
      sndqt.dedicatedFirewallPrice = $scope.selectDedicatedFirewall.price;
      // sndqt.dedicatedFirewallqty = $scope.dfirewallqty;

      sndqt.TwoFactorAuthentication = $scope.selectTwoFactorAuthentication.two_factor_auth;
      sndqt.TwoFactorAuthenticationPrice = $scope.selectTwoFactorAuthentication.price;

      sndqt.ElasticLoadBalancer = $scope.selectElasticLoadBalancer.elastic_load_balencer;
      sndqt.ElasticLoadBalancerPrice = $scope.selectElasticLoadBalancer.price;

      sndqt.DRReplicationTool = $scope.selectDrreplicationTool.dr_replication_tool; 
      sndqt.DRReplicationToolPrice = $scope.selectDrreplicationTool.price;

      sndqt.MigrationTool = $scope.selectMigrationTool.migration_tool;
      sndqt.MigrationToolOtcPrice = $scope.selectMigrationTool.price_otc;

      $scope.beforeDiscountMonthlycost = Number(sndqt.cpuPrice) + Number(sndqt.ramPrice) + Number($scope.diskspacePrice) + Number(sndqt.dataTransferPrice);


      $scope.getDiscount(Number($scope.ser[storagename].selectTenure.months), Number($scope.beforeDiscountMonthlycost));

      $scope.monthlycost = Number($scope.monthlycost) + Number(sndqt.osPrice) + Number(sndqt.databasePrice) + Number(sndqt.IpPrice) + Number(sndqt.backupPrice) + Number(sndqt.vpnPrice)+ Number(sndqt.MRCLicensePrice) + Number(sndqt.SSLCertificatePrice) +Number(sndqt.WebpanelPrice)+ Number(sndqt.dedicatedFirewallPrice)+Number(sndqt.TwoFactorAuthenticationPrice)+Number(sndqt.ElasticLoadBalancerPrice)+Number(sndqt.DRReplicationToolPrice)+Number(sndqt.backUpLicensePrice) + Number(sndqt.dedicatedBwPrice)+Number(sndqt.antiVirusPrice);
      $scope.totalMonthlyCost = $scope.monthlycost * Number($scope.ser[storagename].selectTenure.months);

      sndqt.beforeDiscountMonthlycost = Number($scope.beforeDiscountMonthlycost);
      sndqt.discount = $scope.discountAmount || 0;
      sndqt.serverdiscount = $scope.databaseDiscount;
      sndqt.promoDiscount = 0;
      sndqt.quantity = 1;
      sndqt.monthlycost = $scope.monthlycost;
      sndqt.plan_price = $scope.totalMonthlyCost;
      sndqt.amount = Number($scope.totalMonthlyCost) + Number($scope.selectMigrationTool.price_otc);
      sndqt.plan = $scope.plan;
      sndqt.subplan = $scope.subplan;
      sndqt.storagediskspace = $scope.ser[storagename].selectDiskspace[a];
      sndqt.subcription_period = 0;

      sndqt.additionaBackUpMessage = $scope.additionaBackUpMessage;

      sndqt.grandTotalTenureText = $scope.grandTotalTenureText;
      sndqt.grandTotalTenurePostText = $scope.grandTotalTenurePostText;

      console.log('sndqt is ', sndqt);
      $scope.displayMonthyCost = $scope.monthlycost;



      return sndqt;
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

    $scope.changeUsername = function (name) {
      $scope.username = name;
    }

    $scope.changeUseremail = function (email) {
      $scope.useremail = email;
    }

    $scope.changeUserphone = function (phone) {
      $scope.userphone = phone;
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

    var validatePhoneNumber = function (phoneNumber) {
      var regex = /^\d{10}$/;
      return regex.test(phoneNumber);
    }

    var validateEmail = function(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }

    $scope.addtocart = function () {

      // $rootScope.cartcount = items.length;
      //  console.log(items.length);

      if ($scope.username == "") {alert('Please Enter name'); return false;};
      if ($scope.userphone == "") {alert('Please Enter phone'); return false;};
      if ($scope.useremail == "") {alert('Please Enter email'); return false;};

      if (!validatePhoneNumber($scope.userphone)) {
        alert('Please Enter a valid phone'); return false;
      }

      if (!validateEmail($scope.useremail)) {
        alert('Please Enter a valid email'); return false;
      }

      if ($scope.selectBackUp.backup > "0 GB" && $scope.selectBackUpLicencePrice == 0.00) {

        alert("Please Select Backup Licence");
      }
      else if($scope.displayMonthyCost ==0){

        alert("Your Cart Value Must Be Greater Than INR 0.00");

      }
      else {
        var sndqt = getTotal();

        const data = {
          'cpu_cors': sndqt.cpu,
          'ram': sndqt.ram,
          'diskspace': sndqt.diskspace,
          'data_transfer': sndqt.datatransfer,
          'operating_system': sndqt.os,
          'storage_type': sndqt.drive,
          'database': sndqt.database,
          'public_ip': sndqt.ip,
          'dedicated_bandwidth': sndqt.dedicatedBw,
          'backup_storage': sndqt.backup,
          'backup_license': sndqt.backUpLicense,
          'antivirus': sndqt.antivirus,
          'tenurearr': sndqt.tenurearr[0].name,
          'two_factor_authentication': sndqt.TwoFactorAuthentication,
          'elastic_load_balancer': sndqt.ElasticLoadBalancer,
          'otc_migration_tool': sndqt.MigrationTool,
          'dr_replication_tool': sndqt.DRReplicationTool,
          'ms_rdp_call_license': sndqt.MRCLicense,
          'ms_rdp_call_license_quantity': sndqt.MRCLicenseqty,
          'web_panel': sndqt.Webpanel,
          'dedicated_firewall': sndqt.dedicatedFirewall,
          'vpn': sndqt.vpn,
          'name': $scope.username,
          'email': $scope.useremail,
          'phone': $scope.userphone,
          'monthly_cost': sndqt.monthlycost
        }

        fetch(`https://pidatacenters.com/pi-cloud/pricing/cloud-server-checkout.php?${new URLSearchParams(data).toString()}`).
        then((result) => {
            alert('Your message is successfully sent. We will get in touch with you soon')
        })

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