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
			<div class="page-banner"><img src="<?=BASE_URL?>assets/images/trainings/tc.jpeg" style="width:100%;height:320px;margin-top:-20px;"></div>
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
								<div class="col-md-12" style="">
									<div style="border: 2px solid blue;border-radius: 4px; padding:0 15px;">
									<div class="" style="padding:10px 0px;">
										<h5 style="padding:5px 0px;text-align:center"><u>Pi Partner Program - Training Workshop</u></h5>
										<p style="text-align:justify;"><b>Date:</b> Jul 23, 2021<br>
										<b>Time:</b> 03:30-4.30PM </p>
									</div>
									<div class="" style="padding:10px 0px;">
										<h5 style="color:blue;">Agenda</h5>
										<div style="">
											<p style="font-weight:bold">Overview on Pi DATACENTERS, Products &amp; Services
											By KVS Prakasa Rao</p>
											<p style="">Director - Pre Sales, Partner Alliance (BD) &amp; Account Development</p>
											<p style="font-weight:bold">Demo on Harbour1 Enterprise Cloud Platform</p>
											<p style=""> Sreekanth Chukalooru </p>
											<p style=""> Solution Architect</p>
											<p style="font-weight:bold"> Moderator of the Event</p>
											<p style="">Bhaswati De </p>
											<p style="">Business Support - Partner Alliance</p>
										</div>
										<h5 style="color:blue;">Please find the Meeting Details Below:</h5>
										<div style="">
											<p style="">Join Zoom Meeting</p>
											<p style=""><a href="https://us02web.zoom.us/j/82689424826?pwd=NjJ0V09tT0FOMlRNQWZWZmw0eGZMUT09" target="_blank">https://us02web.zoom.us/j/82689424826?pwd=NjJ0V09tT0FOMlRNQWZWZmw0eGZMUT09</a></p>
											<p style="">Meeting ID: 826 8942 4826</p>
											<p style="">Passcode: 101628</p>
										</div>
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
