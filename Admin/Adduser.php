<html>
<head>
<title> ADD USER </title>
</head>

 <script type="text/javascript">  
       
		function send()
		{
			var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
			var fname = document.form.firstName.value;
			var femail = document.form.Email.value;
			var password=document.form.password.value;  
			var secondpassword=document.form.password2.value;
		    var number=document.form.ccontact.value;
			
		   if( fname == "" )
			{
				document.form.firstName.focus() ;
				alert("please enter First name ");
				return false;
			}
			
		if (femail == "" )
			{
				document.form.Email.focus();
				alert("enter the email");
				return false;
			}
                  if(!emailRegex.test(femail)){
				document.form.Email.focus();
				alert("enter the valid email");
				return false;
			}
                    if(password=="")
			{
			  alert("plese enter password");
                          return false;
                        }
                     if(password.length<8)
                     {  
                        alert("Password must be at least 8 characters long.");  
                        return false;  
                    }
                    
                    if(secondpassword=="")
                    {
                        alert("Please Confirm customer's password");
                        return false;
                     }
                     if(secondpassword !=password)
                     {
                         alert(" Sorry but your password not matching");
                         return false;
                     }
                
           
			   
			if(number==""){
				alert("Enter Mobile No .");
				return false;
                    } 
                    if (isNaN(number))
                    {
                                alert("enter no only");
				return false;
			}
                     if(number.length<9)
                     {
                         alert("Your mobile no is not valid ,please enter valid phone no");
                         return false;
                         
                     }
				else 
                     {
                         alert(" please wait some moment");
                         return true;
                     }
}
	
</script>
	
	<form name="form" action="savecustomer.php" method="post" onsubmit="return send()" enctype="multipart/form-data">
    <table> 
			<tr>
				<td> Enter UserName: </td>
				<td> <input type="text" name="firstName" value="" size="25" placeholder="UserName"></td>
			</tr>
		
			
			<tr>
                <td>Enter Customer email-id :</td>
                <td>  <input type="text" name="Email" value=""  placeholder="Your Email" ></td>
            </tr>
            <tr>
                <td>Enter Customer Password :</td>
                <td><input type="password" name="password" value=""  placeholder="New Password" size="20"></td>
            </tr>
             <tr>
                <td>Enter Customer confirm password :</td>
                <td><input type="password" name="password2" value=""  placeholder="Re-enter Password" size="20"></td>
            </tr>
         
            <tr>
                <td>Enter customer contact no:</td>
                <td><input type="text" name="ccontact" value="" /></td>
            </tr>
			<tr>
				<td> Enter Address: </td>
				<td> <textarea name="txtdesc" rows="5" cols="18"></textarea></td>
			</tr>
		
		
		<tr>
                 <td><input type="submit" value=" ADD Customer " name="save"/></td>
                 <td><input type="reset" value=" Clear " name="clean" /></td>
            </tr>
	</table>
	</form>
</Body>
</html>