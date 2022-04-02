@extends('web.headerFooter')
@section('title', 'Contact Page')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-65">
				<div class="s-blur"></div>
				<div class="container">
					<div class="row">


						<div class="col-md-12 text-center text-sm-left">
							<h1>Contact Us</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Contact Us
								</li>
							</ol>
						</div>


					</div>
				</div>
			</section>
			<section class="ls s-py-xl-140 s-py-lg-130 s-py-md-90 s-py-60 s-pb-0 c-mb-30 c-gutter-30">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="media text-center text-sm-left">
								<div class="icon-styled color-main fs-28">
									<img src="images/icons/icon1.png" alt="">
								</div>
								<div class="media-body">
									<h5>
										Adress
									</h5>
									<p>
										3570 Bloomfield Way
										Littleton, ME 04760
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="media text-center text-sm-left">
								<div class="icon-styled color-main fs-28">
									<img src="images/icons/icon2.png" alt="">
								</div>
								<div class="media-body">
									<h5>
										Opening Hours
									</h5>
									<p>
										Mon to Fr: 10am to 7pm <br>
										Saturday: 10am to 4pm
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="media text-center text-sm-left">
								<div class="icon-styled color-main fs-28">
									<img src="images/icons/icon3.png" alt="">
								</div>
								<div class="media-body">
									<h5>
										Email Adress
									</h5>
									<p>
										<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f598949c99b5908d9498859990db969a98">[email&#160;protected]</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="media text-center text-sm-left">
								<div class="icon-styled color-main fs-28">
									<img src="images/icons/icon4.png" alt="">
								</div>
								<div class="media-body">
									<h5>
										Phone
									</h5>
									<p>
										Call customer services <br>
										on 0800 123 45 67
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="mb--30"></div>
				</div>
			</section>
			<section class="ls contact  c-gutter-30 container-px-0 c-gutter-0">


				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class=" ms page_map" data-draggable="false" data-scrollwheel="false">
								<div class="marker">
									<div class="marker-address">sydney, australia, Liverpool street, 66</div>
									<div class="marker-title">Reach Us</div>
									<div class="marker-description">

										<ul class="list-unstyled">
											<li>
												<span class="icon-inline">
													<span class="icon-styled color-main">
														<i class="fa fa-map-marker"></i>
													</span>

													<span>
														Sydney, Australia, Liverpool street, 66
													</span>
												</span>
											</li>

											<li>
												<span class="icon-inline">
													<span class="icon-styled color-main">
														<i class="fa fa-phone"></i>
													</span>

													<span>
														1 (800) 123-45-67
													</span>
												</span>
											</li>
											<li>
												<span class="icon-inline">
													<span class="icon-styled color-main">
														<i class="fa fa-envelope"></i>
													</span>

													<span>
														<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0865696164486d70696578646d266b6765">[email&#160;protected]</a>
													</span>
												</span>
											</li>
										</ul>
									</div>

									<img class="marker-icon" src="images/map_marker_icon.png" alt="">
								</div>
							</div>

						</div>
						<div class="col-lg-6 contact-us animate" data-animation="scaleAppear">
							<div class="divider-90 hidden-below-md hidden-lg hidden-xl"></div>
							<div class="divider-60 hidden-above-md"></div>
							<h4 class="special-heading text-center text-capitalize">Contact us</h4>
							<p class="special-heading text-center">Have You any Questions? Ask Us!</p>
							<div class="divider-50 hidden-below-md"></div>
							<div class="divider-20 hidden-above-md"></div>
							<form class="contact-form content-center c-mb-40 c-gutter-20" method="post" action="https://html.modernwebtemplates.com/">

								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-placeholder">
											<label for="name333">Full Name <span class="required">*</span></label>

											<input type="text" aria-required="true" size="30" value="" name="name" id="name333" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group has-placeholder">
											<label for="email333">Email address<span class="required">*</span></label>

											<input type="email" aria-required="true" size="30" value="" name="email" id="email333" class="form-control" placeholder="Email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 mb-0">
										<div class="form-group has-placeholder">
											<label for="message333">Message</label>
											<textarea aria-required="true" rows="3" cols="45" name="message" id="message333" class="form-control" placeholder="Message"></textarea>
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
							<div class="divider-90 hidden-below-md hidden-lg hidden-xl"></div>
							<div class="divider-70 hidden-above-md"></div>
						</div>
						<!--.col-* -->
					</div>
				</div>
			</section>
@endsection