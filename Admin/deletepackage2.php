<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Update Customer Data </title>
    </head>
    <body>
		<?php
			$userreq =$_POST['Customerid'];
			echo "$userreq";
				// Starting session
			session_start();
 
				// Storing session data
			$_SESSION["packid"] = "$userreq";
				echo "";
			$con =mysqli_connect("localhost", "root","", "home");
			
		    $sql="DELETE FROM product WHERE p_id='$userreq'";
			
			$result=mysqli_query($con,$sql);
			
			//session_destroy();
			
		?>	
        <a href='AdminPage.php'> Back To Home </a>  
    </body>
</html>
