@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Checkout</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
										<li class="breadcrumb-item active" aria-current="page">Checkout</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-xl-8 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Billing Information</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">First Name <span class="text-red">*</span></label>
														<input type="text" class="form-control" placeholder="First name">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Last Name <span class="text-red">*</span></label>
														<input type="text" class="form-control" placeholder="Last name">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Company Name <span class="text-red">*</span></label>
														<input type="text" class="form-control" placeholder="Company name">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Email address <span class="text-red">*</span></label>
														<input type="email" class="form-control" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Country <span class="text-red">*</span></label>
														<select class="form-control select2 form-select"  data-placeholder="Select">
															<option label="Select"></option>
															<option value="1">Germany</option>
															<option value="2">Canada</option>
															<option value="3">Usa</option>
															<option value="4">Aus</option>
														</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Address <span class="text-red">*</span></label>
														<input type="text" class="form-control" placeholder="Home Address">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">City <span class="text-red">*</span></label>
														<input type="text" class="form-control" placeholder="City">
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Postal Code <span class="text-red">*</span></label>
														<input type="number" class="form-control" placeholder="ZIP Code">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Payment Information</h3>
										</div>
										<div class="card-body">
											<div class="card-pay">
												<ul class="tabs-menu nav checkout">
													<li><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
													<li><a href="#tab21" data-bs-toggle="tab"><i class="fa fa-paypal"></i>  Paypal</a></li>
													<li><a href="#tab22" data-bs-toggle="tab"><i class="fa fa-university"></i>  Bank Transfer</a></li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active show" id="tab20">
														<div class="bg-danger-transparent-2 text-danger br-3 mb-4" role="alert">Please Enter Valid Details</div>
														<div class="form-group">
															<label class="form-label">Card Holder Name</label>
															<input type="text" class="form-control" placeholder="First Name">
														</div>
														<div class="form-group">
															<label class="form-label">Card number</label>
															<div class="input-group">
																<input type="text" class="form-control" placeholder="Search for...">
																<span class="input-group-text btn btn-success shadow-none">
																	<i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																	<i class="fa fa-cc-mastercard"></i>
																</span>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<div class="form-group">
																	<label class="form-label">Expiration</label>
																	<div class="input-group">
																		<input type="number" class="form-control" placeholder="MM" name="Month">
																		<input type="number" class="form-control" placeholder="YYYY" name="Year">
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
																	<input type="number" class="form-control" required="">
																</div>
															</div>
														</div>
														<a href="#" class="btn btn-primary">Confirm</a>
													</div>
													<div class="tab-pane" id="tab21">
														<p>Paypal is easiest way to pay online</p>
														<p><a href="#" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
														<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
													</div>
													<div class="tab-pane" id="tab22">
														<p>Bank account details</p>
														<dl class="card-text">
														<dt>BANK: </dt>
														<dd> THE UNION BANK 0456</dd>
														</dl>
														<dl class="card-text">
														<dt>Account Number: </dt>
														<dd> 67542897653214</dd>
														</dl>
														<dl class="card-text">
														<dt>IBAN: </dt>
														<dd>543218769</dd>
														</dl>
														<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-12">
									<div class="card cart">
										<div class="card-header border-bottom">
											<h3 class="card-title">Your Order</h3>
										</div>
										<div class="card-body">
											<div class="d-md-flex">
												<div class="d-flex">
													<img class="img-fluid avatar-xl border p-0 br-7" src="{{asset('assets/images/pngs/9.png')}}" alt="img">
													<div class="ms-3 mt-2">
														<h4 class="mb-1 fw-semibold fs-14"><a href="#">Rounded Shape Digital Watch For Men</a></h4>
														<div class="mb-2 text-warning fs-14">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
												</div>
												<div class="ms-auto my-auto">
													<span class="me-4 my-auto fs-16 fw-semibold">$438</span>
												</div>
											</div>
											<div class="d-md-flex mt-5">
												<div class="d-flex">
													<img class="img-fluid avatar-xl border p-0 br-7" src="{{asset('assets/images/pngs/1.png')}}" alt="img">
													<div class="ms-3 mt-2">
														<h4 class="mb-1 fw-semibold fs-14"><a href="#">Digital Camera Pro 30.2MP With Lens</a></h4>
														<div class="mb-2 text-warning fs-14">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
												</div>
												<div class="ms-auto my-auto">
													<span class="me-4 my-auto fs-16 fw-semibold">$765</span>
												</div>
											</div>
											<div class="d-md-flex mt-5">
												<div class="d-flex">
													<img class="img-fluid avatar-xl border p-0 br-7" src="{{asset('assets/images/pngs/6.png')}}" alt="img">
													<div class="ms-3 mt-2">
														<h4 class="mb-1 fw-semibold fs-14"><a href="#">Wood Photo Frame(M) With Wall Decorators</a></h4>
														<div class="mb-2 text-warning fs-14">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
													</div>
												</div>
												<div class="ms-auto my-auto">
													<span class="me-4 my-auto fs-16 fw-semibold">$543</span>
												</div>
											</div>
											<table class="table mt-5">
												<tr>
													<td class="border-top-0">Sub Total</td>
													<td class="text-end border-top-0">$4,360</td>
												</tr>
												<tr>
													<td class="border-top-0">Discount</td>
													<td class="text-end border-top-0">5%</td>
												</tr>
												<tr>
													<td class="border-top-0">Shipping</td>
													<td class="text-end border-top-0">Free</td>
												</tr>
												<tr>
													<td class="fs-20 border-top-0">Total</td>
													<td class="text-end fs-20 border-top-0">$3,976</td>
												</tr>
											</table>
										</div>
										<div class="card-footer text-end">
											<a href="#" class="btn btn-primary">Place Order</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- INTERNAL Bootstrap-Datepicker js-->
		<script src="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>

		<!-- TIMEPICKER JS -->
		<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

		<!-- DATEPICKER JS -->
		<script src="{{asset('assets/plugins/date-picker/date-picker.js')}}"></script>
		<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
		<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

		<!-- CHECKOUT JS-->
		<script src="{{asset('assets/js/checkout.js')}}"></script>

        @endsection
