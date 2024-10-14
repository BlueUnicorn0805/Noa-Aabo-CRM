@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Eharts</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">ECharts</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Line chart</h3>
										</div>
										<div class="card-body">
											<div id="echart1" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Combination of Line & Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="echart2" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Vertical Line chart</h3>
										</div>
										<div class="card-body">
											<div id="echart3" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Vertical Combination of Line & Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="echart4" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSE -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="echart5" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Horizontal Bar Chart</h3>
										</div>
										<div class="card-body">
											<div id="echart6" class="chartsh"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-3 CLOSE -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Single line chart</h3>
										</div>
										<div class="card-body">
											<div id="echart7" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Pie chart</h3>
										</div>
										<div class="card-body">
											<div id="echart8" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Donut chart</h3>
										</div>
										<div class="card-body">
											<div id="echart11" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart Race</h3>
										</div>
										<div class="card-body">
											<div id="echart9" class="chartsh"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Animation</h3>
										</div>
										<div class="card-body">
											<div id="echart10" class="chartsh"></div>
											<p class="text-muted mb-0 text-12">Note: Reload page to see animation</p>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-4 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- ECHART JS -->
		<script src="{{asset('assets/plugins/echarts/echarts.js')}}"></script>
		<script src="{{asset('assets/js/echarts.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>

        @endsection
