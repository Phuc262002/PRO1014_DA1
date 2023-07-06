@extends('layouts.client.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Create Account</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Create Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Register Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 m-auto">
                    <div class="login-wrapper">
                        <!-- Register Title & Content Start -->
                        <div class="section-content text-center m-b-30">
                            <h2 class="title m-b-10">Create Account</h2>
                        </div>
                        <!-- Register Title & Content End -->

                        <!-- Form Action Start -->
                        <form id="register_form" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf
                            <!-- Input First Name Start -->
                            <div class="single-input-item m-b-10">
                                <input type="text" name="name" class="form-control" id="validationCustom02" placeholder="Name" required>
                                <div class="invalid-feedback message_name"></div> 
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Email Start -->
                            <div class="single-input-item m-b-10">
                                <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Email" required>
                                <div class="invalid-feedback message_email"></div>
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item m-b-10">
                                <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="Password" required>
                                <div class="invalid-feedback message_password"></div>
                            </div>
                            <!-- Input Password End -->

                            <div class="single-input-item m-b-10">
                                <input type="password" name="password_confirmation" class="form-control" id="validationCustom02" placeholder="Confirmation" required>
                                <div class="invalid-feedback message_password_confirmation"></div>
                            </div>
                            <!-- Button/Forget Password Start -->
                            <div class="single-input-item">
                                <div class="login-reg-form-meta m-b-n15">
                                    <button class="btn btn btn-gray-deep btn-hover-primary m-b-15">Create</button>
                                </div>
                            </div>
                            <!-- Button/Forget Password End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Section End -->
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#register_form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '{{ route('register') }}',
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        if (data.status == 'success') {
                            Success(data.message);
                            setTimeout(function () {
                                window.location.href = '{{ route('home') }}';
                            }, 1000);
                        } else {
                            Error(data.message);
                            $('#register_form')[0].classList.add('was-validated')
                            $.each(data.errors, function (key, value) {
                                $('.message_' + key).html(value);
                            });
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
@endsection