@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Pagination</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Pagination</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic pagination</h3>
										</div>
										<div class="card-body">
											<div class="pagination-wrapper">
												<nav aria-label="Page navigation">
													<ul class="pagination mb-0">
														<li class="page-item active">
															<a class="page-link" href="#">1</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">2</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">3</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">4</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#">5</a>
														</li>
														<li class="page-item">
															<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
														</li>
													</ul>
												</nav>
											</div>
											<!-- pagination-wrapper -->
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic pagination</h3>
										</div>
										<div class="card-body">
											<ul class="pagination ">
												<li class="page-item page-prev disabled">
													<a class="page-link" href="#" tabindex="-1">Prev</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">4</a></li>
												<li class="page-item page-next">
													<a class="page-link" href="#">Next</a>
												</li>
											</ul>
											<!-- pagination-wrapper -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Model Pagination</h3>
										</div>
										<div class="card-body ">
											<ul class="pagination page-0 ">
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">3</a>
												</li>
												<li class="page-item">
													<a class="page-link hidden-xs-down" href="#">4</a>
												</li>

												<li class="page-item">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</div>
										<!-- pagination-wrapper -->
									</div>
									<!-- section-wrapper -->
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Model Pagination2</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation">
												<ul class="pagination pagination-success mb-0">
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
													</li>
													<li class="page-item active">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item disabled"><span class="page-link">...</span></li>
													<li class="page-item">
														<a class="page-link" href="#">10</a>
													</li>
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
													</li>
												</ul>
											</nav>
											<!-- pagination-wrapper -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Model Pagination2</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation example">
												<ul class="pagination">
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Pagination left alignment</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation example">
												<ul class="pagination ">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Pagination center alignment</h3>
										</div>
										<div class="card-body">
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-center">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Pagination Right Alignment</h3>
										</div>
										<div class="card-body ">
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-end">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<!-- End  Row -->

                            @endsection

        @section('scripts')

        @endsection
