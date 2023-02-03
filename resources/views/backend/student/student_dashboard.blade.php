@extends('admin.admin_master_student')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/student/style.student.css') }}">
    <div class="row mt-5" style="padding-top: 100px">
      <h1 class="text-center">Homeworks</h1><br><br><br>
        @foreach ($homework as $item)
            <div class="col-4">
                <div class="card mb-5" style="margin: auto;">
                    <div class="card__header">
                        <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image"
                            width="600">
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue">{{ $item->subject->name }}</span>
                        <h4>{{ $item->category }}</h4>

                        <p id="long-text-{{ $loop->index }}" style="display: none; text-align:justify">
                            {!! $item->description !!}
                        </p>

                        <div class="row">
                            <div class="col-6">
                                <a href="#" id="toggle-text-{{ $loop->index }}">See More</a>

                            </div>
                            <div class="col-6"> <a class="card__link float-end"
                                    href="{{ route('student.homework', $item->id) }}" style="font-size: 15px">View
                                    details <i class="fas fa-arrow-right"></i></a></div>
                        </div>




                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
                            <div class="user__info">
                                <h5>{{ $item->user->name }}</h5>
                                <small>{{ $item->created_at }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> {{-- End of column --}}
        @endforeach
    </div>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

      *,
      *::before,
      *::after {
          box-sizing: border-box;
          padding: 0;
          margin: 0;
      }

      .p {
          text-align: justify;
      }

      .container {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          max-width: 1200px;
          margin-block: 2rem;
          gap: 2rem;
      }

      img {
          max-width: 100%;
          object-fit: cover;
      }

      .card {
          display: flex;
          flex-direction: column;
          width: clamp(20rem, calc(20rem + 2vw), 22rem);
          overflow: hidden;
          box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
          border-radius: 1em;
          background: #ECE9E6;
          background: linear-gradient(to right, #FFFFFF, #ECE9E6);

      }



      .card__body {
          padding: 1rem;
          display: flex;
          flex-direction: column;
          gap: .5rem;
      }


      .tag {
          align-self: flex-start;
          padding: .25em .75em;
          border-radius: 1em;
          font-size: .75rem;
      }

      .tag+.tag {
          margin-left: .5em;
      }

      .tag-blue {
          background: #56CCF2;
          background: linear-gradient(to bottom, #2F80ED, #56CCF2);
          color: #fafafa;
      }

      .tag-brown {
          background: #D1913C;
          background: linear-gradient(to bottom, #FFD194, #D1913C);
          color: #fafafa;
      }

      .tag-red {
          background: #cb2d3e;
          background: linear-gradient(to bottom, #ef473a, #cb2d3e);
          color: #fafafa;
      }

      .card__body h4 {
          font-size: 1.5rem;
          text-transform: capitalize;
      }

      .card__footer {
          display: flex;
          padding: 1rem;
          margin-top: auto;
      }

      .user {
          display: flex;
          gap: .5rem;
      }

      .user__image {
          border-radius: 50%;
      }

      .user__info>small {
          color: #666;
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButtons = document.querySelectorAll("[id^='toggle-text-']");
            toggleButtons.forEach(function(toggleButton) {
                const textId = toggleButton.id.replace("toggle-text-", "long-text-");
                const text = document.getElementById(textId);
                toggleButton.addEventListener("click", function(event) {
                    event.preventDefault();
                    text.style.display = (text.style.display === "none") ? "block" : "none";
                    toggleButton.textContent = (toggleButton.textContent === "See More") ?
                        "See Less" : "See More";
                });
            });
        });
    </script>
@endsection
