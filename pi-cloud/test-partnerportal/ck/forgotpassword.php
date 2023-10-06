<?php
  require_once('../config/constants.php') ; 
	//include_once('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Partneer Portal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/theme/style.css">

    <!-- End Layout styles -->

    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/shared/custom.css">

<style>
.login-form {
    width: 400px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>

</head>
  <body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper" style="text-align:center">
            <div class="login-form">
            <form id="frm-pwd-assist">
                <h2 class="text-center">Password assistance</h2> 
                <p>An email with the password reset link will be sent to this email id.</p>     
                <div class="form-group" style="text-align:left">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Emai" id="txtEmail" name="email" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Continue</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        include_once('../includes/footer.php');
    ?>
    <script src="<?=BASE_URL?>assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    </body>
</html>

