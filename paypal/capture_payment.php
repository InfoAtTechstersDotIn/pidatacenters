<?php

$base_url = "https://api-m.sandbox.paypal.com";
$client_id = "AVTLcBqr3e4jtdQ-exPQUIYpNOwHb4FgH93eqclJ-s6w0Lkd7rIzdyc5kDQ91dS7RgLPyuCMdIL1XEgi";
$client_secret = "EEFqcTXZIrF-EkpnEM0y-gkmBq7fx5-q-dbSts89X0vc-pT93EyQovYIs7nwgSEJY12B6_0i5JWZTLlw";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url . '/v1/oauth2/token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
    'Content-Type: application/x-www-form-urlencoded'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$access_token = json_decode($response)->access_token;

$orderID = $_POST['orderID'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url . '/v2/checkout/orders/' . $orderID . '/capture',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
