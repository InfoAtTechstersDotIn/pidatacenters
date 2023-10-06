<?php
  require_once('../config/constants.php') ; 
  //include_once('../includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
            <?php
            include_once('../includes/sidebar.php');
            ?>

			<div class="main-panel" id="page-blogs">
            	<div class="page-banner"><img src="<?=BASE_URL?>assets/images/collaterals/coll.png" style="width:100%;height:320px;"></div>	
                	<div class="content-wrapper">
						<div class="row">
							<div class="col-md-4">
								<div class="" style="padding:10px 0px;">
									<a href="<?=BASE_URL?>assets/images/collaterals/soc.pdf" target="_blank"><img src="<?=BASE_URL?>assets/images/collaterals/col22.jpeg" style="width:100%;"></a>
									<h5 style="padding:5px 0px">Security Operations Center</h5>
									<!--<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever....</p>-->
									<button type="button" class="btn btn-primary"><a href="<?=BASE_URL?>assets/images/collaterals/soc.pdf" target="_blank" style="color:white;text-decoration:none;">Read More</a></button>
								</div>
							</div>
							<div class="col-md-4">
								<div class="" style="padding:10px 0px;" >
									<a href="<?=BASE_URL?>assets/images/collaterals/sap_portfolio.pdf" target="_blank"><img src="<?=BASE_URL?>assets/images/collaterals/co133.jpeg" style="width:100%;"></a>
									<h5 style="padding:5px 0px">Sap On Harbour1</h5>
										<!--<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever....</p>-->
									<button type="button" class="btn btn-primary"><a href="<?=BASE_URL?>assets/images/collaterals/sap_portfolio.pdf" target="_blank" style="color:white;text-decoration:none;">Read More</a></button>
								</div>
							</div>
							<div class="col-md-4">
								<div class="" style="padding:10px 0px;" >
									<a href="<?=BASE_URL?>assets/images/collaterals/harbourFront.pdf" target="_blank"><img src="<?=BASE_URL?>assets/images/collaterals/col11.jpeg" style="width:100%;"></a>
									<h5 style="padding:5px 0px">HarbourFront</h5>
										<!--<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever....</p>-->
									<button type="button" class="btn btn-primary"><a href="<?=BASE_URL?>assets/images/collaterals/harbourFront.pdf" target="_blank" style="color:white;text-decoration:none;">Read More</a></button>
								</div>
							</div>
						</div>
					</div>
					<?php
                include_once('../includes/footer.php');
                ?>  
            </div>
        </div>
	</body>
</html>