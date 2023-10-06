<?php
	include_once('includes/db-config.php');
 	//include_once('includes/header.php');

	 $data = new Databases;



if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
//print_r("e");exit;
//getting IP Address of the User

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
 

    //  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
                
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
    if (preg_match($pattern, trim(strip_tags($_POST['email'])))) { 
        $cleanedFrom = trim(strip_tags($_POST['email'])); 
    } else { 
        echo json_encode(array(
            "status" => 'err',
            "status_code"=> 406,
            "message" => 'Email format is incorrect',
        )); 
        die;
    } 
    
   // print_r($email);exit;

    if($_POST['name'] == "" || $_POST['companyName'] == "" || $_POST['mobile'] == "" || $_POST['email'] == "" || $_POST['post_id'] == ""){
        echo json_encode(array(
            "status" => 'err',
            "status_code"=> 406,
            "message" => 'Fill All Values',
        ));   
        die;
    }else{
        $casePostData = array(
            'name'  => $_POST['name'],
            'companyName'  => $_POST['companyName'],
            'mobile'  => $_POST['mobile'],
            'email'  => $_POST['email'],
            'post_id'  => $_POST['post_id'],
            'ipaddress' => $ip
        );
       // print_r( $casePostData);exit;

        $caseData = $data->caseStudiesFormSub($casePostData);

        // $caseStudiesPdfForm = "INSERT INTO `caseStudiesPdfForm` (`name`, `companyName`, `mobile`, `email`, `post_id`,`ipaddress`) 
        // VALUES ('$_POST['name']', '$companyName', '$mobile', '$email', '$post_id', '$ip')"; 
    
         //print_r($caseData);exit;
         if(count($caseData)){

            // PREPARE THE BODY OF THE MESSAGE

			// $messagehtml = '<html><body>';
			// $messagehtml .= '<img src="https://pidatacenters.com/wp-content/uploads/2017/12/xPi-Logo-180x80.png,qv21.pagespeed.ic.jl8m2P42fh.webp" alt="pi-cloud Logo" />';
			// $messagehtml .= "<h3>User IP Address:" . strip_tags($ip) . " </h3>";
			// $messagehtml .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			// $messagehtml .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			// $messagehtml .= "<tr><td><strong>companyName:</strong> </td><td>" . strip_tags($_POST['companyName']) . "</td></tr>";
			// $messagehtml .= "<tr><td><strong>mobile:</strong> </td><td>" . strip_tags($_POST['mobile']) . "</td></tr>";
			// $messagehtml .= "<tr><td><strong>email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
			// $messagehtml .= "<tr><td><strong>post_id:</strong> </td><td>" . strip_tags($_POST['post_id']) . "</td></tr>";
			// $messagehtml .= "<tr><td><strong>ipaddress:</strong> </td><td>" . strip_tags($ip) . "</td></tr>";
			
			// $messagehtml .= "</table>";
			// $messagehtml .= "</body></html>";


            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			//$to = 'srikanth.komakula@pidatacenters.com';
			$to = "info@pi-cloud.in";

			$subject = 'pi-cloud Website PDF Case Studies Form Data';
			
			$headers = "From: " . strip_tags($_POST['name']) . " <" . $cleanedFrom . "> \r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['name']) . " <" . $cleanedFrom . "> \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

           //if (mail($to, $subject, "test", $headers)) {
                if (true) {
                echo ltrim(json_encode(array(
                    "status" => 'success',
                    "status_code"=> 201,
                    "data" => $caseData['full_img'],
                    "message" => 'Inserted Sucessfully'
                )));
            } else {
                echo ltrim(json_encode(array(
                    "status" => 'err',
                    "status_code"=> 406,
                    "message" => 'Error in mail sending'
                )));
            }
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();
        }
    }
}else {
    echo json_encode(array(
    "status" => 'err',
    "status_code"=> 503 ,
    "message" => 'Invalid method'
    ));
}
