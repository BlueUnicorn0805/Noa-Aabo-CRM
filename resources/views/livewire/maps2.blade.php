@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Mapel Maps</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Mapel Maps</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4  class="card-title">Map with links between the plotted cities</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer4">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4 class="card-title">Static MapelMaps</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4 class="card-title"> Map with a legend for areas</h4>
										</div>
										<div class="card-body">
											<div class="mapcontainer1">
												<div class="map pt-0">
													<span>Alternative content for the map</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

                            @endsection

        @section('scripts')

		<!-- INTERNAL Mapel Plugin -->
		<script src="{{asset('assets/plugins/mapel/raphael.min.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/jquery.mapael.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/maps/france_departments.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/maps/world_countries.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/maps/usa_states.js')}}"></script>
		<script src="{{asset('assets/js/mapelmaps.js')}}"></script>

        @endsection

