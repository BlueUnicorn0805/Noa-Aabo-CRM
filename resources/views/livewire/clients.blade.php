@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Clients</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Clients</a></li>
										<li class="breadcrumb-item active" aria-current="page">Clients</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row clients-contacts-main">
								<div class="col-md-12 col-xl-12">
									<div class="card">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-xl col-lg-6 col-md-12">
													<div class="btn-list">
														<a href="{{url('client-create')}}" class="btn btn-primary">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
															Add Client
														</a>
														<a href="#" class="btn btn-outline-primary group-update-btn">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
															Group Update
														</a>
														<a href="#" role="button" class="btn btn-outline-danger">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.5,6h-2H16V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-3C9.119873,2.0014648,8.0014648,3.119873,8,4.5V6H5.5C5.4998169,6,5.4996338,6,5.4993896,6H3.5C3.223877,6,3,6.223877,3,6.5S3.223877,7,3.5,7H5v12.5c0.0014648,1.380127,1.119873,2.4985352,2.5,2.5h9c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5V7h1.5C20.776123,7,21,6.776123,21,6.5S20.776123,6,20.5,6z M9,4.5C9.0009155,3.671936,9.671936,3.0009155,10.5,3h3c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6H9V4.5z M18,19.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-9c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V7h2.5h7h0.0006104H18V19.5z"/></svg>
															Delete All
														</a>
													</div>
												</div>
												<div class="col-xl-4 col-lg-6 col-md-12 mt-1 mt-lg-0">
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Search in clients.....">
														<button class="btn ripple btn-primary text-white input-group-text border-0" type="button">Search</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/16.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Jeremy Gilbert</a></h4>
													<span class="text-muted">Spain, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">773</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">16</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/1.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Bonnie Donnavan</a></h4>
													<span class="text-muted">Japan, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">1275</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">753</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/2.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Rebbaca wisely</a></h4>
													<span class="text-muted">Japan, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">1275</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">753</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/15.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Thomas Jaim</a></h4>
													<span class="text-muted">Japan, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">521</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">238</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/3.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Skyler Hilda</a></h4>
													<span class="text-muted">New York, UK</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">125</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">73</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/5.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Victoria</a></h4>
													<span class="text-muted">New York, UK</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">113</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">19</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/1.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Bonnie Donnavan</a></h4>
													<span class="text-muted">Japan, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">1275</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">753</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/2.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Rebbaca wisely</a></h4>
													<span class="text-muted">Japan, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">1275</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">753</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/16.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Jeremy Gilbert</a></h4>
													<span class="text-muted">Spain, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">773</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">16</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/3.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Skyler Hilda</a></h4>
													<span class="text-muted">New York, UK</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">125</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">73</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/5.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Victoria</a></h4>
													<span class="text-muted">New York, UK</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">113</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">19</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-xl-4 col-sm-12">
									<div class="card mb-5">
										<div class="card-body">
											<div class="client-title mt-0">
												<figure class="rounded-circle align-self-start mb-0">
													<img src="{{asset('assets/images/users/15.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-lg me-3">
												</figure>
												<div class="media-body">
													<h4 class="time-title p-0 mb-0 font-weight-semibold leading-normal"><a href="javascript:void(0)" class="text-dark">Thomas Jaim</a></h4>
													<span class="text-muted">Japan, UN</span>
												</div>
												<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
												<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
											</div>
											<div class="d-flex align-items-center justify-content-center mt-4">
												<div class="pe-4 border-end d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Projects</h5>
													<p class="m-0 text-dark">521</p>
												</div>
												<div class="ms-4 d-flex align-items-center justify-content-center">
													<h5 class="mb-0 me-3 text-muted">Tasks</h5>
													<p class="m-0 text-dark">238</p>
												</div>
											</div>
										</div>
										<div class="card-footer border-top p-3">
											<div class="footer p-0 icons-bg border-0 d-flex">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="fa fa-facebook text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="fa fa-twitter text-15-f"></i></a>
														</li>
														<li>
															<a class="social-icon hpx-35 wpx-35 d-flex align-items-center justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="fa fa-linkedin text-15-f"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

        @endsection
