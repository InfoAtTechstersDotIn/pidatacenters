<?php 
require_once "connection.php";

$payment_link_id = $_GET['unique_id'];

$sql = "DELETE FROM payment_links WHERE unique_id = '$payment_link_id'";
$result = mysqli_query($conn, $sql);

header('location:payment_links.php');