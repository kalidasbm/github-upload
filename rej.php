<?php  // . operator is used for the concationation?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <meta http-equiv="refresh" content="5; url=login.php">
 -->

        <title>Saving Customer data</title>
    
<script type="text/javascript">  
       
		function send()
		{
			var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
			/*var fname = document.form.firstName.value;
			var femail = document.form.Email.value;
			*/
			var password=document.form.password.value;  
			/*var secondpassword=document.form.password2.value;
		    var number=document.form.ccontact.value;
			*/
		   
		   /*if( fname == "" )
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
           */       if(!emailRegex.test(femail)){
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
                    
                    /*if(secondpassword=="")
                    {
                        alert("Please Confirm customer's password");
                        return false;
                     }
                     if(secondpassword !=password)
                     {
                         alert(" Sorry but your password not matching");
                         return false;
                     }
                
           
			   */
			/*if(number==""){
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
                     }*/
}
	
</script>
</head>

    <body>
        <?php
		     $semail = $_POST['uname'];
			  $spwd = $_POST['pwd'];
    	 
	echo "Customer Name is ".$semail." .he is so clever ";
	
	$con = mysqli_connect("localhost", "root", "", "home");
	
	$sql = "SELECT * from customerr where c_email='$semail' and password='$spwd'";
	
	$result=mysqli_query($con,$sql);
				
	if($cust=mysqli_fetch_assoc($result))
	{
    echo "Records fetched  successfully.";
		$userreqid = $cust['cust_id'];
	session_start();
 	// Storing session data
		$_SESSION["custimpid"] = "$userreqid";
		echo $_SESSION["custimpid"];
	header('Location: mainpage.php');
	} 
	else
	{
	//header("Refresh: 5; url=login.php");
    //header("refresh:5; url="login.php");
    echo "alert ('invalid id and password')";

	}
	
// Close connection
mysqli_close($con);

?>
<!-- <input type="submit" value=" Login " name="save"/>
 --> </body>
</html>





