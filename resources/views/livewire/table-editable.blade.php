@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Data Tables</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
										<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Basic Editable Datatable</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table class="table editable-table table-nowrap table-bordered table-edit">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Age</th>
																<th>Gender</th>
																<th>Edit</th>
															</tr>
														</thead>
														<tbody>
															<tr data-id="1">
																<td data-field="id">1</td>
																<td data-field="name">David McHenry</td>
																<td data-field="age">24</td>
																<td data-field="gender">Male</td>
																<td style="width: 100px">
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="2">
																<td data-field="id">2</td>
																<td data-field="name">Frank Kirk</td>
																<td data-field="age">22</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="3">
																<td data-field="id">3</td>
																<td data-field="name">Marie Rose</td>
																<td data-field="age">21</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="4">
																<td data-field="id">4</td>
																<td data-field="name">Tyler Durden</td>
																<td data-field="age">25</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="5">
																<td data-field="id">5</td>
																<td data-field="name">Skyler White</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="6">
																<td data-field="id">6</td>
																<td data-field="name">Marie Pam</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="7">
																<td data-field="id">7</td>
																<td data-field="name">Chris Morris</td>
																<td data-field="age">29</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="8">
																<td data-field="id">8</td>
																<td data-field="name">Sam Smith</td>
																<td data-field="age">23</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="9">
																<td data-field="id">9</td>
																<td data-field="name">Catelyn Stark</td>
																<td data-field="age">28</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="10">
																<td data-field="id">10</td>
																<td data-field="name">Christopher Ron</td>
																<td data-field="age">26</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Responsive Editable Datatable</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table id="editable-responsive-table" class="table editable-table table-nowrap table-bordered table-edit wp-100">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Age</th>
																<th>Gender</th>
																<th>Edit</th>
															</tr>
														</thead>
														<tbody>
															<tr data-id="1">
																<td data-field="id">1</td>
																<td data-field="name">David McHenry</td>
																<td data-field="age">24</td>
																<td data-field="gender">Male</td>
																<td style="width: 100px">
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="2">
																<td data-field="id">2</td>
																<td data-field="name">Frank Kirk</td>
																<td data-field="age">22</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="3">
																<td data-field="id">3</td>
																<td data-field="name">Marie Rose</td>
																<td data-field="age">21</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="4">
																<td data-field="id">4</td>
																<td data-field="name">Tyler Durden</td>
																<td data-field="age">25</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="5">
																<td data-field="id">5</td>
																<td data-field="name">Skyler White</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="6">
																<td data-field="id">6</td>
																<td data-field="name">Marie Pam</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="7">
																<td data-field="id">7</td>
																<td data-field="name">Chris Morris</td>
																<td data-field="age">29</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="8">
																<td data-field="id">8</td>
																<td data-field="name">Sam Smith</td>
																<td data-field="age">23</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="9">
																<td data-field="id">9</td>
																<td data-field="name">Catelyn Stark</td>
																<td data-field="age">28</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="10">
																<td data-field="id">10</td>
																<td data-field="name">Christopher Ron</td>
																<td data-field="age">26</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Editable File Export Datatable</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive export-table">
													<table id="editable-file-datatable" class="table editable-table table-nowrap table-bordered table-edit wp-100">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Age</th>
																<th>Gender</th>
																<th>Edit</th>
															</tr>
														</thead>
														<tbody>
															<tr data-id="1">
																<td data-field="id">1</td>
																<td data-field="name">David McHenry</td>
																<td data-field="age">24</td>
																<td data-field="gender">Male</td>
																<td style="width: 100px">
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="2">
																<td data-field="id">2</td>
																<td data-field="name">Frank Kirk</td>
																<td data-field="age">22</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="3">
																<td data-field="id">3</td>
																<td data-field="name">Marie Rose</td>
																<td data-field="age">21</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="4">
																<td data-field="id">4</td>
																<td data-field="name">Tyler Durden</td>
																<td data-field="age">25</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="5">
																<td data-field="id">5</td>
																<td data-field="name">Skyler White</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="6">
																<td data-field="id">6</td>
																<td data-field="name">Marie Pam</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="7">
																<td data-field="id">7</td>
																<td data-field="name">Chris Morris</td>
																<td data-field="age">29</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="8">
																<td data-field="id">8</td>
																<td data-field="name">Sam Smith</td>
																<td data-field="age">23</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="9">
																<td data-field="id">9</td>
																<td data-field="name">Catelyn Stark</td>
																<td data-field="age">28</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="10">
																<td data-field="id">10</td>
																<td data-field="name">Christopher Ron</td>
																<td data-field="age">26</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Editable & Deletable Datatable</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive deleted-table">
													<button id="button" class="btn btn-primary mb-4 data-table-btn">Delete selected row</button>
													<table id="delete-datatable" class="table editable-table table-nowrap table-bordered table-edit">
														<thead>
															<tr>
																<th>ID</th>
																<th>Name</th>
																<th>Age</th>
																<th>Gender</th>
																<th>Edit</th>
															</tr>
														</thead>
														<tbody>
															<tr data-id="1">
																<td data-field="id">1</td>
																<td data-field="name">David McHenry</td>
																<td data-field="age">24</td>
																<td data-field="gender">Male</td>
																<td style="width: 100px">
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="2">
																<td data-field="id">2</td>
																<td data-field="name">Frank Kirk</td>
																<td data-field="age">22</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="3">
																<td data-field="id">3</td>
																<td data-field="name">Marie Rose</td>
																<td data-field="age">21</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="4">
																<td data-field="id">4</td>
																<td data-field="name">Tyler Durden</td>
																<td data-field="age">25</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="5">
																<td data-field="id">5</td>
																<td data-field="name">Skyler White</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="6">
																<td data-field="id">6</td>
																<td data-field="name">Marie Pam</td>
																<td data-field="age">27</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="7">
																<td data-field="id">7</td>
																<td data-field="name">Chris Morris</td>
																<td data-field="age">29</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="8">
																<td data-field="id">8</td>
																<td data-field="name">Sam Smith</td>
																<td data-field="age">23</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="9">
																<td data-field="id">9</td>
																<td data-field="name">Catelyn Stark</td>
																<td data-field="age">28</td>
																<td data-field="gender" >Female</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
															<tr data-id="10">
																<td data-field="id">10</td>
																<td data-field="name">Christopher Ron</td>
																<td data-field="age">26</td>
																<td data-field="gender" >Male</td>
																<td>
																	<a class="btn btn-primary fs-14 text-white edit-icn" title="Edit">
																		<i class="fe fe-edit"></i>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- INTERNAL SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- DATA TABLE JS-->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- TABLE EDITS JS-->
		<script src="{{asset('assets/plugins/jQuery-table-edits/table-edits.min.js')}}"></script>
		<script src="{{asset('assets/plugins/jQuery-table-edits/table-edits.js')}}"></script>

		<!-- INTERNAL DATATABLES JS -->
		<script src="{{asset('assets/js/table-editable.js')}}"></script>

        @endsection
