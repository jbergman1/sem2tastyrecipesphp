<?php
date_default_timezone_set('Europe/Stockholm');
	include 'dbh.inc.php';
	session_start();
if (isset($_POST['logoutSubmit'])){
		session_start();
		session_destroy();
		header("Location: index.php");
		exit();
	}