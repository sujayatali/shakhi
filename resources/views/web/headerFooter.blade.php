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
	<!-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

	<!-- search modal --
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>
	<div id="team-form" class="ds modal">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="row">
						<div class="col-12 text-center">
							<div class="header title">
								<h4>Contact Me</h4>
								<p>Have You any Questions? Ask Me!</p>
							</div>

						</div>
						<a href="javascript:void(0)" data-dismiss="modal" aria-label="Close" class="remove">×</a>
					</div>
					<form class="contact-form c-mb-25 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">


						<div class="row">
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="name3">Full Name <span class="required">*</span></label>

									<input type="text" aria-required="true" size="30" value="" name="name" id="name3" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="email3">Email address<span class="required">*</span></label>

									<input type="email" aria-required="true" size="30" value="" name="email3" id="email3" class="form-control" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="message3">Message</label>
									<textarea aria-required="true" rows="6" cols="45" name="message" id="message3" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="form-group">
									<input class="btn btn-maincolor" type="submit" value="Send Message">
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>


		</div>


	</div>
	<div id="login-form" class="ls modal c-gutter-0">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="container">
			<div class="row">
				<div class="col-md-6 ds column-overlay">
					<img src="images/signup.jpg" alt="">
				</div>
				<div class="col-md-6 ls">
					<div class="divider-65 hidden-below-md"></div>
					<div class="divider-60 hidden-above-md"></div>
					<h4 class="special-heading text-center text-capitalize">Sign Up</h4>

					<form class="contact-form c-mb-30 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="name">Full Name <span class="required">*</span></label>

									<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="email">Email address<span class="required">*</span></label>

									<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="password">Password<span class="required">*</span></label>

									<input type="password" aria-required="true" size="30" value="" name="password" id="password" class="form-control" placeholder="Password">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">

									<input type="checkbox" id="agree" name="agree" checked>
									<label for="agree">I agree with all the text in the agreement</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<a href="#" class="btn btn-with-border sign-in">I am already Member</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="form-group">
									<input class="btn btn-maincolor" type="submit" value="Learn more">
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

	<div id="login-form2" class="ls modal c-gutter-0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ds column-overlay">
					<img src="images/signup.jpg" alt="">
				</div>
				<div class="col-md-6 align-items-center d-flex flex-column justify-content-center ls">
					<div class="divider-65 hidden-below-md"></div>
					<div class="divider-60 hidden-above-md"></div>
					<h4 class="special-heading text-center text-capitalize">Sign in</h4>

					<form class="contact-form c-mb-30 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="name2">Full Name <span class="required">*</span></label>

									<input type="text" aria-required="true" size="30" value="" name="name" id="name2" class="form-control" placeholder="Name">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group has-placeholder">
									<label for="password2">Password<span class="required">*</span></label>

									<input type="password" aria-required="true" size="30" value="" name="password2" id="password2" class="form-control" placeholder="Password">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-12">
								<a href="#" class="btn btn-with-border">Forgot Password?</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="form-group">
									<input class="btn btn-maincolor" type="submit" value="Learn more">
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>


	<div id="years" class="ls s-py-md-70 s-py-60 years modal text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="special-heading text-center">Are you over 21 years old?</h4>
					<div class="divider-70 hidden-below-md"></div>
					<div class="divider-30 hidden-above-md"></div>
					<div class="years-btn">
						<a href="#" class="btn btn-maincolor2 btn-yes">Yes</a>
						<a href="index-2.html" class="btn btn-maincolor btn-no">no</a>
					</div>

				</div>
			</div>
		</div>
	</div> --->


	<!-- Unyson messages modal --
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		<!-- </div>
	</div> --><!-- eof .modal -->

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
								<a class="login-form-btn" id="login-header-menu" style="border: 1px solid white; padding: 3px 8px; border-radius: 6px;" href="http://shakhi.org/login-panel"><i class="fa fa-user text-white"> Login</i></a>
							</div>
							
							<!--user action-->
							<!-- <div class="dropdown widget_search">
								<a class="dropdown-toggle dropdown-toggle-split" href="#" id="headerSearchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-search"></i>
								</a>

								<div class="dropdown-menu ls ms " aria-labelledby="headerSearchDropdown">
									<form role="search" method="get" class="search-form" action="https://html.modernwebtemplates.com/">
										<label for="search-form-top">
											<span class="screen-reader-text">Search for:</span>
										</label>
										<input type="search" id="search-form-top" class="search-field" placeholder="Search keyword" value="" name="search">
										<button type="submit" class="search-submit">
											<span class="screen-reader-text">Search</span>
										</button>
									</form>
								</div>
							</div> -->

							<!-- <div class="dropdown shopping-cart">
								<a class="dropdown-toggle dropdown-shopping-cart" href="#" role="button" id="dropdown-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-shopping-bag"></i>
									<span class="badge bg-maincolor2">3</span>
								</a>
								<div class="dropdown-menu ls" aria-labelledby="dropdown-shopping-cart">
									<div class="widget woocommerce widget_shopping_cart">


										<div class="widget_shopping_cart_content">

											<ul class="woocommerce-mini-cart cart_list product_list_widget ">
												<li class="woocommerce-mini-cart-item mini_cart_item">
													<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">×</a>
													<a href="shop-product-right.html">
														<img src="images/shop/26.jpg" alt="">Medical marijuana THC
													</a>

													<span class="quantity">1 ×
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>
															12.00
														</span>
													</span>
												</li>
												<li class="woocommerce-mini-cart-item mini_cart_item">
													<a href="#" class="remove" aria-label="Remove this item" data-product_id="76" data-product_sku="">×</a>
													<a href="shop-product-right.html">
														<img src="images/shop/26.jpg" alt="">Medical marijuana THC
													</a>

													<span class="quantity">1 ×
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>
															15.00
														</span>
													</span>
												</li>
											</ul>

											<p class="woocommerce-mini-cart__total total">
												<strong>Subtotal:</strong>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>
													27.00
												</span>
											</p>

											<p class="woocommerce-mini-cart__buttons buttons">
												<a href="shop-cart.html" class="button wc-forward">View cart</a>
												<a href="shop-checkout.html" class="button checkout wc-forward">Checkout</a>
											</p>
										</div>
									</div>

								</div>
							</div> -->

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