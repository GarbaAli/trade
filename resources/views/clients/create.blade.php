@extends('layouts.menu_footer')



@section('body')
<!-- Page info section -->
<section class="page-info-section">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="site-beradcamb">
				<a href="">Home</a>
				<span><i class="fa fa-angle-right"></i> Contact us</span>
			</div>
		</div>
	</section>
<!-- Page info end -->
<!-- Contact section -->
<section class="contact-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<form action="{{ route('inscription.store') }}" method="POST" class="contact-form">
                    @csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input id="username" class="check-form   @error('username') is-invalid  @enderror" name="username" type="text" value="{{ old('username') }}" placeholder="Username:">
									<!-- <span><i class="ti-check"></i></span> -->
                                    @error('username')
                                         <div style="color:red">{{ $message }}</div>
                                    @enderror
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input id="wallet" class="check-form  @error('wallet') is-invalid  @enderror" name="wallet" type="text" value="{{ old('wallet') }}" placeholder="Wallet Adress:">
                                    @error('wallet')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
									<!-- <span><i class="ti-check"></i></span> -->
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input class="check-form @error('email') is-invalid  @enderror"  name="email" type="text" placeholder="Email Adress*:"  value="{{ old('email') }}">
									<span><i class="ti-check"></i></span>
                                    @error('email')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="check-form @error('amount') is-invalid  @enderror" name="amount" type="text" value="{{ old('amount') }}" placeholder="Amount*:">
									<span><i class="ti-check"></i></span>
                                    @error('amount')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
								</div>
							</div>
							<div class="col-md-12">
								<!-- <button type="submit" class="site-btn sb-gradients mt-4">Valider</button> -->
                                <button type="submit" class="btn btn-primary">Nouveau Topic</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-5 mt-5 mt-lg-0">
					<div class="map" id="map-canvas"></div>
				</div>
			</div>
            
		</div>
        <hr>
	</section> 
	<!-- Contact section end -->

@endsection