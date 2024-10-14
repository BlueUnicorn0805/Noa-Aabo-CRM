@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Tasks List</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Tasks</a></li>
										<li class="breadcrumb-item active" aria-current="page">Task list</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-md-12 col-xl-12">
									<div class="row">
										<div class="col-md-12 col-lg-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<h4>Total Tasks</h4>
															<p>35</p>
														</div>
														<div class="col-4">
															<div class="hpx-50 wpx-50 bg-primary br-5 d-flex align-items-center justify-content-center ms-auto">
																<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<h4>Completed Tasks</h4>
															<p>15</p>
														</div>
														<div class="col-4">
															<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-secondary ms-auto">
																<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<h4>In Progress</h4>
															<p>4</p>
														</div>
														<div class="col-4">
															<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-info ms-auto">
																<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<h4>On Hold</h4>
															<p>6</p>
														</div>
														<div class="col-4">
															<div class="hpx-50 wpx-50 br-5 d-flex align-items-center justify-content-center bg-warning ms-auto">
																<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17,4h-1.1846313C15.4013672,2.8383179,14.3035889,2.0014648,13,2h-2C9.6964111,2.0014648,8.5986328,2.8383179,8.1846313,4H7C5.3438721,4.0018311,4.0018311,5.3438721,4,7v12c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7C19.9981689,5.3438721,18.6561279,4.0018311,17,4z M9,5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2v2H9V5z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h1v2.5006104C8.0001831,7.7765503,8.223999,8.0001831,8.5,8h7.0006104C15.7765503,7.9998169,16.0001831,7.776001,16,7.5V5h1c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z"/></svg>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12 mb-3">
									<div class="btn-list">
										<a href="{{url('task-create')}}" class="btn btn-primary">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
											New Task
										</a>
										<a href="{{url('task-edit')}}" class="btn btn-info">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
											Edit Task
										</a>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-body tasks-table-container">
											<div class="table-responsive">
												<table id="tasks-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom">
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
															<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >Sit sed takimata sanctus invidunt</a></td>
															<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
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
																	<a href="#" class="border br-5 px-2 py-1 d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">02.</td>
															<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >Diam lorem dolor no lorem.</a></td>
															<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
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
																	<a href="#" class="border br-5 px-2 py-1 d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">03.</td>
															<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >Amet clita sea ut dolor consetetur, elitr.</a></td>
															<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
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
																	<a href="#" class="border br-5 px-2 py-1 d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">04.</td>
															<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >Est sea erat at kasd.</a></td>
															<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
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
																	<a href="#" class="border br-5 px-2 py-1 d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">05.</td>
															<td class="text-muted fs-15 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >Rebum gubergren at kasd takimata clita.</a></td>
															<td class="text-muted fs-15 fw-semibold"><a href="{{url('project-details')}}" class="text-dark">Noa Dashboard UI</a></td>
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
																	<a href="#" class="border br-5 px-2 py-1 d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
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
																<img alt="User Avatar" class="rounded-circle avatar-md" src="{{asset('assets/images/users/8.jpg')}}">
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
																<img alt="User Avatar" class="rounded-circle avatar-md" src="{{asset('assets/images/users/2.jpg')}}">
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
																<img alt="User Avatar" class="rounded-circle avatar-md" src="{{asset('assets/images/users/11.jpg')}}">
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
																<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/14.jpg')}}">
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
													<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
												</div>
												<div class="media-body overflow-visible">
													<div class="border mb-5 p-4 br-5">
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
														<h5 class="mt-0">Gavin Murray <span class="text-muted fs-12 ms-1">1 Day ago</span></h5>
														<span><i class="fe fe-thumb-up text-danger"></i></span>
														<p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
															what industry you’re working in, as a blogger, you should live and die by this statement.</p>
														<a class="like" href="javascript:;">
															<span class="badge btn-danger-light rounded-pill py-2 px-3">
																<i class="fe fe-heart me-1"></i>56</span>
														</a>
														<span class="reply" id="1">
															<a href="javascript:;"><span class="badge btn-info-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
														</span>
													</div>
													<div class="media mb-5 overflow-visible">
														<div class="me-3">
															<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/2.jpg')}}"> </a>
														</div>
														<div class="media-body border p-4 overflow-visible br-5">
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
															<h5 class="mt-0">Mozelle Belt <span class="text-muted fs-12 ms-1 bg-normal-light">Reply to Gavin Murray</span><span class="text-muted fs-12 ms-1">2 min ago</span></h5>
															<span><i class="fe fe-thumb-up text-danger"></i></span>
															<p class="font-13 text-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger, you should
																live and die by this statement.</p>
															<a class="like" href="javascript:;"><span class="badge btn-danger-light rounded-pill py-2 px-3"><i class="fe fe-heart me-1"></i>56</span></a>
															<span class="reply" id="2">
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

            @endsection

        @section('scripts')

		<!-- INTERNAL Data tables js-->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- TASKS LIST JS-->
		<script src="{{asset('assets/js/tasks-list.js')}}"></script>

        @endsection
