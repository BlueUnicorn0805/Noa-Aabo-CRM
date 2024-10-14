@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Border</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
										<li class="breadcrumb-item active" aria-current="page">Border</li>
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
											<h3 class="card-title">Set Border</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="d-flex flex-wrap d-flex align-items-center justify-content-center justify-content-sm-start">
													<div class="p-7 w-40 m-1 mb-2 border">.border</div>
													<div class="p-7 w-40 m-1 mb-2 border-start">.border-start</div>
													<div class="p-7 w-40 m-1 mb-2 border-top ">.border-top</div>
													<div class="p-7 w-40 m-1 mb-2 border-end">.border-end</div>
													<div class="p-7 w-40 m-1 mb-2 border-bottom">.border-bottom</div>
													<div class="p-7 w-40 m-1 mb-2 border-x">.border-x</div>
													<div class="p-7 w-40 m-1 mb-2 border-y">.border-y</div>
												</div>
											</div>
											<div class="table-responsive mt-2">
												<table class="table table-bordered text-nowrap">
													<thead>
														<tr>
															<th class="wd-30p">Class</th>
															<th class="wd-70p">Description</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>class="border"</code></td>
															<td>Add border in all sides of an element using default color and width.</td>
														</tr>
														<tr>
															<td><code>class="border-start"</code></td>
															<td>Add border to left side of element.</td>
														</tr>
														<tr>
															<td><code>class="border-top"</code></td>
															<td>Add border to top side of element.</td>
														</tr>
														<tr>
															<td><code>class="border-end"</code></td>
															<td>Add border to right side of element.</td>
														</tr>
														<tr>
															<td><code>class="border-bottom"</code></td>
															<td>Add border to bottom side of element.</td>
														</tr>
														<tr>
															<td><code>class="border-x"</code></td>
															<td>Add border to left and right side of element.</td>
														</tr>
														<tr>
															<td><code>class="border-y"</code></td>
															<td>Add border to top and bottom side of element.</td>
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
											<h3 class="card-title">Set Border</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="mt-2 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
													<div class="p-7 w-40 m-1 mb-2 border">.border</div>
													<div class="p-7 w-40 m-1 mb-2 border border-2">.border .border-2</div>
													<div class="p-7 w-40 m-1 mb-2 border border-3">.border .border-3</div>
													<div class="p-7 w-40 m-1 mb-2 border border-4">.border .border-4</div>
													<div class="p-7 w-40 m-1 mb-2 border border-5">.border .border-5</div>
												</div>
											</div>
											<div class="table-responsive mt-2">
												<table class="table table-bordered text-nowrap">
													<thead>
														<tr>
															<th class="wd-30p">Class</th>
															<th class="wd-70p">Description</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>class="border"</code></td>
															<td>Set 1px (default) border to element.</td>
														</tr>
														<tr>
															<td><code>class="border border-2"</code></td>
															<td>Set 2px border to element.</td>
														</tr>
														<tr>
															<td><code>class="border border-3"</code></td>
															<td>Set 3px border to element.</td>
														</tr>
														<tr>
															<td><code>class="border border-4"</code></td>
															<td>Set 4px border to element.</td>
														</tr>
														<tr>
															<td><code>class="border border-5"</code></td>
															<td>Set 5px border to element.</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!--/div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Remove Border</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="mt-2 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
													<div class="p-7 m-1 mb-2 border border-2 border-top-0">.border</div>
													<div class="p-7 m-1 mb-2 border border-2 border-end-0">.border</div>
													<div class="p-7 m-1 mb-2 border border-2 border-b-0">.border</div>
													<div class="p-7 m-1 mb-2 border border-2 border-end-0">.border</div>
													<div class="p-7 m-1 mb-2 border border-2 border-x-0">.border</div>
													<div class="p-7 m-1 mb-2 border border-2 border-y-0">.border</div>
												</div>
											</div>
											<div class="table-responsive mt-2">
												<table class="table table-bordered text-nowrap">
													<thead>
														<tr>
															<th class="wd-30p">Class</th>
															<th class="wd-70p">Description</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><code>.border-0</code></td>
															<td>Remove all borders of an element.</td>
														</tr>
														<tr>
															<td><code>.border-top-0</code></td>
															<td>Remove top border of an element</td>
														</tr>
														<tr>
															<td><code>.border-end-0</code></td>
															<td>Remove right border of an element</td>
														</tr>
														<tr>
															<td><code>.border-b-0</code></td>
															<td>Remove bottom border of an element</td>
														</tr>
														<tr>
															<td><code>.border-end-0</code></td>
															<td>Remove left border of an element</td>
														</tr>
														<tr>
															<td><code>.border-x-0</code></td>
															<td>Remove left and right border of an element</td>
														</tr>
														<tr>
															<td><code>.border-y-0</code></td>
															<td>Remove top and bottom border of an element</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!--/div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Border Color</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="mt-2 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
													<div class="p-7 me-2 mb-2 border border-2 border-primary">.border-primary</div>
													<div class="p-7 me-2 mb-2 border border-2 border-secondary">.border-secondary</div>
													<div class="p-7 me-2 mb-2 border border-2 border-success">.border-success</div>
													<div class="p-7 me-2 mb-2 border border-2 border-info">.border-info</div>
													<div class="p-7 me-2 mb-2 border border-2 border-warning">.border-warning</div>
													<div class="p-7 me-2 mb-2 border border-2 border-danger">.border-danger</div>
												</div>
											</div>
											<div class="table-responsive mt-2 mb-0">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wd-20p">Classes</td>
															<td><code>.border-[value]</code></td>
															<td><code>.border-gray-[value]</code></td>
														</tr>
														<tr>
															<td class="wd-20p">Values</td>
															<td>primary | secondary | success | info | warning | danger | purple | pink | teal | orange</td>
															<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Border Radius</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="mt-2 d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
													<div class="wpx-80 hpx-80 m-1 border border-gray-500 radius-1"></div>
													<div class="wpx-80 hpx-80 m-1 border border-gray-500 radius-5"></div>
													<div class="wpx-80 hpx-80 m-1 border border-gray-500 radius-10"></div>
													<div class="wpx-80 hpx-80 m-1 border border-gray-500 radius-20"></div>
													<div class="wpx-80 hpx-80 m-1 border border-gray-500 radius-30"></div>
													<div class="wpx-80 hpx-80 m-1 border border-gray-500 rounded-circle"></div>
												</div>
											</div>
											<div class="table-responsive mt-2 mb-0">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wd-20p">Classes</td>
															<td><code>.radius</code></td>
															<td><code>.radius-[value]</code></td>
														</tr>
														<tr>
															<td class="wd-20p">Values</td>
															<td>Set a border radius of 2px (default) to an element.</td>
															<td>1 | 5 | 10 | 20 | 30 | 50 | circle</td>
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
