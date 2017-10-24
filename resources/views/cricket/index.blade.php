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
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">

                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".2s" >
                                <span>Daffodil International University</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Cricket Ground </b>
                                    <b>DIU</b>
                                    <b>CRICKET</b>
                                    <b>CLUB</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    The Diu Cricket Control Board is established DIU Cricket Club. Soon after, a cricket league commences in Daffodil and other univarsity . It is a slow start, other things having priority in the Univarsity.
                                </h2>
                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                Daffodil International University
                                </h2>
                                <p>
                                    Daffodil International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Daffodil Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Daffodil International University came into being on 24th January 2002, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement.


                                </p>
                                <p>
                                  To be among the very best in Bangladesh which is the most challenging goal, has been set for the university. This has done so because it is only through working we can achieve the very highest level of standards in curriculum, teaching, faculties and other activities that can realize the full potential of the academic community that is Daffodil International University. The vision reflects the service to the society. The mission is to pursue research, learning and teaching of international distinction for the benefit of the nation. 
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="cricket/images/gallery/main-p.jpg" alt="" style="height:450px;width:900px;">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From University</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Daffodil International university offers program of B.Sc. and M.Sc in Engineering And Other Subject.The program is designed to produce skilled manpower for global IT market in order to satisfy the growing demands of software professionals throughout the world. It provides the students an opportunity to gain a vast knowledge about the overall Software Engineering process as well as Computer Programming, Computer Systems Engineering, Telecommunication Engineering and Electronics Engineering. The central goal is to create knowledgeable, efficient and skilled software engineering graduates so that they are able to make themselves competent to work on not only with the Software Industries in home country but also with any giant technological organization of the world.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-flask-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Media Heading</h4>
                                    <p>Philosopher Lao Tzu  said  "The journey of a thousand  miles begins with one step". So  welcome newcomers and it will be the first step for long life journey by Daffodil International university.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Well Development.</h4>
                                    <p> Daffodil International university prepares us to be an innovative thinker, initiative taker and multi dimensional professional with exceptional logical  and analytical skills possesses and experience as Software engineer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Well Opportunities.</h4>
                                    <p> Daffodil International university arranges many programs to get us opportunities to learn about up-to-date technological developments.</p>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
            </section> <!-- /#feature -->
                            
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
                                
                                <a href="/contact-us" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Us</a>
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