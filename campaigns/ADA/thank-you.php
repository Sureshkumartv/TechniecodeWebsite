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
<html class="no-js">
<head>
<title>Techniecode - Americans With Disabilities Act</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div class="preloader">
  <div class="preloader_image"></div>
</div>
<div id="canvas">
  <div id="box_wrapper">
    <section class="page_topline ds darkblue table_section section_padding_bottom_10 ">
      <div class="container">
        <div class="row padd">
          <div class="col-sm-6 text-sm-left">
            <div class="inline-content darklinks"> 
			<span style="color:#fff;"> <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> <a href="tel:7732902427">773-290-2427</a></span> 
			<span style="color:#fff;"> <i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i> <a href="mailto:info@techniecode.com">info@techniecode.com</a> </span> 
			</div>
          </div>
          <div class="col-sm-6 txt-ryt">
            <div> 
			<a class="social-icon color-icon soc-facebook" href="https://www.facebook.com/techniecodeinc" title="Facebook"></a> 
			<a class="social-icon color-icon soc-linkedin" href="https://www.linkedin.com/company/techniecode-inc" title="Linkedin"></a> 
			<a class="social-icon color-icon soc-twitter" href="https://twitter.com/Techniecodeinc" title="Twitter"></a> 
			<a class="social-icon color-icon soc-google" href="https://plus.google.com/+Techniecode" title="Google"></a> </div>
          </div>
        </div>
      </div>
    </section>
    <header class="page_header header_white toggler_xs_right section_padding_15">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 display_table">
            <div class="header_left_logo display_table_cell"> <a href="index.html" class="logo top_logo"> <img src="images/logo.png" alt=""> </a> </div>
			</div>
           
          </div>
        </div>
      </div>
    </header>
    <section class="intro_section page_mainslider ds">
      <div class="flexslider" data-nav="false">
        <ul class="slides">
          <li> <img src="images/slide03.jpg" alt="">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <div class="slide_description_wrapper">
                    <div class="slide_description">
                      <div class="intro-layer" data-animation="fadeInUp">
                        <h2>THANK YOU! </h2>
                      </div>
                      <div class="intro-layer" data-animation="fadeInUp">
                        <h4 >We have received your message and will contact you soon! </h4>
						<h5>- Techniecode Team</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
  </div>
  <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->
<script src="js/compressed.js"></script>
<script src="js/main.js"></script>
</body>
</html>
