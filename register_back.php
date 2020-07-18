<?php
	include 'config.php';
	$name = $_POST['uname'];
	$email = $_POST['uemail'];
	$pass = $_POST['upass'];
	$phone = $_POST['uphone'];
	$address = $_POST['address'];
echo " $name $email $pass $phone $address";

	$sql = "INSERT INTO customerr(c_name, Address, c_email, password, phone) 
	VALUES ('$name','$address','$email','$pass','$phone')";
	$result = mysqli_query($con, $sql);
	if($result == null){
		echo "Please try again. <a href='register.php'>Try Again</a>";
	}else
	{
		header('location:login.php');
	}



?>