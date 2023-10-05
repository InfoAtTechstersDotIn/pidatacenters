<?php
/*date_default_timezone_set("Asia/Calcutta");
if(isset($_GET['submit'])) {
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];
$ts = date('d-m-Y H:i:s');

$data =  <<<EOF
Name : $name
Email : $email
Phone : $phone
Message : $message
Timestamp : $ts
Time : $ts
EOF;

//print_r($data);

$to ='kvijaykumar8885@gmail.com';
$from='noreply@pidatacenters.com';
$headers = "From:<noreply@pidatacenters.com>";
$subject = "Pi_datacenters - New Lead";

$filename = "hello.csv";
$f_data= "
$name,$email,$phone,$message,$ts";
$file = fopen($filename, "a");
fwrite($file,$f_data);
fclose($file);

echo mail($to,$subject,$data,$headers)

header("Location:https://pidatacenters.com/thank-you.php");
//   echo $data;
}
*/?>

<?php
ob_start();
$con = new mysqli("localhost", "marcom", "TR*viv3mo?!q", "search8c_pi");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Your Website URL Goes Here
$url="http://103.210.73.24/";
?>

<?php
if(isset($_POST['submit'])) {
	echo $name = $_POST['name'];
	}
?>