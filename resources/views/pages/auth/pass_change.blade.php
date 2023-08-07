@extends('layouts.auth.master')
@section('title')
    Pets Care - Thay đổi mật khẩu
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
                                    <h5 class="text-primary">Thay đổi mật khẩu</h5>
                                    @if (session('success'))
                                        <div class="alert alert-borderless alert-success text-center mb-2 mx-2"
                                            role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-borderless alert-danger text-center mb-2 mx-2"
                                                role="alert">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="p-2">
                                    <form action="{{ route('password.email') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="useremail"
                                                value="{{ $email }}" readonly>
                                            <div class="invalid-feedback">
                                                Hãy nhập Email của bạn.
                                            </div>
                                        </div>
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Mật khẩu<span
                                                    class="text-danger">*</span></label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password"
                                                    class="form-control pe-5 password-input" onpaste="return false"
                                                    placeholder="Nhập mật khẩu" id="password-input"
                                                    aria-describedby="passwordInput"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div id="passwordInput" class="form-text">Mật khẩu phải có ít nhất 8 ký tự.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirm-password-input">Xác nhận mật khẩu<span
                                                    class="text-danger">*</span></label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input"
                                                    name="password_confirmation" onpaste="return false"
                                                    placeholder="Nhập lại mật khẩu"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                    id="confirm-password-input" required>
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon"
                                                    type="button" id="confirm-password-input"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Mật khẩu phải có:</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Ít nhất <b>8 ký tự</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">Có ít nhất 1 <b>chữ thường</b>
                                                (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">Có ít nhất 1 <b>chữ hoa</b> (A-Z)
                                            </p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">Có ít nhất 1 <b>số</b> (0-9)</p>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Lưu mật khẩu</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Đặt lại mật khẩu</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Chờ đã,tôi vẫn muốn giữ mật khẩu cũ của tôi... <a
                                    href="auth-signin-basic.html"
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
