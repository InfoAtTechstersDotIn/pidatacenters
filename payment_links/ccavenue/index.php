<?php
require_once "../connection.php";

$payment_link_unique_id = $_POST['payment_link_unique_id'];
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

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://pidatacenters.com/payment_links/ccavenue/ccavRequestHandler.php',
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
      'redirect_url' => 'https://pidatacenters.com/payment_links/ccavenue/ccavResponseHandler.php',
      'cancel_url' => 'https://pidatacenters.com/payment_links/ccavenue/ccavResponseHandler.php',
      'language' => 'en',
      'integration_type' => 'iframe_normal',
      'order_id' => $payment_link_unique_id,
      'amount' => $amount,
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
}else
{
  header('location:../message.php?message=Link Expired, Please reach PiDataCenters for new link');
}