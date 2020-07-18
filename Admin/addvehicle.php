<html>
<head>
<title> ADD USER </title>
</head>

 <script type="text/javascript">  
       
		function send()
		{
			
			var fname = document.form.firstName.value;
			var lname = document.form.LastName.value;
			var location = document.form.Email.value;
			var Category=document.form.password.value;  
			var Num=document.form.password2.value;
                        var cost=document.form.ccontact.value;
		    var img1=document.form.image.value;
			var available=document.form.pan.value;
			var rcimage1=document.form.rcimage.value;
			
		   if( fname == "" )
			{
				document.form.firstName.focus() ;
				alert("please enter First name ");
				return false;
			}
			if( lname == "" )
			{
				document.form.LastName.focus() ;
				alert("please enter Last name ");
				return false;
			}
		
		if (location == "" )
			{
				document.form.Email.focus();
				alert("enter the Location");
				return false;
			}
         if(Category=="")
			{
			  alert("plese enter category");
                          return false;
			}
           if(Num=="")
                  {
                      alert("Please enter Number of vehicle");
                        return false;
                 }
			if(cost==""){
				alert("Enter Cost");
				return false;
                    } 
			if(available==""){
				alert("please mention weather it's available or not?");
				return false;
			}
			else 
			{
               alert(" please wait some moment");
                return true;
              }
}
	
</script>
	
	<form name="form" action="addvechicle2.php" method="post" onsubmit="return send()" enctype="multipart/form-data">
    <table> 
			<tr>
				<td> Enter vehicle Name: </td>
				<td> <input type="text" name="firstName" value="" size="25" placeholder="Enter vehicle Name"></td>
			</tr>
			
			<tr>
				<td> Enter vehicle Modelno: </td>
				<td> <input type="text" name="LastName" value="" size="25" placeholder="Enter vehicle Modelno"></td>
			</tr>
			
			<tr>
                <td>Enter vehicle Location:</td>
                <td>  <input type="text" name="Email" value=""  placeholder="Enter vehicle Location" ></td>
            </tr>
            <tr>
                <td>Enter vehicle Category:</td>
                <td><input type="text" name="password" value=""  placeholder="Enter vehicle Category" size="20"></td>
            </tr>
             <tr>
                <td>Enter vehicle Num:</td>
                <td><input type="text" name="password2" value=""  placeholder="Enter vehicle Num" size="20"></td>
            </tr>
         
            <tr>
                <td>Enter vehicle cost:</td>
                <td><input type="text" name="ccontact" value=""  placeholder="Enter vehicle cost"/></td>
            </tr>
			
			<tr>
				<td> Enter vehicle image: </td>
				<td> <input type="file" name="image" value="" size="25"></td>
			</tr>
			
			<tr>
                <td>Enter Vechicle Availablity:</td>
                <td><select name="pan">
                        <option> True </option>
                        <option> False </option>
                    </select></td>
            </tr>
			
			
			<tr>
				<td> Enter RC BOOK: </td>
				<td> <input type="file" name="rcimage" value="" size="20"></td>
			</tr>
			
			<tr>
				<td> Enter student Name: </td>
				<td> <input type="text" name="studname" value="" size="20"></td>
			</tr>
			
			
			<tr>
                 <td><input type="submit" value=" ADD Vechicle " name="save"/></td>
                 <td><input type="reset" value=" Clear " name="clean" /></td>
            </tr>
	</table>
	</form>
	<?php
	     
                  /*   if(custage =="")
                     {
                         alert("please enter customer age it's mandatory");
                         return false;
                     }
                     if(isNaN(custage))
                     {
                         alert("please enter valid age");
                         return false;
                     }
					 if(custage <="18")
					 {
						 alert("User age is too short");
						 return false;
						 
					 }
	*/?>
</Body>
</html>