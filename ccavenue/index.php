<?php
require_once "../ecomm/connection.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$id = $_POST['id'];
$price = $_SESSION['price'];

$curl = curl_init();
$tid = strtotime(date('Y-m-d H:i:s'));
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pidatacenters.com/ccavenue/ccavRequestHandler.php',
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
    'redirect_url' => 'https://pidatacenters.com/ccavenue/ccavResponseHandler.php',
    'cancel_url' => 'https://pidatacenters.com/ccavenue/ccavResponseHandler.php',
    'language' => 'en',
    'integration_type' => 'iframe_normal',
    'order_id' => "ORD-" . $id . "-" . $tid,
    'amount' => $price,
    'billing_name' => $name,
    'billing_address' => 'NA',
    'billing_city' => 'NA',
    'billing_state' => 'NA',
    'billing_zip' => 'NA',
    'billing_country' => 'NA',
    'billing_tel' => $phone,
    'billing_email' => $email
  ),
));

$response = curl_exec($curl);

curl_close($curl);
header("location:" . $response);
