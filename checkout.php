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

               $price = $product['price'];
               $convenience_fee = $product['convenience_fee'];

               $gst = (($product['price'] + $product['convenience_fee']) * 18) / 100;
               $total = $price + $convenience_fee + $gst;

               $_SESSION['price'] = $total;
               ?>
               <div class="row">
                  <div class="col-md-6">
                     <div>
                        <?php
                        if ($id == 1) {
                        ?>
                           <img src="images/rank-1-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        } else if ($id == 2) {
                        ?>
                           <img src="images/rank-2-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        } else if ($id == 3) {
                        ?>
                           <img src="images/rank-3-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        } else if ($id == 4) {
                        ?>
                           <img src="images/rank-4-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        } else if ($id == 5) {
                        ?>
                           <img src="images/rank-5-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        } else if ($id == 6) {
                        ?>
                           <img src="images/rank-6-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        } else if ($id == 7) {
                        ?>
                           <img src="images/rank-7-b.png" alt="rank-1-b" style="width:75%" class="rent-blue">
                        <?php
                        }
                        ?>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <input type="hidden" id="checkout_server" value="<?php echo $product['name'] . " - " . $product['price'] ?>" />
                     <form action="ccavenue/index.php" method="post" style="margin-top: 50px;">
                        <input type="text" id="checkout_name" name="name" style="width: 100%;border-radius:5px" placeholder=" Full Name" required="" /><br /><br />
                        <input type="tel" id="checkout_phone" name="phone" style="width: 100%;border-radius:5px" placeholder=" Phone" pattern="[0-9]{10}" required="" /><br /><br />
                        <input type="email" id="checkout_email" name="email" style="width: 100%;border-radius:5px" placeholder=" Email Address" required="" /><br /><br />
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>" required="">
                        <table style="border: 0px;">
                           <tr style="border: 0px;">
                              <td style="border: 0px;text-align:left">MRC Value(Includes Convenience Fee)
                              <br />
                                 <span style="font-size:10px">MRC(Monthly Recurring Charges)</span>
                              </td>
                              <td style="border: 0px;">INR <b><?php echo $price + $convenience_fee ?></b></td>
                           </tr>
                           <tr style="border: 0px;">
                              <td style="border: 0px;text-align:left">GST @ 18%</td>
                              <td style="border: 0px;">INR <b><?php echo $gst ?></b></td>
                           </tr>
                           <tr style="border: 0px;">
                              <td style="border: 0px;text-align:left">Total MRC Payable</td>
                              <td style="border: 0px;">INR <b><?php echo $total ?></b></td>
                           </tr>
                        </table><br />
                        <input type="checkbox" required /> I Agree with Terms and Conditions<br />
                        <br />
                        <input class="btn" onclick="submit_form()" style="width: 100%;border-radius:5px" type="submit" value="Buy Now">
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

   <script>
      function submit_form() {
         let name = document.getElementById("checkout_name").value;
         let phone = document.getElementById("checkout_phone").value;
         let email = document.getElementById("checkout_email").value;
         let server = document.getElementById("checkout_server").value;

         let error = 0;
         if (name == "") {
            error++;
         }

         if (error == 0 && phone == "") {
            error++;
         }

         if (error == 0 && email == "") {
            error++;
         }

         if (error == 0) {
            var http = new XMLHttpRequest();
            var url = 'https://clientele.techsters.in/public/api/client_forms';

            var data = new FormData();
            data.append('Name', name);
            data.append('Number', phone);
            data.append('Email', email);
            data.append('Server', server);
            data.append('form_unique_id', "86497a91-7e3b-11ee-a0ca-525400b78afc");
            data.append('techsters_subject', "Pidatacenters - Rent A Server");

            http.open('POST', url, true);

            http.onreadystatechange = function() {
               if (http.readyState == 4 && http.status == 200) {
                  window.location.href = http.responseText;
               }
            }
            http.send(data);

            return true;
         } else {
            return false;
         }
      }
   </script>

   </body>

   </html>
<?php
} else {
   header('location:rent-server.php');
}
