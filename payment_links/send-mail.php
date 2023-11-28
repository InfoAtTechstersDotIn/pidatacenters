<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/SMTP.php";

$email = $_GET["email"];
$name = $_GET["name"];
$payment_link = $_GET["payment_link"];

$mail = new PHPMailer(true);                              
try {
    
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.office365.com';                  
    $mail->SMTPAuth = true;                              
    $mail->Username = 'reachus@pidatacenters.com';             
    $mail->Password = 'Pi_Datacenters@2023';                           
    $mail->SMTPSecure = 'tsl';                            
    $mail->Port = 587;           

    $mail->setFrom('reachus@pidatacenters.com', 'Pi-Datacenters');              
    $mail->addAddress($email, $name); 
    
    $message = "Your Payment Link <br>";
    $message .= "Click on the below link to make payment <br>";
    $message .= $payment_link;

    $mail->isHTML(true);                                
    $mail->Subject = 'Payment Link';
    $mail->Body = $message;
    
    $mail->send();
    
    echo json_encode([
        'status' => 'true',
        'message' => 'Message has been sent',
        'data' => null
    ]);

} catch (Exception $e) {
    echo json_encode([
        'status' => false,
        'message' => 'Message could not be sent',
        'error' => null
    ]);
}

