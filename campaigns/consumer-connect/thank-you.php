<!-- EMAIL TO info@techniecode.com -->
<?php
if($_POST["email"] != ''): 
    $ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $EmailSubject = "Want to CONSUMER CONNNECT?"; 
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
    $EmailSubject = "Want to CONSUMER CONNNECT?"; 
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
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CONSUMER CONNNECT :: Techniecode Inc.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="//www.techniecode.com/images/favicon.ico">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/3f26f239dd.js"></script>
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles/carousel.css" type="text/css" >
</head>

<body class="">

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-4">
				<img src="images/logo.png" class="img-responsive" alt="Techniecode" />
			</div>
			<div class="col-md-6 col-sm-8">
			
				<ul class="header-extras">
        <li> <i class="fa fa-phone nomargin"></i>
          <div class="he-text"> Call Us <span><a href="tel:+7732902427"><span style="color:#000000; display:inline;">773-290-</span>2427</a></span> </div>
        </li>
        <li> <i class="fa fa-envelope-o nomargin"></i>
          <div class="he-text"> Email Us <span><a href="mailto:info@techniecode.com"><span style="color:#000000; display:inline;">info@technie</span>code.com</a></span> </div>
        </li>
      </ul>
			</div>
		</div>
	</div>
</div>
<div class="banner">
	<div class="container">
		<h1> Thank You!</h1>
	  <p>We have received your message and will contact you soon.<br /><br style="transition: none; line-height: 24px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">
               - Techniecode Team</p>

			  
			  
	</div>
</div>
<div class="article">
	<img src="images/article.jpg" class="img-responsive" alt="Techniecode" />
</div>
<div class="client-section">
		<div class="container">
		<div class="sec-title">
                <h1>Our Happy Clients</h1>
          </div>
		
		<div class="row">
			<section class="customer-logos slider">
				<div class="slide"><img src="images/14.jpg"></div>
        <div class="slide"><img src="images/15.jpg"></div>
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
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
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
	<script>
$('#form').submit(function(){
var ep_emailval = $('#email').val();
var ep_phoneval = $('#phone').val();

//console.log(ep_emailval);

    var intRegex = /[0-9 -()+]+$/;

	var eml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;       
        //console.log("is email");
    if (eml.test(ep_emailval) == false) {
    //alert("Please enter valid email address.");
   // $("#<%=txtEmail.ClientID %>").focus();
		$('#email').val("");
		$('#email').focus();
		$('#email').attr("placeholder", "Please Enter a Valid Email Address");
		$('#email').css("border","3px solid #FF0000");
   			 return false;
			 
 	}else if(ep_phoneval ==''){
						
						$('#phone').val("");
						$('#phone').focus();
						$('#phone').attr("placeholder", "Please Enter Your Phone Number");
						$('#phone').css("border","3px solid #FF0000");
						$('#email').css("border","none");
						return false;
	
	}else  if(!intRegex.test(ep_phoneval)) {
			
		 
						//alert('Please enter a valid phone number.');
						$('#phone').val("");
						$('#phone').focus();
						$('#phone').attr("placeholder", "Please Enter Your Phone Number");
						$('#phone').css("border","3px solid #FF0000");
						return false;
					 
			}else 	{
			
				if((ep_phoneval.length < 10))
					{
						//alert('Please enter a valid phone number.');
						$('#phone').val("");
						$('#phone').focus();
						$('#phone').attr("placeholder", "Please Enter Your Phone Number");
						$('#phone').css("border","3px solid #FF0000");
						return false;
					}
			
			}	
    
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
