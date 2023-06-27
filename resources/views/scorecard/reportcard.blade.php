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
    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
      <div class="container-fluid">
        <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-1 g-2 row-deck">
          <div class="col task-planned">
            <div class="dd card fieldset border border-primary mb-5">
              <span class="fieldset-tile text-primary bg-body">Planned:</span>
              <ol class="dd-list list-unstyled mb-3">
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">Dashboard Design</div>
                  <span class="text-muted">It is a long established fact will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                      <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">ReactJs App</div>
                  <span class="text-muted">Richard McClintock, a Latin professor</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar2.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">7</span></a>
                      <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">9</span></a>
                    </div>
                  </div>
                </li>
              </ol>
              <button class="btn rounded btn-white w-100 mt-auto" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
            </div>
          </div>
          <div class="col task-progress">
            <div class="dd card fieldset border border-secondary mb-5">
              <span class="fieldset-tile text-secondary bg-body">In progress:</span>
              <ol class="dd-list list-unstyled mb-3">
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">Mobile UI</div>
                  <span class="text-muted">It is a long established fact will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar8.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">22</span></a>
                      <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">7</span></a>
                    </div>
                  </div>
                  <ol class="dd-list list-unstyled">
                    <li class="dd-item card p-2 mb-1">
                      <div class="dd-handle fs-6 mb-1">Item 2</div>
                      <span class="text-muted">It is a long established fact that a reader will be distracted.</span>
                      <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="project-members">
                          <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                          <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">7</span></a>
                          <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">3</span></a>
                        </div>
                      </div>
                    </li>
                  </ol>
                </li>
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">Item 3</div>
                  <span class="text-muted">It is a long established reader will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar2.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar5.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">42</span></a>
                      <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">15</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">Luno Logo AI</div>
                  <span class="text-muted">Richard McClintock, a Latin professor</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar5.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar1.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                      <a class="small small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                    </div>
                  </div>
                </li>
              </ol>
              <button class="btn rounded btn-white w-100 mt-auto" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
            </div>
          </div>
          <div class="col task-complete">
            <div class="dd card fieldset border border-success mb-5">
              <span class="fieldset-tile text-success bg-body">Complete:</span>
              <ol class="dd-list list-unstyled mb-3">
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">Ios App design</div>
                  <span class="text-muted">It is a long established reader will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">45</span></a>
                      <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">14</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-xl-3 p-2">
                  <div class="dd-handle fs-6 mb-1">Bootstrap 5 onepage</div>
                  <span class="text-muted">It is a long established fact that a distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded-circle" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="small p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">18</span></a>
                      <a class="small p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">3</span></a>
                    </div>
                  </div>
                </li>
              </ol>
              <button class="btn rounded btn-white w-100 mt-auto" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
            </div>
          </div>
        </div> <!-- .row end -->
        <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-1 g-2 mt-4">
          <div class="col task-planned">
            <div class="dd card border-primary">
              <div class="card-header bg-primary d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-light">Planned</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
              </div>
              <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 1</div>
                  <span>It is a long established fact will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 2</div>
                  <span>Richard McClintock, a Latin professor</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar2.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">7</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">9</span></a>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
          </div>
          <div class="col task-progress">
            <div class="dd card border-warning">
              <div class="card-header bg-warning d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-light">In progress</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
              </div>
              <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2 mb-1">
                  <div class="dd-handle fw-bold">Item 1</div>
                  <span>It is a long established fact will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar8.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">22</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">7</span></a>
                    </div>
                  </div>
                  <ol class="dd-list list-unstyled">
                    <li class="dd-item card p-2 mb-1">
                      <div class="dd-handle fw-bold">Item 2</div>
                      <span>It is a long established fact that a reader will be distracted.</span>
                      <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                          <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                        </div>
                        <div class="task-action">
                          <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">7</span></a>
                          <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">3</span></a>
                        </div>
                      </div>
                    </li>
                  </ol>
                </li>
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 3</div>
                  <span>It is a long established reader will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar2.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar5.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">42</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">15</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 4</div>
                  <span>Richard McClintock, a Latin professor</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar5.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar1.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
          </div>
          <div class="col task-review">
            <div class="dd card border-dark">
              <div class="card-header bg-dark d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-muted">Review</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
              </div>
              <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 1</div>
                  <span>It is a long that a reader will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar10.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar4.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 2</div>
                  <span>It is a long established fact will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar1.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">11</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">5</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 3</div>
                  <span>Richard McClintock, a Latin professor</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar1.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar6.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">10</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">2</span></a>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
          </div>
          <div class="col task-complete">
            <div class="dd card border-success">
              <div class="card-header bg-success d-flex justify-content-between align-items-center border-bottom-0">
                <h6 class="card-title mb-0 text-light">Complete</h6>
                <button class="btn btn-sm rounded-pill btn-white" type="button" data-bs-toggle="modal" data-bs-target="#new_task"><i class="fa fa-plus"></i> Add task</button>
              </div>
              <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 1</div>
                  <span>It is a long established reader will be distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar7.jpg" alt="friend"> </a>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar9.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">45</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">14</span></a>
                    </div>
                  </div>
                </li>
                <li class="dd-item card p-2">
                  <div class="dd-handle fw-bold">Item 2</div>
                  <span>It is a long established fact that a distracted.</span>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="project-members">
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Avatar"><img class="avatar xs rounded" src="{{ asset('app') }}/img/xs/avatar3.jpg" alt="friend"> </a>
                    </div>
                    <div class="task-action">
                      <a class="p-1 text-muted fa fa-comments" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Comments"><span class="ps-1">18</span></a>
                      <a class="p-1 text-muted fa fa-paperclip" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Attachment"><span class="ps-1">3</span></a>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
          </div>
        </div> <!-- .row end -->
        <!-- modal: Add New Task -->
        <!-- <button class="btn btn-primary px-4 text-uppercase" data-bs-toggle="modal" data-bs-target="#new_task" type="button">Add New Contact</button> -->
        <!-- Modal: New Task -->
        <div class="modal fade" id="new_task" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3">
                  <div class="col-12">
                    <label class="form-label">Task Title</label>
                    <input class="form-control" type="text" required="" autocomplete="off">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Task Detail</label>
                    <textarea class="form-control" type="text" required="" autocomplete="off" rows="3"></textarea>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Select Date/Time</label>
                    <div class="input-group">
                      <input type="date" class="form-control">
                      <input type="time" class="form-control">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="Remindon">
                      <label class="form-check-label" for="Remindon">Remind on</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Task tag</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">Design</option>
                      <option value="2">BugFix</option>
                      <option value="3">Help</option>
                      <option value="3">R&D</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Plugin Js -->
        <script src="{{ asset('app') }}/js/bundle/nestable.bundle.js"></script>
        <!-- Jquery Page Js -->
        <script>
          $(function() {
            $('.dd').nestable();
          });
        </script>
      </div>
    </div>
  </div>
@endsection