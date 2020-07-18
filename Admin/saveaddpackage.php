<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Product</title>
    </head>
    <body>
     <?php 
	 
			$PackageName=$_POST['packages'];

			$Categoery=$_POST['package_cat'];
         
			$Budget=$_POST['package_budget'];
			
			$description=$_POST['txtdesc'];
          
			$Cap =$_POST['package_capacity'];
			$status ="AVAILABLE";
			echo "Till here correct ";
	 
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"Photos/".$_FILES["filUpload"]["name"]))
			{
				$photo = $_FILES["filUpload"]["name"];
			}

			$con =mysqli_connect("localhost","root","","home");
			
			$sql ="insert into product(p_name,p_category,p_amount,p_avaliable,p_quantity,pictures) values('$PackageName','$Categoery','$Budget','$status',$Cap,'$photo')";

			if(mysqli_query($con, $sql))
			{
				echo "Records inserted successfully.";
				
			} 
		else
			{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
	?>
	<a href='AdminPage.php'> Back to Home </a>
    </body>
</html>
