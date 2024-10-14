<!doctype html>
<html lang="en" dir="ltr"> <!-- This "landing-app.blade.php" master page is used only for "landing" page content present in "views/livewire" -->
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

        @include('layouts.components.landing.styles')

	</head>

	<body class="ltr app horizontal landing-page">

		<a href="javascript:void(0);" class="buy-now">Buy Now</a>

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

                @include('layouts.components.landing.app-header')

				<!--APP-SIDEBAR-->
				<div class="landing-top-header overflow-hidden">
					<div class="top sticky overflow-hidden">

                        @include('layouts.components.landing.app-sidebar')

					</div>

                    @include('layouts.components.landing.header-main')

				</div>
				<!--/APP-SIDEBAR-->

                <!--app-content open-->
				<div class="hor-content main-content mt-0">
					<div class="side-app">
						<!-- CONTAINER -->
						<div class="main-container">

							@yield('content')

						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>

            @include('layouts.components.landing.footer')

		</div>

        @include('layouts.components.landing.scripts')

	</body>
</html>
