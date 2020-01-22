@extends('roads.app')
@section('content')
<header class="header-two">
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class=" col-md-9 col-sm-9">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-map"></i><span>Mumbai India</span></a></li>
                            <li><a href="tel:+919702310212"><i class="fa fa-phone"></i><span>+91 9702310212</span></a></li>
                            <li><a href="mailto:dqureshiumar@gmail.com"><i class="fa fa-envelope"></i><span>Mail Us</span></a></li>
                        </ul>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="top-social">
                        <ul>
                            <li><a href="https://github.com/dqureshiumar"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.facebook.com/dqureshiumar12"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:dqureshiumar@gmail.com"><i class="fa fa-google"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area header-area-2 hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand page-scroll sticky-logo" href>
                            <img src="{{asset('img')}}/logo/road_trans.png" alt>
                        </a>
                    </div>
                </div>
                <!-- logo end -->
                <div class="col-md-9 col-sm-9">
                    {{-- <div class="header-right-link">
                        <!-- search option start -->
                        <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                        </form>
                        <!-- search option end -->
                        <div class="slice-btn"><span class="icon icon-menu"></span></div>
                    </div> --}}
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="pagess" href="/">Home</a>
                                    </li>
                                    <li><a class="pagess" href="/all-feedbacks">Feedbacks</a>
                                    </li>
                                    {{-- <li><a class="pagess" href="/feedbacks">Feedbacks</a>
                                    </li>
                                    <li><a class="pagess" href="/services">Services</a>
                                    </li> --}}
                                    @auth
                                    <li><a class="pagess" href="/home">Dashboard</a>
                                    </li>
                                    @endauth
                                    @guest
                                    <li><a class="pagess" href="/login">Login</a>
                                    </li>
                                    @endguest
                                    {{-- <li><a class="pagess" href="#">Blog</a>
                                    </li>
                                    <li><a href="/contact">Contact Us</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    {{-- <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-right-link">
                        <!-- search option start -->
                        <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                        </form>
                        <!-- search option end -->
                        <div class="slice-btn"><span class="icon icon-menu"></span></div>
                    </div>
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href><img src="img/logo/logo.png" alt></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a class="pagess" href>Home</a>
                                    <ul class="sub-menu">
                                        <li><a href>Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                    </ul>
                                </li>
                                <li><a class="pagess" href="#">About us</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="review.html">Review</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li><a class="pagess" href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services-2.html">Services 2</a></li>
                                        <li><a href="single-service.html">Services Details</a></li>
                                        <li><a href="single-service-2.html">Services Details 2</a></li>
                                        <li><a href="single-service-3.html">Services Details 3</a></li>
                                    </ul>
                                </li>
                                <li><a class="pagess" href="#">Projects</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-2.html">Project 2 Column</a></li>
                                        <li><a href="project-3.html">Project 3 Column</a></li>
                                        <li><a href="project-4.html">Project 4 Column</a></li>
                                        <li><a href="single-project.html">Single Project</a></li>
                                    </ul>
                                </li>
                                <li><a class="pagess" href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog grid</a></li>
                                        <li><a href="blog-left-side.html">Blog Left Grid</a></li>
                                        <li><a href="blog-right-side.html">Blog Right Grid</a></li>
                                        <li><a href="blog-left-list.html">Blog Left list</a></li>
                                        <li><a href="blog-right-list.html">Blog Right List</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contacts</a></li>
                            </ul>
                        </nav>
                    </div>					
                </div>
            </div>
        </div>
    </div> --}}
    <!-- mobile-menu-area end -->		
</header>
<!-- header end -->
<div class="layer-drop"></div>
<!--Appointment Box-->
<div class="appointment-wrapper">
    <div class="appoint-box">
        <div class="cross-icon"><span class="icon icon-cross"></span></div>
        <div class="title">
            <a class="slide-logo" href>
                <img src="img/logo/logo.png" alt>
            </a>
            <div class="separator"></div>
        </div>
        <div class="contact-icon">
            <div class="single-contact">
                <h5>Head Office</h5>
                <a href="#"><i class="fa fa-map"></i><span>Mumbai India</span></a>
                <a href="tel:+919702310212"><i class="fa fa-phone"></i><span>+91 9702310212</span></a>
                <a href="mailto:dqureshiumar@gmail.com"><i class="fa fa-envelope"></i><span>Mail Us</span></a>
            </div>
            <div class="quote-icons">
                <h5>Follow us</h5>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row form-row">
            <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                <div class="col-md-12 inner-column col-sm-12 col-xs-12">
                    <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                    <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                    <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="col-md-12 inner-column col-sm-12 col-xs-12">
                    <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                    <button type="submit" id="submit" class="quote-btn">Submit</button>
                    <div id="msgSubmit" class="h3 hidden"></div> 
                    <div class="clearfix"></div>
                </div>   
            </form>
        </div>
    </div>
</div>
<!--End contact Form-->
<!-- Start Slider Area -->
<div class="intro-area intro-area-2">
    <div class="intro-carousel">
        <div class="intro-content">
            <div class="slider-images">
                <img src="img/slider/s3.jpg" alt>
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h1 class="title2">Be free from accidents. Give your feedback about roads in your locality</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a href="/services" class="ready-btn">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="img/slider/s4.jpg" alt>
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h1 class="title2">We are ready your precious feedbacks about the roads in your locality</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a href="#" class="ready-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!-- Welcome service area start -->
<div class="welcome-area welcome-area-2 area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-headline">
                    <h2>Our Motto is to maximise the betterments of roads via your precious feedbacks and bid a farewell to accidents that are caused by damaged roads</h2>
                    <h5 align="center">The below is the process that you have to do in order to submit your feedbacks</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="well-inner">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="well-icon">
                            <a href="#"><i class="flaticon-crane"></i></a>
                        </div>
                        <div class="well-content">
                            <h4><a href="#">Register <br>an Login</a></h4>
                            <p>Be a part of our portal successfully by successfully signing up</p>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="well-icon">
                            <a href="#"><i class="flaticon-drawing-1"></i></a>
                        </div>
                        <div class="well-content">
                            <h4><a href="#"><br> Submit your Feedback</a></h4>
                            <p>After successfully logging in you will have to give your feedback about the road you want to give</p>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="well-icon">
                            <a href="#"><i class="flaticon-measuring-tape"></i></a>
                        </div>
                        <div class="well-content">
                            <h4><a href="#">Get vierifed by our Agents</a></h4>
                            <p>Our Agents will successfully verify it and it will be posted on our Portal</p>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-3 hidden-sm col-xs-12">
                    <div class="well-services">
                        <div class="well-icon">
                            <a href="#"><i class="flaticon-loader"></i></a>
                        </div>
                        <div class="well-content">
                            <h4><a href="#">Get a<br>Response</a></h4>
                            <p>You'll get a mail if the problem is solved.</p>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
            </div>
        </div>
    </div>
</div>
<!-- Welcome service area End -->
<!-- about-area start -->

<!-- about-area end -->
<!-- Start Service area -->
{{-- <div class="services-area services-area-2 area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-headline">
                    <h2>Construct contracting group that has gained its expertise complete work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" all-services">	
                <!-- Start column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-content">
                            <div class="service-icon">
                                <a href="#"><i class="flaticon-crane"></i></a>
                            </div>
                            <div class="service-text">
                                <h4><a href="#">General Contracting</a></h4>
                                <p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-content">
                            <div class="service-icon">
                                <a href="#"><i class="flaticon-drawing-1"></i></a>
                            </div>
                            <div class="service-text">
                                <h4><a href="#">Architectural Design</a></h4>
                                <p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-content">
                            <div class="service-icon">
                                <a href="#"><i class="flaticon-measuring-tape"></i></a>
                            </div>
                            <div class="service-text">
                                <h4><a href="#">Infrastructure Works</a></h4>
                                <p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-content">
                            <div class="service-icon">
                                <a href="#"><i class="flaticon-loader"></i></a>
                            </div>
                            <div class="service-text">
                                <h4><a href="#">Civil Works</a></h4>
                                <p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-content">
                            <div class="service-icon">
                                <a href="#"><i class="flaticon-electric-tower"></i></a>
                            </div>
                            <div class="service-text">
                                <h4><a href="#">Electrical Systems</a></h4>
                                <p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service">
                        <div class="service-content">
                            <div class="service-icon">
                                <a href="#"><i class="flaticon-brick-wall-2"></i></a>
                            </div>
                            <div class="service-text">
                                <h4><a href="#">Reconstruction</a></h4>
                                <p>We have a team of dedicated business development managers responsible for driving a pipeline of new business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
    </div>
</div> --}}
<!-- End Service area -->
<!-- Start project Area -->
{{-- <div class="project-area bg-color project-2 area-padding fix">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-headline">
                    <h2>Construct is a general contracting group that has gained its expertise complete work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel project-content">
                <!-- single-awesome-project start -->
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/project/p1.jpg">
                                <img src="img/project/p1.jpg" alt>
                                <div class="add-actions">
                                    <div class="project-dec">
                                        <h5>Skycraper touch blue sky</h5>
                                        <div class="opacity-text">
                                            <p>We help agencies to define their new business objectives and then create the road.</p>
                                            <span class="know-more-btn">Know more</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/project/p2.jpg">
                                <img src="img/project/p2.jpg" alt>
                                <div class="add-actions">
                                    <div class="project-dec">
                                        <h5>Building design is the best</h5>
                                        <div class="opacity-text">
                                            <p>We help agencies to define their new business objectives and then devising a business .</p>
                                            <span class="know-more-btn">Know more</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                 <!-- single-awesome-project start -->
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/project/p3.jpg">
                                <img src="img/project/p3.jpg" alt>
                                <div class="add-actions">
                                    <div class="project-dec">
                                        <h5>Electrical Systems work</h5>
                                        <div class="opacity-text">
                                            <p>We help agencies to define their new business objectives and then create the road.</p>
                                            <span class="know-more-btn">Know more</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/project/p4.jpg">
                                <img src="img/project/p4.jpg" alt>
                                <div class="add-actions">
                                    <div class="project-dec">
                                        <h5>Reconstruction services</h5>
                                        <div class="opacity-text">
                                            <p>We help agencies to define their new business objectives and then create the road.</p>
                                            <span class="know-more-btn">Know more</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/project/p4.jpg">
                                <img src="img/project/p5.jpg" alt>
                                <div class="add-actions">
                                    <div class="project-dec">
                                        <h5>Carpenter services</h5>
                                        <div class="opacity-text">
                                            <p>We help agencies to define their new business objectives and then create the road.</p>
                                            <span class="know-more-btn">Know more</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single all-padding">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/project/p4.jpg">
                                <img src="img/project/p6.jpg" alt>
                                <div class="add-actions">
                                    <div class="project-dec">
                                        <h5>Construction services</h5>
                                        <div class="opacity-text">
                                            <p>We help agencies to define their new business objectives and then create the road.</p>
                                            <span class="know-more-btn">Know more</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
            </div>
        </div>		
    </div>
</div> --}}
<!-- End project Area -->
<!-- Start team Area -->
{{-- <div class="team-area area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-headline">
                    <h2>Construct is a general contracting group that has gained its expertise complete work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-top">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="img/team/t1.jpg" alt>
                            </a>
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>Jhon Mickel</h4>
                            <p>Managing director</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="img/team/t2.jpg" alt>
                            </a>
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>Andrew Arnold</h4>
                            <p>General Manager</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="img/team/t3.jpg" alt>
                            </a>
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>Rafayal</h4>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 hidden-sm col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="img/team/t4.jpg" alt>
                            </a>
                            <div class="team-social-icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>Minerva</h4>
                            <p>Project Engineer</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
    </div>
</div> --}}
<!-- End Team Area -->
<!-- Start Service area -->
<!-- End Service area -->
<!-- Start Overview -->
{{-- <div class="faq-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="company-faq">
                    <div class="sub-headline">
                        <h4>Important FAQ</h4>
                    </div>
                    <div class="faq-full">
                        <div class="faq-details">
                            <div class="panel-group" id="accordion">
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                <span class="acc-icons"></span>How to successful our mission
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>
                                                When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                            </p>		
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                <span class="acc-icons"></span>Employee experince make company Value.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                            </p>										
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                <span class="acc-icons"></span>World class construction firm. 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check3" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <p>
                                                When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                            </p>	
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->	
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                <span class="acc-icons"></span>Working system analysis. 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="check4" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <p>
                                                When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                            </p>	
                                        </div>
                                    </div>
                                </div>
                                <!-- End Panel Default -->									
                            </div>
                        </div>
                        <!-- End FAQ -->
                    </div>
                </div>
            </div>
            <!-- End Column -->
            <!-- Start Column Start -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="faq-content">
                    <h4>Have a any qustion?</h4>
                    <div class="faq-quote">
                        <div class="row">
                            <form id="contactsForm" method="POST" action="contact.php" class="contact-form">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="qname" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                    <input type="email" class="email form-control" id="qemail" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="qmessage" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                    <button type="submit" id="qsubmit" class="quote-btn">Submit</button>
                                    <div id="qmsgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Column -->
        </div>
    </div>
</div> --}}
<!-- End Overview -->
<!--Blog Area Start-->
<div class="blog-area bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="center-headline">
                    <h2>Recent Feedbacks</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid">
                <!-- End single blog -->
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-right-column">
                    @foreach($side as $i)
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date-type">
                                            {{  date('d/m/Y', strtotime($i->created_at)) }}
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-map-marker"></i>
                                        {{$i->city}}
                                    </span>
                                </div>
                                <a href="{{ route('submit-a-feedback.show',$i->id) }}">
                                    <h4> @if($i->feedarea == 'Other'){{$i->other}} @else {{$i->feedarea}} @endif</h4>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <!-- End single blog -->
                        {{-- <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        13 july, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        23
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>metalex is an engineering and general contracting</h4>
                                </a>
                            </div>
                        </div> --}}
                        <!-- End single blog -->
                        {{-- <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="date-type">
                                        12 may, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        12
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>Engineering and general group ready popular house</h4>
                                </a>
                            </div>
                        </div> --}}
                        <!-- End single blog -->
                    </div>
                </div>
                <!-- End single blog -->
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    @foreach($recents as $recent)
                    <?php
                        $images = explode("|",$recent->filename);
                    ?>
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="{{ route('submit-a-feedback.show',$recent->id) }}">
                                <img src="{{ asset('storage') }}/feedbacks/{{ $images[0] }}" alt>
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="date-type">
                                        {{  date('d/m/Y', strtotime($recent->created_at)) }}
                                </span>
                                <span class="comments-type">
                                    <i class="fa fa-map-marker"></i>
                                    {{$recent->city}}
                                </span>
                            </div>
                            <a href="#">
                                <h4> @if($recent->feedarea == 'Other'){{$recent->other}} @else {{$recent->feedarea}} @endif</h4>
                            </a>
                            <p>{{$recent->address}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--End of Blog Area-->
<!-- Start Footer bottom Area -->
@endsection