@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Cart</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">Apps</li>
										<li class="breadcrumb-item"><a href="javascript:void(0);">E-commerce</a></li>
										<li class="breadcrumb-item active" aria-current="page">Cart</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-xl-8 col-md-12">
									<div class="card cart">
										<div class="card-header border-bottom">
											<h3 class="card-title">Shopping Cart</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered table-vcenter text-nowrap mb-0">
													<thead>
														<tr class="border-top">
															<th class="text-center">S.No.</th>
															<th class="w-10">Preview</th>
															<th>Title</th>
															<th>Price</th>
															<th class="w-15">Quantity</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="text-center">1</td>
															<td>
																<img src="{{asset('assets/images/pngs/1.png')}}" alt="" class="cart-img">
															</td>
															<td>Digital Camera Pro 30.2MP With Lens</td>
															<td>$3,950</td>
															<td>
																<input type="number"  name="quantity" class="form-control text-center" value="1" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td class="text-center">2</td>
															<td>
																<img src="{{asset('assets/images/pngs/4.png')}}" alt="" class="cart-img">
															</td>
															<td>Attractive Multi Color Flower Pot - Combo Of 3</td>
															<td>$105</td>
															<td >
																<input type="number"  name="quantity" class="form-control text-center" value="3" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td class="text-center">3</td>
															<td>
																<img src="{{asset('assets/images/pngs/2.png')}}" alt="" class="cart-img">
															</td>
															<td>Wireless Bluetooth Game Controller Joystick</td>
															<td>$945</td>
															<td >
																<input type="number"  name="quantity" class="form-control text-center" value="3" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td class="text-center">4</td>
															<td>
																<img src="{{asset('assets/images/pngs/5.png')}}" alt="" class="cart-img">
															</td>
															<td>Long Arm Rechargeable Study Desk Lamp</td>
															<td>$105</td>
															<td >
																<input type="number"  name="quantity" class="form-control text-center" value="2" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td class="text-center">5</td>
															<td>
																<img src="{{asset('assets/images/pngs/6.png')}}" alt="" class="cart-img">
															</td>
															<td>Wood Photo Frame(M) With Wall Decorators</td>
															<td>$106</td>
															<td >
																<input type="number"  name="quantity" class="form-control text-center" value="5" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr>
															<td class="text-center">6</td>
															<td>
																<img src="{{asset('assets/images/pngs/9.png')}}" alt="" class="cart-img">
															</td>
															<td>Rounded Shape Digital Watch For Men</td>
															<td>$230</td>
															<td >
																<input type="number"  name="quantity" class="form-control text-center" value="1" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
														<tr class="border-bottom">
															<td class="text-center">7</td>
															<td>
																<img src="{{asset('assets/images/pngs/8.png')}}" alt="" class="cart-img">
															</td>
															<td>Analog Wall Clock - 30cm × 30cm</td>
															<td>$110</td>
															<td >
																<input type="number"  name="quantity" class="form-control text-center" value="1" >
															</td>
															<td>
																<a href="javascript:void(0)" class="btn btn-square btn-danger-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for Wishlist"><i class="icon icon-heart  fs-13"></i></a>
																<a href="javascript:void(0)" class="btn btn-square btn-info-light me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="icon icon-trash  fs-13"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Have coupon?</h3>
										</div>
										<div class="card-body">
											<form>
												<div class="form-group">
													<div class="input-group"> <input type="text" id="myInput" class="form-control coupon" placeholder="Coupon code"> <span class="input-group-btn"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
												</div>
											</form>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Price Details</h3>
										</div>
										<div class="card-body">
											<table class="table border-top-0">
												<tr>
													<td class="border-top-0">Sub Total</td>
													<td class="text-end border-top-0">$4,360</td>
												</tr>
												<tr>
													<td class="border-top-0">Discount</td>
													<td class="text-end border-top-0">5%</td>
												</tr>
												<tr>
													<td class="border-top-0">Shipping</td>
													<td class="text-end border-top-0">Free</td>
												</tr>
												<tr>
													<td class="fs-20 border-top-0">Total</td>
													<td class="text-end fs-20 border-top-0">$3,976</td>
												</tr>
											</table>
										</div>
										<div class="card-footer">
											<div class="step-footer text-end">
												<a href="{{url('products')}}" class="btn btn-primary my-1">
													<svg xmlns="http://www.w3.org/2000/svg" class=" w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.5,11.5H7.7069702l4.6465454-4.6464844c0.1972046-0.1932373,0.2003784-0.5097656,0.0071411-0.7069702c-0.1932983-0.1972046-0.5098267-0.2004395-0.7070312-0.0071411c-0.0023804,0.0023193-0.0047607,0.0046997-0.0071411,0.0071411l-5.5,5.5c-0.1953125,0.1950684-0.1956177,0.5113525-0.0005493,0.706665c0.0001221,0.0001831,0.0002441,0.0003052,0.0005493,0.0003052l5.5,5.5c0.1972046,0.1932373,0.5137329,0.1900635,0.7069702-0.0071411c0.1905518-0.194397,0.1905518-0.5054932,0-0.6998901L7.7069702,12.5H17.5c0.276123,0,0.5-0.223877,0.5-0.5S17.776123,11.5,17.5,11.5z"/></svg>
													Continue Shopping
												</a>
												<a href="{{url('checkout')}}" class="btn btn-info my-1">
													Check out
													<svg xmlns="http://www.w3.org/2000/svg" class=" w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.8536377,11.6466064c-0.000061-0.000061-0.0001221-0.000061-0.0001221-0.0001221l-5.5-5.5c-0.1986084-0.1918335-0.5151367-0.1863403-0.7069702,0.0122681c-0.1871338,0.1937866-0.1871338,0.5009766,0,0.6947021L16.2930298,11.5H6.5C6.223877,11.5,6,11.723877,6,12s0.223877,0.5,0.5,0.5h9.7930298l-4.6465454,4.6464844c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702c0.1918335,0.1986694,0.5084229,0.2041626,0.7070312,0.0123291c0.0041504-0.0040283,0.0082397-0.0081177,0.0122681-0.0123291l5.5-5.5C18.0487671,12.1583252,18.0487671,11.8418579,17.8536377,11.6466064z"/></svg>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

		<!-- PRODUCT JS-->
		<script src="{{asset('assets/js/products.js')}}"></script>

        @endsection

