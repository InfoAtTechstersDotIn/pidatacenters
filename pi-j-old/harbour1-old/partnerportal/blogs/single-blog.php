<?php
  require_once('../config/constants.php') ; 
  //include_once('../includes/header.php');

  $slug = $_GET['f1'];
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

            <div class="main-panel" id="page-kc-single-blog">
                <div class="content-wrapper">
                    <div class="row caption-row">
                        <div class="col-sm-12"><h1></h1></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <img src="" class="image-responsive blog-banner mb-5" alt="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div id="blog-content">
                            
                            </div>
                        </div>
                    </div>
                <?php
                include_once('../includes/footer.php');
                ?>  
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function(event) {
                let blogTitle = "<?=$slug?>";
                initKCSingleBlog(blogTitle); 
            });
        </script>
	</body>
</html>