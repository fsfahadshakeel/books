<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PeltLeather | Home</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}">
	<!-- CSS files
    ============================================ -->
	<!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css')}}">
	<!-- Plugins stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">
	<!-- Master stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
	<!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!-- Start of Whole Site Wrapper with mobile menu support -->
<div id="whole" class="whole-site-wrapper">
<!-- Start of Header -->
<header class="header bgc-white header-type-1">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-12 order-2 col-sm-12 order-sm-2 col-md-10 order-md-1 align-self-center">
							<p>Welcome to www.peltleather.com</p>
						</div>
						<div class="col-12 order-2 col-sm-12 order-sm-2 col-md-2 order-md-1 align-self-center">
                            <p><i class="fa fa-whatsapp" aria-hidden="true"></i> +91 82995 93485</p>
						</div>
					</div>
				</div> <!-- end of container -->
			</div> <!-- end of top-bar -->

			<div class="header-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 order-1 col-sm-12 order-sm-1 col-md-12 order-md-2 col-lg-12">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="assets/images/logo2.png" alt="Logo" class="img-responsive"></a>
                            </div>
						</div>
					</div>
				</div> <!-- end of container -->
			</div> <!-- end of header-top -->



            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area bgc-white">
                <div class="container">
                    <nav id="main_nav" class="stellarnav">
                        <ul>
                            <li><a href="{{url('home')}}"><span>Home</span></a></li>
							<li><a href="{{url('about-us')}}"><span>About Us</span></a></li>
                            <li class="mega" data-columns="3"><a href="javascript:void(0)"><span>Our Products</span></a>
                                <ul class="mega-container">
                                    <li><a href="{{url('for-him')}}" class="mega-menu-title" style="text-align:center;"><h3>For Him</h3></a>
                                        <ul>
                                            <li><a href="{{url('for-him')}}"><img src="assets/images/men-banner.jpg" alt="Menu Banner"></a></li>
                                        </ul>
                                    </li>
									<li><a href="{{url('for-her')}}" class="mega-menu-title" style="text-align:center;"><h3>For Her</h3></a>
                                        <ul>
                                            <li><a href="{{url('for-her')}}"><img src="assets/images/women-banner.jpg" alt="Menu Banner"></a></li>
                                        </ul>
                                    </li>
									<li><a href="{{url('accessories')}}" class="mega-menu-title" style="text-align:center;"><h3>Accessories</h3></a>
                                        <ul>
                                            <li><a href="{{url('accessories')}}"><img src="assets/images/accessories-banner.jpg" alt="Menu Banner"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{url('gallery')}}"><span>Gallery</span></a></li>
							<li><a href="{{url('contact-us')}}"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->
         <!-- Start of Breadcrumbs -->
         <div class="breadcrumb-section bgc-offset mb-full">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{url('/home')}}">Home</a>
                            <span class="breadcrumb-item active">404</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">
            
            <!-- Start of Error 404 Section -->
            <section class="error-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-wrapper text-center">
                                <div class="error-text">
                                    <h1>404</h1>
                                    <h2>Oops! Something went wrong.</h2>
                                    <p>Sorry, the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable. </p>
                                </div>
                                <div class="error-button mt-half">
                                    <a href="{{url('/')}}" class="btn btn-secondary">Back to home page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </section>
            <!-- End of Error 404 Section -->
    </main>
        <!-- End of Main Content Wrapper -->
        <!-- Start of Footer -->
<footer id="colophon" class="bgc-secondary pt-full">

<!-- Footer Widgets Area -->
<div class="footer-widgets-area">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <aside class="widget-container">
                        <div class="widget-content">
                            <div class="footer-logo mb-half">
                                <img src="assets/images/footer-logo.png" alt="Footer Logo">
                            </div>
                            <div class="footer-contact">
                                <p><span>Phone:</span><a href="#">(+91) 82995 93485</a></p>
                                <p><span>Email:</span><a href="#">support@peltleather.com</a></p>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>

                <div class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
                    <aside class="widget-container">
                        <h4 class="widgettitle">Our Products</h4>
                        <div class="widget-content">
                            <div class="widgetized-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('for-him')}}">For Him</a></li>
                                    <li><a href="{{url('for-her')}}">For Her</a></li>
                                    <li><a href="{{url('accessories')}}">Accessories</a></li>
                                    <li><a href="{{url('gallery')}}">Gallery</a></li>
                                </ul>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>

                <div class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
                    <aside class="widget-container">
                        <h4 class="widgettitle">Our Company</h4>
                        <div class="widget-content">
                            <div class="widgetized-menu">
                                <ul class="list-unstyled">
                                    <li><a href="{{url('about-us')}}">About Us</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                    <li><a href="{{url('sitemap')}}">Sitemap</a></li>
                                </ul>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>

                <div class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
                    <aside class="widget-container">
                        <h4 class="widgettitle">Sign up for our newsletter</h4>
                        <div class="widget-content">
                            <div class="newsletter-widget">
                                <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                <form class="mc-subscribe-form">
                                    <div class="input-group">
                                        <input type="email" autocomplete="off" placeholder="Your Email Address" required>
                                        <button class="default-btn" type="submit">Sign Up</button>
                                    </div>
                                </form> <!-- end of form -->

                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="mailchimp-error"></div>
                                </div><!-- end of mailchimp-alerts -->
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->

                    <aside class="widget-container">
                        <div class="widget-content">
                            <div class="social-widget mt-half">
                                <div class="socials d-flex align-items-center justify-content-center justify-content-md-start">
                                    <ul class="list-inline">
                                    <li class="list-inline-item"><a href="{{FACEBOOK_PAGE}}" class="bg-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="{{TWITTER_PAGE}}" class="bg-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="{{YOUTUBE_PAGE}}" class="bg-youtube" title="Youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="list-inline-item"><a href="{{PINTREST_PAGE}}" class="bg-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="{{INSTAGRAM_PAGE}}" class="bg-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="{{LINKEDIN_PAGE}}" class="bg-linkedin" title="Linked In" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end of widget-content -->
                    </aside> <!-- end of widget-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of footer-inner -->
    </div> <!-- end of container -->
</div> <!-- end of footer-widgets-area -->

<!-- Footer Copyright -->
<div class="footer-copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <p class="copyright-text" style="text-align:center;">Copyright © 2020 <a href="{{url('/')}}" rel="nofollow">Pelt Leather</a>. All Right Reserved.</p>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer-copyright -->
</footer>
<!-- End of Footer -->
    <!-- Start of Scroll to Top -->
    <div id="to_top">
        <i class="ion ion-ios-arrow-forward"></i>
        <i class="ion ion-ios-arrow-forward"></i>
    </div>
    <!-- End of Scroll to Top -->
</div>
<!-- End of Whole Site Wrapper -->
<!-- JS
============================================ -->
<!-- jQuery JS -->
<script src="{{asset('assets/js/jquery.1.12.4.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>