<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>Send Attachment With Email</title>
</head>
<body>
	<div style="display:flex; justify-content: center; margin-top:10%;">
		<form enctype="multipart/form-data" method="GET" action="test.php" style="width: 500px;">
			<div class="form-group">
				<input class="form-control" type="text" name="sender_name" placeholder="Your Name" required/>
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="sender_email" placeholder="Recipient's Email Address" required/>
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="subject" placeholder="Subject"/>
			</div>
			<div class="form-group">
				<textarea class="form-control" name="message" placeholder="Message"></textarea>
			</div>
			<div class="form-group">
				<input class="form-control" type="file" name="attachment" placeholder="Attachment" required/>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" name="button" value="Submit" />
			</div>		
		</form>
	</div>
</body>
</html>
