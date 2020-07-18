<?php $tempimgdelid =$_GET['id']; 
	echo "$tempimgdelid";
	
	$con = mysqli_connect("localhost", "root","", "home");
	 
	$oracle ="DELETE FROM cart WHERE cart_id='$tempimgdelid'";
	  
	if($result=mysqli_query($con,$oracle))
		{
			echo "Record Deleted Succesfully <a href='cartrecordsave1.php'> CLICK HERE</a>";
			header('Location: mainpage.php');
		}
		else
		{
			echo "ERROR";
		}
	
?>