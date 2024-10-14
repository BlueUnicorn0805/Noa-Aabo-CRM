@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Form Wizard</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--Row open-->
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Form Wizard</h3>
										</div>
										<div class="card-body">
											<div id="smartwizard-3">
												<ul>
													<li><a href="#step-10">Login</a></li>
													<li><a href="#step-11">New User</a></li>
													<li><a href="#step-12">End</a></li>
												</ul>
												<div>
													<div id="step-10">
														<form >
															<div class="form-group">
																<label for="exampleInputEmail6">Email address</label>
																<input type="email" class="form-control" id="exampleInputEmail6" placeholder="Enter email address">
															</div>
															<div class="form-group">
																<label for="exampleInputPassword7">Password</label>
																<input type="password" class="form-control" id="exampleInputPassword7" placeholder="Password">
															</div>
															<div class="form-group mb-0 justify-content-end">
																<div>
																	<label class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																		<span class="custom-control-label">Check me Out</span>
																	</label>
																</div>
															</div>
														</form>
													</div>
													<div id="step-11">
														<form >
															<div class="form-group">
																<label for="inputtext">User Name</label>
																<input type="text" class="form-control" id="inputtext" placeholder="Enter User Name">
															</div>
															<div class="form-group">
																<label for="exampleInputEmail8">Email address</label>
																<input type="email" class="form-control" id="exampleInputEmail8" placeholder="Enter email address">
															</div>
															<div class="form-group">
																<label for="exampleInputPassword9">Password</label>
																<input type="password" class="form-control" id="exampleInputPassword9" placeholder="Password">
															</div>
															<div class="form-group mb-0 justify-content-end">
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label">Check me Out</span>
																</label>
															</div>
														</form>
													</div>
													<div id="step-12">
														<div class="form-group mb-0 justify-content-end">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label">I agree terms & Conditions</span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--row closed-->

							<!-- Row -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Basic Content Wizard
											</div>
										</div>
										<div class="card-body">
											<div id="wizard1">
												<h4>Personal Information</h4>
												<div>
													<div class="control-group form-group">
														<label class="form-label" for="name-wiz1">Name</label>
														<input type="text" id="name-wiz1" class="form-control" placeholder="Name" required>
													</div>
													<div class="control-group form-group">
														<label class="form-label" for="mail-wiz1">Email</label>
														<input type="email" class="form-control" id="mail-wiz1" placeholder="Email Address" required>
													</div>
													<div class="control-group form-group">
														<label class="form-label" for="phno-wiz1">Phone Number</label>
														<input type="number" class="form-control" id="phno-wiz1" placeholder="Number" required>
													</div>
													<div class="control-group form-group mb-0">
														<label class="form-label" for="address-wiz1">Address</label>
														<input type="text" class="form-control" id="address-wiz1" placeholder="Address" required>
													</div>
												</div>
												<h4>Billing Information</h4>
												<div>
													<div class="table-responsive0">
														<table class="table table-bordered">
															<tbody>
																<tr>
																	<td>Cart Subtotal</td>
																	<td class="text-end">$792.00</td>
																</tr>
																<tr>
																	<td><span>Totals</span></td>
																	<td class="text-end text-muted"><span>$792.00</span></td>
																</tr>
																<tr>
																	<td><span>Order Total</span></td>
																	<td><h2 class="price text-end mb-0">$792.00</h2></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<h4>Payment Details</h4>
												<div>
													<div class="form-group">
														<label class="form-label" for="name1">Card Holder Name</label>
														<input type="text" class="form-control" id="name1" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label" for="cardno1">Card number</label>
														<div class="input-group">
															<input type="text" class="form-control" id="cardno1" placeholder="Search for...">
															<span class="input-group-text btn btn-info text-white shadow-none">
																<i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																<i class="fa fa-cc-mastercard"></i>
															</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group mb-sm-0">
																<label class="form-label" for="expdate1">Expiration</label>
																<div class="input-group">
																	<input type="number" id="expdate1" class="form-control" placeholder="MM" name="expiremonth">
																	<input type="number" id="expdate2" class="form-control" placeholder="YYYY" name="expireyear">
																</div>
															</div>
														</div>
														<div class="col-sm-4 ">
															<div class="form-group mb-0">
																<label class="form-label" for="cvv1">CVV <i class="fa fa-question-circle"></i></label>
																<input type="number" class="form-control" id="cvv1" required>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/Row -->

							<!--Row -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Basic Wizard With Validation
											</div>
										</div>
										<div class="card-body">
											<div id="wizard2">
												<h4>Personal Information</h4>
												<div>
													<div class="row ">
														<div class="col-md-5 col-lg-4">
															<label class="form-control-label" for="firstname">Firstname: <span class="tx-danger">*</span></label>
															<input class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required type="text">
														</div>
														<div class="col-md-5 col-lg-4">
															<label class="form-control-label" for="lastname">Lastname: <span class="tx-danger">*</span></label>
															<input class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required type="text">
														</div>
													</div>
												</div>
												<h4>Billing Information</h4>
												<div>
													<p>Wonderful transition effects.</p>
													<div class="form-group">
														<label class="form-control-label" for="email">Email: <span class="tx-danger">*</span></label>
														<input class="form-control" id="email" name="email" placeholder="Enter email address" type="email" required>
													</div>
												</div>
												<h4>Payment Details</h4>
												<div>
													<div class="form-group">
														<label class="form-label" for="name11">Card Holder Name</label>
														<input type="text" class="form-control" id="name11" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label" for="cardno2">Card number</label>
														<div class="input-group">
															<input type="text" class="form-control" id="cardno2" placeholder="Search for...">
															<span class="input-group-text btn btn-info text-white shadow-none">
																<i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																<i class="fa fa-cc-mastercard"></i>
															</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group">
																<label class="form-label" for="expdate3">Expiration</label>
																<div class="input-group">
																	<input type="number" class="form-control" id="expdate3" placeholder="MM" name="expiremonth">
																	<input type="number" class="form-control" id="expdate31" placeholder="YYYY" name="expireyear">
																</div>
															</div>
														</div>
														<div class="col-sm-4 ">
															<div class="form-group mb-0">
																<label class="form-label" for="cvv2">CVV <i class="fa fa-question-circle"></i></label>
																<input type="number" class="form-control" id="cvv2" required>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/Row-->

							<!--Row-->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Vertical Orientation Wizard
											</div>
										</div>
										<div class="card-body">
											<div id="wizard3">
												<h4>Personal Information</h4>
												<div>
													<div class="control-group form-group">
														<label class="form-label" for="name3">Name</label>
														<input type="text" class="form-control" id="name3" placeholder="Name" required>
													</div>
													<div class="control-group form-group">
														<label class="form-label" for="email3">Email</label>
														<input type="email" class="form-control" id="email3" placeholder="Email Address" required>
													</div>
													<div class="control-group form-group">
														<label class="form-label" for="phno3">Phone Number</label>
														<input type="number" class="form-control" id="phno3" placeholder="Number" required>
													</div>
													<div class="control-group form-group mb-0">
														<label class="form-label" for="address3">Address</label>
														<input type="text" class="form-control" id="address3" placeholder="Address" required>
													</div>
												</div>
												<h4>Billing Information</h4>
												<div>
													<div class="table-responsive0">
														<table class="table table-bordered">
															<tbody>
																<tr>
																	<td>Cart Subtotal</td>
																	<td class="text-end">$792.00</td>
																</tr>
																<tr>
																	<td><span>Totals</span></td>
																	<td class="text-end text-muted"><span>$792.00</span></td>
																</tr>
																<tr>
																	<td><span>Order Total</span></td>
																	<td><h2 class="price text-end mb-0">$792.00</h2></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<h4>Payment Details</h4>
												<div>
													<div class="form-group">
														<label class="form-label" for="name12">Card Holder Name</label>
														<input type="text" class="form-control" id="name12" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label" for="cardno12">Card number</label>
														<div class="input-group">
															<input type="text" class="form-control" id="cardno12" placeholder="Search for...">
															<span class="input-group-text btn btn-info text-white shadow-none">
																<i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																<i class="fa fa-cc-mastercard"></i>
															</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group">
																<label class="form-label" for="expdate12">Expiration</label>
																<div class="input-group">
																	<input type="number" id="expdate12" class="form-control" placeholder="MM" name="expiremonth">
																	<input type="number" id="expdate13" class="form-control" placeholder="YYYY" name="expireyear">
																</div>
															</div>
														</div>
														<div class="col-sm-4 ">
															<div class="form-group mb-0">
																<label class="form-label" for="cvv12">CVV <i class="fa fa-question-circle"></i></label>
																<input type="number" class="form-control" id="cvv12" required>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Accordion Wizard</h3>
										</div>
										<div class="card-body accordion-wizard">
											<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
											<form id="form">
												<div class="list-group">
													<div class="list-group-item py-4" data-acc-step>
														<h6 class="mb-0 me-2" data-acc-title>Name &amp; Email</h6>
														<div data-acc-content>
															<div class="my-3">
																<div class="form-group">
																	<label class="form-label" for="name4">Name:</label>
																	<input type="text" name="name" id="name4" class="form-control" />
																</div>
																<div class="form-group">
																	<label class="form-label" for="email4">Email:</label>
																	<input type="text" name="email" id="email4" class="form-control" />
																</div>
															</div>
														</div>
													</div>
													<div class="list-group-item py-4" data-acc-step>
														<h6 class="mb-0" data-acc-title>Contact</h6>
														<div data-acc-content>
															<div class="my-3">
																<div class="form-group">
																	<label class="form-label" for="telno4">Telephone:</label>
																	<input type="text" name="telephone" id="telno4" class="form-control" />
																</div>
																<div class="form-group">
																	<label class="form-label" for="mobile4">Mobile:</label>
																	<input type="text" name="mobile" id="mobile4" class="form-control" />
																</div>
															</div>
														</div>
													</div>
													<div class="list-group-item py-4" data-acc-step>
														<h6 class="mb-0" data-acc-title>Payment</h6>
														<div data-acc-content>
															<div class="my-3">
																<div class="form-group">
																	<label class="form-label" for="card4">Credit card:</label>
																	<input type="text" name="card" id="card4" class="form-control">
																</div>
																<div class="form-group form-row">
																	<div class="col-sm-4">
																		<label class="form-label" for="expdate4">Expiry:</label>
																		<input type="text" name="expiry" id="expdate4" class="form-control">
																	</div>
																	<div class="col-sm-4">
																		<label class="form-label" for="cvv4">CVV:</label>
																		<input type="text" name="cvv" id="cvv4" class="form-control">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- FORM WIZARD JS-->
		<script src="{{asset('assets/plugins/formwizard/jquery.smartWizard.js')}}"></script>
		<script src="{{asset('assets/plugins/formwizard/fromwizard.js')}}"></script>

		<!-- INTERNAl JQUERY.STEPS JS -->
		<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
		<script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

		<!-- INTERNAL ACCORDION-WIZARD-FORM JS-->
		<script src="{{asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>
		<script src="{{asset('assets/js/form-wizard.js')}}"></script>

        @endsection
