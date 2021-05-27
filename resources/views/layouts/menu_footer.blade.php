<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crypto.trade-bonus</title>
	<meta charset="UTF-8">
	<meta name="description" content="trade-bonus.net le site de la reference">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="/assets/img/logo.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/assets/css/themify-icons.css"/>
	<link rel="stylesheet" href="/assets/css/animate.css"/>
	<link rel="stylesheet" href="/assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="/assets/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="{{route('index')}}" class="site-logo">
				<img src="/assets/img/logo.png" alt="">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="{{route('inscription.create')}}" class="site-btn">Invest Now</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="{{route('index')}}">Home</a></li>
					<li><a href="{{route('investment')}}">Investment s Plans</a></li>
					<li><a href="{{route('about')}}">About</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->

@yield('body')



	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
					<img src="/assets/img/logo.png" class="mb-4" alt="">
					</div>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="{{route('index')}}">Home</a></li>
							<li><a href="{{route('about')}}">About</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="mailto:crypto.trade-bonus.net">crypto.trade-bonus.net</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="/assets/js/jquery-3.2.1.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	@if (session()->has('message'))
	<script>
		Swal.fire({
		icon: 'success',
		title: 'Confirmation',
		text: 'Registration succeeded. You will receive an email!',
		footer: 'Crypto.Trade-bonus'
	});
	</script>
	@endif

</body>
</html>
