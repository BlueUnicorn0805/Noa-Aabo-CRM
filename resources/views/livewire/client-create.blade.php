@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Add Client</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Clients</a></li>
										<li class="breadcrumb-item active" aria-current="page">Add Client</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div  class="card">
										<div class="card-header border-bottom">
											<h4 class="mb-0">Client Info</h4>
										</div>
										<div class="card-body p-0 task-edit-main">
											<div class="row p-5 border-bottom">
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Salution:</label>
														<select class="form-control select2 form-select select2-hidden-accessible text-dark" id="client-salution1" data-placeholder="Choose Category..." tabindex="-1" aria-hidden="true">
															<option label="Choose one"></option>
															<option value="empty" selected>---</option>
															<option value="MR">Mr.</option>
															<option value="MS">Ms.</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Client Name:</label>
														<div class="input-group" id="client-name">
															<input type="text" class="form-control text-dark" placeholder="Enter Client Name">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Email:</label>
														<div class="input-group" id="client-email">
															<input type="text" class="form-control text-dark" placeholder="Enter Client Email">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Password:</label>
														<div class="input-group" id="client-password">
															<input type="password" class="form-control text-dark input-password" placeholder="Enter Password">
															<span class="input-group-text btn btn-primary text-white show-password">
																<i class="fe fe-eye eye-open"></i>
																<i class="fe fe-eye-off eye-close d-none"></i>
															</span>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<label class="form-label text-muted">Country: </label>
													<div class="form-group">
														<ul>
															<li class="select-client">
																<select class="form-control select2-country-search" data-placeholder="Select Country">
																	<option label="defaultOption" value="def" selected>Select Country</option>
																	<option value="UM">United States of America</option>
																	<option value="AF">Afghanistan</option>
																	<option value="AL">Albania</option>
																	<option value="AD">Andorra</option>
																	<option value="AG">Antigua and Barbuda</option>
																	<option value="AU">Australia</option>
																	<option value="AM">Armenia</option>
																	<option value="AO">Angola</option>
																	<option value="AR">Argentina</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BA">Bosnia and Herzegovina</option>
																	<option value="BB">Barbados</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BE">Belgium</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BH">Bahrain</option>
																	<option value="BJ">Benin</option>
																	<option value="BN">Brunei</option>
																	<option value="BO">Bolivia</option>
																	<option value="BT">Bhutan</option>
																	<option value="BY">Belarus</option>
																	<option value="CD">Congo</option>
																	<option value="CA">Canada</option>
																	<option value="CF">Central African Republic</option>
																	<option value="CI">Cote d'Ivoire</option>
																	<option value="CL">Chile</option>
																	<option value="CM">Cameroon</option>
																	<option value="CN">China</option>
																	<option value="CO">Colombia</option>
																	<option value="CU">Cuba</option>
																	<option value="CV">Cabo Verde</option>
																	<option value="CY">Cyprus</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DK">Denmark</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="EC">Ecuador</option>
																	<option value="EE">Estonia</option>
																	<option value="ER">Eritrea</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FI">Finland</option>
																	<option value="FJ">Fiji</option>
																	<option value="FR">France</option>
																	<option value="GA">Gabon</option>
																	<option value="GD">Grenada</option>
																	<option value="GE">Georgia</option>
																	<option value="GH">Ghana</option>
																	<option value="GH">Ghana</option>
																	<option value="HN">Honduras</option>
																	<option value="HT">Haiti</option>
																	<option value="HU">Hungary</option>
																	<option value="ID">Indonesia</option>
																	<option value="IE">Ireland</option>
																	<option value="IL">Israel</option>
																	<option value="IN">India</option>
																	<option value="IQ">Iraq</option>
																	<option value="IR">Iran</option>
																	<option value="IS">Iceland</option>
																	<option value="IT">Italy</option>
																	<option value="JM">Jamaica</option>
																	<option value="JO">Jordan</option>
																	<option value="JP">Japan</option>
																	<option value="KE">Kenya</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="KI">Kiribati</option>
																	<option value="KW">Kuwait</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="LA">Laos</option>
																	<option value="LB">Lebanons</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LR">Liberia</option>
																	<option value="LS">Lesotho</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="LV">Latvia</option>
																	<option value="LY">Libya</option>
																	<option value="MA">Morocco</option>
																	<option value="MC">Monaco</option>
																	<option value="MD">Moldova</option>
																	<option value="ME">Montenegro</option>
																	<option value="MG">Madagascar</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MK">Macedonia (FYROM)</option>
																	<option value="ML">Mali</option>
																	<option value="MM">Myanmar (formerly Burma)</option>
																	<option value="MN">Mongolia</option>
																	<option value="MR">Mauritania</option>
																	<option value="MT">Malta</option>
																	<option value="MV">Maldives</option>
																	<option value="MW">Malawi</option>
																	<option value="MX">Mexico</option>
																	<option value="MZ">Mozambique</option>
																	<option value="NA">Namibia</option>
																	<option value="NG">Nigeria</option>
																	<option value="NO">Norway</option>
																	<option value="NP">Nepal</option>
																	<option value="NR">Nauru</option>
																	<option value="NZ">New Zealand</option>
																	<option value="OM">Oman</option>
																	<option value="PA">Panama</option>
																	<option value="PF">Paraguay</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PH">Philippines</option>
																	<option value="PK">Pakistan</option>
																	<option value="PL">Poland</option>
																	<option value="QA">Qatar</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russia</option>
																	<option value="RW">Rwanda</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SB">Solomon Islands</option>
																	<option value="SC">Seychelles</option>
																	<option value="SD">Sudan</option>
																	<option value="SE">Sweden</option>
																	<option value="SG">Singapore</option>
																	<option value="TG">Togo</option>
																	<option value="TH">Thailand</option>
																	<option value="TJ">Tajikistan</option>
																	<option value="TL">Timor-Leste</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TN">Tunisia</option>
																	<option value="TO">Tonga</option>
																	<option value="TR">Turkey</option>
																	<option value="TT">Trinidad and Tobago</option>
																	<option value="TW">Taiwan</option>
																	<option value="UA">Ukraine</option>
																	<option value="UG">Uganda</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VA">Vatican City (Holy See)</option>
																	<option value="VE">Venezuela</option>
																	<option value="VN">Vietnam</option>
																	<option value="VU">Vanuatu</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																</select>
															</li>
														</ul>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Mobile Number:</label>
														<div class="input-group" id="client-mobilenumber">
															<input type="number" class="form-control text-dark" placeholder="Enter Mobile Number">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Gender:</label>
														<select class="form-control select2 form-select select2-hidden-accessible text-dark" id="client-salution2" data-placeholder="Select Gender" tabindex="-1" aria-hidden="true">
															<option value="empty" selected>---</option>
															<option value="MA">Male</option>
															<option value="FE">Female</option>
															<option value="OT">Others</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Category:</label>
														<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="client-salution3" data-placeholder="Select Gender" tabindex="-1" aria-hidden="true">
															<option value="empty" selected>---</option>
															<option value="MA">Marketing</option>
															<option value="IT">IT Development</option>
															<option value="CC">Cloud Computing</option>
															<option value="MR">Medical Research</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Sub Category:</label>
														<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" id="client-salution4" data-placeholder="Select Gender" tabindex="-1" aria-hidden="true">
															<option value="empty" selected>---</option>
															<option value="MA">Marketing</option>
															<option value="IT">IT Development</option>
															<option value="CC">Cloud Computing</option>
															<option value="MR">Medical Research</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Can User Login To App?</label>
														<div class="d-flex align-items-center mt-3">
															<label class="custom-control custom-radio me-3">
																<input type="radio" class="custom-control-input" name="login-radio" value="yes" checked>
																<span class="custom-control-label">Yes</span>
															</label>
															<label class="custom-control custom-radio">
																<input type="radio" class="custom-control-input" name="login-radio" value="no">
																<span class="custom-control-label">No</span>
															</label>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Can User Receive Email Notifications?</label>
														<div class="d-flex align-items-center mt-3">
															<label class="custom-control custom-radio me-3">
																<input type="radio" class="custom-control-input" name="notifications-radio" value="yes" checked>
																<span class="custom-control-label">Yes</span>
															</label>
															<label class="custom-control custom-radio">
																<input type="radio" class="custom-control-input" name="notifications-radio" value="no">
																<span class="custom-control-label">No</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row p-5 border-bottom">
												<div class="col-xl-12">
													<h4 class="mb-4">Company Details</h4>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label class="form-label text-muted">Company Name:</label>
														<div class="input-group" id="company-name">
															<input type="text" class="form-control text-dark" placeholder="Enter Company Name">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label class="form-label text-muted">Company Website:</label>
														<div class="input-group" id="company-website">
															<input type="text" class="form-control text-dark" placeholder="ex: http://www.spruko.com/">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-4">
													<div class="form-group">
														<label class="form-label text-muted">GST Number:</label>
														<div class="input-group" id="company-gstnumber">
															<input type="number" class="form-control text-dark" placeholder="Enter GST Number">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Office Phone Number:</label>
														<div class="input-group" id="company-phonenumber">
															<input type="number" class="form-control text-dark" placeholder="Enter Phone Number">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">City:</label>
														<div class="input-group" id="company-city">
															<input type="text" class="form-control text-dark" placeholder="City">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">State:</label>
														<div class="input-group" id="company-state">
															<input type="text" class="form-control text-dark" placeholder="State">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Postal Code:</label>
														<div class="input-group" id="company-postalcode">
															<input type="text" class="form-control text-dark" placeholder="Postal Code">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label class="form-label text-muted">Company Address:</label>
														<textarea class="form-control" name="company-address" id="company-address" cols="30" rows="4" placeholder="Plat No., Street, Lane No, City"></textarea>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-6">
													<div class="form-group">
														<label class="form-label text-muted">Shipping Address:</label>
														<textarea class="form-control" name="company-shippingaddress" id="company-shippingaddress" cols="30" rows="4" placeholder="Plat No., Street, Lane No, City"></textarea>
													</div>
												</div>
											</div>
											<div class="row p-5">
												<div class="btn-list text-end">
													<button class="btn btn-outline-danger"> <i class="fe fe-x-circle"></i> Cancel</button>
													<button class="btn btn-primary"> <i class="fe fe-check-circle"></i> Save</button>
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

		<!-- FORMEDITOR JS -->
		<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>

		<!-- FILE UPLOAD JS -->
        <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!-- TASK EDIT JS-->
		<script src="{{asset('assets/js/client-create.js')}}"></script>

        @endsection
