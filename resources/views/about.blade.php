@extends('layouts.menu_footer')



@section('body')

	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>About Us</h2>
			<div class="site-beradcamb">
				<a href="{{route('index')}}">Home</a>
				<span><i class="fa fa-angle-right"></i> About Us</span>
			</div>
			<div class="mt-20">
				<a href="{{route('inscription.create')}}" class="site-btn sb-gradients">INVEST NOW </a>
			</div>
		</div>
	</section>
	<!-- Page info end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>What is Bitcoin</h2>
					<h5>Bitcoin is an innovative payment network and a new kind of money.</h5>
					<p>Bitcoin is a decentralized digital currency that you can buy, sell and exchange directly, without an intermediary like a bank. Bitcoin’s creator, Satoshi Nakamoto, originally described the need for “an electronic payment system based on cryptographic proof instead of trust.”

                    Each and every Bitcoin transaction that’s ever been made exists on a public ledger accessible to everyone, making transactions hard to reverse and difficult to fake. That’s by design: Core to their decentralized nature, Bitcoins aren’t backed by the government or any issuing institution, and there’s nothing to guarantee their value besides the proof baked in the heart of the system.

                
                </p>
				</div>
			</div>
			<div class="about-img">
				<img src="/assets/img/about.jpg" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


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

@endsection