<?php
require_once "connection.php";
?>

<?php
if (isset($_SESSION['is_login'])) {
    $payment_link_unique_id = $_GET['payment_link_unique_id'];

    $sql = "SELECT * FROM payment_links WHERE unique_id = '$payment_link_unique_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
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
                <h2 class="uppercase">Thank You</h2>
            </div>
        </section>
        <!-- ===== End of Page Title ===== -->

        <!-- ===== Start of Main Section ===== -->
        <section class="cart-page ptb80">
            <div class="container">
                <center>
                    <!-- ===== Start of Order Content ===== -->
                    <div class="col-md-12 col-xs-12">

                        <h4>A New Payment Link is Generated</h4><br />
                        Name: <b><?php echo $row['name'] ?></b><br />
                        Email: <b><?php echo $row['email'] ?></b><br />
                        Phone: <b><?php echo $row['phone'] ?></b><br />
                        Amount: <b><?php echo $row['amount'] ?></b><br /><br />
                        <a class="btn btn-success copy_text" href="https://pidatacenters.com/payment_links/pay.php?payment_link_unique_id=<?php echo $payment_link_unique_id ?>">Copy Link</a>

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

        <script>
            $('.copy_text').click(function(e) {
                e.preventDefault();
                var copyText = $(this).attr('href');

                document.addEventListener('copy', function(e) {
                    e.clipboardData.setData('text/plain', copyText);
                    e.preventDefault();
                }, true);

                document.execCommand('copy');
                alert('Payment Link Copied');
            });
        </script>
    </body>

    </html>

<?php
} else {
    header('location:login.php');
}
?>