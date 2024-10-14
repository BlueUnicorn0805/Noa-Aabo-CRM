@extends('layouts.switcher')

        @section('styles')

        <!-- INTERNAL Switcher css -->
        <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet">
        <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet">

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Switcher</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
										<li class="breadcrumb-item active" aria-current="page">Switcher</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							 <!--Row-->
                             <div class="container">
                                <div class="row row-sm">
                                    <div class="col-xl-5 m-auto">
                                        <div class="card sidebar-right1"><div class="switcher-wrapper">
											<div class="card-body p-0">
												<div class="form_holder sidebar-right1 p-5">
													<div class="row">
														<div class="predefined_styles">
															<div class="swichermainleft mb-5">
																<h6>Navigation Style</h6>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">Vertical Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch15"
																					id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
																				<label for="myonoffswitch34" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Horizontal Click Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch15"
																					id="myonoffswitch35" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch35" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Horizontal Hover Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch15"
																					id="myonoffswitch111" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch111" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5">
																<h5>LTR and RTL VERSIONS</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">LTR Version</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch7"
																					id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
																				<label for="myonoffswitch23" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">RTL Version</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch7"
																					id="myonoffswitch24" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch24" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5">
																<h5>Light Theme Style</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">Light Theme</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch1"
																					id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
																				<label for="myonoffswitch1" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">Light Primary</span>
																			<div class="">
																				<input class="wpx-30 h-30 input-color-picker color-primary-light"
																					value="#8FBD56" id="colorID" type="color"
																					data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
																					data-id7="transparentcolor" name="lightPrimary">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5">
																<h5>Dark Theme Style</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Dark Theme</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch1"
																					id="myonoffswitch2" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch2" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Dark Primary</span>
																			<div class="">
																				<input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
																					value="#8FBD56" id="darkPrimaryColorID"
																					type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
																					data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
																			</div>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Dark Custom Background</span>
																			<div class="">
																				<input class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent"
																					value="#8FBD56" id="transparentBgColorID"
																					type="color" data-id5="body" data-id6="boxed-theme" name="transparentBackground">
																			</div>
																		</div>
																		<div class="switch-toggle">
																			<span class="">Background Image</span>
																			<div class="mt-1">
																				<a class="bg-img bg-img1" href="javascript:void(0);" ><img
																						class="br-5" src="{{asset('assets/images/media/bg-img1.jpg')}}" alt="Bg-Image" id="bgimage1"></a>
																				<a class="bg-img bg-img2" href="javascript:void(0);" ><img
																						class="br-5" src="{{asset('assets/images/media/bg-img2.jpg')}}" alt="Bg-Image" id="bgimage2"></a>
																				<a class="bg-img bg-img3" href="javascript:void(0);" ><img
																						class="br-5" src="{{asset('assets/images/media/bg-img3.jpg')}}" alt="Bg-Image" id="bgimage3"></a>
																				<a class="bg-img bg-img4" href="javascript:void(0);" ><img
																						class="br-5" src="{{asset('assets/images/media/bg-img4.jpg')}}" alt="Bg-Image" id="bgimage4"></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5 menu-styles">
																<h5>Menu Styles</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle lightMenu d-flex">
																			<span class="me-auto">Light Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
																					id="myonoffswitch3" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch3" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle colorMenu d-flex mt-2">
																			<span class="me-auto">Color Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
																					id="myonoffswitch4" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch4" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle darkMenu d-flex mt-2">
																			<span class="me-auto">Dark Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
																					id="myonoffswitch5" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch5" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle gradientMenu d-flex mt-2">
																			<span class="me-auto">Gradient Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch2"
																					id="myonoffswitch19" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch19" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5 header-styles">
																<h5>Header Styles</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle lightHeader d-flex">
																			<span class="me-auto">Light Header</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
																					id="myonoffswitch6" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch6" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle  colorHeader d-flex mt-2">
																			<span class="me-auto">Color Header</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
																					id="myonoffswitch7" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch7" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle darkHeader d-flex mt-2">
																			<span class="me-auto">Dark Header</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
																					id="myonoffswitch8" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch8" class="onoffswitch2-label"></label>
																			</p>
																		</div>

																		<div class="switch-toggle darkHeader d-flex mt-2">
																			<span class="me-auto">Gradient Header</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch3"
																					id="myonoffswitch20" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch20" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5">
																<h5>Layout Width Styles</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">Full Width</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch4"
																					id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
																				<label for="myonoffswitch9" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Boxed</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch4"
																					id="myonoffswitch10" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch10" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5">
																<h5>Layout Positions</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">Fixed</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch5"
																					id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
																				<label for="myonoffswitch11" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Scrollable</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch5"
																					id="myonoffswitch12" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch12" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5 leftmenu-styles">
																<h5>Sidemenu layout Styles</h5>
																<div class="skin-body">
																	<div class="switch_section ps-2">
																		<div class="switch-toggle d-flex">
																			<span class="me-auto">Default Menu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
																					id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
																				<label for="myonoffswitch13" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Icon with Text</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
																					id="myonoffswitch14" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch14" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Icon Overlay</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
																					id="myonoffswitch15" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch15" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Closed Sidemenu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
																					id="myonoffswitch16" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch16" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Hover Submenu</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
																					id="myonoffswitch17" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch17" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																		<div class="switch-toggle d-flex mt-2">
																			<span class="me-auto">Hover Submenu Style 1</span>
																			<p class="onoffswitch2"><input type="radio" name="onoffswitch6"
																					id="myonoffswitch18" class="onoffswitch2-checkbox">
																				<label for="myonoffswitch18" class="onoffswitch2-label"></label>
																			</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="swichermainleft mb-5">
																<div class="skin-body">
																	<div class="switch_section my-4">
																		<button class="btn btn-danger btn-block" id="resetAll" type="button">Reset All
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Row-->

                            @endsection

        @section('scripts')

        <!-- SWITCHER JS -->
        <script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('assets/js/custom1.js')}}"></script>

        @endsection
