(function () {
  var app = angular.module("PiStore");

  app.factory('pistoreServies', ['$http', '$q', function ($http, $q) {
    var piService = {};
    var cartItems = [];


    var host = 'https://pricing.pidatacenters.com/priceimport/webservices/public/api/';
    var authhost = "https://pricing.pidatacenters.com/priceimport/webservices/public/api/auth/";

     // var host = 'https://103.210.73.84/priceimport/webservices/public/api/';
    //  var authhost = "https://103.210.73.84/priceimport/webservices/public/api/auth/";

    // var host = 'http://pidatacenters.in/in/apicalls/restful/index.php/getprice/';
    // var host = '../priceimport/webservices/public/api/';
    // var authhost = "../priceimport/webservices/public/api/auth/";
    var config = {
      headers: {
        // 'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3BpZGF0YWNlbnRlcnMuaW5cL2luXC9wcmljZWltcG9ydFwvaW1wb3J0XC93ZWJzZXJ2aWNlXC9wdWJsaWNcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1MDkzNTk3NjMsImV4cCI6MTUwOTM2MzM2MywibmJmIjoxNTA5MzU5NzYzLCJqdGkiOiIyZThiOTc2NzI5NjAxMzhlOGMyZmU0OWQ4NjQyOTcyNyJ9.1ZiwBntFPE-_R_ar7P58sARA1TDAig6_wx-bkEc5TOU'
      }
    };
    // var config = {
    //   headers: {
    //     'Content-Type': 'application/x-www-form-urlencoded'
    //   }
    // };
   
piService.getpriceValues = function (data) {
      var server = data.sendserver;
      data = JSON.stringify(data);
      //   console.log(data);
      return $http.get(host + 'pricing/' + server, data).then(function (response) {
        //  console.log(response.data);
        return response.data.message;
      })
    }


    piService.addcart = function (data) {
      // data = JSON.stringify(data);
      debugger;
      var local = localStorage.getItem('localStorageCart');
      if (data.status == 'update') {
        local = JSON.parse(local);
        // console.log('updatecart ', data);
        local[data.index].tenure = data.tenure;
        local[data.index].months = data.months;
        local[data.index].notes = data.notes;
        local[data.index].monthlycost = data.monthlycost;
        local[data.index].plan_price = data.plan_price;
        var lol = local[data.index];
        // console.log('update ', lol);
        cartItems = local;
        localStorage.removeItem("localStorageCart");
      } else {
        if (local) {
          local = JSON.parse(local);
          // console.log('local ', local);
          localStorage.removeItem("localStorageCart");
          local.push(data);
          cartItems = local;
        } else {
          cartItems.push(data);
        }
      }

      // console.log('service ', cartItems);
      localStorage.setItem('localStorageCart', JSON.stringify(cartItems));
      // return cartItems;
    }

    piService.removeItemCart = function (data) {
      debugger;
      // console.log('remove ', data);
      // cartItems.length = 0;
      cartItems = data;
      localStorage.removeItem("localStorageCart");
      localStorage.setItem('localStorageCart', JSON.stringify(cartItems));
      return cartItems;
    }
    piService.cartList = function () {
      // console.log(config.headers);

      var list = cartItems;
      var crlist = localStorage.localStorageCart;
      // console.log('locl ', crlist);
      if (crlist) {
        crlist = JSON.parse(crlist);
      }
      return crlist;
    }
    piService.auth = function () {
      return "failed";
    }
    piService.loginService = function (data) {
      var jsondata = JSON.stringify(data);
      return $http.post(authhost + 'login', jsondata).then(function (response) {
        localStorage.setItem('userdetails', JSON.stringify(response.data));
        var settkn = "Bearer " + response.data.token
        localStorage.setItem('refresh_token', settkn);
        return response.data;
      })
    }
    piService.regService = function (data) {
      // var jsondata = JSON.stringify(data);
      return $http.post(authhost + 'signupweb', data).then(function (response) { 
        debugger;
        return response.data;
      })
    }
    var pop = [];
    piService.getcountries = function () {
      debugger;
      var authToken = localStorage.getItem('refresh_token');
      // // console.log(authToken);
      // authToken = JSON.parse(authToken);
      if (authToken) {
        config.headers.Authorization = authToken;
      }
      debugger;
      // console.log('config ', config);
      return $http.get(host + 'countries', config).then(function (response) {
        debugger;
        // console.log(response);
        return response.data;
        // return pop;
      })
    }

    piService.getStatesServices = function (state) {
      var authToken = localStorage.getItem('refresh_token');
      // console.log(authToken);
      // authToken = JSON.parse(authToken);
      if (authToken) {
        config.headers.Authorization = authToken;
      }

      var send = {};
      send.country_name = state;

      return $http.post(host + 'states', send, config).then(function (response) {
        debugger;
        return response.data;
      })
    }

    piService.addressServices = function (address) {
      debugger;
      var authToken = localStorage.getItem('refresh_token');
      // console.log(authToken);
      // authToken = JSON.parse(authToken);
      if (authToken) {
        config.headers.Authorization = authToken;
      }

      return $http.post(host + 'user/address', address, config).then(function (response) {
        debugger;
        return response.data;
      })
    }

    piService.forgotServices = function (mail) {

      return $http.post(host + 'auth/recovery', mail).then(function (response) {
        debugger;
        return response.data;
      })
    }
    piService.cpassServices = function (cpass) {

      return $http.post(host + 'auth/forgot-password', cpass).then(function (response) {
        debugger;
        return response.data;
      })
    }

    piService.getPrchaged = function (oId) {
      return $http.get(host + 'order/' + oId).then(function (response) {
        debugger;
        return response.data;
      })
    }
    piService.getquote = function (qt) {
      return $http.post(host + 'get-quote', qt).then(function (response) {
        return response.data;
      })
    }

    piService.verifyRegCodeServices = function (rcode) {
      return $http.post(host + 'auth/verification', rcode).then(function (response) {
        debugger;
        return response.data;
      })
    }



    var paymentId = '';
    piService.paymentServices = function (fcart) {
      debugger;
      var authToken = localStorage.getItem('refresh_token');
      // authToken = JSON.parse(authToken);
      if (authToken) {
        config.headers.Authorization = authToken;
      }
      debugger;
      // var pyatn = piService.getToken();

      // if(pyatn != authToken){
      //   // console.log('not same');
      // }else{
      //   console.log('same same');
      // }

      return $http.post(host + 'checkout', fcart, config).then(function (response) {
        // console.log('fcart ', response);
        // alert(response.data.id);
        paymentId = response.data.id;
        // piService.redirectToPayment(paymentId);
        return response.data;
      })
    }

    piService.saveOrderItems = function (saveitems) {
      return $http.post(host + 'save-order', saveitems).then(function (response) {
        debugger;
        return response.data;
      })
    }


    piService.saveOrderPdf = function (saveItems) {
      return $http.post('https://pricing.pidatacenters.com/priceimport/verify/harbour_pdf/invoices.php',saveItems,{ responseType: 'arraybuffer' }).then(function (response) {
        return response;
      // return $http.post('http://103.210.73.84/priceimport/verify/harbour_pdf/invoices.php',saveItems,{ responseType: 'arraybuffer' }).then(function (response) {
      //   return response;
       })
    }

    piService.getSaveOrder = function (id) {
      return $http.get(host + 'save-order?p_id=' + id).then(function (response) {
        debugger;
        return response.data;
      })
    }
    piService.getToken = function () {
      var authToken = localStorage.getItem('refresh_token');
      // authToken = JSON.parse(authToken);
      if (authToken) {
        config.headers.Authorization = authToken;
      }
      // console.log('old ', authToken);
      return $http.get(host + 'refresh', config).then(function (response) {
        debugger;
        localStorage.removeItem('refresh_token');
        localStorage.setItem('refresh_token', response.headers().authorization);
        // console.log('new ', response.headers().authorization);
        return response.headers().authorization;
      })
    }

    piService.resendCodeServces = function (mail) {

      return $http.post(host + 'auth/recovery', mail).then(function (response) {
        debugger;
        return response.data;
      })
    }





    return piService;




  }])

})()