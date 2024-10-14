@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

                            <!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Projects-List</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
										<li class="breadcrumb-item active" aria-current="page">Projects-List</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-body p-4">
											<div class="d-flex align-items-center justify-content-between">
												<h4 class="m-0">All Projects</h4>
												<div class="btn-list">
													<a class="btn btn-outline-primary" href="{{url('projects')}}">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
													</a>
													<a class="btn btn-primary" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M3.5,12C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13S4,12.776123,4,12.5S3.776123,12,3.5,12z M6.5,8h15C21.776123,8,22,7.776123,22,7.5S21.776123,7,21.5,7h-15C6.223877,7,6,7.223877,6,7.5S6.223877,8,6.5,8z M3.5,17C3.223877,17,3,17.223877,3,17.5S3.223877,18,3.5,18S4,17.776123,4,17.5S3.776123,17,3.5,17z M21.5,12h-15C6.223877,12,6,12.223877,6,12.5S6.223877,13,6.5,13h15c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,12,21.5,12z M3.5,7C3.223877,7,3,7.223877,3,7.5S3.223877,8,3.5,8S4,7.776123,4,7.5S3.776123,7,3.5,7z M21.5,17h-15C6.223877,17,6,17.223877,6,17.5S6.223877,18,6.5,18h15c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z"/></svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12">
									<div class="card">
										<div class="card-body project-list-table-container">
											<div class="table-responsive">
												<table id="project-table" class="table text-nowrap mb-0 table-bordered border-top border-bottom project-list-main">
													<thead class="table-head">
														<tr>
															<th class="bg-transparent border-bottom-0 w-5">S.no</th>
															<th class="bg-transparent border-bottom-0">Title</th>
															<th class="bg-transparent border-bottom-0">Tasks</th>
															<th class="bg-transparent border-bottom-0">Date</th>
															<th class="bg-transparent border-bottom-0">Members</th>
															<th class="bg-transparent border-bottom-0">Due Date</th>
															<th class="bg-transparent border-bottom-0">Progress</th>
															<th class="bg-transparent border-bottom-0">Submitted Date</th>
															<th class="bg-transparent border-bottom-0">Status</th>
															<th class="bg-transparent border-bottom-0 no-btn">Action</th>
														</tr>
													</thead>
													<tbody class="table-body">
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">01.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Web Designing</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">28</td>
															<td class="text-muted fs-15 fw-semibold">10 Aug 21</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+15</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">11 Nov 21</td>
															<td>
																<div class="project-percentage small-bar">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="35%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill text-warning bg-warning-transparent">On Hold</span>
															</td>
															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">02.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Cloud Computing</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">58</td>
															<td class="text-muted fs-15 fw-semibold">21 Jan 21</td>
															<td>
																<div class="avatar-list">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">16 Apr 21</td>
															<td>
																<div class="project-percentage medium-bar">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="62%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-info-transparent text-info">In Progress</span>
															</td>
															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">03.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Ethical Hacking</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">75</td>
															<td class="text-muted fs-15 fw-semibold">21 Jul 17</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+3</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<div class="project-percentage submitted">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="100%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">21 Mar 18</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">completed</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">04.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">SEO Using React</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">118</td>
															<td class="text-muted fs-15 fw-semibold">24 Apr 21</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+5</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">25 Nov 21</td>
															<td>
																<div class="project-percentage small-bar small-sm">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="15%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill text-warning bg-warning-transparent">On Hold</span>
															</td>
															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">05.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">System Design</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">116</td>
															<td class="text-muted fs-15 fw-semibold">24 Jan 21</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/12.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+6</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<div class="project-percentage submitted">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="100%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">16 May 21</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">completed</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">06.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Login Authentication</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">15</td>
															<td class="text-muted fs-15 fw-semibold">16 Apr 21</td>
															<td>
																<div class="avatar-list">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<div class="project-percentage submitted">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="100%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">29 Dec 21</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">Completed</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">07.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Web Designing</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">28</td>
															<td class="text-muted fs-15 fw-semibold">10 Aug 21</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+15</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">11 Nov 21</td>
															<td>
																<div class="project-percentage small-bar">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="35%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill text-warning bg-warning-transparent">On Hold</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">08.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Server Side Validation</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">58</td>
															<td class="text-muted fs-15 fw-semibold">21 Jan 21</td>
															<td>
																<div class="avatar-list">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">16 Apr 21</td>
															<td>
																<div class="project-percentage medium-bar">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="55%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-info-transparent text-info">In Progress</span>
															</td>


															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">09.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Database Administration</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">75</td>
															<td class="text-muted fs-15 fw-semibold">21 Jul 17</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+3</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<div class="project-percentage submitted">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="100%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">21 Mar 18</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">completed</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">10.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">SEO Using React</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">118</td>
															<td class="text-muted fs-15 fw-semibold">24 Apr 21</td>
															<td>
																<div class="avatar-list avatar-list-stacked">
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																	<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/5.jpg')}}"></span>
																	<span class="avatar bradius bg-primary">+7</span>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">25 Nov 21</td>
															<td>
																<div class="project-percentage small-bar small-sm">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="25%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill text-warning bg-warning-transparent">On Hold</span>
															</td>
															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">11.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">System Design</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">116</td>
															<td class="text-muted fs-15 fw-semibold">24 Jan 21</td>
															<td>

															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<div class="project-percentage submitted">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="100%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">16 May 21</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">completed</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td class="text-muted fs-15 fw-semibold text-center">12.</td>
															<td>
																<h6 class="mb-0 fs-14 fw-semibold">Login Authentication</h6>
															</td>
															<td class="text-muted fs-15 fw-semibold">15</td>
															<td class="text-muted fs-15 fw-semibold">16 Apr 21</td>
															<td>

															</td>
															<td class="text-muted fs-15 fw-semibold">29 Dec 21</td>
															<td>
																<div class="project-percentage medium-bar medium-lg">
																	<div class="progress fileprogress h-auto ps-0" data-bs-toggle="tooltip" data-bs-original-title="70%">
																		<div class="progress-bar progress-bar-xs" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</div>
															</td>
															<td class="text-muted fs-15 fw-semibold">---</td>
															<td>
																<span class="mb-0 mt-1 badge rounded-pill bg-info-transparent text-info">In Progress</span>
															</td>

															<td>
																<div class="d-flex align-items-stretch">
																	<a class="btn btn-sm btn-outline-secondary border me-2" data-bs-toggle="tooltip" data-bs-original-title="Delete">
																		<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none" /><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" /></svg>
																	</a>
																	<a href="#" class="border br-5 px-2 py-1 text-muted d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																	<div class="dropdown-menu dropdown-menu-start">
																		<a class="dropdown-item" href="#"><i class="fe fe-edit-2 me-2"></i> Edit</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																		<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!--ROW CLOSED-->

                            @endsection

        @section('scripts')

        <!-- INTERNAL DATA-TABLES JS-->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

        <!-- PROJECT-LIST JS-->
        <script src="{{asset('assets/js/project-list.js')}}"></script>

        @endsection
