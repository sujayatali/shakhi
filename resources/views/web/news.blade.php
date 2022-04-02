@extends('web.headerFooter')
@section('title', 'Latest News')
@section('description_meta', 'Latest News')
@section('content')

<section class="page_title ds s-parallax s-overlay s-py-65">
	<div class="s-blur"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center text-sm-left">
					<h1>News: Latest News</h1>
				</div>
			</div>
		</div>
</section>
 <section class="ls blog-section s-pt-xl-135 s-pt-lg-115 s-pt-md-75 s-pt-55 s-pb-xl-145 s-pb-lg-125 s-pb-md-85 s-pb-55">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="special-heading text-center">Swashthya Sakhi News</h2>
							<div class="container">
							<div class="row m-5">
							@foreach ($posts as $post)
								@php $default_img = '/webApps/images/no-image-icon.jpg'; $gallery_img = (get_post_meta($post['id'],'news_image'))?get_post_meta($post['id'],'news_image'):$default_img;   @endphp
								<div class="col-12 col-sm-8 col-md-6 col-lg-4">
									<div class="card">
										<a href="">
										<img class="card-img" src="{{$gallery_img}}" alt="shakhi">
										</a>
										<div class="card-body">
										<h4 class="card-title">{{ $post['title']}}</h4>
										<small class="text-muted cat">
											<i class="far fa-clock text-info"></i> 30 minutes &nbsp;&nbsp;
											<i class="fas fa-calendar text-info"></i> 20-04-2020
											
										</small>
										
										<p class="card-text">{{ $post['content']}}</p>
										<a href="/news-view-single/{{$post->id}}" target="_blank" class="btn btn-info">Read Recipe</a>
										</div>
										<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
										
										
										</div>
									</div>
								</div>

								@endforeach
							</div>
							</div>
						</div>
					</div>
				</div>
			</section> 

				

			<div class="mt--30"></div>
@endsection