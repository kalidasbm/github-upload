<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		      $sname = $_POST['txtfname'];
		      $lname = $_POST['txtlname'];
		      $semail = $_POST['txtemail'];
			  $spwd = $_POST['txtpwd'];
			 $scontact = $_POST['txtcontactno'];
		
				session_start();
				echo $_SESSION["custid"];
				$tempid = $_SESSION["custid"];
				
			echo "Customer Name is ".$sname." .he is so clever ";
	
	$con = mysqli_connect("localhost", "root", "", "home");
	 		
    $sql = "UPDATE customerr SET c_name='$sname',Address='$lname',c_email='$semail',password='$spwd',phone='$scontact' where cust_id='$tempid'";

	if(mysqli_query($con, $sql))
	{
    echo "Records updated successfully.";
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
 session_destroy();

mysqli_close($con);
echo "<br>New records created successfully";

?>
 <a href='AdminPage.php'> Back To Home </a>
    </body>
</html>
