<!-- EMAIL TO info@techniecode.com -->
<?php
if($_POST["email"] != ''): 
    $ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $EmailSubject = "Want to MORTGAGE BUSINESS"; 
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
    $EmailSubject = "Want to simplify MORTGAGE BUSINESS"; 
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
<title>Techniecode || Mortgage Business</title>
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/carousel.css">
<script src="https://use.fontawesome.com/3f26f239dd.js"></script>
</head>
<body>
<header class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6"><a href="index.html"><img src="images/logo.png" class="img-responsive logo"> </a></div>
      <div class="col-md-4  col-sm-6 appoinment" style="">Mail Us:<a href="mailto:info@techniecode.com">info@techniecode.com</a></div>
      <div class="col-md-3  col-sm-6 appoinment" style="float:right;">Call Us:<a href="tel:7732902427">773.290.2427</a></div>
    </div>
  </div>
</header>
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-5 text-center mypic"><img  src="images/disability.png"  class="img-responsive"></div>
      <div class="col-md-7 access">
        <div class="ban-box" id="startchange">
          <h1>Thank You!</h1>
          <h4 style="color:#333; font-size: 16px;">We have received your message and will contact you soon.</h4>
        </div>

      </div>
    </div>
  </div>
</div>
<section id="get-in-touch">
  <div class="container">
    <div class="section-header">
      <div class="row">
        <div class="subscribe-box">

        </div>
      </div>
    </div>
  </div>
</section>
<div id="content">
  <div class="container">
    <div class="row">
     <div class="col-md-9">
      	 <p>The focus is website accessibility,  a catch-all phrase that means making websites and other digital platforms and files accessible to individuals  with disabilities.</p>
        <ul class="bullet">
          <li>LET’S GET AHEAD OF RACE before the regulations making accessibility mandatory.</li>
          <li>Web accessibility is already a business necessity, even if it isn’t yet a regulatory.</li>
          <li>Don’t get in to litigation risks, reputation damage and losing business opportunities.</li>
        </ul>
        <p>Techniecode expertise in Mortgage IT Industry can evaluate and help your website accessibility following WCAG 2.O guidelines.</p>
      </div>
      <div class="col-md-3 pull-right adalogo"> <img src="images/ada_logo.png"> </div>
      
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
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$('#form').submit(function(){
var ep_emailval = $('#subscribe-input').val();
var ep_phoneval = $('#phone-input').val();

//console.log(ep_emailval);

    var intRegex = /[0-9 -()+]+$/;

	var eml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;       
        //console.log("is email");
    if (eml.test(ep_emailval) == false) {
    //alert("Please enter valid email address.");
   // $("#<%=txtEmail.ClientID %>").focus();
		$('#subscribe-input').val("");
		$('#subscribe-input').focus();
		$('#subscribe-input').attr("placeholder", "Please Enter a Valid Email Address");
		$('#subscribe-input').css("border","3px solid #FF0000");
   			 return false;
			 
 	}else if(ep_phoneval ==''){
						
						$('#phone-input').val("");
						$('#phone-input').focus();
						$('#phone-input').attr("placeholder", "Please Enter Your Phone Number");
						$('#phone-input').css("border","3px solid #FF0000");
						$('#subscribe-input').css("border","none");
						return false;
	
	}else  if(!intRegex.test(ep_phoneval)) {
			
		 
						//alert('Please enter a valid phone number.');
						$('#phone-input').val("");
						$('#phone-input').focus();
						$('#phone-input').attr("placeholder", "Please Enter Your Phone Number");
						$('#phone-input').css("border","3px solid #FF0000");
						return false;
					 
			}else 	{
			
				if((ep_phoneval.length < 10))
					{
						//alert('Please enter a valid phone number.');
						$('#phone-input').val("");
						$('#phone-input').focus();
						$('#phone-input').attr("placeholder", "Please Enter Your Phone Number");
						$('#phone-input').css("border","3px solid #FF0000");
						return false;
					}
			
			}	
    
});
</script>
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

	//Mask
$(".phone").mask("(999) 999-9999");

</script>
</body>
</html>



