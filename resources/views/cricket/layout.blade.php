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