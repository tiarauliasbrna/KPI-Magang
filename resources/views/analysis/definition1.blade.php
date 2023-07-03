@extends('layouts.app')
@section('title')
    <ol class="breadcrumb bg-transparent mb-0">
        <li class="breadcrumb-item"><a class="text-secondary" href="/">Dashboard</a></li>
        <li aria-current="page">&nbsp;/ KPI Definition 1</li>
    </ol>
@endsection
@section('content')
    <div class="col task-complete">
        <div class="dd card border-dark">
            <ol class="dd-list list-unstyled p-2">
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">KPI NAME</div>
                    <span>Cost Efficiency and Value Added</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">KPI DEFINITION</div>
                    <span>Penghematan atau nilai tambah yang dihasilkan dari project yang dilakukan</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">PERSPECTIVE</div>
                    <span>Financial</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">STRATEGIC THEME</div>
                    <span>Smart Budgeting</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">STRATEGIC OBJECTIVE</div>
                    <span>Cost Efficiency</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">FREQUENCY</div>
                    <span>Annualy</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">UNIT OF MEASURE</div>
                    <span>Percentage</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">UNIT OF MEASURE</div>
                    <span>Percentage</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">FORMULA</div>
                    <span>[Cost-(cost-saving)/cost] x 100</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">DATA SOURCE</div>
                    <span>File here</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
                <li class="dd-item card p-2">
                    <div class="dd-handle fw-bold">RESPONSIBILITY</div>
                    <span>Coordinator</span>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <div class="project-members">
                        </div>
                    </div>
                </li>
            </ol>
        </div>
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
    </div>
@endsection
