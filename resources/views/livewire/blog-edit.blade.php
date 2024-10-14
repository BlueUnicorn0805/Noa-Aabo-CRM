@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Edit Post</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Pages</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Post</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- row -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-md-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Edit Post</h3>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label for="blogTitle" class="form-label text-dark">Title</label>
												<input type="text" class="form-control" id="blogTitle" value="Best place for vacation">
											</div>
											<div class="form-group">
												<label for="category" class="form-label text-dark">Category</label>
												<select class="form-control select2 form-select" id="category" data-placeholder="Select">
													<option label="default">Select</option>
													<option value="1" selected>IT</option>
													<option value="2">Language</option>
													<option value="3">Science</option>
													<option value="4">Health</option>
													<option value="5">Humanities</option>
													<option value="6">Business</option>
													<option value="7">Maths</option>
													<option value="8">Marketing</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label text-dark" for="instructor">Instructor</label>
												<select class="form-control select2 form-select" id="instructor" data-placeholder="Select">
													<option label="default">Select</option>
													<option value="1" selected>Pedro Cox</option>
													<option value="2">Vera Guzman</option>
													<option value="3">Glenda Long</option>
													<option value="4">Joel Anderson</option>
													<option value="5">Blanche Henderson</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label text-dark">Type of mode</label>
												<div class="d-md-flex ad-post-details">
													<label class="custom-control custom-radio mb-2 me-4">
														<input type="radio" class="custom-control-input" name="radios2" value="option1" checked>
														<span class="custom-control-label"><a href="javascript:void(0)">Online </a></span>
													</label>
													<label class="custom-control custom-radio  mb-2">
														<input type="radio" class="custom-control-input" name="radios2" value="option2" >
														<span class="custom-control-label"><a href="javascript:void(0)">Offline</a></span>
													</label>
												</div>
											</div>
											<div class="ql-wrapper ql-wrapper-demo mb-4">
												<div id="quillEditor">
													<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
													<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
												</div>
											</div>
											<div class="form-group">
												<label class="form-label text-dark">Course Type</label>
												<div class="d-md-flex ad-post-details">
													<label class="custom-control custom-radio mb-2 me-4">
														<input type="radio" class="custom-control-input" name="radios12" value="option1" checked>
														<span class="custom-control-label"><a href="javascript:void(0)">Free </a></span>
													</label>
													<label class="custom-control custom-radio  mb-2">
														<input type="radio" class="custom-control-input" name="radios12" value="option2" >
														<span class="custom-control-label"><a href="javascript:void(0)">Paid</a></span>
													</label>
												</div>
											</div>
											<div class="p-4 border mb-4 form-group">
												<div>
													<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
												</div>
											</div>
											<div class="form-group">
												<label class="form-label" for="videoUrl">Upload Video URL</label>
												<input type="text" class="form-control" id="videoUrl" placeholder="https://videos.com" value="https://www.youtube.com/embed/tMWkeBIohBs">
											</div>
											<div class="control-group form-group  mb-0">
												<label class="form-label text-dark">Course Post Package</label>
												<div class=" border p-3 br-7">
													<div class="d-md-flex ad-post-details">
														<label class="custom-control custom-radio mb-0 me-5">
															<input type="radio" class="custom-control-input" name="radios1" value="option7">
															<span class="custom-control-label">30 Days Free</span>
														</label>
														<label class="custom-control custom-radio  mb-0 me-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option8" checked>
															<span class="custom-control-label">60 days / <span class="font-weight-bold">$20</span></span>
														</label>
														<label class="custom-control custom-radio  mb-0 me-4">
															<input type="radio" class="custom-control-input" name="radios1" value="option9">
															<span class="custom-control-label">6months /<span class="font-weight-bold">$50</span></span>
														</label>
														<label class="custom-control custom-radio  mb-0">
															<input type="radio" class="custom-control-input" name="radios1" value="option10">
															<span class="custom-control-label">1 year / <span class="font-weight-bold">$80</span></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<a href="javascript:void(0)" class="btn btn-primary float-end mb-1 mb-sm-0">Publish Now</a>
											<a href="javascript:void(0)" class="btn btn-secondary float-end me-2 mb-1 mb-sm-0">Save to Draft</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /row -->

                            @endsection

        @section('scripts')

		<!-- FORMEDITOR JS -->
		<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- BLOG-EDIT JS-->
		<script src="{{asset('assets/js/blog-edit.js')}}"></script>

        @endsection

