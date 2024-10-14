@extends('layouts.app')

        @section('styles')

        @endsection

                            @section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div>
                                    <h1 class="page-title">Chat</h1>
                                </div>
                                <div class="ms-auto pageheader-btn">
                                    <ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
										<li class="breadcrumb-item active" aria-current="page">Chat</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-deck">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                                    <div class="card  overflow-scroll">
                                        <div class="main-content-app pt-0">
                                            <div class="main-content-left main-content-left-chat">
                                                <div class="card-body d-flex">
                                                    <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/faces/6.jpg')}}"></div>
                                                    <div class="main-chat-msg-name">
                                                        <p class="text-normal mb-0 text-14">Elena Gilbert</p>
                                                        <span class="dot-label bg-success"></span><small class="me-3">Available</small>
                                                    </div>
                                                    <nav class="nav ms-auto">
                                                        <div class="dropdown">
                                                            <a class="nav-link text-muted fs-20" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a class="dropdown-item" href="#"><i class="fe fe-user me-1"></i> Profile</a>
                                                                <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
                                                                <a class="dropdown-item" href="#"><i class="fe fe-users me-1"></i> New Group</a>
                                                                <a class="dropdown-item" href="#"><i class="fe fe-settings me-1"></i> Settings</a>
                                                                <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>

                                                <!-- main-chat-header -->
                                                <div class="card-body overflow-scroll border-bottom">
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control" placeholder="Search ...">
                                                        <span class="input-group-text btn btn-primary text-white">Search</span>
                                                    </div>
                                                    <div class="main-chat-contacts-wrapper p-0">
                                                        <label class="form-label mb-2">Online Users</label>
                                                        <div class="lSSlideOuter main-chat-contacts-slider ">
                                                            <div class="main-chat-contacts-slider lSSlideWrapper usingCss overflow-scroll">
                                                                <div class="main-chat-contacts lightSlider lsGrab lSSlide ps-0" id="chatActiveContacts" style="width: 464px; height: 59px; padding-bottom: 0%;">
                                                                    <div class="lslide active">
                                                                        <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/5.jpg')}}&quot;) center center;">
                                                                <span class="avatar-status bg-green"></span>
                                                                        </span><small>Ariana</small>
                                                                    </div>
                                                                    <div class="lslide">
                                                                        <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/9.jpg')}}&quot;) center center;">
                                                                <span class="avatar-status bg-green"></span>
                                                                        </span><small>Monino</small>
                                                                    </div>
                                                                    <div class="lslide">
                                                                        <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/6.jpg')}}&quot;) center center;">
                                                                <span class="avatar-status bg-green"></span>
                                                                        </span><small>Reynante</small>
                                                                    </div>
                                                                    <div class="lslide">
                                                                        <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/7.jpg')}}&quot;) center center;">
                                                                <span class="avatar-status bg-green"></span>
                                                                        </span><small>Labares</small>
                                                                    </div>
                                                                    <div class="lslide">
                                                                        <span class="avatar avatar-md bradius cover-image" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}" style="background: url(&quot;{{asset('assets/images/users/5.jpg')}}&quot;) center center;">
                                                                <span class="avatar-status bg-green"></span>
                                                                        </span><small>Rolando</small>
                                                                    </div>
                                                                    <div class="lslide">
                                                                        <div class="avatar avatar-md bradius bg-primary-transparent text-primary">
                                                                            <i class="fe fe-plus"></i>
                                                                        </div><small>More</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- main-active-contacts -->
                                                    </div>
                                                </div>
                                                <div class="tab-menu-heading border-0">
                                                    <div class="tabs-menu">
                                                        <ul class="nav panel-tabs">
                                                            <li><a href="#ChatList" class="me-2 active mb-2" data-bs-toggle="tab">Messages</a></li>
                                                            <li><a href="#ChatGroups" class="me-2 mb-2"  data-bs-toggle="tab">Groups</a></li>
                                                            <li><a href="#ChatContacts" class="me-2 mb-2"  data-bs-toggle="tab">Contacts</a></li>
                                                            <li><a href="#ChatContacts1" data-bs-toggle="tab">Networks</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-content main-chat-list flex-2">
                                                    <div class="tab-pane active" id="ChatList">
                                                        <div class="main-chat-list tab-pane">
                                                            <a class="media new border-top-0" href="#">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('assets/images/users/5.jpg')}}">
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Raymart Santiago</span> <span>10 min</span>
                                                                    </div>
                                                                    <p> Hey! there I'm available </p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user">
                                                                    <img alt="" src="{{asset('assets/images/users/6.jpg')}}"> <span>3</span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Ariana Monino</span> <span>30 min</span>
                                                                    </div>
                                                                    <p>Good Morning</p>
                                                                </div>
                                                            </a>
                                                            <a class="media selected" href="#">
                                                                <div class="main-img-user online"><img alt="" src="{{asset('assets/images/users/9.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Saul Goodmate</span> <span>9.40 am</span>
                                                                    </div>
                                                                    <p> Nice to meet you </p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <span class="avatar avatar-md brround bg-danger-transparent text-danger">J</span>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Joyce Chua</span> <span>11.20 am</span>
                                                                    </div>
                                                                    <p> Hi, How are you? </p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user"><img alt="" src="{{asset('assets/images/users/4.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Rolando Paloso</span> <span>1.38 pm</span>
                                                                    </div>
                                                                    <p> Hey! there I'm available </p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user">
                                                                    <div class="avatar avatar-md brround bg-primary-transparent text-primary">D</div><span>1</span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Dexter dela Cruz</span> <span>4.08 pm</span>
                                                                    </div>
                                                                    <p>Typing...</p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user"><img alt="" src="{{asset('assets/images/users/20.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Maricel Villalon</span> <span>8.09 pm</span>
                                                                    </div>
                                                                    <p> Hey! there I'm available </p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <span class="avatar avatar-md brround bg-success-transparent text-success">M</span>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Maryjane Pechon</span> <span>1 day ago</span>
                                                                    </div>
                                                                    <p>I have some work</p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user"><img alt="" src="{{asset('assets/images/users/5.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Lovely Dela Cruz</span> <span>3 days ago</span>
                                                                    </div>
                                                                    <p>I have some work</p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="avatar avatar-md brround bg-secondary-transparent"><i class="fe fe-user text-secondary"></i></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Daniel Padilla</span> <span>5 days ago</span>
                                                                    </div>
                                                                    <p>I have some work</p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user"><img alt="" src="{{asset('assets/images/users/3.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>John Pratts</span> <span>20/06/2021</span>
                                                                    </div>
                                                                    <p>I have some work</p>
                                                                </div>
                                                            </a>
                                                            <a class="media new" href="#">
                                                                <div class="main-img-user"><img alt="" src="{{asset('assets/images/users/7.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Socrates Itumay</span> <span>18/07/2021</span>
                                                                    </div>
                                                                    <p> Hey! there I'm available </p>
                                                                </div>
                                                            </a>
                                                            <a class="media border-bottom-0" href="#">
                                                                <div class="main-img-user"><img alt="" src="{{asset('assets/images/users/6.jpg')}}"></div>
                                                                <div class="media-body">
                                                                    <div class="media-contact-name">
                                                                        <span>Samuel Lerin</span> <span>29/07/2021</span>
                                                                    </div>
                                                                    <p> Hey! there I'm available </p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!-- main-chat-list -->
                                                    </div>
                                                    <!-- main-chat-list -->
                                                    <div class="tab-pane" id="ChatGroups">
                                                        <a href="#" class="d-flex align-items-center media border-top-0">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online text-primary">
                                                                    <img alt="" src="{{asset('assets/images/users/4.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Web Designers</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <i class="contact-status text-primary fe fe-user-plus"></i> </div>
                                                        </a>
                                                        <a href="#" class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('assets/images/users/4.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Project 2020</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <i class="contact-status text-primary fe fe-user-plus"></i> </div>
                                                        </a>
                                                        <a href="#" class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('assets/images/users/9.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Project 2021</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <i class="contact-status text-primary fe fe-user-plus"></i> </div>
                                                        </a>
                                                        <a href="#" class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('assets/images/users/12.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Freshers</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <i class="contact-status text-primary fe fe-user-plus"></i> </div>
                                                        </a>
                                                        <a href="#" class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('assets/images/users/6.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Experienced</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <i class="contact-status text-primary fe fe-user-plus"></i> </div>
                                                        </a>
                                                        <a href="#" class="d-flex align-items-center media">
                                                            <div class="mb-0 me-2">
                                                                <div class="main-img-user online">
                                                                    <img alt="" src="{{asset('assets/images/users/7.jpg')}}"> <span>2</span>
                                                                </div>
                                                            </div>
                                                            <div class="align-items-center justify-content-between">
                                                                <div class="media-body ms-2">
                                                                    <div class="media-contact-name">
                                                                        <span>Freelancer</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto"> <i class="contact-status text-primary fe fe-user-plus"></i> </div>
                                                        </a>
                                                        <div class="text-center p-5">
                                                            <a href="#" class="btn btn-outline-primary">Create New Group</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="ChatContacts">
                                                        <div>
                                                            <div class="py-4 px-6 fw-bold">A</div>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/3.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Anna Sthesia</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/9.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Abraham Clark</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/4.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Anderson</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Office</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mt-4">
                                                            <div class="py-4 px-6 fw-bold">B</div>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/5.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Bernadette</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mt-4">
                                                            <div class="py-4 px-6 fw-bold">C</div>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/5.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Cameron Watson</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/20.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Christopher Arnold</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/2.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Clarkson Gray</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mt-4">
                                                            <div class="py-4 px-6 fw-bold">D</div>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/7.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Deirdre Short</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Home</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/12.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Dylan Gill</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Mobile</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/1.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Donna Davies</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Office</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="mt-4">
                                                            <div class="py-4 px-6 fw-bold">E</div>
                                                            <a href="#" class="d-flex align-items-center media">
                                                                <div class="mb-0 me-2">
                                                                    <div class="main-img-user online">
                                                                        <img alt="" src="{{asset('assets/images/users/4.jpg')}}"> <span>2</span>
                                                                    </div>
                                                                </div>
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-2">
                                                                        <div class="media-contact-name">
                                                                            <span>Elizabeth Scott</span>
                                                                            <span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="text-muted fs-13">Office</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <i class="contact-status text-primary fe fe-message-square me-2"></i>
                                                                    <i class="contact-status text-success fe fe-phone-call me-2"></i>
                                                                    <i class="contact-status text-danger fe fe-video me-2"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="ChatContacts1">
                                                        <div>
                                                            <div class="d-flex py-4 px-6 fw-bold"><span>Networks</span>
                                                                <a class="ms-auto"><i class="fe fe-plus"></i></a>
                                                            </div>
                                                            <a href="#" class="align-items-center media">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-4">
                                                                        <div class="media-contact-name">
                                                                            <span>Work</span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="align-items-center media">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-4">
                                                                        <div class="media-contact-name">
                                                                            <span>Freelancer</span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="align-items-center media">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-4">
                                                                        <div class="media-contact-name">
                                                                            <span>Personal</span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex py-4 px-6 fw-bold"><span>Rooms</span>
                                                                <a class="ms-auto"><i class="fe fe-plus"></i></a>
                                                            </div>
                                                            <a href="#" class="align-items-center media">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-4">
                                                                        <div class="media-contact-name">
                                                                            <span>Project Managers</span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="align-items-center media">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-4">
                                                                        <div class="media-contact-name">
                                                                            <span>Designers</span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="align-items-center media">
                                                                <div class="align-items-center justify-content-between">
                                                                    <div class="media-body ms-4">
                                                                        <div class="media-contact-name">
                                                                            <span>Developers</span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <div class="d-flex py-4 px-6 fw-bold"><span>On Hand Talk</span>
                                                                <a class="ms-auto"><i class="fe fe-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- main-chat-list -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                                    <div class="card">
                                        <div class="main-content-app pt-0">
                                            <div class="main-content-body main-content-body-chat h-100">
                                                <div class="main-chat-header pt-3 d-block d-sm-flex">
                                                    <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/1.jpg')}}"></div>
                                                    <div class="main-chat-msg-name mt-2">
                                                        <p class="mb-0">Saul Goodmate</p>
                                                        <span class="dot-label bg-success"></span><small class="me-3">online</small>
                                                    </div>
                                                    <nav class="nav">
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Search">
                                                                <button class="btn ripple btn-primary input-group-text text-white border-0" type="button"><i class="fe fe-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                </div>
                                                <!-- main-chat-header -->
                                                <div class="main-chat-body flex-2" id="ChatBody">
                                                    <div class="content-inner">
                                                        <label class="main-chat-time"><span>2 days ago</span></label>
                                                        <div class="media flex-row-reverse chat-right">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/20.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    rhoncus ut, imperdiet a, venenatis vitae, justo...
                                                                </div>
                                                                <div>
                                                                    <span>9:48 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media chat-left">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/1.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                                </div>
                                                                <div>
                                                                    <span>9:32 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse chat-right">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/20.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    <span class="text-dark"><span><i class="fa fa-image fs-13 text-muted px-3"></i></span><span class="fs-13 mt-1"> Image_attach.jpg </span>
                                                                    <i class="fe fe-download mt-3 ms-4 text-muted pe-2"></i>
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <span>11:22 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="main-chat-time"><span>Yesterday</span></label>
                                                        <div class="media chat-left">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/1.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                                </div>
                                                                <div>
                                                                    <span>9:32 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse chat-right">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/20.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    Nullam dictum felis eu pede mollis pretium
                                                                </div>
                                                                <div>
                                                                    <span>9:48 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><label class="main-chat-time"><span>Today</span></label>
                                                        <div class="media chat-left">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/1.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Maecenas tempus, tellus eget condimentum rhoncus
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    <img alt="avatar" class="w-10 h-10" src="{{asset('assets/images/media/3.jpg')}}">
                                                                    <img alt="avatar" class="w-10 h-10" src="{{asset('assets/images/media/4.jpg')}}">
                                                                    <img alt="avatar" class="w-10 h-10" src="{{asset('assets/images/media/5.jpg')}}">
                                                                </div>
                                                                <div>
                                                                    <span>10:12 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media flex-row-reverse chat-right">
                                                            <div class="main-img-user online"><img alt="avatar" src="{{asset('assets/images/users/20.jpg')}}"></div>
                                                            <div class="media-body">
                                                                <div class="main-msg-wrapper">
                                                                    Maecenas tempus, tellus eget condimentum rhoncus
                                                                </div>
                                                                <div class="main-msg-wrapper">
                                                                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
                                                                </div>
                                                                <div>
                                                                    <span>09:40 am</span> <a href="javascript:void(0)"><i class="icon ion-android-more-vertical"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="main-chat-footer pt-5">
                                                    <input class="form-control" placeholder="Type your message here..." type="text">
                                                    <a class="nav-link" href="javascript:void(0)"><i class="fe fe-paperclip"></i></a>
                                                    <button type="button" class="btn btn-icon  btn-primary brround"><i class="fa fa-paper-plane-o"></i></button>
                                                    <nav class="nav">
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                                    <div class="card">
                                        <div class="card-body profile-details-main pb-0">
                                            <div class="main-content-app">
                                                <nav class="nav float-end">
                                                    <div class="dropdown">
                                                        <a class="nav-link text-muted fs-20 p-0 ps-3" href="javascript:void(0)" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-start">
                                                            <a class="dropdown-item" href="#"><i class="fe fe-user me-1"></i> Profile</a>
                                                            <a class="dropdown-item" href="#"><i class="fe fe-edit me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="#"><i class="fe fe-users me-1"></i> New Group</a>
                                                            <a class="dropdown-item" href="#"><i class="fe fe-settings me-1"></i> Settings</a>
                                                            <a class="dropdown-item" href="#"><i class="fe fe-trash-2 me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </nav>

                                                <div class="text-center chat-image p-4 pb-0 mb-4 br-5">
                                                    <div class="rounded-circle chat-profile">
                                                        <a class="rounded-circle" href="{{url('profile')}}"><img alt="profile-avatar" src="{{asset('assets/images/users/1.jpg')}}" class="avatar avatar-xl rounded-circle"></a>
                                                    </div>
                                                    <div class="main-chat-msg-name">
                                                        <a href="{{url('profile')}}">
                                                            <h5 class="mb-1 text-dark fw-semibold">Saul Goodmate</h5>
                                                        </a>
                                                        <span class="dot-label bg-success"></span><small class="me-3">Available</small>
                                                        <p class="text-muted mt-0 mb-1 pt-0 fs-13">Senior Web Designer</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-3">Contact Details :</h6>
                                                    <div class="d-flex mb-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill chat-profile me-2" href="javascript:void(0)"><i class="fe fe-mail"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-semibold mb-0">Email</p>
                                                            <p class="fs-12 text-muted">elenagilbert@spruko.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-2 mt-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill chat-profile me-2" href="javascript:void(0)"><i class="fe fe-phone"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-semibold mb-0">Phone</p>
                                                            <p class="fs-12 text-muted">+773(11)-16-337.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-2 mt-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill chat-profile me-2" href="javascript:void(0)"><i class="fe fe-map-pin"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-semibold mb-0">Address</p>
                                                            <p class="fs-12 text-muted">2nd street,houston texas,united states.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mb-2 mt-2">
                                                        <div>
                                                            <a class="nav-link border rounded-pill chat-profile me-2" href="javascript:void(0)"><i class="fe fe-linkedin"></i></a>
                                                        </div>
                                                        <div class="ms-2">
                                                            <p class="fs-13 fw-semibold mb-0">Linkedin</p>
                                                            <p class="fs-12 text-muted">@895434</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mt-5 mb-0">Shared Files :</h6>
                                                    <div class="border-0 p-0 mb-4 pt-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="ps-0 me-3"><i class="fa fa-folder-open shared-files text-muted"></i></div>
                                                            <div class="d-block w-100">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="mt-0">
                                                                        <h5 class="mb-1 fs-13 fw-semibold text-dark"> Demo_Document</h5>
                                                                        <p class="mb-0 fs-13 text-muted">ppt<span class="fs-11 ms-2">1.2 mb</span></p>
                                                                    </div>
                                                                    <a href="javascript:void(0)" class="ms-auto fs-14 text-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fe fe-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-0 p-0 mb-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="ps-0 me-3"><i class="fa fa-image shared-files text-muted"></i></div>
                                                            <div class="d-block w-100">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="mt-0">
                                                                        <h5 class="mb-1 fs-13 fw-semibold text-dark">Image_attachment</h5>
                                                                        <p class="mb-0 fs-13 text-muted">img<span class="fs-11 ms-2">12 mb</span></p>
                                                                    </div>
                                                                    <a href="javascript:void(0)" class="ms-auto fs-14 text-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fe fe-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="border-0 p-0 mb-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="ps-0 me-3"><i class="fa fa-envelope shared-files text-muted"></i></div>
                                                            <div class="d-block w-100">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="mt-0">
                                                                        <h5 class="mb-1 fs-13 fw-semibold text-dark"> Video_attachment</h5>
                                                                        <p class="mb-0 fs-13 text-muted">Video<span class="fs-12 ms-2">16 mb</span></p>
                                                                    </div>
                                                                    <a href="javascript:void(0)" class="ms-auto fs-14 text-default" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="fe fe-download"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-3 pt-5">Media :</h5>
                                                    <div class="row row-sm chat-media">
                                                        <div class="col-xl-4 col-lg-2 col-md-3 col-4">
                                                            <div class="card custom-card border br-5">
                                                                <img src="{{asset('assets/images/files/doc.png')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-2 col-md-3 col-4">
                                                            <div class="card custom-card border br-5">
                                                                <img src="{{asset('assets/images/files/file.png')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-2 col-md-3 col-4">
                                                            <div class="card custom-card border br-5">
                                                                <img src="{{asset('assets/images/files/image.png')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-2 col-md-3 col-4">
                                                            <div class="card custom-card border br-5">
                                                                <img src="{{asset('assets/images/files/ppt.png')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-2 col-md-3 col-4">
                                                            <div class="card custom-card border br-5">
                                                                <img src="{{asset('assets/images/files/word.png')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-2 col-md-3 col-4">
                                                            <div class="card custom-card border br-5">
                                                                <img src="{{asset('assets/images/files/zip.png')}}" alt="img" class="br-5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            @endsection

        @section('scripts')

		<!--- TABS JS -->
		<script src="{{asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
		<script src="{{asset('assets/plugins/tabs/tab-content.js')}}"></script>

		<!-- Internal Chat js-->
		<script src="{{asset('assets/js/chat.js')}}"></script>

        @endsection

