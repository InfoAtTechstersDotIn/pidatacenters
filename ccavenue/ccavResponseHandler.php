<?php
require_once "../ecomm/connection.php";
include('crypto.php');

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

if ($order_status === "Success") {
	array_push($response, ['status' => 'success']);
} else if ($order_status === "Aborted") {
	array_push($response, ['status' => 'aborted']);
} else if ($order_status === "Failure") {
	array_push($response, ['status' => 'failure']);
} else {
	array_push($response, ['status' => 'illegal']);
}

for ($i = 0; $i < $dataSize; $i++) {
	$information = explode('=', $decryptValues[$i]);
	array_push($response, [$information[0] => $information[1]]);
}

$payment_details = $response;
$response_json = json_encode($response);

$sql = "INSERT INTO leads (payment_details) 
                            VALUES ('$response_json')";
$result = mysqli_query($conn, $sql);
?>

<script>
	alert('Payment Successful.');
	window.location.href = '../thank-you.php';
</script>