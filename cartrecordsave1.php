<?php
  $quantitycount =$_POST['txtcountquantity'];
  $quantitysum = $_POST['txtsumquantity'];
  $totalproductcost = $_POST['txtsumcost'];
 
session_start();
 	//echo $_SESSION["custimpid"];
	$customerchiid = $_SESSION["custimpid"];

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
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
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
	<center>
	<h2>TOTAL BILL IS <?php echo "$totalproductcost ";?></h2>
<h3> PROCESS FOR PAYMENT </h3>
	<form action="payment2.php" method="POST">
	<table>
	<tr>
			<td>Enter Card NO :</td>
			<td><input type="text" name="txt1" placeholder="Enter Card No"></td>
	</tr>
	<tr>
			<td>Enter CVV No :</td>
			<td><input type="text" name="txt2" placeholder="Enter CVV No"></td>
	</tr>
	<tr>
			<td>Card Expiry</td>
			<td><input type="text" name="txtexpiry" placeholder="enter expiry date"></td>
				
				
	</tr>
	<tr>
			<td><input type="hidden" name="text1" value="<?php echo "$totalproductcost"; ?>"></td>
			
	</tr>
	<tr>
		<td>Enter Amount :</td>
		<td><input type="text" name="txtamt" value="<?php echo "$totalproductcost"; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="btn1"></td>
		<td><input type="reset" name="btn2"></td>
	</tr>
	</table>
	</form></body></html>
<?php	/*$con = mysqli_connect("localhost", "root", "", "home");
	 		
    $sql = "Select * from cart where cust_Fid='$customerchiid'";
	$result=mysqli_query($con,$sql);
	
	while($cust=mysqli_fetch_assoc($result))
	{
		echo $cust['cart_id'];
	} 
	
			
    $sql2 = "insert into Payment";
	$result2=mysqli_query($con,$sql);
	
	while($cust=mysqli_fetch_assoc($result))
	{
		echo $cust['cart_id'];
	} 
	*/
?>