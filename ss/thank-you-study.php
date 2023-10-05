<?php include('php/inner-header.php');?>
<?php
$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$dbname = "search8c_pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
	
	

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Your Website URL Goes Here
$url="http://103.210.73.24/";

if(isset($_POST['submit'])) {

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    $message = "You have received following information:<br><br>";
    $message.="Name: ".$_GET['name']."<br>";
    $message.="Email: ".$_GET['email']."<br>";
    $message.="Phone: ".$_GET['phone']."<br>";
    $message.="Message: ".$_GET['message']."<br>";

    try {
      $mail->SMTPDebug = 3;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'kvijaykumar8885@gmail.com';
      $mail->Password = 'satya143honey';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
      $mail->From = "kvijaykumar8885@gmail.com";
      $mail->FromName = "Pi Datacenters Website";
      $mail->addAddress('vijay@3dm.agency');
      $mail->isHTML(true);
      $mail->Subject = 'Mail from Case Study from website';
      $mail->Body = $message;

      $mail->send();
      //echo 'Message has been sent';
      
        header("Location:https://pidatacenters.com/thank-you.php");
      
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



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
               <a href="index.php">
               <img src="images/logo.png" alt="logo" width="150" height="65">
               </a> 
               <p>Thanks for submitting your information.</p>
               						<?php

 $todo = $_GET['id'];

$r="SELECT * from service where id= '$todo'";
$k=mysqli_query($conn,$r)or die(mysql_error());

if(mysqli_num_rows($k)>0)
{
while($row=mysqli_fetch_object($k))
{
?>
                  <div class="button">
                      <a href="dashboard/uploads/services/<?php echo $row->cfile;?>" download>Download Now</a> &nbsp;
                        <a href="https://pidatacenters.com/case-studies" >For More Case Studies</a>
                      </div>
               
                      </div>
					  <?php

}
}
else
{
echo "<span>unable to Download</span>";


}
$conn->close();
?>
                  
            </div>
            <style>
               .button{text-align:center;padding:10px 0 0 0;}
               .button a{text-align:center;padding:12px;font-size:14px;line-height:18px;color:#fff;background:#223f97;display:inline-block;font-weight:700;}
               .thank-you a img{max-width:100%;height:auto;width: auto;display:inline-block;}
               .thank-you{padding:210px 0 0 0;text-align:center;}
               .thank-you p{font-size:30px;line-height:42px;color:#fff;font-weight:600;text-decoration: none;padding:10px 0 0 0;text-align:center;color:black;}
               @media only screen and (max-width: 479px) {
               .thank-you p{font-size:22px;line-height:26px;}
               .thank-you p br{display:none;}
               .thank-you{padding:250px 20px 0 20px;}
               }
            </style>
         </div>
      <!-- contact form -->
      <!-- wrapper ends -->
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
     


   </body>
</html>