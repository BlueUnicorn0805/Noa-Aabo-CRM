@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Gallery</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Gallery</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- GALLERY DEMO OPEN -->
							<div class="demo-gallery card">
								<div class="card-header">
									<div class="card-title">Light Gallery</div>
								</div>
								<div class="card-body">
									<ul id="lightgallery" class="list-unstyled row">
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/1.jpg')}}" data-src="{{asset('assets/images/media/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/1.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/4.jpg')}}" data-src="{{asset('assets/images/media/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/4.jpg')}}" alt="Thumb-2">
											</a>
										</li>

										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/5.jpg')}}" data-src="{{asset('assets/images/media/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/5.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/6.jpg')}}" data-src="{{asset('assets/images/media/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/6.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/7.jpg')}}" data-src="{{asset('assets/images/media/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/7.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/8.jpg')}}" data-src="{{asset('assets/images/media/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/8.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 mb-md-0 mb-xl-0  border-bottom-0" data-responsive="{{asset('assets/images/media/11.jpg')}}" data-src="{{asset('assets/images/media/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive mb-0 br-5 wp-100" src="{{asset('assets/images/media/11.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-xl-0 mb-md-0 mb-md-0 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/10.jpg')}}" data-src="{{asset('assets/images/media/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive mb-0 br-5 wp-100" src="{{asset('assets/images/media/10.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/2.jpg')}}" data-src="{{asset('assets/images/media/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive br-5 wp-100" src="{{asset('assets/images/media/2.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/9.jpg')}}" data-src="{{asset('assets/images/media/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive mb-0 br-5 wp-100" src="{{asset('assets/images/media/9.jpg')}}" alt="Thumb-1">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-0 mb-xl-0 border-bottom-0" data-responsive="{{asset('assets/images/media/12.jpg')}}" data-src="{{asset('assets/images/media/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive mb-0 br-5 wp-100" src="{{asset('assets/images/media/12.jpg')}}" alt="Thumb-2">
											</a>
										</li>
										<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="{{asset('assets/images/media/9.jpg')}}" data-src="{{asset('assets/images/media/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
											<a href="javascript:void(0)">
												<img class="img-responsive mb-0 br-5 wp-100" src="{{asset('assets/images/media/20.jpg')}}" alt="Thumb-1">
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- GALLERY DEMO CLOSED -->

							<!-- PAGINATION OPEN -->
							<div class="row mb-5">
								<div class="col-md-6 mt-1 d-none d-md-block">1 - 10 of 234 photos</div>
								<div class="col-md-6">
									<div class="float-end">
										<ul class="pagination">
											<li class="page-item page-prev disabled">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item page-next">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- PAGINATION CLOSED -->

                            @endsection

        @section('scripts')

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
