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

		<div class="main-panel" id="page-kc-videos">
			<div class="page-banner"><img src="<?=BASE_URL?>assets/images/videos/vd.png" style="width:100%;height:320px"></div>	
			<div class="content-wrapper">
				<div class="row">
					
				</div>
			</div>
		
		<?php
		include_once('../includes/footer.php');
		?>  
		</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function(event) {
		initKCVideos(); 
	});

</script>
</body>
</html>