<?php

if(isset($_POST['submit'])){

    $to = "vijaykumar99305@gmail.com"; // this is your Email address
    echo $from = $_POST['email']; // this is the sender's Email address
    echo $name = $_POST['name'];
    echo $phone = $_POST['phone'];
	echo $msg=$_POST['msg'];
    $subject=$_POST['subject'];
    $date = date('y-m-d');
die();
    
        $subject = $_POST['name']." -  Enquiry | ";
		$message = "The lead details are:<br> " .$name . "<br>". $_POST['email']. "<br>".$_POST['subject'] ."<br><br>--<br><b><a href=\"\"> | </a></b> <br>.<br>";
        
		$headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:" . $from;


   mail($to,$subject,$message,$headers);
       
}


?>