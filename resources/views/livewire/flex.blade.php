@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Flex</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
										<li class="breadcrumb-item active" aria-current="page">Flex</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row row-sm">
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<!--div-->
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Enable Flex</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="example">
												<div class="d-flex p-4 bg-gray-200">
													I'm a flexbox container!
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Direction</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex flex-row border p-3 br-5  mb-2">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row-reverse border p-3 br-5 ">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Justify Content</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex flex-row justify-content-start mb-2  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row justify-content-end mb-2  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row justify-content-center mb-2  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row justify-content-between mb-2  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row justify-content-around  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Align Items</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex flex-row align-items-start hpx-100 mb-2  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row align-items-center  hpx-100 mb-2  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row align-items-end hpx-100 mb-2 border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
												<div class="d-flex flex-row align-items-stretch hpx-100  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item 1
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item 2
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Flex item 3
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Align Self</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex flex-row hpx-100 mb-2 border p-3 br-5">
													<div class="p-2 p-sm-4 bg-gray-200 align-self-start">
														Flex item 1
													</div>
													<div class="p-2 p-sm-4 bg-gray-300 align-self-center">
														Flex item 2
													</div>
													<div class="p-2 p-sm-4 bg-gray-400 align-self-end">
														Flex item 3
													</div>
													<div class="p-2 p-sm-4 bg-gray-300 align-self-stretch">
														Flex item 4
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Fill</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200 flex-fill">
														Flex item with a lot of content
													</div>
													<div class="p-sm-4 p-2 bg-gray-300 flex-fill">
														Flex item
													</div>
													<div class="p-sm-4 p-2 bg-gray-400 flex-fill">
														Flex item
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Grow and Shrink</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200 flex-grow-1">
														Flex item
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item
													</div>
													<div class="p-sm-4 p-2 bg-gray-400">
														Third flex item
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->

								<!--div-->
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Auto Margins</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div>
												<div class="d-flex  border p-3 br-5">
													<div class="p-sm-4 p-2 bg-gray-200">
														Flex item
													</div>
													<div class="p-sm-4 p-2 bg-gray-300">
														Flex item
													</div>
													<div class="p-sm-4 p-2 bg-gray-400 ms-auto">
														Third flex item
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
							<!-- ROW-1 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
