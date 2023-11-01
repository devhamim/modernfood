@extends('frontend.layout.app')
@section('content')
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg breadcrumb-style2" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2>Team</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Team</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb-area-end -->

<!-- shop-area -->
<section class="shop-area shop-bg mt-5 pb-75" data-background="{{ asset('frontend') }}/img/bg/shop_bg.jpg">
	<section class="features-area gray-bg pt-80 pb-90">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8">
					<div class="section-title text-center mb-70">
						<h6 class="sub-title">Our Team</h6>
						<h2 class="title"><span>Welcome to</span> Our Team</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				@foreach ($teams as $team)
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
					<div class="features-item text-center mb-30">
						<div class="features-thumb">
							<img src="{{ asset('uploads/team') }}/{{ $team->image }}" alt="">
							
						</div>
						<div class="features-content">
							<h4><a >{{ $team->name }}</a></h4>
							<p>{{ $team->post }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection