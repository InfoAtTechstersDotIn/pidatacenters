<?php
  require_once('../config/constants.php') ; 
	include_once('../includes/header.php');
?>

<div class="container-fluid page-body-wrapper dashboard-page">
<?php
	include_once('../includes/sidebar.php');
?>

<div class="main-panel">
    <div class="content-wrapper">
<!-- ********************************** -->   

<div class="row">
  
 <div class="col-md-12 col-sm-12">
    <div style="width: 100%;margin-bottom: 24px;">
   <img src="<?=BASE_URL?>assets/images/gtm/go-to-market.jpeg" class="img-fluid img-responsive image-grid">
 </div>  
 </div>
</div>

<div class="row" style="margin-bottom: 24px;">
  <div class="col-md-3 col-sm-12 col-lg-3">
    <div class="card">
      <div class="card-body" style="height:192px">
        <div class="text-center">
          <a href="./fund-requests/" style="display: block;">
            <img src="<?=BASE_URL?>assets/images/gtm/joint.png" class="img-fluid img-res">
            <span class="text-primary font-weight-bolder">GTM Fund Request</span>
          </a>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-3 col-sm-12 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <a href="./joint-media-campaign/" style="display: block;">
            <img src="<?=BASE_URL?>assets/images/gtm/bullhorn.png" class="img-fluid img-res">
            <span class="text-primary font-weight-bolder"> Joint Media Campaign Request</span>
          </a>
        </div>
      </div>
    </div>
  </div>
   <div class="col-md-3 col-sm-12 col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <a href="./joint-media-collateral/" style="display: block;">
            <img src="<?=BASE_URL?>assets/images/gtm/collateral.png" class="img-fluid img-res">
            <span class="text-primary font-weight-bolder"> Joint Marketing Collateral Request</span>
          </a>
        </div>
      </div>
    </div>
  </div>
   <div class="col-md-3 col-sm-12 col-lg-3">
    <div class="card">
      <div class="card-body" style="height:192px">
        <div class="text-center">
          <a href="./joint-event-request/" style="display: block;">
            <img src="<?=BASE_URL?>assets/images/gtm/fund.png" class="img-fluid img-res">
            <span class="text-primary font-weight-bolder"> GTM Joint Event Request</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  
</div>


<?php
  include_once('../includes/footer.php');
?>  

</body>
</html>