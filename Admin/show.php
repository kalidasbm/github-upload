<html>
<head>
</head>
<body>
<?php

$con = mysqli_connect("localhost", "root","", "travel_mama");
	
$sql="select * from packages where id='102' ";

$result=mysqli_query($con,$sql);

?>	

<table>
<tr>
<th>Name :</th>
<th>Email ID :</th>
<th>Age :</th>
<th>Contact No:</th>
<th>Aadhar Card :</th>
<th>pan card:</th>
<th>Licence :</th>

</tr>

<?php
 
 while($cust=mysqli_fetch_assoc($result)){
	 
	// echo "<tr>";
	// echo "<td>".$cust['firstname']."</td>";
	// echo "<td>".$cust['email_id']."</td>";
	// echo "<td>".$cust['age']."</td>";
	// echo "<td>".$cust['cont_no']."</td>";
	// echo "<td>".$cust['aadhar_no']."</td>";
	// echo "<td>".$cust['pan_no']."</td>";
	// echo "<td> <image src=".$cust['licence_no']."height='400' width='560'/> </td>";
		echo "<td> <image src =".$cust['images']."/></td>"; 
	 echo "</tr>";	
 }
?>


</tr>
</table>
</body>
</html>