@extends('layouts.client.master')
@section('title')
@endsection
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
        <div class="container-xxl">

            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">
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
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ route('thong-tin-ca-nhan.index') }}"><i class="fa fa-user"></i> Tài
                                        khoản</a>
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
                                    <div class="tab-pane fade show active" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Địa chỉ thanh toán</h3>

                                            <div class="row">
                                                @foreach ($inforUser as $item)
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div class="shadow p-3 mb-4 bg-white rounded" style="position: relative;">
                                                            <address>
                                                                <p><strong>Họ tên : </strong> {{ $item->fullname }}</p>
                                                                <p><strong>Địa chỉ : </strong>{{ $item->address }}</p>
                                                                <p><strong>Số điện thoại : </strong>{{ $item->phone }}</p>
                                                            </address>
                                                            @if ($item->is_default == true)
                                                            <span class="badges" style="position: absolute; top: 10px; right: 10px; ">
                                                                <span class="badge badge-success bg-danger" >Mặc định</span>
                                                            </span>
                                                               
                                                            @endif
                                                            <a href="{{ route('dia-chi.edit', ['dia_chi' => $item->id]) }}"
                                                                class="btn btn btn-primary btn-hover-dark rounded-4">
                                                                <i class="fa fa-edit m-r-10"></i>Chỉnh sửa địa chỉ</a>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                           
                                            <a href="{{ route('dia-chi.create') }}" class="btn btn btn-primary btn-hover-dark rounded-4" >
                                                Thêm địa chỉ
                                            </a>
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
