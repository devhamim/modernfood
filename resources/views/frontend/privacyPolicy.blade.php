@extends('frontend.layout.app')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Privacy Policy</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- Team Section -->
<div class="container">
	<div class="row">
		<div class="team-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
			<div class="inner-box">
				@if ($privacyPolicy->first()->id != null)
				<p>{!! $privacyPolicy->first()->description !!}</p>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- End Team Section -->
@endsection