@extends('layouts.app')
@section('title')
    <ol class="breadcrumb bg-transparent mb-0">
        <li class="breadcrumb-item"><a class="text-secondary" href="index.html">Overall KPI Summary Table - 2023</a></li>
    </ol>
@endsection
@section('content')

    <body class="layout-1" data-luno="theme-indigo">
        <div class="wrapper">
            <!-- start: page body -->
            <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="dropdown morphing scale-left">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs tab-card border-bottom-0 pt-2 fs-6" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                href="#contact_all" role="tab"><span>January</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_groups"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">February</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                href="#contact_favorites" role="tab"></i><span
                                                    class="d-none d-md-inline-block ms-2">March</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                href="#contact_favorites" role="tab"></i><span
                                                    class="d-none d-md-inline-block ms-2">April</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_merge"
                                                role="tab"></i><span
                                                    class="d-none d-md-inline-block ms-2">May</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">June</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">July</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">August</span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">September</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">October</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">November</span></a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash"
                                                role="tab"></i><span
                                                    class="d-none d-sm-inline-block ms-2">Desember</span></a></li>
                                    </ul>
                                </div>
                                <div class="tab-content mt-4 mb-4">
                                    <!-- Tab: My Contacts -->
                                    <div class="tab-pane fade show active" id="contact_all" role="tabpanel">
                                        <div class="row-title mb-2">
                                            <div>

                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="contact_list" class="table align-middle mb-0 card-table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>KPI</th>
                                                            <th>Amount</th>
                                                            <th>Precent (%)</th>
                                                            <th>Trend</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-2 mb-0">1</div>
                                                                </div>
                                                            </td>
                                                            <td>Green</td>
                                                            <td>3</td>
                                                            <td>25%</td>
                                                            <td>N/A</td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-2 mb-0">2</div>
                                                                </div>
                                                            </td>
                                                            <td>Amber</td>
                                                            <td>0</td>
                                                            <td>0%</td>
                                                            <td>N/A</td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-2 mb-0">3</div>
                                                                </div>
                                                            </td>
                                                            <td>Red</td>
                                                            <td>0</td>
                                                            <td>0%</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-2 mb-0">4</div>
                                                                </div>
                                                            </td>
                                                            <td>No Data</td>
                                                            <td>9</td>
                                                            <td>75%</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-2 mb-0">5</div>
                                                                </div>
                                                            </td>
                                                            <td>TOTAL</td>
                                                            <td>12</td>
                                                            <td>100%</td>
                                                            <td></td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab: Groups -->
                                    <div class="tab-pane fade" id="contact_groups" role="tabpanel">
                                        <div class="row-title mb-2">
                                            <h5 class="fw-light mb-0">My Groups<span class="fw-bold ms-2">(8)</span></h5>
                                            <div>
                                                <div class="input-group">
                                                    <select class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Designer</option>
                                                        <option value="2">Developer</option>
                                                        <option value="3">Office</option>
                                                        <option value="4">Friends</option>
                                                        <option value="5">Management</option>
                                                        <option value="6">Colleagues</option>
                                                    </select>
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        data-bs-toggle="offcanvas" data-bs-target="#Create_Group">Create
                                                        Group</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-3 row-deck">
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar1.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar2.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar3.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar5.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">Out Sourcing</h6>
                                                            <small class="text-muted">16 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar6.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar7.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar8.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">Management</h6>
                                                            <small class="text-muted">11 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar10.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar9.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar3.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar2.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">Sold Properties</h6>
                                                            <small class="text-muted">106 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar1.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <div
                                                                class="avatar rounded-circle m-1 lift d-inline-flex no-thumbnail">
                                                                RH</div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">San Fransisco</h6>
                                                            <small class="text-muted">126 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar6.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar7.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar8.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar1.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">Los Angeles</h6>
                                                            <small class="text-muted">84 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar10.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar9.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar2.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar5.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">Colleagues</h6>
                                                            <small class="text-muted">245 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar1.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <div
                                                                class="avatar rounded-circle m-1 lift d-inline-flex no-thumbnail">
                                                                RH</div>
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">San Fransisco</h6>
                                                            <small class="text-muted">126 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                            <div class="col">
                                                <div class="card text-center overflow-visible">
                                                    <div
                                                        class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                                        <a href="#" class="more-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <ul
                                                            class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                            <li class="fw-bold">Quick Actions</li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Edit Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Add Contact<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Share Group<i
                                                                        class="fa fa-arrow-right"></i></a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><button type="button"
                                                                    class="btn btn-sm btn-light-primary">Generate
                                                                    Reports</button>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between flex-column">
                                                        <div class="me-auto ms-auto py-4">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar6.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar7.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar8.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                            <img class="avatar rounded-circle m-1 lift"
                                                                src="../assets/img/xs/avatar1.jpg"
                                                                data-bs-toggle="tooltip" data-placement="top"
                                                                title="Avatar Name" alt="">
                                                        </div>
                                                        <div class="mt-2">
                                                            <h6 class="mb-0">Los Angeles</h6>
                                                            <small class="text-muted">84 Contacts</small>
                                                        </div>
                                                    </div>
                                                </div> <!-- .Card End -->
                                            </div>
                                        </div> <!-- Row end  -->
                                        <!-- offcanvas: create Groups -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="Create_Group">
                                            <div class="offcanvas-header">
                                                <h5 class="offcanvas-title">Create new Group</h5>
                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body custom_scroll">
                                                <p><strong>Note: </strong>It is a long established fact that a reader will
                                                    be
                                                    distracted by the readable.</p>
                                                <div class="card p-3 mb-2">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Group Name">
                                                        <label>Group Name</label>
                                                    </div>
                                                    <div>
                                                        <label class="me-3">Added :</label>
                                                        <a href="#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="../assets/img/xs/avatar3.jpg" alt="friend"> </a>
                                                        <a href="#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="../assets/img/xs/avatar1.jpg" alt="friend"> </a>
                                                        <a href="#" title=""><img
                                                                class="avatar sm rounded-circle"
                                                                src="../assets/img/xs/avatar9.jpg" alt="friend"> </a>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button class="btn btn-primary text-uppercase" type="button">Create
                                                        new
                                                        Group</button>
                                                </div>
                                                <h6 class="card-title mt-4">Contact List</h6>
                                                <ul class="list-unstyled mb-0 custom_scroll" style="height: 400px;">
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Chris Fox</div>
                                                            <span class="text-muted small">21 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-primary">Add</button>
                                                        </div>
                                                    </li>
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar2.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Marshall Nichols</div>
                                                            <span class="text-muted small">5 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-success">Added</button>
                                                        </div>
                                                    </li>
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Orlando Lentz</div>
                                                            <span class="text-muted small">9 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-primary">Add</button>
                                                        </div>
                                                    </li>
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar4.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Alexander</div>
                                                            <span class="text-muted small">18 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-primary">Add</button>
                                                        </div>
                                                    </li>
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar8.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Orlando Lentz</div>
                                                            <span class="text-muted small">11 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-primary">Add</button>
                                                        </div>
                                                    </li>
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Marshall Nichols</div>
                                                            <span class="text-muted small">5 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-success">Added</button>
                                                        </div>
                                                    </li>
                                                    <li class="card p-3 my-1 flex-row">
                                                        <img class="avatar rounded-circle"
                                                            src="../assets/img/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-3">
                                                            <div class="h6 mb-0">Orlando Lentz</div>
                                                            <span class="text-muted small">9 mutual connections</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <button class="btn mx-1 btn-light-success">Added</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab: Favorites -->
                                    <div class="tab-pane fade" id="contact_favorites" role="tabpanel">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5 class="fw-light mb-0">Favorites<span class="fw-bold ms-2">(5)</span></h5>
                                        </div>
                                        <div
                                            class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 row-deck">
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <div class="circle">
                                                            <img class="avatar xl rounded-circle img-thumbnail"
                                                                src="../assets/img/xs/avatar1.jpg" alt="">
                                                        </div>
                                                        <h6 class="mt-3 mb-0">Michelle Green</h6>
                                                        <span>jason-porter@info.com</span>
                                                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                            <li><a class="p-3" target="_blank" href="#"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a class="p-3" target="_blank" href="#"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                            <li><a class="p-3" target="_blank" href="#"><i
                                                            @endsection