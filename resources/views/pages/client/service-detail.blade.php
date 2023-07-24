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
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ route('thong-tin-ca-nhan.index') }}"><i class="fa fa-user"></i> Tài khoản</a>
                                    <a href="{{ route('don-hang-ca-nhan.index') }}"><i class="fa fa-cart-arrow-down"></i>
                                        Đơn hàng</a>
                                    <a href="{{ route('dich-vu-ca-nhan.index') }}"><i class="fa fa-cart-arrow-down"></i>
                                        Dịch
                                        vụ</a>
                                    <a href="{{ route('dia-chi.index') }}"><i class="fa fa-map-marker"></i> Địa
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

                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Đơn hàng dịch vụ</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Đơn hàng</th>
                                                            <th>Dịch vụ</th>
                                                            <th>Thú nuôi</th>
                                                            <th>Ngày đặt</th>
                                                            <th>Giờ đặt</th>
                                                            <th>Mô tả</th>
                                                            <th>Ghi chú</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Trạng thái</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Cắt, tỉa</td>
                                                            <td>Poodle</td>
                                                            <td>12.8.2023</td>
                                                            <td>13:00</td>
                                                            <td>Cắt, tỉa</td>
                                                            <td>Đợi xử lý</td>
                                                            <td>200.000</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Cắt, tỉa</td>
                                                            <td>Mèo Mun</td>
                                                            <td>12.8.2023</td>
                                                            <td>8:00</td>
                                                            <td>Cắt, tỉa</td>
                                                            <td>Đặt thành công</td>
                                                            <td>200.000</td>
                                                            <td>Approve</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Cắt, tỉa</td>
                                                            <td>Poodle</td>
                                                            <td>12.8.2023</td>
                                                            <td>13:00</td>
                                                            <td>Cắt, tỉa</td>
                                                            <td>Đợi xử lý</td>
                                                            <td>200.000</td>
                                                            <td>Pending</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->

                                    <!-- Single Tab Content End -->
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
