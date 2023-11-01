@extends('frontend.layout.app')

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!-- faq-area -->
@if ( $abouts->first() != null)
<section class="faq-area faq-bg pt-120 pb-120" data-background="{{ asset('frontend') }}/img/bg/faq_bg02.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-image">
                    <img src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-wrap faq-style-two">
                    <div class="section-title mb-50">
                        <h6 class="sub-title">{{ $abouts->first()->subtitle }}</h6>
                        <h2 class="title">{{ $abouts->first()->title }}</h2>
                    </div>
                    <div id="accordion">
                        <div class="accordion-content">
                            <p>{!! $abouts->first()->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- faq-area-end -->

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
@endsection