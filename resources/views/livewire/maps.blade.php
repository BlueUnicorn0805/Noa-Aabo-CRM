@extends('layouts.app')

        @section('styles')

		<!-- INTERNAL Jvectormap css -->
        <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Vector Maps</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Vector Maps</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">World Map</h3>
										</div>
										<div class="card-body">
											<div id="world-map-markers" class="worldh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
							</div>
							<!-- End row -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Asia Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap2" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Australia Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap3" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Canada Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap4" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Germany Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap5" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Europe Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap6" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">India Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap7" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">UK Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap8" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">USA Map</h3>
										</div>
										<div class="card-body">
											<div id="vmap9" class="stateh h-300"></div>
										</div>
									</div>
								</div><!-- end col -->
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- INTERNAL Vector js -->
		<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-de-mill.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js')}}"></script>
		<script src="{{asset('assets/js/jvectormap.js')}}"></script>

        @endsection
