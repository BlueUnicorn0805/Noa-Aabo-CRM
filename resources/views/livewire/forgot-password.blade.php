@extends('layouts.app')

        @section('styles')

        @endsection

        @section('body')

        <body class="ltr login-img">

        @endsection

            @section('content')

			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col mx-auto text-center">
						<a href="{{url('index')}}">
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="">
						</a>
					</div>
					<div class="col-12 container-login100">
						<div class="row">
							<div class="col col-login mx-auto">
								<form class="card shadow-none" method="post">
									<div class="card-body">
										<div class="text-center">
											<span class="login100-form-title">
												Forgot Password
											</span>
											<p class="text-muted">Enter the email address registered on your account</p>
										</div>
										<div class="pt-3" id="forgot">
											<div class="form-group">
												<label class="form-label" for="eMail">E-Mail:</label>
												<input class="form-control" id="eMail" placeholder="Enter Your Email" type="email">
											</div>
											<div class="submit">
												<a class="btn btn-primary d-grid" href="{{url('index')}}">Submit</a>
											</div>
											<div class="text-center mt-4">
												<p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1" href="#">Send me Back</a></p>
											</div>
										</div>

									</div>
									<div class="card-footer">
										<div class="d-flex justify-content-center my-3">
											<a href="javascript:void(0)" class="social-login  text-center me-4">
												<i class="fa fa-google"></i>
											</a>
											<a href="javascript:void(0)" class="social-login  text-center me-4">
												<i class="fa fa-facebook"></i>
											</a>
											<a href="javascript:void(0)" class="social-login  text-center">
												<i class="fa fa-twitter"></i>
											</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!--END PAGE -->

            @endsection

        @section('scripts')

        @endsection

