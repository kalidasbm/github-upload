<?php

  $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false)
	{
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
		$f_id=110;
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
	   
	   
     $con = mysqli_connect("localhost", "root", "", "travel_mama");
	
	$sql = "INSERT INTO  packages(images,package_id) VALUES ('$imgContent','$f_id')";
	
	if(mysqli_query($con, $sql))
	{
    echo "Records inserted successfully.";
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
 
		
		
	mysqli_close($con);	
		/*if($insert)
		{
            echo "File uploaded successfully.";
        }else
		{
            echo "File upload failed, please try again.";
        } 
    */
	}
	
?>