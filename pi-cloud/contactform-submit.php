<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




$con = mysqli_connect("localhost", "harbourdash", "Iaa4oubsCnitLVrH", "pi-cloudForms");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }

 
//print_r('test');
//print_r("test");exit;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // encode $_POST data to json
// Takes raw data from the request
//$json = file_get_contents('php://input');

// Converts it into a PHP object
//$data = json_decode($json);
//print_r("test");exit;

//getting IP Address of the User

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
 

    //  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
                
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
    if (preg_match($pattern, trim(strip_tags($_POST['bemail'])))) { 
        $cleanedFrom = trim(strip_tags($_POST['bemail'])); 
    } else { 
        echo json_encode(array(
            "status" => 'err',
            "status_code"=> 406,
            "message" => 'Email format is incorrect',
        )); 
    } 

    $name  = $_POST['name'];
    $phone  = $_POST['phone'];
    $company  = $_POST['company'];
    $bemail  = $_POST['bemail'];
    $subject  = $_POST['subject'];
    $message  = $_POST['message'];
    //print_r($message);exit;

    if($name == "" || $phone == "" || $company == "" || $bemail == "" || $subject == "" || $message == ""){
        echo json_encode(array(
            "status" => 'err',
            "status_code"=> 406,
            "message" => 'Fill All Values',
        ));   
    }else{
        $contactus = "INSERT INTO `contactus` (`name`, `phone`, `company`,`bemail`, `subject`, `message`,`ipaddress`) 
    VALUES ('$name', '$phone', '$company', '$bemail', '$subject', '$message', '$ip')";
    
        //print_r($contactus);exit;
        $result_contactus = mysqli_query($con, $contactus);
        if (!$result_contactus) {
            echo json_encode(array(
                "status" => 'err',
                "status_code"=> 406,
                "message" => 'check values again',
            ));
        } else {

            
            // //Set who the message is to be sent from, you need permission to that email as 'send as'
            // $mail->SetFrom('info@pi-cloud.in', 'Hosting Group Inc.'); //you need "send to" permission on that account, if dont use yourname@mail.org

            // //Set an alternative reply-to address
            // $mail->addReplyTo('srikanth.komakula@pidatacenters.com', 'First Last');

            // //Set who the message is to be sent to
            // $mail->addAddress('info@pi-cloud.in', 'SIMON MÜLLER');
            // //Set the subject line
            // $mail->Subject = 'PHPMailer SMTP test';
            // //Read an HTML message body from an external file, convert referenced images to embedded,
            // //convert HTML into a basic plain-text alternative body
            // //$mail->msgHTML(file_get_contents('replace-with-file.html'), __DIR__);  //you can also use
            // //$mail->Body = "</p>This is a <b>body</b> message in html</p>"
            // $mail->Body = '<html><body>';
            // $mail->Body .= '<img src="https://pidatacenters.com/wp-content/uploads/2017/12/xPi-Logo-180x80.png,qv21.pagespeed.ic.jl8m2P42fh.webp" alt="pi-cloud Logo" />';
            // $mail->Body .= "<h3>User IP Address:" . strip_tags($ip) . " </h3>";
            // $mail->Body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            // $mail->Body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
            // $mail->Body .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
            // $mail->Body .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($bemail) . "</td></tr>";
            // $mail->Body .= "<tr><td><strong>Company:</strong> </td><td>" . strip_tags($company) . "</td></tr>";
            // $mail->Body .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($subject) . "</td></tr>";
            // $mail->Body .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($message) . "</td></tr>";
                        
            // $mail->Body .= "</table>";
            // $mail->Body .= "</body></html>";
            // //Replace the plain text body with one created manually
            // $mail->AltBody = 'This is a plain-text message body';
            // //Attach an image file
            // //$mail->addAttachment('../../../images/phpmailer_mini.png');
            // PREPARE THE BODY OF THE MESSAGE

            $messagehtml = '<html><body>';
            $messagehtml .= '<img src="https://pidatacenters.com/wp-content/uploads/2017/12/xPi-Logo-180x80.png,qv21.pagespeed.ic.jl8m2P42fh.webp" alt="pi-cloud Logo" />';
            $messagehtml .= "<h3>User IP Address:" . strip_tags($ip) . " </h3>";
            $messagehtml .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $messagehtml .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
            $messagehtml .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
            $messagehtml .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($bemail) . "</td></tr>";
            $messagehtml .= "<tr><td><strong>Company:</strong> </td><td>" . strip_tags($company) . "</td></tr>";
            $messagehtml .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($subject) . "</td></tr>";
            $messagehtml .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($message) . "</td></tr>";
            
            $messagehtml .= "</table>";
            $messagehtml .= "</body></html>";

            // $mail = new PHPMailer(true);
            // $mail->Host = "smtp.office365.com";
            // $mail->Port       = 587;
            // $mail->SMTPSecure = '';
            // $mail->SMTPAuth   = true;
            // $mail->Username = "info@pi-cloud.in";
            // $mail->Password = "pi-cloud@pi123";
            // $mail->SetFrom('info@pi-cloud.in', 'Name');
            // $mail->addReplyTo('info@pi-cloud.in', 'Harobur1');
            // $mail->SMTPDebug  = 2;
            // $mail->IsHTML(true);
            // $mail->MsgHTML($messagehtml);




            $mail = new PHPMailer;
            $mail->isSMTP(); 
            $mail->SMTPDebug = 2; 
            $mail->Host = "smtp.gmail.com"; 
            $mail->Port = "587"; // typically 587 
            $mail->SMTPSecure = 'tls'; // ssl is depracated
            $mail->SMTPAuth = true;
            $mail->Username = "srikanth.komakula@pidatacenters.com";
            $mail->Password = "Srikanth@pi";
            $mail->setFrom("srikanth.komakula@pidatacenters.com", "srikanth");
            $mail->addAddress("srikanth.komakula25@gmail.com", "srikanth");
            $mail->Subject = 'Any_subject_of_your_choice';
            $mail->msgHTML($messagehtml); // remove if you do not want to send HTML email
            $mail->AltBody = 'HTML not supported';
            //$mail->addAttachment('docs/brochure.pdf'); //Attachment, can be skipped

            $mail->send();
            print_r($name);exit;

            

            //send the message, check for errors
            if (!$mail->send()) {
                echo json_encode(array(
                    "status" => 'err',
                    "status_code"=> 406,
                    "message" => 'Error in mail sending'
                ));
            } else {
                echo json_encode(array(
                    "status" => 'success',
                    "status_code"=> 201,
                    "message" => 'Inserted Sucessfully'
                ));
            }
           
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();
        }
    }
}else {
    echo json_encode(array(
    "status" => 'err',
    "status_code"=> 503 ,
    "message" => 'Invalid method'
    ));
}
