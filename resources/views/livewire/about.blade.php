@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">About</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">About Company</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN-->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-body p-4 text-dark">
											<div class="statistics-info">
												<div class="row text-center">
													<div class="col-lg-3 col-sm-6 mt-4 mb-4">
														<div class="counter-status">
															<div class="counter-icon bg-primary-gradient box-shadow-primary">
																<i class="icon icon-people text-white"></i>
															</div>
															<h5 class="mb-2">Total Employees</h5>
															<h2 class="counter mb-0">2569</h2>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 mt-4 mb-4">
														<div class="counter-status">
															<div class="counter-icon bg-secondary-gradient box-shadow-secondary">
																<i class="icon icon-rocket text-white"></i>
															</div>
															<h5 class="mb-2">Total Sales</h5>
															<h2 class="counter  mb-0">1765</h2>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6  mt-4 mb-4">
														<div class="counter-statuss">
															<div class="counter-icon bg-success-gradient box-shadow-success">
																<i class="icon icon-docs text-white"></i>
															</div>
															<h5 class="mb-2">Total Projects</h5>
															<h2 class="counter mb-0">846</h2>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 mt-4 mb-4">
														<div class="counter-status">
															<div class="counter-icon bg-danger-gradient box-shadow-danger">
																<i class="fe fe-trending-up text-white"></i>
															</div>
															<h5 class="mb-2">Total Growth</h5>
															<h2 class="counter  mb-0">7253</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-body about-con pabout">
											<h1 class="mb-4 fw-semibold">Why Noa?</h1>
											<h4 class="leading-normal">Ipsum dolor sit magna tempor magna ipsum eirmod, sit est.</h4>
											<p class="leading-normal">Sed elitr amet kasd sed tempor elitr invidunt sanctus nonumy, dolor aliquyam justo accusam gubergren et gubergren
												invidunt amet justo, sadipscing sadipscing erat ipsum consetetur, ipsum sanctus dolor est diam. Lorem voluptua clita et elitr dolor ipsum
												dolor. Sadipscing sit stet tempor nonumy, justo amet labore sed eos dolor dolor.</p>
											<a href="#" class="btn btn-primary  mt-2">View More</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
										<div class="card-body pabout">
											<h1 class="mb-4 fw-semibold">What is Our Services?</h1>
											<h4 class="leading-normal">Ea at dolore no diam elitr elitr, stet ut dolor.</h4>
											<p class="leading-normal">Dolor amet at et et et takimata et, magna dolor et takimata sea diam sed
												nonumy, accusam sea et amet et, kasd invidunt et lorem labore. Sit takimata amet sea est
												gubergren accusam. Sed sed diam dolor magna kasd. Sanctus erat eos ea aliquyam amet nonumy, stet
												magna rebum sit.</p>
											<a href="#" class="btn btn-primary mt-2">View More</a>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
									<div class="card text-center overflow-hidden">
										<img src="{{asset('assets/images/media/1.jpg')}}" alt="img">
										<div class="card-body">
											<h3 class="mb-3">Company history</h3>
											<p>Eos justo voluptua ea dolore ipsum. Sea rebum magna dolor duo sit consetetur dolor. Justo ut dolores eirmod sit amet.</p>
											<a href="#" class="btn btn-primary">Read More</a>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
									<div class="card text-center overflow-hidden">
										<img src="{{asset('assets/images/media/2.jpg')}}" alt="img">
										<div class="card-body">
											<h3 class="mb-3">About Team</h3>
											<p>Clita sed vero duo ea sed, sit dolor eos gubergren et et eirmod elitr amet lorem. Accusam duo justo et. Dolore elitr vero.</p>
											<a href="#" class="btn btn-secondary">Read More</a>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
									<div class="card text-center overflow-hidden">
										<img src="{{asset('assets/images/media/6.jpg')}}" alt="img">
										<div class="card-body">
											<h3 class="mb-3">Company growth</h3>
											<p>Ipsum no elitr dolore dolor diam, nonumy eos sed dolor elitr sed, sanctus et dolores duo diam elitr dolor. Ea accusam diam.</p>
											<a href="#" class="btn btn-success">Read More</a>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
									<div class="card text-center overflow-hidden">
										<img src="{{asset('assets/images/media/7.jpg')}}" alt="img">
										<div class="card-body">
											<h3 class="mb-3">Our Statistics</h3>
											<p>Labore sit kasd amet et voluptua ipsum sanctus accusam duo et, dolores dolor dolor est accusam. Invidunt dolor sed duo est aliquyam.</p>
											<a href="#" class="btn btn-info">Read More</a>
										</div>
									</div>
								</div><!-- COL-END -->
							</div><!-- COL-END -->

                            @endsection

        @section('scripts')

		<!-- COUNTERS JS-->
		<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/counters-1.js')}}"></script>

        <!-- COLOR THEME JS -->
        <script src="{{asset('assets/js/themeColors.js')}}"></script>

        @endsection

