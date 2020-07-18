<?php
	include 'config.php';
	session_start();
	$email = $_REQUEST['uname'];
	$pass = $_REQUEST['pwd'];

	if(strcasecmp($email, "admin@gmail.com") ==0 && strcasecmp($pass, "admin@123")==0)
	{
		$_SESSION['admin'] = "admin";
		header('location: AdminPage.php');
	}else{
		echo "Please try again. <a href='index.php'>Try Again</a>";
	}

?>