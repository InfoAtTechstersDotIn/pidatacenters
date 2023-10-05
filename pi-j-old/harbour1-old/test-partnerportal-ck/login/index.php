<?php
  require_once('../config/constants.php') ; 
	//include_once('includes/header.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner Portal | Harbour1</title>
    <!--    <base href="/">-->
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?=BASE_URL?>assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/bootstrap.min.css?vmay02" />
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/shared/partner-login-styles.css?vmay02" />


    <style>
        .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem #273b96;
        }
        .btn-primary.focus, .btn-primary:focus {
            box-shadow: 0 0 0 .2rem #273b96;
        }
    </style>
</head>

<body>
    <div id="loader">
        <div class="loader"></div>
    </div>

    <div class="VertiMidwerty" style="position:relative;">
    <p style="position:absolute;top:0;right:0;padding:4px"><a href="https://pidatacenters.com/" target="_blank"><img src="<?=BASE_URL?>assets/images/logo3.png"></a></p>

        <div class="container-fluid">
    
            <div class="lft_crd">
                <img src="<?=BASE_URL?>assets/images/partner-register/cntr-wtcrd-2-1.png?vmay02" class="image-responsive">
            </div>
            
            <!-- <div class="col-lg-4 col-md-4 col-12" style="float:right;margin-top:200px;"> -->
            <div class="col-lg-4 col-md-4 col-12 login-form-wrap" style="float:right;margin-top:230px;margin-right:55px;">
                <div class="lg-form login-form">
                    <form>
                    <div class="card">
                        <div class="card-header card_header" style="background-color:#273b96;color:white;">Login With Email</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Username / Email ID</label>
                                <!-- <input class="form-control ng-valid ng-dirty ng-touched" placeholder="Enter email" type="text" ng-reflect-model="umnmg@ni.com" field_signature="1318412689" form_signature="8076526245328979752" pm_parser_annotation="username_element"> -->
                                <input class="form-control" id="txtEmail" placeholder="Enter email" type="email" name="email" required="required">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <!-- <input class="form-control ng-valid ng-dirty ng-touched" placeholder="Enter password" type="password" ng-reflect-model="pi_partner_42398" field_signature="475301429" form_signature="8076526245328979752" pm_parser_annotation="password_element"> -->
                                <input class="form-control" id="txtPassword" placeholder="Enter password" type="password" name="password" required="required">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-4">
                                    <div class="form-group mgtop-25">
                                        <button type="submit" class="btn btn-primary" style="background-color: #273b96;border: 1px solid #273b96;">Sign in</button>
                                    </div>
                                </div>
                                <div  class="col-lg-6 col-md-8 col-8">
                                    <div  class="form-group mgtop-25 pull-right">
                                        <a class="pointer float-right" href="<?=BASE_URL?>login/forgotpassword">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--    snackbar division-->
        <div id="snackbar"></div>
    </div>

    <?php
        //include_once('../includes/footer.php');
    ?>

    <script src="<?=BASE_URL?>assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?=BASE_URL?>assets/js/theme/index-db.js"></script>
    <script>
        $('.login-form form').on('submit', function(e) {
            e.preventDefault();

            let formData = {email: document.getElementById('txtEmail').value,
                            password: document.getElementById('txtPassword').value,
                        }

            let url = "<?=BASE_API_URL?>/login";
            localStorage.removeItem("user");

            $.ajax({
                url: url,
                type: "POST",
                crossDomain: true,
                data: formData,
                dataType: "json",
                ContentType: "application/json;",
                success: function (data) {
			//console.log(data);
                   // console.log("in success");

                    if (data.status === 'success') {
                        localStorage.setItem("user", JSON.stringify(data.user));
                   
                        let user = JSON.parse(localStorage.getItem("user"));
                        
                        let redirLoc="<?=BASE_URL?>";

			/*
                        if ((user != null) && (user.type === 'admin')) {
                            redirLoc = "<?=BASE_URL?>registrations/pending";
                        }else{
                            redirLoc = "<?=BASE_URL?>pipeline";
                        }
			*/

			if (user.tochangepwd) {
                            redirLoc =  "<?=BASE_URL?>change-password";
                        } else {
                            if((user != null) && (user.type === 'admin')) {
                                redirLoc = "<?=BASE_URL?>registrations/pending";
                            }else{
                                redirLoc = "<?=BASE_URL?>pipeline";
                            }
                        }

                        location.href=redirLoc;
                       
                    }else{
                        snackbar(data.msg);
                    }
                    return;
                },
                error: function (data) {
                   // console.log("in failure");
                    //console.log(data);
                    localStorage.removeItem("user");
                    return false;
                },
            });
        });

    </script>
</body>
</html>