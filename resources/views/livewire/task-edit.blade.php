@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Edit Task</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Tasks</a></li>
										<li class="breadcrumb-item active" aria-current="page">Edit Task</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div  class="card">
										<div class="card-header border-bottom">
											<h4 class="mb-0">Task Info</h4>
										</div>
										<div class="card-body p-0 task-edit-main">
											<div class="row p-5 border-bottom">
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label class="form-label text-muted">Title:</label>
														<div class="input-group" id="task-name">
															<input type="text" class="form-control text-dark" placeholder="Enter Your Task" value="Sit sed takimata sanctus invidunt">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<div class="form-group">
															<label class="form-label text-muted">Task Category:</label>
															<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="task-category" data-placeholder="Choose Category..." tabindex="-1" aria-hidden="true">
																<option label="Choose one"></option>
																<option value="empty" selected>---</option>
																<option value="sample">Nonumy</option>
																<option value="sample">Sea</option>
																<option value="sample">Vero</option>
																<option value="sample">Dolore</option>
																<option value="sample">Lorem</option>
																<option value="sample">Eos</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<div class="form-group">
															<label class="form-label text-muted">Project:</label>
															<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="project-name1" data-placeholder="Choose Project..." tabindex="-1" aria-hidden="true">
																<option label="Choose one"></option>
																<option value="empty">---</option>
																<option value="sample" selected>Noa Dashboard UI</option>
																<option value="sample">SAP Development</option>
																<option value="sample">Data Management</option>
																<option value="sample">Billing System</option>
																<option value="sample">User Management Application</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label class="form-label text-muted">Start Date:</label>
														<div id="date1-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input class="form-control task-start-date" type="text" placeholder="Select Start Date"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4 task-endDate-container">
													<div class="form-group">
														<label class="form-label text-muted">End Date:</label>
														<div id="date2-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input class="form-control" type="text" placeholder="Select End Date"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3 no-taskEnd-checkbox">
													<div class="form-group">
														<label class="custom-control custom-checkbox no-taskEnd-checkbox-container">
															<input type="checkbox" class="custom-control-input no-taskEnd-date-checkbox" checked>
															<span class="custom-control-label">No End Date.</span>
														</label>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<label class="form-label text-muted">Assign To: </label>
													<div class="form-group">
														<ul>
															<li class="select-client">
																<select multiple="multiple" class="form-control select2-client-search">
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
												<div class="col-sm-12 col-md-12 col-xl-12">
													<label class="form-label text-muted">Description: </label>
													<div class="form-group">
														<div id="summernote"><p>Hello Summernote</p></div>
													</div>
												</div>
											</div>
											<div class="row p-5 border-bottom">
												<div class="col-xl-12">
													<h6 class="mb-0 d-flex other-details">Other Details<i class="fe fe-chevron-down down-arrow fs-16"></i><i class="fe fe-chevron-up up-arrow fs-16"></i></h6>
													<div class="row other-details-main d-none mt-4">
														<div class="col-sm-12 col-md-12 col-xl-4">
															<div class="form-group">
																<label class="form-label text-muted">Task Status: </label>
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
														<div class="col-sm-12 col-md-12 col-xl-4">
															<div class="form-group">
																<label class="form-label text-muted">Priority:</label>
																<div class="input-group">
																	<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="currency-type" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
																		<option label="Choose one"></option>
																		<option value="empty">---</option>
																		<option value="high" selected>High</option>
																		<option value="low">Low</option>
																		<option value="normal">Nomral</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12 col-md-12 col-xl-4 mt-2">
																<div class="form-group">
																	<label class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input">
																		<span class="custom-control-label">Make Private</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-12 col-md-12 col-xl-8 mt-2">
																<div class="form-group">
																	<label class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input">
																		<span class="custom-control-label">Bill Applicable</span>
																	</label>
																</div>
															</div>
															<div class="col-sm-12 col-md-12 col-xl-4 mt-2">
																<div class="form-group">
																	<label class="custom-control custom-checkbox task-depended-container">
																		<input type="checkbox" class="custom-control-input task-depended-checkbox" checked>
																		<span class="custom-control-label">This Task Is Depended On Another Task</span>
																	</label>
																</div>
															</div>
															<div class="row depended-task-main">
																<div class="col-sm-12 col-md-12 col-xl-4">
																	<div class="form-group">
																		<label class="form-label text-muted">Sub Task:</label>
																		<div class="input-group" id="project-name">
																			<input type="text" class="form-control text-dark" placeholder="Enter Sub Task" value="Invidunt ut ea accusam sed">
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-xl-4 subtask-endDate-container">
																	<div class="form-group">
																		<label class="form-label text-muted">End Date:</label>
																		<div id="date3-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
																			<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
																			<input class="form-control" type="text" placeholder="Select End Date"/>
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-xl-4 no-taskEnd-checkbox">
																	<div class="form-group">
																		<label class="custom-control custom-checkbox no-subtaskEnd-checkbox-container">
																			<input type="checkbox" class="custom-control-input no-subtaskEnd-date-checkbox" checked>
																			<span class="custom-control-label">No End Date.</span>
																		</label>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-xl-12">
																	<label class="form-label text-muted">Add Files: </label>
																	<div class="form-group">
																		<form method="post">
																			<input type="file" class="dropify" data-bs-height="100" />
																		</form>
																	</div>
																</div>
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
		<script src="{{asset('assets/js/summernote.js')}}"></script>

		<!-- FILE UPLOAD JS -->
        <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!-- TASK EDIT JS-->
		<script src="{{asset('assets/js/task-edit.js')}}"></script>

        @endsection
