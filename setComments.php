<?php
date_default_timezone_set('Europe/Stockholm');
	include 'dbh.inc.php';
	session_start();
if (isset($_POST['commentSubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
		$result = $conn->query($sql);
	}
header("Location: index.php");
