<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>delete Customer record</title>
             <script>  
        var request;  
        function sendInfo()  
        {  
               var v=document.myform.Customerid.value;
            
            var url="deletevehicleajax.php?val="+v;  
  
            if(window.XMLHttpRequest){  
            request=new XMLHttpRequest();  
        }  
        else if(window.ActiveXObject){  
        request=new ActiveXObject("Microsoft.XMLHTTP");  
        }  
  
        try{  
            request.onreadystatechange=getInfo;  
            request.open("GET",url,true);  
            request.send();  
           }
           catch(e)
           {
               alert("Unable to connect to server");
           }  
        }  
    function getInfo()
    {  
        if(request.readyState==4){  
            var val=request.responseText;  
            document.getElementById('omkar').innerHTML=val;  
    }  
   }  
   </script>
   
    </head>
    <body>
        <center>
            <form name="myform" action="deletevehicle2.php" method="post">
        
        
	<?php

	$con = mysqli_connect("localhost", "root","", "travel_mama");
	
	$sql="select * from vehicles";

	$result=mysqli_query($con,$sql);

	?>	

<table align="center" cellpadding="3">
   	<th colspan="2">
	<font color="RED" face="Arno Pro Caption" size="+7"> Delete vehicle Information </font>
        </th>
            <tr>
               <td>vehicle Id :</td>
               <td> <select name="Customerid"  onchange="sendInfo()">
                <option VALUE="blank" SELECTED> vehicle Id </option>
				<?php
					while($cust=mysqli_fetch_assoc($result))
			{
					echo  "<option>".$cust['vehicle_id']."</option>";
			}
?>
			
			 
			 <tr>
                     <td> <span id="omkar"> </span></td>
             </tr>
			 <tr>
                <td> <input type="submit" value="delete" name="updatecustdata" /></td>
            </tr>
<?php

/*
		<%
         Connection con;
	PreparedStatement ptst,ptst2;
        ResultSet rs,rs1;
         
            try
	     {
		Class.forName("oracle.jdbc.driver.OracleDriver");
                con=DriverManager.getConnection( "jdbc:oracle:thin:@localhost:1521:orcl","sys as sysdba","komal"); 
                String sql="select cust_id from Cust_info";
          
              ptst=con.prepareStatement(sql);
             rs=ptst.executeQuery(); 
          %>
       <table align="center" cellpadding="3">
             <th colspan="2"><font color="RED" face="Arno Pro Caption" size="+7"> Update Customer </font>
             </th>
             <tr>
                <td>Customer Id :</td>
                <td> <select name="Customerid"  onchange="sendInfo()">
                <option VALUE="blank" SELECTED> Customer Id </option>
              <% while(rs.next()){%>
                  <option ><%=rs.getString(1)%>
              </option>
                <% } %>
                </select> </td>
             </tr> 
                 <tr>
                     <td> <span id="omkar"> </span></td>
                 </tr>
             <%
                        
                 }
       catch(Exception se)
		{
			 out.println("An exception occurred: " + se.getMessage());    
		   }
            %>
          
  */        
		  	?>	
		  
		  </table>
          </form>
        </center>
    </body>
</html>
