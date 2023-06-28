@extends('layouts.app')
@section('title')
    <ol class="breadcrumb bg-transparent mb-0">
        <li class="breadcrumb-item"><a class="text-secondary" href="/">Dashboard</a></li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row g-3 row-deck">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg"
                            width="26" fill="currentColor" viewBox="0 0 16 16">
                            <path class="fill-muted"
                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                            <path class="fill-primary"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                        <div class="mb-2 text-uppercase">TOTAL EMPLOYEE</div>
                        <div><span class="h4">380</span></div>
                        <small class="text-muted">Analytics for last week</small>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg"
                            width="26" fill="currentColor" viewBox="0 0 16 16">
                            <path class="fill-muted"
                                d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                            <path class="fill-primary"
                                d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <div class="mb-2 text-uppercase">NEW EMPLOYEE</div>
                        <div><span class="h4">24</span></div>
                        <small class="text-muted">Analytics for last week</small>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="13"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title m-0">ANNUAL PERFORMANCE GRAPH - 2023</h6>
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
                        <div id="apex-AudienceOverview"></div>
                    </div>
                </div>
            </div>


            <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">

            </div>
        </div> <!-- .row end -->
    </div>
@endsection
