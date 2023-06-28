@extends('layouts.app')
@section('title')
    <ol class="breadcrumb bg-transparent mb-0">
        <li class="breadcrumb-item"><a class="text-secondary" href="index.html">SCORECARD AND REPORT CARDS - 2023</a></li>
    </ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row g-3 row-deck">
      <div class="col-lg-3 col-md-6 col-sm-6">
      </div>
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header">
            <h6 class="card-title m-0">LUNO Revenue</h6>
            <!-- widgest: Card more action icon -->
            <div class="dropdown morphing scale-left">
              <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
              <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
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