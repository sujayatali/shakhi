<!DOCTYPE html>
<html class="no-js">
<head>
	<title>@yield('title') | shakhi.org</title>
	<meta charset="utf-8">
	<meta name="description" content="@yield('description_meta')">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/font-awesome5.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/fontello.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/main.css')}}" class="color-switcher-link">
	<link rel="stylesheet" href="{{asset('web/css/shop.css')}}" class="color-switcher-link">
	<script src="{{asset('web/js/vendor/modernizr-2.6.2.min.js')}}"></script>
</head>

<body class="scroll_down">

<style type="text/css">
		.scroll_down{
			overflow-y: scroll !important;
		}
	</style>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<section class="page_topline topline-1 ls s-borderbottom py-9" style="background-color: #07322d;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12 text-md-left text-center ">
							<span class="social-icons text-white">
								<a href="#" class="fab fab fa-facebook-f text-white" title="facebook"></a>
								<a href="#" class="fab fa-telegram-plane text-white" title="telegram"></a>
								<a href="#" class="fab fa-linkedin-in text-white" title="linkedin"></a>
								<a href="#" class="fab fa-instagram text-white" title="instagram"></a>
								<a href="#" class="fab fa-youtube text-white" title="youtube"></a>
							</span>
						</div>

						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-md-end justify-content-center align-items-center">
							<div class="login-modal">
								<a class="login-form-btn" id="login-header-menu" style="border: 1px solid white; padding: 3px 8px; border-radius: 6px;" href="http://127.0.0.1:8000/login-panel"><i class="fa fa-user text-white"> Login</i></a>
							</div>



						</div>
					</div>
				</div>
			</section>
			<!--eof topline-->

			<!-- header with two Bootstrap columns - left for logo and right for navigation -->
			<header class="page_header header-1 ls s-py-20 ">

				<div class="container">

					<div class="row ">
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-8 col-12">
							<a href="" class="logo" >
								<img src="{{asset('web/images/shakhi-logo.png')}}" alt="" style="width: 80px; max-height: 89px">
								<!-- <span class="d-flex flex-column">
									<span class="logo-text color-darkgrey">Canabicom</span>
									<span class="logo-subtext">medical</span>
								</span> -->
							</a>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-8 col-sm-4 col-12 d-flex align-items-center justify-content-end ">
							<!-- main nav start -->
							<nav class="top-nav">
								<ul class="nav sf-menu">
									<li class="active">
										<a href="/">Home</a>
									</li>
									<li>
										<a href="/about">About us</a>
									</li>
									<li>
										<a href="/gallery">Gallery</a>
									</li>
									<li>
										<a href="/certificate">Certificate</a>
									</li>

									<li>
										<a href="/news">News</a>
									</li>
									<li>
										<a href="/contact">Contact</a>
									</li>
									<!-- eof contacts -->
								</ul>


							</nav>
							<!-- eof main nav -->
						</div>

					</div>

				</div>
				<!-- header toggler -->
				<span class="toggle_menu"><span></span></span>
			</header>

			@yield('content')

			<footer class="page_footer text-center text-sm-left  ds ms s-pt-60 s-pb-60 s-pt-md-85 s-pb-md-90 s-pt-lg-125 s-pb-lg-130 s-pt-xl-150 s-pb-xl-145 c-gutter-30 s-parallax c-mb-50 c-mb-lg-0" sty>
				<div class="container">
					<div class="row justify-content-center">

						<div class="col-lg-4 col-md-6  animate" data-animation="fadeInUp">
							<a href="/home" class="logo">
								<img src="http://shakhi.org/web/images/shakhi-logo.png" alt="" style="width: 92px; max-height: 100px">
								<!-- <span class="d-flex flex-column">
									<span class="logo-text color-darkgrey">Canabicom</span>
									<span class="logo-subtext">medical</span>
								</span> -->
							</a>
							<p class="text-white">
								Swashthya Sakhi  founded by <u>Mrs. B.B. Singh (Adv. High Court)</u> in 2022, provides health care, education, and social services for the under-served people of India, Nepal, and Tibet
							</p>
						</div>

						<div class="col-lg-4 col-md-6 animate" data-animation="fadeInUp">

							<div class="widget widget_nav_menu mb-0">
								<h3 class="widget-title">Quick Links</h3>
								<ul class="list-unstyled">
									<li>
										<a href="/">Home</a>
									</li>
									<li>
										<a href="/about">About Us</a>
									</li>
									<li>
										<a href="/gallery">Gallery</a>
									</li>
									<li>
										<a href="/certificate">Certificate</a>
									</li>
									<li>
										<a href="/contact">Contact Us</a>
									</li>
								</ul>
							</div>
						</div>


						<div class="col-lg-4 col-md-6 mb-0 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<h3 class="widget-title">Contact info</h3>
								<ul>
									<li class="icon-inline">
										<div class="icon-styled icon-top color-main fs-14">
											<i class="fa fa-map-marker"></i>
										</div>
										<p class="text-white">Hed Office <br> HO-10 Janta Flat Delhi  </p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top color-main fs-14">
											<i class="fa fa-phone"></i>
										</div>
										<p class="text-white">Customer Care: 9455511400 </p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top color-main fs-14">
											<i class="fa fa-envelope"></i>
										</div>
										<p class="text-white">
									<a href="#"><span class="__cf_email__" data-cfemail="ed8e82838c8f848e8280ad88958c809d8188c38e8280">[Email-swasthyasakhihelp@gmail.
com]</span></a>
										</p>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>


			<section class="page_copyright ds ms s-py-15 s-bordertop">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-md-12 text-center">
							<p class="text-white">&copy; Copyright <span class="copyright_year">2022</span> All Rights Reserved CS-Technology</p>
						</div>

					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="{{asset('web/js/compressed.js')}}"></script>
	<script src="{{asset('web/js/main.js')}}"></script>
	<!-- <script src="{{asset('js/switcher.js')}}"></script> -->
	<script>
		jQuery('#login-header-menu').click(function(){
			window.location.href='http://shakhi.org/login-panel';
		});
	</script>

</body>



</html>
