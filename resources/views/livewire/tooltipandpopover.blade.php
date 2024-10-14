@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Tooltip and Popover</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tooltip and Popover</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12">
									<!-- div -->
									<div class="card" id="Tooltip">
										<div class="card-header border-bottom">
											<div class="card-title">
												Default Tooltip
											</div>
										</div>
										<div class="card-body">
											<div class="tooltip-static-demo mb-4 border br-3">
												<div class="row ">
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip bs-tooltip-top" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the top
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip bs-tooltip-bottom" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the bottom
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip bs-tooltip-start" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the left
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip bs-tooltip-end" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the right
															</div>
														</div>
													</div>
												</div>
											</div><!-- tooltip-static-demo -->
											<div class="bg-light p-3 border br-3">
												<div class="row  text-center">
													<div class="col-sm-6 col-lg-3 mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on Bottom" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on left" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on right" >Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->
									<!-- div -->
									<div class="card" id="Tooltip1">
										<div class="card-header border-bottom">
											<div class="card-title">
												Color Tooltip
											</div>
										</div>
										<div class="card-body">
											<div class="tooltip-static-demo mb-4 border br-3">
												<div class="row ">
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the top
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip tooltip-secondary bs-tooltip-bottom" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the bottom
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip tooltip-danger bs-tooltip-start" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the left
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-lg-3">
														<div class="tooltip tooltip-info bs-tooltip-end" role="tooltip">
															<div class="tooltip-arrow"></div>
															<div class="tooltip-inner">
																Tooltip on the right
															</div>
														</div>
													</div>
												</div>
											</div><!-- tooltip-static-demo -->
											<div class="bg-light p-3 border br-3">
												<div class="row  text-center">
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on top" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-secondary" data-bs-placement="bottom" data-bs-toggle="tooltip-secondary" title="Tooltip on bottom" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-danger" data-bs-placement="left" data-bs-toggle="tooltip-danger" title="Tooltip on left" >Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-info" data-bs-placement="right" data-bs-toggle="tooltip-info" title="Tooltip on right" >Hover me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Default Popover
											</div>
										</div>
										<div class="card-body">
											<div class="popover-static-demo mb-4 border br-3 pb-6">
												<div class="row row-sm">
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-bottom">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-start">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Left</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover bs-popover-end">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Right</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row row-sm text-center">
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover top" >Click me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-success" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="left" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover left" >Click me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-danger" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="right" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover right" >Click me</button>
													</div>
													<div class="col-sm-6 col-lg-3  mt-2 mb-2">
														<button class="btn btn-warning" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="default" data-bs-toggle="popover" title="Popover bottom" >Click me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Colored Head Popover
											</div>
										</div>
										<div class="card-body">
											<div class="form-label  mb-2">
												Static Example
											</div>
											<div class="popover-static-demo mb-4 border br-3 pb-6">
												<div class="row row-sm">
													<div class="col-md-6">
														<div class="popover popover-head-primary bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-5 mt-md-0">
														<div class="popover popover-head-secondary bs-popover-bottom">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-label mb-2">
												Example
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row row-sm text-center">
													<div class="col-sm-6 col-xl-6 col-md-6 mt-2 mb-2 text-center">
														<button class="btn btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="head-primary" title="Popover top" >Click me</button>
													</div>
													<div class="col-sm-6 col-xl-6 col-md-6 mt-2 mb-2 text-center">
														<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="head-secondary" title="Popover bottom" >Click me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Full Colored Popover
											</div>
										</div>
										<div class="card-body">
											<div class="popover-static-demo mb-4 border br-3 pb-6">
												<div class="row row-sm">
													<div class="col-md-6 mt-4">
														<div class="popover popover-primary bs-popover-top">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
													<div class="col-md-6 mt-4">
														<div class="popover popover-secondary bs-popover-bottom">
															<div class="popover-arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="bg-light p-3 border br-3">
												<div class="row row-sm text-center">
													<div class="col-sm-6 col-xl-6 col-md-6  mt-2 mb-2 text-center">
														<button class="btn btn-primary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="top" data-bs-popover-color="primary" title="Popover top" >Click me</button>
													</div>
													<div class="col-sm-6 col-xl-6 col-md-6  mt-2 mb-2 text-center">
														<button class="btn btn-secondary" data-bs-container="body" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-placement="bottom" data-bs-popover-color="secondary" title="Popover bottom" >Click me</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->

									<div class="row row-deck">
										<div class="col-xl-6 col-md-12">
											<!-- div -->
											<div class="card">
												<div class="card-header border-bottom">
													<div class="card-title">
														Dismissible Popover
													</div>
												</div>
												<div class="card-body">
													<div class="popover-static-demo mb-4 border br-3 pb-6">
														<div class="row row-sm">
															<div class="col-md-12 mt-4">
																<div class="popover bs-popover-end">
																	<div class="popover-arrow"></div>
																	<h3 class="popover-header">Dismissible Popover</h3>
																	<div class="popover-body">
																		<p>And here's some amazing content. It's very engaging. Right?</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="bg-light p-3 border br-3">
														<div class="row row-sm text-center">
															<div class="col-md-12  mt-2 mb-2 text-center">
																<a href="javascript:void(0)" tabindex="0" class="btn btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /div -->
										</div>
										<div class="col-xl-6 col-md-12">
											<!-- div -->
											<div class="card">
												<div class="card-header border-bottom">
													<div class="card-title">
														Disabled Popover
													</div>
												</div>
												<div class="card-body">
													<div class="popover-static-demo mb-4 border br-3 pb-8">
														<div class="row row-sm">
															<div class="col-md-12 mt-6">
																<div class="popover bs-popover-end">
																	<div class="popover-arrow"></div>
																	<div class="popover-body">
																		<p>Disabled Popover</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="bg-light p-3 border br-3">
														<div class="row row-sm text-center">
															<div class="col-md-12 mt-2 mb-2 text-center">
																<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
																	<button class="btn btn-primary" type="button" disabled>Disabled button</button>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /div -->

										</div>
									</div>
								</div>

							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- Tooltip and Popover JS -->
        <script src="{{asset('assets/js/tooltip&popover.js')}}"></script>

        @endsection
