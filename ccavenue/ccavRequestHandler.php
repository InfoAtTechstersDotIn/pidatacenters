<?php
require_once "../ecomm/connection.php";
include('crypto.php');

$working_key = 'D1B16CF4323FB4195DE05E4C50C0F242';
$access_code = 'AVTJ26KJ96CL56JTLC';
$merchant_data = '';

foreach ($_POST as $key => $value) {
	$merchant_data .= $key . '=' . $value . '&';
}

$encrypted_data = encrypt($merchant_data, $working_key);

$production_url = 'https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest=' . $encrypted_data . '&access_code=' . $access_code;
echo $production_url;