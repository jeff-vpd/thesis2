@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/student/style.student.css">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container text-center">
                <div class="mb-5 shadow p-3 mb-5 bg-body-tertiary bg-info rounded">
                    <h1 class="text-white">My Homework</h1>
                </div> {{-- End title page --}}
                <div class="container px-4 text-center">
                    <div class="row gx-3">
                        @foreach ($homework as $item)
                            <div class="col-5 shadow p-3 mb-5 bg-body-tertiary rounded"
                                style="background-color: aliceblue;margin:20px;">
                                <div class="" style="padding:20px;">
                                    <div class="three text-start">
                                        <h1>{{ $item->category }}</h1>
                                    </div>
                                    <div class="content" style="display:flex;">
                                        {!! $item->description !!}
                                    </div>
                                    <div class="mb-5">
                                        <a href="{{ $item->video_link }}">{{ $item->video_link }}</a>
                                    </div>
                                    
                                    <div>
                                        <button class="btn btn-primary" role="button"> <a
                                                href="{{ route('student.homework', $item->id) }}" style="color: #fff"> Update</a></button>
                                    </div>
                                </div>
                            </div> {{-- End col  --}}
                        @endforeach
                    </div> {{-- End row --}}
                </div>
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
