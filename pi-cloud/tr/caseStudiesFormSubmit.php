<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



	include_once('includes/db-config.php');
 	//include_once('includes/header.php');

	 $data = new Databases;



if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
        $cleanedFrom = trim(strip_tags($_POST['email'])); 
    } else { 
        echo json_encode(array(
            "status" => 'err',
            "status_code"=> 406,
            "message" => 'Email format is incorrect',
        )); 
        die;
    } 
    

    if($_POST['name'] == "" || $_POST['companyName'] == "" || $_POST['mobile'] == "" || $_POST['email'] == "" || $_POST['post_id'] == ""){
        echo json_encode(array(
            "status" => 'err',
            "status_code"=> 406,
            "message" => 'Fill All Values',
        ));   
        die;
    }else{
        $casePostData = array(
            'name'  => $_POST['name'],
            'companyName'  => $_POST['companyName'],
            'mobile'  => $_POST['mobile'],
            'email'  => $_POST['email'],
            'post_id'  => $_POST['post_id'],
            'ipaddress' => $ip
        );

        $caseData = $data->caseStudiesFormSub($casePostData);
    
         if(count($caseData)){
            
        

            // PREPARE THE BODY OF THE MESSAGE

			$messagehtml = '<html><body>';
			$messagehtml .= '<img src="https://pidatacenters.com/wp-content/uploads/2017/12/xPi-Logo-180x80.png,qv21.pagespeed.ic.jl8m2P42fh.webp" alt="Harbour1 Logo" />';
			$messagehtml .= "<h3>User IP Address:" . strip_tags($ip) . " </h3>";
			$messagehtml .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$messagehtml .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			$messagehtml .= "<tr><td><strong>companyName:</strong> </td><td>" . strip_tags($_POST['companyName']) . "</td></tr>";
			$messagehtml .= "<tr><td><strong>mobile:</strong> </td><td>" . strip_tags($_POST['mobile']) . "</td></tr>";
			$messagehtml .= "<tr><td><strong>email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			$messagehtml .= "<tr><td><strong>post_id:</strong> </td><td>" . strip_tags($_POST['post_id']) . "</td></tr>";
			$messagehtml .= "<tr><td><strong>ipaddress:</strong> </td><td>" . strip_tags($ip) . "</td></tr>";
			
			$messagehtml .= "</table>";
			$messagehtml .= "</body></html>";

            
            $mail = new PHPMailer;
            $mail->isSMTP(); 
            $mail->Host = "smtp.gmail.com"; 
            $mail->Port = "587"; // typically 587 
            $mail->SMTPSecure = 'tls'; // ssl is depracated
            $mail->SMTPAuth = true;
            $mail->Username = "mounika.ch@pidatacenters.com";
            $mail->Password = "xkjvwotlxztixxov";
            $mail->setFrom("mounika.ch@pidatacenters.com", "Mounika");
            $mail->addAddress("marcom@pidatacenters.com", "Marcom");
            //Content
            $mail->isHTML(true); 
            $mail->Subject = 'Case Studies Form - Harbour1';
            $mail->msgHTML($messagehtml); // remove if you do not want to send HTML email
            $mail->AltBody = 'HTML not supported';

                if($mail->send()){
                    

                    echo ltrim(json_encode(array(
                        "status" => 'success',
                        "status_code"=> 201, 
                        "data" => $caseData['full_img'],
                        "message" => 'Inserted Sucessfully'
                    )));
                }else{
                    echo ltrim(json_encode(array(
                        "status" => 'err',
                        "status_code"=> 406,
                        "message" => 'mailerror'
                    )));
                }
        }
    }
}else {
    echo json_encode(array(
    "status" => 'err',
    "status_code"=> 503 ,
    "message" => 'Invalid method'
    ));
}
