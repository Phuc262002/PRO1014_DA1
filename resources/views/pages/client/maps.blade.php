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
                                    <a href="{{ route('cart-detail') }}"><i class="fa fa-cart-arrow-down"></i> Đơn
                                        hàng</a>
                                    <a href="{{ route('service-detail') }}"><i class="fa fa-cart-arrow-down"></i> Dịch
                                        vụ</a>
                                    <a href="{{ route('maps') }}"><i class="fa fa-map-marker"></i> Địa
                                        chỉ</a>
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
                                    <div class="tab-pane fade show active" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Địa chỉ thanh toán</h3>
                                            <address>
                                                <p><strong>Alex Aya</strong></p>
                                                <p>1234 Market ##, Suite 900 <br>Lorem Ipsum, ## 12345</p>
                                                <p>Số điện thoại: (123) 123-456789</p>
                                            </address>
                                            <a href="{{ route('edit-maps') }}"
                                                class="btn btn btn-dark btn-hover-primary rounded-0"><i
                                                    class="fa fa-edit m-r-10"></i>Chỉnh sửa địa chỉ</a>
                                        </div>
                                    </div>

                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->


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


    <!-- Footer Section End -->

    <!-- Modal Start  -->
@endsection
