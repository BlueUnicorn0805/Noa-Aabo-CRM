@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Invoice-List</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">Invoices</a></li>
										<li class="breadcrumb-item active" aria-current="page">Invoice List</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="fs-14 mb-0">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">Paid</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$2,805</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/1.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Lisbon Taylor</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-danger-transparent text-danger">Unpaid</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$12,355</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/12.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Daniel Obrien</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">Paid</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$25,005</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/13.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">William Turner</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-warning-transparent text-warning">Overdue</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$5,200</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/2.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Onena Tyrell</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">Paid</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$1,805</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/15.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Brandom Marsh</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-primary-transparent text-primary">Paid</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$2,805</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/4.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Emilie Benett</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-danger-transparent text-danger">Unpaid</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$2,530</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/15.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Jamie Podrick</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-warning-transparent text-warning">Overdue</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$6,500</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/16.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Sam Smith</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
									<div class="card">
										<div class="card-body p-0">
											<div class="options-inv">
												<a href="#" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-start">
													<a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i> Share</a>
													<a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i> Download</a>
													<a class="dropdown-item" href="#"><i class="si si-printer me-2"></i> Print</a>
													<a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i> Delete</a>
												</div>
											</div>
											<div class="d-flex align-items-center justify-content-between py-5 px-6 mt-2">
												<div>
													<h6 class="text-muted">Invoice Number</h6>
													<p class="mb-0 fs-14">
														<a href="{{url('invoice-details')}}" class="text-primary">#INV-1116</a>
													</p>
												</div>
												<div>
													<span class="text-center text-muted d-block">Status</span>
													<p class="mb-0 mt-1 badge rounded-pill bg-warning-transparent text-warning">Overdue</p>
												</div>
												<div class="text-end">
													<h6 class="text-muted">Amount</h6>
													<h4 class="mb-0">$2,805</h4>
												</div>
											</div>
											<hr class="mt-0 mb-0">
											<div class="d-sm-flex align-items-center justify-content-between py-5 px-6">
												<div class="d-flex align-items-center">
													<div class="me-2">
														<img alt="User Avatar" class="rounded-circle avatar-lg" src="{{asset('assets/images/users/3.jpg')}}">
													</div>
													<div>
														<h6 class="mb-1">Lisbon Taylor</h6>
														<span class="text-muted fs-13">invoice@spruko.com</span>
													</div>
												</div>
												<div>
													<span class="text-muted d-block">Due Date</span>
													<p class="mb-0 mt-0">11-11-2020</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
