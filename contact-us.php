<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Your Website URL Goes Here
$url = "http://103.210.73.24/";

if (isset($_POST['submit'])) {

  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);

  $message = "You have received following information:<br><br>";
  $message .= "Name: " . $_POST['name'] . "<br>";
  $message .= "Email: " . $_POST['email'] . "<br>";
  $message .= "Company: " . $_POST['company'] . "<br>";
  $message .= "Phone: " . $_POST['phone'] . "<br>";
  $message .= "Message: " . $_POST['message'] . "<br>";

  try {
    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'leads@pidatacenters.com';
    $mail->Password = 'Pi_datacenters@2023';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->From = "leads@pidatacenters.com";
    $mail->FromName = "Pi Datacenters Website";
    $mail->addAddress('leads@pidatacenters.com');
    $mail->isHTML(true);
    $mail->Subject = 'Mail from contact form of website';
    $mail->Body = $message;

    $mail->send();
    //echo 'Message has been sent';
    $con = new mysqli("localhost", "marcom", "TR*viv3mo?!q", "search8c_pi");
    if ($con->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $company = $_POST['company'];
      $message = $_POST['message'];
      $ts = date('d-m-Y');
      $qf = mysqli_query($con, "INSERT INTO contact_us(name, email, phone, company, message,date_info) VALUES ('$name', '$email', '$phone', '$company', '$message','$ts')");
      header("Location:https://pidatacenters.com/thank-you.php");
    }
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

$seo_title = "Get in Touch with Us - Pi Datacenters | Data Center Networking Provider in India";
$seo_description = "Contact our experts today at Pi Datacenters and explore possibilities for your data storage, management & analytics needs with India's best data center networking provider. Get expert solutions for every data storage, server & cloud requirement.";
$seo_keywords = "Contact Us, best data centers, data center services,  Data center networking provider in india";
?>

<?php include('php/includes-techsters/header.php'); ?>

<head>
  <style>
    #reach-btn {
      display: none;
    }


    .contact_page_form input {
      line-height: 31px !important;
    }
  </style>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>




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
    <h1>Contact Us</h1>

  </div>
</div>
<!--what-is-noc starts here -->

<div class="write-to-us ">
  <div class="write-to-us-main branches">

    <div class="write-to-us-lt-cnt row">
      <div class="write-to-us-lt col-md-6">
        <div class="sel-top">
          <div class="tab-container" style="background:#012e6a">
            <div class="tab-navigation">
              <select class="head-off" id="select-box">
                <option value="1">DC Locations</option>
                <option value="2">Head Office</option>
              </select>
            </div>
            <div id="tab-1" class="tab-content">
              <div class="contact-information">
                <h3 class=" cont">Contact Information</h3>
                <p class="paraclass "><b style="color:#ffffff;">Vijayawada DC</b> <br> Survey # 49/P, Plot no -12. IT<br> Park, Autonagar, Mangalagiri,<br> Andhra Pradesh 522503</p>
                <p class="paraclass "><b style="color:#ffffff;">Hyderabad DC</b> <br> 12th Floor, Vijaya Krishna Towers, <br>Besides Fairfield by Marriott, <br>Financial District, Gachibowli, <br>Hyderabad, Telangana 500032</p>
                <p class="paraclass "><b style="color:#ffffff;">Kochi DC</b> <br> Kottapuram Road, Aroor<br> Kochi - Kerala <br> Pin: 682042</p>

                <ul>

                  <li>
                    <p class=""><a href="tel:+918712630334"><i class="fa fa-phone" aria-hidden="true"></i>+91 8712630334</a></p>
                  </li>
                  <li>
                    <p class=""><a href="mailto:reachus@pidatacenters.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                        reachus@pidatacenters.com (Sales),</a>
                      <a href="mailto:marcom@pidatacenters.com">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;marcom@pidatacenters.com (Marketing),</a>
                      <a href="mailto:hr@pidatacenters.com">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;hr@pidatacenters.com (HR),</a>
                      <a href="mailto:pifinance@pidatacenters.com">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;pifinance@pidatacenters.com (Finance)</a>
                    </p>
                  </li>
                  <!--<li>
                                    <p class="animated fadeInLeft wow"><i class="fa fa-map-marker" aria-hidden="true"></i>
