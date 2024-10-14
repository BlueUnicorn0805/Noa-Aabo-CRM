@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Calendar</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Calendar</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW OPEN -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Calendar With different Color Events</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-xl-3">
													<div id="external-events">
														<h4>Draggable Events</h4>
														<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary sample-event">
															<div class="fc-event-main">Sample Event 1</div>
														</div>
														<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary sample-event" data-class="bg-teal">
															<div class="fc-event-main">Sample Event 2</div>
														</div>
														<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teritary sample-event" data-class="bg-warning">
															<div class="fc-event-main">Sample Event 3</div>
														</div>
														<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-custom-yellow sample-event" data-class=" bg-info">
															<div class="fc-event-main">Sample Event 4</div>
														</div>
														<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-orange sample-event" data-class="bg-danger">
															<div class="fc-event-main">Sample Event 5</div>
														</div>
													</div>

													<div id="custom-events" class="mt-6">
														<form>
															<h4>Custom Event</h4>
															<label class="mt-3">Event Title:</label>
															<div class="mg-b-30 mb-3">
																<div class="input-group">
																	<input class="form-control" placeholder="your title here..." type="text">
																</div>
															</div>
															<label>Event Date:</label>
															<div class="mg-b-30 mb-3">
																<div class="input-group">
																	<div id="datePickerStyle1" class="input-group date" data-date-format="mm-dd-yyyy">
																		<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
																		<input class="form-control" id="bootstrapDatePicker" type="text" placeholder="DD/MM/YYYY"/>
																	</div>
																</div>
															</div>
															<label>Event Type:</label>
															<div class="mg-b-30 mb-3">
																<div class="form-group">
																	<select class="form-control select2-show-search form-select select2-hidden-accessible" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
																		<option label="Choose one"></option>
																		<option value="day">Birthday</option>
																		<option value="day">Anniversary</option>
																		<option value="day">Wedding Day</option>
																		<option value="day">Others</option>
																	</select>
																</div>
															</div>
															<label>Reminder:</label>
															<div class="row">
																<div class="col-md-6">
																	<div class="mg-b-30 mb-3">
																		<div class="form-group">
																			<select class="form-control select2-show-search form-select select2-hidden-accessible" data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
																				<option label="Choose one"></option>
																				<option value="day">1 day before</option>
																				<option value="day">3 days before</option>
																				<option value="day">5 days before</option>
																				<option value="day">1 week before</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<input class="form-control" id="tp3" placeholder="Set time" type="text">
																</div>
															</div>
															<div class="wd-150 mg-b-30 ce-btn-group my-1">
																<button class="btn btn-primary ce-add">ADD</button>
																<button class="btn btn-secondary ce-reset">RESET</button>
															</div>
														</form>
													</div>
												</div>
												<div class="col-md-12 col-xl-9">
													<div id='calendar2'></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW CLOSED -->

                            @endsection

        @section('scripts')

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- bootstrap-datepicker js -->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/js/datepicker.js')}}"></script>

		<!-- TIMEPICKER JS -->
		<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

		<!-- FULL CALENDAR JS -->
		<script src='{{asset('assets/plugins/fullcalendar/moment.min.js')}}'></script>
		<script src='{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}'></script>
		<script src="{{asset('assets/js/fullcalendar.js')}}"></script>

        @endsection

