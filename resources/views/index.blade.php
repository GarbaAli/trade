
@extends('layouts.menu_footer')



@section('body')



	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Invest in <span>Bitcoin</span> <br>Bitcoin Trading</h2>
					<h4>Use modern progressive technologies of Bitcoin to earn money</h4>
					
						<a href="{{route('inscription.create')}}" class="site-btn sb-gradients">INVEST NOW </a>
				</div>
				<div class="col-md-6">
					<img src="/assets/img/bit.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>What is Bitcoin</h2>
					<h5>Bitcoin is an innovative payment network and a new kind of money.</h5>
					<p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</p>
					<a href="{{route('about')}}" class="site-btn sb-gradients sbg-line mt-5">Read More</a>
				</div>
			</div>
			<div class="about-img">
				<img src="/assets/img/ig.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->



	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>DEPOSIT</h2>
				<p>Start learning about Bitcoin with interactive tutorials. It’s fun, easy, and takes only a few minutes! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="/assets/img/process-icons/1.png" alt="#">
						</figure>
						<h4>Investment's Plans</h4>
						<a href="{{route('investment')}}" class="site-btn sb-gradients sbg-line mt-5"> Read More</a>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="/assets/img/process-icons/2.png" alt="#">
						</figure>
						<h4>Make Your Deposit Now</h4>
						<p>Minimum 0.001 BTC ou 40$ </p>
						<a href="{{route('inscription.create')}}" class="site-btn sb-gradients sbg-line mt-5"> INVEST NOW</a>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="/assets/img/process-icons/3.png" alt="#">
						</figure>
						<h4>Withdrawl Your Money</h4>
						<p>Enter your Bitcoin, Payeer, Ethereum, Litecoin or Perfect money account number and you will be paid automatically. You receive a confirmation message for your payment automatically </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>60</h2>
						<p>Support <br> Countries</p>
						<i class="ti-basketball"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>12K</h2>
						<p>Transactions  <br> per hour</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>5B</h2>
						<p>Largest <br> Transactions</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>240</h2>
						<p>Years <br> of Experience</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->



	<!-- Review section -->
	<section class="review-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 push-8">
					<img src="/assets/img/quote.png" alt="" class="quote mb-5">
					<div class="review-text-slider owl-carousel">
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pr-0 pull-3">
					<div class="review-meta-slider owl-carousel pt-5">
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="/assets/img/review/1.jpg"></div>
							<div class="author-name">
								<h4>Aaron Ballance</h4>
								<p>Ceo Bitcoin</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="/assets/img/review/2.jpg"></div>
							<div class="author-name">
								<h4>Jackson Nash</h4>
								<p>Head of Design</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="/assets/img/review/3.jpg"></div>
							<div class="author-name">
								<h4>Katy Abrams</h4>
								<p>Product Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->

@endsection