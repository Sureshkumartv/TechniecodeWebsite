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
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="logo"><img src="images/logo.png" class="img-responsive" alt="techniecode"></div>
      </div>
      <div class="col-md-3 txt-ctr"> <a href="mailto:info@techniecode.com">
        <div class="techniecode-mail">info@techniecode.com</div>
        </a> </div>
      <div class="col-md-3 txt-ctr"> <a href="tel:7732902427">
        <div class="techniecode-number">773-290-2427</div>
        </a> </div>
    </div>
    <div class="row" style="padding:50px;">
      <div class="col-md-6"> <img src="images/circle.png" class="img-responsive  margin-auto" alt="custom applications"> </div>
      <div class="col-md-6">
<div class="row" style="margin-top:30px; text-align:center; color:#fff;">
      <h1>Thank You! </h1>
      <strong>We have received your message and will contact you soon! <br/>
      <br/>
      - Techniecode Team</strong> </div>
  </div>
      </div>
    </div>
  </div>
</section>

</div>

<section class="contact">
  <div class="container">
    <div class="row  pink_box '">
      <div class="col-md-4 aside">
 
        <h3>Still have Questions?</h3>
      </div>
      <div class="col-md-8  white_box">
        <h3 class="txt-ctr">Ask Us directly!</h3>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <td width="5%"><img src="images/mail.png" class="img-responsive"></td>
              <td><a href="mailto:info@techniecode.com"  style="color:#000;" target="_blank">info@techniecode.com </a></td>
            </tr>
            <tr>
              <td><img src="images/phone.png" class="img-responsive"></td>
              <td><a href="tel:7732902427" style="color:#000;" target="_blank">773-290-2427</a></td>
            </tr>
            <tr>
              <td><img src="images/web.png" class="img-responsive"></td>
              <td><a href="www.techniecode.com" style="color:#000;" target="_blank">www.techniecode.com</a></td>
            </tr>
          </table>
        </div>
        <div class="social-icons"> <a class="facebook" href="https://www.facebook.com/techniecodeinc" target="_blank"> <i class="fa fa-facebook"></i> </a> <a  class="twitter"  href="https://twitter.com/Techniecodeinc" target="_blank"> <i class="fa fa-twitter"></i> </a> <a  class="linkedin"  href="https://www.linkedin.com/company/techniecode-inc-" target="_blank"> <i class="fa fa-linkedin"></i> </a> <a  class="google"  href="https://plus.google.com/+Techniecode" target="_blank"> <i class="fa fa-google-plus"></i> </a> </div>
      </div>
    </div>
  </div>
</section>
<section class="footer">
  <div class="container">
    <div class="row '">Copyrights © 2017 Techniecode, Inc. All Rights Reserved</div>
  </div>
</section>
</body>
</html>
