<!-- EMAIL TO info@techniecode.com -->
<?php
if($_POST["email"] != ''): 
    $ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $EmailSubject = "Custom Solutions & Integrations"; 
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
    $EmailSubject = "Custom Solutions & Integrations"; 
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
<title>Mortgage Business :: Techniecode inc.</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="https://www.techniecode.com/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://use.fontawesome.com/3f26f239dd.js"></script>
</head>
<body>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-6"> <img src="images/logo.png" class="img-responsive" alt="techniecode"> </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-12 techniecode-address">Techniecode Inc. <br>
            113 Barksdale Professional Center<br>
            Newark, DE 19711 </div>
        </div>
      </div>
      <div class="col-md-3"> <a href="tel:7732902427">
        <div class="row">
          <div class="col-md-12 techniecode-number">773-290-2427</div>
        </div>
      </div>
      </a> </div>
  </div>
</div>
</div>



<div class="banner" style="height:200px; background-size:cover; background-position:center;">

</div>

<div class="article" style="padding:50px 0; float:left; width:100%;">
  <div class="container">
    <div class="row" style="margin-top:30px; text-align:center;">
      <h1>Thank You! </h1>
      <strong>We have received your message and will contact you soon! <br/>
      <br/>
      - Techniecode Team</strong> </div>
  </div>
</div>
</div>
<footer>
<div class="container">
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="single-footer-widget"> Techniecode Inc. 113 Barksdale Professional Center, Newark, DE 19711 </div>
  </div>
  <div class="col-md-3 col-sm-6 col-md-offset-3 col-xs-12">
    <div class="single-footer-widget">
      <div class="sec-title text-left"> <a href="https://www.facebook.com/techniecodeinc/" target="_blank"><img src="images/fb.png"></a> <a href="https://www.linkedin.com/in/techniecode-inc-53a132105/" target="_blank"><img src="images/in.png"></a> <a href="https://twitter.com/Techniecodeinc" target="_blank"><img src="images/twitter.png"></a> <a href="https://plus.google.com/106671786393274097405" target="_blank"><img src="images/g+.png"></a>
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>
<div class="copyrights">Copyrights &copy; 2017 Techniecode Inc. All Rights Reserved</div>
</body>
</html>
