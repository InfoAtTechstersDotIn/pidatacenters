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

            <div class="main-panel" id="page-kc-blogs">
                <div class="page-banner"><img src="<?=BASE_URL?>assets/images/blogs/bg1.jpeg" style="width:100%;height:320px;"></div>	
                <div class="content-wrapper">
                    <div class="row">
                        
                    </div>
                <?php
                include_once('../includes/footer.php');
                ?>  
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function(event) {
                initKCBlogs(); 
            });
        </script>
	</body>
</html>