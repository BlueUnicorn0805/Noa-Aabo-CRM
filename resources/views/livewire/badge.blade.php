@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Badges</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Badges</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge bg-*</code> to create default badges.</p>
											<div class="example">
												<span class="badge bg-default my-1">Default</span>
												<span class="badge bg-primary my-1">Primary</span>
												<span class="badge bg-secondary my-1">Secondary</span>
												<span class="badge bg-success my-1">Success</span>
												<span class="badge bg-info my-1">Info</span>
												<span class="badge bg-warning my-1">Warning</span>
												<span class="badge bg-danger my-1">Danger</span>
												<span class="badge bg-light my-1">Light</span>
												<span class="badge bg-dark my-1">Dark</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Gradient Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge bg-*-gradient</code> to create gradient color badges.</p>
											<div class="example">
												<span class="badge bg-default my-1">Default</span>
												<span class="badge bg-primary-gradient my-1">Primary</span>
												<span class="badge bg-secondary-gradient my-1">Secondary</span>
												<span class="badge bg-success-gradient my-1">Success</span>
												<span class="badge bg-info-gradient my-1">Info</span>
												<span class="badge bg-warning-gradient my-1">Warning</span>
												<span class="badge bg-danger-gradient my-1">Danger</span>
												<span class="badge bg-light-gradient my-1">Light</span>
												<span class="badge bg-dark-gradient my-1">Dark</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Pill Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge rounded-pill bg-*</code> to create rounded pill badges.</p>
											<div class="example">
												<span class="badge rounded-pill bg-default my-1">Default</span>
												<span class="badge rounded-pill bg-primary my-1">Primary</span>
												<span class="badge rounded-pill bg-secondary my-1">Secondary</span>
												<span class="badge rounded-pill bg-success my-1">Success</span>
												<span class="badge rounded-pill bg-info my-1">Info</span>
												<span class="badge rounded-pill bg-warning my-1">Warning</span>
												<span class="badge rounded-pill bg-danger my-1">Danger</span>
												<span class="badge rounded-pill bg-light my-1">Light</span>
												<span class="badge rounded-pill bg-dark my-1">Dark</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Gradient Pill Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge rounded-pill bg-*-gradient</code> to create gradient color pill badges.</p>
											<div class="example">
												<span class="badge rounded-pill bg-default my-1">Default</span>
												<span class="badge rounded-pill bg-primary-gradient my-1">Primary</span>
												<span class="badge rounded-pill bg-secondary-gradient my-1">Secondary</span>
												<span class="badge rounded-pill bg-success-gradient my-1">Success</span>
												<span class="badge rounded-pill bg-info-gradient my-1">Info</span>
												<span class="badge rounded-pill bg-warning-gradient my-1">Warning</span>
												<span class="badge rounded-pill bg-danger-gradient my-1">Danger</span>
												<span class="badge rounded-pill bg-light-gradient my-1">Light</span>
												<span class="badge rounded-pill bg-dark-gradient my-1">Dark</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Buttons with square Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge bg-*</code> inside <code class="highlighter-rouge">btn btn-*</code> to create buttons with square badges.</p>
											<div class="example">
												<button type="button" class="btn btn-primary my-1">
													<span>Notifications</span>
													<span class="badge bg-white">2</span>
												</button>
												<button type="button" class="btn btn-secondary my-1">
													<span>Notifications</span>
													<span class="badge bg-white">1</span>
												</button>
												<button type="button" class="btn btn-success my-1">
													<span>Notifications</span>
													<span class="badge bg-white">5</span>
												</button>
												<button type="button" class="btn btn-info my-1">
													<span>Notifications</span>
													<span class="badge bg-white">3</span>
												</button>
												<button type="button" class="btn btn-warning my-1">
													<span>Notifications</span>
													<span class="badge bg-white">6</span>
												</button>
												<button type="button" class="btn btn-danger my-1">
													<span>Notifications</span>
													<span class="badge bg-white">4</span>
												</button>
												<button type="button" class="btn btn-light my-1">
													<span>Notifications</span>
													<span class="badge bg-white">3</span>
												</button>
												<button type="button" class="btn btn-dark my-1">
													<span>Notifications</span>
													<span class="badge bg-white">3</span>
												</button>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW CLOSED -->

							<!-- ROW OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Outline buttons with square Badges</h3>
										</div>
										<div class="card-body ">
											<p class="text-muted">Use <code class="highlighter-rouge">badge bg-*</code> inside <code class="highlighter-rouge">btn btn-outline-*</code> to create outline buttons with square badges.</p>
											<div class="example">
												<button type="button" class="btn btn-outline-primary my-1">
													<span>Notifications</span>
													<span class="badge  bg-primary">2</span>
												</button>
												<button type="button" class="btn btn-outline-secondary my-1">
													<span>Notifications</span>
													<span class="badge  bg-secondary">1</span>
												</button>
												<button type="button" class="btn btn-outline-success my-1">
													<span>Notifications</span>
													<span class="badge bg-success">65</span>
												</button>
												<button type="button" class="btn btn-outline-info my-1">
													<span>Notifications</span>
													<span class="badge bg-info">5333</span>
												</button>
												<button type="button" class="btn btn-outline-warning my-1">
													<span>Notifications</span>
													<span class="badge bg-warning">25</span>
												</button>
												<button type="button" class="btn btn-outline-danger my-1">
													<span>Notifications</span>
													<span class="badge  bg-danger">3</span>
												</button>
												<button type="button" class="btn btn-outline-light my-1">
													<span>Notifications</span>
													<span class="badge bg-light">21</span>
												</button>
												<button type="button" class="btn btn-outline-dark my-1">
													<span>Notifications</span>
													<span class="badge bg-dark">36</span>
												</button>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW CLOSED -->

							<!-- ROW OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Buttons with rounded Badges</h3>
										</div>
										<div class="card-body ">
											<p class="text-muted">Use <code class="highlighter-rouge">badge rounded-pill bg-*</code> inside <code class="highlighter-rouge">btn btn-*</code> to create outline buttons with rounded badges.</p>
											<div class="example">
												<button type="button" class="btn btn-primary my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">22</span>
												</button>
												<button type="button" class="btn btn-secondary my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">145</span>
												</button>
												<button type="button" class="btn btn-success my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">3225</span>
												</button>
												<button type="button" class="btn btn-info my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">3</span>
												</button>
												<button type="button" class="btn btn-warning my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">3225</span>
												</button>
												<button type="button" class="btn btn-light my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">3225</span>
												</button>
												<button type="button" class="btn btn-dark my-1">
													<span>Notifications</span>
													<span class="badge rounded-pill bg-white">3225</span>
												</button>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROw CLOSED -->

							<!-- ROW OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Border buttons with rounded Badges</h3>
										</div>
										<div class="card-body ">
											<div class="example">
												<button type="button" class="btn btn-outline-primary mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-primary rounded-pill">2</span>
												</button>
												<button type="button" class="btn btn-outline-success mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-success rounded-pill">65</span>
												</button>
												<button type="button" class="btn btn-outline-secondary   mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge  bg-secondary rounded-pill">43</span>
												</button>
												<button type="button" class="btn btn-outline-info  mt-1 mb-1 me-3">
													<span>Notifications</span>
													<span class="badge bg-info rounded-pill">563</span>
												</button>

											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Simple Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<h1>Heading 01 <span class="badge bg-default">New</span></h1>
												<h2>Heading 02 <span class="badge bg-default">New</span></h2>
												<h3>Heading 03 <span class="badge bg-default">New</span></h3>
												<h4>Heading 04 <span class="badge bg-default">New</span></h4>
												<h5>Heading 05 <span class="badge bg-default">New</span></h5>
												<h6>Heading 06 <span class="badge bg-default">New</span></h6>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Colored Badges</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<h1 class="text-primary">Heading 01 <span class="badge bg-primary">New</span></h1>
												<h2  class="text-red">Heading 02 <span class="badge bg-danger">New</span></h2>
												<h3  class="text-yellow">Heading 03 <span class="badge bg-warning">New</span></h3>
												<h4  class="text-green">Heading 04 <span class="badge bg-success">New</span></h4>
												<h5  class="text-info">Heading 05 <span class="badge bg-info">New</span></h5>
												<h6  class="text-secondary">Heading 06 <span class="badge bg-secondary">New</span></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Extra-Small Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge badge-xs</code> to create Extra-Small badges.</p>
											<div class="example">
												<span class="badge badge-xs bg-default">Default</span>
												<span class="badge badge-xs bg-primary">Primary</span>
												<span class="badge badge-xs bg-secondary">Secondary</span>
												<span class="badge badge-xs bg-success">Success</span>
												<span class="badge badge-xs bg-info">Info</span>
												<span class="badge badge-xs bg-warning">Warning</span>
												<span class="badge badge-xs bg-danger">Danger</span>
												<span class="badge badge-xs bg-light">Light</span>
												<span class="badge badge-xs bg-dark">Dark</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-md-12 col-lg-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Small Badges</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Use <code class="highlighter-rouge">badge badge-sm</code> to create Extra-Small badges.</p>
											<div class="example">
												<span class="badge badge-sm bg-default">Default</span>
												<span class="badge badge-sm bg-primary">Primary</span>
												<span class="badge badge-sm bg-secondary">Secondary</span>
												<span class="badge badge-sm bg-success">Success</span>
												<span class="badge badge-sm bg-info">Info</span>
												<span class="badge badge-sm bg-warning">Warning</span>
												<span class="badge badge-sm bg-danger">Danger</span>
												<span class="badge badge-sm bg-light">Light</span>
												<span class="badge badge-sm bg-dark">Dark</span>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-4 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
