<!DOCTYPE html>

<html lang="en">

<head>
    <?php
    include_once('head.php');
    ?>
</head>

<body id="page-top">


    <!-- ===== Loader ===== -->
    <div class="loader">
        <div class="spinner">
            <div class="cloud1"><img src="images/clouds/cloud-blue.svg" alt=""></div>
            <div class="cloud2"><img src="images/clouds/cloud-green.svg" alt=""></div>
        </div>
    </div>
    <!-- ===== End of Loader ===== -->





    <!-- ===== Start of Header Navigation ===== -->
    <header>
        <nav class="navbar navbar-default navbar-static-top fluid_header centered transparent">
            <div class="container">

                <!-- Logo -->
                <div class="col-md-2 col-sm-3 col-xs-3">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                    <!-- INSERT YOUR LOGO HERE -->
                </div>

                <!-- ======== Start of Main Menu ======== -->
                <div class="col-md-10 col-sm-9 col-xs-9">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" 
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse pull-right cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu">
                                <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Home</a>
                            </li>
                            <li class="dropdown simple-menu">
                                <a href="register.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Register</a>
                            </li>
                            <li class="dropdown simple-menu">
                                <a href="login.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- ===== End of Header Navigation ===== -->




    <!-- ===== Main Section ===== -->
    <section class="login-page fullscreen overlay-blue">
        <!-- Main Content -->
        <div class="login-box">

            <!-- Start of Login Form -->
            <form action="controller.php" method="POST" id="login-form">
                <div class="text-center">
                    <h3 class="uppercase"><?php echo $_GET['message'] ?></h3>
                </div>
            </form>
            <!-- End of Login Form -->

        </div>
        <!-- End of Main Content -->
    </section>
    <!-- ===== End of Main Section =====  -->

    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/simple-expand.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.ajaxchimp.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>