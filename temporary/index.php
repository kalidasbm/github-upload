<!DOCTYPE php>
<php >
<head>
  <meta charset="UTF-8">
  <title>Home management system</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="w3.css">
      <link rel="stylesheet" href="css/style2.css">
	  <link rel="stylesheet" href="css/style1.css">
	  <link rel="stylesheet" href="css/style0.css">
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/main.css" rel="stylesheet">
	

  
</head>

<body>
  <section id="screen1">
  <div class="w3-container">
  
  <div class="w3-content w3-display-container" style="max-width:100%">
  <img class="mySlides" src="img\img5.jpg" style="width:100%">
  <img class="mySlides" src="img\img3.jpg" style="width:100%">
  <img class="mySlides" src="img\img1.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
  	
	</div>
						
						
						
						<nav>
								 <ul>
						   <li><a href="#"><big>Home</big></a></li>
									  <li><a href="cart.php"><big>Shopping</big></a></li>
									  <li><a href="shopend.php"><big>Cart</big></a></li>
									  <li><a href="#screen3"><big>Feedback</big></a></li>
									  <li><a href="#screen3"><big>Contact</big></a></li>
								 </ul>
							</nav>


								
						
</section>


<section id="screen3">
<section id="contact">

<div id="map" style="width:100%;height:700px"></div>

		<script>
		function myMap() {
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {
			center: new google.maps.LatLng(19.044575,73.025519),
			zoom: 19
		  }
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</section>
</section>


<section id="screen2">

		<section id="contact">
		
				<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="img/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: kalidasmahawarkar@gmail.com<br>
								Phone: (022) 27745722,27745732,(022)27747521-23 , 65252101 , 02
							</address>
						</div>
						<div class="contact-address">
							<h3>Contact</h3>
							<address>
								Plot No. 17, Sion-Panvel Expressway,<br> 
								Opp. nerul Railway Station, Sector -4,<br> 
								nerul, Navi Mumbai, Maharashtra 410211
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>	

<footer id="footer">
        <div class="container">
            <div class="text-center">
                  <p> Copyright  &copy;2017<a target="_blank" href="">RAIT</a> All Rights Reserved. <br> Designed by <a target="_blank" href="">Kalidas , Ankita & deepalii </a></p>                
            </div>
        </div>
    </footer>		
	</section>
    



</section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

    <script  src="js/index.js"></script>
	
	<script  src="js/index1.js"></script>
	
	<script type="text/javascript" src="js/gmaps.js"></script>

</body>
</php>
