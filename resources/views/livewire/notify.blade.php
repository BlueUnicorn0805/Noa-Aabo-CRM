@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Notifications</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item active" aria-current="page">Notify</li>
										<li class="breadcrumb-item"><a href="{{url('index')}}">Dashboard</a></li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Alerts Notifications</h3>
										</div>
										<div class="card-body">
											<div class="btn-list">
												<button onclick="not1()" class="btn btn-success">Default</button>
												<button onclick="not3()" class="btn btn-warning">Left</button>
												<button onclick="not4()" class="btn btn-info">Center Info</button>
												<button onclick="not5()" class="btn btn-danger">Center Error</button>
												<button onclick="not6()" class="btn btn-warning">Center Warning</button>
												<button onclick="not7()" class="btn btn-primary">Bottom Primary</button>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Side Alerts Notifications</h3>
										</div>
										<div class="card-body">
											<div class="btn-list">
												<a href="#" class="btn btn-success notice">Success</a>
												<a href="#" class="btn btn-warning warning">Warning</a>
												<a href="#" class="btn btn-danger error">Danger</a>
											</div>
										</div>
									</div>
									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Notification Styles</h3>
										</div>
										<div class="card-body">
											<div class="example border-0 p-0">
												<div class="btn-list">
													<button onclick="not13()" class="btn btn-info">Mutiple lines</button>
													<button onclick="not14()" class="btn btn-success">Fade Animation</button>
													<button onclick="not15()" class="btn btn-primary">Customize Background</button>
													<button onclick="not16()" class="btn btn-info">Timeout</button>
												</div>
											</div>
										</div>
									</div><!-- div -->

									<!-- div -->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Call Back Notification</h3>
										</div>
										<div class="card-body">
											<div class="example border-0 p-0">
												<div class="btn-list">
													<button onclick="not17()" class="btn btn-orange">Call Back</button>
													<button onclick="not18()" class="btn btn-dark">Call Back 2</button>
												</div>
											</div>
										</div>
									</div>
									<!-- div -->
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- INTERNAL Notifications js -->
		<script src="{{asset('assets/plugins/notify/js/rainbow.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

        @endsection
