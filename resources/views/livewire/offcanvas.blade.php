@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Offcanvas</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Offcanvas</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Offcanvas Demo</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the .show class on an element with the .offcanvas class.</p>
												<div class="example">
													<div class="btn-list">
														<a aria-controls="offcanvas-1" class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvas-1" role="button">Link with href</a>
														<button aria-controls="offcanvas-1" class="btn btn-info" data-bs-target="#offcanvas-1" data-bs-toggle="offcanvas" type="button">Button with data-bs-target</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Offcanvas Placements</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Use <code class="highlighter-rouge">.offcanvas-start</code> <code class="highlighter-rouge">.offcanvas-top</code> <code class="highlighter-rouge">.offcanvas-end</code> <code class="highlighter-rouge">.offcanvas-bottom</code> these modified classes to change Offcanvas Placement respectively.</p>
												<div class="example">
													<div class="btn-list">
														<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart" aria-controls="offcanvasStart">Toggle Left Offcanvas</button>
														<button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle Top Offcanvas</button>
														<button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasEnd">Toggle Right Offcanvas</button>
														<button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle Bottom Offcanvas</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Offcanvas Scrolling Options</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Scrolling the <code class="highlighter-rouge">&lt;body&gt;</code> element is disabled when an offcanvas and its backdrop are visible. Use the <code class="highlighter-rouge">data-bs-scroll</code> attribute to toggle scrolling and <code class="highlighter-rouge">data-bs-backdrop</code> to toggle the backdrop.</p>
												<div class="example">
													<div class="btn-list">
														<button aria-controls="offcanvasScrolling" class="btn btn-gray" data-bs-target="#offcanvasScrolling" data-bs-toggle="offcanvas" type="button">Enable body scrolling</button>
														<button aria-controls="offcanvasWithBackdrop" class="btn btn-primary" data-bs-target="#offcanvasWithBackdrop" data-bs-toggle="offcanvas" type="button">Enable backdrop (default)</button>
														<button aria-controls="offcanvasWithBothOptions" class="btn btn-gray-dark" data-bs-target="#offcanvasWithBothOptions" data-bs-toggle="offcanvas" type="button">scrolling & backdrop</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

		<!-- OFFCANVAS DEMO -->
		<div aria-labelledby="offcanvas-1Label" class="offcanvas offcanvas-start" id="offcanvas-1" tabindex="-1">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvas-1Label">Offcanvas</h5>
				<button aria-label="Close" class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				<div>
					<p class="text-muted">Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</p>
				</div>
				<div class="dropdown mt-3">
					<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
						Dropdown<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- OFFCANVAS PLACEMENT-LEFT -->
		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasStartLabel">Offcanvas Left</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				...
			</div>
		</div>

		<!-- OFFCANVAS PLACEMENT-TOP -->
		<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasTopLabel">Offcanvas Top</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				...
			</div>
		</div>

		<!-- OFFCANVAS PLACEMENT-RIGHT -->
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasEndLabel">Offcanvas Right</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				...
			</div>
		</div>

		<!-- OFFCANVAS PLACEMENT-BOTTOM -->
		<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasBottomLabel">Offcanvas Bottom</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				...
			</div>
		</div>

		<!-- OFFCANVAS BODY SCROLL -->
		<div aria-labelledby="offcanvasScrollingLabel" class="offcanvas offcanvas-start" data-bs-backdrop="false" data-bs-scroll="true" id="offcanvasScrolling" tabindex="-1">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5><button aria-label="Close" class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				<p class="text-muted">Try scrolling the rest of the page to see this option in action.</p>
			</div>
		</div>

		<!-- OFFCANVAS BACKDROP SCROLL -->
		<div aria-labelledby="offcanvasWithBackdropLabel" class="offcanvas offcanvas-start" id="offcanvasWithBackdrop" tabindex="-1">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5><button aria-label="Close" class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				<p>.....</p>
			</div>
		</div>

		<!-- OFFCANVAS BOTH SCROLL -->
		<div aria-labelledby="offcanvasWithBothOptionsLabel" class="offcanvas offcanvas-start" data-bs-scroll="true" id="offcanvasWithBothOptions" tabindex="-1">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5><button aria-label="Close" class="btn-close text-reset" data-bs-dismiss="offcanvas" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="offcanvas-body">
				<p class="text-muted">Try scrolling the rest of the page to see this option in action.</p>
			</div>
		</div>

        @endsection

        @section('scripts')

        @endsection
