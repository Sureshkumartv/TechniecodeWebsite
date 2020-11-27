<!-- EMAIL TO info@techniecode.com -->
<?php
if($_POST["email"] != ''): 
    $ToEmail = "Michael Mergle <info@techniecode.com>"; 
    $EmailSubject = "Encompass Project Ideas on Table"; 
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
    $EmailSubject = "Encompass Project Ideas on Table"; 
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
<title>| Techniecode || Encompass Project Ideas on Table</title>
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />

<link rel="stylesheet" type="text/css" href="libraries/loader/loaders.min.css">
<!-- Library - Google Font Familys -->
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- Library - Bootstrap v3.3.5 -->
<link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap.min.css">
<!-- Font Icons -->
<link rel="stylesheet" type="text/css" href="libraries/fonts/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/plugins.css">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/shortcodes.css">
<script src="https://use.fontawesome.com/3f26f239dd.js"></script>
</head>
<body>

<div class="main-container">
  <!-- Header -->
  <header class="header-main">
    <!-- Top Header -->
    <div class="top-header container-fluid no-padding">
      <!-- Container -->
      <div class="container"> </div>
      <!-- container /- -->
    </div>
    <!-- Top Header /- -->
    <!-- Logo Block -->
    <div class="middle-header container-fluid no-padding">
      <!-- Container -->
      <div class="container">
        <div class="row">
          <div class="col-md-3 logo-block pull-left"> <a href="#" title="Logo"><img src="images/logo.png" alt="Logo" /></a> </div>
          <div class="col-md-9 text-right pull-right">
            <div class="location">
              <h3><img src="images/location-ic.png" alt="Location" /> Our Location</h3>
              <p>3511 Silverside Road Suite 105
                Wilmington, DE 19810</p>
            </div>
            <div class="phone">
              <h3><img src="images/phone-ic.png" alt="phone" /><a href="tel:7732902427">773-290-2427</a></h3>
              <p>Call Us Now- 24/7 Customer Support</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Container -->
    </div>
    <!-- Logo Block /- -->
  </header>

  <div class="page-banner services-banner container-fluid no-padding">
    <!-- Container -->
    <div class="container">
      <h3>Thank You!</h3>
	  <h5>We have received your message and will contact you soon.
</h5>
    </div>
    <!-- Container /- -->
    <!-- Shape -->
    <div class="banner-shape container-fluid no-padding">
      <div class="col-md-6 col-sm-6 col-xs-6 shape-left no-padding">
        <div class="left-shape-blue">
          <svg width="100%" height="100%">
            <clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
              <polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
            </clipPath>
          </svg>
        </div>
        <div class="left-shape">
          <svg width="100%" height="100%">
            <clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
              <polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
            </clipPath>
          </svg>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 shape-right no-padding">
        <div class="right-shape-blue">
          <svg width="100%" height="100%">
            <clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
              <polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
            </clipPath>
          </svg>
        </div>
        <div class="right-shape">
          <svg width="100%" height="100%">
            <clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
              <polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
            </clipPath>
          </svg>
        </div>
      </div>
    </div>
    <!-- Shape -->
  </div>
  <!-- Page Banner /- -->
  <!-- Departments Section -->
  <div class="container-fluid no-padding department-section">
    <div class="section-header">
      <h3>IT Services & Management</h3>
      <p>
        <!--Managed IT services are an alternative to traditional in-house IT service delivery. Techniecode managed services can help free you from necessary, time-consuming IT tasks like design, development, testing, support, monitoring and management of your IT infrastructure. -->
        With over a decade of experience in banking and financial services we stay prepared for everything. Our resources are committed to your network and become a part of your vision and IT planning. We provide dedicated resources either on your premises or remotely.</p>
    </div>
    <div class="we-are-best col-md-6 col-sm-12 no-padding">
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-1.png" alt="dp-icon-1"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/encompass-project-ideas-on-table/">Don’t Leave your Encompass Project Ideas on the table</a></h3>
          <p>We offer variety of services to help you fully leverage your Encompass solution. We help you with encompass configuration, implementation, administration, testing and production support.</p>
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-2.png" /> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/LOS/">Get your  Dynamic Long App</a></h3>
          <p>Your personalized Online Loan application can help you get more loans into your pipeline from all your lead channels, faster and easier than ever.</p>
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-3.png"/> </div>
        <div class="we-are-best-content">
          <h3><a href="">LOS Development & Customization</a></h3>
          <p>We offer variety of services to help you fully leverage  with your Loan Origination Software it could be Encompass, Calyx, Lending QB or Byte.</p>
          <img class="img-responsive" src="images/los.png"> </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-10.png" alt="dp-icon-2"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/custom-solutions-integrations/">Custom Solutions & API / SDK Integrations</a></h3>
          <p>Websites need to be able to integrate effortlessly with internal and external systems alike, leveraging as much data and functionality as possible. It's with this understanding of enterprise technology that we approach our custom API services.</p>
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-5.png" alt="dp-icon-3"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/closing_calendar_n_drip_Campaign/">End the closing Chaos</a></h3>
          <ul>
            <li>Dashboard view of entire  Closing Process</li>
            <li>Manage Closing  availability Limits</li>
            <li>Visibility to Loan Closing across departments</li>
            <li>Configurable Closing workflow </li>
            <li>Track Closing Steps</li>
            <li>Automated Email Notifications</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="we-are-best col-md-6 col-sm-12 no-padding">
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-6.png"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/custom-applications/">Custom CRM</a></h3>
          <p>Our CRM will be tailor fit to your needs. Get the functionality your organiztion needs in interacting with your customers.</p>
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-7.png"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/drip-campaign/">Email and Drip Campaigns</a></h3>
          <p>Easily integrate with your LOS and send branded and co branded Email and Drip campaigns.</p>
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-4.png" alt="dp-icon-2"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/mortgage-centric-website-developments/">Mortgage  Centric Website Development</a></h3>
          <ul>
            <li> Landing Pages</li>
            <li> Loan officer pages</li>
            <li> Short App </li>
            <li>Dynamic Long application</li>
            <li>Blogs</li>
            <li> Learning centers </li>
            <li> Pre-Qualification</li>
          </ul>
          <!-- <a href="https://www.w3docs.com/" class="btn btn-info button-rounded mylnk">Read More</a>-->
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-8.png"/> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/ADA/">Americans with Disabilities Act (ADA)</a></h3>
          <p>The focus is website accessibility, a catch-all phrase that means making websites and other digital platforms and files accessible to individuals with disabilities. </p>
        </div>
      </div>
      <div class="we-are-best-block">
        <div class="we-are-best-icon"> <img src="images/dp-icon-9.png" /> </div>
        <div class="we-are-best-content">
          <h3><a href="https://www.techniecode.com/contact">Get ready for URLA changes</a></h3>
          <p>Uniform Residential Loan Application (URLA) changes are coming in 2020. Techniecode helps to prepare for a smooth  transition for new URLA.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Departments Section /- -->
  <!-- Footer -->
  <div class="container-fluid no-padding bottom-footer">
    <p>Copyrights © 2019 Techniecode Inc. All Rights Reserved.</p>
  </div>
  <!-- Footer /- -->
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
