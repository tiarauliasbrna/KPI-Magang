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
    </div>

    <div class="col task-complete">
        <br>
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title m-0">KPI Definition -1</h6>
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
                <div class="table-responsive border-top">
                    <table class="table card-table table-nowrap mb-0">
                        <tbody>
                            <tr>
                                <td>MONTH</td>
                                <td>DEFINING RANGE</td>
                                <td><span>MONTHLY ACTUAL</span></td>
                                <td></td>
                                <td><span>YEAR TO DATE ACTUAL</span></td>
                                <td><span>WEIGHT</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>L2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX
                                </td>
                                <td><span></span></td>
                                <td></td>
                                <td><span></span></td>
                                <td><span></span></td>
                            </tr>
                            <tr>
                                <td>January</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>June</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td>90</td>
                                <td><span>100</span></td>
                                <td>100</td>
                                <td><span>100</span></td>
                                <td><span>30%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
