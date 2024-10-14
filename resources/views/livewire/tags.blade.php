@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Tags</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tags</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Default tag</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<span class="tag">First tag</span>
														<span class="tag">Second tag</span>
														<span class="tag">Third tag</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Link tag</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<a href="#" class="tag">First tag</a>
														<a href="#" class="tag">Second tag</a>
														<a href="#" class="tag">Third tag</a>
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
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded tag</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<span class="tag tag-rounded">First tag</span>
														<span class="tag tag-rounded">Second tag</span>
														<span class="tag tag-rounded">Third tag</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Color tag</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<span class="tag tag-primary">primary tag</span>
														<span class="tag tag-secondary">secondary tag</span>
														<span class="tag tag-info">info tag</span>
														<span class="tag tag-success">success tag</span>
														<span class="tag tag-warning">warning tag</span>
														<span class="tag tag-light">light tag</span>
														<span class="tag tag-dark">dark tag</span>
														<span class="tag tag-danger">danger tag</span>
														<span class="tag tag-blue">blue tag</span>
														<span class="tag tag-azure">azure tag</span>
														<span class="tag tag-indigo">indigo tag</span>
														<span class="tag tag-purple">purple tag</span>
														<span class="tag tag-pink">pink tag</span>
														<span class="tag tag-red">red tag</span>
														<span class="tag tag-orange">orange tag</span>
														<span class="tag tag-yellow">yellow tag</span>
														<span class="tag tag-lime">lime tag</span>
														<span class="tag tag-green">green tag</span>
														<span class="tag tag-teal">teal tag</span>
														<span class="tag tag-cyan">cyan tag</span>
														<span class="tag tag-gray">gray tag</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Avatar tag</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/11.jpg')}}"></span>
															Victoria
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/4.jpg')}}"></span>
															Nathan
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/1.jpg')}}"></span>
															Alice
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/18.jpg')}}"></span>
															Rose
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/16.jpg')}}"></span>
															Peter
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}"></span>
															Wayne
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}"></span>
															Michelle
														</span>
														<span class="tag">
															<span class="tag-avatar avatar cover-image" data-bs-image-src="{{asset('assets/images/users/17.jpg')}}"></span>
															Debra
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">List of tags</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p class="text-muted">You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
												<div class="example">
													<div class="tags">
														<span class="tag">First tag</span>
														<span class="tag">Second tag</span>
														<span class="tag">Third tag</span>
													</div>
												</div>
												<p class="mt-4 text-muted">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
												<div class="example">
													<div class="tags">
														<span class="tag">One</span>
														<span class="tag">Two</span>
														<span class="tag">Three</span>
														<span class="tag">Four</span>
														<span class="tag">Five</span>
														<span class="tag">Six</span>
														<span class="tag">Seven</span>
														<span class="tag">Eight</span>
														<span class="tag">Nine</span>
														<span class="tag">Ten</span>
														<span class="tag">Eleven</span>
														<span class="tag">Twelve</span>
														<span class="tag">Thirteen</span>
														<span class="tag">Fourteen</span>
														<span class="tag">Fifteen</span>
														<span class="tag">Sixteen</span>
														<span class="tag">Seventeen</span>
														<span class="tag">Eighteen</span>
														<span class="tag">Nineteen</span>
														<span class="tag">Twenty</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Tag remove</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<span class="tag">
															One
															<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
														</span>
														<span class="tag">
															Two
															<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
														</span>
														<span class="tag">
															Three
															<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
														</span>
														<span class="tag">
															Four
															<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Tag addons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="tags">
														<div class="tag">
															npm
															<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
														</div>
														<div class="tag tag-danger">
															npm
															<span class="tag-addon"><i class="fe fe-activity"></i></span>
														</div>
														<div class="tag">
															bundle
															<span class="tag-addon tag-success">passing</span>
														</div>
														<span class="tag tag-dark">
															CSS gzip size
															<span class="tag-addon tag-warning">20.9 kB</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Input Tags</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<div class="example">
													<div class="form-group">
														<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
													</div>
													<div class="form-group mb-0">
														<select multiple data-role="tagsinput" class="form-control">
															<option value="jQuery">jQuery</option>
															<option value="Angular">Angular</option>
															<option value="React">React</option>
															<option value="Vue">Vue</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12">
									<div class="card">
										<div class="card-body">
											<div class="main-content-label">
												Multiple select Tags
											</div>
											<div class="form-group">
												<ul>
													<li class="select-client">
														<select multiple="multiple" class="form-control select2">
															<option value="1">Angeline Julliet</option>
															<option value="2">Helena Rose</option>
															<option value="13">Daniel Obrien</option>
															<option value="15" selected>Jorah Randy</option>
															<option value="3">Emma Watson</option>
															<option value="5">Bonny Benett</option>
															<option value="7">Jessie Spears</option>
															<option value="9">Skyler Hilda</option>
															<option value="11">Randy Orton</option>
															<option value="14">Benjamin Button</option>
														</select>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- Internal Input tags js-->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

        @endsection
