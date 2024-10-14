@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Avatar</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Avatar</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row row-deck">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom d-block">
											<h3 class="card-title mb-2">Avatar Sizes</h3>
											<p class="card-subtitle m-0">An avatar have different sizes.</p>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list indicators">
														<span class="avatar avatar-sm rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></span>
														<span class="avatar avatar-normal rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/3.jpg')}}"></span>
														<span class="avatar avatar-md rounded-circle cover-image offline" data-bs-image-src= "{{asset('assets/images/users/5.jpg')}}"></span>
														<span class="avatar avatar-lg rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
														<span class="avatar avatar-xl rounded-circle cover-image offline" data-bs-image-src= "{{asset('assets/images/users/4.jpg')}}"></span>
														<span class="avatar avatar-xxl rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/7.jpg')}}"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom d-block">
											<h3 class="card-title mb-2">Avatar with Initials</h3>
											<p class="card-subtitle m-0">Avatar contains intials when user profile doesn't exist.</p>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list indicators">
														<span class="avatar avatar-sm rounded-circle bg-secondary fs-10">I</span>
														<span class="avatar avatar-normal rounded-circle bg-info fs-12">DL</span>
														<span class="avatar avatar-md rounded-circle bg-success fs-16">Y</span>
														<span class="avatar avatar-lg rounded-circle bg-warning fs-22 offline">H</span>
														<span class="avatar avatar-xl rounded-circle bg-danger offline">N</span>
														<span class="avatar avatar-xxl rounded-circle bg-dark">YY</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row row-deck">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom d-block">
											<h3 class="card-title mb-2">Avatar Shapes</h3>
											<p class="card-subtitle m-0">An avatar have different shapes.</p>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list indicators">
														<span class="avatar avatar-lg brround cover-image" data-bs-image-src="{{asset('assets/images/users/12.jpg')}}"></span>
														<span class="avatar avatar-lg cover-image mx-3" data-bs-image-src="{{asset('assets/images/users/13.jpg')}}"></span>
														<span class="avatar avatar-lg rounded-circle cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom d-block">
											<h3 class="card-title mb-2">Status Indicator</h3>
											<p class="card-subtitle m-0">An avatar have a status indicator to indicate users availability.</p>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="avatar-list indicators">
														<span class="avatar avatar-xl rounded-circle cover-image  me-2" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
														<span class="avatar avatar-xl rounded-circle cover-image  ms-2 offline" data-bs-image-src= "{{asset('assets/images/users/12.jpg')}}"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row row-deck">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom d-block">
											<h3 class="card-title mb-2">Avatar With Numbers</h3>
											<p class="card-subtitle m-0">Avatar numbers indicates the no. of unread notififactions/messages.</p>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example d-f-ai-c">
													<div class="avatar-container avatar-sm me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/6.jpg')}}">
														<span class="badge rounded-pill bg-primary number-badge">2</span>
													</div>
													<div class="avatar-container avatar-md me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/1.jpg')}}">
														<span class="badge rounded-pill bg-secondary number-badge">11</span>
													</div>
													<div class="avatar-container avatar-lg me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/11.jpg')}}">
														<span class="badge rounded-pill bg-success number-badge">3</span>
													</div>
													<div class="avatar-container avatar-xl me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/5.jpg')}}">
														<span class="badge rounded-pill bg-info number-badge">3</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom d-block">
											<h3 class="card-title mb-2">Avatar With Icons</h3>
											<p class="card-subtitle m-0">Avatar contains icons to perform respective action.</p>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example d-f-ai-c">
													<div class="avatar-container avatar-sm me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/6.jpg')}}">
														<span class="badge bg-primary rounded-pill p-1 avatar-icon-badge"><i class="fe fe-plus"></i></span>
													</div>
													<div class="avatar-container avatar-md me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/1.jpg')}}">
														<span class="badge bg-secondary rounded-pill p-1 avatar-icon-badge"><i class="fe fe-edit"></i></span>
													</div>
													<div class="avatar-container avatar-lg me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/11.jpg')}}">
														<span class="badge bg-info rounded-pill p-1 avatar-icon-badge"><i class="fe fe-plus"></i></span>
													</div>
													<div class="avatar-container avatar-xl me-4">
														<img alt="avatar" class="rounded-circle" src="{{asset('assets/images/faces/5.jpg')}}">
														<span class="badge bg-success rounded-pill p-1 avatar-icon-badge"><i class="fe fe-camera"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="card">
								<div class="card-header border-bottom d-block">
									<h3 class="card-title mb-2">Avatar radius</h3>
									<p class="card-subtitle m-0">Group of Avatars Stacked together.</p>
								</div>
								<div class="card-body d-flex row">
									<div class="col-md-12 col-lg-6 my-1">
										<div class="text-wrap ">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar avatar-lg rounded-circle bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
													<span class="avatar avatar-lg rounded-circle bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/7.jpg')}}"></span>
													<span class="avatar avatar-lg rounded-circle bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
													<span class="avatar avatar-lg rounded-circle bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar avatar-lg rounded-circle bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
													<span class="avatar avatar-lg rounded-circle bradius bg-primary">+8</span>
												</div>
											</div>
										</div>

									</div><!-- COL END -->
									<div class="col-md-12 col-lg-6 my-1">
										<div class="text-wrap ">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar avatar-lg bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
													<span class="avatar avatar-lg bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/7.jpg')}}"></span>
													<span class="avatar avatar-lg bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
													<span class="avatar avatar-lg bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/14.jpg')}}"></span>
													<span class="avatar avatar-lg bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
													<span class="avatar avatar-lg bradius bg-primary">+8</span>
												</div>
											</div>
										</div>
									</div><!-- COL END -->
								</div>
							</div>
							<!-- ROW-4 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
