<?php
/*date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit']) && isset($_FILES['attachment'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$message = $_POST['message'];
$education = $_POST['education-infor'];
$degree = $_POST['degree'];
$specialization = $_POST['$specialization'];
$from_year = $_POST['from_year'];
$to_year = $_POST['to_year'];
$edu_department2 =  $_POST['department2'];
$job_title = $_POST['job-title'];
$emp_type = $_POST['emp-type'];
$company = $_POST['company'];
$location = $_POST['location'];
$start_date = $_POST['start-date'];
$end_date = $_POST['end-date'];
$role = $_POST['role'];
$ts = date('d-m-Y H:i:s');

$data =  <<<EOF
Name : $name
Email : $email
Phone : $phone
Department : $department
Education : $education
Degree : $degree
Specialization : $specialization
From_Year : $from_year
To_Year : $to_year
Job_Title : $job_title
Employement_Type : $emp_type
Company : $company
Location : $location
Start_date : $start_date
End_date : $end_date
Role : $role
Timestamp : $ts
EOF;

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

	$encoded_content = base64_encode($content);
	$boundary = md5("random"); // define boundary with a md5 hashed value
	
  //plain text
	//$data = "--$boundary\r\n";
	//$data .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	//$data .= "Content-Transfer-Encoding: base64\r\n\r\n";
	//$data .= base64_encode($message);
		
	//attachment
	$data .= "--$boundary\r\n";
	$data .="Content-Type: $type; name=".$name."\r\n";
	$data .="Content-Disposition: attachment; filename=".$name."\r\n";
	$data .="Content-Transfer-Encoding: base64\r\n";
	$data .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$data .= $encoded_content; // Attaching the encoded file with email
	
	

$to ='vijay@3dm.agency';

$from='noreply@pidatacenters.com';
$headers = "From:<noreply@pidatacenters.com>";
$subject = "pidatacenters - New Lead";
$sentMailResult=mail($to,$subject,$data,$headers);

if($sentMailResult )
	{
	echo "<h3>Mail Sent Successfully.<h3>";
	// unlink($name); // delete the file after attachment sent.
	}
	else
	{
	die("Sorry but the email could not be sent.
					Please go back and try again!");
	}
}
*/?>

<?php

if(isset($_POST['submit']) && isset($_FILES['attachment']))
{
	$from_email = 'Noreply@pidatacenters.com'; 
	$to = 'recruitment@pidatacenters.com'; //recipient email address
	
	//Load POST data from HTML form
	//$sender_name = $_POST["fullname"]; //sender name
	$reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header
	$subject	 = $_POST["subject"]; //subject for the email
	 $message = 'Fullname: '. $_POST['fullname'].'<br /> Email:' . $_POST['email'].'
<br> Phone :' . $_POST['phone'].'
<br> Department:' .$_POST['department'].'
<br> Education :' .$_POST['education-infor'].'
<br> Degree: ' .$_POST['degree'].'
<br> Specialization: ' .$_POST['specialization'].'
<br> From_Year: ' .$_POST['from_year'].'
<br> To_Year: ' .$_POST['to_year'].'
<br> Job_Title: ' .$_POST['job-title'].'
<br> Employement_Type: ' .$_POST['emp-type'].'
<br> Company: ' .$_POST['company'].'
<br> Location: ' .$_POST['location'].'
<br> Start_date: ' .$_POST['start-date'].'
<br> End_date: ' .$_POST['end-date'].'
<br> Role: ' .$_POST['role'].'




';
	
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
	
	$sentMailResult = mail($to, $subject, $body, $headers);

	if($sentMailResult )
	{
	echo "<h3>Mail Sent Successfully.<h3>";
	// unlink($name); // delete the file after attachment sent.
	}
	else
	{
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
      <title>Praneeth-Home &#8211; Welcome to Praneeth Pranav Flora</title>
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
