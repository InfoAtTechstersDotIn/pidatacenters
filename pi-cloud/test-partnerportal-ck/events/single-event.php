<?php
  require_once('../config/constants.php') ; 
  //include_once('../includes/header.php');
  $id = 0;
  if (isset($_GET['f1'])) {
      $id = $_GET['f1'];
  }

?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	  	<?php include_once('../includes/head.php'); ?>
	  	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/cal.css">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<script>

	$(document).ready(function() {

	});

</script>
<style>
	
	#wrap {
		width: 1100px;
		margin: 0 auto;
		}
		
	#external-events {
		float: left;
		width: 150px;
		padding: 0 10px;
		text-align: left;
		}
		
	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
		}
		
	.external-event { /* try to mimick the look of a real event */
		margin: 10px 0;
		padding: 2px 4px;
		background: #3366CC;
		color: #fff;
		font-size: .85em;
		cursor: pointer;
		}
		
	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
		}
		
	#external-events p input {
		margin: 0;
		vertical-align: middle;
		}

	#calendar {

        margin: 0 auto;
		width: 900px;
		background-color: #FFFFFF;
		  border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
		-webkit-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
		}

</style>
	</head>
	<body>
		<?php include_once('../includes/header1.php');?>
		<div class="container-fluid page-body-wrapper">
		<?php
		include_once('../includes/sidebar.php');
		?>

        <div class="main-panel" id="page-kc-single-event">
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
								<div class="col-md-12 mb-5" style="">
									<div class="banner-wrap mb-2" style="max-height:300px; height:300px; overflow:hidden;">
										<img style="max-height:100%;" id="event-banner" src="" alt=""  />
									</div>
									<div class="" style="padding:10px 0px;">
										<h5 id="event-title" style="padding:5px 0px;text-align:center"><u></u></h5>
									</div>

									<div style="border: 2px solid blue;border-radius: 4px; padding:0 15px;">
									
									<div class="" style="padding:10px 0px;">
										<!-- <h5 style="color:blue;">Agenda</h5> -->
										<div id="event-content">
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

		</div>
		<script>
			document.addEventListener('DOMContentLoaded', function(event) {
                initSingleEvent(<?=$id?>);
			});

		</script>
	</body>
</html>
