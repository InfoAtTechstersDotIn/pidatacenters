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
                <h2 class="uppercase">Cart</h2>
            </div>
        </section>
        <!-- ===== End of Page Title ===== -->

        <!-- ===== Start of Main Section ===== -->
        <section class="cart-page ptb80">
            <div class="container">

                <!-- ===== Start of Order Content ===== -->
                <div class="col-md-8 col-xs-12">

                    <div class="table_block table-responsive">
                        <table class="table cart-content">
                            <thead>
                                <tr>
                                    <th class="col-md-7">product</th>
                                    <th class="col-md-3">price</th>
                                    <th class="col-md-2"><a class="btn btn-border btn-blue" href="controller.php?clear_cart=1">Clear Cart</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start of Product 1 -->
                                <?php
                                foreach ($cart_items as $item) {
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
                                                ₹<?php echo $item['price'] ?>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="delete">
                                                <a href="controller.php?delete_cart_item=1&product_id=<?php echo $item['id'] ?>"><i class="fa fa-close"></i></a>
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



                <!-- ===== Start of Proceed to Checkout ===== -->
                <div class="col-md-4 col-xs-12">
                    <div class="subtotal-content">

                        <div class="row cart-subtotal">
                            <div class="col-md-6">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="col-md-6 cart-right">
                                <h4>₹<?php echo $cart_total ?></h4>
                            </div>
                        </div>

                        <div class="row order-total cta">
                            <!-- <a href="http://localhost/picom/ccavenue/index.php" class="btn btn-border btn-blue btn-dark">Proceed to Checkout</a> -->
                            <a href="https://pidatacenters.com/ecomm/ccavenue/index.php" class="btn btn-border btn-blue btn-dark">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- ===== End of Proceed to Checkout ===== -->
            </div>
        </section>
        <!-- ===== End of Main Section ===== -->

        <?php
        include_once('footer.php');
        ?>
    </body>

    </html>
<?php
} else {
    header('location:login.php');
}
?>