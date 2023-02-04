@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/student/style.student.css') }}">
    {{-- dropzone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <iframe width="100%" height="500px" src="{{ $homework->video_link }}"
                        title="DreamWorks Madagascar | Penguins of Madagascar: Antarctic Documentary | Kids Movies"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $homework->category }}</h4>
                    <p class="card-text">{!! $homework->description !!}</p>
                    <p class="card-text">{{ $homework->file }}</p>
                    <button class="watch btn btn-light">
                        <a href="{{ asset('/uploads/' . $homework->file) }}" download
                            style="color: rgb(37, 35, 35)">Download File</a>
                    </button> <br>


                    <form action="{{ route('student.homework.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="subject_id" value="{{ $homework->subject_id }}">
                        <input type="hidden" name="homework_id" value="{{ $homework->category }}">
                        <input type="hidden" name="teacher_id" value="{{ $homework->teacher_id }}" readonly>

                        <p class="card-text">
                            <small class="text-muted">Last updated {{ $homework->created_at }}</small>
                        </p>

                        <div class="input-group">
                            <input type="file" class="form-control" id="customFile" name="file">
                        </div> <br>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Submit Homework</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card__title {
            grid-row: 3/4;
            font-weight: 400;
            color: #ffffff;

        }

        .justified {
            text-align: right !important;
        }

        .ql-align-justify {
            text-align: justify;
        }
    </style>

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
