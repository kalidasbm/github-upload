<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Update Customer Data </title>
    </head>
    <body>
		<?php
			$userreq =$_POST['Customerid'];
			//echo "$userreq";
				// Starting session
			session_start();
 
				// Storing session data
			$_SESSION["custid"] = "$userreq";
				
			$con =mysqli_connect("localhost", "root","", "home");
			
		    $sql="DELETE FROM customerr WHERE cust_id='$userreq'";
			
			$result=mysqli_query($con,$sql);
		
			session_destroy();
			
			mysqli_close($con);	
		?>	
     <a href='AdminPage.php'> Back To Home </a>   
    </body>
</html>
