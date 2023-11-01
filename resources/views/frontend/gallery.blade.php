@extends('frontend.layout.app')

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2>our Gallery</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Gallery</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb-area-end -->

<!-- project-area -->
<section class="project-area project-bg pt-120 pb-120" data-background="{{ asset('frontend') }}/img/bg/project_bg.jpg">
	<div class="container">
		<div class="row justify-content-center">
			@foreach ($gallerys as $gallery)
				<div class="col-lg-4 col-md-6 col-sm-9">
					<div class="s-project-item mb-50">
						<div class="s-project-thumb">
							<a class="my-image-links" data-gall="gallery01" href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"><img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"></a>
						</div>
						<div class="s-project-content">
							
							<div class="project-right-content">
								
								<h4 class="title"><a>{{ $gallery->title }}</h4>
									<div class="project-content-bottom">
									<ul>
										<li>{{ $gallery->address }}</li>
										<li class="date">{{ $gallery->created_at->format('d-M-Y') }}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>			
			@endforeach
		</div>
		
	</div>
</section>
<!-- project-area-end -->
@endsection


