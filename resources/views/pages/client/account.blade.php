@extends('layouts.client.master')

@section('content')
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Tài khoản</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li>Tài khoản của tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- My Account Section Start -->
    <div class="section section-margin">
        <div class="container">
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
            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ route('thong-tin-ca-nhan.index') }}"><i class="fa fa-user"></i> Tài
                                        khoản</a>
                                    <a href="{{ route('don-hang-ca-nhan.index') }}"><i class="fa fa-cart-arrow-down"></i>
                                        Đơn hàng</a>
                                    <a href="{{ route('dich-vu-ca-nhan.index') }}"><i class="fa-solid fa-shield-dog"></i>
                                        Dịch
                                        vụ</a>
                                    <a href="{{ route('dia-chi.index') }}"><i class="fa fa-map-marker"></i> Địa chỉ</a>
                                    @if (Auth::user()->is_admin == true)
                                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-user"></i> Quản trị
                                            Admin</a>
                                    @endif
                                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <!-- Single Tab Content Start -->

                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Tài khoản</h3>
                                            <div class="account-details-form">
                                                
                                                <form method="POST" enctype="multipart/form-data"
                                                    action="{{ route('thong-tin-ca-nhan.update', ['thong_tin_ca_nhan' => Auth::user()->id]) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="display-name" class="required m-b-10">Tên hiển
                                                            thị</label>
                                                        <input type="text" id="display-name" name="name"
                                                            value="{{ Auth::user()->name }}" placeholder="Tên hiển thị" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="email" class="required m-b-5">Email</label>
                                                        <input type="email" id="email" placeholder="Email" readonly
                                                            value="{{ Auth::user()->email }}" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="formFile" class="required m-b-5">Đổi avatar</label>
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" name="image">
                                                        </div>
                                                    </div>
                                                    @if (Auth::user()->google_id == null && Auth::user()->github_id == null && Auth::user()->facebook_id == null)
                                                        <fieldset>
                                                            <legend>Đổi mật khẩu</legend>
                                                            <div class="single-input-item m-b-15">
                                                                <label for="current-pwd" class="required m-b-10">Mật khẩu
                                                                    cũ</label>
                                                                <input type="password" id="current-pwd"
                                                                    placeholder="Mật khẩu hiển thị" name="old_password" />
                                                            </div>
                                                            <div class="row m-b-n15">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item m-b-15">
                                                                        <label for="new-pwd" class="required m-b-10">Mật
                                                                            khẩu
                                                                            mới</label>
                                                                        <input type="password" id="new-pwd"
                                                                            placeholder="Mật khẩu mới"
                                                                            name="new_password" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item m-b-15">
                                                                        <label for="confirm-pwd"
                                                                            class="required m-b-10">Nhập
                                                                            lại mật khẩu</label>
                                                                        <input type="password" id="confirm-pwd"
                                                                            name="confirm_password"
                                                                            placeholder="Nhập lại mật khẩu" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    @endif
                                                    <div class="single-input-item single-item-button m-t-30">
                                                        <button class="btn btn btn-primary btn-hover-dark rounded-0">Lưu
                                                            thay đổi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->

                                </div>
                            </div>
                            <!-- My Account Tab Content End -->

                        </div>
                    </div>
                    <!-- My Account Page End -->

                </div>
            </div>

        </div>
    </div>
    <!-- My Account Section End -->
@endsection
@section('js')
@endsection
