<?php
session_start();

$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$database = "payment_links";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "pi_payment_links";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error):
  die("Connection failed: " . $conn->connect_error);
endif;