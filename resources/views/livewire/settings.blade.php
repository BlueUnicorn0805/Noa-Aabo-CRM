@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Settings</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">Settings</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-4 col-xl-3">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Settings</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light active" href="javascript:void(0)"><i class="fe fe-home me-2"></i> Main</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light" href="javascript:void(0)"><i class="fe fe-grid me-2"></i> Web Apps</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light" href="javascript:void(0)"><i class="fe fe-server me-2"></i> General</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light" href="javascript:void(0)"><i class="fe fe-globe me-2"></i> Components</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light" href="javascript:void(0)"><i class="fe fe-layers me-2"></i> Pages</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light" href="javascript:void(0)"><i class="fe fe-flag me-2"></i> Language & Region</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb text-dark-light mb-2" href="javascript:void(0)"><i class="fe fe-bell me-2"></i> Notifications</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-xl-9">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Overview</h3>
										</div>
										<div class="card-body">
											<p class="mb-0">Used to customize and manage all settngs about this Dashboard</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 p-2">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1">
																	<i class="fe fe-home"></i>
																</div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Dashboard</p>
																	<p class="text-13 text-muted mb-0">Dashboard Settings such as sidemenu,header and main page can be Controlled.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<a href="#" class="text-14 mb-0 text-dark">Go to Settings</a>
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Restore default</a>
														<div class="main-toggle-group style1">
															<div class="toggle">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 p-2">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1"><i class="fe fe-grid"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Webapps</p>
																	<p class="text-13 text-muted mb-0">Web apps settings such as Apps,Elements,Advanced Ui & Mail can be Controlled.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<a href="#" class="text-14 mb-0 text-dark">Go to Settings</a>
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Restore default</a>
														<div class="main-toggle-group style1">
															<div class="toggle">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1"><i class="fe fe-server"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">General</p>
																	<p class="text-13 text-muted mb-0">General settings such as Icons,Charts,Ecommerce can be Controlled.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<a href="#" class="text-14 mb-0 text-dark">Go to Settings</a>
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Restore default</a>
														<div class="main-toggle-group style1">
															<div class="toggle on">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1"><i class="fe fe-flag"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Region & language</p>
																	<p class="text-13 text-muted mb-0">In this settings we can change the region and language manually.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<a href="#" class="text-14 mb-0 text-dark">Go to Settings</a>
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Restore default</a>
														<div class="main-toggle-group style1">
															<div class="toggle">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1"><i class="fe fe-bell"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Notifiation</p>
																	<p class="text-13 text-muted mb-0">Notification settings we can control the notification privacy and security.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<a href="#" class="text-14 mb-0 text-dark">Go to Settings</a>
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2 text-dark">Restore default</a>
														<div class="main-toggle-group style1">
															<div class="toggle">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12">
															<div class="d-flex">
																<div class="settings-main-icon me-4 mt-1"><i class="fe fe-settings"></i></div>
																<div>
																	<p class="text-20 font-weight-semibold d-flex mb-0">Blog</p>
																	<p class="text-13 text-muted mb-0">In this settings we can modify all Blog related settings in this template.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer p-3">
													<a href="#" class="text-14 mb-0">Go to Settings</a>
													<div class="custom-switch float-end mb-0">
														<a href="#" class="text-14 mb-0 me-2">Restore default</a>
														<div class="main-toggle-group style1">
															<div class="toggle on">
																<span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
