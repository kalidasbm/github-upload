<html>
    <head>
        
        <title>Update Ajax</title>
    </head>
    <body>
      <?php
			$userreq =$_GET['val'];
			 
			 if($userreq ==Null)
			 {  
				echo "Please enter Cust_id";  
			}
			else
			{ 
				echo "$userreq";
				$con = mysqli_connect("localhost", "root","", "home");
			
				$sql="select * from customerr where cust_id='$userreq'";
			
				$result=mysqli_query($con,$sql);
				
			if($cust=mysqli_fetch_assoc($result))
			{
				 echo "<html>";
				 echo "<head>";
				 echo "</head>";
				 echo "<body>";
				 echo "<table border='1'>";
				 echo "<tr>";
				 echo "<th> Customer Name </th>";
				 echo "<th> Customer Address </th>";
				 echo "<th> Customer email_id </th>";
				 echo "<th> Customer password </th>";
				 echo "<th> Customer Contact no </th>";
				echo "</tr>";	
				
				
				echo "<tr>";
				 echo "<td>".$cust['c_name']."</td>";
				 echo "<td>".$cust['Address']."</td>";
				 echo "<td>".$cust['c_email']."</td>";
				 echo "<td>".$cust['password']."</td>";
				 echo "<td>".$cust['phone']."</td>";
				 	echo "</tr>";
			} 
		}
	
	 ?>
    </body>
</html>