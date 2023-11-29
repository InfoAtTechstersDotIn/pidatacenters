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
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    </head>

    <body>
        <?php
        include_once('header_without_banner.php');
        ?>

        <!-- ===== Start of Page Title ===== -->
        <section class="page-title ptb50 overlay-black">
            <div class="container">
                <h2 class="uppercase">Payment Links</h2><br />
                <a class="btn btn-success" href="create_payment_link.php">Create Payment Link</a>
            </div>
        </section>
        <!-- ===== End of Page Title ===== -->

        <!-- ===== Start of Main Section ===== -->
        <section class="cart-page ptb80">
            <div class="container">

                <!-- ===== Start of Order Content ===== -->
                <div class="col-md-12 col-xs-12">

                    <div class="table_block table-responsive">
                        <?php
                        $sql = "SELECT * FROM payment_links";
                        $result = mysqli_query($conn, $sql);

                        $payment_links = [];
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) :
                                array_push($payment_links, $row);
                            endwhile;
                        }
                        ?>
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Amount</th>
                                    <th>Copy Link</th>
                                    <th>Status</th>
                                    <td>Send Mail</td>
                                    <td>Cancel</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start of Product 1 -->
                                <?php
                                foreach ($payment_links as $item) {
                                ?>
                                    <?php if ($item['status'] == 'success') { ?>
                                    <tr style="background: #eee;">
                                    <?php } else { ?>
                                    <tr>
                                    <?php } ?>
                                        <td><?php echo $item['name'] ?></td>
                                        <td><?php echo $item['email'] ?></td>
                                        <td><?php echo $item['phone'] ?></td>
                                        <td><?php echo $item['amount'] ?></td>
                                        <td>
                                            <?php if ($item['status'] == "pending") { ?>
                                                <a class="btn btn-success copy_text" href="https://pidatacenters.com/payment_links/pay.php?payment_link_unique_id=<?php echo $item['unique_id'] ?>">Copy Link</a>
                                        </td>
                                    <?php } ?>
                                        <td><?php echo $item['status'] ?></td>
                                        <td>
                                            <?php if ($item['status'] != "success") { ?>
                                                <a class="btn btn-success" href="javascript:void(0);" onclick="handleSend(`https://pidatacenters.com/payment_links/pay.php?payment_link_unique_id=<?php echo $item['unique_id'] ?>`, `<?php echo $item['email'] ?>`, `<?php echo $item['name'] ?>`)">Send Mail</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($item['status'] == "pending") { ?>
                                                <a class="btn btn-success" href="javascript:void(0);" onclick="handleCancel('<?php echo $item['unique_id'] ?>')">Cancel Payment</a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($item['status'] != "success") { ?>
                                                <a class="btn btn-danger" href="javascript:void(0);" onclick="handleDelete('<?php echo $item['unique_id'] ?>')">&times;</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php if ($item['status'] == 'success') { ?>
                                    <tr style="background: #eee;">
                                        <td>Order ID : <?php print_r(json_decode($item['order_details'])[1]->order_id) ?></td>
                                        <td>Tracking ID : <?php print_r(json_decode($item['order_details'])[2]->tracking_id) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>
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
        <script>
            const handleSend = (link, email, name) => {
                const response = fetch(`https://pidatacenters.com/payment_links/send-mail.php?payment_link=${link}&email=${email}&name=${name}`).
                then((result) => {
                    alert('Email successfully sent')
                })
            }

            const handleCancel = (unique_id) => {
                if (confirm('Are you sure ?')) {
                    window.location = `https://pidatacenters.com/payment_links/cancel_payment.php?unique_id=${unique_id}`;
                }
            }

            const handleDelete = (unique_id) => {
                if (confirm('Are you sure ?')) {
                    window.location = `https://pidatacenters.com/payment_links/delete_payment.php?unique_id=${unique_id}`;
                }
            }

        </script>
    </body>

    <footer>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script>
            let table = new DataTable('#myTable');
        </script>
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
    </footer>

    </html>

<?php
} else {
    header('location:login.php');
}
?>