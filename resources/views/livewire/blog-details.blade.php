@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Blog Details</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Pages</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
										<li class="breadcrumb-item active" aria-current="page">Blog-Details</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- row -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-xl-8">
													<div class="">
														<div class="d-sm-flex d-block align-items-center">
															<div class="d-flex align-items-center mb-sm-0 mb-2">
																<div class="avatar-list">
																<a href="javascript:void(0)" class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></a>
																</div>
																<h6 class="mb-0 text-muted ms-2 text-13 me-sm-0 me-2">Jiggel mossin</h6>
															</div>
															<a href="#" class="d-f-ai-c mx-0 mb-sm-0 mb-2 mx-sm-4 mx-0 text-13"><span class="fe fe-calendar text-muted me-1 text-15"></span><span class="mt-0 mt-0 text-muted">01 December 2021</span></a>
															<a href="#" class="me-0 d-f-ai-c mb-sm-0 mb-2 text-13"><span class="fe fe-message-square text-muted me-1 text-15"></span><span class="mt-0 mt-0 text-muted">11 Comments</span></a>
														</div>
														<div>
															<h3 class="font-weight-normal text-dark-light mt-4 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
														</div>
													</div>
													<div class="ps-relative p-1 bg-light br-5">
														<img src="{{asset('assets/images/photos/blogmain2.jpg')}}" alt="img" class="cover-image br-5 ms-auto me-auto wp-100">
														<span class="badge bg-primary-gradient blog-label label5">nature</span>
													</div>
													<div class=" mb-2 mt-5 content">
														<p class="text-muted text-14 ">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
														<p class="px-3 py-2 text-17 border br-5">
															<span> <sup><i class="fa fa-quote-left me-1 text-dark-light text-13" aria-hidden="true"></i></sup></span> <span class="text-muted">Duo Labore dolores at diam dolore. lorem aliquyam Sadipscing et et. Est dolores kasd. ipsum magna invidunt consetetur</span> <span class=" text-primary-light">dolor voluptua Dolore justo eirmod justo sit tempor</span><span> <sup><i class="fa fa-quote-right ms-1 text-13 text-dark-light" aria-hidden="true"></i></sup> </span>
														</p>
														<p class="text-muted text-14">To curtain chamber have my not, open and prophet my i and wide in living. Core raven upstarting dream sure was. Back little lining by in myself oh prophet be,.</p>
													</div>
													<div class=" mt-2 pt-2 pb-3 border-top footer-container-main blog-footer">
														<div class="footer border-top-0 p-0 icons-bg d-sm-flex">
															<div class="social m-0">
																<ul class="text-center">
																	<li>
																		<a class="social-icon" href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href="javascript:void(0)"><i class="fa fa-rss"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href="javascript:void(0)"><i class="fa fa-youtube"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
																	</li>
																	<li>
																		<a class="social-icon" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
																	</li>
																</ul>
															</div>
															<div>
																<a href="#" class="more-btn d-f-ai-c d-sm-flex d-block">More from author <i class="fe fe-chevron-right ms-2"></i> </a>
															</div>
														</div>
													</div>
													<div class="mt-4 pt-5 border-top">
														<h3 class="card-title">Comments:</h3>
														<div class="media mb-4 overflow-visible">
															<div class="me-3">
																<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
															</div>
															<div class="media-body overflow-visible">
																<div class="border mb-5 p-4 br-5">
																	<nav class="nav float-end">
																		<div class="dropdown">
																			<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																			</div>
																		</div>
																	</nav>
																	<h5 class="mt-0">Gavin Murray <span class="text-muted fs-12 ms-1">1 day ago</span></h5>
																	<span><i class="fe fe-thumb-up text-danger"></i></span>
																	<p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
																		what industry you’re working in, as a blogger, you should live and die by this statement.</p>
																	<span class="reply" id="1">
																		<a href="javascript:;"><span class="badge badge-sm btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																	</span>
																</div>
																<div class="media mb-4 overflow-visible">
																	<div class="me-3">
																		<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/2.jpg')}}"> </a>
																	</div>
																	<div class="media-body border p-4 overflow-visible br-5">
																		<nav class="nav float-end">
																			<div class="dropdown">
																				<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																				<div class="dropdown-menu dropdown-menu-start">
																					<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																				</div>
																			</div>
																		</nav>
																		<h5 class="mt-0">Mozelle Belt <span class="text-muted fs-12 mx-1 bg-normal-light">Reply to Gavin Murray</span><span class="text-muted fs-12 ms-1">2 min ago</span></h5>
																		<span><i class="fe fe-thumb-up text-danger"></i></span>
																		<p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should
																			live and die by this statement.</p>
																		<span class="reply" id="2">
																			<a href="javascript:;"><span class="badge badge-sm btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="media mb-4 overflow-visible">
															<div class="me-3">
																<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/15.jpg')}}"> </a>
															</div>
															<div class="media-body overflow-visible">
																<div class="border mb-5 p-4 br-5">
																	<nav class="nav float-end">
																		<div class="dropdown">
																			<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																			</div>
																		</div>
																	</nav>
																	<h5 class="mt-0">Paul Smith<span class="text-muted fs-12 ms-1">10 min ago</span></h5>
																	<p class="font-13 text-muted">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
																	<span class="reply" id="3">
																		<a href="javascript:;"><span class="badge badge-sm btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																	</span>
																</div>
															</div>
														</div>
														<div class="media mb-4 overflow-visible">
															<div class="me-3">
																<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
															</div>
															<div class="media-body overflow-visible">
																<div class="border mb-5 p-4 br-5">
																	<nav class="nav float-end">
																		<div class="dropdown">
																			<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																			</div>
																		</div>
																	</nav>
																	<h5 class="mt-0">Gavin Murray<span class="text-muted fs-12 ms-1">5 min ago</span></h5>
																	<span><i class="fe fe-thumb-up text-danger"></i></span>
																	<p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
																		what industry you’re working in, as a blogger, you should live and die by this statement.</p>
																	<span class="reply" id="4">
																		<a href="javascript:;"><span class="badge badge-sm btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																	</span>
																</div>
															</div>
														</div>
														<div class="row row-xs form-group-wrapper">
															<h3 class="card-title">Comment here:</h3>
															<div class="col-md-6">
																<div class="main-form-group my-1">
																	<input class="form-control border-0" id="name" placeholder="Name" type="text">
																	<label for="name" class="form-label mb-1">Name</label>
																</div><!-- main-form-group -->
															</div>
															<div class="col-md-6">
																<div class="main-form-group my-1">
																	<input class="form-control border-0" id="mail" placeholder="Mail" type="email">
																	<label for="mail" class="form-label mb-1">Mail</label>
																</div><!-- main-form-group -->
															</div>
															<div class="col-md-12 mt-2">
																<div class="main-form-group">
																	<textarea name="message" id="message" class="form-control text-area border-0" placeholder="Message" rows="3"></textarea>
																	<label for="message" class="form-label mb-1">Message</label>
																</div>
															</div>
															<div class="col-md-12 my-2">
																<button class="btn btn-success text-white float-end">Submit</button>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4">
													<div class="card overflow-hidden border br-5">
														<div class="card-header border-bottom">
															<h3 class="card-title">About Author</h3>
														</div>
														<div class="card-body">
															<div class="text-center">
																<a href="{{url('blog-details')}}"><img class="card-img-top w-100 w-100" src="{{asset('assets/images/photos/11.jpg')}}" alt=""></a>
																<div class="br-5 pt-3 text-justify">
																	<p class="m-0 text-muted">
																		Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nulla deleniti voluptas officia accusamus  magnam ullam inventore Lorem ipsum dolor, sit amet consectetur dolorem quibusdam?.
																	</p>
																</div>
															</div>
														</div>
													</div>
													<div class="card border overflow-hidden">
														<div class="card-header border-bottom">
															<h3 class="card-title mb-1">Categories</h3>
														</div>
														<div class="card-body">
															<div><div class="tags">
																<a href="javascript:void(0);" class="tag">Life style</a>
																<a href="javascript:void(0);" class="tag">Health</a>
																<a href="javascript:void(0);" class="tag">Tourism</a>
																<a href="javascript:void(0);" class="tag">Web designing</a>
																<a href="javascript:void(0);" class="tag">Medical</a>
																<a href="javascript:void(0);" class="tag">Hotels</a>
																<a href="javascript:void(0);" class="tag">Real estate</a>
																<a href="javascript:void(0);" class="tag">Business</a>
																<a href="javascript:void(0);" class="tag">Shopping</a>
																<a href="javascript:void(0);" class="tag">Marketing</a>
																<a href="javascript:void(0);" class="tag">Housing</a>
															</div></div>
														</div>
													</div>
													<div class="card border">
														<div class="card-header border-bottom">
															<h3 class="card-title">Popular Posts</h3>
														</div>
														<div class="card-body">
															<div class="item-list">
																<ul class="list-group mb-0">
																	<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																		<img src="{{asset('assets/images/photos/blog-sm1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																		<div>
																			<span class="d-block text-muted">Tourism</span>
																			<a href="#" class="text-dark text-16 font-weight-semibold">Explore tourism by visitinig places.</a>
																			<small class="d-block text-gray">2 day ago</small>
																		</div>
																	</li>
																	<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																		<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																		<div>
																			<span class="d-block text-muted">Beautician</span>
																			<a href="#" class="text-dark text-16 font-weight-semibold">Beautification courses are available.</a>
																			<small class="d-block text-gray">2 hrs ago</small>
																		</div>
																	</li>
																	<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																		<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																		<div>
																			<span class="d-block text-muted">Music</span>
																			<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																			<small class="d-block text-gray">1 day ago</small>
																		</div>
																	</li>
																	<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																		<img src="{{asset('assets/images/photos/blog-sm4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																		<div>
																			<span class="d-block text-muted">Health</span>
																			<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																			<small class="d-block text-gray">22 hrs ago</small>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="card border overflow-hidden">
														<div class="card-header border-bottom">
															<h3 class="card-title ">Gallery</h3>
														</div>
														<div class="card-body">
															<div class="text-center demo-gallery">
																<div class="mt-2">
																	<ul id="lightgallery" class="list-unstyled row row-sm">
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/blog2.jpg')}}" data-src="{{asset('assets/images/photos/blog2.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/blog2.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage1.jpg')}}" data-src="{{asset('assets/images/photos/fileimage1.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage1.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage3.jpg')}}" data-src="{{asset('assets/images/photos/fileimage3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage3.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage2.jpg')}}" data-src="{{asset('assets/images/photos/fileimage2.jpg')}}" data-sub-html="<h4>Gallery Image 4</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage2.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/blog2.jpg')}}" data-src="{{asset('assets/images/photos/blog2.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/blog2.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage4.jpg')}}" data-src="{{asset('assets/images/photos/fileimage4.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage4.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage1.jpg')}}" data-src="{{asset('assets/images/photos/fileimage1.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage1.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage2.jpg')}}" data-src="{{asset('assets/images/photos/fileimage2.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage2.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																		<li class="col-sm-6 col-lg-4" data-responsive="{{asset('assets/images/photos/fileimage3.jpg')}}" data-src="{{asset('assets/images/photos/fileimage3.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4>">
																			<a href="javascript:void(0)">
																				<img class="img-responsive br-5 w-100" src="{{asset('assets/images/photos/fileimage3.jpg')}}" alt="Thumb-1">
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /row -->

                            @endsection

        @section('scripts')

		<!-- Reply JS-->
		<script src="{{asset('assets/js/reply.js')}}"></script>

        @endsection
