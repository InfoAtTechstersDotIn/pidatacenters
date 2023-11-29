<?php
require_once "../connection.php";

$payment_link_unique_id = $_GET['payment_link_unique_id'];
$sql = "SELECT * FROM payment_links WHERE unique_id = '$payment_link_unique_id' and status = 'pending'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  $name = $row['name'];
  $phone = $row['phone'];
  $email = $row['email'];
  $amount = $row['amount'];

  $curl = curl_init();
  $tid = strtotime(date('Y-m-d H:i:s'));

  $qp = http_build_query(array(
    "tid" => $tid,
    "merchant_id" => "2888514",
    "redirect_url" => "https://pidatacenters.com/payment_links/ccavenue/ccavResponseHandler",
    "cancel_url" => "https://pidatacenters.com/payment_links/ccavenue/ccavResponseHandler",
    "language" => "en",
    "integration_type" => "iframe_normal",
    "order_id" => $payment_link_unique_id,
    "amount" => $amount,
    "billing_name" => $name,
    "billing_address" => "NA",
    "billing_city" => "NA",
    "billing_state" => "NA",
    "billing_zip" => "NA",
    "billing_country" => "NA",
    "billing_tel" => $phone,
    "billing_email" => $email
  ));

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://pidatacenters.com/payment_links/ccavenue/ccavRequestHandler.php?currency=INR&' . $qp,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTREDIR => 3
  ));
  $response = curl_exec($curl);

  curl_close($curl);

  header("location:" . $response);
} else {
  header('location:../message.php?message=Link Expired, Please reach PiDataCenters for new link');
}
