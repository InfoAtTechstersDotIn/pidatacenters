<?php
  require_once('../config/constants.php') ; 
	//include_once('includes/header.php');
    if (isset($_GET['pt'])) {
        $token = $_GET['pt'];
    }else {
        header('Location:'.BASE_URL."404");
        exit();
    }
    
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
    
    <div class="VertiMidwerty"  style="position:relative;">
	<p style="position:absolute;top:0;right:0;padding:4px"><a href="https://pidatacenters.com/" target="_blank"><img src="<?=BASE_URL?>assets/images/logo3.png"></a></p>
        <div class="container-fluid">
    
            <div class="lft_crd">
                <img src="<?=BASE_URL?>assets/images/partner-register/cntr-wtcrd-2-1.png?vmay02" class="image-responsive">
            </div>
            
            <div class="col-lg-4 col-md-4 col-12" style="float:right;margin-top:230px;margin-right:55px;">
                <div class="lg-form login-form">
                    <form id="frm-pwd-change">
                    <div class="card">
                        <div class="card-header card_header" style="background-color:#273b96;color:white;">Create new password</div>
                        <input type="hidden" name="token" value="<?=$token?>" />
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" id="txtPwd" name="password" required="required">
                            </div>
                            <div class="form-group">
                                <label for="cnf-pwd">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Re-enter your password" id="txtCnfPwd" name="password_confirm" required="required">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-4">
                                    <div class="form-group mgtop-25">
                                        <button type="submit" class="btn btn-primary" style="background-color: #273b96;border: 1px solid #273b96;">Continue</button>
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
    $('#frm-pwd-change').on('submit', function(e) {
    //alert('submit is clicked');
    e.preventDefault();

    let formData = $('#frm-pwd-change').serialize();

    let url = "<?=BASE_API_URL?>/reset";
    //console.log(url);
    //console.log(formData);
    localStorage.removeItem("user");

    $.ajax({
        url: url,
        type: "POST",
        crossDomain: true,
        data: formData,
        dataType: "json",
        ContentType: "application/json;",
        success: function (data) {
            //console.log("in success");
            //console.log(data);
            if (data.status === 'success') {
                location.href="<?=BASE_URL?>login";     
            }
            return;
        },
        error: function (data) {
           //console.log("in failure");
            //console.log(data);
            snackbar(JSON.parse(data.responseText).message, false);
            return false;        },
    });
});
    </script>
</body>
</html>