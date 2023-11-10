<?php
	require('config.php');
	session_start();
	$uid = $_SESSION['uid'];
	$user_type = $_SESSION['type'];
	$lead_id = $_SESSION['lead_id'];
	unset($uid);
	unset($user_type);
	unset($lead_id);
	session_destroy();
	header("Location: ../login.php");
	echo "Logged out";
?>