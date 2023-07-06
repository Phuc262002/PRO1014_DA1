@extends('layouts.client.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Login</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Login Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 m-auto">
                    <div class="login-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center m-b-30">
                            <h2 class="title m-b-10">Login</h2>
                        </div>
                        <!-- Login Title & Content End -->
                        <!-- Form Action Start -->
                        <form id="login_form" enctype="multipart/form-data">
                            @csrf
                            <!-- Input Email Start -->
                            <div class="single-input-item m-b-10">
                                <input type="email" name="email" placeholder="Email or Username">
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item m-b-10">
                                <input type="password" name="password" placeholder="Enter your Password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Button/Forget Password Start -->
                            <div class="single-input-item m-b-15">
                                <div class="login-reg-form-meta m-b-n15">

                                    <button class="btn btn btn-gray-deep btn-hover-primary m-b-15">Sign In</button>
                                    <a href="#" class="forget-pwd m-b-15">Forget Password?</a>

                                </div>
                            </div>
                            <!-- Button/Forget Password End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="{{ route('register') }}">Creat Account</a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->
                            <div class="lost-password">
                                <a href="{{ route('auth.google.login') }}">Login google</a>
                            </div>
                            <div class="lost-password">
                                <a href="{{ route('auth.facebook.login') }}">Login facebook</a>
                            </div>
                            <div class="lost-password">
                                <a href="{{ route('auth.github.login') }}">Login github</a>
                            </div>
                        </form>
                        <!-- Form Action End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#login_form').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('login') }}",
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        if (data.status == 'success') {
                            Success(data.message);
                            setTimeout(function() {
                                window.location.href = "{{ route('home') }}";
                            }, 1000);
                        } else {
                            Error(data.message);
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
