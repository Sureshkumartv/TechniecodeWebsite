<?php 
if(!isset($pagetype)){
    $pagetype="index";
}
$pagetype =trim($pagetype);
//echo $pagetype ."::pagetype-----------------------------<br/>";
?>
<div class="header-top-two">
    <div class="auto-container clearfix">
        <div class="top-left clearfix">
            <div class="text">Mortgage IT Services And Encompass Consulting</div>
        </div>
        <div class="top-right clearfix">
            <!-- Social Links -->
            <ul class="social-links clearfix">
                <li><a href="https://www.facebook.com/Techniecode" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="https://www.linkedin.com/company/techniecode-inc/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                <li><a href="https://twitter.com/Techniecodeinc" target="_blank"><span class="fab fa-twitter"></span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Header Top -->
<!-- Header Upper -->
<div class="header-upper">
    <div class="inner-container">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo-outer">
                <div class="logo"><a href="https://www.techniecode.com/"><img src="images/logo.png" alt="" title=""></a></div>
            </div>
            <!--Info-->
            <div class="info-outer clearfix">
                <!--Info Box-->
                <div class="info-box">
                    <div class="icon"><span class="icon-call-in"></span></div>
                    <div class="text"> <strong>Lets Talk </strong> <span class="info"><a href="tel:+7732902427">773-290-2427</a></span> </div>
                </div>
                <!--Info Box-->
                <div class="info-box">
                    <div class="icon"><span class="icon icon-envelope-open"></span></div>
                    <div class="text"> <strong>Write to us at </strong> <span class="info"> <a href="mailto:info@techniecode.com">info@techniecode.com</a></span> </div>
                </div>
                <!--Info Box
                <div class="info-box">
                    <div class="icon"><span class="icon-home"></span></div>
                    <div class="text"> <strong>3511 Silverside Road, Suite 105,</strong> <span class="info">Wilmington, DE 19810</span> </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!--End Header Upper-->
<div class="header-lower">
    <div class="auto-container">
        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <!-- Togg le Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon flaticon-menu-button"></span> </button>
                </div>
                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                        <li class="home_link <?php echo $pagetype =="index" ? "current" : "" ?> "><a href="https://www.techniecode.com/">Home</a> </li>
                        <li class="<?php echo $pagetype == "aboutus" ? "current" : "" ?> "><a href="aboutus">About Us</a> </li>
                        <li class="dropdown <?php echo $pagetype == "encompass-consulting" ? "current" : "" ?> "><a href="#">LOS Consulting</a>
                            <ul>
                                <li class="<?php echo $pagetype == "encompass-consulting" ? "current" : "" ?> "><a href="encompass-consulting">ENCOMPASS CONSULTING</a></li>
                                <li><a href="#">LENDING QB</a></li>
                                <li><a href="#">CALYX SOFTWARE</a></li>                                
                            </ul>
                        </li>
                        <li class="dropdown <?php echo $pagetype == "mortgage-website-development" ? "current" : "" ?>"><a href="#">MANAGED IT SERVICES</a>
                            <ul>

                                <li class="<?php echo $pagetype == "mortgage-centric-website-development " ? "current" : "" ?> "><a href="mortgage-website-development">MORTGAGE WEBSITE DEVELOPMENT</a></li>
                                <li class="<?php echo $pagetype == "mortgage-custom-integration" ? "current" : "" ?> "><a href="mortgage-custom-integration">MORTGAGE CUSTOM INTEGRATIONS</a></li>
                                <li class="<?php echo $pagetype == "custom-application" ? "current" : "" ?> "><a href="custom-application">CUSTOM APPLICATIONS</a></li>
                                <li class="<?php echo $pagetype == "digital-marketing-services" ? "current" : "" ?> "><a href="digital-marketing-services">DIGITAL MARKETING SERVICES</a></li>
                                <li class="<?php echo $pagetype == "mortgage-simplify" ? "current" : "" ?> "><a href="mortgage-simplify">MORTGAGE SIMPLIFY</a> </li>
                            </ul>
                        </li>

                        <li class="<?php echo $pagetype == "careers" ? "current" : "" ?> "><a href="careers">Careers</a> </li>

                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->
            <!-- Main Menu End-->
            <div class="outer-box clearfix">
                <!-- Button Box -->
                <div class="btn-box"> <a href="contactus" class="theme-btn btn-style-one">Request Demo</a> </div>
            </div>
        </div>
    </div>
</div>
<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left"> <a href="index" title=""><img src="images/logo-small.png" alt="" title=""></a> </div>
        <!--Right Col-->
        <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="home_link"><a href="index">Home</a> </li>
                        <li><a href="aboutus">About us</a></li>
                        <li class="dropdown"><a href="#">LOS Consulting</a>
                            <ul>
                                <li><a href="encompass-consulting">ENCOMPASS CONSULTING</a></li>
                                <li><a href="#">LENDING QB</a></li>
                                <li><a href="#">CALYX SOFTWARE</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Managed IT Services</a>
                            <ul>

                                <li><a href="mortgage-website-development">MORTGAGE WEBSITE DEVELOPMENT</a></li>
                                <li><a href="mortgage-custom-integration">MORTGAGE CUSTOM INTEGRATIONS</a></li>
                                <li><a href="custom-application">CUSTOM APPLICATIONS</a></li>
                                <li><a href="digital-marketing-services">DIGITAL MARKETING SERVICES</a></li>
                                <li><a href="mortgage-simplify">MORTGAGE SIMPLIFY</a> </li>
                            </ul>
                        </li>
                        <li><a href="careers">Careers</a> </li>
                        <li><a href="contactus">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->
        </div>
    </div>
</div>
<!-- End Sticky Menu -->
