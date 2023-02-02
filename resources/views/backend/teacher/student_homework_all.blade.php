@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Homework All</h4>
                    </div>
                </div>
            </div>

            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('homework.add')}}" class="btn btn-dark btn-rounded waves-effect waves-light"
                                style="float: right">Add Homework</a> <br> <br>

                            <h4 class="card-title">Homrwork All Data </h4>
                            <table id="datatable" class="table table-bordered dt-responsive wrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Student Name</th>
                                        <th>Subject</th>
                                        <th>Teacher</th>
                                        <th>File</th>
                                        <th>Rating</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
