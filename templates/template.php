<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo isset($title) ? $title : ""; ?></title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="plugins/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
        <style type="text/css">
            .swiper-slide {
                height: auto;
                margin-bottom: 15px;
            }
            .cusboxontest ul li{
                background-image: none !important;
            }
            .plugin-card{
                border-radius: 8px;
                box-shadow: 0 0 0px;
                background: #ffffff;
            }
            .plugin-card-head{
                padding: .1rem 1.0rem;
                margin-bottom: 0;
                background: transparent;
                border-bottom: 1px solid rgba(0,0,0);
                font-weight: 500;
                font-size: 14px;
                color: rgba(0,0,0,.84);
                border-color: rgba(0,0,0,.4)!important;
            }
            .plugin-card ul .text-white{
                color: #222!important;
                // text-align: justify;
            }

            .swiper-slide .cusboxontest ul li {
                padding-left: 10px;
                padding-right: 10px;
                font-size: 16px !important;
                color: #222;
            }

            .swiper-slide .cusboxontest ul li:before {
                content: "\f138";
                margin-right: 5px;
                font-size: 14px;
                line-height: 1.6em;
                padding: 0px;
                color: #df6512;
                font-weight: 900;
                font-family: "Font Awesome 5 Free";
            }

            .plugin-card-head .text-white{
                text-align: center;
                color: #fff!important; 
                font-weight: bolder;
            }
            .plugin-card-head{
                background-image:url(images/background/about-mortgage.jpg);
                border-radius: 8px 8px 0px 0px;
                text-align: center;
            }
            .plugin-card{
                border:1px solid #222;
            }
            .bg1{
                /*background-image: linear-gradient(45deg,#0a0707 50%,#7020ff 0);*/ 
            }
            .bg2{
                /*background-image: linear-gradient(45deg,#0a0707 50%,#0085ff 0);*/
            }
            .bg3{
                /*background-image: linear-gradient(45deg,#0a0707 50%,#ff9800 0);*/
            }
        </style>
        <style>
            .contact-info-list > li > .info {
                display: block;
            }
            
            .contact-page-section .social-links > li {
                width: 27%;
                text-align: center;
            }

        </style>
    </head>

    <body>
        <div class="page-wrapper">

            <!-- Home Style Two -->
            <header class="main-header header-style-two" id="header">
                <?php include_once 'header.php'; ?>
            </header>
            <!-- End Main Header -->
            <div id="body_content">
                <?php
                if (isset($body)) {
                    include_once $body;
                }
                ?>
            </div>
            <footer class="main-footer" id="footer"> <?php include_once 'footer.php'; ?> </footer>

        </div>
        <!--End pagewrapper-->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
        <!--Scroll to top-->


        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--Revolution Slider-->
        <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="js/main-slider-script.js"></script>
        <!--Revolution Slider-->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
        <!--Scroll to top-->
        <script src="js/jquery-ui.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/script.js"></script>
        <!--Google Map APi Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
        <script src="js/map-script.js"></script>
        <!--End Google Map APi-->
        <script src="js/core/add_templates.js" type="text/javascript"></script>
        <script src="js/core/main.js" type="text/javascript"></script>



        <script src="plugins/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="plugins/js/scrollax.js" type="text/javascript"></script>
        <script src="plugins/js/swiper.min.js" type="text/javascript"></script>
        <script src="plugins/js/delighters.js" type="text/javascript"></script>
        <script src="plugins/js/skrollr.min.js" type="text/javascript"></script>
        <script src="plugins/js/shuffle-letters.js" type="text/javascript"></script>
        <script src="plugins/js/main_plugin.js" type="text/javascript"></script>

        <script type="text/javascript">
            var $zoho = $zoho || {};
            $zoho.salesiq = $zoho.salesiq ||
                    {widgetcode: "cdd86583bcedc15662d376b3693766ef0c3fd6c53f5abcaaa19b3ce357688b90b969b17d3a2703ff577e982047290a3e", values: {}, ready: function () {}};
            var d = document;
            s = d.createElement("script");
            s.type = "text/javascript";
            s.id = "zsiqscript";
            s.defer = true;
            s.src = "https://salesiq.zoho.com/widget";
            t = d.getElementsByTagName("script")[0];
            t.parentNode.insertBefore(s, t);
            d.write("<div id='zsiqwidget'></div>");
        </script>
    </body>
</html>
