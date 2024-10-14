@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Navigation</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Navigation</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic Nav</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-basic br-7">
												<li class="nav-item1 p-0">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1 p-0">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1 p-0">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1 p-0">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Horizontal Alignment</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<ul class="nav nav-basic br-7 justify-content-center">
													<li class="nav-item1 p-0">
														<a class="nav-link active" href="#">Active</a>
													</li>
													<li class="nav-item1 p-0">
														<a class="nav-link" href="#">Link</a>
													</li>
													<li class="nav-item1 p-0">
														<a class="nav-link" href="#">Link</a>
													</li>
													<li class="nav-item1 p-0">
														<a class="nav-link disabled" href="#">Disabled</a>
													</li>
												</ul>
												<ul class="nav nav-basic br-7 justify-content-end">
													<li class="nav-item1 p-0">
														<a class="nav-link active" href="#">Active</a>
													</li>
													<li class="nav-item1 p-0">
														<a class="nav-link" href="#">Link</a>
													</li>
													<li class="nav-item1 p-0">
														<a class="nav-link" href="#">Link</a>
													</li>
													<li class="nav-item1 p-0">
														<a class="nav-link disabled" href="#">Disabled</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Nav Vertical</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 nav-column flex-column br-7">
												<li class="nav-item1">
													<a class="nav-link thumb active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link thumb" href="#">Link</a>
												</li>
												<li class="nav-item1 pb-2">
													<a class="nav-link thumb disabled" href="#">Disabled</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Icon Navigation</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-pills nav-pills-circle" id="tabs_2" role="tablist">
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab1" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab2" data-bs-toggle="tab" href="#tabs_2_2" role="tab"  aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link py-2 px-4  border active show m-1" id="tab3" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="true">
														<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab4" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border py-2 px-4 m-1" id="tab5" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Icon Nav Bar</h3>
										</div>
										<div class="card-body">
											<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
												<li class="nav-item">
													<a class="nav-link border w-7 h-7 text-center br-100 m-2" id="tab21" data-bs-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="tab1" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border w-7 h-7 br-100 m-2" id="tab22" data-bs-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="tab2" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border active show w-7 h-7 br-100 m-2" id="tab23" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab3" aria-selected="true">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border w-7 h-7 br-100 m-2" id="tab24" data-bs-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="tab4" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers fs-15"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border  w-7 h-7 br-100 m-2" id="tab25" data-bs-toggle="tab" href="#tabs_2_4" role="tab" aria-controls="tab5" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image fs-16"></i> </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Navigation backgrounds</h3>
										</div>
										<div class="card-body">
											<ul class="nav1 colored bg-primary br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 colored bg-info mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 colored bg-success mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 colored bg-secondary mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 colored bg-warning mt-4 br-7">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

        @endsection
