@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Thumbnails</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic Thumbnails</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row mt-4">
													<div class="col-md-6 col-xl-3">
														<a href="#" class="thumbnail ">
															<img src="{{asset('assets/images/media/16.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
													<div class="col-md-6 col-xl-3">
														<a href="#" class="thumbnail">
															<img src="{{asset('assets/images/media/media2.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
													<div class="col-md-6 col-xl-3">
														<a href="#" class="thumbnail">
															<img src="{{asset('assets/images/media/media3.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
													<div class="col-md-6 col-xl-3">
														<a href="#" class="thumbnail">
															<img src="{{asset('assets/images/media/media4.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Custom content Thumbnails</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row mt-4">
													<div class="col-md-12 col-xl-4">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/21.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Sadipscing labore eos nonumy est no nonumy, lorem sed stet et tempor sed sed. Amet magna eos dolores sadipscing sed erat at, et sed et sit et justo.</p>
																<p>
																	<a href="javascript:void(0)" class="btn btn-primary my-1" role="button">Button</a>
																	<a href="javascript:void(0)" class="btn btn-secondary my-1" role="button">Button</a>
																</p>
															</div>
														</div>
													</div><!-- COL-END -->
													<div class="col-md-12 col-xl-4">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/12.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Sanctus sit magna labore et elitr diam. Sed tempor amet no elitr clita no. Voluptua est sit sadipscing diam sea lorem vero invidunt aliquyam. Dolores ipsum elitr erat.</p>
																<p>
																	<a href="javascript:void(0)" class="btn btn-primary my-1" role="button">Button</a>
																	<a href="javascript:void(0)" class="btn btn-secondary my-1" role="button">Button</a>
																</p>
															</div>
														</div>
													</div><!-- COL-END -->
													<div class="col-md-12 col-xl-4">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/13.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Et sit clita ipsum sed erat ut stet sed diam, invidunt duo nonumy sadipscing invidunt elitr no, dolores sit lorem et ut amet kasd justo sed, duo.</p>
																<p>
																	<a href="javascript:void(0)" class="btn btn-primary my-1" role="button">Button</a>
																	<a href="javascript:void(0)" class="btn btn-secondary my-1" role="button">Button</a>
																</p>
															</div>
														</div>
													</div><!-- COL-END -->
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Custom content Thumbnails</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row mt-4">
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/4.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Consetetur sadipscing dolores stet dolor et accusam, vero lorem sit amet dolor eirmod. Et ipsum eirmod eirmod consetetur aliquyam, dolor amet elitr gubergren ipsum at gubergren, ipsum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/5.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Eirmod labore duo lorem dolore et at dolore et. Duo diam diam amet labore gubergren, voluptua sea justo sed vero vero, clita et et justo eirmod labore.</p>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Consetetur lorem at sanctus eos dolore takimata lorem, nonumy duo sadipscing stet ipsum eos dolor, erat sanctus tempor sed ipsum invidunt clita eos sea sea, lorem invidunt.</p>
															</div>
															<a href="#">
																<img src="{{asset('assets/images/media/6.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p class="text-muted">Et sadipscing ipsum nonumy consetetur vero justo sadipscing ut ipsum, sadipscing voluptua et takimata et lorem dolore clita ipsum voluptua. Est diam dolor elitr clita diam dolor.</p>
															</div>
															<a href="#">
																<img src="{{asset('assets/images/media/7.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Aligning Thumbnails</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<p class="text-muted">Align Start</p>
												<div class="row mt-4 justify-content-start">
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/14.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>Rebum ipsum voluptua no invidunt voluptua eos nonumy sea et. Et sanctus et kasd eos dolores. Invidunt no clita sed at amet, gubergren et dolores dolor diam..</p>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/15.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>No sadipscing eirmod vero aliquyam est aliquyam diam amet et. Dolores dolore kasd tempor sed aliquyam sadipscing et, clita dolor amet eirmod lorem, sanctus lorem sed duo.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="example mt-3">
												<p class="text-muted">Align End</p>
												<div class="row mt-4 justify-content-end">
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/14.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>Rebum ipsum voluptua no invidunt voluptua eos nonumy sea et. Et sanctus et kasd eos dolores. Invidunt no clita sed at amet, gubergren et dolores dolor diam..</p>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/15.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>No sadipscing eirmod vero aliquyam est aliquyam diam amet et. Dolores dolore kasd tempor sed aliquyam sadipscing et, clita dolor amet eirmod lorem, sanctus lorem sed duo.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="example mt-3">
												<p class="text-muted">Align Center</p>
												<div class="row mt-4 justify-content-center">
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/14.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>Rebum ipsum voluptua no invidunt voluptua eos nonumy sea et. Et sanctus et kasd eos dolores. Invidunt no clita sed at amet, gubergren et dolores dolor diam..</p>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/15.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>No sadipscing eirmod vero aliquyam est aliquyam diam amet et. Dolores dolore kasd tempor sed aliquyam sadipscing et, clita dolor amet eirmod lorem, sanctus lorem sed duo.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="example mt-3">
												<p class="text-muted">Align Between</p>
												<div class="row mt-4 justify-content-between">
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/14.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>Rebum ipsum voluptua no invidunt voluptua eos nonumy sea et. Et sanctus et kasd eos dolores. Invidunt no clita sed at amet, gubergren et dolores dolor diam..</p>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-xl-3">
														<div class="thumbnail">
															<a href="#">
																<img src="{{asset('assets/images/media/15.jpg')}}" alt="thumb1" class="thumbimg">
															</a>
															<div class="caption">
																<h4>Thumbnail label</h4>
																<p>No sadipscing eirmod vero aliquyam est aliquyam diam amet et. Dolores dolore kasd tempor sed aliquyam sadipscing et, clita dolor amet eirmod lorem, sanctus lorem sed duo.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-4 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
