<?php
ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$ts = date('d-m-Y H:i:s');

$data =  <<<EOF
Name : $name
Email : $email
Phone : $phone
Message : $message
Timestamp : $ts
EOF;

$to ='marcom@pidatacenters.com';
$from='noreply@Pi_datacenters.com';
$headers = "From:<noreply@Pi_datacenters.com>";
$subject = "Pi_datacenters - New Lead";


mail($to,$subject,$data,$headers);


}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="keywords" content=" ">
      <meta name="description" content=" ">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- SET: Title -->
      <title>Pidatacenters</title>
      <!-- SET: Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
      <!-- SET: Stylesheet -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <link href="css/bootstrap4hack.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="css/responsive.css" rel="stylesheet" type="text/css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
         nav ul li a {fo}
      </script>
      <style></style>
      <![endif]-->
      
   </head>
   <body>
     
      <!-- wrapper starts -->
      <div class="wrapper">
         <div class="main-content">
            <div class="thank-you" style="background: url(images/tint.jpg) no-repeat;width:100%;background-size: cover;height: 100vh;">
               <a href="https://pidatacenters.com/">
               <img src="images/logo.png" alt="logo" width="150" height="65">
               </a> 
               <p>Thanks for submitting your information. <br> Our team will get in touch at the earliest.</p>
               <!--
                  <div class="button">
                      <a href="pdfs/INAIR%20Fresh%20air%20ventilation%20system.pdf">Download Brochure</a>
                      </div>
                  -->
            </div>
            <style>
               .button{text-align:center;padding:10px 0 0 0;}
               .button a{text-align:center;padding:12px;font-size:14px;line-height:18px;color:#fff;background:#76cdeb;display:inline-block;font-weight:700;}
               .thank-you a img{max-width:100%;height:auto;width: auto;display:inline-block;}
               .thank-you{padding:210px 0 0 0;text-align:center;}
               .thank-you p{font-size:40px;line-height:42px;color:#fff;font-weight:600;text-decoration: none;padding:10px 0 0 0;text-align:center;color:black;}
               @media only screen and (max-width: 479px) {
               .thank-you p{font-size:22px;line-height:26px;}
               .thank-you p br{display:none;}
               .thank-you{padding:250px 20px 0 20px;}
               }
            </style>
         </div>
      </div>
      <!-- contact form -->
      <!-- wrapper ends -->
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
     


   </body>
</html>