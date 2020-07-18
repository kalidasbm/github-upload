
<center>
<?php
session_start();
 	//echo $_SESSION["custimpid"];
	$customerchiid = $_SESSION["custimpid"];
	$changestatus ="NOT";
  if($customerchiid ==NULL)
  {
	  header('Location: login.php');
  }
  else
  {
	$productchaid = $_POST['productkaid'];
 
	// echo "<br> $productchaid <br>";
 
	$productchiquantity =$_POST['prodqty'];
	// echo "$productchiquantity <br>";
 
	$productchiamount =$_POST['productkaamt'];
	// echo "$productchiamount <br>";
 
	$totalcost = ($productchiquantity *$productchiamount);
	// echo "$totalcost";
	$con = mysqli_connect("localhost", "root","", "home");

	$oracle ="insert into cart(cust_fid,p_Fid,total_amount,quantity,status) values ('$customerchiid','$productchaid','$totalcost','$productchiquantity','$changestatus')";
	if($result1=mysqli_query($con,$oracle))
	{
	//echo "Your Product Saved into Cart ";
	//header('Location: mainpage.php');
	}
	else
	{
	 echo "ERROR";
	}
?>	
 
 
 <!DOCTYPE html>
<html>

<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.html">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                   <h3><b><a href="viewcart.php"> View Your cart </a></b></h3>
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.html">Login</a></li> 
								<li><a href="login.html">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index-2.html"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.html">Events</a><i>/</i></li>
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="services.html">services</a><i>/</i></li>
					<li><a href="feedback.php">feedback</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
 
 
 
 
 
 <form action="cartrecordsave1.php" method="POST">
	<table>

	<?php
		$statuschecking ="NOT";
	echo "Your Product Saved into Cart ";
	// $sql2="select a.pictures,b.cart_id,b.total_amount,b.quantity from product a, cart b where a.p_id=b.cart_id ";
		 $sql2 ="select * from cart where cust_Fid='$customerchiid' and status='$statuschecking'";	
$result2=mysqli_query($con,$sql2);

 while($cust2=mysqli_fetch_assoc($result2))
{ 	
		$cartid = $cust2['cart_id'];
		$productimgid = $cust2['p_Fid'];
		$totalamount = $cust2['total_amount'];
		$Quantities = $cust2['quantity'];
	?>

	
	<tr>
		<th><?php  $sql5 ="select * from product where p_id='$productimgid' "; 
		$result5=mysqli_query($con,$sql5); 
		while($cust5=mysqli_fetch_assoc($result5))
		{
			?></th>
		<th>Total Amount :</th>
		<th>Total Quantity :</th>
		<th></th>
	</tr>
	
	<tr>
		<td><img width="300" height="300" src="<?php echo "Photos/".$cust5['pictures']; ?>"> </img><?php }?></td>
		<td><?php echo "$totalamount"; ?></td>
		<td><?php echo "$Quantities"; ?></td>
		<td><a href="remove.php?id=<?php echo $cartid?> " />Remove from Cart </a></td>
	</tr>
	
	
	
<?php 

}

$sql3 ="select count(quantity) from cart where cust_Fid='$customerchiid' and status='$statuschecking'";
$sql4 ="select sum(quantity) from cart where cust_Fid='$customerchiid' and status='$statuschecking'";
$sql7 ="select sum(total_amount) from cart where cust_Fid='$customerchiid' and status='$statuschecking'";
$result3=mysqli_query($con,$sql3);
$result4=mysqli_query($con,$sql4);
$result7=mysqli_query($con,$sql7);
 while($cust3=mysqli_fetch_assoc($result3))
 {   $tempcountquantity =$cust3['count(quantity)'];
	echo "<br> <h3>Total Product You entered in cart is ".$cust3['count(quantity)']." .</h3>"; }
 
 while($cust4=mysqli_fetch_assoc($result4))	
 {  $tempsumquantity =$cust4['sum(quantity)'];
	echo "<h4>Your Total Product of Count is ".$cust4['sum(quantity)']."</h4>";	}
 
 while($cust7=mysqli_fetch_assoc($result7))
 { $totalprodcost =$cust7['sum(total_amount)'];
	echo "<h4>Your Total Bill is ".$cust7['sum(total_amount)']."</h4>";	 }
?>
	<tr>
		<td><input type="hidden" name="txtcountquantity" value="<?php echo "$tempcountquantity";?>"</td>
		<td><input type="hidden" name="txtsumquantity" value="<?php echo "$tempsumquantity";?>"> </td>
		<td><input type="hidden" name="txtsumcost" value="<?php echo "$totalprodcost";?>"> </td>
	</tr>
	<tr>
		<td><input type="submit" name="btn1" value="Buy Now" /></td>
		<td><a href="mainpage.php"><input type="button" name="btn1" value="Continue Shoping" /></a></td>
	
	<tr>
 
	</table>
	</form>
 </body>
 </html>
  <?php } ?>