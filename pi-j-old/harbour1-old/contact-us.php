
<?php
include_once('includes/header.php');
?>
<div class="hb-bannerCont">
	<div class="hb-bannerImgCont">
		<div class="hb-bannerImg">
			<picture>
			     <source media="(max-width: 768px)" srcset="images/banners/contactus_mbanner.png" al>
			      <img  src="images/banners/contactus_banner.png" alt="Harbour1 Cloud Backup as a Service Banner" style="width:100%">
      		</picture>
		</div>		
	</div>
</div>


<section class="hb-bgG">
	<div class="container">
	</div>

	
	<div class="hb-contacList">
		<div class="container">
		<ul class="list-inline hb-contactInfo">
			<li>
				<div class="hb-contForm">
					<h1>Reach Us</h1>
					<p>Please fill in form below, and we’ll get back to you soon.</p>
					<div class="hb-contactus">
						<!--<form class="hb-contact-form" id="contactForm">
						<div class="form-group">
							<label>Name<span>*</span></label>
							<input type="text" name="name"  required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Phone Number<span>*</span></label>
							<input type="number" name="phone" required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Company<span>*</span></label>
							<input type="text" name="company"  required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Email<span>*</span></label>
							<input type="email" name="bemail" required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="subject"  required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Message<span>*</span></label>
							<textarea placeholder="Please Enter your message" name="message"></textarea>
						</div>
						<div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcEapMaAAAAAD0nM-2xZx-FIIRW-ide1DKIQLbX" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                          
                            <div class="help-block with-errors"></div>
                        </div>
						<div class="form-group">
							
							<button class="global-button hb-connect" type="submit" style="height: 42px;">SUBMIT</button>
						</div>

					</form>-->
					<form class="hb-contact-form" method="post" >
						<div class="form-group">
							<label>Name<span>*</span></label>
							<input type="text" name="name"  required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Phone Number<span>*</span></label>
							<input type="number" name="phone" required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Company<span>*</span></label>
							<input type="text" name="company"  required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Email<span>*</span></label>
							<input type="email" name="bemail" required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="subject"  required="" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Message<span>*</span></label>
							<textarea placeholder="Please Enter your message" name="message"></textarea>
						</div>
						<div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcEapMaAAAAAD0nM-2xZx-FIIRW-ide1DKIQLbX" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                          
                            <div class="help-block with-errors"></div>
                        </div>
						<div class="form-group">
							
							<button class="global-button hb-connect" type="submit" name="submit" style="height: 42px;">SUBMIT</button>
						</div>

					</form>
					<?php
/*include_once 'PHPMailerAutoload.php'; 
if (!empty($_POST)) { 
    echo $_POST['name'];die();

    if($_POST['name']) : $name = $_POST['name']; endif;
    if($_POST['email']) : $email = $_POST['email']; endif;
    if($_POST['phone']) : $phone = $_POST['phone']; endif;
    if($_POST['message']) : $fmessage = $_POST['message']; endif;

    date_default_timezone_set("Asia/Kolkata");
    
    $subject = 'Enquiry for UltraTMT'; 
    $message ="hello friends";
    $mail = new PHPMailer();
    $mail->From      = $email;
    $mail->FromName  = $name;
    $mail->Subject   = $subject;
    $mail->Body      = $message;
    $mail->SetFrom( $email, 'BB-UltraTMT Enquiry');
    $mail->AddReplyTo( $email, $from);
    
    //$mail->AddAddress('', 'sreeda');   
    $mail->AddAddress('vijay@3dm.agency', 'Ultra TMT');         
    $mail->AddAddress('vijay.3dmagency@gmail.com', 'vijay BigBears');
    
       //$mail->AddCC('', '');  
       //$mail->AddBcc('a.surendra83@gmail.com','Surendra');                   
       
    $mail->IsHTML(true);
     
//$status=mail($to, $subject, $message, $headers);
if ($mail->Send())
    {    
   header("location: thank-you.php");
    } else {
        echo "There was an error:\n";
        echo $mail->ErrorInfo;
    }   
       
}
/*if(isset($_POST['submit'])){

    $to = "kvijaykumar8885@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    
    $subject=$_POST['subject'];
    $date = date('y-m-d');

    
        $subject = $_POST['name']." -  Enquiry | ";
		$message = "The lead details are:<br> " .$name . "<br>". $_POST['email']. "<br>".$_POST['subject'] ."<br><br>--<br><b><a href=\"\"> | </a></b> <br>.<br>";
        
		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:" . $from;


   mail($to,$subject,$message,$headers);*/
       
