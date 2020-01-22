<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Citizen Feedback on Maintainence of Road</title>
		<meta name="description" content>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img') }}/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{ asset('css') }}/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.css">
		<link rel="stylesheet" href="{{ asset('css') }}/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('css') }}/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{ asset('css') }}/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('css') }}/icon.css">
		<link rel="stylesheet" href="{{ asset('css') }}/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="{{ asset('css') }}/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="{{ asset('css') }}/venobox.css">
		<!-- style css -->
        <link rel="stylesheet" href="{{ asset('css') }}/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{ asset('css') }}/responsive.css">

		<!-- modernizr css -->
		<script src="{{ asset('js') }}/vendor/modernizr-2.8.3.min.js"></script>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        @yield('content')
        <footer class="footer-2">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>information</h4>
                                    <p>
                                        Give your feedbacks by logging in
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Tel:</span> +91 9702 310 212</p>
                                        <p><span>Email:</span> admin@info.com</p>
                                        <p><span>Location:</span> Mumbai</p>
                                    </div>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/dqureshiumar12">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/dqureshiumar">
                                                    <i class="fa fa-github"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/_umar_qureshi_">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services</h4>
                                    <div class="footer-services-link">
                                    	<ul class="footer-list">
											<li><a href="/">Home</a></li>
											<li><a href="/login">Login </a></li>
											<li><a href="/home">Dashboard</a></li>
											{{-- <li><a href="#">Infrastructure Works</a></li>
											<li><a href="#">Oil & Gas</a></li>
											<li><a href="#">Solar energy</a></li> --}}
										</ul>
										{{-- <ul class="footer-list hidden-sm">
										    <li><a href="#">Electrical Systems</a></li>
											<li><a href="#">Resconstruction</a></li>
											<li><a href="#">Maintenance </a></li>
											<li><a href="#">Building</a></li>
											<li><a href="#">Construction</a></li>
											<li><a href="#">Engineering</a></li>
										</ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content last-item">
                                <div class="footer-head">
                                    <h4>Subscribe</h4>
                                    <p>
                                        Are you looking for professional advice for your new business.Are you looking for professional advice for your new business
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <!-- End footer area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                        <script>document.write(new Date().getFullYear())</script> © Copyright - All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
		<!-- all js here -->

		<!-- jquery latest version -->
        <script src="{{ asset('js') }}/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="{{ asset('js') }}/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('js') }}/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="{{ asset('js') }}/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="{{ asset('js') }}/waypoints.js"></script>
		<!-- isotope js -->
        <script src="{{ asset('js') }}/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="{{ asset('js') }}/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="{{ asset('js') }}/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="{{ asset('js') }}/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('js') }}/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="{{ asset('js') }}/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="{{ asset('js') }}/plugins.js"></script>
		<!-- main js -->
		<script src="{{ asset('js') }}/main.js"></script>
	</body>
</html>
