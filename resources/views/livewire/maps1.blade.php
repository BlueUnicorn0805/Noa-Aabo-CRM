@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Leaflet Maps</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Leaflet Maps</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card" id="map">
										<div class="card-header border-bottom">
											<div class="card-title">Basic</div>
										</div>
										<div class="card-body">
											<div class="h-500" id="leaflet1"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card" id="map2">
										<div class="card-header border-bottom">
											<div class="card-title">With Popup</div>
										</div>
										<div class="card-body">
											<div class="h-500" id="leaflet2"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card" id="map1">
										<div class="card-header border-bottom">
											<div class="card-title">Map With Circle</div>
										</div>
										<div class="card-body">
											<div class="h-500 ht-sm-300 ht-md-400" id="leaflet3"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

                            @endsection

        @section('scripts')

		<!-- INTERNAL leaflet js -->
		<script src="{{asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{asset('assets/js/map-leafleft.js')}}"></script>

        @endsection
