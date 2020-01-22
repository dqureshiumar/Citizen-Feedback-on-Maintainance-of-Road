@extends('roads.app')
@section('content')
<header class="header-one">
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
                                        <li><a class="pagess" href="/all-feedbacks">Feebacks</a>
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
						<a href="#"><i class="fa fa-map"></i><span>House-5, avanue,New york</span></a>
						<a href="#"><i class="fa fa-phone"></i><span> +3234-7665545</span></a>
						<a href="#"><i class="fa fa-envelope"></i><span>metalex@headoffice.com</span></a>
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
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="bread-inner">
                            	<div class="section-headline white-headline">
									<h2>All Feedbacks</h2>
								</div>
								<ul class="breadcrumb-bg">
									<li class="home-bread">Home</li>
									<li>All Feedbacks</li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!--Blog Area Start-->
        <div class="blog-area area-padding">
			<div class="container">
				<div class="row">
					<div class="blog-sidebar-right">
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="row">
							    <div class="blog-left-content">
                                    <!-- Start single blog -->
                                    @foreach($feedbacks as $feedback)
                                    <?php
                                        $images = explode("|",$feedback->filename);
                                    ?>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-blog">
											<div class="blog-image">
												<a class="image-scale" href="{{ route('submit-a-feedback.show',$feedback->id) }}">
													<img src="{{ asset('storage') }}/feedbacks/{{ $images[0] }}" alt>
												</a>
											</div>
											<div class="blog-content">
												<div class="blog-meta">
													<span class="date-type">
                                                            {{  date('d/m/Y', strtotime($feedback->created_at)) }}
													</span>
													<span class="comments-type">
														<i class="fa fa-map-marker"></i>
														{{$feedback->city}}
													</span>
												</div>
												<a href="{{ route('submit-a-feedback.show',$feedback->id) }}">
													<h4>{{$feedback->feedarea}}</h4>
												</a>
												<p>{{$feedback->remark}}</p>
											</div>
										</div>
                                    </div>
                                    @endforeach
									<!-- End single blog -->
									{{-- <div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-blog">
											<div class="blog-image">
												<a class="image-scale" href="#">
													<img src="img/blog/b2.jpg" alt>
												</a>
											</div>
											<div class="blog-content">
												<div class="blog-meta">
													<span class="date-type">
														20 feb, 2019
													</span>
													<span class="comments-type">
														<i class="fa fa-comment-o"></i>
														13
													</span>
												</div>
												<a href="#">
													<h4>Engineering and general group ready popular house</h4>
												</a>
												<p>metalex is an engineering and general contracting group that has gained its expertise over the past twenty- six years.metalex is an engineering.</p>
											</div>
										</div>
									</div> --}}
									<!-- End single blog -->
									{{-- <div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-blog">
											<div class="blog-image">
												<a class="image-scale" href="#">
													<img src="img/blog/b3.jpg" alt>
												</a>
											</div>
											<div class="blog-content">
												<div class="blog-meta">
													<span class="date-type">
														13 june, 2019
													</span>
													<span class="comments-type">
														<i class="fa fa-comment-o"></i>
														13
													</span>
												</div>
												<a href="#">
													<h4>Building code maintain always structure strong value</h4>
												</a>
												<p>metalex is an engineering and general contracting group that has gained its expertise over the past twenty- six years.metalex is an engineering.</p>
											</div>
										</div>
									</div> --}}
									<!-- End single blog -->
									{{-- <div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-blog">
											<div class="blog-image">
												<a class="image-scale" href="#">
													<img src="img/blog/b4.jpg" alt>
												</a>
											</div>
											<div class="blog-content">
												<div class="blog-meta">
													<span class="date-type">
														18 june, 2019
													</span>
													<span class="comments-type">
														<i class="fa fa-comment-o"></i>
														13
													</span>
												</div>
												<a href="#">
													<h4>metalex is an general contracting group worldwide</h4>
												</a>
												<p>metalex is an engineering and general contracting group that has gained its expertise over the past twenty- six years.metalex is an engineering.</p>
											</div>
										</div>
									</div> --}}
									<!-- End single blog -->
						            {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-blog">
                                            <div class="blog-image">
                                                <a class="image-scale" href="#">
                                                    <img src="img/blog/b5.jpg" alt>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <span class="date-type">
                                                        25 july, 2019
                                                    </span>
                                                    <span class="comments-type">
                                                        <i class="fa fa-comment-o"></i>
                                                        13
                                                    </span>
                                                </div>
                                                <a href="#">
                                                    <h4>metalex is an engineering and general contracting</h4>
                                                </a>
                                                <p>metalex is an engineering and general contracting group that has gained its expertise over the past twenty- six years.metalex is an engineering.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- End single blog -->
                                    {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-blog">
                                            <div class="blog-image">
                                                <a class="image-scale" href="#">
                                                    <img src="img/blog/b6.jpg" alt>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <span class="date-type">
                                                        27 sep, 2019
                                                    </span>
                                                    <span class="comments-type">
                                                        <i class="fa fa-comment-o"></i>
                                                        10
                                                    </span>
                                                </div>
                                                <a href="#">
                                                    <h4>contracting Copmpany top world house for business man </h4>
                                                </a>
                                                <p>metalex is an engineering and general contracting group that has gained its expertise over the past twenty- six years.metalex is an engineering.</p>
                                            </div>
                                        </div>
                                    </div> --}}
									<!-- End single blog -->
								</div>
							</div>	
						</div>
						<!-- End single blog -->
						<!-- Start Right Sidebar blog -->
						{{-- <div class="col-md-4 col-sm-4 col-xs-12">
							<div class="left-head-blog">
								<div class="left-blog-page">
									<!-- search option start -->
									<form action="#">
										<div class="blog-search-option">
											<input type="text" placeholder="Search...">
											<button class="button" type="submit">
												<i class="fa fa-search"></i>
											</button>
										</div>
									</form>
									<!-- search option end -->
								</div>
								<div class="left-blog-page">
									<div class="left-blog">
										<h4>categories</h4>
										<ul>
											<li><a href="#">General Contracting</a></li>
											<li><a href="#">Civil Works </a></li>
											<li><a href="#">Architectural Design</a></li>
											<li><a href="#">Infrastructure Works</a></li>
											<li><a href="#">Oil & Gas</a></li>
											<li><a href="#">Solar energy</a></li>
										</ul>
									</div>
								</div>
								<div class="left-blog-page">
									<!-- recent start -->
									<div class="left-blog">
										<h4>recent post</h4>
										<div class="recent-post">
											<!-- start single post -->
											<div class="recent-single-post">
												<div class="post-img">
													<a href="#">
														<img src="img/blog/b1.jpg" alt>
													</a>
												</div>
												<div class="pst-content">
													<p><a href="#">We offer make a storng house for your kids.</a></p>
													<span class="date-type">
														26 Jan / 2019
													</span>
												</div>
											</div>
											<!-- End single post -->
											<!-- start single post -->
											<div class="recent-single-post">
												<div class="post-img">
													<a href="#">
														<img src="img/blog/b2.jpg" alt>
													</a>
												</div>
												<div class="pst-content">
													<p><a href="#">Metalex is an firm and general group.</a></p>
													<span class="date-type">
														20 June / 2019
													</span>
												</div>
											</div>
											<!-- End single post -->
											<!-- start single post -->
											<div class="recent-single-post">
												<div class="post-img">
													<a href="#">
														<img src="img/blog/b3.jpg" alt>
													</a>
												</div>
												<div class="pst-content">
													<p><a href="#">Business man always think positive.</a></p>
													<span class="date-type">
														26 Feb / 2019
													</span>
												</div>
											</div>
											<!-- End single post -->
											<!-- start single post -->
											<div class="recent-single-post">
												<div class="post-img">
													<a href="#">
														<img src="img/blog/b4.jpg" alt>
													</a>
												</div>
												<div class="pst-content">
													<p><a href="#">Man can change business policy all time.</a></p>
													<span class="date-type">
														13 Sep / 2019
													</span>

												</div>
											</div>
											<!-- End single post -->
										</div>
									</div>
									<!-- recent end -->
								</div>
								<div class="left-blog-page">
									<div class="left-tags blog-tags">
										<div class="popular-tag left-side-tags left-blog">
											<h4>popular tags</h4>
											<ul>
												<li><a href="#">Electrical</a></li>
												<li><a href="#">Resconstruction</a></li>
												<li><a href="#">Maintenance </a></li>
												<li><a href="#">Building</a></li>
												<li><a href="#">Construction</a></li>
												<li><a href="#">Engineering</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
						<!-- End Right Sidebar -->
					</div>
				</div>
				<!-- End row -->
			</div>
		</div>
		<!--End of Blog Area-->	
        <!-- Start Footer bottom Area -->
@endsection