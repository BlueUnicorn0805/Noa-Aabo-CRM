@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Modals</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Modals</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12">
									<!--div-->
									<div class="card" id="modal">
										<div class="card-header border-bottom">
											<div class="card-title">
												Basic Modal
											</div>
										</div>
										<div class="card-body">
											<div class="p-4 bg-light border-bottom">
												<div class="modal d-block pos-static">
													<div class="modal-dialog" role="document">
														<div class="modal-content modal-content-demo">
															<div class="modal-header">
																<h6 class="modal-title">Message Title</h6>
																<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
															</div>
															<div class="modal-body">
																<h6>Et labore et gubergren et. Diam sadipscing et.</h6>
																<p>Ut gubergren kasd gubergren sit no ipsum et sadipscing, ipsum consetetur ipsum vero no invidunt amet. Amet takimata vero aliquyam ea aliquyam ut amet et. Dolore sed duo clita clita stet magna dolor ut dolores, gubergren labore at aliquyam sea, dolor et erat dolor sea.</p>
															</div>
															<div class="modal-footer">
																<button class="btn btn-primary">Save changes</button>
																<button class="btn btn-light" >Close</button>
															</div>
														</div>
													</div>
												</div>
											</div><!-- pd-y-50 -->
											<div class="text-center py-4 bg-light">
												<a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="javascript:void(0)">View Live Demo</a>
											</div><!-- pd-y-30 -->
										</div>
									</div>
									<!--/div-->

									<!--div-->
									<div class="card" id="modal3">
										<div class="card-header border-bottom">
											<div class="card-title">
												Success Alert Messages
											</div>
										</div>
										<div class="card-body">
											<div class="p-4 bg-light border-bottom">
												<div class="modal d-block pos-static">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-body text-center p-4">
																<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
																<i class="fe fe-check-circle fs-65 text-success lh-1 mb-4 d-inline-block"></i>
																<h4 class="text-success mb-4">Congratulations!</h4>
																<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" >Continue</button>
															</div>
														</div>
													</div>
												</div>
											</div><!-- modal-wrapper-demo -->
											<div class="text-center py-4 bg-light">
												<a class="btn btn-primary" data-bs-target="#modaldemo4" data-bs-toggle="modal" href="javascript:void(0)">View Live Demo</a>
											</div><!-- modal-footer-demo -->
										</div>
									</div>
									<!--/div-->

									<!--div-->
									<div class="card" id="modal4">
										<div class="card-header border-bottom">
											<div class="card-title">
												Warning Alert Messages
											</div>
										</div>
										<div class="card-body">
											<div class="p-4 bg-light border-bottom">
												<div class="modal d-block pos-static">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-body text-center p-4">
																<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
																<i class="fe fe-x-circle fs-65 text-danger lh-1 mb-4 d-inline-block"></i>
																<h4 class="text-danger mb-20">Error: Cannot process your entry!</h4>
																<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25">Back to Home</button>
															</div>
														</div>
													</div>
												</div>
											</div><!-- modal-wrapper-demo -->
											<div class="text-center py-4 bg-light">
												<a class="btn btn-primary" data-bs-target="#modaldemo5" data-bs-toggle="modal" href="javascript:void(0)">View Live Demo</a>
											</div><!-- modal-footer-demo -->
										</div>
									</div>
									<!--/div-->

									<!--div-->
									<div class="card" id="modal-toggle">
										<div class="card-header border-bottom">
											<div class="card-title">
												Toggle Modal
											</div>
										</div>
										<div class="card-body">
											<div class="p-4 bg-light border-bottom">
												<div class="modal d-block pos-static">
													<div class="modal-dialog" role="document">
														<div class="modal-content modal-content-demo">
															<div class="modal-header">
																<h6 class="modal-title">First Modal</h6>
																<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
															</div>
															<div class="modal-body">
																<p>Eos accusam ipsum clita sadipscing diam gubergren ipsum voluptua et sanctus. Justo ea gubergren lorem.</p>
															</div>
															<div class="modal-footer">
																<button class="btn btn-primary">Second Modal</button>
																<button class="btn btn-light" >Close</button>
															</div>
														</div>
													</div>
												</div>
											</div><!-- pd-y-50 -->
											<div class="text-center py-4 bg-light">
												<a class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal" href="javascript:void(0)">View Live Demo</a>
											</div><!-- pd-y-30 -->
										</div>
									</div>
									<!--/div-->

									<!--div-->
									<div class="card" id="modal-input">
										<div class="card-header border-bottom">
											<div class="card-title">
												Input Modal
											</div>
										</div>
										<div class="card-body">
											<div class="p-4 bg-light border-bottom">
												<div class="modal d-block pos-static">
													<div class="modal-dialog" role="document">
														<div class="modal-content modal-content-demo">
															<div class="modal-body">
																<div class="form-group">
																	<label class="form-label text-muted">To:</label>
																	<div class="input-group">
																		<input type="text" class="form-control" placeholder="Enter Mail" value="demo-mail@spruko.com">
																	</div>
																</div>
																<div class="form-group">
																	<label class="form-label text-muted">Message:</label>
																	<textarea cols="30" rows="5" class="form-control"></textarea>
																</div>
															</div>
															<div class="modal-footer">
																<button class="btn btn-primary">Send</button>
																<button class="btn btn-light" >Close</button>
															</div>
														</div>
													</div>
												</div>
											</div><!-- pd-y-50 -->
											<div class="text-center py-4 bg-light">
												<a class="btn btn-primary" data-bs-target="#modalInput" data-bs-toggle="modal" href="javascript:void(0)">View Live Demo</a>
											</div><!-- pd-y-30 -->
										</div>
									</div>
									<!--/div-->

									<!-- Row -->
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<div class="card">
												<div class="card-header border-bottom">
													<h3 class="card-title">Modal Sizes & Types</h3>
												</div>
												<div class="card-body text-center">
													<p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> or <code class="highlighter-rouge">.modal-xl </code> to modal-dialog to increase and decrease the modal box sizes.</p>
													<button  class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#smallmodal">Small Modal</button>
													<button  class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">large Modal</button>
													<button  class="btn btn-secondary mt-3" data-bs-toggle="modal" data-bs-target="#extralargemodal">Extralarge Modal</button>
													<button  class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#scrollingmodal">Scrolling Modal</button>
													<button  class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#fullscreenmodal">Fullscreen Modal</button>
												</div>
											</div>
										</div>
									</div>
									<!-- End Row -->

									<!--div-->
									<div class="card" id="modal5">
										<div class="card-header border-bottom">
											<div class="card-title">
												Modal Animation Effects
											</div>
										</div>
										<div class="card-body">
											<div class="row ">
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8">Scale</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8">Slide In Right</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8">Newspaper</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8">Fall</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-vertical" data-bs-toggle="modal" href="#modaldemo8">Flip Vertical</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8">Super Scaled</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-sign" data-bs-toggle="modal" href="#modaldemo8">Sign</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal" href="#modaldemo8">Rotate Left</a>
												</div>
												<div class="col-sm-6 col-md-4 col-xl-3">
													<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-just-me" data-bs-toggle="modal" href="#modaldemo8">Just Me</a>
												</div>
											</div>
										</div>
									</div>
									<!--/div-->

								</div>
							</div>
							<!-- End Row -->

                            @endsection

            @section('modal')

			<!--Change password Modal -->
			<div class="modal fade"  id="changepasswordnmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Change Password</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
							<a href="#" class="btn btn-primary">Confirm</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Change password Modal  -->

            <!-- BASIC MODAL -->
            <div class="modal fade"  id="modaldemo1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TOGGLE MODAL -->
            <div class="modal fade " id="modalToggle">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">First Modal</h6>
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Eos accusam ipsum clita sadipscing diam gubergren ipsum voluptua et sanctus. Justo ea gubergren lorem.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Toggle Second Modal</button>
                            <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TOGGLE MODAL-2 -->
            <div class="modal fade " id="modalToggle2">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Second Modal</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Ipsum nonumy accusam est dolor et. Gubergren duo magna sit sadipscing. Diam voluptua et consetetur.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Toggle First Modal</button>
                            <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INPUT MODAL -->
            <div class="modal fade" id="modalInput">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label text-muted">To:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Mail" value="demo-mail@spruko.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label text-muted">Message:</label>
                                <textarea cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Send</button>
                            <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SMALL MODAL -->
            <div class="modal fade"  id="modaldemo2">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Notice</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LARGE MODAL -->
            <div class="modal fade"  id="modaldemo3">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL ALERT MESSAGE -->
            <div class="modal fade"  id="modaldemo4">
                <div class="modal-dialog modal-dialog-centered text-center " role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body text-center p-4">
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <i class="fe fe-check-circle fs-65 text-success lh-1 mb-5 d-inline-block"></i>
                            <h4 class="text-success tx-semibold">Congratulations!</h4>
                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-success pd-x-25" data-bs-dismiss="modal" >Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade"  id="modaldemo5">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body text-center p-4">
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <i class="fe fe-x-circle fs-65 text-danger lh-1 mb-5 d-inline-block"></i>
                            <h4 class="text-danger">Error: Cannot process your entry!</h4>
                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" data-bs-dismiss="modal" >Continue</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL EFFECTS -->
            <div class="modal fade"  id="modaldemo8">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade"  id="largemodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Modal title</h5>
                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade"  id="extralargemodal" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Modal title</h5>
                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade"  id="scrollingmodal" tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Modal title</h5>
                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade"  id="fullscreenmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-fullscreen" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            @endsection


        @section('scripts')

        @endsection
