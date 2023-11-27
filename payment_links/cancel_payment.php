<?php 
require_once "connection.php";

$payment_link_id = $_GET['unique_id'];

$sql = "SELECT * FROM payment_links WHERE unique_id = '$payment_link_id' and status = 'pending'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $sql = "UPDATE payment_links SET status = 'cancelled' WHERE unique_id = '$payment_link_id'";
    $result = mysqli_query($conn, $sql);
    header('location:payment_links.php');
}
else {
    header('location:message.php?message=Link Expired, Please reach PiDataCenters for new link');
}