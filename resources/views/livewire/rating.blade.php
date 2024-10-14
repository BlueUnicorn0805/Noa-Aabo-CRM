@extends('layouts.app')

        @section('styles')

        <!-- INTERNAl Themes  css-->
        <link rel="stylesheet" href="{{asset('assets/plugins/rating/dist/themes/themes.css')}}">

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Rating</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Rating</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-1" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Heart Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-2" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-3" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi Heart Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-6" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Multi circle Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-4" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Thumbs-up Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block" id="rating-5" data-stars="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cards">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Basic Star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Rounded star Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars  block my-rating-4" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                    gradients Rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-5" data-rating="5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Execute callback when rating
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-6"   data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                read only mode
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-7"  data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Use fullstars
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-8" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                On hover event
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-9" data-rating="2">
                                            </div>
                                            <span class="live-rating"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                rating level colors
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="rating-stars block my-rating-10" data-rating="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- Star Rating Js-->
		<script src="{{asset('assets/plugins/rating/jquery-rate-picker.js')}}"></script>
		<script src="{{asset('assets/plugins/rating/rating-picker.js')}}"></script>

		<!-- Star Rating-1 Js-->
		<script src="{{asset('assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
		<script src="{{asset('assets/plugins/ratings-2/star-rating.js')}}"></script>

        @endsection
