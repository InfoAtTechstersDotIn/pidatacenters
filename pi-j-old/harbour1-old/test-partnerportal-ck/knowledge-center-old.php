<?php
  require_once('./config/constants.php') ; 
  include_once('includes/header.php');
?>
<div class="container-fluid page-body-wrapper">
<?php
  include_once('includes/sidebar.php');
?>

<div class="main-panel" id="page-knowledge-center">
  <div class="content-wrapper">

        <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Knowledge Center</h4>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 24px;">
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <a href="./blogs/" style="display: block;">
                <img src="<?=BASE_URL?>assets/images/knowledge-center/blogs-1.png" class="img-fluid img-res">
                <span class="text-primary font-weight-bolder">Blogs</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <a href="./case-studies/" style="display: block;">
                <img src="<?=BASE_URL?>assets/images/knowledge-center/case study-1.png" class="img-fluid img-res">
                <span class="text-primary font-weight-bolder"> Case Studies</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <a href="./videos/" style="display: block;">
                <img src="<?=BASE_URL?>assets/images/knowledge-center/videos-1.png" class="img-fluid img-res">
                <span class="text-primary font-weight-bolder"> Videos</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 24px;">
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <a href="./trainings/" style="display: block;">
                <img src="<?=BASE_URL?>assets/images/knowledge-center/calender-1.png" class="img-fluid img-res">
                <span class="text-primary font-weight-bolder"> Training Calendar</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <a href="./collaterals/" style="display: block;">
                <img src="<?=BASE_URL?>assets/images/knowledge-center/collaterals-1.png" class="img-fluid img-res">
                <span class="text-primary font-weight-bolder"> Collaterals</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <a href="./events/" style="display: block;">
                <img src="<?=BASE_URL?>assets/images/knowledge-center/events-1.png" class="img-fluid img-res">
                <span class="text-primary font-weight-bolder"> Events</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div>





    
<?php
  include_once('includes/footer.php');
?>  

  </body>
</html>
