<!-- ===== Loader ===== -->
<div class="loader">
    <div class="spinner">
        <div class="cloud1"><img src="images/clouds/cloud-blue.svg" alt=""></div>
        <div class="cloud2"><img src="images/clouds/cloud-green.svg" alt=""></div>
    </div>
</div>
<!-- ===== End of Loader ===== -->


<!-- ===== Top Header ===== -->
<div class="top-header">
    <div class="container">
        <div class="row">
            <!-- phone and social begin -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="social list-inline ptb10">
                    <li><a href="tel:12345678912">123 - 456 - 78912</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- phone and social end -->

            <?php
            if (!isset($_SESSION['is_login'])) {
            ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- chat and account button begin -->
                    <ul class="top-button ptb10">
                        <li class="login">
                            <a class="btn btn-small btn-border-rev btn-blue" href="register.php"><i class="fa fa-user"></i>Register</a>
                        </li>
                        <li class="login">
                            <a class="btn btn-small btn-border-rev btn-blue" href="login.php"><i class="fa fa-lock"></i>Login</a>
                        </li>
                    </ul>
                    <!-- chat and account button end -->
                </div>
            <?php
            } else {
            ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- chat and account button begin -->
                    <ul class="top-button ptb10">
                        <li class="login">
                            Welcome <?php echo $_SESSION['name'] ?>
                        </li>
                        <li class="login">
                            <a class="btn btn-small btn-border-rev btn-blue" href="logoff.php">Logoff</a>
                        </li>
                    </ul>
                    <!-- chat and account button end -->
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- ===== End of Top Header ===== -->




<!-- ===== Start of Header Navigation ===== -->
<header class="fixed site-header">
    <nav class="navbar navbar-default navbar-static-top fluid_header centered">
        <div class="container">

            <!-- Logo -->
            <div class="col-md-2 col-sm-3 col-xs-3">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                <!-- INSERT YOUR LOGO HERE -->
            </div>

            <!-- ======== Start of Main Menu ======== -->
            <div class="col-md-10 col-sm-9 col-xs-9">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
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
                            <a href="cloud-server.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Cloud Server</a>
                        </li>
                        <li class="dropdown simple-menu">
                            <a href="cloud-storage.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Cloud Storage</a>
                        </li>
                        <li class="dropdown simple-menu">
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button">Rent A Server</a>
                        </li>

                        <?php
                        if (isset($_SESSION['is_login'])) {
                        ?>
                            <li class="dropdown simple-menu">
                                <a href="my_orders.php" class="dropdown-toggle" data-toggle="dropdown" role="button">My Orders</a>
                            </li>

                            <!-- Start Total Cart -->
                            <li class="total-cart">
                                <a href="cart.php" class="cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="count btn btn-border btn-blue"><?php echo $cart_items_count ?></span>
                                </a>
                            </li>
                            <!-- End Total Cart -->
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <!-- ======== End of Main Menu ======== -->

        </div>
    </nav>
</header>
<!-- ===== End of Header Navigation ===== -->