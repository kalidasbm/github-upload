<?php  // . operator is used for the concationation?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		      $sname = $_POST['firstName'];
		      $semail = $_POST['Email'];
			  $spwd = $_POST['password'];
              $spwd2 = $_POST['password2'];
		      $saddress = $_POST['txtdesc'];
		      $scontact = $_POST['ccontact'];
			 
	echo "Customer Name is ".$sname." .he is so clever ";
	
	$con = mysqli_connect("localhost", "root", "", "home");
	
	$sql = "INSERT INTO  customerr(c_name,Address,c_email,password,phone) VALUES ('$sname','$saddress', '$semail','$spwd2','$scontact')";
	
	if(mysqli_query($con, $sql))
	{
    echo "Records inserted successfully.";
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
// Close connection
mysqli_close($con);


echo "New records created successfully";


?>
    </body>
</html>
