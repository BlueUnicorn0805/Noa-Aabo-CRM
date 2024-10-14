@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Blog</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Pages</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
										<li class="breadcrumb-item active" aria-current="page">Blog</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- row -->
							<div class="row">
								<div class="col-xl-8 col-lg-7 col-md-12">
									<div class="card overflow-hidden">
										<a href="{{url('blog-details')}}" class="card custom-card background-image-blog img1 mb-0">
											<span class="badge rounded-pill bg-primary-gradient blog-label label1">nature</span>
										</a>
										<div class="card-body">
											<a href="#" class="text-dark blog-title">Best Place To visit For a Holiday!</a>
											<p class="mb-0 text-muted mt-4">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
											<p class="text-muted">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
											<a href="{{url('blog-details')}}" class="btn btn-outline-primary mt-2">Read More</a>
										</div>
										<div class="card-footer">
											<div class="d-sm-flex align-items-center">
												<div class="avatar-list indicators">
													<a href="javascript:void(0)" class="avatar avatar-md rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></a>
												</div>
												<h6 class="mb-0 text-muted ms-sm-2 mt-sm-0 mt-2">Jiggel mossin</h6>
												<div class="d-sm-flex ms-sm-auto">
													<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0   text-muted">Dec-01-2021</div></a>
													<a class="me-0 d-flex" href="#"><span class="fe fe-message-square text-muted me-2 text-17"></span><div class="mt-0 mt-0   text-muted">11 Comments</div></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12">
									<div class="card overflow-hidden">
										<div class="">
											<div class="card-header border-bottom d-block">
												<div class="tabs-menu">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li><a href="#trending" class="my-1 active me-1 text-default" data-bs-toggle="tab">Trending</a></li>
														<li><a href="#popular" data-bs-toggle="tab" class="my-1 me-1 text-default">Popular</a></li>
														<li><a href="#recent" data-bs-toggle="tab" class="my-1 me-1 text-default">Recent</a></li>
														<li><a href="#editorpicks" data-bs-toggle="tab" class="my-1 text-default">Editor Picks</a></li>
													</ul>
												</div>
											</div>
											<div class="card-body">
												<div class="tab-content">
													<div class="tab-pane active" id="trending">
														<div class="item-list">
															<ul class="list-group mb-0">
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Tourism</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Explore tourism by visitinig places.</a>
																		<small class="d-block text-muted">2 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Beautician</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Beautification courses are available.</a>
																		<small class="d-block text-muted">2 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Literature</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">English and spanish classes in Your way</a>
																		<small class="d-block text-muted">1 week ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pt-0 pb-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="tab-pane" id="popular">
														<div class="item-list">
															<ul class="list-group mb-0">
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Tourism</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Explore tourism by visitinig places.</a>
																		<small class="d-block text-muted">2 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Beautician</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Beautification courses are available.</a>
																		<small class="d-block text-muted">2 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Literature</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">English and spanish classes in Your way</a>
																		<small class="d-block text-muted">1 week ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pt-0 pb-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="tab-pane" id="recent">
														<div class="item-list">
															<ul class="list-group mb-0">
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Tourism</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Explore tourism by visitinig places.</a>
																		<small class="d-block text-muted">2 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Beautician</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Beautification courses are available.</a>
																		<small class="d-block text-muted">2 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Literature</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">English and spanish classes in Your way</a>
																		<small class="d-block text-muted">1 week ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pt-0 pb-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="tab-pane" id="editorpicks">
														<div class="item-list">
															<ul class="list-group mb-0">
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Tourism</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Explore tourism by visitinig places.</a>
																		<small class="d-block text-muted">2 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Beautician</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Beautification courses are available.</a>
																		<small class="d-block text-muted">2 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Literature</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">English and spanish classes in Your way</a>
																		<small class="d-block text-muted">1 week ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Health</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
																		<small class="d-block text-muted">22 hrs ago</small>
																	</div>
																</li>
																<li class="list-group-item d-flex pt-0 pb-0 px-0 border-bottom-0">
																	<img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
																	<div>
																		<span class="d-block text-muted">Music</span>
																		<a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
																		<small class="d-block text-muted">1 day ago</small>
																	</div>
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
							<!-- /row -->

							<!-- row -->
							<div class="row">
								<div class="col-xl-8 col-lg-7 col-md-12">
									<!--card-->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Editor Picks <span class="badge rounded-pill badge-sm bg-danger">hot</span> </h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xl-6 col-md-12 my-2 p-xl-max-0">
													<div class="card overflow-hidden box-shadow mb-0 main-blog">
														<a href="{{url('blog-details')}}" class="background-image-blog img2 mb-0">
															<span class="badge rounded-pill bg-info-gradient blog-label label2">Technology</span>
														</a>
														<div class="card-body p-0 border border-top-0 br-br-5 br-bl-5 mb-2 mb-lg-0">
															<div class="p-5 border-bottom">
																<a href="#" class="text-dark blog-title">Make your !phone faster</a>
																<p class="mb-0 text-muted mt-4">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
															</div>
															<div class="d-sm-flex p-5 align-items-center">
																<div class="avatar-list indicators">
																	<a href="javascript:void(0)" class="avatar avatar-md rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></a>
																</div>
																<h6 class="mb-0 text-muted ms-sm-2 mt-sm-0 mt-2">Jiggel mossin</h6>
																<div class="d-sm-flex ms-sm-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0   text-muted">Dec-01-2021</div></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-md-12">
													<div class="row mb-5">
														<div class="col-xl-4 col-md-4 col-sm-4 pe-sm-0 p-sm-max-0">
															<a href="#">
																<img src="{{asset('assets/images/photos/blog-sug1.jpg')}}" alt="editor-picks" class="wp-100 editorpick-suggestion-img h-100">
															</a>
														</div>
														<div class="col-xl-8 col-md-8 col-sm-8 editorpicks-suggestions border p-2 br-sm-max-0">
															<a href="#" class="text-dark mb-4 blog-title">Don't you think plants are dying? 5 easy ways to grow plants anywhere!</a>
															<div class="d-md-flex mt-0">
																<a href="#" class="d-flex"><span class="fe fe-user text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
																<div class="d-flex ms-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
																</div>
															</div>
														</div>
													</div>
													<div class="row mb-5">
														<div class="col-xl-4 col-md-4 col-sm-4 pe-sm-0 p-sm-max-0">
															<a href="#">
																<img src="{{asset('assets/images/photos/blog-sug2.jpg')}}" alt="editor-picks" class="wp-100 editorpick-suggestion-img h-100">
															</a>
														</div>
														<div class="col-xl-8 col-md-8 col-sm-8 editorpicks-suggestions border p-2 br-sm-max-0">
															<a href="#" class="text-dark mb-4 blog-title">Making money online with zero investing real or spam! Short blog on online money</a>
															<div class="d-md-flex mt-0">
																<a href="#" class="d-flex"><span class="fe fe-user text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
																<div class="d-flex ms-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
																</div>
															</div>
														</div>
													</div>
													<div class="row mb-5">
														<div class="col-xl-4 col-md-4 col-sm-4 pe-sm-0 p-sm-max-0">
															<a href="#">
																<img src="{{asset('assets/images/photos/blog-sug3.jpg')}}" alt="editor-picks" class="wp-100 editorpick-suggestion-img h-100">
															</a>
														</div>
														<div class="col-xl-8 col-md-8 col-sm-8 editorpicks-suggestions border p-2 br-sm-max-0">
															<a href="#" class="text-dark mb-4 blog-title">10 best natural food habits to stay healthy and fit</a>
															<div class="d-md-flex mt-0">
																<a href="#" class="d-flex"><span class="fe fe-user text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
																<div class="d-flex ms-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
																</div>
															</div>
														</div>
													</div>
													<div class="row mb-5">
														<div class="col-xl-4 col-md-4 col-sm-4 pe-sm-0 p-sm-max-0">
															<a href="#">
																<img src="{{asset('assets/images/photos/blog-sug4.jpg')}}" alt="editor-picks" class="wp-100 editorpick-suggestion-img h-100">
															</a>
														</div>
														<div class="col-xl-8 col-md-8 col-sm-8 editorpicks-suggestions border p-2 br-sm-max-0">
															<a href="#" class="text-dark mb-4 blog-title">Exploring the world... Facts everyone must know about the world!</a>
															<div class="d-md-flex mt-0">
																<a href="#" class="d-flex"><span class="fe fe-user text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
																<div class="d-flex ms-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-xl-4 col-md-4 col-sm-4 pe-sm-0 p-sm-max-0">
															<a href="#">
																<img src="{{asset('assets/images/photos/blog-sug5.jpg')}}" alt="editor-picks" class="wp-100 editorpick-suggestion-img h-100">
															</a>
														</div>
														<div class="col-xl-8 col-md-8 col-sm-8 editorpicks-suggestions border p-2 br-sm-max-0">
															<a href="#" class="text-dark mb-4 blog-title">What is economy? Basic knowledge abut economy one should know!</a>
															<div class="d-md-flex mt-0">
																<a href="#" class="d-flex"><span class="fe fe-user text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Anna Ogden</div></a>
																<div class="d-flex ms-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0  font-weight-semibold text-muted">Jan-18-2020</div></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--card closed-->

									<!--card-->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Trending <span class="badge rounded-pill badge-sm bg-danger">hot</span> </h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xl-6 col-md-12">
													<div class="card overflow-hidden box-shadow mb-0 main-blog my-xl-0 my-2">
														<a href="{{url('blog-details')}}" class="background-image-blog img3 mb-0">
															<span class="badge rounded-pill bg-warning-gradient blog-label label3">Inspiration</span>
														</a>
														<div class="card-body p-0 border border-top-0 br-br-5 br-bl-5">
															<div class="p-5 border-bottom">
																<a href="#" class="text-dark blog-title">One big move! A simple short note that will change your life</a>
																<p class="mb-0 text-muted mt-4">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
															</div>
															<div class="d-sm-flex p-5 align-items-center">
																<div class="avatar-list indicators">
																	<a href="javascript:void(0)" class="avatar avatar-md rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></a>
																</div>
																<h6 class="mb-0 text-muted ms-sm-2 mt-sm-0 mt-2">Jiggel mossin</h6>
																<div class="d-sm-flex ms-sm-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0   text-muted">Dec-01-2021</div></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-md-12">
													<div class="card overflow-hidden box-shadow mb-0 main-blog">
														<a href="{{url('blog-details')}}" class="background-image-blog img4 mb-0">
															<span class="badge rounded-pill bg-success-gradient blog-label label2">Knowledge</span>
														</a>
														<div class="card-body p-0 border border-top-0 br-br-5 br-bl-5">
															<div class="p-5 border-bottom">
																<a href="#" class="text-dark blog-title">What is economy? Basic knowledge about economy one should know!</a>
																<p class="mb-0 text-muted mt-4">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
															</div>
															<div class="d-sm-flex p-5 align-items-center">
																<div class="avatar-list indicators">
																	<a href="javascript:void(0)" class="avatar avatar-md rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></a>
																</div>
																<h6 class="mb-0 text-muted ms-sm-2 mt-2 mt-sm-0">Jiggel mossin</h6>
																<div class="d-sm-flex ms-sm-auto">
																	<a href="#" class="d-flex me-3"><span class="fe fe-calendar text-muted me-2 text-17"></span><div class="mt-0 mt-0   text-muted">Dec-01-2021</div></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--card closed-->

								</div><!--col closed-->

								<div class="col-xl-4 col-lg-5 col-md-12">
									<!--card-->
									<div class="card overflow-hidden">
										<div class="card-header border-bottom">
											<h3 class="card-title">Topics</h3>
										</div>
										<div class="card-body p-0">
											<ul class="list-group blog-topics">
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Lifestyle</a><span class="tag float-end">10</span></li>
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Nature</a><span class="tag float-end">8</span></li>
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Healthcare</a><span class="tag float-end">3</span></li>
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Inspiration</a><span class="tag float-end">5</span></li>
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Fashion</a><span class="tag float-end">8</span></li>
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Politics</a><span class="tag float-end">3</span></li>
												<li class="list-group-item"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Culture</a><span class="tag float-end">5</span></li>
												<li class="list-group-item border-bottom-0"><a href="#" class="text-dark-light"><i class="fe fe-chevron-right me-2"></i>Technology</a><span class="tag float-end">15</span></li>
											</ul>
										</div>
									</div>
									<!--card closed-->

									<!--card-->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Blog Authors</h3>
										</div>
										<div class="card-body">
											<ul class="list-group blog-autors">
												<li class="list-group-item">
													<a href="#" class="text-dark-light">
														<div class="media mt-0 d-sm-flex d-block">
															<img class="avatar-md rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/11.jpg')}}" alt="Image description">
															<div class="media-body d-sm-flex d-block">
																<div class="d-flex align-items-center">
																	<div class="mt-1">
																		<h5 class="mb-1 text-dark-light">Allie Grater</h5>
																		<p class="mb-0 text-13 text-muted">User ID: #1234</p>
																	</div>
																</div>
															</div>
														</div>
														<span class="badge rounded-pill bg-danger-transparent text-danger float-end">12 hrs ago</span>
													</a>
												</li>
												<li class="list-group-item">
													<a href="#" class="text-dark-light">
														<div class="media mt-0 d-sm-flex d-block">
															<img class="avatar-md rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/7.jpg')}}" alt="Image description">
															<div class="media-body d-sm-flex d-block">
																<div class="d-flex align-items-center">
																	<div class="mt-1">
																		<h5 class="mb-1 text-dark-light">Emilia Clarke</h5>
																		<p class="mb-0 text-13 text-muted">User ID: #1243</p>
																	</div>
																</div>
															</div>
														</div>
														<span class="badge rounded-pill bg-success-transparent text-success float-end">3 hrs ago</span>
													</a>
												</li>
												<li class="list-group-item">
													<a href="#" class="text-dark-light">
														<div class="media mt-0 d-sm-flex d-block">
															<img class="avatar-md rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/5.jpg')}}" alt="Image description">
															<div class="media-body d-sm-flex d-block">
																<div class="d-flex align-items-center">
																	<div class="mt-1">
																		<h5 class="mb-1 text-dark-light">Jessica Stallin</h5>
																		<p class="mb-0 text-13 text-muted">User ID: #1432</p>
																	</div>
																</div>
															</div>
														</div>
														<span class="badge rounded-pill bg-danger-transparent text-danger float-end">11 hrs ago</span>
													</a>
												</li>
												<li class="list-group-item">
													<a href="#" class="text-dark-light">
														<div class="media mt-0 d-sm-flex d-block">
															<img class="avatar-md rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/8.jpg')}}" alt="Image description">
															<div class="media-body">
																<div class="d-flex align-items-center">
																	<div class="mt-1">
																		<h5 class="mb-1 text-dark-light">Saira Olay</h5>
																		<p class="mb-0 text-13 text-muted">User ID: #3214</p>
																	</div>
																</div>
															</div>
														</div>
														<span class="badge rounded-pill bg-success-transparent text-success float-end">5 hrs ago</span>
													</a>
												</li>
												<li class="list-group-item">
													<a href="#" class="text-dark-light">
														<div class="media mt-0 d-sm-flex d-block">
															<img class="avatar-md rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/4.jpg')}}" alt="Image description">
															<div class="media-body">
																<div class="d-flex align-items-center">
																	<div class="mt-1">
																		<h5 class="mb-1 text-dark-light">Sansa Taylor</h5>
																		<p class="mb-0 text-13 text-muted">User ID: #4321</p>
																	</div>
																</div>
															</div>
														</div>
														<span class="badge rounded-pill bg-success-transparent text-success float-end">4 hrs ago</span>
													</a>
												</li>
												<li class="list-group-item border-bottom-0">
													<a href="#" class="text-dark-light">
														<div class="media mt-0 d-sm-flex d-block">
															<img class="avatar-md rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/2.jpg')}}" alt="Image description">
															<div class="media-body">
																<div class="d-flex align-items-center">
																	<div class="mt-1">
																		<h5 class="mb-1 text-dark-light">Jessi Jane</h5>
																		<p class="mb-0 text-13 text-muted">User ID: #3412</p>
																	</div>
																</div>
															</div>
														</div>
														<span class="badge rounded-pill bg-danger-transparent text-danger float-end">10 hrs ago</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!--card closed-->

								</div><!--col closed-->
							</div>
							<!-- /row -->

							<ul class="pagination product-pagination ms-auto float-end mb-4">
								<li class="page-item page-prev disabled"><a class="page-link" href="#" tabindex="-1">Prev</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item page-next"><a class="page-link" href="#">Next</a></li>
							</ul>

                            @endsection

        @section('scripts')

        @endsection
