@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">File Details</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
										<li class="breadcrumb-item active" aria-current="page">File Details</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card custom-card overflow-hidden">
										<div class="card-body p-3">
											<div class="breadcrumb-main">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb mb-0">
													<li class="breadcrumb-item"><a href="{{url('file-manager')}}">Home</a></li>
													<li class="breadcrumb-item"><a href="{{url('file-manager1')}}">File Manager</a></li>
													<li class="breadcrumb-item active" aria-current="page">My Images</li>
													</ol>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-xl-8 col-lg-8 col-md-12">
									<div class="card custom-card overflow-hidden">
										<div class="card-body">
											<a href="javascript:void(0)"><img src="{{asset('assets/images/photos/blogmain3.jpg')}}" alt="img" class="cover-image br-7 w-100"></a>
										</div>
										<div class="card-footer">
											<div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage4.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage1.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage2.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage3.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage4.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage2.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage1.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage3.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
												<div class="item">
													<div class="card">
														<div class="card custom-card overflow-hidden mb-0 ">
															<a href="{{url('file-manager2')}}"><img src="{{asset('assets/images/photos/fileimage3.jpg')}}" class="w-100" alt="img"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">From This Folder</h3>
										</div>
										<div class="card-body">
												<div class="row">
													<div class="col-xl-3 col-md-6 col-sm-6 my-1">
														<div class="card m-0 p-0 border">
															<div class="d-flex align-items-center px-3 pt-3">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
																<div class="float-end ms-auto">
																	<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-info me-3"></i> Info</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-0 text-center">
																<div class="file-manger-icon">
																	<a href="{{url('file-manager2')}}">
																		<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
																	</a>
																</div>
																<h6 class="mb-1 font-weight-semibold">Received</h6>
																<span class="text-muted">1.23gb</span>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-md-6 col-sm-6 my-1">
														<div class="card m-0 p-0 border">
															<div class="d-flex align-items-center px-3 pt-3">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
																<div class="float-end ms-auto">
																	<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-info me-3"></i> Info</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-0 text-center">
																<div class="file-manger-icon">
																	<a href="{{url('file-manager2')}}">
																		<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
																	</a>
																</div>
																<h6 class="mb-1 font-weight-semibold">Download</h6>
																<span class="text-muted">1.23gb</span>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-md-6 col-sm-6 my-1">
														<div class="card m-0 p-0 border">
															<div class="d-flex align-items-center px-3 pt-3">
																<div class="float-end ms-auto">
																	<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-0 text-center">
																<div class="file-manger-icon">
																	<a href="{{url('file-manager2')}}">
																		<img src="{{asset('assets/images/files/word.png')}}" alt="img" class="br-7 img-link">
																	</a>
																</div>
																<h6 class="mb-1 font-weight-semibold">Word document</h6>
																<span class="text-muted">23kb</span>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-md-6 col-sm-6 my-1">
														<div class="card m-0 p-0 border">
															<div class="d-flex align-items-center px-3 pt-3">
																<div class="float-end ms-auto">
																	<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																	</div>
																</div>
															</div>
															<div class="card-body pt-0 text-center">
																<div class="file-manger-icon">
																	<a href="{{url('file-manager2')}}">
																		<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="br-7 img-link">
																	</a>
																</div>
																<h6 class="mb-1 font-weight-semibold">document.pdf</h6>
																<span class="text-muted">23kb</span>
															</div>
														</div>
													</div>
												</div>

										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">
												File Information
											</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap mb-0">
													<tbody>
														<tr>
															<th>File Name</th>
															<td>sample-image.jpg</td>
														</tr>
														<tr>
															<th>File Size</th>
															<td>12.45mb</td>
														</tr>
														<tr>
															<th>Date</th>
															<td>07-10-2021</td>
														</tr>
														<tr>
															<th>Uploaded By</th>
															<td>prityy hnyy</td>
														</tr>
														<tr>
															<th>Width</th>
															<td>1008</td>
														</tr>
														<tr>
															<th>Height</th>
															<td>403</td>
														</tr>
														<tr>
															<th>Format</th>
															<td>jpg</td>
														</tr>
														<tr>
															<th>Location</th>
															<td>storage/My Folder/sample-image.jpg</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Recent Images</h3>
										</div>
										<div class="card-body">
											<ul id="lightgallery" class="list-unstyled row">
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/1.jpg')}}" data-src="{{asset('assets/images/media/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/1.jpg')}}" alt="Thumb-1">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/4.jpg')}}" data-src="{{asset('assets/images/media/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/4.jpg')}}" alt="Thumb-2">
													</a>
												</li>

												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/5.jpg')}}" data-src="{{asset('assets/images/media/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/5.jpg')}}" alt="Thumb-1">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/6.jpg')}}" data-src="{{asset('assets/images/media/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/6.jpg')}}" alt="Thumb-2">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/7.jpg')}}" data-src="{{asset('assets/images/media/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/7.jpg')}}" alt="Thumb-1">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/8.jpg')}}" data-src="{{asset('assets/images/media/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/8.jpg')}}" alt="Thumb-2">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 mb-md-0 mb-xl-0  border-bottom-0" data-responsive="{{asset('assets/images/media/11.jpg')}}" data-src="{{asset('assets/images/media/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive mb-0 br-5" src="{{asset('assets/images/media/11.jpg')}}" alt="Thumb-1">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-xl-0 mb-md-0 mb-md-0 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/10.jpg')}}" data-src="{{asset('assets/images/media/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive mb-0 br-5" src="{{asset('assets/images/media/10.jpg')}}" alt="Thumb-2">
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/2.jpg')}}" data-src="{{asset('assets/images/media/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="javascript:void(0)">
														<img class="img-responsive br-5" src="{{asset('assets/images/media/2.jpg')}}" alt="Thumb-2">
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- Internal Owl Carousel js-->
		<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/carousel.js')}}"></script>

		<!-- GALLERY JS -->
		<script src="{{asset('assets/plugins/gallery/picturefill.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lightgallery.js')}}"></script>
		<script src="{{asset('assets/plugins/gallery/lightgallery-1.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-share.js')}}"></script>

        @endsection

