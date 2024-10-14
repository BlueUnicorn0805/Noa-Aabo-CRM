@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Project-Details</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
										<li class="breadcrumb-item active" aria-current="page">Project Details</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-md-12">
									<div class="btn-list text-end mb-3">
										<a href="javascript:void(0)" class="btn btn-primary active text-white me-2">Home</a>
										<a href="{{url('project-edit')}}" class="btn btn-outline-primary me-2">Edit</a>
										<a href="{{url('project-new')}}" class="btn btn-outline-primary me-2">New</a>
										<a href="javascript:void(0)" class="btn btn-outline-primary me-2">Duplicate</a>
										<a href="javascript:void(0)" class="btn btn-outline-primary me-2">Settings</a>
									</div>
									<div class="card overflow-hidden">
										<div class="card-body">
											<div class="row">
												<div class="col-xl col-md-12">
													<h4 class="my-2 card-title">
														Noa Dashboard UI
														<a href="#" class="ms-1" id="checkElement"><i class="fe fe-edit"></i></a>
													</h4>
												</div>
												<div class="col-xl-auto col-md0-1">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-primary-light text-center me-2" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Alarm"><i class="fe fe-clock"></i></a>
														<a href="javascript:void(0)" class="btn btn-primary-light text-center me-2" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Comment"><i class="fe fe-message-circle"></i></a>
														<a href="javascript:void(0)" class="btn btn-primary-light text-center me-2" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Upload Files"><i class="fe fe-upload"></i></a>
														<a href="javascript:void(0)" class="btn btn-primary-light text-center me-2" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Mail"><i class="fe fe-mail"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer p-0">
											<div class="row p-5 border-bottom project-main-details d-none" id="mainElement">
												<div class="col-md-6">
													<div class="row">
														<div class="col-xl-12 col-md-12 col-lg-12">
															<div class="row">
																<div class="col-xl-2 col-md-4 col-sm-4 d-flex align-items-center">
																	<label class="text-muted">Started Date:</label>
																</div>
																<div class="col-xl-4 col-md-8 col-sm-8">
																	<div class="input-group date" data-date-format="mm-dd-yyyy">
																		<input class="form-control text-info" id="bootstrapDatePicker1" type="text"/>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-12 col-md-12 col-lg-12 mt-2">
															<div class="row">
																<div class="col-xl-2 col-md-4 col-sm-4 d-flex align-items-center">
																	<label class="text-muted">Due Date:</label>
																</div>
																<div class="col-xl-4 col-md-8 col-sm-8">
																	<div class="input-group date" data-date-format="mm-dd-yyyy">
																		<input class="form-control text-danger" id="bootstrapDatePicker2" type="text"/>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-12 col-md-12 col-lg-12 mt-2">
															<div class="row">
																<div class="col-xl-2 col-md-4 col-sm-4 d-flex align-items-center">
																	<label class="text-muted">Status:</label>
																</div>
																<div class="col-xl-4 col-md-8 col-sm-8">
																	<div class="form-group">
																		<ul>
																			<li class="select-status">
																				<select class="form-control select2-status-search" data-placeholder="Select Status">
																					<option value="IP" selected>In Progress</option>
																					<option value="OH">On Hold</option>
																					<option value="CP">Completed</option>
																				</select>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 mt-1 mt-lg-0">
													<div class="row">
														<div class="col-xl-12 col-md-12 col-lg-12">
															<div class="row">
																<div class="col-xl-2 col-md-4 col-sm-4 d-flex align-items-center">
																	<label class="text-muted">Assigned To:</label>
																</div>
																<div class="col-xl-4 col-md-8 col-sm-8">
																	<div class="form-group flex-2">
																		<select class="form-control select2-agent-search form-select">
																			<option value="12" selected>Daniel Obrien</option>
																			<option value="3">Lisbon Taylor</option>
																			<option value="15">William Turner</option>
																			<option value="5">Olena Tyrell</option>
																			<option value="7">Emilie Benett</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-12 col-md-12 col-lg-12 mt-2">
															<div class="row">
																<div class="col-xl-2 col-md-4 col-sm-4 d-flex align-items-center">
																	<label class="text-muted">Client: </label>
																</div>
																<div class="col-xl-4 col-md-8 col-sm-8">
																	<div class="form-group flex-2">
																		<select class="form-control select2-client-search form-select">
																			<option value="2" selected>Elena Gilbert</option>
																			<option value="8">Emilia Clark</option>
																			<option value="13">Walter White</option>
																			<option value="11">Truman Burbank</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xl-12 mt-2 text-end">
															<div class="btn-list">
																<a href="javascript:void(0)" class="btn btn-primary">Save</a>
																<a href="{{url('project-edit')}}" class="btn btn-outline-primary">Edit More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Tabs -->
											<div class="tabs-menu4 py-5 project-menu">
												<nav class="nav border-bottom px-4 d-block d-lg-flex flex-2">
													<a class="nav-link border py-1 mb-2 mb-lg-0 br-lg-5 mx-1 mx-md-1 active" data-bs-toggle="tab" href="#tab_1">
														Overview
													</a>
													<a class="nav-link border py-1 mb-2 mb-lg-0 br-lg-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#tab_2">
														Tasks
													</a>
													<a class="nav-link border py-1 mb-2 mb-lg-0 br-lg-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#tab_3">
														Time Tracking
													</a>
													<a class="nav-link border py-1 mb-2 mb-lg-0 br-lg-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#tab_4">
														Tickets
													</a>
													<a class="nav-link border py-1 mb-2 mb-lg-0 br-lg-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#tab_5">
														Billing
													</a>
													<a class="nav-link border py-1 mb-2 mb-lg-0 br-lg-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#tab_6">
														Files
													</a>
												</nav>
											</div><!-- /Tabs -->
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="tab-content">
										<div class="tab-pane active" id="tab_1">
											<!-- ROW -->
											<div class="row">
												<div class="col-xl-9 col-lg-12">
													<div class="card">
														<div class="card-header border-bottom d-block">
															<div class="row align-items-center">
																<div class="col">
																	<h4 class="mb-1">Noa Dashboard UI</h4>
																	<div class="d-sm-flex d-block">
																		<div class="text-muted pe-2 project-date">11 Jan 21</div>
																		<div class="text-muted ms-3 project-status">In Progress</div>
																	</div>
																</div>
																<div class="col-auto">
																	<div class="d-flex align-items-center">
																		<i class="fa fa-star active stars-main ms-4" id="star"></i>
																		<div class="ms-3">
																			<a href="#" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																			<div class="dropdown-menu dropdown-menu-start">
																				<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Report Issue</a>
																				<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<h5 class="mb-2">Project Details:</h5>
															<p class="line-height-5 m-0 text-muted">Eirmod voluptua no at at sit dolor voluptua nonumy. Et Et ut rebum est aliquyam dolor clita. Amet ipsum et dolor ipsum. Dolor clita rebum. aliquyam gubergren est gubergren. Sit stet sit ipsum est sea clita sed gubergren. Sea duo dolores elitr et ipsum sadipscing et dolores, sanctus et vero sea diam duo no, amet.</p>
															<ul class="mt-2">
																<li class="text-muted">
																	<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn list-indicator" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.8534546,11.6465454l-4.5-4.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0C9.460144,7.3383789,9.4546509,7.6549072,9.6464844,7.8535156L13.7930298,12l-4.1465454,4.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C9.5,16.776062,9.723877,16.999939,10,17c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.5-4.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C15.0487671,12.1581421,15.0487061,11.8416748,14.8534546,11.6465454z"/></svg>
																	Ea eos nonumy diam duo elitr. Takimata vero sit eirmod sit. Sea diam vero ipsum.
																</li>
																<li class="text-muted mt-1">
																	<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn list-indicator" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.8534546,11.6465454l-4.5-4.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0C9.460144,7.3383789,9.4546509,7.6549072,9.6464844,7.8535156L13.7930298,12l-4.1465454,4.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C9.5,16.776062,9.723877,16.999939,10,17c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.5-4.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C15.0487671,12.1581421,15.0487061,11.8416748,14.8534546,11.6465454z"/></svg>
																	Accusam ipsum labore dolor amet ea, accusam dolore dolor dolore.
																</li>
																<li class="text-muted mt-1">
																	<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn list-indicator" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.8534546,11.6465454l-4.5-4.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0C9.460144,7.3383789,9.4546509,7.6549072,9.6464844,7.8535156L13.7930298,12l-4.1465454,4.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C9.5,16.776062,9.723877,16.999939,10,17c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.5-4.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C15.0487671,12.1581421,15.0487061,11.8416748,14.8534546,11.6465454z"/></svg>
																	Nonumy gubergren gubergren lorem dolore nonumy lorem kasd, labore sit eirmod sed.
																</li>
																<li class="text-muted mt-1">
																	<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn list-indicator" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.8534546,11.6465454l-4.5-4.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0C9.460144,7.3383789,9.4546509,7.6549072,9.6464844,7.8535156L13.7930298,12l-4.1465454,4.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C9.5,16.776062,9.723877,16.999939,10,17c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.5-4.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C15.0487671,12.1581421,15.0487061,11.8416748,14.8534546,11.6465454z"/></svg>
																	Ipsum elitr no sed takimata dolore.
																</li>
															</ul>
															<div class="d-flex justify-content-end">
																<span class="d-f-ai-c" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="View Count">
																	<i class="fe fe-eye text-16 me-1"></i>
																	15K
																</span>
																<span class="d-f-ai-c ms-4" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Comments">
																	<i class="fe fe-message-circle text-16 me-1"></i>
																	5.3K
																</span>
															</div>
														</div>
													</div>
													<div class="card">
														<div class="card-body">
															<div class="row prjct-details">
																<div class="col-xl-2 col-lg-12">
																	<div class="text-center border py-5 br-5 details">
																		<div>
																			<span class="m-0 text-muted"><i class="fe fe-calendar"></i> Started Date:</span>
																		</div>
																		<h5 class="mt-3 text-teritary">11 Jan 21</h5>
																	</div>
																</div>
																<div class="col-xl-2 col-lg-12">
																	<div class="text-center border py-5 br-5 details">
																		<div>
																			<span class="m-0 text-muted"><i class="fe fe-calendar"></i> Due Date:</span>
																		</div>
																		<h5 class="mt-3 text-danger">11 Nov 21</h5>
																	</div>
																</div>
																<div class="col-xl-3 col-lg-12">
																	<div class="d-f-ai-c-jc-c flex-column border py-5 br-5 details">
																		<div>
																			<span class="m-0 text-muted">Assigned To:</span>
																		</div>
																		<div class="media mt-3 d-flex align-items-center">
																			<img class="avatar-sm rounded-circle me-3 my-auto" src="{{asset('assets/images/faces/11.jpg')}}" alt="Image description">
																			<p class="mb-0 text-dark-light text-15">Allie Grater</p>
																		</div>
																	</div>
																</div>
																<div class="col-xl-5 col-lg-12">
																	<div class="text-center d-f-ai-c-jc-c border py-5 br-5">
																		<div class="wp-80">
																			<div class="project-percentage medium-bar medium-lg">
																				<div class="percentage-title mb-4">
																					<span class="text-muted">
																						<i class="fe fe-clipboard"></i>
																						Tasks
																					</span>
																					<span class="progress-main font-weight-semibold text-13 mb-1">41 / 75</span>
																				</div>
																				<div class="progress fileprogress mb-2 h-auto">
																					<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Activity Log</h3>
														</div>
														<div class="card-body">
															<ul class="task-list">
																<li>
																	<i class="task-icon bg-primary"></i>
																	<h6>New Task Added To The Project.</h6>
																	<p class="text-muted fs-12">02 Feb 2020</p>
																</li>
																<li>
																	<i class="task-icon bg-secondary"></i>
																	<h6>New File Uploaded To The Project.</h6>
																	<p class="text-muted fs-12">05 Feb 2020</p>
																</li>
																<li>
																	<i class="task-icon bg-teritary"></i>
																	<h6><a href="#" class="fw-semibold text-dark">Emilie Benett</a> Found A New Bug.</h6>
																	<p class="text-muted fs-12">02 Mar 2020</p>
																</li>
																<li>
																	<i class="task-icon bg-custom-yellow"></i>
																	<h6>New Member Added To The Project.</h6>
																	<p class="text-muted fs-12">05 Mar 2020</p>
																</li>
																<li>
																	<i class="task-icon bg-orange"></i>
																	<h6><a href="#" class="fw-semibold text-dark">Task-1</a> Completed Successfully.</h6>
																	<p class="text-muted fs-12">15 Mar 2020</p>
																</li>
																<li>
																	<i class="task-icon bg-primary"></i>
																	<h6>New Task Added To The Project.</h6>
																	<p class="text-muted fs-12">02 Apr 2020</p>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div><!--ROW CLOSED-->

											<!-- ROW OPENED-->
											<div class="row">
												<div class="col-xl-12 col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Team Members</h3>
														</div>
														<div class="card-body project-members-container">
															<div class="table-responsive">
																<table id="members-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom">
																	<thead class="table-head">
																		<tr>
																			<th class="bg-transparent border-bottom-0 text-center w-5">S.no</th>
																			<th class="bg-transparent border-bottom-0">Name</th>
																			<th class="bg-transparent border-bottom-0">Tasks</th>
																			<th class="bg-transparent border-bottom-0">Role</th>
																			<th class="bg-transparent border-bottom-0 no-btn">Action</th>
																		</tr>
																	</thead>
																	<tbody class="table-body">
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">01.</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<img alt="User Avatar" class="rounded-circle avatar-md d-md-none-max" src="{{asset('assets/images/users/1.jpg')}}">
																					</div>
																					<div>
																						<p class="text-14 mb-0">Lisbon Taylor</p>
																						<span class="text-muted fs-13">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold">6</td>
																			<td class="text-muted fs-15 fw-semibold" >
																				Member
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-shield me-2"></i> Remove Admin</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">02.</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<img alt="User Avatar" class="rounded-circle avatar-md d-md-none-max" src="{{asset('assets/images/users/12.jpg')}}">
																					</div>
																					<div>
																						<p class="text-14 mb-0">Daniel Obrien</p>
																						<span class="text-muted fs-13">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold">4</td>
																			<td class="text-muted fs-15 fw-semibold" >
																				Admin
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-shield me-2"></i> Remove Admin</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">03.</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<img alt="User Avatar" class="rounded-circle avatar-md d-md-none-max" src="{{asset('assets/images/users/13.jpg')}}">
																					</div>
																					<div>
																						<p class="text-14 mb-0">William Turner</p>
																						<span class="text-muted fs-13">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold">5</td>
																			<td class="text-muted fs-15 fw-semibold" >
																				Member
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-shield me-2"></i> Remove Admin</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">04.</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<img alt="User Avatar" class="rounded-circle avatar-md d-md-none-max" src="{{asset('assets/images/users/4.jpg')}}">
																					</div>
																					<div>
																						<p class="text-14 mb-0">Olena Tyrell</p>
																						<span class="text-muted fs-13">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold">3</td>
																			<td class="text-muted fs-15 fw-semibold" >
																				Member
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-shield me-2"></i> Remove Admin</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">05.</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<img alt="User Avatar" class="rounded-circle avatar-md d-md-none-max" src="{{asset('assets/images/users/5.jpg')}}">
																					</div>
																					<div>
																						<p class="text-14 mb-0">Emilie Benett</p>
																						<span class="text-muted fs-13">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold">5</td>
																			<td class="text-muted fs-15 fw-semibold" >
																				Member
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-shield me-2"></i> Remove Admin</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-12 col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Files</h3>
														</div>
														<div class="card-body">
															<div class="table-main-container">
																<table class="col-md-12 table-bordered">
																	<thead>
																		<tr class="row-first">
																			<th>File Name</th>
																			<th>Date</th>
																			<th>Type</th>
																			<th>Size</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
																					<span class="mb-1 font-weight-semibold">noa documentation</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>doc</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample video</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>mp4</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">30mb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample image</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>jpeg</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>

																					<span class="mb-1 font-weight-semibold">word document</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>doc</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#efc956" d="M21.65137,2.24121a1.00561,1.00561,0,0,0-.80323-.22949l-13,2A1.00054,1.00054,0,0,0,7,5V15.35107A3.45946,3.45946,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.85779L20,9.16553v4.18554A3.45946,3.45946,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A.99909.99909,0,0,0,21.65137,2.24121Z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample audio</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>mp3</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">5.3mb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample video</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>mp4</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">30mb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr class="row-last">
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
																					<span class="mb-1 font-weight-semibold">sample image</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>jpeg</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<div class="card">
														<form method="post" class="project-file-upload">
															<input type="file" class="dropify" data-bs-height="100" />
														</form>
													</div>
												</div>
											</div>

											<!-- ROW OPENED-->
											<div class="row">
												<div class="col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Comments</h3>
														</div>
														<div class="card-body pb-0">
															<div class="media border br-5 p-4 mb-5 overflow-visible">
																<div class="me-3">
																	<a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
																</div>
																<div class="media-body overflow-visible">
																	<div class="br-5">
																		<nav class="nav float-end">
																			<div class="dropdown">
																				<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																				<div class="dropdown-menu dropdown-menu-start">
																					<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																				</div>
																			</div>
																		</nav>
																		<h5 class="mt-0">Gavin Murray <span class="text-muted fs-12 ms-1">1day ago</span></h5>
																		<span><i class="fe fe-thumb-up text-danger"></i></span>
																		<p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states.</p>
																		<a class="like" href="javascript:;">
																			<span class="badge btn-danger-light rounded-pill py-2 px-3 my-1"> <i class="fe fe-heart me-1"></i>56</span>
																		</a>
																		<span class="reply">
																			<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3 my-1"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																		</span>
																		<div class="media mt-5 border br-5 p-4 overflow-visible d-sm-flex d-block">
																			<div class="me-3">
																				<a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/2.jpg')}}"> </a>
																			</div>
																			<div class="media-body overflow-visible br-5">
																				<nav class="nav float-end">
																					<div class="dropdown">
																						<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																						<div class="dropdown-menu dropdown-menu-start">
																							<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																							<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																							<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																							<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																						</div>
																					</div>
																				</nav>
																				<h5 class="mt-0">Mozelle Belt <span class="text-muted fs-12 ms-1 bg-normal-light">Reply to Gavin Murray</span><span class="text-muted fs-12 ms-1">2min ago</span></h5>
																				<span><i class="fe fe-thumb-up text-danger"></i></span>
																				<p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat.</p>
																				<a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3 my-1"><i class="fe fe-heart me-1"></i>56</span></a>
																				<span class="reply" >
																					<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3 my-1"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="media border br-5 p-4 mb-5 overflow-visible">
																<div class="me-3">
																	<a href="javascript:void(0)"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/12.jpg')}}"> </a>
																</div>
																<div class="media-body overflow-visible">
																	<div class="br-5">
																		<nav class="nav float-end">
																			<div class="dropdown">
																				<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																				<div class="dropdown-menu dropdown-menu-start">
																					<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																					<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																				</div>
																			</div>
																		</nav>
																		<h5 class="mt-0">Taylor Morgan<span class="text-muted fs-12 ms-1">1day ago</span></h5>
																		<span><i class="fe fe-thumb-up text-danger"></i></span>
																		<p class="font-13 text-muted">Et erat justo ipsum sanctus et kasd takimata stet sanctus, et invidunt lorem invidunt ea, justo rebum magna eos magna.</p>
																		<a class="like" href="javascript:;">
																			<span class="badge btn-danger-light rounded-pill py-2 px-3 my-1"> <i class="fe fe-heart me-1"></i>56</span>
																		</a>
																		<span class="reply">
																			<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3 my-1"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
																		</span>
																	</div>
																</div>
															</div>
															<div class="row mb-5 form-group-wrapper">
																<h3 class="card-title">Comment here:</h3>
																<div class="col-md-6">
																	<div class="main-form-group">
																		<input class="form-control" id="name" placeholder="Name" type="text">
																		<label for="name" class="form-label mb-1">Name</label>
																	</div><!-- main-form-group -->
																</div>
																<div class="col-md-6 mail-cmnt">
																	<div class="main-form-group">
																		<input class="form-control" id="mail" placeholder="Mail" type="email">
																		<label for="mail" class="form-label mb-1">Mail</label>
																	</div><!-- main-form-group -->
																</div>
																<div class="col-md-12 mt-2">
																	<div class="main-form-group">
																		<textarea name="message" id="message" class="form-control text-area" placeholder="Message" rows="3"></textarea>
																		<label for="message" class="form-label mb-1">Message</label>
																	</div>
																</div>
																<div class="col-md-12 mt-2">
																	<button class="btn btn-success text-white float-end">Submit</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><!--ROW CLOSED-->
										</div>

										<div class="tab-pane" id="tab_2">
											<div class="row">
												<div class="col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Tasks List</h3>
														</div>
														<div class="card-body tasks-table-container">
															<div class="table-responsive">
																<table id="tasks-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom project-tasks-main">
																	<thead class="table-head">
																		<tr>
																			<th class="bg-transparent border-bottom-0 w-5">S.no</th>
																			<th class="bg-transparent border-bottom-0">Task</th>
																			<th class="bg-transparent border-bottom-0">Project</th>
																			<th class="bg-transparent border-bottom-0">Due Date</th>
																			<th class="bg-transparent border-bottom-0">Assigned To</th>
																			<th class="bg-transparent border-bottom-0">Status</th>
																			<th class="bg-transparent border-bottom-0 no-btn">Action</th>
																		</tr>
																	</thead>
																	<tbody class="table-body">
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">01.</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Sit sed takimata sanctus invidunt</a></td>
																			<td class="text-muted fs-15 fw-semibold">Noa Dashboard UI</td>
																			<td class="text-danger fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control select2-status-search" data-placeholder="Select Status">
																								<option value="IP" selected>In Progress</option>
																								<option value="OH">On Hold</option>
																								<option value="CP">Completed</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Mark As Completed">
																						<svg  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20" width="16" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
																					</a>
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">02.</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Diam lorem dolor no lorem.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Noa Dashboard UI</td>
																			<td class="text-danger fs-15 fw-semibold">01 Nov 21</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Daniel Obrien</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control select2-status-search" data-placeholder="Select Status">
																								<option value="IP">In Progress</option>
																								<option value="OH" selected>On Hold</option>
																								<option value="CP">Completed</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Mark As Completed">
																						<svg  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20" width="16" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
																					</a>
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">03.</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Amet clita sea ut dolor consetetur, elitr.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Noa Dashboard UI</td>
																			<td class="text-danger fs-15 fw-semibold">08 Nov 21</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">William Turner</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control select2-status-search" data-placeholder="Select Status">
																								<option value="IP">In Progress</option>
																								<option value="OH" selected>On Hold</option>
																								<option value="CP">Completed</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Mark As Completed">
																						<svg  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20" width="16" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
																					</a>
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">04.</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Est sea erat at kasd.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Noa Dashboard UI</td>
																			<td class="text-danger fs-15 fw-semibold">04 Nov 21</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Olena Tyrell</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control select2-status-search" data-placeholder="Select Status">
																								<option value="IP" selected>In Progress</option>
																								<option value="OH">On Hold</option>
																								<option value="CP">Completed</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Mark As Completed">
																						<svg  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20" width="16" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
																					</a>
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold text-center">05.</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Rebum gubergren at kasd takimata clita.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Noa Dashboard UI</td>
																			<td class="text-danger fs-15 fw-semibold">29 Oct 21</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Emilie Benett</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control select2-status-search" data-placeholder="Select Status">
																								<option value="IP">In Progress</option>
																								<option value="OH">On Hold</option>
																								<option value="CP" selected>Completed</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-primary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Mark As Completed">
																						<svg  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20" width="16" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
																					</a>
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="tab_3">
											<div class="row">
												<div class="col-md-12">

													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Time Tracking</h3>
														</div>
														<div class="card-body timetracking-table-container">
															<div class="table-responsive">
																<table id="timetracking-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom project-timetracking-main">
																	<thead class="table-head">
																		<tr>
																			<th class="bg-transparent border-bottom-0">Team Member</th>
																			<th class="bg-transparent border-bottom-0">Task</th>
																			<th class="bg-transparent border-bottom-0">Project</th>
																			<th class="bg-transparent border-bottom-0">Start Date & Time</th>
																			<th class="bg-transparent border-bottom-0">End Date & Time</th>
																			<th class="bg-transparent border-bottom-0">Total Time</th>
																			<th class="bg-transparent border-bottom-0 no-btn">Action</th>
																		</tr>
																	</thead>
																	<tbody class="table-body">
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Et ipsum invidunt et labore.</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21 & 14:56</td>
																			<td class="text-muted fs-15 fw-semibold">01 Nov 21 & 09:35</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 4<br>Hours: 10<br>Minutes: 22</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Lisa Morgan</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Et sadipscing et vero vero ipsum.</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">30 Oct 21 & 12:56</td>
																			<td class="text-muted fs-15 fw-semibold">11 Nov 21 & 09:35</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 15<br>Hours: 12<br>Minutes: 52</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Tyler Durder</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Et takimata invidunt sit elitr ea.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">15 Oct 21 & 15:56</td>
																			<td class="text-muted fs-15 fw-semibold">01 Nov 21 & 16:40</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 18<br>Hours: 8<br>Minutes: 52</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Jorah Randy</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Sanctus ipsum eirmod kasd sit.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">18 Oct 21 & 10:30</td>
																			<td class="text-muted fs-15 fw-semibold">09 Nov 21 & 09:45</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 22<br>Hours: 10<br>Minutes: 12</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Helena Rose</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Sea amet dolore et sea duo sit.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">20 Oct 21 & 14:00</td>
																			<td class="text-muted fs-15 fw-semibold">25 Nov 21 & 09:35</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 5<br>Hours: 5<br>Minutes: 35</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Lisbon Taylor</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Magna voluptua elitr nonumy kasd consetetur sit.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21 & 14:56</td>
																			<td class="text-muted fs-15 fw-semibold">01 Nov 21 & 09:35</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 4<br>Hours: 10<br>Minutes: 22</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Jessie Spears</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Dolore dolor diam sit consetetur.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">30 Oct 21 & 12:56</td>
																			<td class="text-muted fs-15 fw-semibold">11 Nov 21 & 09:35</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 15<br>Hours: 12<br>Minutes: 52</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Jack Ryan</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Voluptua magna no takimata nonumy.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">15 Oct 21 & 15:56</td>
																			<td class="text-muted fs-15 fw-semibold">01 Nov 21 & 16:40</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 18<br>Hours: 8<br>Minutes: 52</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Mark Ronson</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Sadipscing sanctus et tempor dolores tempor labore.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">18 Oct 21 & 10:30</td>
																			<td class="text-muted fs-15 fw-semibold">09 Nov 21 & 09:45</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 22<br>Hours: 10<br>Minutes: 12</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Jessica Grace</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark"  data-bs-target="#Vertically" data-bs-toggle="modal" >Justo et et ipsum lorem stet.</a></td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td class="text-muted fs-15 fw-semibold">20 Oct 21 & 14:00</td>
																			<td class="text-muted fs-15 fw-semibold">25 Nov 21 & 09:35</td>
																			<td class="text-dark fs-15 fw-semibold">Days: 5<br>Hours: 5<br>Minutes: 35</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="tab_4">
											<div class="row">
												<div class="col-xl col-md-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-6">
																	<h6>Total Tickets</h6>
																	<p>35</p>
																</div>
																<div class="col-6">
																	<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-info-gradient text-white ms-auto">
																		<i class="fe fe-credit-card"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl col-md-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-6">
																	<h6>Open Tickets</h6>
																	<p>4</p>
																</div>
																<div class="col-6">
																	<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-primary-gradient text-white ms-auto">
																		<i class="fe fe-credit-card"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl col-md-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-6">
																	<h6>Closed Tickets</h6>
																	<p>15</p>
																</div>
																<div class="col-6">
																	<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-secondary-gradient text-white ms-auto">
																		<i class="fe fe-credit-card"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl col-md-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-6">
																	<h6>Pending Tickets</h6>
																	<p>6</p>
																</div>
																<div class="col-6">
																	<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-warning-gradient text-white ms-auto">
																		<i class="fe fe-credit-card"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl col-md-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-6">
																	<h6>Resolved Tickets</h6>
																	<p>10</p>
																</div>
																<div class="col-6">
																	<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-success-gradient text-white ms-auto">
																		<i class="fe fe-credit-card"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="btn-list">
														<a href="#" class="btn btn-primary" id="ticketA" data-bs-target="#ticket-vertical" data-bs-toggle="modal">
															<i class="fe fe-plus-circle"></i>
															New Ticket
														</a>
														<a href="#" class="btn btn-info">
															<i class="fe fe-check-square"></i>
															Batch Update
														</a>
														<a href="#" class="btn btn-gray ms-auto">
															<i class="fe fe-settings"></i>
															Settings
														</a>
													</div>
												</div>
												<div class="col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Tickets</h3>
														</div>
														<div class="card-body tickets-table-container">
															<div class="table-responsive">
																<table id="tickets-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom project-tickets-main">
																	<thead class="table-head">
																		<tr>
																			<th class="bg-transparent border-bottom-0">Ticket ID</th>
																			<th class="bg-transparent border-bottom-0">Title</th>
																			<th class="bg-transparent border-bottom-0">Client</th>
																			<th class="bg-transparent border-bottom-0">Ticket Type</th>
																			<th class="bg-transparent border-bottom-0">Assigned To</th>
																			<th class="bg-transparent border-bottom-0">Status</th>
																			<th class="bg-transparent border-bottom-0 no-btn">Action</th>
																		</tr>
																	</thead>
																	<tbody class="table-body">
																		<tr>
																			<td class="text-muted fs-15 fw-semibold">#TCKT1116</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('ticket-details')}}" class="text-dark">Aliquyam sit ea vero et elitr.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Jessica Rose</td>
																			<td class="text-muted fs-15 fw-semibold">General Support</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted">
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control ticket-status-search" data-placeholder="Select Status">
																								<option value="open" selected>Open</option>
																								<option value="closed">Closed</option>
																								<option value="pending">Pending</option>
																								<option value="resolved">Resolved</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-eye me-2"></i> View</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold">#TCKT1516</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('ticket-details')}}" class="text-dark">Lorem gubergren est consetetur lorem erat lorem lorem.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Jessica Rose</td>
																			<td class="text-muted fs-15 fw-semibold">General Support</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Bonny Benett</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted">
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control ticket-status-search" data-placeholder="Select Status">
																								<option value="open">Open</option>
																								<option value="closed" selected>Closed</option>
																								<option value="pending">Pending</option>
																								<option value="resolved">Resolved</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-eye me-2"></i> View</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold">#TCKT1316</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('ticket-details')}}" class="text-dark">Voluptua sit sit est erat elitr.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Jessica Rose</td>
																			<td class="text-muted fs-15 fw-semibold">General Support</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Emma Watson</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted">
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control ticket-status-search" data-placeholder="Select Status">
																								<option value="open">Open</option>
																								<option value="closed">Closed</option>
																								<option value="pending">Pending</option>
																								<option value="resolved" selected>Resolved</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-eye me-2"></i> View</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold">#TCKT1216</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('ticket-details')}}" class="text-dark">Sed et magna ipsum at eirmod et.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Sansa Taylor</td>
																			<td class="text-muted fs-15 fw-semibold">General Support</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Benjamin Button</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted">
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control ticket-status-search" data-placeholder="Select Status">
																								<option value="open" selected>Open</option>
																								<option value="closed">Closed</option>
																								<option value="pending">Pending</option>
																								<option value="resolved">Resolved</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-eye me-2"></i> View</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold">#TCKT1116</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('ticket-details')}}" class="text-dark">Et sed est erat et magna, gubergren.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Catlyn Stark</td>
																			<td class="text-muted fs-15 fw-semibold">General Support</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Steve Johnson</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted">
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control ticket-status-search" data-placeholder="Select Status">
																								<option value="open">Open</option>
																								<option value="closed">Closed</option>
																								<option value="pending" selected>Pending</option>
																								<option value="resolved">Resolved</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-eye me-2"></i> View</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-muted fs-15 fw-semibold">#TCKT1116</td>
																			<td class="text-muted fs-15 fw-semibold"><a href="{{url('ticket-details')}}" class="text-dark">Et kasd amet aliquyam stet labore.</a></td>
																			<td class="text-muted fs-15 fw-semibold">Lisbon Murillo</td>
																			<td class="text-muted fs-15 fw-semibold">General Support</td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Angeline Julliet</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-muted">
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control ticket-status-search" data-placeholder="Select Status">
																								<option value="open" selected>Open</option>
																								<option value="closed">Closed</option>
																								<option value="pending">Pending</option>
																								<option value="resolved">Resolved</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-eye me-2"></i> View</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="tab_5">
											<div class="row">
												<div class="col-md-12 mb-5">
													<div class="btn-list">
														<a href="{{url('invoice-create')}}" class="btn btn-primary">
															<i class="fe fe-plus-circle"></i>
															Invoice
														</a>
														<a href="{{url('invoice-timelog')}}" class="btn btn-primary">
															<i class="fe fe-plus-circle"></i>
															Time Log Invoice
														</a>
													</div>
												</div>
												<div class="col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Billings</h3>
														</div>
														<div class="card-body billing-table-container">
															<div class="table-responsive">
																<table id="billing-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom project-timetracking-main">
																	<thead class="table-head">
																		<tr>
																			<th class="bg-transparent border-bottom-0">Invoice#</th>
																			<th class="bg-transparent border-bottom-0">Project</th>
																			<th class="bg-transparent border-bottom-0">Client</th>
																			<th class="bg-transparent border-bottom-0">Amount</th>
																			<th class="bg-transparent border-bottom-0">Date</th>
																			<th class="bg-transparent border-bottom-0">Status</th>
																			<th class="bg-transparent border-bottom-0 no-btn">Action</th>
																		</tr>
																	</thead>
																	<tbody class="table-body">
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-15 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID" selected>paid</option>
																								<option value="UNPAID">unpaid</option>
																								<option value="OVERDUE">overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID" selected>paid</option>
																								<option value="UNPAID">unpaid</option>
																								<option value="OVERDUE">overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID">paid</option>
																								<option value="UNPAID" selected>unpaid</option>
																								<option value="OVERDUE">overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID">paid</option>
																								<option value="UNPAID">unpaid</option>
																								<option value="OVERDUE" selected>overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID" selected>paid</option>
																								<option value="UNPAID">unpaid</option>
																								<option value="OVERDUE">overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID" selected>paid</option>
																								<option value="UNPAID">unpaid</option>
																								<option value="OVERDUE">overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID">paid</option>
																								<option value="UNPAID">unpaid</option>
																								<option value="OVERDUE" selected>overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td class="fs-15 fw-semibold"><a href="{{url('invoice-details')}}" class="text-dark">#INV-1116</a></td>
																			<td class="fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="me-2">
																						<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																					</div>
																					<div>
																						<h6 class="mb-0">Skyler Hilda</h6>
																						<span class="text-muted fs-12">member@spruko.com</span>
																					</div>
																				</div>
																			</td>
																			<td class="fs-14 fw-semibold text-muted">
																				<span class="text-dark">Total:</span> $1116<br>
																				<span class="text-primary">Paid:</span> $773<br>
																				<span class="text-danger">Unpaid:</span> $343
																			</td>
																			<td class="text-muted fs-15 fw-semibold">31 Oct 21</td>
																			<td>
																				<div class="form-group mb-0">
																					<ul>
																						<li class="select-status">
																							<select class="form-control invoice-status-search" data-placeholder="Select Status">
																								<option value="PAID">paid</option>
																								<option value="UNPAID" selected>unpaid</option>
																								<option value="OVERDUE">overdue</option>
																							</select>
																						</li>
																					</ul>
																				</div>
																			</td>
																			<td>
																				<div class="d-flex align-items-stretch">
																					<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																					</a>
																					<a href="#" class="d-flex align-items-center btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="tab_6">
											<div class="row">
												<div class="col-md-12">
													<div class="card">
														<div class="card-header border-bottom">
															<h3 class="card-title">Files</h3>
														</div>
														<div class="card-body files-table-container">
															<div class="table-responsive">
																<table id="projectfiles-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom">
																	<thead>
																		<tr class="row-first">
																			<th>File Name</th>
																			<th>Date</th>
																			<th>Type</th>
																			<th>Size</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
																					<span class="mb-1 font-weight-semibold">noa documentation</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>doc</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample video</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>mp4</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">30mb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample image</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>jpeg</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>

																					<span class="mb-1 font-weight-semibold">word document</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>doc</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#efc956" d="M21.65137,2.24121a1.00561,1.00561,0,0,0-.80323-.22949l-13,2A1.00054,1.00054,0,0,0,7,5V15.35107A3.45946,3.45946,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.85779L20,9.16553v4.18554A3.45946,3.45946,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A.99909.99909,0,0,0,21.65137,2.24121Z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample audio</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>mp3</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">5.3mb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>

																					<span class="mb-1 font-weight-semibold">sample video</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>mp4</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">30mb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr class="row-last">
																			<td>
																				<div class="recent-files">
																					<svg class="file-manager-icon w-icn me-2 d-sm-none-max"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
																					<span class="mb-1 font-weight-semibold">sample image</span>
																				</div>
																			</td>
																			<td>
																				<span class="text-muted modified-date">07/10/21, 03:30</span>
																			</td>
																			<td>
																				<span>jpeg</span>
																			</td>
																			<td>
																				<span class=" text-muted file-size">15kb</span>
																				<div class="float-end ms-auto">
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start recent-files-options">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!--ROW CLOSED-->

                            @endsection

            @section('modal')

            <!--TASK MODAL-->
			<div class="modal fade" id="Vertically">
				<div class="modal-dialog modal-dialog-centered task-view-modal" role="document">
					<div class="modal-content modal-content-demo">

						<div class="modal-header p-5">
							<h4 class="modal-title text-dark">#1. Sit sed takimata sanctus invidunt</h4><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>

						<div class="modal-body">
							<div class="row">
								<div class="col-md-12 d-flex mb-4">
									<p class="m-0 wp-30 text-muted">Project Name</p>
									<p class="m-0 wp-70 text-dark">Noa Dashboard UI</p>
								</div>
								<div class="col-md-12 d-flex mb-4">
									<p class="m-0 wp-30 text-muted">Assigned To</p>
									<div class="m-0 wp-70 text-dark d-flex align-items-center">
										<div class="me-2">
											<img alt="User Avatar" class="rounded-circle avatar-sm" src="{{asset('assets/images/users/7.jpg')}}">
										</div>
										<div>
											<p class="mb-1">Daniel Obrien</p>
										</div>
									</div>
								</div>
								<div class="col-md-12 d-flex mb-4">
									<p class="m-0 wp-30 text-muted">Start Date</p>
									<p class="m-0 wp-70 text-dark">30-10-2021</p>
								</div>
								<div class="col-md-12 d-flex mb-4">
									<p class="m-0 wp-30 text-muted">Status</p>
									<div class="m-0 wp-70 text-dark">
										<span class="mb-0 mt-1 status-main in-progress">In Progress</span>
									</div>
								</div>
								<div class="col-md-12 d-flex mb-4">
									<p class="m-0 wp-30 text-muted">End Date</p>
									<p class="m-0 wp-70 text-dark">---</p>
								</div>
								<div class="col-md-12 d-flex mb-4">
									<p class="m-0 wp-30 text-muted">Description</p>
									<p class="m-0 wp-70 text-dark">Kasd dolore lorem eos stet at, dolor ipsum elitr sea amet amet stet justo, sed.</p>
								</div>
							</div>
						</div>

						<div class="modal-footer p-0 border-top-0">

							<!-- Tabs -->
							<div class="tabs-menu4 w-100">
								<nav class="nav border-bottom px-4 d-block d-lg-flex flex-2">
									<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1 active" data-bs-toggle="tab" href="#task-files">
										Files
									</a>
									<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#task-subtask">
										Sub Task
									</a>
									<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#task-tracktime">
										Track Time
									</a>
									<a class="nav-link border border-bottom-0 py-1 br-5 mx-1 mx-md-1" data-bs-toggle="tab" href="#task-comments">
										Comments
									</a>
								</nav>
							</div><!-- /Tabs -->

							<div class="tab-content w-100">
								<div class="tab-pane active task-files-tab" id="task-files">
									<div class="row">
										<div class="file-upload-text">
											<input type="file" id="task-file-input" multiple>
											<label for="task-file-input" class="text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-primary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
												Upload Files
												<span class="text-muted"></span>
											</label>
											<i class="fa fa-times-circle remove"></i>
										</div>
									</div>
									<div class="row">
										<div class="mt-3">
											<table class="table table-bordered br-7">
												<thead>
													<tr class="row-first">
														<th>File Name</th>
														<th>Date</th>
														<th>Type</th>
														<th>Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="recent-files">
																<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#b6dfff" d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z"/><path fill="#86cbff" d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z"/></svg>
																<span class="mb-1 font-weight-semibold">noa documentation</span>
															</div>
														</td>
														<td>
															<span class="text-muted modified-date">07/10/21, 03:30</span>
														</td>
														<td>
															<span>doc</span>
														</td>
														<td>
															<span class="text-muted file-size">15kb</span>
														</td>
													</tr>
													<tr>
														<td>
															<div class="recent-files">
																<svg class="file-manager-icon w-icn me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#f2c8db" d="M14,18H5c-1.65611-0.00181-2.99819-1.34389-3-3V9c0.00181-1.65611,1.34389-2.99819,3-3h9c1.65611,0.00181,2.99819,1.34389,3,3v6C16.99819,16.65611,15.65611,17.99819,14,18z"/><path fill="#eaa4c4" d="M21.89465,7.55359c-0.24683-0.49432-0.8476-0.69495-1.34192-0.44812l-3.56421,1.7821C16.98999,8.92572,16.99994,8.96149,17,9v6c-0.00006,0.03851-0.01001,0.07428-0.01147,0.11243l3.56421,1.7821C20.69165,16.96381,20.84479,16.99994,21,17c0.55212-0.00037,0.99969-0.44788,1-1V8C21.99994,7.84503,21.96387,7.6922,21.89465,7.55359z"/></svg>

																<span class="mb-1 font-weight-semibold">sample video</span>
															</div>
														</td>
														<td>
															<span class="text-muted modified-date">07/10/21, 03:30</span>
														</td>
														<td>
															<span>mp4</span>
														</td>
														<td>
															<span class="text-muted file-size">30mb</span>
														</td>
													</tr>
													<tr class="row-last">
														<td>
															<div class="recent-files">
																<svg class="file-manager-icon w-icn me-2"  xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c8e4a6" d="M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#add679" d="M19,2H5C3.34515,2.00483,2.00483,3.34515,2,5v8.86l3.88-3.88c1.18747-1.13,3.05253-1.13,4.24,0l2.87139,2.887l0.88752-0.88751c1.17344-1.16662,3.06874-1.16662,4.24218,0L22,15.8584V5C21.99517,3.34515,20.65485,2.00483,19,2z M13.5,9C12.67157,9,12,8.32843,12,7.5S12.67157,6,13.5,6S15,6.67157,15,7.5C14.9991,8.32805,14.32805,8.9991,13.5,9z"/><path fill="#77bc21" d="M10.12,9.98c-1.18747-1.13-3.05253-1.13-4.24,0L2,13.86V19c0.00484,1.65484,1.34516,2.99516,3,3h14c0.81512-0.00034,1.59497-0.3325,2.16-0.92L10.12,9.98z"/><path fill="#c8e4a6" d="M22,15.8584l-3.87891-3.87891c-1.17345-1.1666-3.06873-1.1666-4.24218,0L12.99139,12.867l8.16425,8.20856C21.69776,20.5208,22.00089,19.77567,22,19V15.8584z"/></svg>
																<span class="mb-1 font-weight-semibold">sample image</span>
															</div>
														</td>
														<td>
															<span class="text-muted modified-date">07/10/21, 03:30</span>
														</td>
														<td>
															<span>jpeg</span>
														</td>
														<td>
															<span class="text-muted file-size">15kb</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div class="tab-pane" id="task-subtask">
									<div class="row">
										<div class="col-md-12">
											<div class="d-flex add-task-container">
												<input type="text" class="form-control wp-40 subtask-input" placeholder="Type Task Here..." id="subTaskInput">
												<a href="javascript:void(0)" role="button" class="text-teritary text-center ms-2 me-2" id="addTask">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-teritary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
													Add
												</a>
												<a href="javascript:void(0)" role="button" class="text-primary text-center ms-2" id="completedAll">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-primary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
													Mark All
												</a>
											</div>
											<label for="subTaskInput" class="w-100 d-block text-danger" id="errorNote"></label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 mt-3">
											<ul class="sub-list-container">
												<li class="sub-list-item task-completed">
													<div class="sub-list-main">
														<div class="check-btn"></div>
														<span class="sub-list-text text-muted" onclick="taskCompleted(event)">Gubergren vero nonumy vero no.</span>
													</div>
													<i class="fe fe-trash delete-main text-muted"></i>
												</li>
												<li class="sub-list-item">
													<div class="sub-list-main">
														<div class="check-btn"></div>
														<span class="sub-list-text text-muted" onclick="taskCompleted(event)">Duo no elitr diam labore sit invidunt. Magna gubergren erat.</span>
													</div>
													<i class="fe fe-trash delete-main text-muted"></i>
												</li>
												<li class="sub-list-item">
													<div class="sub-list-main">
														<div class="check-btn"></div>
														<span class="sub-list-text text-muted" onclick="taskCompleted(event)">Consetetur clita diam est eos invidunt. Eirmod magna.</span>
													</div>
													<i class="fe fe-trash delete-main text-muted"></i>
												</li>
											</ul>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-end mt-3">
											<a href="javascript:void(0)" role="button" class="text-danger" id="deleteAllTasks">
												<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-danger" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
												Delete All
											</a>
										</div>
									</div>
								</div>

								<div class="tab-pane" id="task-tracktime">
									<div class="row">
										<table class="table table-bordered">
											<thead>
												<tr class="row-first">
													<th class="bg-transparent border-bottom-0">Team Member</th>
													<th class="bg-transparent border-bottom-0">Start Date & Time</th>
													<th class="bg-transparent border-bottom-0">End Date & Time</th>
													<th class="bg-transparent border-bottom-0">Total Time</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
															</div>
															<div>
																<h6 class="mb-1">Skyler Hilda</h6>
																<span class="text-muted fs-12">member@spruko.com</span>
															</div>
														</div>
													</td>
													<td class="text-muted fs-13 fw-semibold">31 Oct 21 & 14:56</td>
													<td class="text-muted fs-13 fw-semibold">01 Nov 21 & 09:35</td>
													<td class="text-dark fs-13 fw-semibold">Days: 4<br>Hours: 10<br>Minutes: 22</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
															</div>
															<div>
																<h6 class="mb-1">Lisa Morgan</h6>
																<span class="text-muted fs-12">member@spruko.com</span>
															</div>
														</div>
													</td>
													<td class="text-muted fs-13 fw-semibold">30 Oct 21 & 12:56</td>
													<td class="text-muted fs-13 fw-semibold">11 Nov 21 & 09:35</td>
													<td class="text-dark fs-13 fw-semibold">Days: 15<br>Hours: 12<br>Minutes: 52</td>
												</tr>
												<tr>
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
															</div>
															<div>
																<h6 class="mb-1">Tyler Durder</h6>
																<span class="text-muted fs-12">member@spruko.com</span>
															</div>
														</div>
													</td>
													<td class="text-muted fs-13 fw-semibold">15 Oct 21 & 15:56</td>
													<td class="text-muted fs-13 fw-semibold">01 Nov 21 & 16:40</td>
													<td class="text-dark fs-13 fw-semibold">Days: 18<br>Hours: 8<br>Minutes: 52</td>
												</tr>
												<tr class="row-last">
													<td>
														<div class="d-flex align-items-center">
															<div class="me-2">
																<span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
															</div>
															<div>
																<h6 class="mb-1">Jorah Randy</h6>
																<span class="text-muted fs-12">member@spruko.com</span>
															</div>
														</div>
													</td>
													<td class="text-muted fs-13 fw-semibold">18 Oct 21 & 10:30</td>
													<td class="text-muted fs-13 fw-semibold">09 Nov 21 & 09:45</td>
													<td class="text-dark fs-13 fw-semibold">Days: 22<br>Hours: 10<br>Minutes: 12</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="tab-pane" id="task-comments">
									<div class="row">
										<div class="mt-5">
											<div class="media mb-5 overflow-visible">
												<div class="me-3">
													<a href{{url('="profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
												</div>
												<div class="media-body overflow-visible">
													<div class="border mb-5 p-4 br-5">
														<nav class="nav float-end">
															<div class="dropdown">
																<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-end">
																	<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																	<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																	<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																	<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																</div>
															</div>
														</nav>
														<h5 class="mt-0">Gavin Murray <span class="text-muted fs-12 ms-1">1 Day ago</span></h5>
														<span><i class="fe fe-thumb-up text-danger"></i></span>
														<p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
															what industry you’re working in, as a blogger, you should live and die by this statement.</p>
														<a class="like" href="javascript:;">
															<span class="badge btn-danger-light rounded-pill py-2 px-3">
																<i class="fe fe-heart me-1"></i>56</span>
														</a>
														<span class="reply">
															<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
														</span>
													</div>
													<div class="media mb-5 overflow-visible">
														<div class="me-3">
															<a href{{url('="profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/2.jpg')}}"> </a>
														</div>
														<div class="media-body border p-4 overflow-visible br-5">
															<nav class="nav float-end">
																<div class="dropdown">
																	<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report Abuse</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
																	</div>
																</div>
															</nav>
															<h5 class="mt-0">Mozelle Belt <span class="text-muted fs-12 ms-1 bg-normal-light">Reply to Gavin Murray</span><span class="text-muted fs-12 ms-1">2 min ago</span></h5>
															<span><i class="fe fe-thumb-up text-danger"></i></span>
															<p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should
																live and die by this statement.</p>
															<a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a>
															<span class="reply" >
																<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
															</span>
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
				</div>
			</div><!--TASK MODAL ENDS-->

			<!--NEW TICKET MODAL-->
			<div class="modal fade" id="ticket-vertical">
				<div class="modal-dialog new-ticket-modal" role="document">
					<div class="modal-content modal-content-demo">

						<div class="modal-header p-5">
							<h4 class="modal-title text-dark">Create New Ticket</h4><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
						</div>

						<div class="modal-body">
							<div class="row">
								<form class="form-horizontal">
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Title</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control"  placeholder="User Name" value="Ticket Title Here">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Client</label>
											</div>
											<div class="col-md-9">
												<div class="form-group m-0">
													<select class="form-control select2-show-search" data-placeholder="Choose Type...">
														<option label="Choose one"></option>
														<option value="empty" selected>---</option>
														<option value="samle1">Company Sample</option>
														<option value="sample2">Sample Company</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Requested By</label>
											</div>
											<div class="col-md-9">
												<div class="form-group m-0">
													<select class="form-control select2-client-search" data-placeholder="Select Client">
														<option value="def" selected>Select Client</option>
														<option value="18">Robert Gendry</option>
														<option value="16">Jorah Mormont</option>
														<option value="14">Damon Salvatore</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Ticket Type</label>
											</div>
											<div class="col-md-9">
												<div class="form-group m-0">
													<select class="form-control select2-show-search" data-placeholder="Choose Type...">
														<option label="Choose one"></option>
														<option value="empty" selected>---</option>
														<option value="gensupport">General Support</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Description</label>
											</div>
											<div class="col-md-9">
												<textarea name="description" id="ticketDescription" cols="40" rows="8" class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label">Assign To</label>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<ul>
														<li class="select-agent">
															<select class="form-control select2-agent-search" data-placeholder="Select Agent">
																<option value="def" selected>Selet Agent</option>
																<option value="1">Angeline Julliet</option>
																<option value="2">Helena Rose</option>
																<option value="13">Daniel Obrien</option>
																<option value="15">Jorah Randy</option>
																<option value="3">Emma Watson</option>
															</select>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="modal-footer">
							<div class="btn-list">
								<a href="javascript:void(0)" class="btn btn-info">
									<i class="fe fe-upload"></i>
									Upload Files
								</a>
								<a href="javascript:void(0)" class="btn btn-primary">
									<i class="fe fe-check-circle"></i>
									Save
								</a>
								<a href="javascript:void(0)" class="btn btn-outline-danger ms-auto" aria-label="Close" data-bs-dismiss="modal">
									<i class="fe fe-x-circle"></i>
									Cancel
								</a>
							</div>
						</div>
					</div>
				</div>
			</div><!--NEW TICKET MODAL ENDS-->

            @endsection

        @section('scripts')

		<!-- FILE UPLOAD JS -->
        <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- bootstrap-datepicker js -->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/js/datepicker.js')}}"></script>

		<!-- INTERNAL Data tables js-->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

		<!-- PROJECT-DETAILS JS-->
		<script src="{{asset('assets/js/project-details.js')}}"></script>

        @endsection
