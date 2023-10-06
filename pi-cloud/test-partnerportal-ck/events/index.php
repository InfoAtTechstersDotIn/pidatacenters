<?php
  require_once('../config/constants.php') ; 
  //include_once('../includes/header.php');
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

		<div class="main-panel" id="page-events">
			<div class="page-banner"><img src="<?=BASE_URL?>assets/images/events/ev.png" style="width:100%;height:320px;margin-top:-20px;"></div>
			<div class="content-wrapper">
				<h3 style="text-align:center;margin-bottom:0;">Event Calendar</h3>  
				<div id='wrap'>
					<div id='calendar' style="margin:1.5rem auto;"></div>
					<div style='clear:both'></div>
				</div>
			<div>

		<?php

		include_once('../includes/footer.php');
		?>  
		
		</div>
		
		
		<script src="<?=BASE_URL?>assets/js/calender/cal.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function(event) {
				initKCEvents(); 
			});

		</script>
	</body>
</html>
