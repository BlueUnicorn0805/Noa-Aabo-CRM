@extends('layouts.app')

            @section('content')

			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="{{url('index')}}" class="text-center">
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="">
						</a>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" action="{{ route('users.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

									<span class="login100-form-title">
                                        Edit User
									</span>
									<div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" value="{{ $user->address }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="city" value="{{ $user->city }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" name="state" value="{{ $user->state }}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" name="zip_code" value="{{ $user->zip_code }}" class="form-control">
                                    </div>

                                    <div style="display: grid; place-items: center;">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
								</form>
							</div>
							
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->



        @endsection
