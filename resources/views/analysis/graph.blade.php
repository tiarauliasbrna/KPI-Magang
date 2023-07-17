@extends('layouts.app')
@section('title')
    <ol class="breadcrumb bg-transparent mb-0">
        <li class="breadcrumb-item"><a class="text-secondary" href="/">Dashboard</a></li>
        <li class="text-secondary" href="/"> / Graph
        </li>
        <li aria-current="page">&nbsp;/ Graph : One</li>
    </ol>
@endsection
@section('content')
    <div class="wrapper">
        <!-- start: page header -->

        <!-- start: page toolbar -->
        <!-- start: page body -->
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
            <div class="container-fluid">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 mb-3">
                </div> <!-- .row end -->
                <div class="row g-3 row-deck">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h6 class="card-title mb-0">KPI Graph: One - 2023
                                </div>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="revenue_sales"></div>
                            </div>
                        </div> <!-- .card end -->
                    </div>
                </div> <!-- .row end -->
            </div>
        </div>
        <!-- start: page footer -->

    </div>
    <div class="modal fade" id="RecentChat" tabindex="-1">
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills p-3 h-100">
                        <a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar1.jpg" alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-2" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar2.jpg" alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-3" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar3.jpg" alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-2" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar4.jpg" alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-5" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar5.jpg" alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar6.jpg" alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-7" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar7.jpg"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-3" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar8.jpg"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-3" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar9.jpg"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar10.jpg"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="../assets/img/xs/avatar5.jpg"
                                alt="avatar">
                        </a>
                    </div>
                    <div class="tab-content shadow-sm">
                        <div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
                            <div class="card">
                                <!-- start: chat header -->

                                <!-- start: chat body -->
                                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                                    <ul class="list-unstyled chat-history flex-grow-1">
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar1.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Hi Aiden, how are you?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Are we meeting today?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar1.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> It is a long established fact that a reader
                                                        will be distracted by the readable content of a page when
                                                        looking at its layout.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar1.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Contrary to popular belief, Lorem Ipsum is
                                                        not simply random text.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Yes, Orlando Allredy done <br> There are many
                                                        variations of passages of Lorem Ipsum available</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar1.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message">
                                                        <p>Please find attached images</p>
                                                        <img class="w120 img-thumbnail" src="../assets/img/gallery/3.jpg"
                                                            alt="">
                                                        <img class="w120 img-thumbnail" src="../assets/img/gallery/4.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Okay, will check and let you know.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- start: chat footer -->
                                <div class="card-footer border-top bg-transparent py-3 px-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
                            <div class="card">
                                <!-- start: chat header -->
                                <div class="card-header border-bottom py-3">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" title="">
                                            <img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg"
                                                alt="avatar">
                                        </a>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Orlando Lentz</h6>
                                            <small class="text-muted">Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="dropdown morphing scale-left">
                                        <a class="nav-link p-2 text-secondary d-none d-xl-inline-block"
                                            href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                                        <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block"
                                            href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                                        <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none"
                                            data-bs-dismiss="modal" aria-label="Close" href="#"><i
                                                class="fa fa-close"></i></a>
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- start: chat body -->
                                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                                    <ul class="list-unstyled chat-history flex-grow-1">
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Are we meeting today?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar2.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Hi Aiden, how are you?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Yes, Orlando Allredy done <br> There are many
                                                        variations of passages of Lorem Ipsum available</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar2.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message">
                                                        <p>Please find attached images</p>
                                                        <img class="w120 img-thumbnail" src="../assets/img/gallery/1.jpg"
                                                            alt="">
                                                        <img class="w120 img-thumbnail" src="../assets/img/gallery/2.jpg"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Okay, will check and let you know.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar2.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> It is a long established fact that a reader
                                                        will be distracted by the readable content of a page when
                                                        looking at its layout.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="../assets/img/xs/avatar2.jpg" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Contrary to popular belief, Lorem Ipsum is
                                                        not simply random text.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- start: chat footer -->
                                <div class="card-footer border-top bg-transparent py-3 px-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: Setting -->
    <div class="modal fade" id="SettingsModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
            <div class="modal-content">
                <div class="px-xl-4 modal-header">
                    <h5 class="modal-title">Theme Setting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="px-xl-4 modal-body custom_scroll">
                    <!-- start: color setting -->
                    <div class="card fieldset border border-primary p-3 setting-theme mb-4">
                        <span class="fieldset-tile text-primary bg-card">Color Settings</span>
                        <ul class="list-unstyled d-flex choose-skin mb-0">
                            <li data-theme="black">
                                <div class="black"></div>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="red">
                                <div class="red"></div>
                            </li>
                            <li data-theme="dynamic">
                                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
                            </li>
                        </ul>
                        <!-- Settings: Theme dynamics -->
                        <div class="card fieldset border border-primary p-3 dt-setting mt-4">
                            <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
                            <div class="row g-3">
                                <div class="col-7">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <button id="primaryColorPicker"
                                                class="btn bg-primary avatar xs me-2"></button>
                                            <label>Primary Color</label>
                                        </li>
                                        <li>
                                            <button id="secondaryColorPicker"
                                                class="btn bg-secondary avatar xs me-2"></button>
                                            <label>Secondary Color</label>
                                        </li>
                                        <li>
                                            <button id="BodyColorPicker"
                                                class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                                            <label>Site Background</label>
                                        </li>
                                        <li>
                                            <button id="CardColorPicker"
                                                class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                            <label>Widget Background</label>
                                        </li>
                                        <li>
                                            <button id="BorderColorPicker"
                                                class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                                            <label>Border Color</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <button id="chartColorPicker1"
                                                class="btn chart-color1 avatar xs me-2"></button>
                                            <label>Chart Color 1</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker2"
                                                class="btn chart-color2 avatar xs me-2"></button>
                                            <label>Chart Color 2</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker3"
                                                class="btn chart-color3 avatar xs me-2"></button>
                                            <label>Chart Color 3</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker4"
                                                class="btn chart-color4 avatar xs me-2"></button>
                                            <label>Chart Color 4</label>
                                        </li>
                                        <li>
                                            <button id="chartColorPicker5"
                                                class="btn chart-color5 avatar xs me-2"></button>
                                            <label>Chart Color 5</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start: Light/dark -->
                    <div class="card fieldset border setting-mode mb-4">
                        <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
                        <div class="c_radio d-flex text-center">
                            <label class="m-1 theme-switch" for="theme-switch">
                                <input type="checkbox" id="theme-switch" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/dark-version.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-dark" for="theme-dark">
                                <input type="checkbox" id="theme-dark" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/dark-theme.svg" alt="Theme Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                                <input type="checkbox" id="theme-high-contrast" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/high-version.svg" alt="High Contrast" />
                                </span>
                            </label>
                            <label class="m-1 theme-rtl" for="theme-rtl">
                                <input type="checkbox" id="theme-rtl" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/rtl-version.svg" alt="RTL Mode!" />
                                </span>
                            </label>
                        </div>
                    </div>
                    <!-- start: Font setting -->
                    <div class="card fieldset border setting-font">
                        <span class="fieldset-tile bg-card">Google Font Settings</span>
                        <div class="c_radio d-flex text-center font_setting">
                            <label class="m-1" for="font-opensans">
                                <input type="radio" name="font" id="font-opensans" value="font-opensans" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/font-opensans.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-quicksand">
                                <input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/font-quicksand.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-nunito">
                                <input type="radio" name="font" id="font-nunito" value="font-nunito"
                                    checked="" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/font-nunito.svg" alt="Dark Mode" />
                                </span>
                            </label>
                            <label class="m-1" for="font-raleway">
                                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                                <span class="card p-2">
                                    <img class="img-fluid" src="../assets/img/font-raleway.svg" alt="Dark Mode" />
                                </span>
                            </label>
                        </div>
                    </div>
                    <!-- start: Dynamic Font Settings -->
                    <div class="m-1 p-3 bg-body rounded-4 mb-4">
                        <p>Dynamic Font Settings</p>
                        <div class="mb-2">
                            <label class="form-label small text-muted mb-0">Enter font URL</label>
                            <input id="font_url" type="text" class="form-control"
                                placeholder="http://fonts.cdnfonts.com/css/vonfont">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted mb-0">Enter font family name</label>
                            <input id="font_family" type="text" class="form-control" placeholder="vonfont">
                        </div>
                        <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
                        <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
                    </div>
                    <!-- start: Extra setting -->
                    <div class="setting-more mb-4">
                        <h6 class="card-title">More Setting</h6>
                        <ul class="list-group list-group-flush list-group-custom fs-6">
                            <!-- Settings: Horizontal menu version -->
                            <li class="list-group-item">
                                <div class="form-check form-switch h-menu-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="h_menu">
                                    <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                                </div>
                            </li>
                            <!-- Settings: page header top Fix -->
                            <li class="list-group-item">
                                <div class="form-check form-switch pageheader-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="PageHeader" checked>
                                    <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                                </div>
                            </li>
                            <!-- Settings: page header Dark version  -->
                            <li class="list-group-item">
                                <div class="form-check form-switch pageheader-dark-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="PageHeader_dark">
                                    <label class="form-check-label" for="PageHeader_dark">Page Header Dark
                                        Mode</label>
                                </div>
                            </li>
                            <!-- Settings: Border radius -->
                            <li class="list-group-item">
                                <div class="form-check form-switch radius-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="BorderRadius">
                                    <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                                </div>
                            </li>
                            <!-- Settings: sidebar version 2 -->
                            <li class="list-group-item">
                                <div class="form-check form-switch sidebar-v2 mb-1">
                                    <input class="form-check-input" type="checkbox" id="sidebar_v2">
                                    <label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
                                </div>
                            </li>
                            <!-- Settings: sidebar dark -->
                            <li class="list-group-item">
                                <div class="form-check form-switch sidebardark-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="SidebarDark">
                                    <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar
                                        )</label>
                                </div>
                            </li>
                            <!-- Settings: Sidebar bg image -->
                            <li class="list-group-item setting-img">
                                <div class="form-check form-switch imagebg-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="CheckImage">
                                    <label class="form-check-label" for="CheckImage">Background Image
                                        (Sidebar)</label>
                                </div>
                                <div class="bg-images">
                                    <ul class="list-unstyled d-flex">
                                        <li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img"
                                                id="img-1" href="#"><img
                                                    src="../assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a>
                                        </li>
                                        <li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2"
                                                href="#"><img src="../assets/img/sidebar-bg/sidebar-2.jpg"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3"
                                                href="#"><img src="../assets/img/sidebar-bg/sidebar-3.jpg"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4"
                                                href="#"><img src="../assets/img/sidebar-bg/sidebar-4.jpg"
                                                    alt="" /></a></li>
                                        <li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5"
                                                href="#"><img src="../assets/img/sidebar-bg/sidebar-5.jpg"
                                                    alt="" /></a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Settings: Container Fluid -->
                            <li class="list-group-item">
                                <div class="form-check form-switch fluid-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                                    <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                                </div>
                            </li>
                            <!-- Settings: Card box shadow  -->
                            <li class="list-group-item">
                                <div class="form-check form-switch shadow-switch mb-1">
                                    <input class="form-check-input" type="checkbox" id="card_shadow">
                                    <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- start: Extra link, please do not add in your project -->
                    <div class="mb-4">
                        <a class="btn lift  btn-outline-secondary" href="../marketing/index.html">Marketing page</a>
                        <a class="btn lift  btn-outline-secondary" href="../onepgae-uikit/onepage.html">Landing
                            page</a>
                        <a class="btn lift  btn-outline-secondary" href="../onepgae-uikit/index.html">One page Ui
                            Kit Elements</a>
                    </div>
                </div>
                <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
                    <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                    <button type="button" class="btn flex-fill btn-white border lift"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery Page Js -->
    <!-- Jquery Page Js -->
    <script src="../assets/js/theme.js"></script>
    <!-- Plugin Js -->
    <script src="../assets/js/bundle/apexcharts.bundle.js"></script>
    <!-- Vendor Script -->
    <script src="../assets/js/bundle/apexcharts.bundle.js"></script>
    <script>
        // Apex-wc-1
        var apexwc1 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 45, 54, 38, 56, 24, 65, 31]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color1)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color1)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-1"), apexwc1).render();
        // Apex-wc-2
        var apexwc2 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 45, 54, 38, 56, 24, 65, 31]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color2)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color2)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-2"), apexwc2).render();
        // Apex-wc-3
        var apexwc3 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 45, 54, 38, 56, 24, 65, 31]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color3)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color3)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-3"), apexwc3).render();
        // Apex-wc-4
        var apexwc4 = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            series: [{
                data: [47, 56, 24, 65, 31, 45, 54, 38]
            }],
            stroke: {
                width: 1
            },
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ['var(--chart-color4)'],
                    shadeIntensity: 2,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 100]
                },
            },
            colors: ['var(--chart-color4)'],
        }
        new ApexCharts(document.querySelector("#apex-wc-4"), apexwc4).render();
        // Apex-wc-5
        var apexwc5 = {
            chart: {
                type: 'line',
                width: 160,
                height: 35,
                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color1)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ["var(--chart-color2)"],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-5"), apexwc5).render();
        // Apex-wc-6
        var apexwc6 = {
            chart: {
                type: 'line',
                width: 160,
                height: 35,
                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color2)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ["var(--chart-color3)"],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-6"), apexwc6).render();
        // Apex-wc-7
        var apexwc7 = {
            chart: {
                type: 'line',
                width: 160,
                height: 35,
                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color3)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ["var(--chart-color4)"],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-7"), apexwc7).render();
        // Apex-wc-8
        var apexwc8 = {
            chart: {
                type: 'line',
                width: 160,
                height: 35,
                sparkline: {
                    enabled: true
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            stroke: {
                width: 3,
                curve: 'smooth',
                colors: ['var(--chart-color1)']
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ["var(--chart-color2)"],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 100],
                    colorStops: []
                },
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false,
                }
            }
        }
        new ApexCharts(document.querySelector("#apex-wc-8"), apexwc8).render();
        // Analytics
        var analytics = {
            series: [{
                name: 'Users',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Sessions',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Bounce Rate',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
            chart: {
                type: 'bar',
                height: 280,
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    //endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 1,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            legend: {
                position: 'bottom', // left, right, top, bottom
                horizontalAlign: 'left', // left, right, top, bottom
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            },
        };
        new ApexCharts(document.querySelector("#analytics"), analytics).render();
        // Sales
        var sales = {
            series: [{
                name: 'Ordered',
                data: [44, 55, 41, 67, 22, 43, 21, 49, 33, 29, 44, 38]
            }, {
                name: 'On Call',
                data: [13, 23, 20, 8, 13, 27, 21, 49, 33, 29, 33, 12]
            }, {
                name: 'Pending',
                data: [11, 17, 21, 49, 33, 29, 15, 15, 21, 14, 15, 13]
            }],
            chart: {
                type: 'bar',
                height: 280,
                stacked: true,
                stackType: '100%',
                toolbar: {
                    show: false,
                },
            },
            colors: ['var(--chart-color4)', 'var(--chart-color5)', 'var(--chart-color1)'],
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            },
            fill: {
                opacity: 1
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
            },
        };
        new ApexCharts(document.querySelector("#sales"), sales).render();
        // Revenue Sales
        var revenue_sales = {
            series: [{
                name: "Revenue",
                data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
            }, {
                name: 'Sales',
                data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
            }],
            chart: {
                height: 280,
                type: 'line', // line, bar, area
                toolbar: {
                    show: false,
                },
                zoom: {
                    enabled: false
                },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color3)'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: [5, 7],
                curve: 'smooth', // straight, smooth
                dashArray: [8, 5]
            },
            legend: {
                tooltipHoverFormatter: function(val, opts) {
                    return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
                }
            },
            markers: {
                size: 0,
                hover: {
                    sizeOffset: 6
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            },
            tooltip: {
                y: [{
                    title: {
                        formatter: function(val) {
                            return val + " (Hours)"
                        }
                    }
                }, {
                    title: {
                        formatter: function(val) {
                            return val + " (Hours)"
                        }
                    }
                }, {
                    title: {
                        formatter: function(val) {
                            return val + " (Session)"
                        }
                    }
                }]
            },
        };
        new ApexCharts(document.querySelector("#revenue_sales"), revenue_sales).render();
    </script>
    <br>
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title m-0">KPI Definition-1</h6>
                <!-- widgest: Card more action icon -->
                <div class="dropdown morphing scale-left">
                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                            class="icon-size-fullscreen"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                        <li><a class="dropdown-item" href="#">File Info</a></li>
                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                        <li><a class="dropdown-item" href="#">Move to</a></li>
                        <li><a class="dropdown-item" href="#">Rename</a></li>
                        <li><a class="dropdown-item" href="#">Block</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <!-- Progress -->
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table align-middle table-bordered mb-0 custom-table-2">
                        <thead>
                            <tr>
                                <th>MONTH</th>
                                <th colspan="3">DEFINING RANGE</th>
                                <th colspan="3">MONTHLY ACTUAL</th>
                                <th>YEARS TO DATE ACTUAL</th>
                                <th>WEIGHT</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>&emsp;&emsp;<center>L2</center>
                                </th>
                                <th>&emsp;&emsp; <center>T2</center>
                                </th>
                                <th>&emsp;&emsp; <center>L</center>
                                </th>
                                <th>&emsp;&emsp; <center>M</center>
                                </th>
                                <th>&emsp;&emsp; <center>T</center>
                                </th>
                                <th>&emsp;&emsp; <center>X</center>
                                </th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w120">Januari</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Februari</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Maret</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">April</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Mei</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Juni</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Juli</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Agustus</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">September</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Oktober</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">November</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>30%</center>
                                </td>
                            </tr>
                            <tr>
                                <td class="w120">Desember</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <center><strong class="text-danger">90</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center><strong class="text-success">100</strong></center>
                                </td>
                                <td></td>
                                <td>
                                    <center>100</center>
                                </td>
                                <td>
                                    <center>
                                        <center>30%</center>
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
