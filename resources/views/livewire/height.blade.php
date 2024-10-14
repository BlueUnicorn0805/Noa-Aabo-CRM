@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Height</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
										<li class="breadcrumb-item active" aria-current="page">Height</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<!--div-->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Height Values</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
													<div class="d-flex align-items-center justify-content-center br-5 wpx-150 hpx-50 bg-gray-200 m-1">
														.hpx-50
													</div>
													<div class="d-flex align-items-center justify-content-center br-5 wpx-150 hpx-80 bg-gray-200 m-1">
														.hpx-80
													</div>
													<div class="d-flex align-items-center justify-content-center br-5 wpx-150 hpx-100 bg-gray-200 m-1">
														.hpx-100
													</div>
													<div class="d-flex align-items-center justify-content-center br-5 wpx-150 hpx-150 bg-gray-200 m-1">
														.hpx-150
													</div>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered mt-2 mb-0 text-nowrap">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.hpx-[value]</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered mt-2 text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.hpx-[value]</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5) Regular Height</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered mt-2 text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.hpx-[value]</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>150 | 200 | 250 | 300 | ... | 850 &nbsp; (step of 50) Bigger Height</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Percentage Height</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered mt-2 text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.hp-[value]</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Media query Height</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered mt-2 text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.ht-[size]-[value]</code></td>
															<td><code>.ht-[size]-[value]p</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>
																<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
																<p class="mg-b-0">value: the height value (refer to code above)</p>
															</td>
															<td>
																<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
																<p class="mg-b-0">value: the height value (refer to code above)</p>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Extra Height Classes</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered mt-2 text-nowrap  mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.ht-100v</code></td>
															<td><code>.ht-auto</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>Set a height to an element based on viewport height.</td>
															<td>Set an auto height to an element.</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
