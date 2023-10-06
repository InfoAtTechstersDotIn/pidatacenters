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

		<div class="main-panel" id="page-videos">
			<div class="page-banner"><img src="<?=BASE_URL?>assets/images/videos/vd.png" style="width:100%;height:320px"></div>	
			<div class="content-wrapper">
				<div class="row">
					<div class="col-md-4">
						<div class="" style="padding:10px 0px;">
							<iframe width="350" height="300" src="https://www.youtube.com/embed/NxHgdxbgBqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<h5 style="padding:5px 0px">HarbourFront, India's First Indigenous CDN On Cloud. Another 1st From Pi DATACENTERS</h5>
						</div>
					</div>
					<div class="col-md-4">
						<div class="" style="padding:10px 0px;">
							<iframe width="350" height="300" src="https://www.youtube.com/embed/V5YI2OM-0ak" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<h5 style="padding:5px 0px">The Grand Launch of 'Pi Amaravati', India's First Uptime Institute TIER IV Certified Data Center</h5>
						</div>
					</div>
					<div class="col-md-4">
					<div class="" style="padding:10px 0px;">
						<iframe width="350" height="300" src="https://www.youtube.com/embed/qkq1D8h-lec" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<h5 style="padding:5px 0px">The all new Harbour1&#174; website is NOW LIVE!</h5>
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