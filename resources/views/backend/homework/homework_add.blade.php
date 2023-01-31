@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Subject Page </h4><br><br>

                            <form method="post" action="{{route('homework.stores')}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Subject</label>
                                    <div class="col-sm-10">
                                        <select name="subject_id" class="form-select" aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($subject as $sub)
                                                <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Teacher</label>
                                    <div class="col-sm-10">
                                        <select name="teacher_id" class="form-select" aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($teacher as $teach)
                                                <option value="{{ $teach->id }}">{{ $teach->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Video Link</label>
                                    <div class="form-group col-sm-10">
                                        <input name="video_link" class="form-control" type="text"
                                            placeholder="https://www.youtube.com">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                    <div class="form-group col-sm-10">
                                        <input name="category" class="form-control" type="text"
                                            placeholder="Assignment #">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="form-group col-sm-10">

                                        <!-- Create the editor container -->
                                        <div id="descriptionQuill">
                                            <p>White your description here</p>
                                            <p><br></p>
                                        </div>
                                        <textarea name="description" id="description" cols="30" rows="10" style="display: none"></textarea>

                                    </div>
                                </div> <br>
                                <div>&nbsp;</div>
                                <!-- end row -->

                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control form-control" name="file" id="chooseFile" type="file">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Subject">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    grade: {
                        required: true,
                    },
                    guardian_name: {
                        required: true,
                    },
                    guardian_mobile_no: {
                        required: true,
                    },
                    guardian_email: {
                        required: true,
                    },
                    student_image: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please enter your Name',
                    },
                    grade: {
                        required: 'Please enter your grade',
                    },
                    guardian_name: {
                        required: 'Please enter your guardian name',
                    },
                    guardian_mobile_no: {
                        required: 'Please enter your Mobile No',
                    },
                    guardian_email: {
                        required: 'Please enter the valid Email Address',
                    },
                    address: {
                        required: 'Please enter your Address',
                    },
                    student_image: {
                        required: 'Please select an Image',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script>
        var quill = new Quill('#descriptionQuill', {
            theme: 'snow'
        });
        $("#myForm").on("submit", function() {
            $("#description").val($("#descriptionQuill .ql-editor").html());
        });
    </script>
@endsection
