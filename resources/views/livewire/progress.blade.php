@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Progress Bars</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Progress Bars</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary wp-10"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary wp-20"></div>
												</div>
												<div class="progress progress-md mb-3 ">
													<div class="progress-bar bg-primary wp-40"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary  wp-60" ></div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar bg-primary  wp-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Contextual Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-pink wp-10"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-success wp-20"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-yellow wp-40"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary wp-60"></div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar bg-secondary wp-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic Progress with label</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-gray wp-10">10%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-secondary wp-20"> 20%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-success wp-40"> 40%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-warning  wp-60"> 60%</div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar bg-info wp-80"> 80%</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Contextual Progress with label</h3>
										</div>
										<div class="card-body">
											<p>Add labels to your progress bars by placing text within the <code class="highlighter-rouge">.progress-bar</code></p>
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-pink wp-10"> 7%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-success wp-20">20%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-yellow wp-40" >40%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-primary wp-60">60%</div>
												</div>
												<div class="progress progress-md ">
													<div class="progress-bar bg-secondary wp-80"> 80%</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 OPEN -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Progress Sizes</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-xs mb-3">
													<div class="progress-bar bg-primary wp-30"></div>
												</div>
												<div class="progress progress-sm mb-3">
													<div class="progress-bar bg-success wp-60"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-warning wp-70"></div>
												</div>
												<div class="progress progress-lg">
													<div class="progress-bar bg-info wp-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Mixed color Progress with Sizes</h3>
										</div>
										<div class="card-body">
											<div class="example mixed-color-progress">
												<div class="progress progress-xs mb-3">
													<div class="progress-bar bg-secondary w-5 br-0"></div>
													<div class="progress-bar bg-warning w-5 br-0"></div>
													<div class="progress-bar bg-info w-5 bar-end"></div>
												</div>
												<div class="progress progress-sm mb-3">
													<div class="progress-bar bg-pink wp-10 br-0"></div>
													<div class="progress-bar bg-yellow w-15 br-0"></div>
													<div class="progress-bar bg-teal w-15 bar-end"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar bg-pink w-15 br-0"></div>
													<div class="progress-bar bg-primary wp-20 br-0"></div>
													<div class="progress-bar bg-cyan wp-30 bar-end"></div>
												</div>

												<div class="progress progress-lg">
													<div class="progress-bar bg-success wp-30 br-0"></div>
													<div class="progress-bar bg-pink wp-20 br-0"></div>
													<div class="progress-bar bg-secondary wp-40 bar-end"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Striped Progress</h3>
										</div>
										<div class="card-body">
											<p>Add <code class="highlighter-rouge">.progress-bar-striped</code> to any <code class="highlighter-rouge">.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color.</p>
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary wp-10">10%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary wp-20">20%</div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success wp-40">50%</div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-info wp-60">60%</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Animated Progress</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-indeterminate bg-primary" ></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-indeterminate bg-secondary"></div>
												</div>
												<div class="progress progress-md mb-3">
													<div class="progress-bar progress-bar-indeterminate bg-success"></div>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-indeterminate bg-info"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-xl-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Striped Progress</h3>
										</div>
										<div class="card-body">
											<p>Add  <code class="highlighter-rouge">.progress-bar-animated</code> to <code class="highlighter-rouge">.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
											<div class="example">
												<div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" id="animatedBar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
												</div>
												<button type="button" class="btn btn-primary mt-3 active" data-bs-toggle="button" id="btnToggleAnimatedProgress" aria-pressed="true">
													Toggle animation
												</button>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-4 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- PROGRESS BAR JS-->
		<script src="{{asset('assets/js/progress.js')}}"></script>

        @endsection
