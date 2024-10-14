@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Opacity</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
										<li class="breadcrumb-item active" aria-current="page">Opacity</li>
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
											<h3 class="card-title">Opacity</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="d-flex flex-wrap">
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-1">.op-0-1</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-2">.op-0-2</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-3">.op-0-3</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-4">.op-0-4</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-5">.op-0-5</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-6">.op-0-6</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-7">.op-0-7</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-8">.op-0-8</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-0-9">.op-0-9</div>
													<div class="flex-1 bg-primary p-3 hpx-100 p-3 text-white op-1">.op-1</div>
												</div>
											</div>
											<div class="table-responsive mt-2 mb-0">
												<table class="table table-bordered text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.op-[value]</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td> 0-1 | 0-2 | 0-3 | 0-4 | 0-5 | 0-6 | 0-7 | 0-8 | 0-9 | 1</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive mt-2 mb-0">
												<table class="table table-bordered text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.op-[breakpoint]-[value]</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>
																<p>breakpoint: xs | sm | md | lg | xl</p>
																<p>value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!--/div-->
								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Shadow</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive mb-0">
												<table class="table table-bordered text-nowrap mb-0">
													<tbody>
														<tr>
															<td class="wp-20">Classes</td>
															<td><code>.shadow-default</code></td>
															<td><code>.shadow-0</code></td>
														</tr>
														<tr>
															<td class="wp-20">Values</td>
															<td>Add shadow to any box element.</td>
															<td>Remove shadow to any box element.</td>
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
