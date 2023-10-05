<?php
  require_once('./config/constants.php') ; 
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
    width: 340px;
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
            <form >
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Emai" id="txtEmail" name="email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" id="txtPassword" name="password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center"><a href="#">Create an Account</a></p>
            </div>

            <div class="logout-form">
                <form>
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
        <?php
  include_once('includes/footer.php');
?>
<script src="<?=BASE_URL?>assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script>
    $('.login-form form').on('submit', function(e) {
        //alert('submit is clicked');
        e.preventDefault();

        let formData = {email: document.getElementById('txtEmail').value,
                        password: document.getElementById('txtPassword').value,
                    }

        $.ajax({
            url: "<?=BASE_API_URL?>/login",
            type: "POST",
            crossDomain: true,
            data: formData,
            dataType: "json",
            ContentType: "application/json;",
            success: function (data) {
                console.log("in success");
                console.log(data);
                if (data.status === 'success') {
                    localStorage.setItem("user", JSON.stringify(data.user));
                    // console.log("after login");
                    // console.log("user "+JSON.stringify(data.user));
                     console.log('token '+data.user.token);
                    location.href="<?=BASE_URL?>";
                }
                return;
            },
            error: function (data) {
                console.log("in failure");
                console.log(data);
                return false;
            },
        });
    });

    
    $('.logout-form form').on('submit', function(e) {
        e.preventDefault();
        let user = JSON.parse(localStorage.getItem("user"));
        alert(user.token);

        $.ajax({
            url: "<?=BASE_API_URL?>/logout",
            type: "GET",
            crossDomain: true,
            headers: {
                Authorization: "Bearer " + user.token,
            },
            dataType: "json",
            ContentType: "application/json;",
            success: function (data) {
                console.log("in success");
                console.log(data);
                if (data.status === 'success') {
                    localStorage.removeItem("user");
                    
                   location.href="<?=BASE_URL?>login";
                }
                return;
            },
            error: function (data) {
                console.log("in failure");
                console.log(data);
                return false;
            },
        });

    });
    

</script>
</body>
</html>