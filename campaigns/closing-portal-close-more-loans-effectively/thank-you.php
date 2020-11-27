<!-- EMAIL TO info@techniecode.com -->
<?php
if($_POST["email"] != '' OR $_POST["phone"] != ''): 
    $ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $EmailSubject = "End the Closing chaos"; 
    $mailheader = "From: "."Michael Mergle <info@techniecode.com>"."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$mailheader .= "". PHP_EOL;
    $MESSAGE_BODY = "";
	if($_POST["email"] != ''):
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."\n"; 
	endif;
	if($_POST["phone"] != ''):
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
if($_POST["email"] != '' OR $_POST["phone"] != ''):  
    $ToEmail = $_POST["email"]; 
    $EmailSubject = "End the Closing chaos"; 
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
<meta charset="UTF-8">
<title>| Techniecode || closing-calendar-portal-close-more-loans-effectively</title>
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/carousel.css" rel="stylesheet" type="text/css" >

</head>
<body>
<header class="main-header stricky">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><a href="index.html"><img src="images/logo.png" class="img-responsive logo"> </a></div>
	  <div class="col-md-6 appoinment"><a href="tel:7732902427">773.290.2427</a></div>
    </div>
  </div>
</header>
<div class="banner">
	<div class="container"><div class="ban-box" id="startchange">
		<h1>Thank You!</span></h1>
		<span class="border" style="transition: none; line-height: 24px; border-width: 0px; margin: 0px 0px 22px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px;"></span>
		<p style="transition: none; line-height: 24px; border-width: 0px; margin: 0px 0px 10px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">We have received your message and will contact you soon.<br /><br style="transition: none; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">
               - Techniecode Team</p>
	
	</div></div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-4 col-sm-12">
      <div class="bubble">Processing Department</div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="bubble">Underwritting</div>
    </div>
    
    <div class="col-md-4 col-sm-12">
      <div class="bubble">Closing Department</div>
    </div>
    <img src="images/Illustration.png" class="img-responsive"></div>
</div>
<div class="why-section">
  <div class="why-top">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cls_cal">
        <h2>Why Use Closing Portal ?</h2>
        <h3>Simple, Clear and Easy To Use.</h3>
        <p>With Closing Portal on board, get closings done faster with no conflicts.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="single-item">
          <div class="icon-holder"> <img src="images/icon_1.png"> </div>
          <div class="content">
            <p>Using dashboard view, all departments involved in Closing Portal will have visbility and tracking of entire closing process -request to funded.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="single-item">
          <div class="icon-holder"> <img src="images/icon_2.png"></div>
          <div class="content">
            <p>Track all steps of closing process with effective communication </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="single-item">
          <div class="icon-holder"> <img src="images/icon_3.png"> </div>
          <div class="content">
            <p>Manage closing limits -standard and rush by dynamically setting daily or weekly limits. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="single-item">
          <div class="icon-holder"> <img src="images/icon_4.png"> </div>
          <div class="content">
            <p>With configurable workflow, you can keep every one - borrower, loan officer, closer, processor, underwriter, branch manager and more in the loop. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="client-section">
		<div class="container">
		<div class="sec-title text-center">
                <h1>Our Happy Clients</h1>
                <span class="decor"></span>
            </div>
		
		<div class="row">
			<section class="customer-logos slider">
				<div class="slide"><img src="images/1.jpg"></div>
      <div class="slide"><img src="images/2.jpg"></div>
      <div class="slide"><img src="images/3.jpg"></div>
      <div class="slide"><img src="images/4.jpg"></div>
      <div class="slide"><img src="images/5.jpg"></div>
      <div class="slide"><img src="images/6.jpg"></div>
      <div class="slide"><img src="images/7.jpg"></div>
      <div class="slide"><img src="images/8.jpg"></div>
	  <div class="slide"><img src="images/9.jpg"></div>
	  <div class="slide"><img src="images/11.jpg"></div>
	  <div class="slide"><img src="images/12.jpg"></div>
	  <div class="slide"><img src="images/13.jpg"></div>
	  
			</section>
		</div>
	</div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="single-footer-widget">
          <div class="sec-title text-left">
            <h2>Contact</h2>
            <span class="decor"></span> </div>
          <ul class="service-list">
            <li>Techniecode Inc.</li>
            <li>13 Barksdale Professional Center</li>
            <li>Newark, DE 19711</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="single-footer-widget">
          <div class="sec-title text-left">
            <h2>Follow Us</h2>
            <span class="decor"></span> </div>
          <ul class="service-list">
            <li><a href="https://www.facebook.com/techniecodeinc/" target="_blank"><img src="images/fb.png">&nbsp;&nbsp;Facebook</a></li>
            <li><a href="https://www.linkedin.com/in/techniecode-inc-53a132105/" target="_blank"><img src="images/in.png">&nbsp;&nbsp;Linkedin</a></li>
            <li><a href="https://twitter.com/Techniecodeinc" target="_blank"><img src="images/twitter.png">&nbsp;&nbsp;Twitter</a></li>
            <li><a href="https://plus.google.com/106671786393274097405" target="_blank"><img src="images/g+.png">&nbsp;&nbsp;Google Plus</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="copyrights">Copyrights © 2017 Techniecode Inc. All Rights Reserved</div>
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
