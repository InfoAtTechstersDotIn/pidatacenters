<?php
if(isset($_POST['submit'])) {
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// File information
	$file_name = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_error = $_FILES['file']['error'];

	// Check for errors
	if($file_error === 0) {

		// File upload path
		$file_path = '/var/www/html/uploads/' . $file_name;

		// Move uploaded file to the desired directory
		move_uploaded_file($file_tmp, $file_path);

		// Read file content
		$file_content = file_get_contents($file_path);

		// Encode file content in base64
		$file_content_base64 = base64_encode($file_content);

		// Email headers with attachment
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: sender@example.com" . "\r\n";
		$headers .= "Reply-To: sender@example.com" . "\r\n";
		$headers .= "Content-Disposition: attachment; filename=".$file_name."\r\n";
		$headers .= "Content-Transfer-Encoding: base64" . "\r\n\r\n";

		// Add attachment to email message
		$message .= "--" . md5(time()) . "\r\n";
		$message .= "Content-Type: application/pdf; name=".$file_name."\r\n";
		$message .= "Content-Transfer-Encoding: base64\r\n";
		$message .= "Content-Disposition: attachment; filename=".$file_name."\r\n\r\n";
		$message .= $file_content_base64 . "\r\n";

		// Send email with attachment
		if(mail($to, $subject, $message, $headers)) {
			echo 'Email with attachment sent successfully.';
		} else {
			echo 'Error: Unable to send email with attachment.';
		}

	} else {
		echo "Error uploading file!";
	}
}
?>


