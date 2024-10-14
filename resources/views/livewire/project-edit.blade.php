@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Edit Project</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Project</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div  class="card">
										<div class="card-header border-bottom">
											<h4 class="mb-0">Project Info</h4>
										</div>
										<div class="card-body p-0 project-edit-main">
											<div class="row p-5 border-bottom">
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Project Name:</label>
														<div class="input-group">
															<input type="text" id="project-name" class="form-control text-dark" placeholder="Enter Project Name" value="Noa Dashboard UI">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="project-start-date" class="form-label text-muted">Project Date:</label>
														<div id="ps-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input id="project-start-date" class="form-control" type="text" placeholder="Select Start Date"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3 end-date-container">
													<div class="form-group">
														<label for="project-end-date" class="form-label text-muted">End Date:</label>
														<div id="pe-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input id="project-end-date" class="form-control" type="text" placeholder="Select End Date"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3 no-date-checkbox">
													<div class="form-group">
														<label class="custom-control custom-checkbox end-date-checkbox-container">
															<input type="checkbox" class="custom-control-input end-date-checkbox" value="option2">
															<span class="custom-control-label">No End Date.</span>
														</label>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label for="project-category" class="form-label text-muted">Project Category:</label>
														<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="project-category" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
															<option label="Choose one"></option>
															<option value="empty">---</option>
															<option value="NO" selected>Nonumy</option>
															<option value="SE">Sea</option>
															<option value="VE">Vero</option>
															<option value="DO">Dolore</option>
															<option value="LO">Lorem</option>
															<option value="EO">Eos</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label for="project-department" class="form-label text-muted">Department:</label>
														<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="project-department" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
															<option label="Choose one"></option>
															<option value="empty">---</option>
															<option value="ITD" selected>IT Development</option>
															<option value="SLS">Sales</option>
															<option value="MKT">Marketing</option>
															<option value="FNC">Finance</option>
															<option value="STK">Stocks</option>
															<option value="MDL">Medical</option>
															<option value="HUR">Human Resources</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label class="form-label text-muted">Client: </label>
														<ul>
															<li class="select-client">
																<select class="form-control select2-client-search" data-placeholder="Select Client">
																	<option value="1">Angeline Julliet</option>
																	<option value="2">Helena Rose</option>
																	<option value="13">Daniel Obrien</option>
																	<option value="15">Jorah Randy</option>
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
												<div class="col-sm-12 col-md-12 col-xl-6">
													<label class="form-label text-muted">Project Summary: </label>
													<div class="form-group">
														<div id="summernote3"><p>Elitr consetetur ut voluptua invidunt sed aliquyam tempor dolores. Vero clita takimata clita justo. Dolore sed accusam sit amet voluptua.</p></div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<label class="form-label text-muted">Project Notes: </label>
													<div class="form-group">
														<div id="summernote4"><p>Dolor amet vero lorem diam lorem sit duo, vero sit stet takimata clita, lorem duo.</p></div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label class="form-label text-muted">Project Status: </label>
														<ul>
															<li class="select-status">
																<select class="form-control select2-status-search" data-placeholder="Select Status">
																	<option value="empty">---</option>
																	<option value="IP" selected>In Progress</option>
																	<option value="OH">On Hold</option>
																	<option value="CP">Completed</option>
																</select>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="row p-5 border-bottom">
												<div class="col-xl-12">
													<h4 class="mb-0 d-flex other-details">Other Details<i class="fe fe-chevron-down down-arrow fs-20"></i><i class="    fe fe-chevron-up up-arrow d-none fs-20"></i></h4>
													<div class="row other-details-main d-none mt-4">
														<div class="col-sm-12 col-md-12 col-xl-12">
															<label class="form-label text-muted">Add Files: </label>
															<div class="form-group">
																<form method="post">
																	<input type="file" class="dropify" data-bs-height="100" />
																</form>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-4">
															<div class="form-group">
																<label class="form-label text-muted">Currency:</label>
																<div class="input-group">
																	<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="currency-type" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
																		<option label="Choose one"></option>
																		<option value="day">USD($)</option>
																		<option value="day">GBP(£)</option>
																		<option value="day">EUR(€)</option>
																		<option value="day">INR(₹)</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-4">
															<div class="form-group">
																<label class="form-label text-muted">Budget:</label>
																<input type="number" class="form-control" placeholder="e.g. 1000" min="0">
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-4">
															<div class="form-group">
																<label class="form-label text-muted">Estimated Hours:</label>
																<input type="number" class="form-control" placeholder="e.g. 700" min="0">
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-4 align-self-end">
															<div class="form-group">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input">
																	<span class="custom-control-label">Manual Time Logs.</span>
																</label>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-xl-4">
															<div class="form-group">
																<label class="form-label text-muted">Assign To: </label>
																<ul>
																	<li class="select-client">
																		<select class="form-control select2-assignTo-search" data-placeholder="Select Client">
																			<option value="1">Angeline Julliet</option>
																			<option value="2">Helena Rose</option>
																			<option value="13">Daniel Obrien</option>
																			<option value="15">Jorah Randy</option>
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
											<div class="row p-5">
												<div class="btn-list text-end">
													<button class="btn btn-outline-danger">
														<i class="fe fe-x-circle"></i>
														Cancel
													</button>
													<button class="btn btn-primary">
														<i class="fe fe-check-circle"></i>
														Save
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--ROW CLOSED-->
                            @endsection

        @section('scripts')

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- bootstrap-datepicker js -->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/js/datepicker.js')}}"></script>

		<!-- INTERNAL Summernote Editor js -->
		<script src="{{asset('assets/plugins/summernote-editor/summernote1.js')}}"></script>

		<!-- FILE UPLOAD JS -->
        <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--PROJECT EDIT JS-->
		<script src="{{asset('assets/js/projects-edit.js')}}"></script>

        @endsection
