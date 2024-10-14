@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Tickets</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tickets</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-12">
									<div class="card p-0">
										<div class="card-header border-bottom d-block">
											<div class="row align-items-center">
												<div class="col-xl-8">
													<h4 class="mb-0 p-1">
														#TCKT1116 - Aliquyam sit ea vero et elitr.
														<span class="badge badge-sm bg-primary text-white">open</span>
													</h4>
												</div>
												<div class="col-xl">
													<div class="btn-list float-end p-1">
														<a href="javascript:void(0)" class="btn btn-info" data-bs-target="#editTicketModal" data-bs-toggle="modal">
															<i class="fe fe-edit"></i>
															Edit
														</a>
														<a href="javascript:void(0)" class="btn btn-primary">
															<i class="fe fe-check-circle"></i>
															Mark As Resolved
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-xl-auto col-lg-6 col-md-6 col-sm-12">
													<span class="text-dark me-1">Created Date:</span>
													<span class="text-info">11 Jan 21</span>
												</div>
												<div class="col-xl-auto col-lg-6 col-md-6 col-sm-12">
													<span class="text-dark me-1">Status:</span>
													<span class="text-primary">Open</span>
												</div>
												<div class="col-xl-auto col-lg-6 col-md-6 col-sm-12">
													<span class="text-dark me-1">Client:</span>
													<span class="text-muted">Steve Morgan</span>
												</div>
												<div class="col-xl-auto col-lg-6 col-md-6 col-sm-12">
													<span class="text-dark me-1">Ticket Type:</span>
													<span class="text-muted">General Support</span>
												</div>
												<div class="col-xl-auto col-lg-6 col-md-6 col-sm-12">
													<span class="text-dark me-1">Assigned To:</span>
													<span class="text-muted">Daniel Obrien</span>
												</div>
												<div class="col-xl-auto col-lg-6 col-md-6 col-sm-12">
													<span class="text-dark me-1">Requested By:</span>
													<span class="text-muted">Robert Gendry</span>
												</div>
											</div>
										</div>
										<div class="card-footer ticket-details-footer p-0">
											<div class="media ticket-reply">
												<div class="me-3">
													<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<nav class="nav float-end">
														<div class="dropdown">
															<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-start">
																<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report</a>
																<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
															</div>
														</div>
													</nav>
													<h5 class="mt-0 text-dark">Gavin Murray <span class="text-muted fs-12 ms-1">02-10-2021  09:45am</span></h5>
													<span><i class="fe fe-thumb-up text-danger"></i></span>
													<p class="font-13 reply-text-main">
														Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat?
													</p>
													<p class="font-13 reply-text-main">
														Dolores erat et elitr ipsum duo diam accusam et. Kasd diam erat sanctus elitr et. Vero rebum justo diam sadipscing,
														Sanctus nonumy nonumy diam lorem dolor stet.
													</p>
												</div>
											</div>
											<div class="media ticket-reply">
												<div class="me-3">
													<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/13.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<nav class="nav float-end">
														<div class="dropdown">
															<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-start">
																<a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
																<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
															</div>

														</div>
													</nav>
													<h5 class="mt-0 text-dark">Daniel Obrien<span class="text-muted fs-12 ms-1">02-10-2021  10:15am</span></h5>
													<span><i class="fe fe-thumb-up text-danger"></i></span>
													<p class="font-13 reply-text-main">
														Nostrud exercitation ullamco laboris commodo consequat.
													</p>
												</div>
											</div>
											<div class="media ticket-reply">
												<div class="me-3">
													<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/5.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<nav class="nav float-end">
														<div class="dropdown">
															<a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-start">
																<a class="dropdown-item" href="#"><i class="fe fe-corner-up-left me-1"></i> Reply</a>
																<a class="dropdown-item" href="#"><i class="fe fe-flag me-1"></i> Report</a>
																<a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
															</div>
														</div>
													</nav>
													<h5 class="mt-0 text-dark">Gavin Murray <span class="text-muted fs-12 ms-1">02-10-2021  7:45pm</span></h5>
													<span><i class="fe fe-thumb-up text-danger"></i></span>
													<p class="font-13 reply-text-main">
														Eos ipsum voluptua nonumy elitr amet est. Diam kasd tempor labore dolores kasd duo gubergren, ipsum sadipscing ut accusam nonumy.
													</p>
												</div>
											</div>
											<div class="media ticket-reply">
												<div class="me-3">
													<a href="{{url('profile')}}"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('assets/images/users/13.jpg')}}"> </a>
												</div>
												<div class="media-body">
													<div>
														<textarea name="reply-to-ticket" class="form-control" id="replyInput" cols="30" rows="10" placeholder="Write Your Reply Here..."></textarea>
														<div class="btn-list mt-3 text-end">
															<a href="javascript:void(0)" class="btn btn-info float-start">
																<i class="fe fe-upload"></i>
																Upload Files
															</a>
															<a href="javascript:void(0)" class="btn btn-outline-warning">
																<i class="fe fe-file-minus"></i>
																Save As Note
															</a>
															<a href="javascript:void(0)" class="btn btn-primary">
																<i class="fe fe-send"></i>
																Post
															</a>
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

            <!--EDIT TICKET MODAL-->
            <div class="modal fade" id="editTicketModal">
                <div class="modal-dialog edit-ticket-modal" role="document">
                    <div class="modal-content modal-content-demo">

                        <div class="modal-header p-5">
                            <h4 class="modal-title text-dark">Edit Ticket</h4><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <form class="form-horizontal">
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Title</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"  placeholder="User Name" value="Aliquyam sit ea vero et elitr.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Created Date</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group date" data-date-format="mm-dd-yyyy">
                                                    <input class="form-control" id="bootstrapDatePicker3" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Status</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-control ticket-status-search" data-placeholder="Select Status">
                                                    <option value="open" selected>Open</option>
                                                    <option value="closed">Closed</option>
                                                    <option value="pending">Pending</option>
                                                    <option value="resolved">Resolved</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Client</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group m-0">
                                                    <select class="form-control select2-client-search" data-placeholder="Choose Type...">
                                                        <option value="14" selected>Steve Morgon</option>
                                                        <option value="13">Matt Donnowan</option>
                                                        <option value="15">Mark Henry</option>
                                                        <option value="6">Anna Marie</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Ticket Type</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group m-0">
                                                    <select class="form-control select2-show-search" data-placeholder="Choose Type...">
                                                        <option label="Choose one"></option>
                                                        <option value="empty">---</option>
                                                        <option value="general support" selected>General Support</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Assign To</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group m-0">
                                                    <select class="form-control select2-client-search" data-placeholder="Choose Type...">
                                                        <option value="18" selected>Daniel Obrien</option>
                                                        <option value="15">Tyler Durden</option>
                                                        <option value="3">Kristen Stewart</option>
                                                        <option value="16">Jon Doe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="form-label">Requested By</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group m-0">
                                                    <select class="form-control select2-client-search" data-placeholder="Choose Type...">
                                                        <option value="17" selected>Robert Gendry</option>
                                                        <option value="13">Jorah Mormont</option>
                                                        <option value="12">Damon Salvatore</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="modal-footer text-end">
                            <div class="btn-list">
                                <button class="btn btn-outline-danger" data-bs-dismiss="modal">
                                    <i class="fe fe-x-circle"></i>
                                    Cancel
                                </button>
                                <button class="btn btn-primary">
                                    <i class="fe fe-check-circle"></i>
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--EDIT TICKET MODAL ENDS-->

            @endsection

        @section('scripts')

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- bootstrap-datepicker js -->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/js/datepicker.js')}}"></script>

		<!-- TICKET DETAILS JS -->
		<script src="{{asset('assets/js/ticket-details.js')}}"></script>

        @endsection
