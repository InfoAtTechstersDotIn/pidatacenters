<?php
  require_once('./config/constants.php') ; 
  include_once('includes/header.php');
?>
<div class="container-fluid page-body-wrapper">
<?php
  include_once('includes/sidebar.php');
?>

<div class="main-panel">
  <div class="content-wrapper" id="page-change-pwd">

        <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Change Your Password</h4>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="info hide"><p></p></div>
        <div class="card mb-5">
          <div class="card-body">
            <form id="frm-change-pwd">
              <div class="form-group">
                <label for="oldpwd">Old Password</label>
                <input type="password" class="form-control" name="old_password" id="oldpwd" required />
              </div>
              <div class="form-group">
                <label for="newpwd">New Password</label>
                <input type="password" class="form-control" name="new_password" id="newpwd"required />
              </div>
              <div class="form-group">
                <label for="confpwd">Re-enter New Password</label>
                <input type="password" class="form-control" name="confirm_password" id="confpwd" required />
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
<div>
    
<?php
  include_once('includes/footer.php');
?>  
<!-- <script src="<?=BASE_URL?>assets/vendors/jquery/jquery-3.6.0.min.js"></script> -->
  </body>
</html>
