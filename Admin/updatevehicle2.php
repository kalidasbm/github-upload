<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Update Vehicle Data </title>
    </head>
    <body>
		<?php
			$userreq =$_POST['Customerid'];
			//echo "$userreq";
				// Starting session
			session_start();
 
				// Storing session data
			$_SESSION["packid"] = "$userreq";
				
			$con =mysqli_connect("localhost", "root","", "travel_mama");
			
		    $sql="select * from vehicles where vehicle_id='$userreq'";
			
			$result=mysqli_query($con,$sql);
		
			
		?>	
           <form action="updatevehicle3.php" method="post">
           <table border="0" cellspacing="3" cellpadding="3">
               <thead>
                   <tr>
                       <th> Customer Details </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td> vehicle Name : </td> <?php if($cust=mysqli_fetch_assoc($result))
					{ ?>
				    <td> <input type="text" name="txtpkcat" value="<?php echo $cust['vehicle_Name']?>" /> </td>
                    </tr> 
                 <tr>
                       <td>vehicle modelno :</td>
                       <td> <input type="text" name="txtpkname" value="<?php echo $cust['vehicle_modelno']?>" /> </td>
                   </tr>
                   <tr>
                       <td> vehicle Location :</td>
                       <td><input type="text" name="txtsource" value="<?php echo $cust['vehicle_location']?>" />  </td>
                   </tr>
                   <tr>
                       <td> vehicle category :</td>
                       <td><input type="text" name="txtdestination" value="<?php echo $cust['vehicle_category']?>" /></td>
                   </tr>
                   <tr>
                       <td> vehicle num :</td>
                       <td><input type="text" name="txtbudget" value="<?php echo $cust['vehicle_num']?>" /></td>
                   </tr>
                   <tr>
                       <td> vehicle cost :</td>
                       <td><input type="text" name="txtdays" value="<?php echo $cust['vehicle_cost']?>" /></td>
                   </tr>
				   
				   <tr>
					<td>Enter Vechicle Availablity:</td>
                <td><select name="txtnights">
						<option><?php echo $cust['vehicle_available']?></option>
                        <option> True </option>
                        <option> False </option>
                    </select></td>
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
         
<?php	
		/*
	   <%
            String s=request.getParameter("Customerid");  
              session.setAttribute("thiscustid",s);
         Connection con;
	PreparedStatement ptst;
        ResultSet rs,rs1;
         try
            {  	Class.forName("oracle.jdbc.driver.OracleDriver");
                con=DriverManager.getConnection( "jdbc:oracle:thin:@localhost:1521:orcl","sys as sysdba","komal"); 
                String sql="select * from Cust_info where Cust_id=?";
          
              ptst=con.prepareStatement(sql);
              ptst.setString(1,s);
               rs=ptst.executeQuery(); 
             
              if(rs.next())
              {
           %>
           
           <form action="updatecustomer3.jsp" method="post">
           <table border="0" cellspacing="3" cellpadding="3">
               <thead>
                   <tr>
                       <th> Customer Details </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td> Customer First Name  : </td>
                       <td> <input type="text" name="txtfname" value="<%= rs.getString(2)%> " /> </td>
                   </tr>
                   <tr>
                       <td>Customer Second Name :</td>
                       <td> <input type="text" name="txtlname" value="<%= rs.getString(3) %>" /> </td>
                   </tr>
                   <tr>
                       <td> Customer email_id Name :</td>
                       <td><input type="text" name="txtemail" value="<%= rs.getString(4)%>" />  </td>
                   </tr>
                   <tr>
                       <td> Customer DOB :</td>
                       <td><input type="text" name="txtdate" value="<%= rs.getString(6) %>" /></td>
                   </tr>
                   <tr>
                       <td> Customer Age :</td>
                       <td><input type="text" name="txtage" value="<%= rs.getString(7) %> " /></td>
                   </tr>
                   <tr>
                       <td> Contact No :</td>
                       <td><input type="text" name="txtcontactno" value="<%= rs.getString(8) %>" /></td>
                   </tr>
                    <tr>
                       <td>    <input type="submit" value="Update Record" name="updatesave" /> </td>
                       <td>  <input type="reset" value="Cancel" />    </td>
                   </tr>
               </tbody>
           </table>
           </form>
           <br>
          <% 
              }
            }
       catch(Exception se)
		{
			 out.println("An exception occurred: " + se.getMessage());    
		   }
   
        %> */
       ?>      
    </body>
</html>
