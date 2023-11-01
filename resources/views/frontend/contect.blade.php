@extends('frontend.layout.app')
@section('content')
 
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg02.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2>CONTACT US</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contact</li>
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

<!-- contact-area -->
<section class="contact-area">
	<div class="contact-info-wrap pt-90 pb-60">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-around">
				<div class="col-xl-3 col-lg-4 col-sm-6">
					<div class="contact-info-box mb-30">
						<div class="contact-info-icon">
							<img src="{{ asset('frontend') }}/img/icon/contact_icon01.png" alt="">
						</div>
						<div class="contact-info-content">
							<h5>Phone Number</h5>
							@if ($settings->first()->number != null)
							<span>{{ $settings->first()->number }}</span>
							@endif
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-sm-6">
					<div class="contact-info-box mb-30">
						<div class="contact-info-icon">
							<img src="{{ asset('frontend') }}/img/icon/contact_icon02.png" alt="">
						</div>
						<div class="contact-info-content">
							<h5>Find Location</h5>
							@if ($settings->first()->address != null)
							<span>{{ $settings->first()->address }}</span>
							@endif
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-sm-6">
					<div class="contact-info-box mb-30">
						<div class="contact-info-icon">
							<img src="{{ asset('frontend') }}/img/icon/contact_icon03.png" alt="">
						</div>
						<div class="contact-info-content">
							<h5>Our Mail</h5>
							@if ($settings->first()->email != null)
								<span>{{ $settings->first()->email }}</span>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-wrap pt-120 pb-120">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8">
					<div class="section-title text-center mb-70">
						<h6 class="sub-title">Contact Us</h6>
						<h2 class="title"><span>How</span> Can We Help You?</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-12">
					<div class="contact-form">
						<form method="POST" action="{{ route('customerMessage.store') }}">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<input name="name" type="text" placeholder="Fast Name *">
								</div>
								<div class="col-md-6">
									<input name="phone" type="text" placeholder="Phone No">
								</div>
								<div class="col-md-6">
									<input name="email" type="email" placeholder="Your Email *">
								</div>
								<div class="col-md-6">
									<input name="subject" type="text" placeholder="Enter Subject *">
								</div>
							</div>
							<textarea name="message" id="message" placeholder="Message"></textarea>
							<button type="submit" class="btn gradient-btn">Send Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.727179635877!2d90.34925847608602!3d23.757106338517506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf66b3c0a14f%3A0x777f459aa721862f!2sChadd%20Uddan%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1698738635109!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- contact-area-end -->
@endsection