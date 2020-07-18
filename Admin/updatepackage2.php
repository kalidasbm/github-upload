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
			$_SESSION["packid"] = "$userreq";
				
			$con =mysqli_connect("localhost", "root","", "home");
			
		    $sql="select * from product where p_id='$userreq'";
			
			$result=mysqli_query($con,$sql);
		
			
		?>	
           <form action="updatepackage3.php" method="post">
           <table border="0" cellspacing="3" cellpadding="3">
               <thead>
                   <tr>
                       <th> Customer Details </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td> Package Category : </td> <?php if($cust=mysqli_fetch_assoc($result))
					{ ?>
				    <td> <input type="text" name="txtpkcat" value="<?php echo $cust['p_category']?>" /> </td>
                    </tr> 
                 <tr>
                       <td>Package Name :</td>
                       <td> <input type="text" name="txtpkname" value="<?php echo $cust['p_name']?>" /> </td>
                   </tr>
                  
                   <tr>
                       <td> Budget :</td>
                       <td><input type="text" name="txtbudget" value="<?php echo $cust['p_amount']?>" /></td>
                   </tr>
                 
				   
				   <tr>
                       <td> Available :</td>
                       <td><input type="text" name="txtavailable" value="<?php echo $cust['p_avaliable']?>" /></td>
                   </tr>
				   <tr>
                       <td> Quantity :</td>
                       <td><input type="text" name="txtcapacity" value="<?php echo $cust['p_quantity']?>" /></td>
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
