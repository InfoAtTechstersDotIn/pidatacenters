<?php
session_start();

$servername = "localhost";
$username = "marcom";
$password = "TR*viv3mo?!q";
$database = "ecomm";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "pi_data_ecomm";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error):
  die("Connection failed: " . $conn->connect_error);
endif;