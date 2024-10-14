@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">ChartJs</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">ChartJs</li>
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
											<div class="chart-container">
												<canvas id="chartLine" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Area Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartArea" class="h-300"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartBar1" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Bar Chart Border Radius</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartBar2" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Stacked Bar Chart</h3>
										</div>
										<div class="card-body">
											<div class="chartjs-wrapper-demo">
												<canvas id="chartStacked1" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Using Transparency</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartBar3" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Animation Delay</h3>
										</div>
										<div class="card-body">
											<div class="chartjs-wrapper-demo">
												<canvas id="chartDelay" class="h-275"></canvas>
											</div>
											<p class="text-muted mb-0 mt-3 text-12">Note: Reload page to see animation</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Animation Progress</h3>
										</div>
										<div class="card-body">
											<div class="chartjs-wrapper-demo">
												<canvas id="chartProgress" class="h-275"></canvas>
											</div>
											<p class="text-muted mb-0 mt-3 text-12">Note: Reload page to see animation</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Animation Drop</h3>
										</div>
										<div class="card-body">
											<div class="chartjs-wrapper-demo">
												<canvas id="chartDrop" class="h-275"></canvas>
											</div>
											<p class="text-muted mb-0 mt-3 text-12">Note: Reload page to see animation</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Donut Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartPie" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Pie Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartDonut" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Radar  Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartRadar" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Polar Chart</h3>
										</div>
										<div class="card-body">
											<div class="chart-container">
												<canvas id="chartPolar" class="h-275"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-1 CLOSE -->

                            @endsection

        @section('scripts')

		<!-- CHARTJS JS -->
		<script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>
		<script src="{{asset('assets/js/chart.js')}}"></script>

        @endsection

