@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/student/style.student.css">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="registration-form">
                    <form method="post" action="{{ route('teacher.update') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $teacher->id }}">
                        <div class="form-icon">
                            <img id="showImage" class="rounded avatar-lg" src=" {{ url('upload/no_photo.jpg') }}"
                                alt="Card image cap">

                        </div>
                        <div class="text-center mb-4">
                            <h3> <span style="font-weight: 800;color:rgb(33, 63, 63);">Edit Teacher</span> </h3>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <select name="title" id="title" class="form-select item">
                                    <option value="Mr." {{ 'Mr.' == $teacher->title ? 'selected' : '' }}>
                                        Mr.</option>
                                    <option value="Ms."{{ 'Ms.' == $teacher->title ? 'selected' : '' }}>
                                        Ms.</option>
                                    <option value="Mrs."{{ 'Mrs.' == $teacher->title ? 'selected' : '' }}>
                                        Mrs.</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <input name="name" class="form-control item" value="{{ $teacher->name }}" type="text"
                                    placeholder="Teacher's Name">
                            </div>
                            <div class="form-group col-6">
                                <select name="level" id="level" class="form-select item">
                                    <option value="Preschool Teachers/Child Care Workers."
                                        {{ 'Preschool Teachers/Child Care Workers.' == $teacher->level ? 'selected' : '' }}>
                                        Preschool Teachers/Child Care Workers.</option>
                                    <option
                                        value="Elementary School Teachers (K-6)."{{ 'Elementary School Teachers (K-6).' == $teacher->level ? 'selected' : '' }}>
                                        Elementary School Teachers (K-6).</option>
                                    <option
                                        value="Secondary School Teachers (Middle School/Jr. High School/High School)."{{ 'Secondary School Teachers (Middle School/Jr. High School/High School).' == $teacher->level ? 'selected' : '' }}>
                                        Secondary School Teachers (Middle School/Jr. High School/High School).</option>
                                    <option
                                        value="Special Education Teacher (K-12)."{{ 'Special Education Teacher (K-12).' == $teacher->level ? 'selected' : '' }}>
                                        Special Education Teacher (K-12).</option>
                                    <option
                                        value="   College/University Faculty (Post-Secondary/Higher Education)."{{ '   College/University Faculty (Post-Secondary/Higher Education).' == $teacher->level ? 'selected' : '' }}>
                                        College/University Faculty (Post-Secondary/Higher Education).</option>
                                    <option
                                        value=">Counselors (School
                                            Counseling/College Counseling)."{{ 'Counselors (School Counseling/College Counseling).' ==
                                            $teacher->level
                                                ? 'selected'
                                                : '' }}>
                                        >Counselors (School
                                        Counseling/College Counseling).</option>

                                </select>
                            </div>
                            <div class="form-group col-6">
                                <select name="subject_id" class="form-select item" aria-label="Default select example">
                                    <option selected="">Select Subject</option>
                                    @foreach ($subject as $sub)
                                        <option value="{{ $sub->id }}"
                                            {{ $sub->id == $teacher->subject_id ? 'selected' : '' }}>{{ $sub->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn d-grid gap-2 col-6 mx-auto create-account">Update
                                Teacher</button>
                        </div>
                    </form>
                </div>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
                </script>
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
