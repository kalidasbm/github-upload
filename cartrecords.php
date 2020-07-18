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
<?php

$productkaid = $_POST['tempid'];
//echo "$productkaid";
$productkaamt = $_POST['amount'];
//echo "$productkaamt";


	
$con = mysqli_connect("localhost", "root","", "home");
			
$sql="SELECT * FROM product where p_id= '$productkaid' ";
			
$result=mysqli_query($con,$sql);

?>
<center>
 <form action="cartrecordsave.php" method="POST">
  <table cellspaceing="2">
	<tr>
		<th></th>
		<th> Product Name :</th>
		<th> Product Cost:</th>
		<th> status :</th>
		<th>QTY :</th>
    </tr>

<?php	
while($cust=mysqli_fetch_assoc($result))
{ 
	$pic=$cust['pictures'];
	$productname =$cust['p_name'];
	$productamt =$cust['p_amount'];
	$productstatus =$cust['p_avaliable'];
	?>
	
  <tr>
		<td><img width="300" height="250" src="<?php echo "Photos/".$pic; ?>"> </img></td>
		<td><?php echo "$productname"; ?></td>
		<td><?php echo "$productamt"; ?></td>
		<td><?php echo "$productstatus"; ?></td>
		<td> <input type="text" name="prodqty" value="1" size="5"/> </td>
    </tr>
  
	<tr>
		
		<td><input type="hidden" name="productkaid" value="<?php echo "$productkaid"; ?>" /></td>
		<td><input type="hidden" name="productkaname" value="<?php echo "$productname"; ?>" /></td>
		<td><input type="hidden" name="productkaamt" value="<?php echo "$productamt"; ?>" /></td>
		<td><input type="hidden" name="productkastatus" value="<?php echo "$productstatus"; ?>" /></td>
    </tr>
<?php			}
?>
	<tr>
		<td><input type="submit" name="txtsub" value="Save & Continue shop"></td>
	</tr>
</table>
  </form>
  <form action="mainpage.php" method="POST">
  <table>
	<input type="submit" name="btn2" value="Discard Product">
	</table>
  </form>