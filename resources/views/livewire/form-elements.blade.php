@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Form Elements</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- row -->
							<div class="row row-sm">
								<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
									<div class="card box-shadow-0">
										<div class="card-header border-bottom">
											<h3 class="card-title">Default Form</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
											<form class="form-horizontal" >
												<div class="form-group">
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
												<div class="form-group">
													<input type="email" class="form-control" id="inputEmail2" placeholder="Email">
												</div>
												<div class="form-group">
													<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
												</div>
												<div class="form-group">
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
															<label for="checkbox-2" class="custom-control-label">Check me Out</label>
														</div>
													</div>
												</div>
												<div class="form-group mt-3">
													<div>
														<button type="submit" class="btn btn-primary">Sign in</button>
														<button type="submit" class="btn btn-secondary">Cancel</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
									<div class="card box-shadow-0">
										<div class="card-header border-bottom">
											<h4 class="card-title">Vertical Form</h4>
										</div>
										<div class="card-body">
											<p class="text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
											<form >
												<div class="form-group">
													<label for="exampleInputEmail2">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword2">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
												</div>
												<div class="checkbox">
													<div class="custom-checkbox custom-control">
														<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
														<label for="checkbox-1" class="custom-control-label mt-1">Check me Out</label>
													</div>
												</div>
												<button type="submit" class="btn btn-primary mt-3">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- row -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Inputs & Textareas </h3>
										</div>
										<div class="card-body pb-2">
											<div class="row row-sm">
												<div class="col-lg">
													<input class="form-control mb-4" placeholder="Input box" type="text">
												</div>
												<div class="col-lg">
													<input type="text" class="form-control mb-4" value="Readonly Text" placeholder="Input box (readonly)" readonly>
												</div>
												<div class="col-lg">
													<input type="text" class="form-control mb-4" placeholder="Input box (disabled)" disabled>
												</div>
											</div>
											<div class="row row-sm">
												<div class="col-lg">
													<textarea class="form-control mb-4" placeholder="Textarea" rows="3"></textarea>
												</div>
												<div class="col-lg">
													<textarea class="form-control mb-4" placeholder="Textarea (readonly)" rows="3" readonly>Readonly Text</textarea>
												</div>
												<div class="col-lg">
													<textarea class="form-control mb-4" placeholder="Texarea (disabled)" rows="3" disabled></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Input Sizes</h3>
										</div>
										<div class="card-body">
											<div class="row row-sm">
												<div class="col-lg">
													<input class="form-control form-control-sm  mb-4" placeholder="Input sm box" type="text">
													<input class="form-control  mb-4" placeholder="Input box" type="text">
													<input class="form-control form-control-lg" placeholder="Input lg box" type="text">
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Valid Inputs</h3>
										</div>
										<div class="card-body pb-2">
											<form class="needs-validation was-validated">
												<div class="row row-sm">
													<div class="col-lg-6">
														<div class="form-group">
															<input class="form-control  mb-4 is-valid state-valid" placeholder="Input box (success state)" required="" type="text" value="This is input">
															<textarea class="form-control mb-4 is-valid state-valid" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<input class="form-control mb-4 is-invalid state-invalid" placeholder="Input box (invalid state)" required="" type="text">
															<textarea class="form-control mb-4 is-invalid state-invalid" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Input Groups</h3>
										</div>
										<div class="card-body">
											<div class="row row-sm">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="search-box">Input group</label>
														<div class="input-group">
															<input type="text" class="form-control" id="search-box" placeholder="Search for...">
															<button class="input-group-text btn btn-primary text-white">Go!</button>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="basic-addon6">Input Group With Search</label>
														<div class="input-group">
															<input class="form-control" id="basic-addon6" placeholder="Search for..." type="text">
															<button class="btn btn-primary text-white" type="button"><i class="fa fa-search"></i></button>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="separated-input">Separated inputs</label>
														<div class="row ">
															<div class="col">
																<input type="text" class="form-control" id="separated-input" placeholder="Search for...">
															</div>
															<span class="col-auto">
																<button class="btn btn-primary text-white p-2 d-flex align-items-center justify-content-center" ><i class="fe fe-search"></i></button>
															</span>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="basic-addon4">Input Group With Checkbox</label>
														<div class="input-group">
															<div class="input-group-text bg-primary-transparent text-primary">
																<label class="ckbox mb-0"><input class="mg-0" type="checkbox"><span></span></label>
															</div>
															<input class="form-control" id="basic-addon4" placeholder="Text input with checkbox" type="text">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="basic-addon5">Input Group With Radio</label>
														<div class="input-group">
															<div class="input-group-text bg-primary-transparent text-primary">
																<label class="rdiobox mb-0"><input type="radio"><span></span></label>
															</div>
															<input class="form-control" id="basic-addon5" placeholder="Text input with radiobox" type="text">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="basic-addon">Input Group Style-01</label>
														<div class="input-group mb-3">
															<span class="input-group-text bg-primary-transparent text-primary" id="basic-addon1">@</span>
															<input aria-describedby="basic-addon1" id="basic-addon" aria-label="Username" class="form-control" placeholder="Username" type="text">
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="basic-addon2">Input Group Style-02</label>
														<div class="input-group mb-3">
															<input aria-describedby="basic-addon2" id="basic-addon2" aria-label="Recipient's username" class="form-control" placeholder="Recipient's username" type="text">
															<span class="input-group-text bg-primary-transparent text-primary">@example.com</span>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6">
													<div class="form-group">
														<label class="form-label" for="basic-addon3">Input Group Style-03</label>
														<div class="input-group mb-3">
															<span class="input-group-text bg-primary-transparent text-primary">$</span>
															<input aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="Enter amount in dollars" id="basic-addon3" type="number">
															<span class="input-group-text bg-primary-transparent text-primary">.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">File Browsers</h3>
										</div>
										<div class="card-body">
											<div class="row row-sm">
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="form-group">
														<label for="formFile" class="form-label">Default file input example</label>
														<input class="form-control file-input" type="file" id="formFile">
													</div>
													<div class="form-group">
														<label for="formFileMultiple" class="form-label">Multiple files input example</label>
														<input class="form-control file-input" type="file" id="formFileMultiple" multiple>
													</div>
													<div class="form-group">
														<label for="formFileDisabled" class="form-label">Disabled file input example</label>
														<input class="form-control file-input" type="file" id="formFileDisabled" disabled>
													</div>
													<div class="form-group">
														<label for="formFileSm" class="form-label">Small file input example</label>
														<input class="form-control file-input form-control-sm" id="formFileSm" type="file">
													</div>
													<div class="form-group">
														<label for="formFileLg" class="form-label">Large file input example</label>
														<input class="form-control file-input form-control-lg" id="formFileLg" type="file">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed-->

							<!-- Row -->
							<div class="row row-deck">
								<div class="col-md-12 col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Custom Checkboxes &amp; Radios</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-lg-4">
													<label class="ckbox" for="ckbox-unchecked"><input type="checkbox" id="ckbox-unchecked"><span>Checkbox Unchecked</span></label>
												</div>
												<div class="col-lg-4">
													<label class="ckbox" for="ckbox-checked"><input checked type="checkbox" id="ckbox-checked"><span>Checkbox Checked</span></label>
												</div>
												<div class="col-lg-4">
													<label class="ckbox" for="ckbox-disabled"><input disabled type="checkbox" id="ckbox-disabled"><span>Checkbox Disabled</span></label>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4">
													<label class="rdiobox" for="rdio-unchecked"><input name="rdio" type="radio" id="rdio-unchecked"> <span>Radio Unchecked</span></label>
												</div>
												<div class="col-lg-4">
													<label class="rdiobox" for="rdio-checked"><input checked name="rdio" type="radio" id="rdio-checked"> <span>Radio Checked</span></label>
												</div>
												<div class="col-lg-4">
													<label class="rdiobox" for="rdio-disabled"><input disabled name="rdio" type="radio" id="rdio-disabled"> <span>Radio Disabled</span></label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Checkbox Styles</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-6 my-1">
													<div class="example">
														<div class="form-group ">
															<p class="card-sub-title">Checkbox Style-01</p>
															<div class="selectgroup selectgroup-pills">
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked>
																	<span class="selectgroup-button">HTML</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="CSS" class="selectgroup-input">
																	<span class="selectgroup-button">CSS</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="PHP" class="selectgroup-input">
																	<span class="selectgroup-button">PHP</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
																	<span class="selectgroup-button">JavaScript</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="Angular" class="selectgroup-input">
																	<span class="selectgroup-button">Angular</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="Java" class="selectgroup-input">
																	<span class="selectgroup-button">Java</span>
																</label>
																<label class="selectgroup-item">
																	<input type="checkbox" name="value" value="C++" class="selectgroup-input">
																	<span class="selectgroup-button">C++</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6 my-1">
													<div class="example">
														<div class="form-group m-0">
															<p class="card-sub-title">Checkbox Sytle-02</p>
															<div class="row ">
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="azure" class="colorinput-input" checked />
																		<span class="colorinput-color bg-azure"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="indigo" class="colorinput-input"  />
																		<span class="colorinput-color bg-indigo"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="purple" class="colorinput-input" />
																		<span class="colorinput-color bg-purple"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="pink" class="colorinput-input" />
																		<span class="colorinput-color bg-pink"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="red" class="colorinput-input" />
																		<span class="colorinput-color bg-red"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="orange" class="colorinput-input" />
																		<span class="colorinput-color bg-orange"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="yellow" class="colorinput-input" />
																		<span class="colorinput-color bg-yellow"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="lime" class="colorinput-input" />
																		<span class="colorinput-color bg-lime"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="green" class="colorinput-input" />
																		<span class="colorinput-color bg-green"></span>
																	</label>
																</div>
																<div class="col-auto">
																	<label class="colorinput">
																		<input name="color" type="checkbox" value="teal" class="colorinput-input" />
																		<span class="colorinput-color bg-teal"></span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Radio Button Styles</h3>
										</div>
										<div class="card-body">
											<p class="text-muted">User <span class="tag">radio-*</span> to obtain colored radio buttons</p>
											<div class="example">
												<div class="row">
													<div class="col-lg-6 col-sm-12">
														<label class="rdiobox" for="rdio-primary-unchecked">
															<input name="rdio-primary" type="radio" class="radio-primary" id="rdio-primary-unchecked">
															<span>Primary</span>
														</label>
													</div>
													<div class="col-lg-6 col-sm-12">
														<label class="rdiobox" for="rdio-secondary-unchecked">
															<input name="rdio-secondary" type="radio" class="radio-secondary" id="rdio-secondary-unchecked">
															<span>Secondary</span>
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-6 col-sm-12">
														<label class="rdiobox" for="rdio-primary">
															<input checked name="rdio-primary" type="radio" class="radio-primary" id="rdio-primary">
															<span>Primary</span>
														</label>
													</div>
													<div class="col-lg-6 col-sm-12">
														<label class="rdiobox" for="rdio-secondary">
															<input checked name="rdio-secondary" type="radio" class="radio-secondary" id="rdio-secondary">
															<span>Secondary</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Range Inputs</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row">
													<div class="col-md-12 col-xl-6">
														<div class="form-group col-md-8">
															<label class="form-label">Default Range Input</label>
															<input type="range" class="w-100">
														</div>
													</div>
													<div class="col-md-12 col-xl-6">
														<div class="form-group col-md-8">
															<label class="form-label">Customized Input</label>
															<input type="range" class="form-range-control">
														</div>
													</div>
													<div class="col-md-12 col-xl-6">
														<div class="form-group col-md-8">
															<label class="form-label">Step Size Input Range</label>
															<input type="range" class="form-range-control" min="0" max="5" value="2">
														</div>
													</div>
													<div class="col-md-12 col-xl-6">
														<div class="form-group col-md-8">
															<label class="form-label">Disabled Input</label>
															<input type="range" class="form-range-control" disabled>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Input Range Styles</h3>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="row">
													<div class="col-md-12 col-xl-6">
														<div class="form-group col-md-8">
															<label class="form-label">Input Range with counter</label>
															<div class="range-group">
																<input type="range" class="form-range-control" min="0" max="100" value="10" onmousemove="inputRange1.value=value">
																<output class="border range-group-text br-5 p-2 ms-4" id="inputRange1"></output>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-xl-6">
														<div class="form-group col-md-8">
															<label class="form-label">Input Range Color</label>
															<input type="range" class="form-range-control range-primary">
														</div>
														<p class="text-muted">Use <span class="tag">form-range-conrol range-*</span> class to obtain colored input range.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Toggle Switches</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-6 my-1">
													<div class="example">
														<p class="card-sub-title">Default Switch</p>
														<div class="main-toggle-group d-flex flex-wrap">
															<div class="toggle">
																<span></span>
															</div>
															<div class="toggle toggle-secondary">
																<span></span>
															</div>
															<div class="toggle toggle-success">
																<span></span>
															</div>
															<div class="toggle toggle-info">
																<span></span>
															</div>
															<div class="toggle toggle-warning">
																<span></span>
															</div>
															<div class="toggle toggle-danger">
																<span></span>
															</div>
															<div class="toggle toggle-dark">
																<span></span>
															</div>
															<div class="toggle toggle-light">
																<span></span>
															</div>
														</div>
														<div class="main-toggle-group d-flex flex-wrap mt-3">
															<div class="toggle on">
																<span></span>
															</div>
															<div class="toggle toggle-secondary on">
																<span></span>
															</div>
															<div class="toggle toggle-success on">
																<span></span>
															</div>
															<div class="toggle toggle-info on">
																<span></span>
															</div>
															<div class="toggle toggle-warning on">
																<span></span>
															</div>
															<div class="toggle toggle-danger on">
																<span></span>
															</div>
															<div class="toggle toggle-dark on">
																<span></span>
															</div>
															<div class="toggle toggle-light on">
																<span></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-6 my-1">
													<div class="example">
														<p class="card-sub-title">Toggle Switch Style-01</p>
														<div class="main-toggle-group style1 d-flex flex-wrap">
															<div class="toggle">
																<span></span>
															</div>
															<div class="toggle toggle-secondary">
																<span></span>
															</div>
															<div class="toggle toggle-success">
																<span></span>
															</div>
															<div class="toggle toggle-info">
																<span></span>
															</div>
															<div class="toggle toggle-warning">
																<span></span>
															</div>
															<div class="toggle toggle-danger">
																<span></span>
															</div>
															<div class="toggle toggle-dark">
																<span></span>
															</div>
															<div class="toggle toggle-light">
																<span></span>
															</div>
														</div>
														<div class="main-toggle-group style1 d-flex flex-wrap mt-3">
															<div class="toggle on">
																<span></span>
															</div>
															<div class="toggle toggle-secondary on">
																<span></span>
															</div>
															<div class="toggle toggle-success on">
																<span></span>
															</div>
															<div class="toggle toggle-info on">
																<span></span>
															</div>
															<div class="toggle toggle-warning on">
																<span></span>
															</div>
															<div class="toggle toggle-danger on">
																<span></span>
															</div>
															<div class="toggle toggle-dark on">
																<span></span>
															</div>
															<div class="toggle toggle-light on">
																<span></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 mt-2">
													<div class="example">
														<p class="card-sub-title">Toggle Switch Style-02</p>
														<div class="d-flex flex-wrap">
															<div class="material-switch">
																<input id="uncheckedPrimarySwitch" name="switch01" type="checkbox"/>
																<label for="uncheckedPrimarySwitch" class="label-primary"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedSecondarySwitch" name="switch02" type="checkbox" />
																<label for="uncheckedSecondarySwitch" class="label-secondary"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedSuccessSwitch" name="switch03" type="checkbox"/>
																<label for="uncheckedSuccessSwitch" class="label-success"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedInfoSwitch" name="siwtch04" type="checkbox"/>
																<label for="uncheckedInfoSwitch" class="label-info"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedWarningSwitch" name="switch05" type="checkbox"/>
																<label for="uncheckedWarningSwitch" class="label-warning"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedDangerSwitch" name="switch06" type="checkbox"/>
																<label for="uncheckedDangerSwitch" class="label-danger"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedDarkSwitch" name="switch07" type="checkbox" />
																<label for="uncheckedDarkSwitch" class="label-dark"></label>
															</div>
															<div class="material-switch">
																<input id="uncheckedLightSwitch" name="switch08" type="checkbox" />
																<label for="uncheckedLightSwitch" class="label-light"></label>
															</div>
														</div>
														<div class="d-flex flex-wrap mt-3">
															<div class="material-switch">
																<input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox" checked/>
																<label for="someSwitchOptionPrimary" class="label-primary"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionSecondary" name="someSwitchOption002" type="checkbox" checked />
																<label for="someSwitchOptionSecondary" class="label-secondary"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionSuccess" name="someSwitchOption003" type="checkbox" checked/>
																<label for="someSwitchOptionSuccess" class="label-success"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionInfo" name="someSwitchOption004" type="checkbox" checked/>
																<label for="someSwitchOptionInfo" class="label-info"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionWarning" name="someSwitchOption005" type="checkbox" checked/>
																<label for="someSwitchOptionWarning" class="label-warning"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionDanger" name="someSwitchOption006" type="checkbox" checked/>
																<label for="someSwitchOptionDanger" class="label-danger"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionDark" name="someSwitchOption007" type="checkbox" checked />
																<label for="someSwitchOptionDark" class="label-dark"></label>
															</div>
															<div class="material-switch">
																<input id="someSwitchOptionLight" name="someSwitchOption008" type="checkbox" checked />
																<label for="someSwitchOptionLight" class="label-light"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Switch Sizes</h3>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-12 col-xl-6">
													<div class="example my-2">
														<div class="main-toggle-group d-sm-flex align-items-center mt-3">
															<div class="">
																<p class="text-muted m-0">Small size toggle switch <span class="tag">toggle-sm</span></p>
															</div>
															<div class="toggle toggle-sm my-1 on">
																<span></span>
															</div>
														</div>
														<div class="main-toggle-group d-sm-flex align-items-center my-4">
															<div class="">
																<p class="text-muted m-0">Default toggle switch</p>
															</div>
															<div class="toggle toggle-secondary my-1 on">
																<span></span>
															</div>
														</div>
														<div class="main-toggle-group d-sm-flex align-items-center">
															<div class="">
																<p class="text-muted m-0">Large size toggle switch <span class="tag">toggle-lg</span></p>
															</div>
															<div class="toggle toggle-lg toggle-success my-1 on">
																<span></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-12 col-xl-6">
													<div class="example my-2">
														<div class="main-toggle-group style1 d-sm-flex align-items-center mt-3">
															<div class="">
																<p class="text-muted m-0">Small size toggle switch <span class="tag">toggle-sm</span></p>
															</div>
															<div class="toggle toggle-sm my-1 on">
																<span></span>
															</div>
														</div>
														<div class="main-toggle-group style1 d-sm-flex align-items-center my-4">
															<div class="">
																<p class="text-muted m-0">Default toggle switch</p>
															</div>
															<div class="toggle toggle-secondary my-1 on">
																<span></span>
															</div>
														</div>
														<div class="main-toggle-group style1 d-sm-flex align-items-center">
															<div class="">
																<p class="text-muted m-0">Large size toggle switch <span class="tag">toggle-lg</span></p>
															</div>
															<div class="toggle toggle-lg toggle-success my-1 on">
																<span></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 mt-2">
													<div class="example">
														<div class="d-sm-flex align-items-center">
															<div class="">
																<p class="text-muted m-0">Small size toggle switch <span class="tag">toggle-sm</span></p>
															</div>
															<div class="material-switch toggle-sm">
																<input id="smallSwitchPrimary" name="smallSwitch" type="checkbox" checked/>
																<label for="smallSwitchPrimary" class="label-primary"></label>
															</div>
														</div>
														<div class="d-sm-flex align-items-center my-3">
															<div class="">
																<p class="text-muted m-0">medium size toggle switch</p>
															</div>
															<div class="material-switch">
																<input id="defaultSwitchSecondary" name="defaultSwitch" type="checkbox" checked />
																<label for="defaultSwitchSecondary" class="label-secondary"></label>
															</div>
														</div>
														<div class="d-sm-flex align-items-center">
															<div class="">
																<p class="text-muted m-0">large size toggle switch <span class="tag">toggle-lg</span></p>
															</div>
															<div class="material-switch toggle-lg">
																<input id="largeSwitchSuccess" name="largeSwitch" type="checkbox" checked/>
																<label for="largeSwitchSuccess" class="label-success"></label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Input Mask</h3>
										</div>
										<div class="card-body">
											<div class="row row-sm">
												<div class="col-lg-6 col-xl-3 col-sm-12">
													<div class="input-group my-1">
															<div class="input-group-text bg-primary-transparent text-primary">
																Date:
															</div>
															<input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
													</div><!-- input-group -->
												</div><!-- col-4 -->
												<div class="col-lg-6 col-xl-3 col-sm-12">
													<div class="input-group my-1">
															<div class="input-group-text bg-primary-transparent text-primary">
																Phone:
															</div>
														<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
													</div><!-- input-group -->
												</div>
												<div class="col-lg-6 col-xl-3 col-sm-12">
													<div class="input-group my-1">
															<div class="input-group-text bg-primary-transparent text-primary">
																Phone + Ext.:
															</div>
														<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
													</div><!-- input-group -->
												</div>
												<div class="col-lg-6 col-xl-3 col-sm-12">
													<div class="input-group my-1">
															<div class="input-group-text bg-primary-transparent text-primary">
																SSN:
															</div><!-- input-group-text -->
														<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h4 class="card-title mb-1">Color Picker</h4>
										</div>
										<div class="card-body">
											<div class="example">
												<div class="d-sm-flex flex-wrap justify-content-around">
													<div class="text-center my-sm-0 my-2">
														<label for="default-clr-pickr" class="default-pickr">Default</label>
														<input type="color" class="wpx-30 h-30 mx-auto form-control p-0 border-0" value="#77bc21" id="default-clr-pickr">
													</div>
													<div class="text-center my-sm-0 my-2">
														<div class="theme-container color-pickr-btn"></div>
														<div class="pickr-container"></div>
													</div>
													<div class="text-center my-sm-0 my-2">
														<div class="theme-container1 color-pickr-btn"></div>
														<div class="pickr-container1"></div>
													</div>
													<div class="text-center my-sm-0 my-2">
														<div class="theme-container2 color-pickr-btn"></div>
														<div class="pickr-container2"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row Closed -->

                            @endsection

        @section('scripts')

		<!-- INPUT MASK JS-->
		<script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

		<!--Internal  jquery.maskedinput js -->
		<script src="{{asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

		<!--Color Picker js-->
		<script src="{{asset('assets/plugins/colorpicker/pickr.es5.min.js')}}"></script>

		<!--Internal Color Picker js-->
		<script src="{{asset('assets/js/colorpicker.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- FORM ELEMENTS JS -->
		<script src="{{asset('assets/js/form-elements.js')}}"></script>

        @endsection
