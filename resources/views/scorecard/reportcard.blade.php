@extends('layouts.app')

@section('title', 'KPI Jembo')

@section('page-header')
<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
      <div class="row g-3 mb-3 align-items-center">
        <div class="col">
          <ol class="breadcrumb bg-transparent mb-0">
            <li class="breadcrumb-item"><a class="text-secondary" href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div> <!-- .row end -->
      <div class="row align-items-center">
        <div class="col">
          <h1 class="fs-5 color-900 mt-1 mb-0">SCORECARD AND REPORT CARDS - 2023</h1>
        </div>
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-12 mt-2 mt-md-0">
          <!-- daterange picker -->
          <div class="input-group">
            <input class="form-control" type="text" name="daterange">
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Send Report"><i class="fa fa-envelope"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Download Reports"><i class="fa fa-download"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Generate PDF"><i class="fa fa-file-pdf-o"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Share Dashboard"><i class="fa fa-share-alt"></i></button>
          </div>
          <!-- Plugin Js -->
          <script src="{{ asset('app') }}/js/bundle/daterangepicker.bundle.js"></script>
          <!-- Jquery Page Js -->
          <script>
            // date range picker
            $(function() {
              $('input[name="daterange"]').daterangepicker({
                opens: 'left'
              }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
              });
            })
          </script>
        </div>
      </div> <!-- .row end -->
    </div>
  </div>
  @endsection
  @section('content')
  <div class="wrapper">
    <!-- start: page header -->
    <!-- start: page toolbar -->

    <!-- start: page body -->
    <div class="col task-complete">
      <div class="dd card border-success">
        <div class="card-header bg-success d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-light">Green KPIs</h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>5</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>5</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <div class="col task-complete">
      <div class="dd card border-warning">
        <div class="card-header bg-warning d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-light">Amber KPIs</h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>1</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>1</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <div class="col task-complete">
      <div class="dd card border-danger">
        <div class="card-header bg-danger d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-light">Red KPIs</h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>0</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>0</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <div class="col task-complete">
      <div class="dd card border-dark">
        <div class="card-header bg-dark d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-light">No Data KPIs</h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>6</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>6</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <p></p>
    <p></p>
    <div class="col task-complete">
      <div class="dd card border-dark">
        <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-dark">KPI 1
            <p>Cost Efficiency and Value Added</p>
          </h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Variance</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Explanation</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Action</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <p></p>
    <div class="col task-complete">
      <div class="dd card border-dark">
        <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-dark">KPI 2
            <p>Zero Down Time Infrastructure</p>
          </h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Variance</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Explanation</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Action</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <p></p>
    <div class="col task-complete">
      <div class="dd card border-dark">
        <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-dark">KPI 3
            <p>Zero Down Time IT Services</p>
          </h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Variance</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Explanation</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Action</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <p></p>
    <div class="col task-complete">
      <div class="dd card border-dark">
        <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom-0">
          <h6 class="card-title mb-0 text-dark">KPI 4
            <p>Zero Data Breach</p>
          </h6>
        </div>
        <ol class="dd-list list-unstyled p-2">
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">This Month</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Variance</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Year to Date</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Explanation</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
          <li class="dd-item card p-2">
            <div class="dd-handle fw-bold">Action</div>
            <span>-</span>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="project-members">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>
@endsection