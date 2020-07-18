<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update Customer Page</title>
             <script>  
        var request;  
        function sendInfo()  
        {  
               var v=document.myform.Customerid.value;
            
            var url="updateajax.php?val="+v;  
  
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
            <form name="myform" action="updateuser2.php" method="post">
      
	<?php

	$con = mysqli_connect("localhost", "root","", "home");
	
	$sql="select * from customerr";

	$result=mysqli_query($con,$sql);

	?>	

<table align="center" cellpadding="3">
   	<th colspan="2">
	<font color="RED" face="Arno Pro Caption" size="+7"> Update Customer </font>
        </th>
            <tr>
               <td>Customer Id :</td>
               <td> <select name="Customerid"  onchange="sendInfo()">
                <option VALUE="blank" SELECTED> Customer Id </option>
				<?php
					while($cust=mysqli_fetch_assoc($result))
			{
					echo  "<option>".$cust['cust_id']."</option>";
			}
?>
		 <tr>
                     <td> <span id="omkar"> </span></td>
             </tr>
			 <tr>
                <td> <input type="submit" value="Update" name="updatecustdata" /></td>
            </tr>

		  
		  </table>
          </form>
        </center>
    </body>
</html>
