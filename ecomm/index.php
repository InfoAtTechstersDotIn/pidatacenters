<?php
require_once "connection.php";
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <?php
    include_once('head.php');
    ?>
</head>

<body id="page-top">
    <?php
    include_once('header-with-banner.php');
    ?>

    <!-- ===== Main Section ===== -->
    <section class="demo4" id="home">
        <!-- Demo 4 -->
        <div class="fullscreen">
            <!-- Main Content -->
            <div class="demo-content container">
                <div class="col-md-12">
                    <h2>Best web hosting <br> service for your <span class="text-blue">website</span>.</h2>
                    <p>Get the best speed for your website. Don’t lose anymore
                        <br>clients for the slowest speed of your hosting service.
                    </p>
                    <div>
                        <a href="#" class="btn btn-border btn-blue"><i class="fa fa-star"></i>Get Started Now</a>
                        <a href="#" class="btn btn-border-rev btn-green">check pricing</a>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Demo 4 -->
    </section>
    <!-- ===== End of Main Section =====  -->

    <!-- ===== Start of Pricing ===== -->
    <section class="pricing-page1 ptb80">
        <div class="container">

            <!-- Start of Row -->
            <div class="row">
                <div class="section-title">
                    <h2>Rent A Server</h2>
                </div>

                <!-- Start of Pricing Table 1 -->
                <div class="pricing-table1">
                    <?php

                    $products = [];

                    $product = new stdClass();
                    $product->id = "1";
                    $product->name = "1/4 Rack";
                    $product->price = "15,000";
                    $product->rack_space = "10U";
                    $product->power = "1 kVA";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "1";
                    $product->ip_pool = "/30";
                    $product->internet_bandwidth = "15 Mbps";
                    $product->rhes = "6 Hours/ Month";
                    $product->otc = "0";
                    $product->contract_period = "3 Years";
                    $product->offer = "No upfront investment";
                    array_push($products, $product);

                    $product = new stdClass();
                    $product->id = "2";
                    $product->name = "1/2 Rack";
                    $product->price = "22,500";
                    $product->rack_space = "21U";
                    $product->power = "2 kVA";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "1";
                    $product->ip_pool = "/30";
                    $product->internet_bandwidth = "50 Mbps";
                    $product->rhes = "6 Hours/ Month";
                    $product->otc = "0";
                    $product->contract_period = "3 Years";
                    $product->offer = "No upfront investment";
                    array_push($products, $product);

                    $product = new stdClass();
                    $product->id = "3";
                    $product->name = "1 Rack";
                    $product->price = "33,000";
                    $product->rack_space = "42U";
                    $product->power = "3 kVA";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "1";
                    $product->ip_pool = "/29";
                    $product->internet_bandwidth = "50 Mbps";
                    $product->rhes = "6 Hours/ Month";
                    $product->otc = "40,000";
                    $product->contract_period = "3 Years";
                    $product->offer = "No upfront investment";
                    array_push($products, $product);

                    $product = new stdClass();
                    $product->id = "4";
                    $product->name = "1 Rack";
                    $product->price = "42,000";
                    $product->rack_space = "42U";
                    $product->power = "6 kVA";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "1";
                    $product->ip_pool = "/29";
                    $product->internet_bandwidth = "100 Mbps";
                    $product->rhes = "10 Hours/ Month";
                    $product->otc = "40,000";
                    $product->contract_period = "3 Years";
                    $product->offer = "Minimal upfront investment";
                    array_push($products, $product);

                    $product = new stdClass();
                    $product->id = "5";
                    $product->name = "2 Racks";
                    $product->price = "80,000";
                    $product->rack_space = "42U*2";
                    $product->power = "6 kVA/Rack";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "2";
                    $product->ip_pool = "/29";
                    $product->internet_bandwidth = "100 Mbps";
                    $product->rhes = "10 Hours/ Month";
                    $product->otc = "40,000/ Rack";
                    $product->contract_period = "5 Years";
                    $product->offer = "";
                    array_push($products, $product);

                    $product = new stdClass();
                    $product->id = "6";
                    $product->name = "3 Racks";
                    $product->price = "1,10,000";
                    $product->rack_space = "42U*3";
                    $product->power = "6 kVA/ Rack";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "2";
                    $product->ip_pool = "/29";
                    $product->internet_bandwidth = "100 Mbps";
                    $product->rhes = "20 Hours/ Month";
                    $product->otc = "40,000/ Rack";
                    $product->contract_period = "5 Years";
                    $product->offer = "";
                    array_push($products, $product);

                    $product = new stdClass();
                    $product->id = "7";
                    $product->name = "5 Racks";
                    $product->price = "1,60,000";
                    $product->rack_space = "42U*5";
                    $product->power = "6 kVA/ Rack";
                    $product->power_billing_mode = "Bundled";
                    $product->cross_connects = "2";
                    $product->ip_pool = "/29";
                    $product->internet_bandwidth = "100 Mbps";
                    $product->rhes = "Unlimited";
                    $product->otc = "40,000/ Rack";
                    $product->contract_period = "5 Years";
                    $product->offer = "";
                    array_push($products, $product);

                    ?>
                    <?php
                    foreach ($products as $product) {
                    ?>

                        <div class="col-sm-3 pricing-plan" id="starter">
                            <form action="controller.php" method="POST">
                                <!-- start price section -->
                                <div class="row price">
                                    <div>
                                        <span class="currency">₹</span>
                                        <span class="amount"><?php echo $product->price ?></span>
                                        <span class="month">per month</span>
                                    </div>
                                </div>
                                <!-- end of price section -->
                                <div class="plan-type">
                                    <span><?php echo $product->name ?></span>
                                </div>
                                <!-- start of detail section -->
                                <ul class="nav">
                                    <li><span class="text-primary"><b>Rack Space:</b> <?php echo $product->rack_space ?></span></li>
                                    <li><span class="text-success"><b>Power:</b> <?php echo $product->power ?></span></li>
                                    <li><span class="text-primary"><b>Power Billing Mode:</b> <?php echo $product->power_billing_mode ?></span></li>
                                    <li><span class="text-success"><b>Cross Connects:</b> <?php echo $product->cross_connects ?></span></li>
                                    <li><span class="text-primary"><b>IP Pool:</b> <?php echo $product->ip_pool ?></span></li>
                                    <li><span class="text-success"><b>Internet Bandwidth:</b> <?php echo $product->internet_bandwidth ?></span></li>
                                    <li><span class="text-primary"><b>RHES:</b> <?php echo $product->rhes ?></span></li>
                                    <li><span class="text-success"><b>OTC:</b> <?php echo $product->otc ?></span></li>
                                    <li><span class="text-primary"><b>Contact Period:</b> <?php echo $product->contract_period ?></span></li>
                                    <?php
                                    if ($product->offer != "") {
                                    ?>
                                        <li><b>Offer:</b> <?php echo $product->offer ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <?php
                                if (isset($_SESSION['is_login'])) {
                                ?>
                                    <input type="hidden" name="product_id" value="<?php echo $product->id ?>" />
                                    <input type="submit" name="add_to_cart" class="btn btn-border btn-blue" value="Buy Now" />
                                <?php
                                } else {
                                ?>
                                    <a href="login.php" class="btn btn-border btn-blue">Login to Buy</a>
                                <?php
                                }
                                ?>
                                <!-- end of detail section -->
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- End of Pricing Table 1 -->
            </div>
            <!-- End of Row -->

        </div>
    </section>

    <!-- ===== End of Pricing ===== -->

    <?php
    include_once('footer.php');
    ?>

</body>

</html>