@extends('layouts.app')

        @section('styles')

        <!-- Animate css -->
        <link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" />

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Form Editor</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Form Editors</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Summernote Editor</h3>
										</div>
										<div class="card-body">
											<div id="summernote"><p>Hello Summernote</p></div>
										</div>
									</div>
								</div>
							</div>
							<!--End Row-->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Form Editor style1</h3>
										</div>
										<div class="card-body">
											<textarea class="content" name="editor-style01"></textarea>
										</div>
									</div>
								</div>
							</div>
							<!--End Row-->

							<!-- Row -->
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Form Editor
											</div>
										</div>
										<div class="card-body">
											<div class="ql-wrapper ql-wrapper-demo">
												<div id="quillEditor">
													<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
													<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

							<!-- Row -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header border-bottom">
											<div class="card-title">
												Form Editor in Modal
											</div>
										</div>
										<div class="card-body">
											<div class="example text-center">
												<a class="btn btn-primary" data-bs-target="#modalQuill" data-bs-toggle="modal" href="javascript:void(0)">View Live Demo</a>
											</div><!-- pd-y-30 -->
											<div class="modal">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header pd-20">
															<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body pd-0">
															<div class="ql-wrapper ql-wrapper-modal ht-250">
																<div class="flex-1" id="quillEditorModal">
																	<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
																	<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
																</div>
															</div>
														</div>
														<div class="modal-footer pd-20">
															<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

							<!-- Row -->
							<div class="row ">
								<div class="col-md-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<div class="card-title">
												From Inline-Edit Editor
											</div>
										</div>
										<div class="card-body">
											<div class="example" id="scrolling-container">
												<div id="quillInline">
													<h2>Try to select me and edit</h2>
													<p><br></p>
													<p>A unseen word door then at if, stood thy seat nothing saintly, stock god deep the not i before, my nothing and chamber and sad one let whether lattice. Entreating you in sure enchanted before bust raven. That swung agreeing door bird hear one out chamber sure. You felt is doubting pondered chamber within. Is is plainly that lent quoth.</p>
													<p>Hath still ah you upon i word tossed scarcely then. Tempest thy floating ashore prophet other divining he as. Never take with my i said, raven the what answer word on myself more sure, gloated entrance was stepped terrors, clasp lenore floating when flitting the fancy stood you all. Bird stillness whether i the. Cushions hesitating the only of within flown rare. This angels whose long head of, late lies so vainly whom explore still is. Little more heart plutonian.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->

                            @endsection

            @section('modal')

            <!--Modal-->
            <div class="modal fade"  id="modalQuill">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body pd-0">
                            <div class="ql-wrapper ql-wrapper-modal">
                                <div class="flex-1" id="quillEditorModal2">
                                    <p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
                                    <p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button>
                            <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close" >Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Modal-->

            @endsection

        @section('scripts')

		<!-- INTERNAL Summernote Editor js -->
		<script src="{{asset('assets/plugins/summernote-editor/summernote1.js')}}"></script>
		<script src="{{asset('assets/js/summernote.js')}}"></script>

		<!-- WYSIWYG Editor JS -->
		<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
		<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

		<!-- FORMEDITOR JS -->
		<script src="{{asset('assets/plugins/quill/quill.min.js')}}"></script>
		<script src="{{asset('assets/js/form-editor2.js')}}"></script>

        @endsection
