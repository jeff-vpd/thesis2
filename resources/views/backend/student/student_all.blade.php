@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Student All</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('student.add')}}" class="btn btn-dark btn-rounded waves-effect waves-light"
                                style="float: right">Add Student</a> <br> <br>

                            <h4 class="card-title">Student All Data </h4>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Image</th>
                                        <th width="20%">Name</th>
                                        <th>Grade</th>
                                        <th>Added By</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($student as $key => $item)
                                        <tr>
                                            <td> {{ $item->id }} </td>
                                            <td> <img src="{{ asset($item->student_image) }}"
                                                style="width: 60px; height: 50px;"> </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ $item->grade }} </td>
                                            <td> {{ $item->id }} </td>
                                            <td>
                                                <a href="" class="btn btn-info sm" title="Edit Data"> <i
                                                        class="fas fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger sm" title="Delete Data"
                                                    id="delete"> <i class="fas fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
