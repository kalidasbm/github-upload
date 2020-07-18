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


<?php
			session_start();
 	// Storing session data
			echo $_SESSION["firstimage"];
			$tempsession =$_SESSION["firstimage"];
			//echo "$tempsession";
			$con = mysqli_connect("localhost", "root","", "home");
			$tempuserid ="12";
				$sql="select * from product where p_id='$tempsession'";
			
				$result=mysqli_query($con,$sql);
				
			if($cust=mysqli_fetch_assoc($result))
			{
				?><center><img width="300" height="300" src="<?php echo "Photos/".$cust['pictures']; ?>"> </img></center>
			<?php	
				echo "<center>";
				echo "<tr>";
				echo "<td><h3><b> Total Amount </b></h3></td>";
				// echo "<td>".$cust['p_name']."</td>";
			    echo "<td><h3><b>".$cust['p_amount']."</b></h3></td>";
				// echo "<td>".$cust['pictures']."</td>";
				// echo "<td>".$cust['p_avaliable']."</td>";
				// echo "<td>".$cust['p_quantity']."</td>";
				echo "</tr>";
				$t_amt =$cust['p_amount'];
			 } 
				$tempcartcount ="0";
				$tempcartcount++;
				
		$oracle="insert into cart(cust_fid,p_fid,total_amount,quantity) VALUES('$tempuserid','$tempsession','$t_amt','$tempcartcount')";
			if($result=mysqli_query($con,$oracle))
			{
				echo "<h3> YOU Successfully Entered product into cart</h3>";
				?>	<div class="w3l_header_right1">
					<h2><a href="mainpage.php">Continue Shopping</a></h2>
				</div>
				
		<?php	}
			else
			{
				 echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

			
			?>