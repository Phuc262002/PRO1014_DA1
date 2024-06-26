@extends('layouts.auth.master')
@section('title')
    Pets Care - Quên mật khẩu
@endsection
@section('content')
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
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
                                <a href="{{ route('home') }}" class="d-inline-block auth-logo">
                                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" height="200">
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
                                    <h5 class="text-primary">Quên mật khẩu?</h5>
                                    <p class="text-muted">Đặt lại mật khẩu với Pets Care</p>

                                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                        colors="primary:#0ab39c" class="avatar-xl">
                                    </lord-icon>

                                </div>

                                <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                    Nhập email của bạn và hướng dẫn khôi phục sẽ được gửi đến Email của bạn!
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-borderless alert-success text-center mb-2 mx-2" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-borderless alert-danger text-center mb-2 mx-2" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="p-2">
                                    <form action="{{ route('password.reset') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-4">
                                            <label class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Nhập Email">
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-success w-100" type="submit">Gửi liên kết thiết lập
                                                lại</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Chờ đã, tôi vẫn còn nhớ mật khẩu... <a href="{{ route('login') }}"
                                    class="fw-semibold text-primary text-decoration-underline"> Bấm vào đây </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    @endsection
