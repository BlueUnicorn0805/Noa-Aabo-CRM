@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Accordion</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Accordions</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic Style Accordion</h3>
										</div>
										<div class="card-body">
											<p class="text-muted ">The default collapse behavior to create an accordion.</p>
											<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
												<div class="card mb-0 border-0">
													<div class="card-header border-bottom-0" id="headingOne" role="tab">
														<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseOne" class="accor-basic">Making a Beautiful CSS3 Button Set</a>
													</div>
													<div aria-labelledby="headingOne" class="collapse show" data-bs-parent="#accordion" id="collapseOne" role="tabpanel">
														<div class="card-body br-bottom-radius-5">
															A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
														</div>
													</div>
												</div>
												<div class="card mb-0 mt-2 border-0">
													<div class="card-header border-bottom-0" id="headingTwo" role="tab">
														<a aria-controls="collapseTwo" aria-expanded="false" class="accordion collapsed accor-basic" data-bs-toggle="collapse" href="#collapseTwo">Horizontal Navigation Menu Fold Animation</a>
													</div>
													<div aria-labelledby="headingTwo" class="collapse" data-bs-parent="#accordion" id="collapseTwo" role="tabpanel">
														<div class="card-body br-bottom-radius-5">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
														</div>
													</div>
												</div>
												<div class="card mt-2 border-0">
													<div class="card-header border-bottom-0" id="headingThree" role="tab">
														<a aria-controls="collapseThree" aria-expanded="false" class="accordion collapsed accor-basic" data-bs-toggle="collapse" href="#collapseThree">Creating CSS3 Button with Rounded Corners</a>
													</div>
													<div aria-labelledby="headingThree" class="collapse" data-bs-parent="#accordion" id="collapseThree" role="tabpanel">
														<div class="card-body br-bottom-radius-5">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
														</div>
													</div><!-- collapse -->
												</div>
											</div><!-- accordion -->
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card overflow-hidden">
										<div class="card-header border-bottom">
											<h3 class="card-title">Accordion Style 01</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">The default collapse behavior to create an accordion.</p>
											<div class="panel-group1" id="accordion11" role="tablist">
												<div class="card overflow-hidden mb-2 border-0">
													<a class="accordion-toggle panel-heading1 collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapseFour1" aria-expanded="false">Section 1</a>
													<div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body">
															<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
														</div>
													</div>
												</div>
												<div class="card overflow-hidden border-0">
													<a class="accordion-toggle panel-heading1 collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapseFive2" aria-expanded="false">Section 2</a>

													<div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
														<div class="panel-body ">
															<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- row closed -->

							<!-- row opened -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Accordion Style 02</h3>
										</div>
										<div class="card-body h-100">
											<div id="accordion01" class="w-100 overflow-hidden Accordion-Style02 ">
												<div class="mb-2">
													<div class="accor " id="headingOne1">
														<h4 class="m-0">
															<a href="#collapseOne1" class="active" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
															Accordions With Text
															</a>
														</h4>
													</div>
													<div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion01">
														<div class="border p-3 br-bottom-radius-5">
															I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful
															sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
														</div>
													</div>
												</div>
												<div class="mb-2">
													<div class="accor" id="headingTwo2">
														<h4 class="m-0">
															<a href="#collapseTwo2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
																Accordions with images
															</a>
														</h4>
													</div>
													<div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion01">
														<div class="border p-3 br-bottom-radius-5">
															<div class="row">
																<div class="col-lg-3 col-md-6">
																	<img class="img-fluid br-5 my-1 my-sm-2" src="{{asset('assets/images/photos/8.jpg')}}" alt="banner image">
																</div>
																<div class="col-lg-3 col-md-6">
																	<img class="img-fluid br-5 my-1 my-sm-2" src="{{asset('assets/images/photos/10.jpg')}}" alt="banner image">
																</div>
																<div class="col-lg-3 col-md-6">
																	<img class="img-fluid br-5 my-1 my-sm-2" src="{{asset('assets/images/photos/8.jpg')}}" alt="banner image">
																</div>
																<div class="col-lg-3 col-md-6">
																	<img class="img-fluid br-5 my-1 my-sm-2" src="{{asset('assets/images/photos/12.jpg')}}" alt="banner image">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="mb-2">
													<div class="accor " id="headingThree3">
														<h4 class="m-0">
															<a href="#collapseThree1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
																Accordions with tables
															</a>
														</h4>
													</div>
													<div id="collapseThree1" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
														<div class="border br-bottom-radius-5 table-responsive p-3">
															<table class="table mb-0 table-bordered border-top mb-0">
																<thead>
																<tr>
																	<th>#</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Username</th>
																</tr>
																</thead>
																<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>Mark</td>
																	<td>Otto</td>
																	<td>@mdo</td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Jacob</td>
																	<td>Thornton</td>
																	<td>@fat</td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Larry</td>
																	<td>the Bird</td>
																	<td>@twitter</td>
																</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- row closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Accordion With Color Theme</h3>
										</div>
										<div class="card-body color-acc">
											<p class="text-muted">Use <code class="highlighter-rouge">.accordion-[color]</code> to apply color theme to accordion.</p>
												<div aria-multiselectable="true" class="accordion-primary mb-2" id="accordion2" role="tablist">
												<div class="card mb-0 mt-2">
													<div class="card-header border-bottom-0" id="headinig2" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse2" aria-expanded="false" data-bs-toggle="collapse" href="#collapse2"><i class="fe fe-plus-circle me-2"></i>Accodion - Primary</a>
													</div>
													<div aria-labelledby="headinig2" class="collapse" data-bs-parent="#accordion2" id="collapse2" role="tabpanel">
														<div class="card-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
														</div>
													</div><!-- collapse -->
												</div>
											</div><!-- accordion -->

											<div aria-multiselectable="true" class="accordion-info mb-2" id="accordion3" role="tablist">
												<div class="card mb-0 mt-2">
													<div class="card-header border-bottom-0" id="heading3" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse3" aria-expanded="false" data-bs-toggle="collapse" href="#collapse3"><i class="fe fe-plus-circle me-2"></i>Accodion - Info</a>
													</div>
													<div aria-labelledby="heading3" class="collapse" data-bs-parent="#accordion3" id="collapse3" role="tabpanel">
														<div class="card-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
														</div>
													</div><!-- collapse -->
												</div>
											</div><!-- accordion -->

											<div aria-multiselectable="true" class="accordion-secondary mb-2" id="accordion4" role="tablist">
												<div class="card mb-0">
													<div class="card-header border-bottom-0" id="heading4" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse4" aria-expanded="false" data-bs-toggle="collapse" href="#collapse4"><i class="fe fe-plus-circle me-2"></i>Accodion - Secondary</a>
													</div>
													<div aria-labelledby="heading4" class="collapse" data-bs-parent="#accordion4" id="collapse4" role="tabpanel">
														<div class="card-body">
															A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
														</div>
													</div>
												</div>
											</div><!-- accordion -->

											<div aria-multiselectable="true" class="accordion-success mb-2" id="accordion5" role="tablist">
												<div class="card mb-0">
													<div class="card-header border-bottom-0" id="heading5" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse5" aria-expanded="false" data-bs-toggle="collapse" href="#collapse5"><i class="fe fe-plus-circle me-2"></i>Accodion - Success</a>
													</div>
													<div aria-labelledby="heading5" class="collapse" data-bs-parent="#accordion5" id="collapse5" role="tabpanel">
														<div class="card-body">
															A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
														</div>
													</div>
												</div>
											</div><!-- accordion -->

											<div aria-multiselectable="true" class="accordion-warning mb-2" id="accordion6" role="tablist">
												<div class="card mb-0">
													<div class="card-header border-bottom-0" id="heading6" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse6" aria-expanded="false" data-bs-toggle="collapse" href="#collapse6"><i class="fe fe-plus-circle me-2"></i>Accodion - Warning</a>
													</div>
													<div aria-labelledby="heading6" class="collapse" data-bs-parent="#accordion6" id="collapse6" role="tabpanel">
														<div class="card-body">
															A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
														</div>
													</div>
												</div>
											</div><!-- accordion -->

											<div aria-multiselectable="true" class="accordion-danger mb-2" id="accordion7" role="tablist">
												<div class="card mb-0">
													<div class="card-header border-bottom-0" id="heading7" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse7" aria-expanded="false" data-bs-toggle="collapse" href="#collapse7"><i class="fe fe-plus-circle me-2"></i>Accodion - Danger</a>
													</div>
													<div aria-labelledby="heading7" class="collapse" data-bs-parent="#accordion7" id="collapse7" role="tabpanel">
														<div class="card-body">
															A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
														</div>
													</div>
												</div>
											</div><!-- accordion -->

											<div aria-multiselectable="true" class="accordion-dark" id="accordion8" role="tablist">
												<div class="card mb-0">
													<div class="card-header border-bottom-0" id="heading8" role="tab">
														<a class="accor-style2 collapsed" aria-controls="collapse8" aria-expanded="false" data-bs-toggle="collapse" href="#collapse8"><i class="fe fe-plus-circle me-2"></i>Accodion - Dark</a>
													</div>
													<div aria-labelledby="heading8" class="collapse" data-bs-parent="#accordion8" id="collapse8" role="tabpanel">
														<div class="card-body">
															A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
														</div>
													</div>
												</div>
											</div><!-- accordion -->

										</div>
										<div class="card-footer">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Color</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="highlighter-rouge">class="accordion-[color]"</code></td>
														<td>Primary | Secondary | Success | Info | Warning | Danger | Dark</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- row closed -->

                            @endsection

        @section('scripts')

		<!-- ACCORDION JS -->
		<script src="{{asset('assets/plugins/accordion/accordion.min.js')}}"></script>
		<script src="{{asset('assets/plugins/accordion/accordion.js')}}"></script>

        @endsection
