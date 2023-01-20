@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">HS</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Students</p>
                                    <h4 class="mb-2">1452</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-user-5-line 2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">New Students</p>
                                    <h4 class="mb-2">938</h4>
                                    <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class=" ri-user-5-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Homeworks</p>
                                    <h4 class="mb-2">8246</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class=" ri-book-3-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Subject</p>
                                    <h4 class="mb-2">29670</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="ri-contacts-book-2-fill font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>

                                </div>

                                <h4 class="card-title mb-4">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Grade</th>
                                                <th>Status</th>
                                                <th>Age</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Charles Casey</h6>
                                                </td>
                                                <td>Grade 2</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Enrolled
                                                    </div>
                                                </td>
                                                <td>
                                                    9
                                                </td>
                                            </tr>
                                            <!-- end -->
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->



                </div>
                <!-- end row -->
            </div>

        </div>
    @endsection
