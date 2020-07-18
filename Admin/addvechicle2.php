<?php  // . operator is used for the concationation?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		      $vehiclename = $_POST['firstName'];
		      $vehiclemodel = $_POST['LastName'];
		      $vehiclelocation = $_POST['Email'];
			  $vehiclecategory = $_POST['password'];
              $vehiclenum = $_POST['password2'];
		      $scage = $_POST['studname'];
		      $vehiclecost = $_POST['ccontact'];
			//  $saadhar = $_POST['aadhar'];	
			  $vechicleavail = $_POST['pan'];
		      //$sf1 = $_POST['f1'];
		     // $cat= 'Admin';
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				$check2 = getimagesize($_FILES["rcimage"]["tmp_name"]);

	

    if($check !== false)
	{
        $image1 = $_FILES['image']['tmp_name'];
        $imgContent1 = addslashes(file_get_contents($image1));
	//	$f_id=108;
		echo "Till here correct";
        /*
         * Insert image data into database
         */
        
        //DB details
        //$dbHost     = 'localhost';
        //$dbUsername = 'root';
        //$dbPassword = '';
        //$dbName     = 'codexworld';
        
        //Create connection and select DB
       // $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	
	//$sql = "INSERT INTO  packages(images,id) VALUES ('$imgContent','$f_id')";
		
	//mysqli_close($con);	
		/*if($insert)
		{
            echo "File uploaded successfully.";
        }else
		{
            echo "File upload failed, please try again.";
        } 
    */
	}
		 if($check2 !== false)
	{
        $image2 = $_FILES['rcimage']['tmp_name'];
        $imgContent2 = addslashes(file_get_contents($image2));
	//	$f_id=108;
		echo "Till here correct";
        /*
         * Insert image data into database
         */
        
        //DB details
        //$dbHost     = 'localhost';
        //$dbUsername = 'root';
        //$dbPassword = '';
        //$dbName     = 'codexworld';
        
        //Create connection and select DB
       // $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	
	//$sql = "INSERT INTO  packages(images,id) VALUES ('$imgContent','$f_id')";
		
	//mysqli_close($con);	
		/*if($insert)
		{
            echo "File uploaded successfully.";
        }else
		{
            echo "File upload failed, please try again.";
        } 
    */
	}
	
	

	$con = mysqli_connect("localhost", "root", "", "travel_mama");
	
	$sql = "INSERT INTO  vehicles(vehicle_Name,vehicle_modelno,vehicle_location,vehicle_category,vehicle_num,vehicle_cost,vehicle_image,vehicle_available,RC_Book) VALUES ('$vehiclename', '$vehiclemodel', '$vehiclelocation','$vehiclecategory','$vehiclenum','$vehiclecost','$imgContent1','$vechicleavail','$imgContent2')";
	
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
<a href='AdminPage.php'> Back To Home </a>


<?php
/*
$tempcost="4600";

    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'travel_mama';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error)
	{
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT vehicle_image FROM vehicles WHERE vehicle_cost ='$tempcost'");
    
    if($result->num_rows > 0)
	{
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
  
  ?>
		<image src=<?php echo  $imgData['image'];?>  width="400" height="400"/> 
   <?php
   }
	else
	{
        echo 'Image not found...';
    }
	*/
?>


<?php
/*	$vech_fid ="5";
	$con = mysqli_connect("localhost", "root", "", "travel_mama");
	
	$sql = "INSERT INTO omkar(studname,vehicle_id) VALUES('$scage','$vech_fid')";
	if(mysqli_query($con, $sql))
	{
    echo "Records inserted successfully.";
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}




*/

?>
    </body>
</html>
