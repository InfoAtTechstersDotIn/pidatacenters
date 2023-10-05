<?php ob_start();?>
<?php include('php/inner-header2.php');?>

<style>
    .all-click {
    background: #2680EB;
    border: 0;
    color: #ffffff;
    padding: 15px;
    text-align: center;
    width: 100%;
    display: block;
    border-radius: 38px;
    width: 175px;
    margin: 1;
    font-size: 30px;
}
.personal-information ul li{margin:0px 0px 20px 0px;}

</style>
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
         <!-- main starts here -->
          <div class="about-banner">
                 <div class="about-banner-blk">
                      <img src="images/work-with-us-banner.jpg" alt="work-with-us-banner" width="1920" height="210">
                         <h2></h2>
                     
                 </div>
         </div>
          <!--what-is-noc starts here -->
<?php
if(isset($_POST['button'])){
  
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'leads@pidatacenters.com';                 // SMTP username
$mail->Password = 'Pi_datacenters@2023';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'leads@pidatacenters.com';
$mail->FromName = 'Mailer';
$mail->addAddress('marcom@pidatacenters.com', 'Joe User');     // Add a recipient
$mail->addAddress('marcom@pidatacenters.com');               // Name is optional
$mail->addReplyTo('info@pidatacenters.com', 'Information');
$mail->addCC('vijay@3dm.agency');
$mail->addBCC('vijay@3dm.agency');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
?>

		  <?php
/*


if(isset($_POST['button']) && isset($_FILES['attachment']))
{
	$from_email = 'noreply@pidatacenters.com'; //from mail, sender email address
	$recipient_email = 'leads.pidatacenters@outlook.com'; //recipient email address
	
	//Load POST data from HTML form
	$sender_name = $_POST["sender_name"]; //sender name
	$reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header
	$firstname = $_POST["name"];
        $email = $_POST["email"];
       $phone = $_POST["phone"];
       $organisation = $_POST["organisation"];
	$subject	 = "RFA Details -".$firstname; //subject for the email
	$message = "Firstname:  ".$firstname. "\r\n" . "Email:  " .$email . "\r\n" . "Phone:  " .$phone . "\r\n" . "Organisation:  ".$organisation;
	


	/*Always remember to validate the form fields like this
	if(strlen($sender_name)<1)
	{
		die('Name is too short or empty!');
	}
	
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
				header("Location:https://pidatacenters.com/thank-you-applied.php");
	}
	else{
		die("Sorry but the email could not be sent.
					Please go back and try again!");
	}
}
*/?>
          <div class="seniour-uxui-designer">
          <div class="container">
              <div class="seniour-uxui-designer-main">
                  
                  <div class="personal-information">
				  		  

                    <h4>Request For Proposal</h4>
                     <!--<form enctype="multipart/form-data" method="POST" action="" >
                        <ul class="row">
                            <li class="col-md-6">
                                <label> Name</label>
                                <input type="text" name="name"  Placeholder="Enter Your Name" style="background:none;" required>
								
                            </li>
                             <li class="col-md-6">
                                <label>Email Address</label>
                                <input type="text" name="email"  Placeholder="Enter Your Email address" style="background:none;" required>
                            </li>
                             <li class="col-md-6">
                                <label>Phone number</label>
                                <input type="text" name="phone"  Placeholder="Enter Your Phone Number" style="background:none;" required>
                            </li>
                             <li class="col-md-6">
                                <label>Organisation</label>
                                <input type="text" name="organisation" placeholder="Enter Your Organisation"  style="background:none;" required>
                            </li>
                             <li class="col-12">
							   <label>Upload Your RFP</label>
                                <input type="file" name="attachment"  style="background:none;" >
                            </li>
                            
							<li class="col-12">
                               <input type="submit" class="all-click" name="button" value="submit">
                            </li>
                        </ul>  
                     </form>-->
					 <iframe src="//searchmarketingsolved.com/Forms/gfembed/?f=8" width="100%" height="500" frameBorder="0" class="gfiframe"></iframe>
<script src="//searchmarketingsolved.com/Forms/wp-content/plugins/gravity-forms-iframe-develop/assets/scripts/gfembed.min.js" type="text/javascript"></script>
                </div>
                  
                 
                 
				   
          </div>
          </div>
          
		   
          
  <?php include('php/footer2.php');?>
          
          
         
          
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
         $(document).ready(function() {
                 $('.slider').slick({
                 slidesToShow: 1,
                  dots: true,
                  arrows: false,
  //adaptiveHeight: true,
  responsive: [
    {
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
             wow = new WOW(
                       {
                           animateClass: 'animated',
                           offset: 100,
                           mobile: true
                       }
               );
               wow.init(); 
             }); 
              
      </script>
   </body>
</html>