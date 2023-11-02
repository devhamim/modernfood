@extends('frontend.layout.app')

@section('content')
<!-- slider-area -->
<section class="slider-area">
    <div class="slider-active">
        @foreach ($banners as $banner)
        <div class="single-slider slider-bg fix" data-background="{{ asset('uploads/banner') }}/{{ $banner->image }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content text-center">
                            <h2 data-animation="fadeInUp" data-delay=".3s">{{ $banner->title }}</h2>
                            <h6 data-animation="fadeInUp" data-delay=".6s">{{ $banner->description }}</h6>
                            <div class="slider-btn">
                                <a href="{{ route('our.product') }}" class="btn gradient-btn" data-animation="fadeInLeft" data-delay=".9s"><span>+</span> Our Product</a>
                                <a href="{{ route('contect') }}" class="btn transparent-btn" data-animation="fadeInRight" data-delay=".9s">Contect Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</section>
<!-- slider-area-end -->

<!-- about -->
@if ($abouts->first() != null)
<section class="faq-area faq-bg pt-120 pb-120" data-background="{{ asset('frontend') }}/img/bg/faq_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-image">
                    <img src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-wrap">
                    <div class="section-title mb-50">
                        <h6 class="sub-title">{{ $abouts->first()->subtitle }}</h6>
                        <h2 class="title">{{ $abouts->first()->title }}</h2>
                    </div>
                    <div id="">
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
<!-- about-end -->

<!-- features-area -->
<section class="features-area gray-bg pt-80 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <h6 class="sub-title">Our Product</h6>
                    <h2 class="title"><span>Welcome to</span> Organic Farm</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($products->take(4) as $product)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="features-item text-center mb-30">
                    <div class="features-thumb">
                        <img src="{{ asset('uploads/product') }}/{{ $product->image }}" alt="">
                        
                    </div>
                    <div class="features-content">
                        <h4><a >{{ $product->name }}</a></h4>
                        <p>{{ $product->title }}</p>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- features-area-end -->

<!-- video-area -->
@if ($videos->first()->id != null)
<section class="video-area video-bg pt-130" data-background="{{ asset('uploads/video') }}/{{ $videos->first()->image }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-wrap">
                    <div class="video-play">
                        <a class="my-video-links" data-autoplay="true" data-maxwidth="50%" data-vbtype="video" href="{{ $videos->first()->link }}"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="section-title white-title text-center mb-70">
                        <h2 class="title">{{ $videos->first()->title }}</h2>

                        <div class="mt-3">
                            <a href="{{ route('register.dealerform') }}" class="btn gradient-btn">Dealer Form</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="video-bottom-shape" data-background="{{ asset('frontend') }}/img/bg/video_bottom_shape.png"></div>
</section>
@endif
<!-- video-area-end -->

<!-- project-area -->
<section class="project-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <h6 class="sub-title">your dream gallery</h6>
                    <h2 class="title"><span>Our </span> Gallery</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-full">
        <div class="row project-active">
            @foreach ($gallerys as $gallery)
            <div class="col-xl-3">
                <div class="project-item mb-30">
                    <div class="project-thumb">
                        <a class="my-image-links" data-gall="gallery01" href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"><img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"></a>
                    </div>
                    <div class="project-overlay-content">
                        <div class="project-tag">
                            <a >{{ $gallery->created_at->format('d-M-Y') }}</a>
                            <a class="my-image-links" data-gall="gallery01" href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"></a>
                        </div>
                        <div class="project-content">
                            <h4><a>{{ $gallery->title }}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- project-area-end -->

<!-- farming-area -->
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
				@foreach ($teams->take(4) as $team)
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

<!-- farming-area-end -->

<!-- fact-area -->
<section class="fact-area fact-bg" data-background="{{ asset('frontend') }}/img/bg/fact_bg.jpg">
    <div class="container">
        <div class="row">
            @foreach ($achieves->take(4) as $achieve)
            <div class="col-lg-3 col-sm-6">
                <div class="fact-item">
                    <h2><span class="odometer" data-count="{{ $achieve->total }}">00</span>+</h2>
                    <span>{{ $achieve->title }}</span>
                    <div class="fact-icon"><i ><img src="{{ asset('uploads/achieve') }}/{{ $achieve->icon }}" alt=""></i></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- fact-area-end -->

<!-- blog-area -->
<section class="blog-area blog-bg pt-120 pb-90" data-background="{{ asset('frontend') }}/img/bg/blog_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <h6 class="sub-title">FROM THE BLOG</h6>
                    <h2 class="title"><span>Latest</span> News & Articles</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($blogs->take(3) as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-post-item mb-30">
                    <div class="blog-post-thumb position-relative">
                        <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a>
                        <a href="{{ route('our.blog.details', $blog->slug) }}" ></a>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-meta">
                            <ul>
                                @if ($blog->rel_to_user->id != null)
                                <li><i class="far fa-user"></i><a >{{ $blog->rel_to_user->name }}</a></li>
                                @endif
                                <li><i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('d,M,Y') }}</li>
                            </ul>
                        </div>
                        <h4><a href="{{ route('our.blog.details', $blog->slug) }}">The Best Milk in the State</a></h4>
                        <a href="{{ route('our.blog.details', $blog->slug) }}" class="arrow-btn">Read More <span></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- blog-area-end -->
@endsection
