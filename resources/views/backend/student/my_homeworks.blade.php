@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">My Homeworks</h4>
                    </div>
                </div>
            </div>

            <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Homework All Data </h4>
                            <table id="datatable" class="table table-bordered dt-responsive wrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Subject</th>
                                        <th>Teacher</th>
                                        <th>Category</th>
                                        {{-- <th>Description</th> --}}
                                        <th>File</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                </thead>
                                <tbody>
                                    @foreach ($homework as $key => $item)
                                    <?php
                                    $status = $item->rating; 
                                    if($status >= 75){
                                        $status = '<span class="badge bg-success"><h6 style="color: white">'.$item->rating.'</h6></span>';
                                    }else{
                                        $status = '<span class="badge bg-danger"><h6 style="color: white">'.$item->rating.'</h6></span>';
                                    }
                                    ?>
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->subject->name}}</td>
                                            <td>{{$item->teacher->name}}</td>
                                            <td>{{$item->homework_id}}</td>
                                            {{-- <td>Description to be filled</td> --}}
                                            <td>{{$item->file}}</td>
                                            <td><?= $status?></td>
                                            <td>{!!$item->comment!!}</td>
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
