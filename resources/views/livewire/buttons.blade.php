@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Buttons</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Buttons</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row ">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Default Button</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Use any of the available button classes to quickly create a styled button.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-default">Default</a>
														<a href="javascript:void(0)" class="btn btn-primary">Primary</a>
														<a href="javascript:void(0)" class="btn btn-secondary">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-success">Success</a>
														<a href="javascript:void(0)" class="btn btn-info">Info</a>
														<a href="javascript:void(0)" class="btn btn-warning">Warning</a>
														<a href="javascript:void(0)" class="btn btn-danger">Danger</a>
														<a href="javascript:void(0)" class="btn btn-dark">Dark</a>
														<a href="javascript:void(0)" class="btn btn-light">Light</a>
														<a href="javascript:void(0)" class="btn btn-link">Link</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">light buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Make buttons  the light to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the light attribute, so you must add the <code class="highlighter-rouge">.light</code> class to make it visually appear light.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-default-light">Default</a>
														<a href="javascript:void(0)" class="btn btn-primary-light ">Primary</a>
														<a href="javascript:void(0)" class="btn btn-secondary-light ">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-success-light ">Success</a>
														<a href="javascript:void(0)" class="btn btn-info-light ">Info</a>
														<a href="javascript:void(0)" class="btn btn-warning-light ">Warning</a>
														<a href="javascript:void(0)" class="btn btn-danger-light ">Danger</a>
														<a href="javascript:void(0)" class="btn btn-dark-light ">Dark</a>
														<a href="javascript:void(0)" class="btn btn-light-light ">Light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Disabled buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Make buttons  the disabled to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the disabled attribute, so you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</p>
												<div class="example">
													<div class="btn-list">
														<a href="#" class="btn btn-primary disabled">Primary</a>
														<a href="#" class="btn btn-secondary disabled">Secondary</a>
														<a href="#" class="btn btn-success disabled">Success</a>
														<a href="#" class="btn btn-info disabled">Info</a>
														<a href="#" class="btn btn-warning disabled">Warning</a>
														<a href="#" class="btn btn-danger disabled">Danger</a>
														<a href="#" class="btn btn-dark disabled">Dark</a>
														<a href="#" class="btn btn-light disabled">Light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Color variations</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>The classic button, in different colors.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-blue">Blue</a>
														<a href="javascript:void(0)" class="btn btn-azure">Azure</a>
														<a href="javascript:void(0)" class="btn btn-indigo">Indigo</a>
														<a href="javascript:void(0)" class="btn btn-purple">Purple</a>
														<a href="javascript:void(0)" class="btn btn-pink">Pink</a>
														<a href="javascript:void(0)" class="btn btn-red">Red</a>
														<a href="javascript:void(0)" class="btn btn-orange">Orange</a>
														<a href="javascript:void(0)" class="btn btn-yellow">Yellow</a>
														<a href="javascript:void(0)" class="btn btn-lime">Lime</a>
														<a href="javascript:void(0)" class="btn btn-green">Green</a>
														<a href="javascript:void(0)" class="btn btn-teal">Teal</a>
														<a href="javascript:void(0)" class="btn btn-cyan">Cyan</a>
														<a href="javascript:void(0)" class="btn btn-gray">Gray</a>
														<a href="javascript:void(0)" class="btn btn-gray-dark">Dark gray</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Gradient Buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Here the some of Gradient Buttons</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-primary-gradient">Primary</a>
														<a href="javascript:void(0)" class="btn btn-secondary-gradient">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-success-gradient">Success</a>
														<a href="javascript:void(0)" class="btn btn-info-gradient">Info</a>
														<a href="javascript:void(0)" class="btn btn-warning-gradient">Warning</a>
														<a href="javascript:void(0)" class="btn btn-danger-gradient">Danger</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Border buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>  The default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> </p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-outline-default">Default</a>
														<a href="javascript:void(0)" class="btn btn-outline-primary">Primary</a>
														<a href="javascript:void(0)" class="btn btn-outline-secondary">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-outline-success">Success</a>
														<a href="javascript:void(0)" class="btn btn-outline-info">Info</a>
														<a href="javascript:void(0)" class="btn btn-outline-warning">Warning</a>
														<a href="javascript:void(0)" class="btn btn-outline-danger">Danger</a>
														<a href="javascript:void(0)" class="btn btn-outline-dark">Dark</a>
														<a href="javascript:void(0)" class="btn btn-outline-light">light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Radius buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Add <code class="highlighter-rouge">.btn-radius</code> to button to remove border-radius.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-radius btn-default">Default</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-primary">Primary</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-secondary">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-success">Success</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-info">Info</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-warning">Warning</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-danger">Danger</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-dark">Dark</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-light">Light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Radius light buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Add <code class="highlighter-rouge">.btn-radius</code> to button to remove border-radius.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-radius btn-default-light">Default</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-primary-light ">Primary</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-secondary-light ">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-success-light ">Success</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-info-light ">Info</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-warning-light ">Warning</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-danger-light ">Danger</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-dark-light ">Dark</a>
														<a href="javascript:void(0)" class="btn btn-radius btn-light-light ">Light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button  more rounded.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-pill btn-default">Default</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-primary">Primary</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-secondary">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-success">Success</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-info">Info</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-warning">Warning</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-danger">Danger</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button  more rounded.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-pill btn-default-light">Default</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-primary-light">Primary</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-secondary-light">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-success-light">Success</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-info-light">Info</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-warning-light">Warning</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-danger-light">Danger</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-dark-light">Dark</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-light-light">Light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded Outline Buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Add <code class="highlighter-rouge">.btn-pill*</code> class to outline buttons for rounded outline buttons.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-default">Default</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-primary">Primary</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-secondary">Secondary</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-success">Success</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-info">Info</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-warning">Warning</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-danger">Danger</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-dark">Dark</a>
														<a href="javascript:void(0)" class="btn btn-pill btn-outline-light">light</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Button with icon</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Basic buttons are traditional buttons with borders color opitons.</p>
												<div class="example">
													<div class="btn-list">

														<button type="button" class="btn btn-primary"><i class="fe fe-heart me-2"></i>I like</button>
														<button type="button" class="btn btn-secondary"><i class="fe fe-check me-2"></i>I agree</button>
														<button type="button" class="btn btn-success"><i class="fe fe-plus me-2"></i>More</button>
														<button type="button" class="btn btn-info"><i class="fe fe-link me-2"></i>Link</button>
														<button type="button" class="btn btn-warning"><i class="fe fe-message-circle me-2"></i>Comment</button>
														<button type="button" class="btn btn-danger"><i class="fe fe-trash me-2"></i>Delete</button>
														<button type="button" class="btn btn-dark"><i class="fe fe-upload me-2"></i>Upload</button>
														<button type="button" class="btn btn-light"><i class="fe fe-download me-2"></i>Download</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Button with loading animation</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Basic buttons are traditional buttons with borders color opitons.</p>
												<div class="example">
													<div class="btn-list btn-animation">
														<button type="button" class="btn btn-primary btn-spinners  ms-2"><span class="loading">loading</span></button>
														<button type="button" class="btn btn-secondary btn-spinners  ms-2"><span class="loading">loading</span></button>
														<button type="button" class="btn btn-success btn-spinners  ms-2"><span class="loading">loading</span></button>
														<button type="button" class="btn btn-info btn-loaders  ms-2"><span class="loading">loading</span></button>
														<button type="button" class="btn btn-warning btn-loaders  ms-2"><span class="loading">loading</span></button>
														<button type="button" class="btn btn-danger btn-loaders  ms-2"><span class="loading">loading</span></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-4 CLOSED -->

							<!-- ROW-5 OPEN -->
							<div  class="row">
								<div class="col-xl-12">
									<div class="row row-deck">
										<div class="col-md-12 col-xl-6">
											<div class="card">
												<div class="card-header border-bottom">
													<h3 class="card-title">Button size</h3>
												</div>
												<div class="card-body">
													<div class="text-wrap">
														<p>Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> or <code class="highlighter-rouge">.d-lg</code> for additional sizes.</p>
														<div class="example">
															<div class="btn-list">
																<button type="button" class="btn btn-warning btn-sm">Small button</button>
																<button type="button" class="btn btn-info mx-2">Medium button</button>
																<button type="button" class="btn btn-success btn-lg">Large button</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- COL END -->
										<div class="col-md-12 col-xl-6">
											<div class="card">
												<div class="card-header border-bottom">
													<h3 class="card-title">Button Width</h3>
												</div>
												<div class="card-body">
													<div class="text-wrap">
														<p>Use <code class="highlighter-rouge">.btn-w-xs</code>, <code class="highlighter-rouge">.btn-w-sm</code>, <code class="highlighter-rouge">.d-w-md</code>, <code class="highlighter-rouge">.d-w-lg</code> to get buttons from small to large widths.</p>
														<div class="example">
															<div class="btn-list">
																<button type="button" class="btn btn-primary btn-w-xs">XS</button>
																<button type="button" class="btn btn-secondary btn-w-sm mx-sm-2">SM</button>
																<button type="button" class="btn btn-success btn-w-md">MD</button>
																<button type="button" class="btn btn-warning btn-w-lg ms-sm-2">LG</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!--COL END-->
									</div>
								</div>
								<div class="col-md-12 ">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Button Block</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Use <code class="highlighter-rouge">.btn-block</code> for block size button.</p>
												<div class="example">
													<div class="btn-list">
														<div class="row">
															<div class="col-md-12 mb-2">
																<button type="button" class="btn btn-primary btn-sm btn-block mb-1">Block Level button</button>
															</div>
															<div class="col-md-12 mb-2">
																<button type="button" class="btn btn-secondary btn-md btn-block mb-1">Block Level button</button>
															</div>
															<div class="col-md-12 mb-2">
																<button type="button" class="btn btn-success btn-lg btn-block mb-1">Block Level button</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="row row-deck">
										<div class="col-md-12 col-xl-6">
											<div class="card">
												<div class="card-header border-bottom">
													<h3 class="card-title">Checkbox Button Group</h3>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="example">
															<div class="btn-group checkbox-group checkboxbtns" role="group" aria-label="Basic ">
																<input type="checkbox" class="btn-check" id="btncheck1">
																<label class="btn btn-outline-primary mb-0" for="btncheck1">Checkbox 1</label>

																<input type="checkbox" class="btn-check" id="btncheck2">
																<label class="btn btn-outline-primary mb-0" for="btncheck2">Checkbox 2</label>

																<input type="checkbox" class="btn-check" id="btncheck3">
																<label class="btn btn-outline-primary mb-0" for="btncheck3">Checkbox 3</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-xl-6">
											<div class="card">
												<div class="card-header border-bottom">
													<h3 class="card-title">Radio Button Group</h3>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="example">
															<div class="btn-group radiobtns" role="group" aria-label="Basic radio toggle button group">
																<input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
																<label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

																<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
																<label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

																<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
																<label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-lg-12 col-xl-12">
											<div class="card">
												<div class="card-header">
													<h3 class="card-title">Buttons Group</h3>
												</div>
												<div class="card-body">
													<div class="example">
														<div class="row row-sm">
															<div class="col-lg-4">
																<div aria-label="Basic example" class="btn-group my-1" role="group">
																	<button class="btn btn-secondary pd-x-25 active" type="button">Left</button>
																	<button class="btn btn-secondary pd-x-25" type="button">Center</button>
																	<button class="btn btn-secondary pd-x-25" type="button">Right</button>
																</div>
															</div><!-- col-4 -->
															<div class="col-lg-4">
																<div aria-label="Basic example" class="btn-group my-1" role="group">
																	<button class="btn btn-primary btn-icon active" type="button">
																		<i class="typcn typcn-media-play-outline"></i>
																	</button>
																	<button class="btn btn-primary btn-icon" type="button">
																		<i class="typcn typcn-media-pause-outline"></i>
																	</button>
																	<button class="btn btn-primary btn-icon" type="button">
																		<i class="typcn typcn-media-stop-outline"></i>
																	</button>
																</div>
															</div><!-- col-4 -->
															<div class="col-lg-4">
																<div aria-label="Basic example" class="btn-group my-1" role="group">
																	<button class="btn btn-secondary btn-icon active" type="button">
																		<i class="typcn typcn-media-play-outline"></i>
																	</button>
																	<button class="btn btn-secondary btn-icon" type="button">
																		<i class="typcn typcn-media-pause-outline"></i>
																	</button>
																	<button class="btn btn-secondary btn-icon" type="button">
																		<i class="typcn typcn-media-stop-outline"></i>
																	</button>
																</div>
															</div><!-- col-4 -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-5 CLOSED -->

							<!-- ROW-6 OPEN -->
							<div  class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Social buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>You can use only icons.</p>
												<div class="example">
													<div class="btn-list">
														<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
														<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
														<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
														<button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
														<button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
														<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
														<button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
														<button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
														<button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Icon buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Icon only button. Add <code class="highlighter-rouge">.btn-icon</code> class to remove unnecessary  button.</p>
												<div class="example">
													<div class="btn-list">
														<button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button>
														<button type="button" class="btn btn-icon  btn-github"><i class="fe fe-github"></i></button>
														<button type="button" class="btn btn-icon  btn-success"><i class="fe fe-bell"></i></button>
														<button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-star"></i></button>
														<button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>
														<button type="button" class="btn btn-icon  btn-purple"><i class="fe fe-mail"></i></button>
														<button type="button" class="btn btn-icon  btn-secondary"><i class="fe fe-git-merge"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-6 CLOSED -->

							<!-- ROW-7 OPEN -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Loading button</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-xl-6">
													<div class="text-wrap">
														<p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading state on a button. The width of the button depends on the length of the text inside Since the loading spinner is implemented using the element.</p>
														<div class="example">
															<div class="btn-list">
																<button type="button" class="btn btn-primary btn-loading btn-icon"><i class="fe fe-check"></i></button>
																<button type="button" class="btn btn-secondary btn-loading btn-sm">Button text</button><br>
																<button type="button" class="btn btn-success btn-loading btn-lg">Button text</button>
																<button type="button" class="btn btn-warning btn-loading d-grid">Button text</button>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-xl-6">
													<div class="text-wrap">
														<p>Add <code class="highlighter-rouge">.btn-spinning</code> to use a loading state on a button. The width of the button depends on the length of the text inside Since the loading spinner is implemented using the element.</p>
														<div class="example">
															<div class="btn-list">
																<button type="button" class="btn btn-info btn-spinning btn-icon"><i class="fe fe-check"></i></button>
																<button type="button" class="btn btn-dark btn-spinning btn-sm">Button text</button><br>
																<button type="button" class="btn btn-secondary btn-spinning btn-lg">Button text</button>
																<button type="button" class="btn btn-primary btn-spinning d-grid">Button text</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Button dropdown</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Wrap the dropdown’s toggle using different colors and icons implemented in different dropdowns  styles (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>
												<div class="example">
													<div class="btn-list">
														<div class="dropdown btn-group">
															<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
																<i class="fe fe-calendar"></i>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
																<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															</div>
														</div>
														<div class="dropdown btn-group">
															<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
																<i class="fe fe-calendar me-2"></i>Show calendar
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
																<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															</div>
														</div>
														<div class="dropdown btn-group">
															<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
																Show calendar
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
																<a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-7 CLOSED -->

							<!-- ROW-8 OPEN -->
							<div class="row">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">List of buttons</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>You can now create a list of buttons with the <code class="highlighter-rouge">.btn-list</code> container.</p>
												<div class="example">
													<div class="btn-list">
														<a href="javascript:void(0)" class="btn btn-primary">Save changes</a>
														<a href="javascript:void(0)" class="btn btn-secondary">Save and continue</a>
														<a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
													</div>
												</div>
											</div>
											<div class="text-wrap mt-6">
												<p>Use the <code class="highlighter-rouge">.text-center</code>  modifiers to alter the alignment.</p>
												<div class="example">
													<div class="btn-list text-center">
														<a href="javascript:void(0)" class="btn btn-primary">Save changes</a>
														<a href="javascript:void(0)" class="btn btn-secondary">Save and continue</a>
														<a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
													</div>
												</div>
											</div>
											<div class="text-wrap mt-6">
												<p>Use the  <code class="highlighter-rouge">.text-end</code> modifiers to alter the alignment.</p>
												<div class="example">
													<div class="btn-list text-end">
														<a href="javascript:void(0)" class="btn btn-primary">Save changes</a>
														<a href="javascript:void(0)" class="btn btn-secondary">Save and continue</a>
														<a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-8 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
