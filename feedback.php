<?php
	

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Modal Box Contact Form</title>
  <link rel="stylesheet" href="feedback.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
    <form action="savefeedback.php" method="GET" class="contact">
   
    <fieldset class="contact-inner">
		<h1 class="headline"> FEEDBACK </h1><br><br>
      <p class="contact-input">
        <input type="text" name="cname" placeholder="Your Name…" autofocus>
      </p>

      <p class="contact-input">
        <label for="select" class="select">
          <select name="csubject" id="select">
            <option value="" selected>Choose Subject…</option>
            <option value="1">I have a suggestion</option>
            <option value="1">I found a bug</option>
            <option value="1">Other</option>
          </select>
        </label>
      </p>

      <p class="contact-input">
        <textarea name="cmessage" placeholder="Your Message…"></textarea>
		<a href="mainpage.php"> Back To Home </a>
      </p>

      <p class="contact-submit">
		
        <input type="submit" value="Send Message">
		
      </p>
    </fieldset>
  </form>
	
  </body>
</html>
