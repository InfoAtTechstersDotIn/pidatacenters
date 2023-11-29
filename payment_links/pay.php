<?php
require_once "connection.php";
?>

<?php
$payment_link_unique_id = $_GET['payment_link_unique_id'];

$sql = "SELECT * FROM payment_links WHERE unique_id = '$payment_link_unique_id' and status = 'pending'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">

        <!-- Mobile viewport optimized -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

        <!-- Meta Tags - Description for Search Engine purposes -->
        <meta name="description" content="PiDataCenters - Store">
        <meta name="keywords" content="one page, multipage, domain, hosting, server, cloud, cloudify, html5 template">
        <meta name="author" content="GnoDesign">

        <!-- Website Title -->
        <title>PiDataCenters - Store</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700|Roboto:400,700" rel="stylesheet">

        <!-- CSS links -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </head>

    <body>
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
                                    <a href="https://pidatacenters.com/" class="dropdown-toggle" data-toggle="dropdown" role="button">Home</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- ======== End of Main Menu ======== -->

                </div>
            </nav>
        </header>
        <!-- ===== End of Header Navigation ===== -->

        <!-- ===== Start of Page Title ===== -->
        <section class="page-title ptb50 overlay-black">
            <div class="container">
                <h2 class="uppercase">Pay Now</h2>
            </div>
        </section>
        <!-- ===== End of Page Title ===== -->

        <!-- ===== Start of Main Section ===== -->
        <section class="cart-page ptb80">
            <div class="container">
                <center>
                    <!-- ===== Start of Order Content ===== -->
                    <div class="col-md-12 col-xs-12">

                        <h4>Please verify below details</h4><br />
                        Name: <b><?php echo $row['name'] ?></b><br />
                        Email: <b><?php echo $row['email'] ?></b><br />
                        Phone: <b><?php echo $row['phone'] ?></b><br />
                        Amount: <b>INR <?php echo $row['amount'] ?></b><br /><br />

                        <form method="POST" action="https://pidatacenters.com/payment_links/ccavenue/index.php?payment_link_unique_id=<?php echo $payment_link_unique_id ?>">
                            <input type="checkbox" name="agree" required /> I Agree to Terms and Conditions<br /><br />
                            <input class="btn btn-success copy_text" type="submit" name="pay" value="Pay Now" required />
                        </form>
                    </div>
                    <!-- ===== End of Order Content ===== -->
                </center>
            </div>
        </section>
        <!-- ===== End of Main Section ===== -->

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

<?php
} else {
    header('location:message.php?message=Link Expired, Please reach PiDataCenters for new link');
}
