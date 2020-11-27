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
<link href="css/tab.css" rel="stylesheet" type="text/css">
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
      <div class="col-md-6 col-sm-4 col-xs-4"><img  src="images/circle.png"  class="img-responsive"></div>
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

<div class="my_bg">
  <div class="container" style="padding:10px;">
    <div class="row">
      <div class="col-md-6">
        <div class="tab" role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Closing Calendar</a></li>
            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Drip Campaign</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content tabs">
            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
              <section class="features">
                <div class="container">
                  <div class="row  pink_box '">
                    <div class="col-md-4 aside">
                      <h2>Closing Calendar</h2>
                      <h3>With our simple, encompass integrated and easy to use Closing Calendar, you can track, close and communicate closing efficiently.</h3>
                    </div>
                    <div class="col-md-8" style="padding: 0px 50px;">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td width="12%"><img src="images/1_icon.png" class="img-responsive"></td>
                              <td>Dashboard view of entire Closing Process</td>
                            </tr>
                            <tr>
                              <td><img src="images/2_icon.png" class="img-responsive"></td>
                              <td>Manage Closing Availability Limits</td>
                            </tr>
                            <tr>
                              <td><img src="images/3_icon.png" class="img-responsive"></td>
                              <td>Visibility to Loan Closing across Departments</td>
                            </tr>
                            <tr>
                              <td><img src="images/4_icon.png" class="img-responsive"></td>
                              <td>Configurable Closing Workflow </td>
                            </tr>
                            <tr>
                              <td><img src="images/5_icon.png" class="img-responsive"></td>
                              <td>Track Closing Steps</td>
                            </tr>
                            <tr>
                              <td><img src="images/6_icon.png" class="img-responsive"></td>
                              <td>Automated Email Notifications</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Section2">
              <section class="features">
                <div class="container">
                  <div class="row  pink_box '">
                    <div class="col-md-8" style="padding: 0px 50px;">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td width="12%"><img src="images/a_icon.png" class="img-responsive"></td>
                              <td> Multi-step Campaigns</td>
                            </tr>
                            <tr>
                              <td><img src="images/b_icon.png" class="img-responsive"></td>
                              <td>Easy Email template setup</td>
                            </tr>
                            <tr>
                              <td><img src="images/c_icon.png" class="img-responsive"></td>
                              <td> Triggers</td>
                            </tr>
                            <tr>

                              <td><img src="images/d_icon.png" class="img-responsive"></td>
                              <td>Scheduling </td>
                            </tr>
                            <tr>
                              <td><img src="images/e_icon.png" class="img-responsive"></td>
                              <td> Preview & Test</td>
                            </tr>
                            <tr>
                              <td><img src="images/f_icon.png" class="img-responsive"></td>
                              <td>Tracking & Log</td>
                            </tr>
                            <tr>
                              <td><img src="images/g_icon.png" class="img-responsive"></td>
                              <td> Reporting</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-4 aside">
                      <h2>Drip Campaign</h2>
                      <h3>Drip campaign portal is designed to manage email campaigns to communicate with Borrower, Loan Officers, Branch Managers Realtor and other Partners about the loan. </h3>
                      <h3>This portal is tightly integrated with Encompass and triggers can be setup on any field with any condition. .</h3>
                    </div>
                  </div>
                </div>
              </section>
            </div>
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
