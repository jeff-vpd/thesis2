@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/student/style.student.css">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="registration-form">
                    <form>
                        <div class="form-icon">
                            <img id="showImage" class="rounded avatar-lg"
                            src=" {{ url('upload/no_photo.jpg') }}" alt="Card image cap">
                            
                        </div>
                     <div class="text-center mb-4"><h3> <span style="font-weight: 800;color:rgb(33, 63, 63);">Add Student</span> </h3></div>
                     <div class="row">
                        <div class="form-group col-6">
                            <input name="name" class="form-control item" type="text" placeholder="Student Name">
                        </div>
                        <div class="form-group col-6">
                            <select name="grade" id="grade" class="form-select item">
                                <option value="0">Select Grade</option>
                                <option value="1">Grade 1</option>
                                <option value="2">Grade 2</option>
                                <option value="3">Grade 3</option>
                                <option value="4">Grade 4</option>
                                <option value="5">Grade 5</option>
                                <option value="6">Grade 6</option>

                            </select>
                        </div>
                        <div class="form-group col-6">
                            <input name="guardian_name" class="form-control item" type="text" placeholder="Guardian">
                        </div>
                        <div class="form-group col-6">
                            <input name="guardian_mobile_no" class="form-control item" type="text" placeholder="Guardian Mobile Number">
                        </div>
                        <div class="form-group col-6">
                            <input name="guardian_email" class="form-control item" type="email" placeholder="Guardian Email">
                        </div>
                        <div class="form-group col-6">
                            <input name="address" class="form-control item" type="text" placeholder="Address">
                        </div>
                       
                        {{-- <div class="row col-6">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg"
                                    src=" {{ url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                        </div> --}}
                        <div class="form-group col-12">
                            <label for="">Student Image</label>
                            <input name="student_image" class="form-control item" type="file" id="image">
                            
                        </div>
                     </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn d-grid gap-2 col-6 mx-auto create-account">Add Student</button>
                        </div>
                    </form>
                </div>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
                <script src="assets/js/script.js"></script>
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
@endsection
