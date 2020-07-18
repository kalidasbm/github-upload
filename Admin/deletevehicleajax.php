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
				$con = mysqli_connect("localhost", "root","", "travel_mama");
			
				$sql="select * from vehicles where vehicle_id='$userreq'";
			
				$result=mysqli_query($con,$sql);
				
			if($cust=mysqli_fetch_assoc($result))
			{
				 echo "<html>";
				 echo "<head>";
				 echo "</head>";
				 echo "<body>";
				 echo "<table border='1'>";
				 echo "<tr>";
				 echo "<th> vehicle Name </th>";
				 echo "<th> vehicle modelno </th>";
				 echo "<th> vehicle Location </th>";
				 echo "<th> vehicle category </th>";
				 echo "<th> vehicle num</th>";
				 echo "<th> vehicle cost </th>";
				 echo "<th> vehicle available </th>";
				 
				// echo "<td> <image src=".$cust['licence_no']."height='400' width='560'/> </td>";
			    //echo "<td>".$cust['images']."</td>"; 
				echo "</tr>";	
				
				
				echo "<tr>";
				 echo "<td>".$cust['vehicle_Name']."</td>";
				 echo "<td>".$cust['vehicle_modelno']."</td>";
				 echo "<td>".$cust['vehicle_location']."</td>";
				 echo "<td>".$cust['vehicle_category']."</td>";
				 echo "<td>".$cust['vehicle_num']."</td>";
				 echo "<td>".$cust['vehicle_cost']."</td>";
				 echo "<td>".$cust['vehicle_available']."</td>";
				echo "</tr>";
			} 
		}
	/*<%
        String s=request.getParameter("val");  
         Connection con;
	PreparedStatement ptst,ptst2;
        ResultSet rs,rs1;
       if(s==null || s.trim().equals("")){  
        out.print("Please enter Cust_id");  
        }
   else
   {  
        int customerid=Integer.parseInt(s);  
            
            try
            {  	Class.forName("oracle.jdbc.driver.OracleDriver");
                con=DriverManager.getConnection( "jdbc:oracle:thin:@localhost:1521:orcl","sys as sysdba","komal"); 
                String sql="select * from Cust_info where Cust_id=?";
          
              ptst=con.prepareStatement(sql);
              ptst.setInt(1,customerid);
               rs=ptst.executeQuery(); 
             
              if(rs.next())
              {
                  out.println("Customer First Name " +rs.getString(2)); 
                  out.println("Customer Last Name " +rs.getString(3));
                 /* out.println("Customer email_id Name " +rs.getString(4));
               
                  out.println("Customer Name " +rs.getString(6));
                   out.println("Customer Name " +rs.getString(7));
                   out.println("Customer Name " +rs.getString(8)); 
              }
                 }
       catch(Exception se)
		{
			 out.println("An exception occurred: " + se.getMessage());    
		   }
   }
             
          %>
	*/
	 ?>
    </body>
</html>