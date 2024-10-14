@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Tabs</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tabs</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row row-deck">
								<div class="col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Tabs style-1</h3>
										</div>
										<div class="card-body p-6">
											<div class="panel panel-primary">
												<div class="tab-menu-heading border-bottom-0">
													<div class="tabs-menu ">
														<!-- Tabs -->
														<ul class="nav panel-tabs">
															<li ><a href="#tab1" class="active me-1 text-default my-1" data-bs-toggle="tab">Tab 1</a></li>
															<li><a href="#tab2" data-bs-toggle="tab" class="me-1 text-default my-1">Tab 2</a></li>
															<li><a href="#tab3" data-bs-toggle="tab" class="me-1 text-default my-1">Tab 3</a></li>
															<li><a href="#tab4" data-bs-toggle="tab" class="text-default my-1">Tab 4</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab1">
															<p>Et voluptua eos dolore dolore tempor invidunt, at ea voluptua eirmod eirmod. Sed kasd sed labore et sit clita amet erat dolor. Lorem justo sed.</p>
															<p>Duo lorem lorem tempor amet kasd amet sed dolor. Labore sea est elitr dolores amet nonumy. Sed sed eirmod amet elitr dolore. Dolor duo ea stet sed amet.</p>
														</div>
														<div class="tab-pane" id="tab2">
															<p>Et sanctus accusam tempor diam est rebum duo sadipscing, sit diam sed rebum sea at eos. Et dolores dolor invidunt kasd, consetetur eirmod sed ipsum et lorem magna takimata. Et tempor takimata eirmod amet amet.</p>
															<p>Clita sit dolores clita et clita et. Labore dolores ut eos sit dolor sanctus labore. Dolore lorem sanctus ut dolore tempor sed amet elitr.</p>
														</div>
														<div class="tab-pane" id="tab3">
															<p>Sea ea sit sadipscing no dolore elitr kasd gubergren et, dolore aliquyam sit magna aliquyam. Eirmod ut dolor sed vero. Lorem nonumy lorem sed sanctus diam aliquyam, et ipsum consetetur.</p>
															<p>Est stet ipsum et aliquyam eos et ipsum diam duo clita. Sed eirmod sadipscing amet sadipscing nonumy magna aliquyam elitr voluptua,.</p>
														</div>
														<div class="tab-pane" id="tab4">
															<p>No voluptua tempor est nonumy clita eirmod vero duo, tempor ipsum eirmod est nonumy et accusam vero. Et erat takimata dolores elitr,.</p>
															<p>Ut ea et et accusam labore sadipscing accusam eirmod dolor et, tempor rebum est sit sadipscing nonumy invidunt lorem accusam invidunt, accusam duo.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Tabs Style-2</h3>
										</div>
										<div class="card-body p-6">
											<div class="panel panel-primary tab-style-underline">
												<div class=" tab-menu-heading border-bottom-0">
													<div class="tabs-menu1 ">
														<!-- Tabs -->
														<ul class="nav panel-tabs">
															<li><a href="#tab5" class="active me-1 text-default my-1" data-bs-toggle="tab">Tab 1</a></li>
															<li><a href="#tab6" data-bs-toggle="tab" class="me-1 text-default my-1">Tab 2</a></li>
															<li><a href="#tab7" data-bs-toggle="tab" class="me-1 text-default my-1">Tab 3</a></li>
															<li><a href="#tab8" data-bs-toggle="tab" class="text-default my-1">Tab 4</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab5">
															<p>At est et takimata dolores nonumy diam. Magna sea takimata sanctus stet clita. Sit clita takimata lorem sadipscing clita no nonumy magna ut, diam vero et vero magna est ut lorem lorem.</p>
															<p>Sit eos kasd amet voluptua clita rebum eirmod erat sed et, nonumy stet sadipscing aliquyam est lorem et justo, sanctus vero et magna ipsum elitr.</p>
														</div>
														<div class="tab-pane " id="tab6">
															<p>Amet ipsum duo amet stet no sanctus sea sed diam ut. Sit sed magna accusam dolores labore sadipscing. Dolor aliquyam elitr amet sed sit.</p>
															<p>Diam rebum duo ipsum rebum sit labore diam dolor eirmod justo, at eirmod amet stet et, clita gubergren lorem labore.</p>
														</div>
														<div class="tab-pane " id="tab7">
															<p>Et amet clita et nonumy et diam, takimata erat consetetur dolores gubergren voluptua, at eirmod elitr est et no sed, ipsum ea sit at elitr..</p>
															<p>Est lorem sit invidunt consetetur takimata gubergren. Sanctus lorem erat consetetur justo eos, et consetetur duo labore aliquyam elitr elitr. Diam tempor.</p>
														</div>
														<div class="tab-pane " id="tab8">
															<p>Gubergren nonumy labore sit at et, dolore diam duo et dolores et invidunt sit, kasd est ea eos nonumy, voluptua ipsum est nonumy dolore et.</p>
															<p>Duo ut eirmod et amet consetetur sit, stet no kasd eirmod ut clita sit sed voluptua. Clita rebum diam sit eos lorem.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Tabs Style-3</h3>
										</div>
										<div class="card-body p-6">
											<div class="panel panel-primary">
												<div class="tab-menu-heading border-bottom-0">
													<div class="tabs-menu4 border-bottomo-sm">
														<!-- Tabs -->
														<nav class="nav d-sm-flex d-block">
															<a class="nav-link border border-bottom-0 br-sm-5 me-2 active" data-bs-toggle="tab" href="#tab25">
																Tab 1
															</a>
															<a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab26">
																Tab 2
															</a>
															<a class="nav-link border border-bottom-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab27">
																Tab 3
															</a>
															<a class="nav-link border border-bottom-lg-0 br-sm-5 me-2" data-bs-toggle="tab" href="#tab28">
																Tab 4
															</a>
														</nav>
													</div>
												</div>
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active " id="tab25">
															<p>Eirmod eirmod sit dolor lorem diam clita aliquyam at et. Sea eirmod sit kasd amet, sit invidunt clita magna magna elitr duo. Et labore kasd no ea consetetur ut consetetur duo voluptua..</p>
															<p>Diam gubergren dolor sea eos duo. Nonumy consetetur amet diam amet consetetur sed eirmod dolore. At dolore est ut ipsum.Duo sit diam sit et erat gubergren accusam invidunt justo, ea justo no no nonumy eirmod duo, no stet vero stet dolor sea sadipscing, est sit ipsum accusam et no, nonumy eirmod.</p>
														</div>
														<div class="tab-pane" id="tab26">
															<p>Sit labore ipsum sit lorem duo diam vero duo invidunt, dolor nonumy eirmod justo erat duo, dolore diam dolore sadipscing.Et est no amet elitr eos sit lorem aliquyam rebum, gubergren dolores sadipscing sit invidunt rebum dolores, at kasd ea dolores et. Ipsum sadipscing lorem sed voluptua justo. Dolor at elitr sit.</p>
															<p>At et erat et labore stet, vero sea diam sea ipsum est sea consetetur rebum consetetur. Erat kasd diam lorem.Et est et takimata ipsum rebum amet. Et sed stet eirmod sanctus et ipsum eos. Eos dolor erat sit sea. Kasd justo rebum clita aliquyam. Sanctus lorem eos sea et ipsum sanctus.</p>
														</div>
														<div class="tab-pane" id="tab27">
															<p>Sanctus sed aliquyam amet labore labore diam amet magna takimata dolore, amet sed elitr clita sanctus ipsum, ipsum et gubergren.Amet sed amet justo sea elitr at, amet ut sed consetetur ut dolor ut nonumy, dolores labore lorem et labore elitr clita dolor ipsum takimata, kasd duo eos duo ut at. Amet.</p>
															<p>Lorem amet nonumy nonumy amet est sed gubergren at dolor, est no justo stet sea lorem diam dolore dolores voluptua, sea labore rebum sadipscing consetetur accusam, stet takimata erat eos diam, dolor.</p>
														</div>
														<div class="tab-pane" id="tab28">
															<p>Erat ipsum kasd sadipscing ea dolor. Sit diam consetetur clita sed clita ut. Amet diam diam magna eos stet at.Sadipscing dolor consetetur et gubergren erat et. Magna clita ea sadipscing sit diam sit labore justo. Sea et magna vero sadipscing sit et dolores et elitr. Eos lorem nonumy sit est sed.</p>
															<p>Diam aliquyam sit sanctus et invidunt elitr. Gubergren elitr vero kasd et elitr et diam, takimata est consetetur et sed.Consetetur sadipscing magna diam sadipscing tempor, no invidunt invidunt accusam ut voluptua no vero duo amet, et magna diam elitr et ea justo aliquyam takimata tempor. Eirmod sit et erat dolores invidunt.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Vertical Tabs</h3>
										</div>
										<div class="card-body p-6">
											<div class="example">
												<div class="d-sm-flex">
													<div class="panel panel-primary tabs-style-4">
														<div class="tab-menu-heading border br-5 me-3 my-2">
															<div class="tabs-menu">
																<!-- Tabs -->
																<ul class="nav panel-tabs flex-column">
																	<li><a href="#tab21" class="active text-default vertical-tabs mb-2" data-bs-toggle="tab"> Tab Style 01</a></li>
																	<li><a href="#tab22" class="text-default vertical-tabs mb-2" data-bs-toggle="tab"> Tab Style 02</a></li>
																	<li><a href="#tab23" class="text-default vertical-tabs mb-2" data-bs-toggle="tab"> Tab Style 03</a></li>
																	<li><a href="#tab24" class="text-default vertical-tabs" data-bs-toggle="tab"> Tab Style 04</a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="tabs-style-4 flex-2 border br-5">
														<div class="panel-body tabs-menu-body border-0">
															<div class="tab-content">
																<div class="tab-pane active" id="tab21">
																	<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																	<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																	<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																</div>
																<div class="tab-pane" id="tab22">
																	<p> Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																	<p> Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																	<p class="mb-0">cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																</div>
																<div class="tab-pane" id="tab23">
																	<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p class="mb-0">Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																</div>
																<div class="tab-pane" id="tab24">
																	<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum delenitiof pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p>Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p class="mb-0">Cupiditate non provident voluptatum deleniti atque corrupti quos dolores et quas praesentium voluptatum deleniti facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
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
							<!-- ROW-3 CLOSED -->

                            @endsection

        @section('scripts')

		<!--- TABS JS -->
		<script src="{{asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
		<script src="{{asset('assets/plugins/tabs/tab-content.js')}}"></script>

        @endsection