SRR Middle East FZCO Technology Park, Mina-Jebel Ali, National Industrial Park,Dubai, The United Arab Emirates.</p>  
                                </li>-->
                </ul>
                <br>
              </div>
            </div>
            <div id="tab-2" class="tab-content">
              <div class="contact-information">
                <h3 class=" cont">Contact Information</h3>
                <!-- <p class="paraclass ">Pi DataCenters Pvt. Ltd.
B904 & 905
The Platina, Gachibowli,
Hyderabad, Telangana.Pin: 500032</p> -->
                <p class="paraclass ">
                  Pi DataCenters Pvt. Ltd. 12th Floor, <br> Vijaya Krishna Towers, <br>Besides Fairfield by Marriott, <br>Financial District, Gachibowli, <br>Hyderabad, Telangana 500032
                </p>
                <ul>

                  <li>
                    <p class=""><a href="tel:+918712630334"><i class="fa fa-phone" aria-hidden="true"></i>+91 8712630334</a></p>
                  </li>
                  <li>
                    <p class=""><a href="mailto:reachus@pidatacenters.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                        reachus@pidatacenters.com (Sales),</a>
                      <a href="mailto:marcom@pidatacenters.com">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;marcom@pidatacenters.com (Marketing),</a>
                      <a href="mailto:hr@pidatacenters.com">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;hr@pidatacenters.com (HR),</a>
                      <a href="mailto:pifinance@pidatacenters.com">
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;pifinance@pidatacenters.com (Finance)</a>
                    </p>
                  </li>
                  <!--<li>
                                    <p class="animated fadeInLeft wow"><i class="fa fa-map-marker" aria-hidden="true"></i>
SRR Middle East FZCO Technology Park, Mina-Jebel Ali, National Industrial Park,Dubai, The United Arab Emirates.</p>  
                                </li>-->
                </ul>
                <br>
              </div>
            </div>
          </div>


        </div>
      </div>




      <div class="write-to-us-rt col-md-6">
        <h2>WRITE TO US</h2>
        <!--<form action="" method="POST">                           
						  <ul class="row">
                                <li class="col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="name" placeholder="Enter Name" required style="background:white;">
                                </li>
                                <li class="col-md-6">
                                    <label>Phone</label>
                                    <input type="text" name="phone" placeholder="Enter Phone" required style="background:white;">
                                </li>
                                <li class="col-md-12">
                                    <label>Email Address</label>
                                    <input type="email" name="email" Placeholder="Enter Email" required style="background:white;">
                                    <input id="Email" style="background:none" name="email" type="email" required pattern="^[a-zA-Z0-9._%+-]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!live.com)(?!outlook.com)[a-zA-Z0-9_-]+.[a-zA-Z0-9-.]{2,61}$" oninvalid="setCustomValidity('Please enter business email')" onchange="try{setCustomValidity('')}catch(e){}')" placeholder="Enter Business Email">
                                </li>
								<li class="col-md-12">
								<label>Company website</label>
								<input type="url" name="company" placeholder="Company Website Link" required style="background:white;">
								</li>
                                <li class="col-md-12">
                                    <label>Message</label>
                                    <textarea name="message" style="margin-block:revert;" placeholder="Message"></textarea>                               
                                </li>
                                <li>
                                    <button  name="submit" name="submit">Send Message</button>
										<input class="btn btn-primary" type="submit" name="submit" value="Submit" />
                                </li>
                            </ul>
                            </form>-->

        <!-- <form id="contactForm" class="contact_page_form" action="https://clientele.techsters.in/public/api/client_forms" method="post"> -->
        <form class="contact_page_form" action="send-contact-form.php" method="post">
          <input class="" type="text" name="name" style="width: 100%;border-radius:5px" placeholder=" Full Name" required=""><br /><br />
          <input class="" type="tel" name="number" style="width: 100%;border-radius:5px" placeholder=" Phone" pattern="[0-9]{10}" required=""><br /><br />
          <input class="" type="email" name="email" style="width: 100%;border-radius:5px" placeholder=" Email Address" required=""><br /><br />
          <input class="" type="text" name="company" style="width: 100%;border-radius:5px" placeholder=" Company Website" required=""><br /><br />
          <textarea class="" name="message" style="width: 100%;border-radius:5px" rows="4" placeholder=" Message" required=""></textarea><br /><br />

          <div>
            <div class="g-recaptcha" data-sitekey="6LeQKSUpAAAAAJSeTQOzIzFNS5veD4M3_RAE89gm"></div>
          </div>

          <input class="btn" style="width: 100%;border-radius:5px" type="submit" value="Submit">

          <input type="hidden" name="techsters_subject" value="PiDataCenters - Contact Us">
          <input type="hidden" name="form_unique_id" value="1ef13057-52fd-11ee-a4b0-525400b78afc">
        </form>
        <!-- <iframe src="//searchmarketingsolved.com/Forms/gfembed/?f=25" width="100%" height="500" frameBorder="0" class="gfiframe"></iframe>
        <script src="//searchmarketingsolved.com/Forms/wp-content/plugins/gravity-forms-iframe-develop/assets/scripts/gfembed.min.js" type="text/javascript"></script> -->
      </div>
    </div>
  </div>
