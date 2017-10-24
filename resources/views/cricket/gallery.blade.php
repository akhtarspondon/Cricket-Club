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
        {!!Html::script('cricket/js/vendor/modernizr-2.6.2.min.js')!!}
        <!-- jquery -->
        {!!Html::script('cricket//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')!!}
        <!-- owl carouserl js -->
        {!!Html::script('cricket/js/owl.carousel.min.js')!!}
        <!-- bootstrap js -->

        {!!Html::script('cricket/js/bootstrap.min.js')!!}
        <!-- wow js -->
        {!!Html::script('cricket/js/wow.min.js')!!}
        <!-- slider js -->
        {!!Html::script('cricket/js/slider.js')!!}
        {!!Html::script('cricket/js/jquery.fancybox.js')!!}
        <!-- template main js -->
        {!!Html::script('cricket/js/main.js')!!}
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
                            <h2>Gallery</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="gallery" class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/field.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/field.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic2.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic2.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic4.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic4.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="700ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 600ms; -webkit-animation-delay: 600ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic6.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic6.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic7.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic7.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic8.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic8.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic16.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic16.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic10.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic10.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic11.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic11.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic12.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic12.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic13.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic13.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic15.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic15.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic16.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic16.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic17.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic17.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                                <div class="img-wrapper">
                                    <img src="cricket/images/gallery/pic18.jpg" class="img-responsive" alt="">
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="cricket/images/gallery/pic18.jpg">View</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
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
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                
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
    </html>