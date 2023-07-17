@extends('layouts.client.master')

@section('content')
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Tài khoản</h2>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
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

            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ route('account') }}"><i class="fa fa-user"></i> Tài khoản</a>
                                    <a href="{{ route('cart-detail') }}"><i class="fa fa-cart-arrow-down"></i> Đơn hàng</a>
                                    <a href="{{ route('service-detail') }}"><i class="fa fa-cart-arrow-down"></i> Dịch
                                        vụ</a>
                                    <a href="{{ route('maps') }}"><i class="fa fa-map-marker"></i> Địa chỉ</a>
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
                                                <form action="#">
                                                    <div class="row">
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="display-name" class="required m-b-10">Tên hiển
                                                            thị</label>
                                                        <input type="text" id="display-name"
                                                            value="{{ Auth::user()->name }}" placeholder="Tên hiển thị" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="email" class="required m-b-5">Email</label>
                                                        <input type="email" id="email" placeholder="Email" readonly
                                                            value="{{ Auth::user()->email }}" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="formFile" class="required m-b-5">Đổi avatar</label>
                                                        <input type="hidden" class="form-control" name="image_old"
                                                            value="{{ Auth::user()->image }}">
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" name="image">
                                                        </div>
                                                    </div>
                                                    <fieldset>
                                                        <legend>Đổi mật khẩu</legend>
                                                        <div class="single-input-item m-b-15">
                                                            <label for="current-pwd" class="required m-b-10">Mật khẩu hiển
                                                                thị</label>
                                                            <input type="password" id="current-pwd"
                                                                placeholder="Mật khẩu hiển thị" />
                                                        </div>
                                                        <div class="row m-b-n15">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item m-b-15">
                                                                    <label for="new-pwd" class="required m-b-10">Mật khẩu
                                                                        mới</label>
                                                                    <input type="password" id="new-pwd"
                                                                        placeholder="Mật khẩu mới" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item m-b-15">
                                                                    <label for="confirm-pwd" class="required m-b-10">Nhập
                                                                        lại mật khẩu</label>
                                                                    <input type="password" id="confirm-pwd"
                                                                        placeholder="Nhập lại mật khẩu" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
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
