<?php
require_once "../connection.php";


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

$user_id = explode('-', $response[1]['order_id'])[1];
$total = $response[11]['amount'];

$sql = "INSERT INTO orders (user_id, total, payment_details) 
                            VALUES ('$user_id', '$total', '$response_json')";
$result = mysqli_query($conn, $sql);
$order_id = mysqli_insert_id($conn);

$sql = "SELECT * FROM cart JOIN products ON cart.product_id = products.id where user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) :
		$product_id = $row['product_id'];
		$price = $row['price'];

		$sql = "INSERT INTO order_items (order_id, product_id, price) 
                            VALUES ('$order_id', '$product_id', '$price')";
		mysqli_query($conn, $sql);
	endwhile;
}

$sql = "DELETE from cart WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);


?>

<script>
	alert('Payment Successful.');
	window.location.href = '../my_orders.php';
</script>