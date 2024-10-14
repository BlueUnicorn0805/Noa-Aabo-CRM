@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Tables</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
										<li class="breadcrumb-item active" aria-current="page">Default Table</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Simple Table</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Using the most basic table markup.</p>
											<div class="table-responsive">
												<table class="table  border text-nowrap text-md-nowrap">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr >
															<td>1</td>
															<td>Kevin Powell</td>
															<td>Business Development Associator</td>
															<td>$50,300</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Mark Ronson</td>
															<td>Sales Manager</td>
															<td>$45,500</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Katy Perry</td>
															<td>Data Analyst</td>
															<td>$425,500</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Pam Podrick</td>
															<td>Python Developer</td>
															<td>$415,900</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Sandy Orell</td>
															<td>Backed Developer</td>
															<td>$95,900</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Striped Rows</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Add zebra-striping to any table row.</p>
											<div class="table-responsive">
												<table class="table border text-nowrap text-md-nowrap table-striped">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Kevin Powell</td>
															<td>Business Development Associator</td>
															<td>$50,300</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Mark Ronson</td>
															<td>Sales Manager</td>
															<td>$45,500</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Katy Perry</td>
															<td>Data Analyst</td>
															<td>$425,500</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Pam Podrick</td>
															<td>Python Developer</td>
															<td>$415,900</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Sandy Orell</td>
															<td>Backed Developer</td>
															<td>$95,900</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bordered Table</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Add borders on all sides of the table and cells.</p>
											<div class="table-responsive">
												<table class="table text-nowrap text-md-nowrap table-bordered">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Kevin Powell</td>
															<td>Business Development Associator</td>
															<td>$50,300</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Mark Ronson</td>
															<td>Sales Manager</td>
															<td>$45,500</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Katy Perry</td>
															<td>Data Analyst</td>
															<td>$425,500</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Pam Podrick</td>
															<td>Python Developer</td>
															<td>$415,900</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Sandy Orell</td>
															<td>Backed Developer</td>
															<td>$95,900</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Hoverable Rows Table</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">To enable hover state on table rows.</p>
											<div class="table-responsive">
												<table class="table border text-nowrap text-md-nowrap table-hover">
													<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Position</th>
															<th>Salary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Kevin Powell</td>
															<td>Business Development Associator</td>
															<td>$50,300</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Mark Ronson</td>
															<td>Sales Manager</td>
															<td>$45,500</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Katy Perry</td>
															<td>Data Analyst</td>
															<td>$425,500</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Pam Podrick</td>
															<td>Python Developer</td>
															<td>$415,900</td>
														</tr>
														<tr>
															<td>5</td>
															<td>Sandy Orell</td>
															<td>Backed Developer</td>
															<td>$95,900</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

        @endsection
