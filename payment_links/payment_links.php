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
        include_once('header-without-banner.php');
        ?>

        <!-- ===== Start of Page Title ===== -->
        <section class="page-title ptb50 overlay-black">
            <div class="container">
                <h2 class="uppercase">My Orders</h2>
            </div>
        </section>
        <!-- ===== End of Page Title ===== -->

        <!-- ===== Start of Main Section ===== -->
        <section class="cart-page ptb80">
            <div class="container">

                <!-- ===== Start of Order Content ===== -->
                <div class="col-md-12 col-xs-12">

                    <div class="table_block table-responsive">
                        <table class="table cart-content">
                            <thead>
                                <tr>
                                    <th class="col-md-7">product</th>
                                    <th class="col-md-7">order id</th>
                                    <th class="col-md-5">price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start of Product 1 -->
                                <?php
                                foreach ($order_items as $item) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <h3><?php echo $item['name'] ?></h3>
                                                <div class="tag-line">
                                                    <?php
                                                    foreach (json_decode($item['attributes']) as $key => $value) {
                                                        echo $key . ": " . $value . "<br />";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price">
                                                <?php
                                                // echo json_decode($item['payment_details'])->id 
                                                ?>
                                                <?php echo json_decode($item['payment_details'])[1]->order_id ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price">
                                                ₹<?php echo $item['price'] ?>
                                            </div>
                                        </td>

                                    </tr>
                                <?php
                                }
                                ?>
                                <!-- End of Product 1 -->
                            </tbody>
                        </table>
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