<?php
  require_once('../config/constants.php') ; 
  //include_once('../includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
	  	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
		<?php
		include_once('../includes/sidebar.php');
		?>

		<div class="main-panel">
			<div class="page-banner"><img src="<?=BASE_URL?>assets/images/events/ev.png" style="width:100%;height:320px;margin-top:-20px;"></div>
			<div class="content-wrapper">
				<div class="content-inner" style="margin: 0 0 1.5rem 0;">
					
					<div class="row">
						<div class="col-xs-12 col-md-8 offset-md-2">
							<div class="row">
								<div class="col-md-12">
									<div class="cta-wrapper" style="text-align:right; margin-bottom:15px;">
										<a href="javascript:history.back()" class="btn btn-danger">Back</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								<div class="event-img-wrap mb-2" style="height:300px; max-height:300px; overflow-y:hidden;"><img style="height:100%;" src="<?=BASE_URL?>assets/images/events/SAP_on_Harbour1.jpeg" /></div>
								</div>			
							</div>
							<div class="row">
								<div class="col-md-12" style="">
									<div style="border: 2px solid blue;border-radius: 4px; padding:0 15px;">
									<div class="" style="padding:10px 0px;">
										<h5 style="padding:5px 0px;text-align:center"><u>Delivering A Comprehensive Bouquet Of SAP Infra On Cloud For All Business Needs</u></h5>
									</div>
									<div class="" style="padding:10px 0px;">
										<p style="text-align:justify;">Panel Discussion Topic: Is the changing SAP landscape making life easy or challenging for IT Leader? </p>
										<p style="text-align:justify;">For key take aways, Register Here -<a href="https://bit.ly/3dXxig1" target="_blank">https://bit.ly/3dXxig1</a></p>
										<p style="text-align:justify;">Learn how, a well curated cloud strategy can make your work life seamless & hassle-free, this <b style="color:blue;">29th July from 4 pm!</b></p>
										<p style="text-align:justify;">Looking forward to seeing you all!</p>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div>

			<?php
			include_once('../includes/footer.php');
			?>  
		</div>
		
		<script src="<?=BASE_URL?>assets/js/calender/cal.js"></script>
	</body>
</html>
