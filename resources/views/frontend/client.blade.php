@extends('frontend.layout.app')
@section('content')
 
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg02.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2>Concern</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Concern</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb-shape"><img src="{{ asset('frontend') }}/img/images/breadcrumb_shape01.png" alt=""></div>
	<div class="breadcrumb-shape"><img src="{{ asset('frontend') }}/img/images/breadcrumb_shape02.png" alt=""></div>
</section>
<!-- breadcrumb-area-end -->

 <!-- testimonial-area -->
 <section class="testimonial-area testi-bg pt-120 pb-90">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-12">
				<div class="section-title text-center mb-70">
					<h6 class="sub-title">Concern</h6>
					<h2 class="title"><span>Happy</span> Concern </h2>
				</div>
			</div>
		</div>
		<div class="row testimonial-active">
			@foreach ($clients as $client)
			<div class="col-xl-4 col-lg-4 col-sm-6 col-6">
				<div class="testimonial-item mb-30">
					<div class="testimonial-top">
						<div class="icon">
							<img width="100%" src="{{ asset('uploads/client') }}/{{ $client->image }}" alt="">
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- testimonial-area-end -->
@endsection