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
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('dashboard/articles/create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
            Create New Article
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>KEY PERFORMANCE INDICATOR</th>
                        <th>FREQUENCY</th>
                        <th class="text-center">UNIT OF MEASURE</th>
                        <th class="text-center">DEFINING RANGE</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @for ($i = 0; $i < 100; $i++)
                    <tr>
                        <td class="text-center">{{ $i + 1 }}</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Megawati</td>
                        <td class="text-center">KPK</td>
                        <td class="text-center">2011/04/25</td>
                        <td>
                            <div class="text-center">
                                <a href="{{ url('/dashboard/articles/article-title') }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('/dashboard/articles/article-title/edit') }}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>

                        </td>
                    </tr>    
                    @endfor

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection