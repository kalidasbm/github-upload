<?php  // . operator is used for the concationation?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		     $semail = $_POST['uname'];
			  $spwd = $_POST['pwd'];
    	 
	echo "Customer Name is ".$semail." .he is so clever ";
	
	$con = mysqli_connect("localhost", "root", "", "home");
	
	$sql = "SELECT * from customerr where c_email='$semail' and password='$spwd'";
	
	$result=mysqli_query($con,$sql);
				
	if($cust=mysqli_fetch_assoc($result))
	{
    echo "Records fetched  successfully.";
		$userreqid = $cust['cust_id'];
	session_start();
 	// Storing session data
		$_SESSION["custimpid"] = "$userreqid";
		echo $_SESSION["custimpid"];
	header('Location: AdminPage.php');
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
// Close connection
mysqli_close($con);

?>
 </body>
</html>