</div>

<!-- 
<div class="about-banner1 knowledge111">
  <div class="container">
    <div class="about-banner-blk1">
      <a href="https://www.google.com/maps/place/Pi+Datacenters+PVT+LTD/@16.421067,80.55841,13z/data=!4m5!3m4!1s0x0:0xdbdd8b5fc0716feb!8m2!3d16.4210672!4d80.5584101?hl=en-US" class="view-location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;View Location</a>
    </div>
  </div>
</div> -->


<div class="about-banner1 knowledge111">
  <div class="container">
    <div class="about-banner-blk1">
      <a href="https://www.google.com/maps/place/Pi+Datacenters+PVT+LTD/@16.421067,80.55841,13z/data=!4m5!3m4!1s0x0:0xdbdd8b5fc0716feb!8m2!3d16.4210672!4d80.5584101?hl=en-US" class="view-location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;View Location</a>
    </div>
  </div>
</div>


<?php include('php/includes-techsters/footer.php'); ?>
<!--footer ends-->
</div>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main-pi.js"></script>
<script>
  /* Allow only company emails */
  document
    .getElementById("Email")
    .setAttribute(
      "pattern",
      "^[a-zA-Z0-9._%+-]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!live.com)(?!outlook.com)[a-zA-Z0-9_-]+.[a-zA-Z0-9-.]{2,61}$"
    ).setAttribute(
      "oninvalid",
      "setCustomValidity('Please enter business email')"
    ).setAttribute("onchange", "try{setCustomValidity('')}catch(e){}')");
</script>
<script>
  $(document).ready(function() {
    $('.slider1').slick({
      slidesToShow: 4,
      dots: true,
      arrows: false,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });


    //animation
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
    wow.init();
  });
</script>
<script>
  $(document).ready(function() {
    $('.slider').slick({
      slidesToShow: 1,
      dots: true,
      arrows: false,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });


    //animation
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
    wow.init();
  });
</script>
<script>
  $(document).ready(function(e) {
    var TabBlock = {
      s: {
        animLen: 200
      },

      init: function() {
        TabBlock.bindUIActions();
        TabBlock.hideInactive();
      },

      bindUIActions: function() {
        $('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
          TabBlock.switchTab($(this));
        });
      },

      hideInactive: function() {
        var $tabBlocks = $('.tabBlock');

        $tabBlocks.each(function(i) {
          var
            $tabBlock = $($tabBlocks[i]),
            $panes = $tabBlock.find('.tabBlock-pane'),
            $activeTab = $tabBlock.find('.tabBlock-tab.is-active');

          $panes.hide();
          $($panes[$activeTab.index()]).show();
        });
      },

      switchTab: function($tab) {
        var $context = $tab.closest('.tabBlock');

        if (!$tab.hasClass('is-active')) {
          $tab.siblings().removeClass('is-active');
          $tab.addClass('is-active');

          TabBlock.showPane($tab.index(), $context);
        }
      },

      showPane: function(i, $context) {
        var $panes = $context.find('.tabBlock-pane');

        // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
        $panes.slideUp(TabBlock.s.animLen);
        $($panes[i]).slideDown(TabBlock.s.animLen);
      }
    };

    $(function() {
      TabBlock.init();
    });
  });
</script>
<script>
  const accordion = document.getElementsByClassName('knowledge-hub-faqs-cnt');

  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
      this.classList.toggle('active')
    })
  }
</script>
<script>
  //hide all tabs first
  $('.tab-content').hide();
  //show the first tab content
  $('#tab-1').show();

  $('#select-box').change(function() {
    dropdown = $('#select-box').val();
    //first hide all tabs again when a new option is selected
    $('.tab-content').hide();
    //then show the tab content of whatever option value was selected
    $('#' + "tab-" + dropdown).show();
  });
</script>
</body>

</html>