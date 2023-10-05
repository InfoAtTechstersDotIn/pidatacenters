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
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #273b96;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(39,59,150, .25);
        }
        .btn-primary{
            color: #fff;
            background-color: #273b96;
            border-color: #273b96;
        }
        .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem #273b96;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #273b96;
            border-color: #273b96;
        }
        .btn-primary.focus, .btn-primary:focus {
            box-shadow: 0 0 0 .2rem #273b96;
        }
        .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #273b96;
            border-color: #273b96;
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
            
            <div class="col-lg-4 col-md-4 col-12" style="float:right;margin-top:230px;margin-right:55px;">
                <div class="lg-form login-form">
                    <form id="frm-pwd-assist">
                    <div class="card">
                        <div class="card-header card_header" style="background-color:#273b96;color:white;">Password assistance</div>
                        <div class="card-body">
                            <p><strong>An email with the password reset link will be sent to this email id.</strong></p> 
                            <hr/>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email" id="txtEmail" name="email" required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Continue</button>
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
</body>
</html>