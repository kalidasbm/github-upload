<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <script type="text/javascript">
          
     function validation()
        {
           var name= document.f1.packages.value;
           var cat= document.f1.package_cat.value;
            var budget = document.f1.package_budget.value;
            var image = document.f1.user_file.value;
            var desc = document.f1.txtdesc.value;
            var Quantity = document.f1.package_capacity.value;
            if(name =="")
            {
                alert("please give name of Product");
                return false;
            }
            if(cat =="")
            {
                alert("please select category Product");
                return false;
            }
          if(budget =="")
            {
                alert("please give budget of Product");
                return false;
            }
            if(image=="")
            {
                alert("please enter image of trip");
                return false;
            }
            
            else
           {
               alert("Till correct");
               return true;
            }
	}
                
            
       </script>
            
</head>
<body id="body1">
    
    <form name="f1" action="saveaddpackage.php" method="POST" enctype="multipart/form-data">
   
       <table align="center" cellpadding="3">
		 <th colspan="2"><font color="RED" face="Arno Pro Caption" size="+7"> ADD Product </font></th>
            
			<tr>
                <td> Product name </td>
                <td><input type="text" name="packages" value="" /></td>
            </tr>
			<tr>
                <td>Product category :</td>
                <td><select name="package_cat">
                        <option> fruits </option>
                        <option> fastfood </option>
						<option> medicine </option>
						<option> clothes </option>
						</select></td>
            </tr>
          
             <tr>
                <td>Product budget :</td>
                <td><input type="text" id="age" name="package_budget" size="25"/></td>
            </tr>
            <tr>
                <td>Add Images :</td>
                <td><input type="file" name="filUpload"/></td>
            </tr>
            
            <tr>
                <td>Description :</td>
                <td> <textarea name="txtdesc" rows="5" cols="18">
                    </textarea></td>
            </tr>
            <tr>
                <td>Quantity :</td>
                <td> <input type="text" id="cap" name="package_capacity" size="25"/></td>
            </tr>
            
	   <tr colspan="2">
                <td><input type="submit" value="Save It" onclick="return validation()"></td>
		<td><input type="reset" value="Clear"></td>
            </tr>
        </table>
	 </form>
   </body>
</html>
