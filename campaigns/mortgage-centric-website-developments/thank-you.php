<!-- EMAIL TO info@techniecode.com -->
<?php
if($_POST["email"] != ''): 
    $ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $EmailSubject = "MORTGAGE-CENTRIC WEBSITE DEVELOPMENT"; 
    $mailheader = "From: "."Michael Mergle <info@techniecode.com>"."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$mailheader .= "". PHP_EOL;
    $MESSAGE_BODY = "";
	if($_POST["email"] != ''):
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."\n"; 
	$MESSAGE_BODY .= "Phone: ".$_POST["phone"]."\n"; 
	endif;
	$MESSAGE_BODY .= ""; 
	$MESSAGE_BODY .= ""; 
	$MESSAGE_BODY .= ""; 
    $MESSAGE_BODY .= ""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die(error_get_last()); 
endif;	
?>
<!-- EMAIL TO CONTACT PERSON -->
<?php
if($_POST["email"] != ''):  
    $ToEmail = $_POST["email"]; 
    $EmailSubject = "MORTGAGE-CENTRIC WEBSITE DEVELOPMENT"; 
    $mailheader = "From: "."Michael Mergle <info@techniecode.com>"."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$mailheader .= "". PHP_EOL;
    $MESSAGE_BODY = "Thank You! \r\n\n"; 
    $MESSAGE_BODY .= "We have received your message and I will contact you soon.\r\n\n"; 
	$MESSAGE_BODY .= "Michael Mergle \n"; 
	$MESSAGE_BODY .= "Techniecode Inc."; 
	$MESSAGE_BODY .= ""; 
    $MESSAGE_BODY .= ""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die(error_get_last()); 
endif;	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MORTGAGE-CENTRIC WEBSITE DEVELOPMENT :: Techniecode inc.</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="https://www.techniecode.com/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://use.fontawesome.com/3f26f239dd.js"></script>
<link rel="stylesheet" href="css/carousel.css" type="text/css" >

</head>
<body>
<div class="header">
  <div class="container"> <img src="images/logo.jpg" class="img-responsive logo" /> 
  
  <h1>Thank You! </h1>
      <strong>We have received your message and will contact you soon! <br/><br/>
	  - Techniecode Team</strong>
  
 
 <div class="social-icons"> <a href="https://www.facebook.com/techniecodeinc" target="_blank"> <i class="fa fa-facebook"></i> </a> <a href="https://twitter.com/Techniecodeinc" target="_blank"> <i class="fa fa-twitter"></i> </a>   <a href="https://www.linkedin.com/company/techniecode-inc-" target="_blank"> <i class="fa fa-linkedin"></i> </a> <a href="https://plus.google.com/+Techniecode" target="_blank"> <i class="fa fa-google-plus"></i> </a> </div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Our Features</h2>
        <p>Having a good website is critical for the success of a Mortgage company. For lot of companies, it is the only or key source of leads. We built websites for many companies with lot of functionality integrating with their other systems and key items below:</p>
        <div class="copy">&copy; 2017 Techniecode Inc. All Rights Reserved</div>
      </div>
      <div class="col-md-6">
        <ul class="list">
          <li>Landing Pages</li>
          <li>Intranet</li>
          <li>Locations</li>
          <li>LO Profile</li>
          <li>Short App</li>
          <li>Blogs</li>
          <li>Learning center</li>
          <li>Custom Quote</li>
          <li>Long App</li>
          <li>Leadership page</li>
          <li>Chat functionality</li>
          <li>CMS System</li>
          <li>Careers</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>


</body>
</html>
