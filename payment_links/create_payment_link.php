<?php
require_once "connection.php";
?>

<?php
if (isset($_SESSION['is_login'])) {
?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <?php
        include_once('head.php');
        ?>
    </head>

    <body>
        <?php
        include_once('header_without_banner.php');
        ?>

        <!-- ===== Start of Page Title ===== -->
        <section class="page-title ptb50 overlay-black">
            <div class="container">
                <h2 class="uppercase">Create Payment Link</h2>
            </div>
        </section>
        <!-- ===== End of Page Title ===== -->

        <!-- ===== Start of Main Section ===== -->
        <section class="cart-page ptb80">
            <div class="container">

                <!-- ===== Start of Order Content ===== -->
                <div class="col-md-12 col-xs-12">

                    <div class="table_block table-responsive">
                        <form action="controller.php" method="POST" id="login-form">
                            <input type="text" name="name" class="form-control mt15" placeholder="Name/ Company Name" required>
                            <input type="email" name="email" class="form-control mt15" placeholder="Email" required>
                            <input type="number" name="phone" class="form-control mt15" placeholder="Phone" required>
                            <input type="number" step="0.01" name="amount" class="form-control mt15" placeholder="Amount" required>

                            <div class="mt15 text-center">
                                <input type="submit" name="create_payment_link" class="btn btn-border btn-blue btn-dark nomargin" value="Create Payment Link" />
                            </div>
                        </form>
                    </div>

                </div>
                <!-- ===== End of Order Content ===== -->

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
    header('location:login.php');
}
?>