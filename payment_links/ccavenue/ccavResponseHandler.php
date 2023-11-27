<?php
require_once "../connection.php";
include('crypto.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../PHPMailer/src/PHPMailer.php";
require "../PHPMailer/src/Exception.php";
require "../PHPMailer/src/SMTP.php";

$workingKey = 'D1B16CF4323FB4195DE05E4C50C0F242';
$encResponse = $_POST["encResp"];
$rcvdString = decrypt($encResponse, $workingKey);
$order_status = "";
$decryptValues = explode('&', $rcvdString);
$dataSize = sizeof($decryptValues);

for ($i = 0; $i < $dataSize; $i++) {
	$information = explode('=', $decryptValues[$i]);
	if ($i == 3) {
		$order_status = $information[1];
	}
}

$response = [];

$status = "";
if ($order_status === "Success") {

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
		$mail->addAddress('pifinance@pidatacenters.com', "Pi-Datacenters");
		
		$message = "The Payment is successful <br>";
		$message .= "For order ID " . $response[1]['order_id'];

		$mail->isHTML(true);                                
		$mail->Subject = 'Payment Successful';
		$mail->Body = $message;
		
		$mail->send();

	} catch (Exception $e) {
		
	}
	array_push($response, ['status' => 'success']);
	$status = "success";
} else if ($order_status === "Aborted") {
	array_push($response, ['status' => 'aborted']);
	$status = "failure";
} else if ($order_status === "Failure") {
	array_push($response, ['status' => 'failure']);
	$status = "failure";
} else {
	array_push($response, ['status' => 'illegal']);
	$status = "failure";
}

for ($i = 0; $i < $dataSize; $i++) {
	$information = explode('=', $decryptValues[$i]);
	array_push($response, [$information[0] => $information[1]]);
}

$payment_link_unique_id = $response[1]['order_id'];
$response_json = json_encode($response);

$sql = "UPDATE payment_links set order_details = '$response_json', status = '$status' WHERE unique_id = '$payment_link_unique_id'";
mysqli_query($conn, $sql);

?>

<script>
	alert('Payment Successful.');
	window.location.href = '../ty.php';
</script>