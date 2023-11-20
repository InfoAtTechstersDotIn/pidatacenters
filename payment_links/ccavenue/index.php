<?php
require_once "../connection.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT SUM(price) AS price FROM cart JOIN products ON cart.product_id = products.id where user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

$cart_items_count = mysqli_num_rows($result);
$cart_total = 0;

if ($cart_items_count > 0) {

  while ($row = mysqli_fetch_assoc($result)) :
    $cart_total += $row['price'];
  endwhile;

  $curl = curl_init();
  $tid = strtotime(date('Y-m-d H:i:s'));
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://pidatacenters.com/ecomm/ccavenue/ccavRequestHandler.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
      'tid' => $tid,
      'merchant_id' => '2888514',
      'currency' => 'INR',
      'redirect_url' => 'https://pidatacenters.com/ecomm/ccavenue/ccavResponseHandler.php',
      'cancel_url' => 'https://pidatacenters.com/ecomm/ccavenue/ccavResponseHandler.php',
      'language' => 'en',
      'integration_type' => 'iframe_normal',
      'order_id' => "ORD-" . $user_id . "-" . $tid,
      'amount' => $cart_total,
      'billing_name' => $_SESSION['name'],
      'billing_address' => 'NA',
      'billing_city' => 'NA',
      'billing_state' => 'NA',
      'billing_zip' => 'NA',
      'billing_country' => 'NA',
      'billing_tel' => $_SESSION['phone'],
      'billing_email' => $_SESSION['email']
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  header("location:" . $response);
} else {
  header('location: ../index.php');
}
