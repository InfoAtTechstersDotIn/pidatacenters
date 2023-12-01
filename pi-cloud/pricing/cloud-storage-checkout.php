<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/SMTP.php";

$data = [
    'disk_space' => $_GET['disk_space'],
    'data_transfer' => $_GET['data_transfer'],
    'storage_type' => $_GET['storage_type'],
    'tenure' => $_GET['tenure'],
    'bandwidth' => $_GET['bandwidth'],
    'name' => $_GET['name'],
    'email' => $_GET['email'],
    'phone' => $_GET['phone'],
    'monthly_cost' => "Rs ". $_GET['monthly_cost'],   
];

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
    $mail->addAddress('labhansh.s@techsters.in', "Labhansh"); 
    
    $message = "Cloud Storage Quote <br><br>";
    foreach ($data as $key => $value) {
        $message .= ucwords(str_replace('_',' ',strtolower($key))) ." = ". $value ."<br>";
    }

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

