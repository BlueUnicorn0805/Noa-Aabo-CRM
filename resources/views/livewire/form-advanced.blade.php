@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Form Elements Advanced</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Dropdowns Select</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="form-group">
													<label class="form-label" for="default-dropdown">Default Select</label>
													<select name="country" class="form-control form-select" id="default-dropdown" data-bs-placeholder="Select Country">
														<option label="Choose one"></option>
														<option value="br">Brazil</option>
														<option value="cz">Czech Republic</option>
														<option value="de">Germany</option>
														<option value="pl">Poland</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Basic Select2</label>
													<select class="form-control select2 form-select" data-placeholder="Choose one">
														<option label="Choose one"></option>
														<option value="1">Chuck Testa</option>
														<option value="2">Sage Cattabriga-Alosa</option>
														<option value="3">Nikola Tesla</option>
														<option value="4">Cattabriga-Alosa</option>
														<option value="5">Nikola Alosa</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Select2 With Search</label>
													<select class="form-control select2-show-search form-select" data-placeholder="Choose one">
														<option label="Choose one"></option>
														<option value="1">Chuck Testa</option>
														<option value="2">Sage Cattabriga-Alosa</option>
														<option value="3">Nikola Tesla</option>
														<option value="4">Cattabriga-Alosa</option>
														<option value="5">Nikola Alosa</option>
														<option value="6">Chuck Testa</option>
														<option value="7">Sage Cattabriga-Alosa</option>
														<option value="8">Nikola Tesla</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Multiple Select</label>
													<select multiple class="form-control select2-show-search form-select" data-placeholder="Choose one">
														<option label="Choose one"></option>
														<option value="1">Chuck Testa</option>
														<option value="2">Sage Cattabriga-Alosa</option>
														<option value="3">Nikola Tesla</option>
														<option value="4">Cattabriga-Alosa</option>
														<option value="5">Nikola Alosa</option>
														<option value="6">Chuck Testa</option>
														<option value="7">Sage Cattabriga-Alosa</option>
														<option value="8">Nikola Tesla</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Select2 Disabled</label>
													<select class="form-control select2-show-search form-select" data-placeholder="Choose one" disabled>
														<option label="Choose one"></option>
														<option value="1">Chuck Testa</option>
														<option value="2">Sage Cattabriga-Alosa</option>
														<option value="3">Nikola Tesla</option>
														<option value="4">Cattabriga-Alosa</option>
														<option value="5">Nikola Alosa</option>
														<option value="6">Chuck Testa</option>
														<option value="7">Sage Cattabriga-Alosa</option>
														<option value="8">Nikola Tesla</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed-->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Select2 Dropdown Styles</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<label class="form-label">Select2 Style-01: </label>
															<ul>
																<li class="select-client">
																	<select class="form-control select2-style1" data-placeholder="Choose One">
																		<option label="Choose one"></option>
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
													<div class="col-sm-12">
														<div class="form-group">
															<label class="form-label">Multiple Select: </label>
															<ul>
																<li class="select-client">
																	<select class="form-control select2-style1" data-placeholder="Choose One" multiple>
																		<option label="Choose one"></option>
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
													<div class="col-sm-12">
														<div class="form-group">
															<label class="form-label">Select2 With Result: </label>
															<ul>
																<li class="select-client">
																	<select class="form-control select2-style1" data-placeholder="Choose One">
																		<option label="Choose one"></option>
																		<option value="1">Angeline Julliet</option>
																		<option value="2">Helena Rose</option>
																		<option value="13">Daniel Obrien</option>
																		<option value="15">Jorah Randy</option>
																		<option value="3" selected>Emma Watson</option>
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
									</div>
								</div>
							</div>
							<!-- Row Closed-->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Date, Month, Year Range Picker</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row row-sm">
													<div class="col-lg-4 mb-3">
														<label for="datepicker-date">Date Range Picker</label>
														<div class="input-group">
															<div class="input-group-text bg-primary-transparent text-primary">
																<i class="fe fe-calendar text-20"></i>
															</div>
															<input class="form-control" id="datepicker-date" placeholder="MM/DD/YYYY" type="text">
														</div><!-- input-group -->
													</div><!-- col-4 -->
													<div class="col-lg-4 mb-3">
														<label for="datepicker-month">Month Range Picker</label>
														<div class="input-group">
															<div class="input-group-text bg-primary-transparent text-primary">
																<i class="fe fe-calendar text-20"></i>
															</div>
															<input class="form-control" id="datepicker-month" placeholder="(000) 000-0000" type="text">
														</div><!-- input-group -->
													</div>
													<div class="col-lg-4 mb-3">
														<label for="datepicker-year">Year Range Picker</label>
														<div class="input-group">
															<div class="input-group-text bg-primary-transparent text-primary">
																<i class="fe fe-calendar text-20"></i>
															</div>
															<input class="form-control" id="datepicker-year" placeholder="(000) 000-0000 ext 0000" type="text">
														</div><!-- input-group -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Jquery UI Date Pickers</h3>
										</div>
										<div class="card-body">
											<div class="row row-sm">
												<div class="col-md-12 col-lg-12 col-xl-8 mb-3">
													<div class="example">
														<div class="row">
															<div class="col-lg-6 mb-3">
																<label for="fc-datepicker">jQuery UI Date Picker</label>
																<div class="input-group">
																	<div class="input-group-text bg-primary-transparent text-primary">
																		<i class="fe fe-calendar text-20"></i>
																	</div>
																	<input class="form-control fc-datepicker" id="fc-datepicker" placeholder="MM/DD/YYYY" type="text">
																</div><!-- input-group -->
															</div><!-- col-6 -->
															<div class="col-lg-6 mb-3">
																<label for="datepickerNoOfMonths">jQuery UI Date Picker</label>
																<div class="input-group">
																	<div class="input-group-text bg-primary-transparent text-primary">
																		<i class="fe fe-calendar text-20"></i>
																	</div>
																	<input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
																</div><!-- input-group -->
															</div><!-- col-6 -->
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-12 col-xl-4 mb-3">
													<div class="example">
														<label for="bootstrapDatePicker1">Date Picker Style-01</label>
														<div class="input-group">
															<div id="datePickerStyle1" class="input-group date" data-date-format="mm-dd-yyyy">
																<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
																<input class="form-control" id="bootstrapDatePicker1" type="text"/>
															</div>
														</div>
													</div>
												</div><!-- col-4 -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Date & Time Pickers</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-12 col-xl-6 mb-3">
													<div class="example">
														<label for="datetimepicker1">Simple UI Date Time Picker</label>
														<div class="input-group col-md-6 ps-0">
															<div class="input-group-text bg-primary-transparent text-primary">
																<i class="fe fe-calendar text-20"></i>
															</div>
															<input class="form-control" id="datetimepicker1" type="text" value="2018-12-20 21:05">
														</div><!-- input-group -->
													</div>
												</div><!-- col-6 -->
												<div class="col-md-12 col-lg-12 col-xl-6 mb-3">
													<div class="example">
														<label for="datetimepicker2">Amaze UI Date Time Picker</label>
														<div class="input-group col-md-6 ps-0">
															<div class="input-group-text bg-primary-transparent text-primary">
																<i class="fe fe-calendar text-20"></i>
															</div>
															<input class="form-control" id="datetimepicker2" type="text" value="2018-12-20 21:05">
														</div><!-- input-group -->
													</div>
												</div><!-- col-6 -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bootstrap Maxlength</h3>
										</div>
										<div class="card-body">
											<p class="card-sub-title text-muted">Bootstrap-Maxlength uses a Twitter Bootstrap label to show a visual feedback to the user about the maximum length of the field where the user is inserting text. Uses the HTML5 attribute <code class="highlighter-rouge">maxlength</code> to work.</p>
											<div class="example">
												<form class="form-horizontal">
													<div class="form-group">
														<label for="defaultconfig" class="form-label">Default Usuage</label>
														<input type="text" class="form-control" maxlength="25" id="defaultconfig">
													</div>
													<div class="form-group">
														<label for="thresholdConfig" class="form-label">Threshold Value</label>
														<input type="text" class="form-control" maxlength="25" id="thresholdConfig">
													</div>
													<div class="form-group">
														<label for="alloptions" class="form-label">All the options</label>
														<input type="text" class="form-control" maxlength="25" id="alloptions">
													</div>
													<div class="row">
														<div class="col-md-12 col-xl-3">
															<div class="form-group">
																<label for="place-top-left" class="form-label">Top Left</label>
																<input type="text" class="form-control" maxlength="25" id="place-top-left">
															</div>
														</div>
														<div class="col-md-12 col-xl-3">
															<div class="form-group">
																<label for="place-top-right" class="form-label">Top Right</label>
																<input type="text" class="form-control" maxlength="25" id="place-top-right">
															</div>
														</div>
														<div class="col-md-12 col-xl-3">
															<div class="form-group">
																<label for="place-bottom-left" class="form-label">Bottom Left</label>
																<input type="text" class="form-control" maxlength="25" id="place-bottom-left">
															</div>
														</div>
														<div class="col-md-12 col-xl-3">
															<div class="form-group">
																<label for="place-bottom-right" class="form-label">Bottom Right</label>
																<input type="text" class="form-control" maxlength="25" id="place-bottom-right">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label for="textarea" class="form-label">Textarea</label>
														<textarea class="form-control" maxlength="225" id="textarea" rows="3"></textarea>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">File Upload</h3>
										</div>
										<div class="card-body">
											<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
											<div class="row mb-4">
												<div class="col-sm-12 col-md-4">
													<input type="file" class="dropify" data-height="200" />
												</div>
												<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
													<input type="file" class="dropify" data-default-file="{{asset('assets/images/photos/1.jpg')}}" data-height="200"  />
												</div>
												<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
													<input type="file" class="dropify" disabled="disabled"  />
												</div>
											</div>
											<div>
												<input id="demo" type="file" name="files" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple />
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- row closed -->

                            @endsection

        @section('scripts')

		<!-- Bootstrap-Date Range Picker js-->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

		<!-- jQuery UI Date Picker js -->
		<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

		<!-- bootstrap-datepicker js (Date picker Style-01) -->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/js/datepicker.js')}}"></script>

		<!-- Amaze UI Date Picker js-->
		<script src="{{asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

		<!-- Simple Date Time Picker js-->
		<script src="{{asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- BOOTSTRAP MAX-LENGTH JS -->
		<script src="{{asset('assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js')}}"></script>

		<!--Internal Fileuploads js-->
		<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
		<script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!--Internal Fancy uploader js-->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
		<script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- FORM ELEMENTS JS -->
		<script src="{{asset('assets/js/formelementadvnced.js')}}"></script>

        @endsection
