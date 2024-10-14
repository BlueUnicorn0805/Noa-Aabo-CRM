@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Width</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
										<li class="breadcrumb-item active" aria-current="page">Width</li>
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
											<h3 class="card-title">Width Scales</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
													<div class="d-flex align-items-center justify-content-center wpx-200 hpx-100 bg-gray-200 br-5 m-1">
														.wpx-200
													</div>
													<div class="d-flex align-items-center justify-content-center wpx-150 hpx-100 bg-gray-200 br-5 m-1">
														.wpx-150
													</div>
													<div class="d-flex align-items-center justify-content-center wpx-100 hpx-100 bg-gray-200 br-5 m-1">
														.wpx-100
													</div>
													<div class="d-flex align-items-center justify-content-center wpx-80 hpx-100 bg-gray-200 br-5 m-1">
														.wpx-80
													</div>
												</div>
											</div>
											<div class="table-responsive mt-2">
												<table class="table table-bordered text-nowrap">
													<thead>
														<tr>
															<th class="wp-30">Smaller Width</th>
															<th class="wp-70">Value</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.wpx-[value]</code></td>
															<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<thead>
														<tr>
															<th class="wp-30">Regular Width</th>
															<th class="wp-70">Value</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.wpx-[value]</code></td>
															<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<thead>
														<tr>
															<th class="wp-30">Bigger Width</th>
															<th class="wp-70">Value</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.wpx-[value]</code></td>
															<td>150 | 200 | 250 | 300 | ... | 1000 &nbsp; (step of 50)</td>
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
											<h3 class="card-title">Percentage width</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap mt-2 mb-0">
													<thead>
														<tr>
															<th class="wd-30p">Class</th>
															<th class="wd-70p">Value</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.wp-[value]</code></td>
															<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
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
											<h3 class="card-title">Media Query Width</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap mt-2 mb-0">
													<thead>
														<tr>
															<th class="wp-30">Class</th>
															<th class="wp-70">Value</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.wd-[size]-[value]</code></td>
															<td rowspan="2">
																<p>size: xs | sm | md | lg | xl</p>
																<p>value: the width value (refer to code above)</p>
															</td>
														</tr>
														<tr>
															<td><code>.wd-[size]-[value]p</code></td>
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
											<h3 class="card-title">Extra Width Classes</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap mb-0">
													<thead>
														<tr>
															<th class="wp-30">Class</th>
															<th class="wp-70">Description</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.wv-100</code></td>
															<td>Set a width to an element based on viewport width.</td>
														</tr>
														<tr>
															<td><code>.w-auto</code></td>
															<td>Set an auto width to an element.</td>
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
