@extends('layouts.auth.master')
@section('title')
    Pets Care - Xác thực email
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
                    <div class="col-md-8 col-lg-5 col-xl-6">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="mb-4">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title bg-light text-primary display-5 rounded-circle shadow">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 mt-4">
                                    <div class="text-muted text-center mb-4 mx-lg-3">
                                        <h4 class="">Xác nhận email của bạn</h4>
                                        <p>Vui lòng nhập mã gồm 6 chữ số được gửi đến <span
                                                class="fw-semibold">{{ $email }}</span></p>
                                    </div>

                                    <form autocomplete="off">
                                        @csrf
                                        <input type="hidden" name="email" value="{{ $email }}">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                    <input type="text" name="digit1-input" required
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                    <input type="text" name="digit2-input" required
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                    <input type="text" name="digit3-input" required
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                    <input type="text" name="digit4-input" required
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit5-input" class="visually-hidden">Digit 5</label>
                                                    <input type="text" name="digit5-input" required
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(5, event)" maxLength="1" id="digit5-input">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit6-input" class="visually-hidden">Digit 6</label>
                                                    <input type="text" name="digit6-input" required
                                                        class="form-control form-control-lg bg-light border-light text-center"
                                                        onkeyup="moveToNext(6, event)" maxLength="1" id="digit6-input">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-success w-100">Xác nhận</button>
                                        </div>
                                    </form><!-- end form -->

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Không nhận được mã? <a href="javascript:void(0)" id="sendOTP"
                                    class="fw-semibold text-primary text-decoration-underline">Gửi lại</a> </p>
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
                $('form').submit(function(e) {
                    e.preventDefault(this);
                    var formData = new FormData(this);
                    var codeOTP = $('#digit1-input').val() + $('#digit2-input').val() + $('#digit3-input')
                        .val() +
                        $('#digit4-input').val() + $('#digit5-input').val() + $('#digit6-input').val();
                    formData.append('OTP_token', codeOTP);
                    $.ajax({
                        url: "{{ route('verification.verify_OTP') }}",
                        type: 'POST',
                        data: formData,
                        success: function(data) {
                            if (data.status == 'success') {
                                Success(data.message);
                                setTimeout(function() {
                                    window.location.href = "{{ route('home') }}";
                                }, 2000);
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

            $('#sendOTP').click(function() {
                Warning("Đang gửi mã OTP");
                $.ajax({
                    url: "{{ route('auth.re_register') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    data: {
                        email: "{{ $email }}"
                    },
                    success: function(data) {
                        if (data.status == 'success') {
                            Success(data.message);
                        } else {
                            Error(data.message);
                        }
                    },
                });
            });
        </script>
    @endsection
