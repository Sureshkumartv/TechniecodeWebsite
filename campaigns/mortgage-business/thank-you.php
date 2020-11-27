<!-- EMAIL TO info@techniecode.com -->
<?php
$sentby=$_POST['sentby'];
if($sentby == ''){
$sentby = "info@techniecode.com";
}

if($_POST["email"] != ''): 
    //$ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $ToEmail = "Michael Mergle <$sentby>"."\r\n";
    $EmailSubject = "Want to MORTGAGE BUSINESS"; 
    //$mailheader = "From: "."Michael Mergle <info@techniecode.com>"."\r\n"; 
$mailheader = "From: "."Michael Mergle <$sentby>"."\r\n";
    $mailheader .='Bcc: leela.kumari@techniecode.com' . "\r\n";
   // $mailheader = "From: "."Michael Mergle <$sentby>"."\r\n";
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
    $EmailSubject = "Want to simplify MORTGAGE BUSINESS"; 
    //$mailheader = "From: "."Michael Mergle <info@techniecode.com>"."\r\n"; 
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
<title>| Techniecode || Encompass-Consulting-Services</title>
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/carousel.css" >
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
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-4 col-xs-4"><img  src="images/house.png"  class="img-responsive"></div>
      <div class="col-md-6 col-sm-8 col-xs-8">
        <div class="ban-box" id="startchange">
          <h1>Thank You!</h1>
		  <p style="transition: none; line-height: 24px; border-width: 0px; margin: 0px 0px 10px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">We have received your message and will contact you soon.<br /><br style="transition: none; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px;">
               - Techniecode Team</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="feature">
  <div class="container">
    <div class="row Clients">
      <div class="col-md-2 single-circle">
        <div class="circle"  style="background:#0581c7"><img class="img-responsive" src="images/1_icon.png" alt=""> </div>
        <h3>Email & Drip Campaign</h3>
      </div>
      <div class="col-md-2 single-circle">
        <div class="circle" style="background:#f4c62b"><img class="img-responsive" src="images/2_icon.png" alt=""></div>
        <h3>Encompass Consulting</h3>
      </div>
      <div class="col-md-2 single-circle">
        <div class="circle" style="background:#8cc63e"><img class="img-responsive" src="images/3_icon.png" alt=""></div>
        <h3>Custom Solutions</h3>
      </div>
      <div class="col-md-2 single-circle">
        <div class="circle" style="background:#93268f"><img class="img-responsive" src="images/4_icon.png" alt=""></div>
        <h3>Integrations</h3>
      </div>
      <div class="col-md-2 single-circle">
        <div class="circle" style="background:#f31978"><img class="img-responsive" src="images/5_icon.png" alt=""> </div>
        <h3>Reports</h3>
      </div>
      <div class="col-md-2 single-circle">
        <div class="circle" style="background:#0fc8b9"><img class="img-responsive" src="images/6_icon.png" alt=""></div>
        <h3>Closing Calendar</h3>
      </div>
    </div>
  </div>
</div>

<section id="features">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Awesome Features</h2>
    </div>
    <div class="row">
      <div class="col-md-5 col-md-offset-0 text-right"><strong  class="orange">How are you generating more leads?</strong><br>
        Check our solutions<br>
        <strong  class="orange">Increase your company Brand Recognition</strong><br>
        Check our marketing solutions<br>
        <strong  class="orange">Are you closing efficiently?</strong><br>
        Check our Closing Portal<br>
        <strong  class="orange">Increase your Realtor base</strong><br>
        Check our realtor portal<br>
        <strong  class="orange">Recruit and Organize your employees</strong><br>
        Check our HR portal </div>
      <div class="col-md-1 col-sm-12">
        <div class="media service-box  fadeInRight">
          <div class="pull-left"> <i class="fa fa-users"></i> </div>
        </div>
        <div class="media service-box wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
          <div class="pull-left"> <i class="fa fa-user-plus"></i> </div>
        </div>
        <div class="media service-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="pull-left"> <i class="fa fa-rocket"></i> </div>
        </div>
        <div class="media service-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="pull-left"> <i class="fa fa-road"></i> </div>
        </div>
        <div class="media service-box wow fadeInLeft" style="visibility: hidden; animation-name: none;">
          
        </div>
      </div>
      <div class="col-md-4 text-left fl-lft" style="color:#282828"><strong style="color: #ff6701;">Do you have a Mortgage centric website  or just a website?<br>
        <br>
        Get a digital prequalification in less than 3 minutes.<br>
        <br>
        Integrate all your Mortgage tools into one  centralized database for ROI tracking<br>
        <br>
        Do you have Loan officer Personalized page?<br>
        <br>
        Do you have dynamic long form applications?<br>
        <br>
        Is your title company integrated with your LOS  System? </strong></div>
    </div>
  </div>
</section>

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
