@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Time Log Invoice</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Invoices</a></li>
										<li class="breadcrumb-item active" aria-current="page">Time Log Invoice</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!--ROW OPENED-->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div  class="card invoice-create-card">
										<div class="card-header border-bottom">
											<h4 class="mb-0">Invoice</h4>
										</div>
										<div class="card-body p-0">
											<div class="row p-5 border-bottom">
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="inv-number" class="form-label text-muted">Invoice Number:</label>
														<div class="input-group">
															<span class="input-group-text bg-primary-transparent text-primary-dark">#INV-</span>
															<input id="inv-number" type="text" class="form-control text-dark" placeholder="Enter Invoice Number" value="773">
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="invoice-date" class="form-label text-muted">Invoice Date:</label>
														<div id="inv-datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input id="invoice-date" class="form-control" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="invoice-date1" class="form-label text-muted">Due Date:</label>
														<div id="due-datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input id="invoice-date1" class="form-control" type="text" placeholder="DD/MM/YYYY"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label class="form-label text-muted">Currency:</label>
														<select class="form-control select2-show-search form-select select2-hidden-accessible text-dark" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
															<option label="Choose one"></option>
															<option value="day">USD($)</option>
															<option value="day">GBP(£)</option>
															<option value="day">EUR(€)</option>
															<option value="day">INR(₹)</option>
														</select>
													</div>
												</div>
												<div class="col-sm-12 col-md col-xl-3">
													<div class="form-group">
														<label for="client-name" class="form-label text-muted">Client:</label>
														<input type="text" class="form-control text-dark" id="client-name" placeholder="Enter Client Name" value="Demo Company">
													</div>
												</div>
												<div class="col-sm-12 col-md col-xl-3">
													<div class="form-group">
														<label for="project-name" class="form-label text-muted">Project:</label>
														<input type="text" class="form-control text-dark" id="project-name" placeholder="Enter Project Name" value="Project Spruko">
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="timelogfrom-date" class="form-label text-muted">Time Log From:</label>
														<div id="timelogfrom-datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input id="timelogfrom-date" class="form-control" type="text"/>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-xl-3">
													<div class="form-group">
														<label for="timelogto-date" class="form-label text-muted">Time Log To:</label>
														<div id="timelogto-datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
															<span class="input-group-addon input-group-text bg-primary-transparent"><i class="fe fe-calendar text-primary-dark"></i></span>
															<input id="timelogto-date" class="form-control" type="text" placeholder="DD/MM/YYYY"/>
														</div>
													</div>
												</div>
											</div>
											<div class="row p-5 border-bottom">
												<div class="col-xl-12">
													<div class="product-description-list">
														<div class="product-description-each mb-3 table-responsive">
															<table class="invoice-product-table">
																<thead>
																	<tr>
																		<th>Description</th>
																		<th>Quantity</th>
																		<th>Unit Price</th>
																		<th>Tax</th>
																		<th>Amount</th>
																	</tr>
																</thead>
																<tbody class="border">
																	<tr class="dashed-border-bottom">
																		<td>
																			<input type="text" class="form-control" placeholder="Item Name" value="">
																		</td>
																		<td class="w-10">
																			<input type="number" class="form-control" placeholder="Quantity" value="1" min="0">
																		</td>
																		<td class="w-10">
																			<input type="number" class="form-control" placeholder="Price" value="0" min="0">
																		</td>
																		<td class="w-10">
																			<div class="form-group mb-0">
																				<select class="form-control select2-show-search form-select select2-hidden-accessible" data-placeholder="Choose Type..." tabindex="-1" aria-hidden="true">
																					<option label="Choose one"></option>
																					<option value="empty" selected>---</option>
																					<option value="day">GST: 10%</option>
																					<option value="day">CGST: 18%</option>
																					<option value="day">VAT: 10%</option>
																					<option value="day">IGST: 10%</option>
																					<option value="day">UGST: 10%</option>
																				</select>
																			</div>
																		</td>
																		<td rowspan="2" class="bg-primary-transparent w-15 amount-cell">00.00</td>
																	</tr>
																	<tr>
																		<td colspan="4">
																			<textarea name="product-description" class="form-control border-0 p-2" id="productDescription" placeholder="Write Description(Optional)" cols="30" rows="5"></textarea>
																		</td>
																	</tr>
																</tbody>
															</table>
															<i class="fe fe-delete fs-20 text-muted text-center delete-row-btn ms-2"></i>
														</div>
													</div>
													<a href="javascript:void(0)" role="button" class="text-primary text-center add-invoice-item-btn mt-2">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn text-primary" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M16,11.5h-3.5V8c0-0.276123-0.223877-0.5-0.5-0.5S11.5,7.723877,11.5,8v3.5H8c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h3.5v3.5005493C11.5001831,16.2765503,11.723999,16.5001831,12,16.5h0.0006104C12.2765503,16.4998169,12.5001831,16.276001,12.5,16v-3.5H16c0.276123,0,0.5-0.223877,0.5-0.5S16.276123,11.5,16,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5202026-0.0062866,9.9937134-4.4797974,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9682617,0.0056152,8.9943848,4.0317383,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
														Add Item
													</a>
												</div>
											</div>
											<div class="row pt-0 pb-5 px-5 border-bottom">
												<div class="col-xl-12">
													<div class="invoice-bottom-table-container table-responsive">
														<table class="table ms-auto invoice-table-bottom w-50 text-end mb-0">
															<tbody>
																<tr>
																	<td colspan="3" class="border-top-0">Sub Total</td>
																	<td class="border-top-0">0.00</td>
																</tr>
																<tr>
																	<td>Discount</td>
																	<td class="w-30">
																		<input type="number" class="form-control text-end" value="0" min="0">
																	</td>
																	<td class="w-15">
																		<div class="form-group mb-0">
																			<select class="form-control select2 custom-select" data-placeholder="Choose Type">
																				<option label="Choose one"></option>
																				<option value="percentage" selected>%</option>
																				<option value="amount">Amount</option>
																			</select>
																		</div>
																	</td>
																	<td>0.00</td>
																</tr>
																<tr>
																	<td>Tax</td>
																	<td colspan="3">0.00</td>
																</tr>
																<tr class="bg-primary-transparent text-primary-dark fw-bold fs-15">
																	<td colspan="3">Total</td>
																	<td>0.00</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="col-xl-12 mt-4">
													<div class="row">
														<div class="col-xl-6">
															<label for="recipientNote" class="form-label text-muted mb-2">Note:</label>
															<textarea name="recipient-note" class="form-control text-dark" placeholder="Write A Note For Recipient" id="recipientNote" cols="30" rows="5"></textarea>
														</div>
														<div class="col-xl-6">
															<label class="text-muted">Terms and Conditions:</label>
															<p class="text-dark">Thank you for your business.</p>
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

		<!-- INVOICE CREATE JS-->
		<script src="{{asset('assets/js/invoice-timelog.js')}}"></script>

        @endsection
