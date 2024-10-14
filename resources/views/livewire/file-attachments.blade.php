@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">File Attachments</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">File Attachments</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row sidemenu-height">
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">File Attachments</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-close btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</button>
													<button type="button" class="btn btn-close  btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</button>
													<button type="button" class="btn btn-close  btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</button>
													<button type="button" class="btn btn-close  btn-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-close  btn-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</button>
													<button type="button" class="btn btn-close  btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</button>
													<button type="button" class="btn btn-close  btn-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</button>
													<button type="button" class="btn btn-close  btn-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded File Attachments</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Outline File Attachments</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-close  btn-outline-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</button>
													<button type="button" class="btn btn-close  btn-outline-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</button>
													<button type="button" class="btn btn-close  btn-outline-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</button>
													<button type="button" class="btn btn-close  btn-outline-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-close  btn-outline-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</button>
													<button type="button" class="btn btn-close  btn-outline-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</button>
													<button type="button" class="btn btn-close  btn-outline-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-outline-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</button>
													<button type="button" class="btn btn-close  btn-outline-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded Outline File Attachments</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-outline-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-outline-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Light File Attachments</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-primary-light"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-primary-light text-primary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary-light"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</button>
													<button type="button" class="btn btn-close  btn-secondary-light text-secondary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-info-light"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</button>
													<button type="button" class="btn btn-close  btn-info-light text-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-warning-light"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</button>
													<button type="button" class="btn btn-close  btn-warning-light text-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-success-light"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-close  btn-success-light text-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-danger-light"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</button>
													<button type="button" class="btn btn-close  btn-danger-light text-danger" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-orange-light"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</button>
													<button type="button" class="btn btn-close  btn-orange-light text-orange" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-cyan-light"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</button>
													<button type="button" class="btn btn-close  btn-cyan-light text-cyan" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded Light File Attachments</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-primary-light"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-primary-light text-primary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-secondary-light"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-secondary-light text-secondary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-info-light"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-info-light text-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-warning-light"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-warning-light text-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-success-light"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-success-light text-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-danger-light"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-danger-light text-danger" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-orange-light"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-orange-light text-orange" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-pill attachment-pill btn-cyan-light"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</button>
													<button type="button" class="btn btn-pill attachment-pill btn-close  btn-cyan-light text-cyan" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">File Attachment Sizes</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-sm btn-primary text-white"><i class="mdi mdi-file-image tx-24 me-2"></i>Image01..._jpg</button>
													<button type="button" class="btn btn-close  btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary"><i class="mdi mdi-file-excel tx-24 me-2"></i>Document.exl</button>
													<button type="button" class="btn btn-close  btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>

												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-lg btn-info"><i class="mdi mdi-file-pdf tx-24 me-2"></i>AMN0012.pdf</button>
													<button type="button" class="btn btn-close  btn-lg btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">File Attachments With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-close btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded File Attachments With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Outline File Attachments With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-outline-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-outline-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded Outline File Attachments With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-primary"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-secondary"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-info"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-warning"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-warning text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-success"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-success text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-danger"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-danger text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-orange"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-orange text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-outline-cyan"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-outline-cyan text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Light File Attachments With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-primary-light"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-primary-light text-primary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-secondary-light"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-secondary-light text-secondary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-info-light"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-info-light text-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-warning-light"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-warning-light text-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-success-light"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-success-light text-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-danger-light"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-danger-light text-danger" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-orange-light"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-orange-light text-orange" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-cyan-light"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-cyan-light text-cyan" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Rounded Light File Attachments With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-primary-light"><i class="mdi mdi-file-image tx-24 me-1"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-primary-light text-primary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-secondary-light"><i class="mdi mdi-music tx-24 me-1"></i>music-mp3</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-secondary-light text-secondary" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-info-light"><i class="mdi mdi-file-video tx-24 me-1"></i>video0014...-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-info-light text-info" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-warning-light"><i class="mdi mdi-file-excel tx-24 me-1"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-warning-light text-warning" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-success-light"><i class="mdi mdi-file-pdf tx-24 me-1"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-success-light text-success" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-danger-light"><i class="mdi mdi-zip-box tx-24 me-1"></i>design00123.zip</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-danger-light text-danger" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-orange-light"><i class="mdi mdi-file-powerpoint  tx-24 me-1"></i>prsentation.ppt</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-orange-light text-orange" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-cyan-light"><i class="mdi mdi-volume-high tx-24 me-1"></i>audio-mp4</a>
													<a  href="javascript:void(0);" class="btn btn-pill attachment-pill btn-close  btn-cyan-light text-cyan" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Attachment Sizes With Anchor Link</h3>
										</div>
										<div class="card-body">
											<div class="tags">
												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-sm btn-primary text-white"><i class="mdi mdi-file-image tx-24 me-2"></i>Image01..._jpg</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-sm btn-primary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-secondary"><i class="mdi mdi-file-excel tx-24 me-2"></i>Document.exl</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-secondary text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>

												<div class="btn-group tag-attachments m-2" role="group" aria-label="Basic example">
													<a  href="javascript:void(0);" class="btn btn-lg btn-info"><i class="mdi mdi-file-pdf tx-24 me-2"></i>AMN0012.pdf</a>
													<a  href="javascript:void(0);" class="btn btn-close  btn-lg btn-info text-white" aria-label="Close">
														<span aria-hidden="true">×</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Image Attachment Tags</h3>
										</div>
										<div class="card-body">
											<div class="h-100 attached-file-container">
												<div class="attached-file-image">
													<a href="javascript:void(0)">
														<img class="br-5 wp-100" src="{{asset('assets/images/media/1.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="icons">
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-trash"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-mail"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Image Attachment Tags</h3>
										</div>
										<div class="card-body">
											<div class="h-100  attached-file-container">
												<div class="attached-file-image">
													<a href="javascript:void(0)">
														<img class="br-5 wp-100" src="{{asset('assets/images/media/2.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="icons">
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-trash"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-mail"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Image Attachment Tags</h3>
										</div>
										<div class="card-body">
											<div class="h-100 attached-file-container">
												<div class="attached-file-image">
													<a href="javascript:void(0)">
														<img class="br-5 wp-100" src="{{asset('assets/images/media/3.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="icons">
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-trash"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-mail"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Image Attachment Tags</h3>
										</div>
										<div class="card-body">
											<div class="h-100  attached-file-container">
												<div class="pro-img-box attached-file-image">
													<a href="javascript:void(0)">
														<img class="br-5 wp-100" src="{{asset('assets/images/media/4.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="icons">
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-activity"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-trash"></i></button></li>
														<li class="me-1"><button type="button" class="btn btn-icon  btn-primary"><i class="fe fe-mail"></i></button></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

                            @endsection

        @section('scripts')

		<!-- Internal Input tags js-->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

        @endsection
