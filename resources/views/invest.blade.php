
@extends('layouts.menu_footer')



@section('body')
<!-- Page info section -->
<section class="page-info-section">
		<div class="container">
			<h2>Investment's Plans</h2>
			<div class="site-beradcamb">
				<a href="{{route('index')}}">Home</a>
				<span><i class="fa fa-angle-right"></i> Investment's Plans</span>
			</div>
		</div>
	</section>
	<!-- Page info end -->

    <!-- Features section -->
	<section class="features-section spad gradient-bg">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Investment's Plans</h2>
				<p>Depending on the amount of your investment, you can benefit from 250% on return on investment. You can have several different plans under one account.</p>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-archive"></i>
					<div class="feature-content">
						<h4>Pack Basic</h4>
						<p>Get 250% of your initial investment in 48 hours for an investment between 50$ and 999$. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-tag"></i>
					<div class="feature-content">
						<h4>PACK EMERAUDES</h4>
						<p>Get 600% of your initial investment in 48 hours for an investment between 1.000$ and 2.899 dollars. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-wallet"></i>
					<div class="feature-content">
						<h4>PACK BUSINESS</h4>
						<p>Get 800% of your initial investment in 36 hours for an investment greater than or equal to 2.900$. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-money"></i>
					<div class="feature-content">
						<h4>Special Offer</h4>
						<p>Invest 333$ and after 3 days, Get 1000$ </p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Features section end -->
@endsection