<?php
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$ts = date('d-m-Y H:i:s');

$data =  <<<EOF
Name : $name
Email : $email
Phone : $phone
Message : $message
Timestamp : $ts
UTM_SOURCE : $utm_source
UTM_MEDIUM : $utm_medium
UTM_CAMPAIGN : $utm_campaign
Time : $ts
EOF;

$to ='vijay@3dm.agency';
$from='noreply@Pi_datacenters.com';
$headers = "From:<noreply@Pi_datacenters.com>";
$subject = "Pi_datacenters - New Lead";

$filename = "hello.csv";
$f_data= "
$name,$email,$phone,$message,$utm_source,$utm_medium,$utm_campaign,$ts";
$file = fopen($filename, "a");
fwrite($file,$f_data);
fclose($file);

mail($to,$subject,$data,$headers);

header("Location:https://pidatacenters.com/thank-you.php");
//   echo $data;
}
?>