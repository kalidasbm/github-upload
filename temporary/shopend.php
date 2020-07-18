<!DOCTYPE php>
<php >
<head>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  
  
  
      <link rel="stylesheet" href="css/styleshop.css">

  
</head>

<body>
  <link href="font/font.css" rel="stylesheet">
<body>
  <div id="wrap">
    <div id="cart_layout_1">
      <h1>Shopping Cart
	  <p align="right"><a href="index.php" >Home</a>.        			        <a href="cart.php" >Shop.</a></h1></p>
      <div class="cart_info">
        <div class="product">
          <img src="img\veg.jpg"/>
        </div>
        <div class="product_info">
          <div class="center">
            <span>Vegitable</span><span>Spinach</span><span>1 Kg</span>
          </div>
        </div>
        <div class="details">
          <div class="qty">
            <div class="center">
            <span>QTY:</span><input type="text"></input>
          </div>
          </div>
          <div class="price">
            <div class="center">
            <span>Rs. 24.99</span>
            </div>
          </div>
          <div class="remove">
            <div class="center">
              <span class="hidden">Remove</span><i class="fa fa-times-circle fa-4"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="complete_cart">
        <div class="updated">
        <div class="shipping">
          <h2>Shipping Estimate</h2>
          <div class="state">
            <select id="state">
                   <option value = "1">Mumbai</option>
                   <option value = "2">Thane</option>
                   <option value = "3">Navimumbai</option>
                   <option value = "4">Etc.</option>
                 </select>
          </div>
          <div class="zip">
            <input type="text"></input>
          </div>
          <div class="calc">
            <a class="button" href="#">Calculate</a>
          </div>
        </div>
        <div class="coupon">
          <h2>Coupon Code</h2>
          <input id="code"></input>
        <a class="button update">Update Cart</a>
        </div>
        </div>
        <div class="checkout">
          <div class="total">
          <h2>Subtotal:</h2>
          <span class="sub">
            <small>Excluding Tax and Shipping</small>
          </span>
          </div>
          <span class="subtotal">
            Rs. 24.99
          </span>
          <div class="bfb">
            <a class="button" href="#">Checkout</a>
          </div>
        </div>
         <div class="updated mobile">
        <div class="shipping">
          <h2>Shipping Estimate</h2>
          <div class="state">
            <select id="state">
                   <option value = "1">Alabama</option>
                   <option value = "2">Alaska</option>
                   <option value = "3">Arizona</option>
                   <option value = "4">Etc.</option>
                 </select>
          </div>
          <div class="zip">
            <input type="text"></input>
          </div>
          <div class="calc">
            <a class="button" href="#">Calculate</a>
          </div>
        </div>
        <div class="coupon">
          <h2>Coupon Code</h2>
          <input id="code"></input>
        <a class="button update">Update Cart</a>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>
  
  
</body>
</php>
