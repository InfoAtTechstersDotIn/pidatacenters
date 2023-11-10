<?php
require_once "ecomm/connection.php";

if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];

    $seo_title = "Get in Touch with Us - Pi Datacenters | Data Center Networking Provider in India";
    $seo_description = "Contact our experts today at Pi Datacenters and explore possibilities for your data storage, management & analytics needs with India's best data center networking provider. Get expert solutions for every data storage, server & cloud requirement.";
    $seo_keywords = "Contact Us, best data centers, data center services,  Data center networking provider in india";
?>

    <head>
        <style>
            #myBtn2 {
                display: none;
            }
        </style>
    </head>

    <?php include('php/inner-header.php'); ?>

    <style>
        textarea#input_25_8 {
            height: 100px !important;
        }

        .tab-navigation {
            width: 185px;
            margin-left: auto;
            padding-top: 30px;
        }
    </style>
    <!-- main starts here -->

    <div class="about-banner">
        <div class="about-banner-blk">
            <img src="images/contact-us.jpg" alt="Contact-us-banner1" width="1920" height="210">
            <h2>Contact Us</h2>

        </div>
    </div>
    <!--what-is-noc starts here -->

    <div class="write-to-us ">
        <div class="write-to-us-main branches">
            <div class="write-to-us-lt-cnt row">
                <div class="write-to-us-rt col-md-12">
                    <h2>Checkout</h2>
                    <?php
                    $sql = "SELECT * FROM products WHERE id = $id";
                    $result = mysqli_query($conn, $sql);

                    $product = mysqli_fetch_assoc($result);
                    $_SESSION['server_details'] = $product['attributes'];
                    $_SESSION['price'] = $product['price'];
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 style="color: black;"><?php echo $product['name'] ?></h3>
                            <div style="margin-left: 20px;">
                                <?php
                                foreach (json_decode($product['attributes']) as $key => $value) {
                                    echo "<b>$key</b>" . ": " . $value . "<br />";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="ccavenue/index.php" method="post" style="margin-top: 50px;">
                                <input type="text" name="name" style="width: 100%;border-radius:5px" placeholder=" Full Name" required=""><br /><br />
                                <input type="tel" name="phone" style="width: 100%;border-radius:5px" placeholder=" Phone" pattern="[0-9]{10}" required=""><br /><br />
                                <input type="email" name="email" style="width: 100%;border-radius:5px" placeholder=" Email Address" required=""><br /><br />
                                <input type="hidden" name="id" value="<?php echo $product['id'] ?>" required=""><br /><br />
                                Price: <b>₹<?php echo $product['price'] ?></b><br /><br />
                                <input class="btn" style="width: 100%;border-radius:5px" type="submit" value="Buy Now">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('php/footer.php'); ?>


    </div>
    <script src="js/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/main-pi.js"></script>
    </body>

    </html>
<?php
} else {
    header('location:rent-server.php');
}