//}



require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

if(isset($_POST['submit'])){
$mail->SMTPDebug = 3;                               // Enable verbose debug output

echo $mail->isSMTP();                                      // Set mailer to use SMTP
echo $mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
echo $mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@mg.pidatacenters.com';                 // SMTP username
$mail->Password = '8f75b5f4b4e6074dfea9c4b4f2e8ccba';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'from@example.com';
$mail->FromName = 'Mailer';
$mail->addAddress('vijaykumar99305@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('vijay@3dm.agency');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
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


					
					</div>
				</div>
			</li>
			<li>
				<div class="hb-addrs">
					
					<ul class="list-unstyled hb-addr_list">
						<li>
							<div class="hb-address">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<p class="hb-mail">
									<a href="mailto:info@harbour1.in">info@harbour1.in</a>
<!-- 									<a href="mailto:marcom@pidatacenters.com">marcom@pidatacenters.com</a>
 -->								</p>
							</div>	
							<div class="hb-address">
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<p class="hb-mail">
									<!--<a href="tel:+91 8632347555">+91 8632347555</a>-->
									<a href="tel:+91 9030066202">+91 8978517793</a>
								</p>
							</div>
						</li>
						
						<li>
							<div class="hb-address">
								<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<address>
									<strong>Headquarters</strong>
									<span>Pi Datacenters Pvt. Ltd. </span>
									<span>B904 & 905 </span>
									<span>The Platina, Gachibowli, </span>
									<span>Hyderabad, Telangana </span>
									<span>Pin: 500032 </span>
								</address>
							</div>
						</li>
						<li>
							<div class="hb-address">
								<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<address>
									<strong>Vijayawada DC</strong>
									<span>Pi Datacenters Pvt. Ltd. </span>
									<span>Survey # 49/P, Plot no -12 ,</span>
									<span>IT Park, Mangalagiri, Guntur (Dist.),</span>
									<span>Amaravati, Andhra Pradesh ,</span>
									<span>Pin: 522503</span>
								</address>
							</div>
						</li>
						
						
						<li>
							<div class="hb-address">
								<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<address>
									<strong>Kochi DC</strong>
									<span>Pi Datacenters Pvt. Ltd. </span>
									<span>InfoPark Kochi, Phase 2,  </span>
									<span>Kakkanad, Kochi - 682042</span>
									<span>Kerala.</span>
								</address>
							</div>
						</li>
						
						<li>
							<div class="hb-address">
								<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<address>
									<strong>Noida DC </strong>
									<span>Pi Datacenters Pvt. Ltd. </span>
									<span>Electronic City, C-34, </span>
									<span>Sector 62 Rd, C Block, </span>
									<span>Phase 2,Industrial Area,Sector 62, </span>
									<span>Noida, Uttar Pradesh ,</span>
									<span>Pin: 201307 </span>
								</address>
							</div>
						</li>
<li>
							<div class="hb-address">
								<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<address>
									<strong>Other Regional Offices</strong>
									<span>Mumbai  | Bengaluru  | Chennai  | Delhi  </span>
								</address>
							</div>
						</li>

						
						
						
					</ul>
				</div>
			</li>
		</ul>
	</div>
	</div>
</section>


	<?php
include_once('includes/footer.php');
?>
