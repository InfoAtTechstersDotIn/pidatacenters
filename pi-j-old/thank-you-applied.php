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



/*ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

date_default_timezone_set("Asia/Calcutta");
if(isset($_GET['submit'])) {
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];
$ts = date('d-m-Y H:i:s');

$data =  <<<EOF
Name : $name
Email : $email
Phone : $phone
CompanyName : $message
Timestamp : $ts
EOF;

$to ='vijay@3dm.agency';
$from='noreply@Pi_datacenters.com';
$headers = "From:<noreply@Pi_datacenters.com>";
$subject = "Pi_datacenters - New Lead";


mail($to,$subject,$data,$headers);


}*/
?>

 <?php



if(isset($_GET['submit']) && isset($_FILES['attachment']))
{
	$from_email		 = 'noreply@pidatacenters.com'; //from mail, sender email address
	$recipient_email = 'vijay@3dm.agency'; //recipient email address
	
	//Load POST data from HTML form
	$sender_name = $_GET["sender_name"]; //sender name
	$reply_to_email = $_GET["sender_email"]; //sender email, it will be used in "reply-to" header
	echo $firstname = $_GET["fname"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $position = $_GET["position"];exit();
	$subject	 = "Job Application -".$firstname."Position-".$position; //subject for the email
	$message = "Firstname:  ".$firstname. "\r\n" . "Email:  " .$email . "\r\n" . "Phone:  " .$phone . "\r\n" . "Applied Position:  ".$position;
	


	/*Always remember to validate the form fields like this
	if(strlen($sender_name)<1)
	{
		die('Name is too short or empty!');
	}
	*/
	//Get uploaded file data using $_FILES array
	$tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
	$name	 = $_FILES['attachment']['name']; // get the name of the file
	$size	 = $_FILES['attachment']['size']; // get size of the file for size validation
	$type	 = $_FILES['attachment']['type']; // get type of the file
	$error	 = $_FILES['attachment']['error']; // get the error (if any)

	//validate form field for attaching the file
	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}

	//read from the uploaded file & base64_encode content
	$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
	$content = fread($handle, $size); // reading the file
	fclose($handle);				 // close upon completion

	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random"); // define boundary with a md5 hashed value

	//header
	$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
	$headers .= "From:".$from_email."\r\n"; // Sender Email
	$headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
	$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
	$headers .= "boundary = $boundary\r\n"; //Defining the Boundary
		
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .= chunk_split(base64_encode($message));
		
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content; // Attaching the encoded file with email
	
	$sentMailResult = mail($recipient_email, $subject, $body, $headers);

	if($sentMailResult ){
		echo "<h3 style='color:green;text-align:Center'>Application Sent Successfully.<h3>";
		// unlink($name); // delete the file after attachment sent.
	}
	else{
		die("Sorry but the email could not be sent.
					Please go back and try again!");
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
               <a href="https://pidatacenters.com/">
               <img src="images/logo.png" alt="logo" width="150" height="65">
               </a> 
               <p>Thanks for submitting your information. <br> Our team will get in touch at the earliest.</p>
               						
                  
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

