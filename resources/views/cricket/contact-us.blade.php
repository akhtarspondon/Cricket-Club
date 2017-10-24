
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        {!!Html::style('cricket/css/bootstrap.min.css')!!}
        <!-- Ionicons Fonts Css -->
        {!!Html::style('cricket/css/ionicons.min.css')!!}
        <!-- animate css -->
        {!!Html::style('cricket/css/animate.css')!!}
        <!-- Hero area slider css-->
        {!!Html::style('cricket/css/slider.css')!!}
        <!-- owl craousel css -->
        {!!Html::style('cricket/css/owl.carousel.css')!!}

        {!!Html::style('cricket/css/owl.theme.css')!!}

        {!!Html::style('cricket/css/jquery.fancybox.css')!!}
        <!-- template main css file -->
        {!!Html::style('cricket/css/main.css')!!}
        <!-- responsive css -->
        {!!Html::style('cricket/css/responsive.css')!!}
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        {!!Html::script('js/vendor/modernizr-2.6.2.min.js')!!}
        <!-- jquery -->
        {!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
        <!-- owl carouserl js -->
        {!!Html::script('js/owl.carousel.min.js')!!}
        <!-- bootstrap js -->

        {!!Html::script('js/bootstrap.min.js')!!}
        <!-- wow js -->
        {!!Html::script('js/wow.min.js')!!}
        <!-- slider js -->
        {!!Html::script('js/slider.js')!!}
        {!!Html::script('js/jquery.fancybox.js')!!}
        <!-- template main js -->
        {!!Html::script('js/main.js')!!}
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="/index" >
                            <img src="cricket/images/vcLogo.png" alt="" style="height:60px;width:165px;">
                            <img src="cricket/images/CricketLogo.png" alt="" style="height:60px;width:165px;">
                            
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
    
                                <a href="/index" >Home</a>
                            </li>
                            <li><a href="/about-us">About</a></li>
                            <li>
                                <a href="/gallery">Gallery</a>
                                
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                       <li><a href="{{ url('/register') }}">Batch Registration</a></li>
                                        <li><a href="{{ url('/login') }}">Login</a></li>
                                        <li><a href="blog-right-sidebar.html">Ground Booking</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li><a href="/contact-us">Contact</a></li>
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>

        @yield('content')
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->


        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Us</h2>
                            
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="sendmail.php" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                              Find out Daffodil International University Main Campus
                                
                            </p>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>Daffodil International University<br> Main Campus<br>102 Mirpur Rd, Dhaka 1207,<br> Bangladesh</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>Daffodil Tower-04 (Main Campus)<br>
                                102/1, (4th floor), Shukrabad, Mirpur Road, Dhanmondi, Dhaka-1207<br> 
                                Phone: 9138234-5, 9136694, 9116774 <br>
                                Fax: +88-02-9131947 </h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p>sweoffice@daffodilvarsity.edu.bd<br>Fahad.swe@diu.edu.bd</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p> 9116774<br>9110634, 8157712</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!-- 
        ================================================== 
            Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">INTERESTED IN WORKING TOGETHER? ?</h1>
                        
                            <a href="/contact-us" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Footer Section Start
        ================================================== -->
        <footer id="footer">
            <div class="container">
                <div class="col-md-8">
                     <p class="copyright">Copyright: <span>2017</span> . Design and Developed by <a href="https://www.facebook.com/akter.spondon">Akhtar</a></p>
                </div>
                
            </div>
        </footer> <!-- /#footer -->
    
    </body>
</html>


