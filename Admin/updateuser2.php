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
				echo $_SESSION["custid"];
			$con =mysqli_connect("localhost", "root","", "home");
			
		    $sql="select * from customerr where cust_id='$userreq'";
			
			$result=mysqli_query($con,$sql);
		
			
		?>	
           <form action="updateuser3.php" method="post">
           <table border="0" cellspacing="3" cellpadding="3">
               <thead>
                   <tr>
                       <th> Customer Details </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td> Customer Name  : </td> <?php if($cust=mysqli_fetch_assoc($result))
					{ ?>
				    <td> <input type="text" name="txtfname" value="<?php echo $cust['c_name']?>" /> </td>
                    </tr> 
                 <tr>
                       <td>Customer Address :</td>
                       <td> <input type="text" name="txtlname" value="<?php echo $cust['Address']?>" /> </td>
                   </tr>
                   <tr>
                       <td> Customer email_id Name :</td>
                       <td><input type="text" name="txtemail" value="<?php echo $cust['c_email']?>" />  </td>
                   </tr>
                   <tr>
                       <td> Customer password :</td>
                       <td><input type="text" name="txtpwd" value="<?php echo $cust['password']?>" /></td>
                   </tr>
                   <tr>
                       <td> Contact No :</td>
                       <td><input type="text" name="txtcontactno" value="<?php echo $cust['phone']?>" /></td>
                   </tr>
				   <?php }?>
                    <tr>
                       <td>    <input type="submit" value="Update Record" name="updatesave" /> </td>
                       <td>  <input type="reset" value="Cancel" />    </td>
                   </tr>
               </tbody>
           </table>
           </form>
           <br>
         
	
    </body>
</html>
