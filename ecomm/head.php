<meta charset="UTF-8">

<!-- Mobile viewport optimized -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

<!-- Meta Tags - Description for Search Engine purposes -->
<meta name="description" content="PiDataCenters - Store">
<meta name="keywords" content="one page, multipage, domain, hosting, server, cloud, cloudify, html5 template">
<meta name="author" content="GnoDesign">

<!-- Website Title -->
<title>PiDataCenters - Store</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700|Roboto:400,700" rel="stylesheet">

<!-- CSS links -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php
if (isset($_SESSION['is_login'])) {
	$user_id = $_SESSION['user_id'];

	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);

	$products = [];

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) :
			array_push($products, $row);
		endwhile;
	}

	$sql = "SELECT * FROM cart JOIN products ON cart.product_id = products.id where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);

	$cart_items_count = mysqli_num_rows($result);
	$cart_items = [];
	$cart_total = 0;

	if ($cart_items_count > 0) {
		while ($row = mysqli_fetch_assoc($result)) :
			$cart_total += $row['price'];
			array_push($cart_items, $row);
		endwhile;
	}

	$sql = "SELECT * FROM order_items 
			JOIN orders ON order_items.order_id = orders.id
			JOIN products ON order_items.product_id = products.id where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);

	$order_items = [];

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) :
			array_push($order_items, $row);
		endwhile;
	}
}
?>