            <!--Page Title-->
            <section class="page-banner" style="background-image:url(images/background/contactbg.jpg);">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Careers</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index">Home</a></li>
                            <li>Join Us</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!-- Contact Page Section -->
            <section class="contact-page-section">
                <div class="auto-container">
                    <div class="row clearfix">

                      <!-- Info Column -->
                        <div class="info-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
                                <!-- Title Box -->
                                <div class="title-box">
                                    <h3>Apply Now</h3>
                                     <div class="title-text"> Send your resume to the below Email:</div>
                                </div>
                                <ul class="contact-info-list">
                                    <!--<li><span class="icon icon-home"></span><strong>Head Office</strong>73 Ringer House Lane, Dynatis Newyork 33022, USA</li>-->
                                   
                                    <li><span class="icon icon-envelope-open"></span><strong>Email us</strong><a href="mailto:sales@techniecode.com" style="color:#fff">sales@techniecode.com</a></li>
                                    <li><span class="icon icon-call-in"></span><strong>Call Support</strong><a href="tel:773-290-2427" style="color:#fff">773-290-2427</a></li>
                                </ul>

                                <!-- Social Links -->
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/Techniecode" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://twitter.com/Techniecodeinc" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="https://www.linkedin.com/company/techniecode-inc/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>

                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class="form-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <div class="title">We are Techniecode</div>
                                    <h2>Apply Now</h2>
                                </div>

                                <!-- Contact Form -->
                                <div class="contact-form">
                                    <form id="apply-form">
                                        <div class="row clearfix">

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" id="username" placeholder="First Name " required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" id="email" placeholder="Email " required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone" id="phone" placeholder="Phone " required>
                                            </div>



                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="company" id="company" placeholder="Company " required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                              <input type="file" class="form-control " placeholder="Upload your Resume*" name="fileToUpload" id="fileToUpload">
                                          
                                         
                                            </div>

                                            <!--                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                                                            <input type="text" name="subject" placeholder="Subject " required>
                                                                                        </div>-->

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" id="message" placeholder="Message "></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-five" type="submit" name="submit-form">Apply Now</button>
                                            </div>
                                            <div class="col-md-12 alert-notification">
                                <div id="get_in_touch_success_contact" class="alert-msg"></div>
                            </div>


                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>
            <!-- End Contact Page Section -->

 <script type="text/javascript">
           //contact Form
         $(function() {
           $('#apply-form').submit(function(e) {
             e.preventDefault();
             console.log('Submitting');
             $.ajax({
               type: 'POST',
               url: 'php/applyjobmail.php',
               data: new FormData($('#apply-form')[0]),
               cache: false,
               contentType: false,
               processData: false,
               success: function(response) {
                 $('#get_in_touch_success_contact')(response);
                  $("#apply-form")[0].reset();
               }
             });
           });
         });
         </script>