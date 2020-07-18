<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		      $pkcategory = $_POST['txtpkcat'];
		      $pkname = $_POST['txtpkname'];
		      $pkbudget = $_POST['txtbudget'];
			  $pkqun = $_POST['txtcapacity'];
				 $pkavail = $_POST['txtavailable'];
			$cat= 'Admin';
				//$check = getimagesize($_FILES["image"]["tmp_name"]);
				session_start();
				echo  $_SESSION["packid"];
				$tempid = $_SESSION["packid"];
				echo "$tempid";
			
	$con = mysqli_connect("localhost", "root", "", "home");
	 		
    $sql = "UPDATE product SET p_category='$pkcategory',p_name='$pkname',p_amount='$pkbudget',p_avaliable='$pkavail',p_quantity='$pkqun' where p_id='$tempid'";
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
