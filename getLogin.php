<?php
date_default_timezone_set('Europe/Stockholm');
	include 'dbh.inc.php';
	session_start();
if (isset($_POST['loginSubmit'])){
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		
		$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
		$result = $conn->query($sql);
		if (mysqli_num_rows($result) == 1) {
			if ($row = $result->fetch_assoc()){
				$_SESSION['id'] = $row['id'];
				header("Location: index.php?loginsuccess");
				exit();
			}
		} else {
			header("Location: index.php?loginfailed");
			exit();
		}
	
	}