@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Breadcrumbs</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h6 class="card-title">Basic Styling</h6>
										</div>
										<div class="card-body">
											<p class="text-muted">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
											<div class="text-wrap">
												<div class="example">
													<nav aria-label="breadcrumb">
														<ol class="breadcrumb breadcrumb-style">
															<li class="breadcrumb-item">
																<a href="#">Home</a>
															</li>
															<li class="breadcrumb-item">
																<a href="#">Library</a>
															</li>
															<li class="breadcrumb-item active">Data</li>
														</ol>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h6 class="card-title">Custom Styling</h6>
										</div>
										<div class="card-body">
											<p class="text-muted">The example below is the custom styling of the breadcrumb used by this template.</p>
											<div class="text-wrap">
												<div class="example">
													<nav aria-label="breadcrumb">
														<ol class="breadcrumb breadcrumb-style2 mb-0">
															<li class="breadcrumb-item">
																<a href="#">Home</a>
															</li>
															<li class="breadcrumb-item">
																<a href="#">Library</a>
															</li>
															<li class="breadcrumb-item active">Data</li>
														</ol>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h6 class="card-title">Icon Divider</h6>
										</div>
										<div class="card-body">
											<p class="text-muted">The example below is the custom styling of the breadcrumb using different divider.</p>
											<div class="text-wrap">
												<div class="example">
													<nav aria-label="breadcrumb">
														<ol class="breadcrumb  breadcrumb-style mb-0">
															<li class="breadcrumb-item">
																<a href="#"><i class="fe fe-home mx-1"></i>Home</a>
															</li>
															<li class="breadcrumb-item">
																<a href="#">Library</a>
															</li>
															<li class="breadcrumb-item active">Data</li>
														</ol>
														<ol class="breadcrumb breadcrumb-style2 mb-0">
															<li class="breadcrumb-item">
																<a href="#"><i class="fe fe-home mx-1"></i>Home</a>
															</li>
															<li class="breadcrumb-item">
																<a href="#">Library</a>
															</li>
															<li class="breadcrumb-item active">Data</li>
														</ol>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h6 class="card-title">Breadcrumbs-Center align</h6>
										</div>
										<div class="card-body">
											<p class="text-muted">The example below is the center aligment of the breadcrumb</p>
											<div class="text-wrap">
												<div class="example">
													<nav class="breadcrumb-3">
														<ol class="breadcrumb breadcrumb-style1 mb-0">
															<li class="breadcrumb-item">
																<a href="#">Home</a>
															</li>
															<li class="breadcrumb-item">
																<a href="#">Library</a>
															</li>
															<li class="breadcrumb-item active">Data</li>
														</ol>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h6 class="card-title">Breadcrumbs-Right align</h6>
										</div>
										<div class="card-body">
												<p class="text-muted">The example below is the Right aligment of the breadcrumb</p>
												<div class="text-wrap">
													<div class="example">
														<nav class="breadcrumb-4">
															<ol class="breadcrumb breadcrumb-style1 mb-0">
																<li class="breadcrumb-item">
																	<a href="#">Home</a>
																</li>
																<li class="breadcrumb-item">
																	<a href="#">Library</a>
																</li>
																<li class="breadcrumb-item active">Data</li>
															</ol>
														</nav>
													</div>
												</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End ROW-1 -->

                            @endsection

        @section('scripts')

        @endsection

