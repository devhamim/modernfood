@extends('frontend.layout.app')
@section('content')
 
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('frontend') }}/img/bg/breadcrumb_bg02.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<h2>Dealer Form</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Dealer Form</li>
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
	<div class="contact-wrap pt-120 pb-120">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8">
					<div class="section-title text-center mb-70">
						<h6 class="sub-title">Dealer Form</h6>
						<h2 class="title"><span>Dealer</span> Register</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-12">
					<div class="contact-form">
						<form method="POST" action="{{ route('dealerform.store') }}">
							@csrf
							<div class="row ">
								<div class="col-md-6">
									<input name="conpany_name"  type="text" placeholder="Conpany Name *" value="{{ old('conpany_name') }}">
									@error('conpany_name')
										<strong class="text-danger">{{ $message }}</strong>
									@enderror
								</div>
								<div class="col-md-6">
									<input name="name" class="@error('name') is-invalid @enderror" type="text" placeholder="Dealer Name *" value="{{ old('name') }}">
								</div>
								<div class="col-md-6">
									<input name="husband_father" class="@error('husband_father') is-invalid @enderror" type="text" placeholder="Husband/Father *" value="{{ old('husband_father') }}">
								</div>
								<div class="col-md-6">
									<input name="company_address" class="@error('company_address') is-invalid @enderror" type="text" placeholder="Company Address *" value="{{ old('company_address') }}">
								</div>
								<div class="col-md-6">
									<input name="dealer_address" class="@error('dealer_address') is-invalid @enderror" type="text" placeholder="Dealer Address *" value="{{ old('dealer_address') }}">
								</div>
								<div class="col-md-6">
									<input name="nid_birth" class="@error('nid_birth') is-invalid @enderror" type="text" placeholder="NID/Birth Certificate *" value="{{ old('nid_birth') }}">
								</div>
								<div class="col-md-6">
									<input name="phone" class="@error('phone') is-invalid @enderror" type="text" placeholder="Phone No"  value="{{ old('phone') }}">
								</div>
								<div class="col-md-6">
									<input name="email" type="email" placeholder="Your Email *"  value="{{ old('email') }}">
								</div>
								<div class="col-md-6">
									<input name="warehouse" type="text" placeholder="Warehouse *"  value="{{ old('warehouse') }}">
								</div>
								<div class="col-md-6">
									<input name="visiting_area" type="text" placeholder="Visiting Area *" value="{{ old('visiting_area') }}">
								</div>
								<div class="col-md-6">
									<input name="agree" type="checkbox"  value="1">
									@error('agree')
										<strong class="text-danger">{{ $message }}</strong>
									@enderror
								</div>
								<div class="col-md-12">
									<table class="table table-striped">
										<tr>
											<th>No.</th>
											<th>Company Name</th>
											<th>Visiting Product</th>
											<th>Monthly Sell</th>
										</tr>
										
										<?php for ($i = 1; $i <= 3; $i++) { ?>
											<tr>
												<td><input class="form-control m-0 p-0" name="sl[<?php echo $i; ?>]" type="text"></td>
												<td><input class="form-control m-0 p-0" name="visiting_company_name[<?php echo $i; ?>]" type="text"></td>
												<td><input class="form-control m-0 p-0" name="visiting_product[<?php echo $i; ?>]" type="text"></td>
												<td><input class="form-control m-0 p-0" name="monthly_sell[<?php echo $i; ?>]" type="text"></td>
											</tr>
										<?php } ?>
									</table>
								</div>
								
							</div>
							
							<button type="submit" class="btn gradient-btn">Send Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact-area-end -->
@endsection