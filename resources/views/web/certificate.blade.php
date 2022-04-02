@extends('web.headerFooter')
@section('title', 'Certficate')
@section('description_meta', 'Latest Certficate')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-65">
				<div class="s-blur"></div>
				<div class="container">
					<div class="row">


						<div class="col-md-12 text-center text-sm-left">
							<h1>Certficate:</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="/">Home</a>
								</li>
								<li class="breadcrumb-item active">
                                Certficate: 
								</li>
							</ol>
						</div>


					</div>
				</div>
			</section>

			<section class="ls tax-fw-portfolio-category s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60">
				<div class="container">
					<div class="row">


						<div class="col-lg-12">
							<div class="row portfolio isotope-wrapper masonry-layout c-gutter-30 c-mb-30" data-filters=".gallery-filters">
								@foreach ($posts as $post)
								@php $default_img = '/webApps/images/no-image-icon.jpg'; $gallery_img = (get_post_meta($post['id'],'certificate'))?get_post_meta($post['id'],'certificate'):$default_img;   @endphp
								<div class="col-xl-4 col-md-6 innovations corporate">
									<div class="vertical-item bordered text-center ">
										<div class="item-media">

											<img src="{{$gallery_img}}" alt="img">
											<div class="media-links">
												<div class="links-wrap">
													<a class="link-zoom photoswipe-link" title="" href="{{$gallery_img}}"></a>
												</div>
											</div>
										</div>
										<div class="item-content small-padding">
											<div class="small-text">
												<a href="#">{{ $post['title']}}</a>
											</div>
											<h6>
												
											</h6>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<!-- .isotope-wrapper-->
						</div>
					</div>
				</div>
			</section>
			<div class="mt--30"></div>
@endsection