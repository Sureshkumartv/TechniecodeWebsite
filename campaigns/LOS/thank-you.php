<!-- EMAIL TO info@techniecode.com -->
<?php
$sentby=$_POST['sentby'];
if($sentby == ''){
$sentby = "info@techniecode.com";
}

if($_POST["email"] != ''): 
    $ToEmail = "Michael Mergle <$sentby>"; 
    $EmailSubject = "Encompass Project Ideas on Table"; 
    $mailheader = "From: "."Michael Mergle <$sentby>"."\r\n"; 
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
    $EmailSubject = "Encompass Project Ideas on Table"; 
    $mailheader = "From: "."Michael Mergle <$sentby>"."\r\n"; 
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
<meta charset="UTF-8">
<title>| Techniecode || Encompass Project Ideas on Table</title>
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/carousel.css" rel="stylesheet" >
<script src="https://use.fontawesome.com/3f26f239dd.js"></script>
</head>
<body>
<header class="main-header stricky">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><a href="index.html"><img src="images/logo.png" class="img-responsive logo"> </a></div>
      <div class="col-md-6 appoinment">Call Us:<a href="tel:7732902427">773.290.2427</a></div>
    </div>
  </div>
</header>
<div class="banner" style="background-image:url(images/Encompass.jpg)">
  <div class="container">
    <div class="ban-box" id="startchange">
      <h1 style="transition: none; line-height: 64px; font-size:42px;">Thank You!</h1>
	  <p style="transition: none; line-height: 24px; border-width: 0px; margin: 0px 0px 10px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">We have received your message and will contact you soon.</p>
       </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cls_cal">
      <h2>Over decade of experience successfully delivering Simple to Complex Encompass projects for Banks and Mortgage Lenders. </h2>
      <p>Our Project Implementations include custom development (plugins, custom forms, SDK Programming), automation, integration of Encompass with other products ( Velocify, SalesForce, Mortech, OptimalBlue and more) and overall Encompass administration. </p>
    </div>
  </div>
</div>
<div class="why-section">
  <div class="why-top">
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 features">
        <div class="awesome-feature one media">
          <div class="awesome-feature-icon media-left"> <span><img src="images/icon_1.png"></span> </div>
          <div class="asesome-feature-details media-body">
            <h5>Administration</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 features">
        <div class="awesome-feature one media">
          <div class="awesome-feature-icon media-left"> <span><img src="images/icon_2.png"></span> </div>
          <div class="asesome-feature-details media-body">
            <h5>Integration</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 features">
        <div class="awesome-feature one media">
          <div class="awesome-feature-icon media-left"> <span><img src="images/icon_3.png"></span> </div>
          <div class="asesome-feature-details media-body">
            <h5>SDK Programming</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 features">
        <div class="awesome-feature one media">
          <div class="awesome-feature-icon media-left"> <span><img src="images/icon_4.png"></span> </div>
          <div class="asesome-feature-details media-body">
            <h5>Plug-ins</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 features">
        <div class="awesome-feature one media">
          <div class="awesome-feature-icon media-left"> <span><img src="images/icon_5.png"></span> </div>
          <div class="asesome-feature-details media-body">
            <h5>Drip Campaigns</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 features">
        <div class="awesome-feature one media">
          <div class="awesome-feature-icon media-left"> <span><img src="images/icon_6.png"></span> </div>
          <div class="asesome-feature-details media-body">
            <h5>Custom Forms</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background-color:#2d2d2d;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
        <div class="copyrights">Copyrights © 2017 Techniecode Inc. All Rights Reserved</div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="single-footer-widget">
          <div class="sec-title text-right">
            <ul class="service-list">
              <li><a href="https://www.facebook.com/techniecodeinc/" target="_blank"><img src="images/fb.png"></a></li>
              <li><a href="https://www.linkedin.com/in/techniecode-inc-53a132105/" target="_blank"><img src="images/in.png"></a></li>
              <li><a href="https://twitter.com/Techniecodeinc" target="_blank"><img src="images/twitter.png"></a></li>
              <li><a href="https://plus.google.com/106671786393274097405" target="_blank"><img src="images/g+.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/slick.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>
<script type="text/javascript">
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".main-header").css('background-color', 'rgba(255, 255, 255, .85)');
       } else {
          $('.main-header').css('background-color', 'transparent');
       }
   });
    }
});
</script>
</body>
</html>
