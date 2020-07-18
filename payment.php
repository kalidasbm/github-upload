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

<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index-2.html"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
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
	<h3> PROCESS FOR PAYMENT </h3>
	<form action="payment2.php" method="POST">
	<table>
	<tr>
			<td>Enter Card NO :</td>
			<td><input type="text" name="txt1" value="Enter Card No"></td>
	</tr>
	<tr>
			<td>Enter CVV No :</td>
			<td><input type="text" name="txt2" value="Enter CVV No"></td>
	</tr>
	<tr>
			<td>Card Expiry</td>
			<td> <select name="paymentid"  onchange="sendInfo()">
                <option VALUE="blank" SELECTED> select date </option>
				<option VALUE="blank" SELECTED> 1 </option>
				<option VALUE="blank" SELECTED> 2 </option>
				<option VALUE="blank" SELECTED> 3 </option>
				<option VALUE="blank" SELECTED> 4 </option>
				<option VALUE="blank" SELECTED> 5 </option>
				<option VALUE="blank" SELECTED> 6 </option>
				<option VALUE="blank" SELECTED> 7 </option>
				<option VALUE="blank" SELECTED> 8 </option>
				<option VALUE="blank" SELECTED> 9 </option>
				<option VALUE="blank" SELECTED> 10 </option>
				<option VALUE="blank" SELECTED> 11 </option>
				<option VALUE="blank" SELECTED> 12 </option>
				</select>
				
				<select name="payementidyear"  onchange="sendInfo()">
                <option VALUE="blank" SELECTED> select year </option>
				<option VALUE="blank" SELECTED> 2018 </option>
				<option VALUE="blank" SELECTED> 2019 </option>
				<option VALUE="blank" SELECTED> 2020 </option>
				<option VALUE="blank" SELECTED> 2021 </option>
				<option VALUE="blank" SELECTED> 2022 </option>
				<option VALUE="blank" SELECTED> 2023 </option>
				<option VALUE="blank" SELECTED> 2024 </option>
				</select>
				</td>
				
				
	</tr>
	<tr>
		<td>Enter Amount :</td>
		<td><input type="text" name="txtamt" value=""></td>
	</tr>
	<tr>
		<td><input type="submit" name="btn1"></td>
		<td><input type="reset" name="btn2"></td>
	</tr>
	</table>
	</form></body></html>