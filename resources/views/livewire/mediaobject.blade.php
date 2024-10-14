@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Media Object</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Media Object</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-12">
									<div class="card Relatedpost nested-media">
										<div class="card-header border-bottom">
											<h3 class="card-title">Default Media Object</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="media mt-0">
													<img class="avatar avatar-lg brround me-3 mb-4" src="{{asset('assets/images/faces/1.jpg')}}" alt="Generic placeholder image">
													<div class="media-body text-muted">
														<h4 class="mt-0 text-dark">Media heading</h4>
														Magna lorem justo no lorem elitr stet lorem et vero, et dolore elitr erat est amet. Erat nonumy lorem dolore et takimata kasd stet tempor sanctus, sed.
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
								<div class="col-12">
									<div class="card Relatedpost nested-media">
										<div class="card-header border-bottom">
											<h3 class="card-title">Media Object Style-01</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="media mt-0">
													<img class="avatar avatar-lg rounded-circle me-3 mb-4" src="{{asset('assets/images/faces/2.jpg')}}" alt="Generic placeholder image">
													<div class="media-body text-muted">
														<h4 class="mt-0 text-dark">Media heading</h4>
														Lorem sit vero tempor sadipscing invidunt ut ea takimata ut sed, ipsum amet rebum lorem takimata et, eos sit et diam sed consetetur ea amet.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-12">
									<div class="card Relatedpost nested-media overflow-hidden">
										<div class="card-header border-bottom">
											<h3 class="card-title">Nesting Media Object</h3>
										</div>
										<div class="card-body overflow-hidden">
											<div class="example">
												<div class="media mt-0">
													<img class="avatar avatar-lg brround me-3 mb-4" src="{{asset('assets/images/faces/3.jpg')}}" alt="Generic placeholder image">
													<div class="media-body overflow-hidden text-muted">
														<h4 class="mt-0 text-dark">Media heading</h4>
															Duo sanctus diam dolores sed justo dolor sadipscing kasd amet. Lorem clita dolor at elitr diam et, invidunt kasd no elitr diam ipsum lorem, diam.
														<div class="media mt-5">
															<img class="avatar avatar-lg brround me-3 mb-4" src="{{asset('assets/images/faces/4.jpg')}}" alt="Generic placeholder image">
															<div class="media-body overflow-hidden text-muted">
																<h4 class="mt-0 text-dark">Media heading</h4>
																Ut nonumy sit est amet duo dolores dolor, sanctus amet nonumy et ipsum consetetur, sit magna amet sadipscing ut aliquyam. Takimata rebum dolore sadipscing diam.
															</div>
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
								<div class="col-12">
									<div class="card Relatedpost nested-media">
										<div class="card-header border-bottom">
											<h3 class="card-title">List Media Object</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<ul class="list-unstyled">
													<li class="media mt-0 border-bottom-0">
														<img class="avatar avatar-lg brround me-3 mb-4" src="{{asset('assets/images/faces/5.jpg')}}" alt="Generic placeholder image">
														<div class="media-body text-muted">
															<h4 class="mt-0 mb-1 text-dark">Media heading 01</h4>
															Ut eos ipsum sanctus amet magna, erat duo sanctus dolor takimata stet aliquyam, Aliquyam nonumy et ut dolores dolores diam dolore ea. Dolor accusam no dolores magna et duo sadipscing nonumy at. Duo. magna stet gubergren kasd ut lorem ipsum nonumy eos. Et magna kasd.
														</div>
													</li>
													<li class="media my-5 border-bottom-0">
														<img class="avatar avatar-lg brround me-3 mb-4" src="{{asset('assets/images/faces/6.jpg')}}" alt="Generic placeholder image">
														<div class="media-body text-muted">
															<h4 class="mt-0 mb-1 text-dark">Media heading 02</h4>
															Diam ea aliquyam et diam clita ipsum ea. Sed aliquyam magna erat erat ut clita. Sea dolores gubergren consetetur justo vero aliquyam sadipscing eirmod consetetur ut, sit et consetetur voluptua consetetur. Kasd lorem ea eos. Dolor at sea dolores amet, eos magna nonumy tempor justo.
														</div>
													</li>
													<li class="media border-bottom-0">
														<img class="avatar avatar-lg brround me-3 mb-4" src="{{asset('assets/images/faces/7.jpg')}}" alt="Generic placeholder image">
														<div class="media-body text-muted">
															<h4 class="mt-0 mb-1 text-dark">Media heading 03</h4>
															Diam et clita aliquyam eirmod eos amet justo nonumy ipsum, diam est Dolor eos et dolor voluptua dolore takimata clita stet diam, et stet aliquyam et labore erat. Dolore elitr dolores elitr. diam dolores aliquyam sit est lorem, aliquyam eirmod dolor aliquyam et et clita.
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-4 CLOSED -->

							<!-- ROW-6 OPEN -->
							<div class="row">
								<div class="col-12">
									<div class="card Relatedpost nested-media ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Order Media Object</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="media mt-0">
													<div class="media-body mt-0">
														<h4 class="mt-0 mb-4 text-dark">Media object</h4>
														<p class="text-muted">Ipsum ut amet dolor at gubergren sed ipsum accusam nonumy eos, elitr ipsum duo amet sea. Duo takimata et amet accusam invidunt sed diam, rebum no. Clita et kasd consetetur.</p>
													</div>
													<img class="ms-2 mt-3 mb-3 avatar avatar-lg brround" src="{{asset('assets/images/faces/11.jpg')}}" alt="Generic placeholder image">
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-5 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection

