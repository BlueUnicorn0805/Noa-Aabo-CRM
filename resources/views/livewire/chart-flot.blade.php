@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Chart Flot</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">Flot Charts</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Line Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotLine1" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Line Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotLine2" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Area Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotArea1" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Area Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotArea2" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Area chart</h3>
										</div>
										<div class="card-body">
											<div id="flotArea3" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotBar1" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotBar2" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Stacking Chart</h3>
										</div>
										<div class="card-body">
											<div id="flotStacking" class="chartsh"></div>
											<div class="mt-3 d-flex">
												<p class="stackControls">
													<button id="control-btn-stack" class="btn btn-sm btn-outline-primary active">With stacking</button>
													<button id="control-btn-stack1" class="btn btn-sm btn-outline-secondary">Without stacking</button>
												</p>
												<p class="graphControls ms-auto">
													<button id="control-btn1" class="btn btn-sm btn-outline-info active">Bars</button>
													<button id="control-btn2" class="btn btn-sm btn-outline-success">Lines</button>
													<button id="control-btn3" class="btn btn-sm btn-outline-warning">Lines with steps</button>
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Animated graph</h3>
										</div>
										<div class="card-body">
											<div id="flotAnimated" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">pie chart models</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-9">
													<div id="flotPie" class="chartsh"></div>
												</div>
												<div class="col-lg-3">
													<div id="menu">
														<button id="action-1" class="btn d-grid btn-sm btn-outline-primary mt-2 mt-lg-0 ">Default Options</button>
														<button id="action-2" class="btn d-grid btn-sm btn-outline-secondary mt-2">Without Legend</button>
														<button id="action-3" class="btn d-grid btn-sm btn-outline-info mt-2">Label Formatter</button>
														<button id="action-4" class="btn d-grid btn-sm btn-outline-success mt-2">Label Radius</button>
														<button id="action-5" class="btn d-grid btn-sm btn-outline-warning mt-2">Label Styles #1</button>
														<button id="action-6" class="btn d-grid btn-sm btn-outline-secondary mt-2">Label Styles #2</button>
														<button id="action-8" class="btn d-grid btn-sm btn-outline-info mt-2">Combined Slice</button>
														<button id="action-9" class="btn d-grid btn-sm btn-outline-dark mt-2">Rectangular Pie</button>
														<button id="action-10" class="btn d-grid btn-sm btn-outline-primary mt-2">Tilted Pie</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-3 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- FLOT JS -->
		<script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
		<script src="{{asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
		<script src="{{asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('assets/plugins/flot/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
		<script src="{{asset('assets/js/flot.js')}}"></script>

        @endsection
