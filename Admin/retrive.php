<?php
/*
if(!empty($_GET['id'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'travel_mama';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT picture FROM package18 WHERE id= {$_GET['id']}");
   // SELECT `images` FROM `package18` WHERE `package_id`=8 
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
	//	echo $imgData['images'];
		echo  $imgData['picture'];  
    }else{
        echo 'Image not found...';
    }
}
*/
?>
<?php

  //$link = mysql_connect("localhost", "root", "");
  //mysql_select_db("travel_mama",$link);
 
// Check connection
//if($link === false){
  //  die("ERROR: Could not connect. " . mysql_error());}


  //$select=mysql_query("SELECT * FROM customer order by cust_id ");

 $con = mysqli_connect("localhost", "root","", "travel_mama");
			
				$sql="SELECT * FROM customer order by cust_id ";
			
				$result=mysqli_query($con,$sql);
				
  
  
  
  
  while($userrow=mysqli_fetch_assoc($result))
  {
  $ProductID=$userrow['cust_id'];
  $ProductName=$userrow['firstname'];
  
 $emailid=$userrow['email_id'];
  $photo=$userrow['licence_no'];
?>

  <tr>
  <td><?php echo $ProductID; ?></td>
  <td><?php echo $ProductName; ?></td>
  <td><?php echo $emailid; ?></td>
<td><img width="300" height="300" src="<?php echo "Photos/".$photo; ?>" </img></td>
 
 <?php
 }
?>