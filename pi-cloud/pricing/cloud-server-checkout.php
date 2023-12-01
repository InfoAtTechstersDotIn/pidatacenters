<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/Exception.php";
require "./PHPMailer/src/SMTP.php";

$data = [
    'cpu_cors' => $_GET['cpu_cors'],
    'ram' => $_GET['ram'],
    'diskspace' => $_GET['diskspace'],
    'data_transfer' => $_GET['data_transfer'],
    'operating_system' => $_GET['operating_system'],
    'storage_type' => $_GET['storage_type'],
    'database' => $_GET['database'],
    'public_ip' => $_GET['public_ip'],
    'dedicated_bandwidth' => $_GET['dedicated_bandwidth'],
    'backup_storage' => $_GET['backup_storage'],
    'backup_license' => $_GET['backup_license'],
    'antivirus' => $_GET['antivirus'],
    'tenurearr' => $_GET['tenurearr'],
    'two_factor_authentication' => $_GET['two_factor_authentication'],
    'elastic_load_balancer' => $_GET['elastic_load_balancer'],
    'otc_migration_tool' => $_GET['otc_migration_tool'],
    'dr_replication_tool' => $_GET['dr_replication_tool'],
    'ms_rdp_call_license' => $_GET['ms_rdp_call_license'],
    'ms_rdp_call_license_quantity' => $_GET['ms_rdp_call_license_quantity'],
    'web_panel' => $_GET['web_panel'],
    'dedicated_firewall' => $_GET['dedicated_firewall'],
    'vpn' => $_GET['vpn'],
    'name' => $_GET['name'],
    'email' => $_GET['email'],
    'phone' => $_GET['phone'],
    'monthly_cost' => $_GET['monthly_cost'] 
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
    
    $message = "Cloud Server Quote <br><br>";
    foreach ($data as $key => $value) {
        $message .= ucwords(str_replace('_',' ',strtolower($key))) ." = ". $value ."<br>";
    }

    $mail->isHTML(true);                                
    $mail->Subject = 'Cloud Server Quote';
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

