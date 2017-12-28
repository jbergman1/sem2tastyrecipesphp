<?php
date_default_timezone_set('Europe/Stockholm');
	include 'dbh.inc.php';
	session_start();

	if (isset($_POST['commentDelete'])) {
		$cid = $_POST['cid'];
		
		$sql = "DELETE FROM comments WHERE cid='$cid'";
		$result = $conn->query($sql);
		header("Location: meatballs.php");
	}
header("Location: index.php");