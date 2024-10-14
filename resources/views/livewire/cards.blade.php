@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Cards</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Cards</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row row-deck">
								<div class="col-xl-4 col-md-12">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<a href="#" class="card-link">Card link</a>
											<a href="#" class="card-link">Another link</a>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-xl-4 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">Card-Header</div>
										</div>
										<div class="card-body">
											<p>With supporting text below as a natural lead-in to additional content.</p>
											<a href="#" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-xl-4 col-md-12">
									<div class="card">
										<div class="card-body">
											<p>With supporting text below as a natural lead-in to additional content.</p>
											<a href="#" class="btn btn-primary">Go somewhere</a>
										</div>
										<div class="card-footer">
											<div class="card-title">Card-footer</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-primary">
										<div class="card-body">
											<h4 class="card-title">Primary card title</h4>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-secondary">
										<div class="card-body">
											<h4 class="card-title">Secondary card title</h4>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-success">
										<div class="card-body">
											<h4 class="card-title">Success card title</h4>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-danger">
										<div class="card-body">
											<h4 class="card-title">Danger card title</h4>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-info">
										<div class="card-body">
											<h4 class="card-title">Info card title</h4>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-4">
									<div class="card text-white bg-warning">
										<div class="card-body">
											<h4 class="card-title">Warning card title</h4>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row row-deck">
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
										Lorem aliquyam consetetur ea sed sit eirmod. Lorem et sadipscing ipsum erat sit. Et et est eos et dolore est,.Labore labore duo labore at est ipsum sed labore dolores. Erat diam eirmod sadipscing ea tempor erat diam. Dolor dolores.
										</div>
										<div class="card-footer">
											This is Basic card footer
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header bg-primary br-tr-3 br-tl-3">
											<h3 class="card-title text-white">Basic color card-header</h3>
											<div class="card-options ">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
											</div>
										</div>
										<div class="card-body">
											No elitr justo diam dolor lorem amet. Accusam sadipscing nonumy rebum amet nonumy. Labore kasd sadipscing et dolor lorem aliquyam sadipscing amet. Erat et eirmod ipsum ea ipsum eos invidunt est ipsum. Dolor gubergren dolor.
										</div>
										<div class="card-footer">
											This is Basic card footer
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic color card-footer</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											Sit labore ea ipsum duo et lorem lorem tempor ut, kasd dolor diam amet lorem. Ut sanctus sed erat et gubergren labore magna ut. Est invidunt amet diam kasd magna sed et..
										</div>
										<div class="card-footer bg-danger br-br-3 br-bl-3">
											<div class="text-white">Basic card footer</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-3 CLOSED -->

							<!-- ROW-4 OPEN -->
							<div class="row">
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Panel with custom buttons</h3>
											<div class="card-options">
												<a href="#" class="btn btn-primary btn-sm">Action 1</a>
												<a href="#" class="btn btn-secondary btn-sm ms-2">Action 2</a>
											</div>
										</div>
										<div class="card-body">
											No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
											Sed amet ut accusam dolor sit, diam rebum sanctus est et est amet, et tempor et duo est accusam. Justo.
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with search form</h3>
											<div class="card-options w-40">
												<form class="w-100">
													<div class="input-group mb-3">
														<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
														<button class="btn btn-primary" type="button" id="button-addon2">Button</button>
													</div>
												</form>
											</div>
										</div>
										<div class="card-body">
											No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful actual teachings of the great explorer
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with alert</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-alert alert  alert-success mb-0">
											Adding action was successful
										</div>
										<div class="card-body">
											Voluptua nonumy erat et ipsum elitr dolor erat invidunt dolor sed. Tempor dolor et vero sed gubergren ut ut. Et ipsum magna kasd eos dolore est lorem amet justo. Diam ut lorem amet diam.
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with alert</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-alert alert alert-danger mb-0">
											Adding action failed
										</div>
										<div class="card-body">
											Et sanctus amet et gubergren magna et dolore. Sed justo et et voluptua, dolor magna tempor et dolore aliquyam no clita lorem at. Est rebum invidunt sea voluptua dolores diam. Stet.
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-4 CLOSED -->

							<!-- ROW-5 OPEN -->
							<div class="row">
								<div class="col-md-12 col-xl-4">
									<div class="card ">
										<div class="card-header ">
											<h3 class="card-title ">Employee card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
											</div>
										</div>
										<div class="card-body text-center">
											<span class="avatar avatar-xxl brround cover-image cover-image" data-bs-image-src="{{asset('assets/images/users/18.jpg')}}"></span>
											<h4 class="h4 mb-0 mt-3">James Thomas</h4>
											<p class="card-text">Web designer</p>
										</div>
										<div class="card-footer text-center">
											<div class="row user-social-detail">
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card ">
										<div class="card-header ">
											<h3 class="card-title ">Employee card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
											</div>
										</div>
										<div class="card-body text-center">
											<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/18.jpg')}}"></span>
											<h4 class="h4 mb-0 mt-3">Rebacca Thomas</h4>
											<p class="card-text">Web designer</p>
										</div>
										<div class="card-footer text-center">
											<div class="row user-social-detail">
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card ">
										<div class="card-header ">
											<h3 class="card-title ">Employee card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x "></i></a>
											</div>
										</div>
										<div class="card-body text-center">
											<span class="avatar avatar-xxl brround cover-image" data-bs-image-src="{{asset('assets/images/users/8.jpg')}}"></span>
											<h4 class="h4 mb-0 mt-3"> Thomas symson</h4>
											<p class="card-text">Web designer</p>
										</div>
										<div class="card-footer text-center">
											<div class="row user-social-detail">
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
												<a href="#" class="social-profile me-4 rounded d-f-ai-c-jc-c"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-5 CLOSED -->

							<!-- ROW-6 OPEN -->
							<div class="row row-deck">
								<div class="col-md-12 col-xl-4">
									<div class="card ">
										<div class="card-body text-start">
											<blockquote class="quote">
												<p>Amet sanctus dolore sit stet ipsum et consetetur et amet.</p>
													<small class="text-muted">
														this title is soo awesome<cite title="Source Title">-Kasd aliquyam</cite>
													</small>
											</blockquote>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card ">
										<div class="card-body text-center">
											<blockquote class="quote">
												<p>Dolor voluptua dolore dolores sed ipsum labore tempor. No tempor nonumy nonumy.</p>
													<small class="text-muted">
														this title is soo awesome<cite title="Source Title">-Kasd aliquyam</cite>
													</small>
											</blockquote>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card ">
										<div class="card-body text-end">
											<blockquote class="quote">
												<p>Amet rebum consetetur est labore sea erat erat amet sadipscing invidunt.</p>
													<small class="text-muted">
														this title is soo awesome<cite title="Source Title">-Kasd aliquyam</cite>
													</small>
											</blockquote>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-6 CLOSED -->

							<!-- ROW-7 OPEN -->
							<div class="row">
								<div class=" col-xl-4 col-md-12 ">
									<div class="card m-b-20">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card With List</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											<div class="visitor-list">
												<div class="media m-0 mt-0 border-bottom">
													<img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('assets/images/users/18.jpg')}}">
													<div class="media-body">
														<a href="javascript:void(0)" class="fw-semibold">John Paige</a>
														<p class="text-muted ">Uploaded new invoices for RedBus</p>
													</div>
												</div>
												<div class="media mt-2 border-bottom">
													<img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('assets/images/users/20.jpg')}}">
													<div class="media-body">
														<a href="javascript:void(0)" class="fw-semibold">Lillian Quinn</a>
														<p class="text-muted">Created new work flow for the current</p>
													</div>
												</div>
												<div class="media mt-2">
													<img class="avatar brround avatar-md me-3" alt="avatra-img" src="{{asset('assets/images/users/18.jpg')}}">
													<div class="media-body">
														<a href="javascript:void(0)" class="fw-semibold">Irene Harris</a>
														<p class="text-muted mb-0">Submitted the project schedule to the manager</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-xl-4 col-md-12">
									<div class="card m-b-20">
										<div class="card-header border-bottom">
											<h3 class="card-title">Sample card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											<p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
											<p class="mb-0">Scratch the postman wake up lick paw Duis aute irure dolor in reprehenderit wake up owner meow meow lick plastic bags  Scratch the postman wake up lick paw wake Duis aute irure dolor  having their mate disturbing sleeping humans.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-xl-4 col-md-12">
									<div class="card d-flex m-b-20">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with Toolbar</h3>
											<div class="card-options">
												<a class="text-gray" href="javascript:void(0)">
													<i class="mdi mdi-refresh"></i>
												</a>
												<a class="text-gray" href="javascript:void(0)">
													<i class="mdi mdi-bookmark-outline"></i>
												</a>
												<a class="text-gray" href="javascript:void(0)">
													<i class="mdi mdi-dots-vertical"></i>
												</a>
											</div>
										</div>
										<div class="card-body">
											<p>Put toy mouse in food bowl run out of litter box at full speed drool but pee in Put toy mouse Put toy mouse the shoe purr when being pet but chew foot.</p>
											<p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit Scratch the postman wake up lick paw wake up owner meow meow lick plastic bags  Scratch the postman wake up lick paw wake  having their mate disturbing sleeping humans.</p>
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-7 CLOSED -->

							<!-- ROW-8 OPEN -->
							<div class="row ">
								<div class="col-md-12 col-xl-4">
									<div class="card card-blog-overlay1">
										<div class="card-body  text-white">
											<h3 class="card-title text-white">card-with image</h3>
											Accusam rebum vero sed at sea at takimata dolores lorem. Dolores ipsum aliquyam erat takimata. Ut stet amet sed amet diam ipsum diam diam ipsum, rebum invidunt diam sit sea dolor.
										</div>
										<div class="card-footer text-white z-index2 border-transparent">
											This is Basic card footer
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card card-blog-overlay2">
										<div class="card-body  text-white">
											<h3 class="card-title text-white">card-with image</h3>
											Diam amet amet at lorem stet rebum ut. Est eirmod et takimata ipsum stet at nonumy voluptua, sit ea nonumy dolor tempor amet. Justo sit ipsum dolor at sit, lorem ut ipsum accusam amet sadipscing.
										</div>
										<div class="card-footer text-white z-index2 border-transparent">
											This is Basic card footer
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card card-blog-overlay">
										<div class="card-header z-index2  border-transparent">
											<h3 class="card-title text-white ">card-with image</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
											</div>
										</div>
										<div class="card-body  text-white">
											Dolor eirmod ea eirmod erat voluptua dolore at. Est et sed clita et diam accusam amet magna sadipscing, clita eos gubergren invidunt consetetur et, lorem diam justo amet rebum diam lorem diam.
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-6 col-xl-6">
									<div class="card card-aside">
										<div class="card-body d-flex flex-column">
											<h4><a href="#">Play Music</a></h4>
											<div class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's</div>
											<div class="d-flex align-items-center pt-5 mt-auto text-center ">
												<div class="text-muted">
													<a href="javascript:void(0)" class="icon d-md-inline-block ms-3"><i class="fa fa-step-backward"></i></a>
													<a href="javascript:void(0)" class="icon d-md-inline-block ms-3"><i class="fa fa-play "></i></a>
													<a href="javascript:void(0)" class="icon d-md-inline-block ms-3"><i class="fa fa-step-forward"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div><!-- COL END -->
								<div class="col-md-6 col-xl-6">
									<div class="card card-aside bg-primary">
										<div class="card-body d-flex flex-column">
											<h4><a href="#" class="text-white">Play Music</a></h4>
											<div class="text-muted text-white">Some quick example text to build on the card title and make up the bulk of the card's </div>
											<div class="d-flex align-items-center pt-5 mt-auto text-center ">
												<div class="text-muted">
													<a href="javascript:void(0)" class="icon d-md-inline-block ms-3"><i class="fa fa-step-backward text-white"></i></a>
													<a href="javascript:void(0)" class="icon d-md-inline-block ms-3"><i class="fa fa-play text-white "></i></a>
													<a href="javascript:void(0)" class="icon d-md-inline-block ms-3"><i class="fa fa-step-forward text-white"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-primary">
										<div class="card-header border-primary">
											<h3 class="card-title ">primary card title</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
											</div>
										</div>
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-secondary">
										<div class="card-header border-secondary">
											<h3 class="card-title ">Secondary card title</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
											</div>
										</div>
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card text-white bg-success">
										<div class="card-header border-success">
											<h3 class="card-title ">Success card title</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x text-white "></i></a>
											</div>
										</div>
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with loader</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											<div class="dimmer active">
												<div class="spinner"></div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with loader</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											<div class="dimmer active">
												<div class="spinner1">
												<div class="double-bounce1"></div>
												<div class="double-bounce2"></div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-4">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with loader</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											<div class="dimmer active">
												<div class="spinner2">
												<div class="cube1"></div>
												<div class="cube2"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<!-- ROW-8 CLOSED -->

							<!-- ROW-9 OPEN -->
							<div class="row">
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">fullscreen button</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-fullscreen" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											Takimata sea diam et amet et nonumy et diam. Eos accusam voluptua lorem justo sadipscing sed. Dolor dolore eirmod dolor takimata diam. Diam sadipscing stet et est et erat rebum eirmod..
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Card with switch</h3>
											<div class="card-options">
												<label class="custom-switch m-0">
													<input type="checkbox" value="1" class="custom-switch-input" checked>
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
										<div class="card-body">
											Sanctus sanctus est consetetur dolor sit dolor ipsum kasd. Rebum sadipscing elitr duo sed lorem. Dolor diam nonumy voluptua magna.Labore accusam vero et aliquyam at lorem lorem, diam lorem accusam sit elitr sed amet kasd, et aliquyam.
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-6">
									<div class="card card-collapsed">
										<div class="card-header border-bottom">
											<h3 class="card-title">Initial collapsed card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											Ea dolor ipsum voluptua sadipscing sanctus justo et, voluptua et et ea dolores dolores ipsum elitr, lorem sadipscing lorem sea sanctus et dolor magna. Est sadipscing kasd dolores erat invidunt. Dolores clita ea rebum elitr, sea.
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Built card</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											Dolor ut justo amet est clita diam consetetur voluptua, et magna lorem dolores dolor ipsum labore sea lorem erat, eirmod et duo labore ut at. Clita nonumy dolore at tempor, et et tempor clita amet..
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12  col-xl-6">
									<div class="card">
										<div class="card-status bg-blue br-tr-7 br-tl-7"></div>
										<div class="card-header border-bottom">
											<h3 class="card-title">Card blue</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											Est eos sea sanctus et nonumy lorem amet rebum et. Dolores magna sadipscing lorem kasd ea ipsum dolor sed, et accusam diam et eos at, ut ipsum consetetur consetetur diam amet.
										</div>
									</div>
								</div><!-- COL END -->
								<div class="col-md-12 col-xl-6">
									<div class="card">
										<div class="card-status card-status-left bg-red br-bl-7 br-tl-7"></div>
										<div class="card-header border-bottom">
											<h3 class="card-title">Card status on left side</h3>
											<div class="card-options">
												<a href="#" class="card-options-collapse" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
												<a href="#" class="card-options-remove" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
											</div>
										</div>
										<div class="card-body">
											Voluptua dolore stet erat et gubergren accusam et clita stet, voluptua et invidunt erat et, tempor tempor ea erat rebum gubergren vero consetetur dolore, lorem elitr justo sea sea no et justo.
										</div>
									</div>
								</div><!-- COL END -->
							</div>
							<!-- ROW-9 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
