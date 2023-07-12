@extends('layouts.auth.master')

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
                                <a href="{{route('home')}}" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo.png" alt="" height="200">
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
                                    <h5 class="text-primary">Tạo tài khoản mới</h5>
                                    <p class="text-muted">Tạo tài khoản Pets Care cho riêng bạn</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form id="register_form" class="needs-validation" enctype="multipart/form-data" novalidate>
                                        @csrf

                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Họ và Tên <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="useremail"
                                                placeholder="Nhập họ và tên" required>
                                            <div class="invalid-feedback">
                                                Hãy nhập tên của bạn.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="useremail"
                                                placeholder="Nhập Email" required>
                                            <div class="invalid-feedback">
                                                Hãy nhập Email của bạn.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Tên đăng nhập <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="Nhập tên đăng nhập" required>
                                            <div class="invalid-feedback">
                                                Hãy nhập tên đăng nhập của bạn.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Mật khẩu</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input"
                                                    onpaste="return false" placeholder="Nhập mật khẩu" id="password-input"
                                                    aria-describedby="passwordInput"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none shadow-none text-muted password-addon"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Hãy nhập mật khẩu của bạn.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-0 fs-12 text-muted fst-italic">Bằng cách đăng ký, bạn đồng ý với
                                                Pets Care <a href="#"
                                                    class="text-primary text-decoration-underline fst-normal fw-medium">
                                                    Điều khoản sử dụng</a></p>
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

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Đăng ký</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title text-muted">Tạo tài khoản với</h5>
                                            </div>

                                            <div>
                                                <button type="button"
                                                    class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                        class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button"
                                                    class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                        class="ri-google-fill fs-16"></i></button>
                                                <button type="button"
                                                    class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                        class="ri-github-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Đã có tài khoản ? <a href="{{route('login')}}"
                                    class="fw-semibold text-primary text-decoration-underline"> Đăng nhập </a> </p>
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
                                window.location.href = data.link_authencation;
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
