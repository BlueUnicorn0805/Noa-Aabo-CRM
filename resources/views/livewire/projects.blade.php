@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

                            <!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Projects</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
										<li class="breadcrumb-item active" aria-current="page">Projects</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<div class="card">
												<div class="card-body project-type-container projects p-4">
													<h4 class="m-0" id="typeTitle">All Projects</h4>
													<div class="d-sm-flex align-items-center">
														<div class="btn-list mx-4">
															<a class="btn btn-primary" href="#">
																<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z"/></svg>
															</a>
															<a class="btn btn-outline-primary" href="{{url('projects-list')}}">
																<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M3.5,12C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13S4,12.776123,4,12.5S3.776123,12,3.5,12z M6.5,8h15C21.776123,8,22,7.776123,22,7.5S21.776123,7,21.5,7h-15C6.223877,7,6,7.223877,6,7.5S6.223877,8,6.5,8z M3.5,17C3.223877,17,3,17.223877,3,17.5S3.223877,18,3.5,18S4,17.776123,4,17.5S3.776123,17,3.5,17z M21.5,12h-15C6.223877,12,6,12.223877,6,12.5S6.223877,13,6.5,13h15c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,12,21.5,12z M3.5,7C3.223877,7,3,7.223877,3,7.5S3.223877,8,3.5,8S4,7.776123,4,7.5S3.776123,7,3.5,7z M21.5,17h-15C6.223877,17,6,17.223877,6,17.5S6.223877,18,6.5,18h15c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z"/></svg>
															</a>
														</div>
														<nav class="nav card-body p-1 project-type">
															<a class="mb-1 mb-xl-0 nav-link border active" data-bs-toggle="tab" href="#allProjects" id="all">
																All
															</a>
															<a class="mb-1 mb-xl-0 nav-link border" data-bs-toggle="tab" href="#progressProjects" id="inProgress">
																In Progress
															</a>
															<a class="mb-1 mb-xl-0 nav-link border" data-bs-toggle="tab" href="#holdProjects" id="onHold">
																On Hold
															</a>

															<a class="mb-1 mb-xl-0 nav-link border" data-bs-toggle="tab" href="#completedProjects" id="completed">
																Completed
															</a>
														</nav>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row ">
										<div class="tab-content">
											<div class="tab-pane active h-100" id="allProjects">
												<div class="row">
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M4.2069702,12l5.1464844-5.1464844c0.1871338-0.1937866,0.1871338-0.5009155,0-0.6947021C9.1616211,5.9602051,8.8450928,5.9547119,8.6464844,6.1465454l-5.5,5.5c-0.000061,0-0.0001221,0.000061-0.0001221,0.0001221c-0.1951904,0.1951904-0.1951294,0.5117188,0.0001221,0.7068481l5.5,5.5C8.7401123,17.9474487,8.8673706,18.0001831,9,18c0.1325684,0,0.2597046-0.0526733,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L4.2069702,12z M20.8534546,11.6465454l-5.5-5.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L19.7930298,12l-5.1465454,5.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C14.5,17.776062,14.723877,17.999939,15,18c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l5.5-5.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C21.0487671,12.1581421,21.0487061,11.8416748,20.8534546,11.6465454z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1"> <a href="{{url('project-details')}}" class="float-start">Web Design</a> <span class="text-muted bg-light fs-11 mx-2">opened yesterday</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">28 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 19</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+15</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">11 Nov 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,14.5c-0.0009155-0.828064-0.671936-1.4990845-1.5-1.5h-6c-0.828064,0.0009155-1.4990845,0.671936-1.5,1.5V15H8.5v-4h2.75c1.6182251,0.0029907,3.0551758-1.0343018,3.5617676-2.571228c0.6471558-1.9633179-0.4197998-4.0794678-2.3831177-4.7266235c-0.7163696-1.3944092-2.0479736-2.3696899-3.5935059-2.631958C6.1256714,0.6103516,3.5564575,2.434082,3.0966797,5.1435547C1.8478394,5.5370483,0.9989624,6.6956177,1,8.0049438C1.0014038,9.6604614,2.3445435,11.0013428,4,11h3.5v8.5005493C7.5001831,19.7765503,7.723999,20.0001831,8,20h5v0.5c0.0009155,0.828064,0.671936,1.4990845,1.5,1.5h6c0.828064-0.0009155,1.4990845-0.671936,1.5-1.5v-2c-0.0004272-0.3859863-0.1505127-0.7342529-0.3901367-1c0.239624-0.2657471,0.3897095-0.6140137,0.3901367-1V14.5z M4,10c-0.9650269,0.0012817-1.7929077-0.687561-1.9671631-1.6367188c-0.1991577-1.085022,0.5189209-2.1260376,1.6039429-2.3251953c0.2183228-0.0407715,0.383667-0.220459,0.40625-0.4414062C4.2388306,3.5576172,5.9515381,2.0008545,8,2c1.5571899,0.0071411,2.9694214,0.9152222,3.6220703,2.3291016c0.0628052,0.1350098,0.182312,0.2351074,0.3261719,0.2734375c1.2108765,0.3153076,2.0549316,1.4101562,2.0516968,2.661438C13.9960938,8.7788696,12.7648926,10.0038452,11.25,10H4z M13,18.5V19H8.5v-3H13v0.5c0.0004272,0.3859863,0.1505127,0.7342529,0.3901367,1C13.1505127,17.7657471,13.0004272,18.1140137,13,18.5z M21,20.5c-0.0005493,0.2759399-0.2240601,0.4994507-0.5,0.5h-6c-0.2759399-0.0005493-0.4994507-0.2240601-0.5-0.5v-2c0.0005493-0.2759399,0.2240601-0.4994507,0.5-0.5h6c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5V20.5z M21,16.5c-0.0005493,0.2759399-0.2240601,0.4994507-0.5,0.5h-6c-0.2759399-0.0005493-0.4994507-0.2240601-0.5-0.5v-2c0.0005493-0.2759399,0.2240601-0.4994507,0.5-0.5h6c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5V16.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-0 text-normal"> <a href="{{url('project-details')}}" class="float-start">Cloud Computing</a> <span class="text-muted bg-light fs-11  mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">58 tasks</span>
																						<span class="text-teritary ps-1 fs-11">16 Apr 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage large-bar">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">90%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20,6c0-2.2091675-1.7908325-4-4-4H8C5.7908325,2,4,3.7908325,4,6c0,0.1142578,0.024231,0.2217407,0.0336304,0.3335571C4.0148315,6.3861694,4,6.440979,4,6.5v6v6c0.0023193,1.9320068,1.5679932,3.4976807,3.5,3.5h9c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5v-6v-6c0-0.059021-0.0148315-0.1138306-0.0336304-0.1664429C19.975769,6.2217407,20,6.1142578,20,6z M19,18.5c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-9c-1.380188-0.0012817-2.4987183-1.119812-2.5-2.5v-3.5582886C5.635376,15.5922241,6.519104,15.9988403,7.5,16h9c0.980896-0.0011597,1.864624-0.4077759,2.5-1.0582886V18.5z M19,12.5c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-9c-1.380188-0.0012817-2.4987183-1.119812-2.5-2.5V8.6204834C5.7332153,9.4592285,6.7984009,10,8,10h8c1.2015991,0,2.2667847-0.5407715,3-1.3795166V12.5z M16,9H8C6.3431396,9,5,7.6568604,5,6s1.3431396-3,3-3h8c1.6568604,0,3,1.3431396,3,3S17.6568604,9,16,9z M7.5,18C7.223877,18,7,18.223877,7,18.5S7.223877,19,7.5,19S8,18.776123,8,18.5S7.776123,18,7.5,18z M7.5,12C7.223877,12,7,12.223877,7,12.5S7.223877,13,7.5,13S8,12.776123,8,12.5S7.776123,12,7.5,12z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">SQL</a> <span class="text-muted bg-light fs-11 mx-2">opened 1mth ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">350 tasks</span>
																						<span class="text-teritary ps-1 fs-11">29 Apr 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+5</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">14 Dec 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage medium-bar medium-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">70%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M7.5,5.125c0.3451538,0,0.625-0.2798462,0.625-0.625S7.8451538,3.875,7.5,3.875S6.875,4.1548462,6.875,4.5S7.1548462,5.125,7.5,5.125z M7.5,9.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S7.8451538,9.875,7.5,9.875z M21.5,20h-7.050415c-0.1995239-0.9827271-0.9754639-1.7548218-1.9595337-1.9506226C12.4918213,18.0323486,12.5,18.0175171,12.5,18v-4h5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C19.5971069,7.0443726,19.9992065,6.3217163,20,5.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-11C5.119812,1.0012817,4.0012817,2.119812,4,3.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C4.4028931,7.9556274,4.0007935,8.6782837,4,9.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h5v4c0,0.0001831,0,0.0003662,0,0.0005493c0,0.017334,0.0081787,0.0319824,0.0098877,0.0488281C10.5258179,18.2451782,9.749939,19.0172729,9.550415,20H2.5C2.223877,20,2,20.223877,2,20.5S2.223877,21,2.5,21h7.050415C9.7821045,22.1411133,10.7905273,23,12,23c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,20,21.5,20z M5,5.5v-2C5.0009155,2.671936,5.671936,2.0009155,6.5,2h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-11C5.671936,6.9990845,5.0009155,6.328064,5,5.5z M6.5,13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C5.0009155,8.671936,5.671936,8.0009155,6.5,8h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H6.5z M12,22c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,19,12,19c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,21.3284302,12.8284302,22,12,22z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Ethical Hacking</a> <span class="text-muted bg-light fs-11 mx-2">opened 3d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">75 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 17</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+8</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">21 Mar 18</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9.5,11h-4C5.223877,11,5,11.223877,5,11.5S5.223877,12,5.5,12h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,11,9.5,11z M18.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,16.875,18.5,16.875z M18.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,4.875,18.5,4.875z M15.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,16.875,15.5,16.875z M9.5,17h-4C5.223877,17,5,17.223877,5,17.5S5.223877,18,5.5,18h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,17,9.5,17z M15.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,10.875,15.5,10.875z M15.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,4.875,15.5,4.875z M9.5,5h-4C5.223877,5,5,5.223877,5,5.5S5.223877,6,5.5,6h4C9.776123,6,10,5.776123,10,5.5S9.776123,5,9.5,5z M18.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,10.875,18.5,10.875z M22,6.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,8.9556274,2.0007935,9.6782837,2,10.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,14.9556274,2.0007935,15.6782837,2,16.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2c0.6122437-0.4556274,1.0143433-1.1782837,1.0151367-2v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C21.5971069,8.0443726,21.9992065,7.3217163,22,6.5z M21,16.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5h15C20.328064,15.0009155,20.9990845,15.671936,21,16.5z M21,10.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C3.0009155,9.671936,3.671936,9.0009155,4.5,9h15C20.328064,9.0009155,20.9990845,9.671936,21,10.5z M21,6.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15C3.671936,7.9990845,3.0009155,7.328064,3,6.5v-2C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Login Authentication</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">15 tasks</span>
																						<span class="text-teritary ps-1 fs-11">21 May 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage medium-bar medium-sm">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">55%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-orange me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.6601562,7c-0.767334-1.3284302-2.5855103-1.836853-4.8673706-1.5704346C14.8826904,3.3205566,13.5338745,2,12,2S9.1172485,3.3204956,8.2071533,5.4296265C5.9249268,5.1627808,4.1060181,5.6706543,3.3398438,7c-0.7667847,1.3283081-0.2972412,3.1570435,1.074585,5c-1.3718262,1.8429565-1.8413696,3.6716919-1.074646,5c0.6367188,1.1025391,1.9942017,1.6435547,3.7421875,1.6435547c0.3729858-0.0189819,0.7437134-0.0548096,1.112915-0.1002197C9.1050415,20.6685791,10.4594116,22,12,22s2.8949585-1.3314209,3.8051147-3.456665c0.3692017,0.0454102,0.7399292,0.0812378,1.112915,0.1002197c1.7469482,0,3.1063843-0.5410156,3.7421265-1.6435547c0.7667847-1.3283081,0.2972412-3.1570435-1.074585-5C20.9573975,10.1570435,21.4269409,8.3283081,20.6601562,7z M15.6480713,8.3894043C15.2786865,8.1427612,14.8995972,7.9006348,14.5,7.6699219c-0.3996582-0.230835-0.7990723-0.4382935-1.1974487-0.6350098c0.6378784-0.2148438,1.2570801-0.3780518,1.8477173-0.4918823C15.3469238,7.1115112,15.5151978,7.7294312,15.6480713,8.3894043z M12,3c1.0654297,0,2.0482178,0.9987793,2.7738037,2.5901489c-0.8824463,0.1806641-1.8171387,0.4703369-2.7739868,0.8580933C11.0432129,6.06073,10.1085815,5.7709351,9.2261353,5.59021C9.9517212,3.9987793,10.9345093,3,12,3z M8.8425293,6.5646973c0.6322021,0.1143799,1.2553101,0.2702026,1.866333,0.4645996C10.3067017,7.2276001,9.9035645,7.4368286,9.5,7.6699219C9.1004028,7.9006348,8.7213135,8.1427612,8.3519287,8.3894043C8.4831543,7.7377319,8.6489868,7.1273193,8.8425293,6.5646973z M4.2050781,7.5c0.6743774-0.8552856,1.7492065-1.2923584,2.8291016-1.1503906c0.2658691,0.0151367,0.5303345,0.0407715,0.7941895,0.0700073c-0.2806396,0.8480225-0.494751,1.7927856-0.6360474,2.8049927C6.3783569,9.859436,5.6602173,10.5241089,5.0626221,11.197998C4.0467529,9.7736816,3.6727905,8.4230347,4.2050781,7.5z M7.0488892,13.3538208C6.5440674,12.9088745,6.0932007,12.4544067,5.6994019,12c0.3937988-0.4544067,0.8446655-0.9089355,1.3494873-1.3538818C7.0200195,11.0892944,7,11.5386353,7,12S7.0200195,12.9107056,7.0488892,13.3538208z M4.2050781,16.5c-0.5322876-0.9230347-0.1583252-2.2736816,0.8575439-3.697998c0.5975952,0.6738892,1.3157349,1.338562,2.1296997,1.9733887c0.1427002,1.0221558,0.3591309,1.9763184,0.6437988,2.8307495C6.0949097,17.7734375,4.7382812,17.4219971,4.2050781,16.5z M8.3519287,15.6105957C8.7213135,15.8572388,9.1004028,16.0993652,9.5,16.3300781c0.3783569,0.2339478,0.7686157,0.4447021,1.1637573,0.6447144c-0.6261597,0.2092285-1.2341309,0.3692017-1.8143921,0.4810181C8.652832,16.8876953,8.4847412,16.2700806,8.3519287,15.6105957z M12,21c-1.0717163,0-2.0603027-1.0095215-2.7870483-2.6173096C10.1655884,18.2009888,11.0983276,17.9318848,12,17.5773926c0.9016113,0.3544922,1.8344116,0.6235962,2.7870483,0.8052979C14.0603027,19.9904785,13.0717163,21,12,21z M15.1503906,17.456543c-0.5805054-0.1118164-1.1887207-0.2718506-1.8151245-0.4812622C13.7307739,16.7751465,14.1212769,16.56427,14.5,16.3300781c0.3995972-0.2307129,0.7786865-0.4728394,1.1480713-0.7194824C15.5151978,16.2703857,15.3470459,16.8881836,15.1503906,17.456543z M15.8648682,14.2316284C15.2859497,14.6641235,14.6652832,15.0805054,14,15.4648438c-0.6655884,0.3839111-1.3366699,0.7131958-2.0007935,0.9981689C11.3355713,16.1780396,10.6650391,15.8487549,10,15.4648438c-0.6652832-0.3843384-1.2859497-0.8007202-1.8648682-1.2332153C8.0501099,13.5140381,8,12.7683105,8,12s0.0501099-1.5140381,0.1351318-2.2316284C8.7140503,9.3358765,9.3347168,8.9194946,10,8.5351562c0.6747437-0.3895264,1.3552246-0.7230835,2.0283813-1.0108032C12.7068481,7.8132324,13.3676758,8.1464844,14,8.5351562c0.6652832,0.3843384,1.2859497,0.8007202,1.8648682,1.2332153C15.9498901,10.4859619,16,11.2316895,16,12S15.9498901,13.5140381,15.8648682,14.2316284z M19.7949219,7.5c0.5322876,0.9230347,0.1583252,2.2736816-0.8575439,3.697998c-0.5975952-0.6738892-1.3157349-1.338562-2.1296997-1.9733887c-0.1427612-1.022644-0.359314-1.9771729-0.644165-2.8319092C17.90448,6.2254639,19.2612915,6.5772095,19.7949219,7.5z M16.9511108,10.6461182C17.4559326,11.0910645,17.9067993,11.5455933,18.3005981,12c-0.3937988,0.4544067-0.8446655,0.9088745-1.3494873,1.3538208C16.9799805,12.9107056,17,12.4613647,17,12S16.9799805,11.0892944,16.9511108,10.6461182z M19.7949219,16.5c-0.5328369,0.9221191-1.8897095,1.2739868-3.6312866,1.1068115c0.28479-0.8546143,0.5013428-1.80896,0.644043-2.8314209c0.8139648-0.6348267,1.5321045-1.2994995,2.1296997-1.9733887C19.9532471,14.2263184,20.3272095,15.5769653,19.7949219,16.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">SEO Using React</a> <span class="text-muted bg-light fs-11 mx-2">opened 4mth ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">75 tasks</span>
																						<span class="text-teritary ps-1 fs-11">16 Jun 20</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+5</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">25 Nov 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-sm">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">15%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,19h-7.050415c-0.1988525-0.9794922-0.9700928-1.7507324-1.949585-1.949585V13h6h0.0006104H20.5c0.276123,0,0.5-0.223877,0.5-0.5S20.776123,12,20.5,12H19V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-9C6.119812,2.0012817,5.0012817,3.119812,5,4.5V12H3.5C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13h2h6v4.050415C10.5205078,17.2492676,9.7492676,18.0205078,9.550415,19H2.5C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h7.050415C9.7821045,21.1411133,10.7905273,22,12,22c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,19,21.5,19z M6,12V4.5C6.0009155,3.671936,6.671936,3.0009155,7.5,3h9c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V12H6z M12,21c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,18,12,18c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,20.3284302,12.8284302,21,12,21z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">System Design</a> <span class="text-muted bg-light fs-11 mx-2">opened 2d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">116 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+7</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">16 Jan 22</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M7.5,17.5C7.223877,17.5,7,17.723877,7,18s0.223877,0.5,0.5,0.5S8,18.276123,8,18S7.776123,17.5,7.5,17.5z M7.5,11.5C7.223877,11.5,7,11.723877,7,12s0.223877,0.5,0.5,0.5S8,12.276123,8,12S7.776123,11.5,7.5,11.5z M19.9599609,5.5903931C19.5619507,3.5466309,16.2093506,2,12,2S4.4380493,3.5466309,4.0400391,5.5903931C4.0144043,5.6505127,4,5.7166138,4,5.7861328v6v0.4755859v6C4,20.3583984,7.5136719,22,12,22s8-1.6416016,8-3.7382812v-6v-0.4755859v-6C20,5.7166138,19.9855957,5.6505127,19.9599609,5.5903931z M19,18.2617188C19,19.5566406,16.125,21,12,21s-7-1.4433594-7-2.7382812v-4.1665039C6.352417,15.2400513,8.949707,16,12,16s5.647583-0.7599487,7-1.9047852V18.2617188z M19,11.7861328v0.4755859C19,13.5566406,16.125,15,12,15s-7-1.4433594-7-2.7382812v-0.4755859V7.961731C6.352417,9.1867065,8.949707,10,12,10s5.647583-0.8132935,7-2.038269V11.7861328z M12,9C7.875,9,5,7.4189453,5,6s2.875-3,7-3s7,1.5809937,7,3S16.125,9,12,9z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Database Administration</a> <span class="text-muted bg-light fs-11 mx-2">opened 3d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">45 tasks</span>
																						<span class="text-teritary ps-1 fs-11">22 Aug 18</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+3</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">17 Dec 19</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,19h-7.050415c-0.1988525-0.9794922-0.9700928-1.7507324-1.949585-1.949585V13h6h0.0006104H20.5c0.276123,0,0.5-0.223877,0.5-0.5S20.776123,12,20.5,12H19V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-9C6.119812,2.0012817,5.0012817,3.119812,5,4.5V12H3.5C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13h2h6v4.050415C10.5205078,17.2492676,9.7492676,18.0205078,9.550415,19H2.5C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h7.050415C9.7821045,21.1411133,10.7905273,22,12,22c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,19,21.5,19z M6,12V4.5C6.0009155,3.671936,6.671936,3.0009155,7.5,3h9c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V12H6z M12,21c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,18,12,18c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,20.3284302,12.8284302,21,12,21z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">System Design</a> <span class="text-muted bg-light fs-11 mx-2">opened 2d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">116 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">16 Apr 22</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">47%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-orange me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9.5,11h-4C5.223877,11,5,11.223877,5,11.5S5.223877,12,5.5,12h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,11,9.5,11z M18.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,16.875,18.5,16.875z M18.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,4.875,18.5,4.875z M15.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,16.875,15.5,16.875z M9.5,17h-4C5.223877,17,5,17.223877,5,17.5S5.223877,18,5.5,18h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,17,9.5,17z M15.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,10.875,15.5,10.875z M15.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,4.875,15.5,4.875z M9.5,5h-4C5.223877,5,5,5.223877,5,5.5S5.223877,6,5.5,6h4C9.776123,6,10,5.776123,10,5.5S9.776123,5,9.5,5z M18.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,10.875,18.5,10.875z M22,6.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,8.9556274,2.0007935,9.6782837,2,10.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,14.9556274,2.0007935,15.6782837,2,16.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2c0.6122437-0.4556274,1.0143433-1.1782837,1.0151367-2v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C21.5971069,8.0443726,21.9992065,7.3217163,22,6.5z M21,16.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5h15C20.328064,15.0009155,20.9990845,15.671936,21,16.5z M21,10.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C3.0009155,9.671936,3.671936,9.0009155,4.5,9h15C20.328064,9.0009155,20.9990845,9.671936,21,10.5z M21,6.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15C3.671936,7.9990845,3.0009155,7.328064,3,6.5v-2C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Login Authentication</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">15 tasks</span>
																						<span class="text-teritary ps-1 fs-11">21 May 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage medium-bar medium-sm">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">55%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
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

											<div class="tab-pane" id="progressProjects">
												<div class="row">
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M4.2069702,12l5.1464844-5.1464844c0.1871338-0.1937866,0.1871338-0.5009155,0-0.6947021C9.1616211,5.9602051,8.8450928,5.9547119,8.6464844,6.1465454l-5.5,5.5c-0.000061,0-0.0001221,0.000061-0.0001221,0.0001221c-0.1951904,0.1951904-0.1951294,0.5117188,0.0001221,0.7068481l5.5,5.5C8.7401123,17.9474487,8.8673706,18.0001831,9,18c0.1325684,0,0.2597046-0.0526733,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L4.2069702,12z M20.8534546,11.6465454l-5.5-5.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L19.7930298,12l-5.1465454,5.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C14.5,17.776062,14.723877,17.999939,15,18c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l5.5-5.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C21.0487671,12.1581421,21.0487061,11.8416748,20.8534546,11.6465454z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Web Design</a> <span class="text-muted bg-light fs-11 mx-2">opened yesterday</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">28 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 19</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+15</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">11 Nov 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,14.5c-0.0009155-0.828064-0.671936-1.4990845-1.5-1.5h-6c-0.828064,0.0009155-1.4990845,0.671936-1.5,1.5V15H8.5v-4h2.75c1.6182251,0.0029907,3.0551758-1.0343018,3.5617676-2.571228c0.6471558-1.9633179-0.4197998-4.0794678-2.3831177-4.7266235c-0.7163696-1.3944092-2.0479736-2.3696899-3.5935059-2.631958C6.1256714,0.6103516,3.5564575,2.434082,3.0966797,5.1435547C1.8478394,5.5370483,0.9989624,6.6956177,1,8.0049438C1.0014038,9.6604614,2.3445435,11.0013428,4,11h3.5v8.5005493C7.5001831,19.7765503,7.723999,20.0001831,8,20h5v0.5c0.0009155,0.828064,0.671936,1.4990845,1.5,1.5h6c0.828064-0.0009155,1.4990845-0.671936,1.5-1.5v-2c-0.0004272-0.3859863-0.1505127-0.7342529-0.3901367-1c0.239624-0.2657471,0.3897095-0.6140137,0.3901367-1V14.5z M4,10c-0.9650269,0.0012817-1.7929077-0.687561-1.9671631-1.6367188c-0.1991577-1.085022,0.5189209-2.1260376,1.6039429-2.3251953c0.2183228-0.0407715,0.383667-0.220459,0.40625-0.4414062C4.2388306,3.5576172,5.9515381,2.0008545,8,2c1.5571899,0.0071411,2.9694214,0.9152222,3.6220703,2.3291016c0.0628052,0.1350098,0.182312,0.2351074,0.3261719,0.2734375c1.2108765,0.3153076,2.0549316,1.4101562,2.0516968,2.661438C13.9960938,8.7788696,12.7648926,10.0038452,11.25,10H4z M13,18.5V19H8.5v-3H13v0.5c0.0004272,0.3859863,0.1505127,0.7342529,0.3901367,1C13.1505127,17.7657471,13.0004272,18.1140137,13,18.5z M21,20.5c-0.0005493,0.2759399-0.2240601,0.4994507-0.5,0.5h-6c-0.2759399-0.0005493-0.4994507-0.2240601-0.5-0.5v-2c0.0005493-0.2759399,0.2240601-0.4994507,0.5-0.5h6c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5V20.5z M21,16.5c-0.0005493,0.2759399-0.2240601,0.4994507-0.5,0.5h-6c-0.2759399-0.0005493-0.4994507-0.2240601-0.5-0.5v-2c0.0005493-0.2759399,0.2240601-0.4994507,0.5-0.5h6c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5V16.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Cloud Computing</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">58 tasks</span>
																						<span class="text-teritary ps-1 fs-11">16 Apr 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage large-bar">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">90%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20,6c0-2.2091675-1.7908325-4-4-4H8C5.7908325,2,4,3.7908325,4,6c0,0.1142578,0.024231,0.2217407,0.0336304,0.3335571C4.0148315,6.3861694,4,6.440979,4,6.5v6v6c0.0023193,1.9320068,1.5679932,3.4976807,3.5,3.5h9c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5v-6v-6c0-0.059021-0.0148315-0.1138306-0.0336304-0.1664429C19.975769,6.2217407,20,6.1142578,20,6z M19,18.5c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-9c-1.380188-0.0012817-2.4987183-1.119812-2.5-2.5v-3.5582886C5.635376,15.5922241,6.519104,15.9988403,7.5,16h9c0.980896-0.0011597,1.864624-0.4077759,2.5-1.0582886V18.5z M19,12.5c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-9c-1.380188-0.0012817-2.4987183-1.119812-2.5-2.5V8.6204834C5.7332153,9.4592285,6.7984009,10,8,10h8c1.2015991,0,2.2667847-0.5407715,3-1.3795166V12.5z M16,9H8C6.3431396,9,5,7.6568604,5,6s1.3431396-3,3-3h8c1.6568604,0,3,1.3431396,3,3S17.6568604,9,16,9z M7.5,18C7.223877,18,7,18.223877,7,18.5S7.223877,19,7.5,19S8,18.776123,8,18.5S7.776123,18,7.5,18z M7.5,12C7.223877,12,7,12.223877,7,12.5S7.223877,13,7.5,13S8,12.776123,8,12.5S7.776123,12,7.5,12z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">SQL</a> <span class="text-muted bg-light fs-11 mx-2">opened 1mth ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">350 tasks</span>
																						<span class="text-teritary ps-1 fs-11">29 Apr 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+5</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">14 Dec 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage medium-bar medium-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">70%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M7.5,5.125c0.3451538,0,0.625-0.2798462,0.625-0.625S7.8451538,3.875,7.5,3.875S6.875,4.1548462,6.875,4.5S7.1548462,5.125,7.5,5.125z M7.5,9.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S7.8451538,9.875,7.5,9.875z M21.5,20h-7.050415c-0.1995239-0.9827271-0.9754639-1.7548218-1.9595337-1.9506226C12.4918213,18.0323486,12.5,18.0175171,12.5,18v-4h5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C19.5971069,7.0443726,19.9992065,6.3217163,20,5.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-11C5.119812,1.0012817,4.0012817,2.119812,4,3.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C4.4028931,7.9556274,4.0007935,8.6782837,4,9.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h5v4c0,0.0001831,0,0.0003662,0,0.0005493c0,0.017334,0.0081787,0.0319824,0.0098877,0.0488281C10.5258179,18.2451782,9.749939,19.0172729,9.550415,20H2.5C2.223877,20,2,20.223877,2,20.5S2.223877,21,2.5,21h7.050415C9.7821045,22.1411133,10.7905273,23,12,23c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,20,21.5,20z M5,5.5v-2C5.0009155,2.671936,5.671936,2.0009155,6.5,2h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-11C5.671936,6.9990845,5.0009155,6.328064,5,5.5z M6.5,13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C5.0009155,8.671936,5.671936,8.0009155,6.5,8h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H6.5z M12,22c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,19,12,19c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,21.3284302,12.8284302,22,12,22z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Ethical Hacking</a> <span class="text-muted bg-light fs-11 mx-2">opened 3d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">75 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 17</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+8</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">21 Mar 18</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary  me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9.5,11h-4C5.223877,11,5,11.223877,5,11.5S5.223877,12,5.5,12h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,11,9.5,11z M18.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,16.875,18.5,16.875z M18.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,4.875,18.5,4.875z M15.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,16.875,15.5,16.875z M9.5,17h-4C5.223877,17,5,17.223877,5,17.5S5.223877,18,5.5,18h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,17,9.5,17z M15.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,10.875,15.5,10.875z M15.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,4.875,15.5,4.875z M9.5,5h-4C5.223877,5,5,5.223877,5,5.5S5.223877,6,5.5,6h4C9.776123,6,10,5.776123,10,5.5S9.776123,5,9.5,5z M18.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,10.875,18.5,10.875z M22,6.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,8.9556274,2.0007935,9.6782837,2,10.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,14.9556274,2.0007935,15.6782837,2,16.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2c0.6122437-0.4556274,1.0143433-1.1782837,1.0151367-2v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C21.5971069,8.0443726,21.9992065,7.3217163,22,6.5z M21,16.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5h15C20.328064,15.0009155,20.9990845,15.671936,21,16.5z M21,10.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C3.0009155,9.671936,3.671936,9.0009155,4.5,9h15C20.328064,9.0009155,20.9990845,9.671936,21,10.5z M21,6.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15C3.671936,7.9990845,3.0009155,7.328064,3,6.5v-2C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Login Authentication</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">15 tasks</span>
																						<span class="text-teritary ps-1 fs-11">21 May 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage medium-bar medium-sm">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">55%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,19h-7.050415c-0.1988525-0.9794922-0.9700928-1.7507324-1.949585-1.949585V13h6h0.0006104H20.5c0.276123,0,0.5-0.223877,0.5-0.5S20.776123,12,20.5,12H19V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-9C6.119812,2.0012817,5.0012817,3.119812,5,4.5V12H3.5C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13h2h6v4.050415C10.5205078,17.2492676,9.7492676,18.0205078,9.550415,19H2.5C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h7.050415C9.7821045,21.1411133,10.7905273,22,12,22c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,19,21.5,19z M6,12V4.5C6.0009155,3.671936,6.671936,3.0009155,7.5,3h9c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V12H6z M12,21c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,18,12,18c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,20.3284302,12.8284302,21,12,21z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">System Design</a> <span class="text-muted bg-light fs-11 mx-2">opened 2d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">116 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+7</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">16 Jan 22</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
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

											<div class="tab-pane" id="holdProjects">
												<div class="row">
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-orange me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20.6601562,7c-0.767334-1.3284302-2.5855103-1.836853-4.8673706-1.5704346C14.8826904,3.3205566,13.5338745,2,12,2S9.1172485,3.3204956,8.2071533,5.4296265C5.9249268,5.1627808,4.1060181,5.6706543,3.3398438,7c-0.7667847,1.3283081-0.2972412,3.1570435,1.074585,5c-1.3718262,1.8429565-1.8413696,3.6716919-1.074646,5c0.6367188,1.1025391,1.9942017,1.6435547,3.7421875,1.6435547c0.3729858-0.0189819,0.7437134-0.0548096,1.112915-0.1002197C9.1050415,20.6685791,10.4594116,22,12,22s2.8949585-1.3314209,3.8051147-3.456665c0.3692017,0.0454102,0.7399292,0.0812378,1.112915,0.1002197c1.7469482,0,3.1063843-0.5410156,3.7421265-1.6435547c0.7667847-1.3283081,0.2972412-3.1570435-1.074585-5C20.9573975,10.1570435,21.4269409,8.3283081,20.6601562,7z M15.6480713,8.3894043C15.2786865,8.1427612,14.8995972,7.9006348,14.5,7.6699219c-0.3996582-0.230835-0.7990723-0.4382935-1.1974487-0.6350098c0.6378784-0.2148438,1.2570801-0.3780518,1.8477173-0.4918823C15.3469238,7.1115112,15.5151978,7.7294312,15.6480713,8.3894043z M12,3c1.0654297,0,2.0482178,0.9987793,2.7738037,2.5901489c-0.8824463,0.1806641-1.8171387,0.4703369-2.7739868,0.8580933C11.0432129,6.06073,10.1085815,5.7709351,9.2261353,5.59021C9.9517212,3.9987793,10.9345093,3,12,3z M8.8425293,6.5646973c0.6322021,0.1143799,1.2553101,0.2702026,1.866333,0.4645996C10.3067017,7.2276001,9.9035645,7.4368286,9.5,7.6699219C9.1004028,7.9006348,8.7213135,8.1427612,8.3519287,8.3894043C8.4831543,7.7377319,8.6489868,7.1273193,8.8425293,6.5646973z M4.2050781,7.5c0.6743774-0.8552856,1.7492065-1.2923584,2.8291016-1.1503906c0.2658691,0.0151367,0.5303345,0.0407715,0.7941895,0.0700073c-0.2806396,0.8480225-0.494751,1.7927856-0.6360474,2.8049927C6.3783569,9.859436,5.6602173,10.5241089,5.0626221,11.197998C4.0467529,9.7736816,3.6727905,8.4230347,4.2050781,7.5z M7.0488892,13.3538208C6.5440674,12.9088745,6.0932007,12.4544067,5.6994019,12c0.3937988-0.4544067,0.8446655-0.9089355,1.3494873-1.3538818C7.0200195,11.0892944,7,11.5386353,7,12S7.0200195,12.9107056,7.0488892,13.3538208z M4.2050781,16.5c-0.5322876-0.9230347-0.1583252-2.2736816,0.8575439-3.697998c0.5975952,0.6738892,1.3157349,1.338562,2.1296997,1.9733887c0.1427002,1.0221558,0.3591309,1.9763184,0.6437988,2.8307495C6.0949097,17.7734375,4.7382812,17.4219971,4.2050781,16.5z M8.3519287,15.6105957C8.7213135,15.8572388,9.1004028,16.0993652,9.5,16.3300781c0.3783569,0.2339478,0.7686157,0.4447021,1.1637573,0.6447144c-0.6261597,0.2092285-1.2341309,0.3692017-1.8143921,0.4810181C8.652832,16.8876953,8.4847412,16.2700806,8.3519287,15.6105957z M12,21c-1.0717163,0-2.0603027-1.0095215-2.7870483-2.6173096C10.1655884,18.2009888,11.0983276,17.9318848,12,17.5773926c0.9016113,0.3544922,1.8344116,0.6235962,2.7870483,0.8052979C14.0603027,19.9904785,13.0717163,21,12,21z M15.1503906,17.456543c-0.5805054-0.1118164-1.1887207-0.2718506-1.8151245-0.4812622C13.7307739,16.7751465,14.1212769,16.56427,14.5,16.3300781c0.3995972-0.2307129,0.7786865-0.4728394,1.1480713-0.7194824C15.5151978,16.2703857,15.3470459,16.8881836,15.1503906,17.456543z M15.8648682,14.2316284C15.2859497,14.6641235,14.6652832,15.0805054,14,15.4648438c-0.6655884,0.3839111-1.3366699,0.7131958-2.0007935,0.9981689C11.3355713,16.1780396,10.6650391,15.8487549,10,15.4648438c-0.6652832-0.3843384-1.2859497-0.8007202-1.8648682-1.2332153C8.0501099,13.5140381,8,12.7683105,8,12s0.0501099-1.5140381,0.1351318-2.2316284C8.7140503,9.3358765,9.3347168,8.9194946,10,8.5351562c0.6747437-0.3895264,1.3552246-0.7230835,2.0283813-1.0108032C12.7068481,7.8132324,13.3676758,8.1464844,14,8.5351562c0.6652832,0.3843384,1.2859497,0.8007202,1.8648682,1.2332153C15.9498901,10.4859619,16,11.2316895,16,12S15.9498901,13.5140381,15.8648682,14.2316284z M19.7949219,7.5c0.5322876,0.9230347,0.1583252,2.2736816-0.8575439,3.697998c-0.5975952-0.6738892-1.3157349-1.338562-2.1296997-1.9733887c-0.1427612-1.022644-0.359314-1.9771729-0.644165-2.8319092C17.90448,6.2254639,19.2612915,6.5772095,19.7949219,7.5z M16.9511108,10.6461182C17.4559326,11.0910645,17.9067993,11.5455933,18.3005981,12c-0.3937988,0.4544067-0.8446655,0.9088745-1.3494873,1.3538208C16.9799805,12.9107056,17,12.4613647,17,12S16.9799805,11.0892944,16.9511108,10.6461182z M19.7949219,16.5c-0.5328369,0.9221191-1.8897095,1.2739868-3.6312866,1.1068115c0.28479-0.8546143,0.5013428-1.80896,0.644043-2.8314209c0.8139648-0.6348267,1.5321045-1.2994995,2.1296997-1.9733887C19.9532471,14.2263184,20.3272095,15.5769653,19.7949219,16.5z"></path></svg>
																					</div>
																					<div class="ms-2">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">SEO Using React</a> <span class="text-muted bg-light fs-11 mx-2">opened 4mth ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">75 tasks</span>
																						<span class="text-teritary ps-1 fs-11">16 Jun 20</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+5</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">25 Nov 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-sm">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">15%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M4.2069702,12l5.1464844-5.1464844c0.1871338-0.1937866,0.1871338-0.5009155,0-0.6947021C9.1616211,5.9602051,8.8450928,5.9547119,8.6464844,6.1465454l-5.5,5.5c-0.000061,0-0.0001221,0.000061-0.0001221,0.0001221c-0.1951904,0.1951904-0.1951294,0.5117188,0.0001221,0.7068481l5.5,5.5C8.7401123,17.9474487,8.8673706,18.0001831,9,18c0.1325684,0,0.2597046-0.0526733,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L4.2069702,12z M20.8534546,11.6465454l-5.5-5.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L19.7930298,12l-5.1465454,5.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C14.5,17.776062,14.723877,17.999939,15,18c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l5.5-5.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C21.0487671,12.1581421,21.0487061,11.8416748,20.8534546,11.6465454z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Web Design</a> <span class="text-muted bg-light fs-11 mx-2">opened yesterday</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">28 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 19</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+15</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">11 Nov 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,19h-7.050415c-0.1988525-0.9794922-0.9700928-1.7507324-1.949585-1.949585V13h6h0.0006104H20.5c0.276123,0,0.5-0.223877,0.5-0.5S20.776123,12,20.5,12H19V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-9C6.119812,2.0012817,5.0012817,3.119812,5,4.5V12H3.5C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13h2h6v4.050415C10.5205078,17.2492676,9.7492676,18.0205078,9.550415,19H2.5C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h7.050415C9.7821045,21.1411133,10.7905273,22,12,22c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,19,21.5,19z M6,12V4.5C6.0009155,3.671936,6.671936,3.0009155,7.5,3h9c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V12H6z M12,21c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,18,12,18c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,20.3284302,12.8284302,21,12,21z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">System Design</a> <span class="text-muted bg-light fs-11 mx-2">opened 2d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">116 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+7</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">16 Jan 22</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M7.5,5.125c0.3451538,0,0.625-0.2798462,0.625-0.625S7.8451538,3.875,7.5,3.875S6.875,4.1548462,6.875,4.5S7.1548462,5.125,7.5,5.125z M7.5,9.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S7.8451538,9.875,7.5,9.875z M21.5,20h-7.050415c-0.1995239-0.9827271-0.9754639-1.7548218-1.9595337-1.9506226C12.4918213,18.0323486,12.5,18.0175171,12.5,18v-4h5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C19.5971069,7.0443726,19.9992065,6.3217163,20,5.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-11C5.119812,1.0012817,4.0012817,2.119812,4,3.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C4.4028931,7.9556274,4.0007935,8.6782837,4,9.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h5v4c0,0.0001831,0,0.0003662,0,0.0005493c0,0.017334,0.0081787,0.0319824,0.0098877,0.0488281C10.5258179,18.2451782,9.749939,19.0172729,9.550415,20H2.5C2.223877,20,2,20.223877,2,20.5S2.223877,21,2.5,21h7.050415C9.7821045,22.1411133,10.7905273,23,12,23c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,20,21.5,20z M5,5.5v-2C5.0009155,2.671936,5.671936,2.0009155,6.5,2h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-11C5.671936,6.9990845,5.0009155,6.328064,5,5.5z M6.5,13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C5.0009155,8.671936,5.671936,8.0009155,6.5,8h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H6.5z M12,22c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,19,12,19c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,21.3284302,12.8284302,22,12,22z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Ethical Hacking</a> <span class="text-muted bg-light fs-11 mx-2">opened 3d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">75 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 17</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+8</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">21 Mar 18</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,19h-7.050415c-0.1988525-0.9794922-0.9700928-1.7507324-1.949585-1.949585V13h6h0.0006104H20.5c0.276123,0,0.5-0.223877,0.5-0.5S20.776123,12,20.5,12H19V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-9C6.119812,2.0012817,5.0012817,3.119812,5,4.5V12H3.5C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13h2h6v4.050415C10.5205078,17.2492676,9.7492676,18.0205078,9.550415,19H2.5C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h7.050415C9.7821045,21.1411133,10.7905273,22,12,22c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,19,21.5,19z M6,12V4.5C6.0009155,3.671936,6.671936,3.0009155,7.5,3h9c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V12H6z M12,21c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,18,12,18c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,20.3284302,12.8284302,21,12,21z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">System Design</a> <span class="text-muted bg-light fs-12 mx-2">opened 2d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">116 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+7</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">16 Jan 22</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage small-bar small-lg">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">45%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-orange me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9.5,11h-4C5.223877,11,5,11.223877,5,11.5S5.223877,12,5.5,12h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,11,9.5,11z M18.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,16.875,18.5,16.875z M18.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,4.875,18.5,4.875z M15.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,16.875,15.5,16.875z M9.5,17h-4C5.223877,17,5,17.223877,5,17.5S5.223877,18,5.5,18h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,17,9.5,17z M15.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,10.875,15.5,10.875z M15.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,4.875,15.5,4.875z M9.5,5h-4C5.223877,5,5,5.223877,5,5.5S5.223877,6,5.5,6h4C9.776123,6,10,5.776123,10,5.5S9.776123,5,9.5,5z M18.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,10.875,18.5,10.875z M22,6.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,8.9556274,2.0007935,9.6782837,2,10.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,14.9556274,2.0007935,15.6782837,2,16.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2c0.6122437-0.4556274,1.0143433-1.1782837,1.0151367-2v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C21.5971069,8.0443726,21.9992065,7.3217163,22,6.5z M21,16.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5h15C20.328064,15.0009155,20.9990845,15.671936,21,16.5z M21,10.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C3.0009155,9.671936,3.671936,9.0009155,4.5,9h15C20.328064,9.0009155,20.9990845,9.671936,21,10.5z M21,6.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15C3.671936,7.9990845,3.0009155,7.328064,3,6.5v-2C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Login Authentication</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">15 tasks</span>
																						<span class="text-teritary ps-1 fs-11">21 May 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Due Date</span>
																					<span class="text-danger">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage medium-bar medium-sm">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">55%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
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

											<div class="tab-pane" id="completedProjects">
												<div class="row">
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M4.2069702,12l5.1464844-5.1464844c0.1871338-0.1937866,0.1871338-0.5009155,0-0.6947021C9.1616211,5.9602051,8.8450928,5.9547119,8.6464844,6.1465454l-5.5,5.5c-0.000061,0-0.0001221,0.000061-0.0001221,0.0001221c-0.1951904,0.1951904-0.1951294,0.5117188,0.0001221,0.7068481l5.5,5.5C8.7401123,17.9474487,8.8673706,18.0001831,9,18c0.1325684,0,0.2597046-0.0526733,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L4.2069702,12z M20.8534546,11.6465454l-5.5-5.5c-0.1937256-0.1871948-0.5009155-0.1871948-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L19.7930298,12l-5.1465454,5.1464844c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C14.5,17.776062,14.723877,17.999939,15,18c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l5.5-5.5c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221C21.0487671,12.1581421,21.0487061,11.8416748,20.8534546,11.6465454z"></path></svg>
																					</div>
																					<div class="ms-2">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Web Design</a> <span class="text-muted bg-light fs-11 mx-2">opened yesterday</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">28 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 19</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+15</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Submitted Date</span>
																					<span class="text-primary">11 Nov 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,14.5c-0.0009155-0.828064-0.671936-1.4990845-1.5-1.5h-6c-0.828064,0.0009155-1.4990845,0.671936-1.5,1.5V15H8.5v-4h2.75c1.6182251,0.0029907,3.0551758-1.0343018,3.5617676-2.571228c0.6471558-1.9633179-0.4197998-4.0794678-2.3831177-4.7266235c-0.7163696-1.3944092-2.0479736-2.3696899-3.5935059-2.631958C6.1256714,0.6103516,3.5564575,2.434082,3.0966797,5.1435547C1.8478394,5.5370483,0.9989624,6.6956177,1,8.0049438C1.0014038,9.6604614,2.3445435,11.0013428,4,11h3.5v8.5005493C7.5001831,19.7765503,7.723999,20.0001831,8,20h5v0.5c0.0009155,0.828064,0.671936,1.4990845,1.5,1.5h6c0.828064-0.0009155,1.4990845-0.671936,1.5-1.5v-2c-0.0004272-0.3859863-0.1505127-0.7342529-0.3901367-1c0.239624-0.2657471,0.3897095-0.6140137,0.3901367-1V14.5z M4,10c-0.9650269,0.0012817-1.7929077-0.687561-1.9671631-1.6367188c-0.1991577-1.085022,0.5189209-2.1260376,1.6039429-2.3251953c0.2183228-0.0407715,0.383667-0.220459,0.40625-0.4414062C4.2388306,3.5576172,5.9515381,2.0008545,8,2c1.5571899,0.0071411,2.9694214,0.9152222,3.6220703,2.3291016c0.0628052,0.1350098,0.182312,0.2351074,0.3261719,0.2734375c1.2108765,0.3153076,2.0549316,1.4101562,2.0516968,2.661438C13.9960938,8.7788696,12.7648926,10.0038452,11.25,10H4z M13,18.5V19H8.5v-3H13v0.5c0.0004272,0.3859863,0.1505127,0.7342529,0.3901367,1C13.1505127,17.7657471,13.0004272,18.1140137,13,18.5z M21,20.5c-0.0005493,0.2759399-0.2240601,0.4994507-0.5,0.5h-6c-0.2759399-0.0005493-0.4994507-0.2240601-0.5-0.5v-2c0.0005493-0.2759399,0.2240601-0.4994507,0.5-0.5h6c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5V20.5z M21,16.5c-0.0005493,0.2759399-0.2240601,0.4994507-0.5,0.5h-6c-0.2759399-0.0005493-0.4994507-0.2240601-0.5-0.5v-2c0.0005493-0.2759399,0.2240601-0.4994507,0.5-0.5h6c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5V16.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Cloud Computing</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">58 tasks</span>
																						<span class="text-teritary ps-1 fs-11">16 Apr 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Submitted Date</span>
																					<span class="text-primary">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M20,6c0-2.2091675-1.7908325-4-4-4H8C5.7908325,2,4,3.7908325,4,6c0,0.1142578,0.024231,0.2217407,0.0336304,0.3335571C4.0148315,6.3861694,4,6.440979,4,6.5v6v6c0.0023193,1.9320068,1.5679932,3.4976807,3.5,3.5h9c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5v-6v-6c0-0.059021-0.0148315-0.1138306-0.0336304-0.1664429C19.975769,6.2217407,20,6.1142578,20,6z M19,18.5c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-9c-1.380188-0.0012817-2.4987183-1.119812-2.5-2.5v-3.5582886C5.635376,15.5922241,6.519104,15.9988403,7.5,16h9c0.980896-0.0011597,1.864624-0.4077759,2.5-1.0582886V18.5z M19,12.5c-0.0012817,1.380188-1.119812,2.4987183-2.5,2.5h-9c-1.380188-0.0012817-2.4987183-1.119812-2.5-2.5V8.6204834C5.7332153,9.4592285,6.7984009,10,8,10h8c1.2015991,0,2.2667847-0.5407715,3-1.3795166V12.5z M16,9H8C6.3431396,9,5,7.6568604,5,6s1.3431396-3,3-3h8c1.6568604,0,3,1.3431396,3,3S17.6568604,9,16,9z M7.5,18C7.223877,18,7,18.223877,7,18.5S7.223877,19,7.5,19S8,18.776123,8,18.5S7.776123,18,7.5,18z M7.5,12C7.223877,12,7,12.223877,7,12.5S7.223877,13,7.5,13S8,12.776123,8,12.5S7.776123,12,7.5,12z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">SQL</a> <span class="text-muted bg-light fs-11 mx-2">opened 1mth ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">350 tasks</span>
																						<span class="text-teritary ps-1 fs-11">29 Apr 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+5</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Submitted Date</span>
																					<span class="text-primary">14 Dec 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-info me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M7.5,5.125c0.3451538,0,0.625-0.2798462,0.625-0.625S7.8451538,3.875,7.5,3.875S6.875,4.1548462,6.875,4.5S7.1548462,5.125,7.5,5.125z M7.5,9.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S7.8451538,9.875,7.5,9.875z M21.5,20h-7.050415c-0.1995239-0.9827271-0.9754639-1.7548218-1.9595337-1.9506226C12.4918213,18.0323486,12.5,18.0175171,12.5,18v-4h5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C19.5971069,7.0443726,19.9992065,6.3217163,20,5.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-11C5.119812,1.0012817,4.0012817,2.119812,4,3.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C4.4028931,7.9556274,4.0007935,8.6782837,4,9.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h5v4c0,0.0001831,0,0.0003662,0,0.0005493c0,0.017334,0.0081787,0.0319824,0.0098877,0.0488281C10.5258179,18.2451782,9.749939,19.0172729,9.550415,20H2.5C2.223877,20,2,20.223877,2,20.5S2.223877,21,2.5,21h7.050415C9.7821045,22.1411133,10.7905273,23,12,23c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,20,21.5,20z M5,5.5v-2C5.0009155,2.671936,5.671936,2.0009155,6.5,2h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-11C5.671936,6.9990845,5.0009155,6.328064,5,5.5z M6.5,13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C5.0009155,8.671936,5.671936,8.0009155,6.5,8h11c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H6.5z M12,22c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,19,12,19c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,21.3284302,12.8284302,22,12,22z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Ethical Hacking</a> <span class="text-muted bg-light fs-11 mx-2">opened 3d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">75 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 17</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+8</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Submitted Date</span>
																					<span class="text-primary">21 Mar 18</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-primary me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9.5,11h-4C5.223877,11,5,11.223877,5,11.5S5.223877,12,5.5,12h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,11,9.5,11z M18.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,16.875,18.5,16.875z M18.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,4.875,18.5,4.875z M15.5,16.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,16.875,15.5,16.875z M9.5,17h-4C5.223877,17,5,17.223877,5,17.5S5.223877,18,5.5,18h4c0.276123,0,0.5-0.223877,0.5-0.5S9.776123,17,9.5,17z M15.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,10.875,15.5,10.875z M15.5,4.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S15.8451538,4.875,15.5,4.875z M9.5,5h-4C5.223877,5,5,5.223877,5,5.5S5.223877,6,5.5,6h4C9.776123,6,10,5.776123,10,5.5S9.776123,5,9.5,5z M18.5,10.875c-0.3451538,0-0.625,0.2798462-0.625,0.625s0.2798462,0.625,0.625,0.625s0.625-0.2798462,0.625-0.625S18.8451538,10.875,18.5,10.875z M22,6.5v-2c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,8.9556274,2.0007935,9.6782837,2,10.5v2c0.0007935,0.8217163,0.4028931,1.5443726,1.0151367,2C2.4028931,14.9556274,2.0007935,15.6782837,2,16.5v2c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2c0.6122437-0.4556274,1.0143433-1.1782837,1.0151367-2v-2c-0.0007935-0.8217163-0.4028931-1.5443726-1.0151367-2C21.5971069,8.0443726,21.9992065,7.3217163,22,6.5z M21,16.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5h15C20.328064,15.0009155,20.9990845,15.671936,21,16.5z M21,10.5v2c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-2C3.0009155,9.671936,3.671936,9.0009155,4.5,9h15C20.328064,9.0009155,20.9990845,9.671936,21,10.5z M21,6.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15C3.671936,7.9990845,3.0009155,7.328064,3,6.5v-2C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.5z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">Login Authentication</a> <span class="text-muted bg-light fs-11 mx-2">opened 1min ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">15 tasks</span>
																						<span class="text-teritary ps-1 fs-11">21 May 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Submitted Date</span>
																					<span class="text-primary">30 Oct 21</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="row">
																			<div class="col">
																				<div class="d-sm-flex align-items-center">
																					<div class="avatar mb-2 p-2 lh-1 mb-sm-0 avatar-md rounded-circle bg-warning me-2">
																						<svg xmlns="http://www.w3.org/2000/svg" class="w-icn text-white" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,19h-7.050415c-0.1988525-0.9794922-0.9700928-1.7507324-1.949585-1.949585V13h6h0.0006104H20.5c0.276123,0,0.5-0.223877,0.5-0.5S20.776123,12,20.5,12H19V4.5c-0.0012817-1.380188-1.119812-2.4987183-2.5-2.5h-9C6.119812,2.0012817,5.0012817,3.119812,5,4.5V12H3.5C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13h2h6v4.050415C10.5205078,17.2492676,9.7492676,18.0205078,9.550415,19H2.5C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h7.050415C9.7821045,21.1411133,10.7905273,22,12,22c1.2089233-0.0010986,2.2167358-0.8594971,2.4491577-2H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,19,21.5,19z M6,12V4.5C6.0009155,3.671936,6.671936,3.0009155,7.5,3h9c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V12H6z M12,21c-0.8284302,0-1.5-0.6715698-1.5-1.5S11.1715698,18,12,18c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5C13.5,20.3284302,12.8284302,21,12,21z"></path></svg>
																					</div>
																					<div class="ms-1">
																						<h6 class="mb-1 text-normal"> <a href="{{url('project-details')}}" class="float-start">System Design</a> <span class="text-muted bg-light fs-11 mx-2">opened 2d ago</span> </h6>
																						<span class="text-muted border-end pe-2 fs-11 float-start mt-1">116 tasks</span>
																						<span class="text-teritary ps-1 fs-11">11 Nov 21</span>
																					</div>
																				</div>
																			</div>
																			<div class="col-auto">
																				<div class="d-flex align-items-center">
																					<div class="stars-main me-3">
																						<i class="fa fa-star text-light star"></i>
																					</div>
																					<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																					<div class="dropdown-menu dropdown-menu-start">
																						<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Clone</a>
																						<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="row align-items-center">
																			<div class="col">
																				<p class="m-0 mb-2">Members</p>
																				<div class="avatar-list avatar-list-stacked">
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/9.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/8.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/11.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/1.jpg')}}"></span>
																					<span class="avatar bradius cover-image" data-bs-image-src= "{{asset('assets/images/users/6.jpg')}}"></span>
																					<span class="avatar bradius bg-primary">+7</span>
																				</div>
																			</div>
																			<div class="col-auto">
																				<p class="mb-0">
																					<span class="text-muted d-block">Submitted Date</span>
																					<span class="text-primary">16 Jan 22</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-12 mt-4">
																		<div class="text-center d-f-ai-c-jc-c">
																			<div class="wp-100">
																				<div class="project-percentage completed">
																					<div class="percentage-title">
																						<span>Progress</span>
																						<span class="progress-main font-weight-semibold text-13 mb-1">100%</span>
																					</div>
																					<div class="progress fileprogress mb-2 h-auto">
																						<div class="progress-bar" role="progressbar"></div>
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

										</div>
									</div>
								</div>
							</div>
							<!--ROW CLOSED-->

                            @endsection

        @section('scripts')

        <!-- PROJECT JS-->
        <script src="{{asset('assets/js/projects.js')}}"></script>

        @endsection
