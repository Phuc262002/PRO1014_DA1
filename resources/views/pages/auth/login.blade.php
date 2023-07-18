@extends('layouts.auth.master')

@section('content')


    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="{{route('home')}}" class="d-inline-block auth-logo">
                                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="" height="200">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Chào bạn !</h5>
                                    <p class="text-muted">Đăng nhập để tiếp tục với Pets Care.</p>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
                                <div class="p-2 mt-4">
                                    <form id="login_form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Tên đăng nhập</label>
                                            <input  type="email" name="email" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="{{route('password.reset')}}" class="text-muted">Quên mật khẩu?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Mật khẩu</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Nhập mật khẩu" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember_me" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Lưu đăng nhập</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100">Đăng nhập</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Đăng nhập với</h5>
                                            </div>
                                            <div>
                                                <a href="{{ route('auth.facebook.login') }}" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></a>
                                                <a href="{{ route('auth.google.login') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></a>
                                                <a href="{{ route('auth.github.login') }}" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></a>
                                    
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Chưa có tài khoản ? <a href="{{route('register')}}" class="fw-semibold text-primary text-decoration-underline"> Đăng ký </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

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
                            if(data.link_authencation){
                                setTimeout(function() {
                                    window.location.href = data.link_authencation;
                                }, 1000);
                            }
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
