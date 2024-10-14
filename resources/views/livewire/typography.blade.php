@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Typography</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Typograpy</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW-1 OPEN -->
							<div class="row">
								<div class="col-xl-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Default Heading Text</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
												<div class="example">
													<h1>h1. Heading</h1>
													<h2>h2. Heading</h2>
													<h3>h3. Heading</h3>
													<h4>h4. Heading</h4>
													<h5>h5. Heading</h5>
													<h6>h6. Heading</h6>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<div class="col-xl-6 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Heading with color Text</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
												<div class="example">
													<h1 class="text-primary">h1. Heading</h1>
													<h2  class="text-secondary">h2. Heading</h2>
													<h3  class="text-success">h3. Heading</h3>
													<h4  class="text-danger">h4. Heading</h4>
													<h5  class="text-info">h5. Heading</h5>
													<h6  class="text-warning">h6. Heading</h6>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
							</div>
							<!-- ROW-1 CLOSED -->

							<!-- ROW-2 OPEN -->
							<div class="row">
								<div class="col-xl-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Display headings</h3>
										</div>
										<div class="card-body">
											<p class="text-muted card-sub-title">you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.</p>
											<div class="text-wrap">
												<div class="example">
													<h1 class="display-1">Display 1</h1>
													<h1 class="display-2">Display 2</h1>
													<h1 class="display-3">Display 3</h1>
													<h1 class="display-4">Display 4</h1>
													<h1 class="display-5">Display 5</h1>
													<h1 class="display-6">Display 6</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- ROW-2 CLOSED -->

							<!-- ROW-3 OPEN -->
							<div class="row">
								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Inline text elements</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">Styling for common inline HTML5 elements.</p>
											<div class="text-wrap">
												<div class="example">
													<p>You can use the mark tag to <mark>highlight</mark> text.</p>
													<p><del>This line of text is meant to be treated as deleted text.</del></p>
													<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
													<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
													<p><u>This line of text will render as underlined</u></p>
													<p><small>This line of text is meant to be treated as fine print.</small></p>
													<p><strong>This line rendered as bold text.</strong></p>
													<p class="mb-0"><em>This line rendered as italicized text.</em></p>
												</div>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->

								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Font Size</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-[value]</code></td>
														</tr>
														<tr>
															<td><b>Values</b></td>
															<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-[viewport]-[value]</code></td>
														</tr>
														<tr>
															<td><b>Viewports</b></td>
															<td>xs | sm | md | lg | xl</td>
														</tr>
														<tr>
															<td><b>Sizes</b></td>
															<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140 (step of 2)</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->

								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Font Weight</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-[weight]</code></td>
														</tr>
														<tr>
															<td><b>Weight</b></td>
															<td>bold | semibold | medium | normal | light | thin | xthin</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->

								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Font Color</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-[color]</code></td>
														</tr>
														<tr>
															<td><b>Color</b></td>
															<td>primary | secondary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-[color]-[mode]</code></td>
														</tr>
														<tr>
															<td><b>Mode</b></td>
															<td>light | lighter | lightest | dark | darker | darkest</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->

								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Font Spacing</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-spacing-[value]</code></td>
														</tr>
														<tr>
															<td><b>Values</b></td>
															<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-spacing--[value]</code></td>
														</tr>
														<tr>
															<td><b>Values</b></td>
															<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->

								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Line Height</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.line-height-[value]</code></td>
														</tr>
														<tr>
															<td><b>Values</b></td>
															<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="table-responsive">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.line-height-[viewport]-[value]</code></td>
														</tr>
														<tr>
															<td><b>View Port</b></td>
															<td>xs | sm | md | lg | xl</td>
														</tr>
														<tr>
															<td><b>Values</b></td>
															<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->

								<div class="col-xl-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Text Alignment</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="table-responsive">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="wp-15"><b>Classes</b></td>
															<td><code>.text-[position]</code></td>
														</tr>
														<tr>
															<td><b>Position</b></td>
															<td>start | center | end</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- COL-END -->
								<span id="timeOut"></span>
							</div>
							<!-- ROW-3 CLOSED -->

                            @endsection

        @section('scripts')

        @endsection
