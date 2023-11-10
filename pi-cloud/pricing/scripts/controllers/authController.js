(function () {
    var app = angular.module("PiStore");

    var authController = ["$scope", "$rootScope", "pistoreServies", "piPricingSliders", '$q', function ($scope, $rootScope, pistoreServies, piPricingSliders, $q) {
        $scope.reg = {
            "title": "Mr",
            // "first_name": "",
            // "last_name": "",
            // "password": "",
            // "company": "",
            // "email": "m",
            "country_code": "+91"
            // "mobile": "",
        };
        // $scope.reg = {
        //     "title": "Mr",
        //     "first_name": "Pramod",
        //     "last_name": "Kumar",
        //     "password": "123456",
        //     "company": "Pi",
        //     "email": "mpramod@pidatacenters.com",
        //     "country_code": "+91",
        //     "mobile": "5467891324",
        // };
        debugger;
        $scope.address = {};
        // $scope.testaddress = {
        //     "country": "Egypt", 
        //     "state": "Cairo", 
        //     "industry": "Accounting", 
        //     "address_type": "Home/Personal", 
        //     "city": "hyderabad", 
        //     "pincode": "500008" ,
        //     "address":"jhdkjajsda"
        // }
        //$scope.address = $scope.testaddress;
        // var countriesss = pistoreServies.getcountries(); 

        // debugger;
        $scope.countries = function (cntr, stt) {
            if (cntr && stt) {
                $scope.address.country = cntr;
                $scope.address.state = stt;
            }
            pistoreServies.getcountries().then(function (result) {
                debugger;
                $scope.countries = result;

                var cntry = $scope.address.country || "India";

                pistoreServies.getStatesServices(cntry).then(function (result) {
                    debugger;
                    $scope.states = result;
                    $scope.address.state = result[0];
                    if (cntr && stt) {
                        $scope.address.country = cntr;
                        $scope.address.state = stt;
                    }

                }, function (result) {
                    // console.log(result);
                    $scope.originerror = result;
                })
            })
        }

        // console.log('countriesss ', $scope.countries);   



        // $scope.$apply();
        $scope.errormsg = {};
        // $scope.user = {
        //     "email": "mpramod@pidatacenters.com",
        //     "password": "123456"
        // };
        $scope.user = {
            "email": "",
            "password": ""
        };
        $scope.fpass = {};
        $scope.newpass = {};
        $scope.loginBlock = true;
        $scope.loaderDiv = false;

        $scope.login = function (user) {
            // console.log(user);
            $('#mydiv').show();
            $scope.loaderDiv = true;
            $scope.verifyemail = user.email;
            pistoreServies.loginService(user).then(function (result) {
                // console.log('loginresult ', result);
                debugger;
                if (result.status_code == 200) {
                    $scope.errormsg = {};
                    $scope.addressBlock = true;
                    $('#mydiv').hide();
                    $scope.loaderDiv = false;
                    // console.log('address is ', result.user[0].profile.address);
                    $scope.address = result.user[0].profile.address;
                    $scope.countries($scope.address.country, $scope.address.state);

                    $rootScope.msme_limt_details = result.msme_limt_details;
                    // $scope.address = $scope.testaddress;
                    $scope.loginBlock = false;
                    // if (result.address_status == 1) {
                    //     $scope.addressBlock = false;
                    //     $scope.$emit('authcall');
                    //     // $scope.address = result.user;
                    // } else {

                    // }

                }
            }, function (result) {
                // console.log(result);
                   $('#mydiv').hide();
                    $scope.loaderDiv = false;

                if (result.data.status_code == 401) {
                    $scope.loginBlock = false;
                    $scope.verifyCode = true;
                    $scope.codeverify.email = $scope.verifyemail;
                    // $scope.errormsg.verifyerror = errorCode.verification;
                } else {
                    var loginError = result.data.error;
                    $scope.errormsg.showloginError = loginError.message;
                }

            })
        }
        $scope.register = function (reg) {
            // console.log(reg);
            $('#mydiv').show();
            $scope.loaderDiv = true;
            // return false;
            pistoreServies.regService(reg).then(function (result) {
                // console.log('regresult ', result);
                if (result.status_code == 201) {
                    $('#mydiv').hide();
                    $scope.loaderDiv = false;
                    $scope.regBlock = false;
                    // $scope.loginBlock = true;
                    $scope.errormsg = {};
                    $scope.errormsg.verifymail = result.message;
                    $scope.verifyCode = true;
                    $scope.codeverify.email = reg.email;
                    $scope.verifyemail = reg.email;
                    // $scope.mobileerror = '';
                    // $scope.showVerify = true;
                }
            }, function (result) {
                $('#mydiv').hide();
                $scope.loaderDiv = false;
                // console.log('error ', result); 
                debugger;
                var errorCode = result.data.error.errors;
                // else{
                // $scope.errormsg.emailerror = errorCode.email[0];
                // $scope.errormsg.mobileerror = errorCode.mobile[0];
                $scope.errormsg.emailerror = errorCode.email;
                $scope.errormsg.mobileerror = errorCode.mobile;
                // }



            })
        }

        $scope.getStates = function (state) {
            // console.log(state);
            $scope.states = {};
            $scope.originerror = '';
            pistoreServies.getStatesServices(state).then(function (result) {
                debugger;
                $scope.states = result;
                $scope.address.state = result[0];
            }, function (result) {
                // console.log(result);
                $scope.originerror = result;
            })
        }

        $scope.addressSubmit = function (address) {
            // console.log(address);
            $('#mydiv').show();
            $scope.loaderDiv = true;
            pistoreServies.addressServices(address).then(function (result) {
                debugger;
                // console.log(result);
                $scope.$emit('authcall');
                $('#mydiv').hide();
                $scope.loaderDiv = false;
            })
        }

        $scope.sendmail = function (mail) {
            debugger;
            $('#mydiv').show();
            $scope.loaderDiv = true;
            pistoreServies.forgotServices(mail).then(function (result) {
                $scope.newpassBlock = true;
                $scope.forgotBlock = false;
                $scope.newpass.email = mail.email;
                $('#mydiv').hide();
                $scope.loaderDiv = false;
            }, function () {
                alert("Something went wrong.");
                $('#mydiv').hide();
                $scope.loaderDiv = false;
            })
        }

        $scope.createpassword = function (cpass) {
                $('#mydiv').show();
                $scope.loaderDiv = true;
            debugger;
            pistoreServies.cpassServices(cpass).then(function (result) {
                // $scope.newpassBlock = false;
                // $scope.loginBlock = true;
                // $scope.newpass = {};

                if (result.status == "err" && result.message == "Verification Failed") {
                    alert("Please check your verification code");
                } else {
                    $scope.newpassBlock = false;
                    $scope.loginBlock = true;
                    $scope.newpass = {};
                }
                    $('#mydiv').hide();
                    $scope.loaderDiv = false;

            }, function () {
                    $('#mydiv').hide();
                    $scope.loaderDiv = false;
                alert("Something went wrong.");
            })
        }
        $scope.codeverify = {};
        $scope.regCodeverify = function (codeverify) {
            codeverify.email = $scope.verifyemail;
            $('#mydiv').show();
            $scope.loaderDiv = true;
            pistoreServies.verifyRegCodeServices(codeverify).then(function (result) {
                // console.log('vcnf', result);
                $scope.verifyCode = false;
                $scope.loginBlock = true;
                $scope.codeverify = {};
                $('#mydiv').hide();
                $scope.loaderDiv = false;
            }, function (result) {
                // console.log('vccccnf', result);
                // $scope.codeverify = {};
                alert("Something went wrong.");
                $('#mydiv').hide();
                $scope.loaderDiv = false;
            })
        }

        $scope.resendCode = function (codeverify) {
            pistoreServies.resendCodeServces(codeverify).then(function (result) {

            })
        }


        $scope.closePopup = function () {
            $scope.$emit('authcall');
        }

    }]

    var authontication = function () {
        return {
            restrict: 'EA',
            controller: "authController",
            scope: {
                servertype: '@',
                sendname: '@',
                dataSource: '='
            },
            replace: false,
            // transclude: true,
            templateUrl: "views/directives/auth.html"
        }
    }


    app.controller("authController", authController);
    app.directive("authontication", authontication);
})()