@extends('frontend.layout.app')

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg breadcrumb-style2" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg01.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2>Product</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Product</li>
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
	<div class="container">
		
		<div class="row justify-content-center">
			@foreach ($products as $product)
			<div class="col-lg-4 col-md-6 col-sm-8">
				<div class="shop-item text-center mb-40">
					<div class="shop-thumb mb-20">
						<a>
							<img src="{{ asset('uploads/product') }}/{{ $product->image }}" alt="">
						</a>
					</div>
					<div class="shop-item-content">
						<h4><a >{{ $product->name }}</a></h4>
						<p>{{ $product->title }}</p>
						<span class="new-price">{{ $product->description }}</span>
					</div>
				</div>
			</div>			
			@endforeach
		</div>
	</div>
</section>
<!-- shop-area-end -->
@endsection


