<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		      $vehickename = $_POST['txtpkcat'];
		      $vehiclemodel = $_POST['txtpkname'];
		      $vehiclelocation = $_POST['txtsource'];
             
		     $vehiclecat = $_POST['txtdestination'];
		      $vehiclenum = $_POST['txtbudget'];
			  $vehiclecost = $_POST['txtdays'];	
			 // $pknights = $_POST['txtnights'];
		      $vechicle_avail= $_POST['txtnights'];
				 
			//	 $pkdate = $_POST['txtdate'];
			$cat= 'Admin';
				//$check = getimagesize($_FILES["image"]["tmp_name"]);
				session_start();
				echo  $_SESSION["packid"];
				$tempid = $_SESSION["packid"];
				echo "$tempid";
			
	$con = mysqli_connect("localhost", "root", "", "travel_mama");
	 		
    $sql = "UPDATE vehicles SET vehicle_Name='$vehickename',vehicle_modelno='$vehiclemodel',vehicle_location='$vehiclelocation',vehicle_category='$vehiclecat',vehicle_num='$vehiclenum',vehicle_cost='$vehiclecost',vehicle_available='$vechicle_avail' where vehicle_id='$tempid'";
	
//	$sql = "INSERT INTO  customer(firstname,surname,email_id,pwd,age,cont_no,aadhar_no,pan_no,category) 
//VALUES ('$sname', '$lname', '$semail','$spwd','$scage','$scontact','$saadhar','$span','$cat')";
	
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
