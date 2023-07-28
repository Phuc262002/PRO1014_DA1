<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <meta name="description" content="Hãy đến Pets Care cung cấp dịch vụ mua sắm và chăm sóc thú cưng toàn diện" />
    <meta property="og:url" content="{{ asset('assets/images/logo/logo.png') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pets Care | Chúng tôi luôn đồng hành cùng bạn" />
    <meta property="og:description" content="Hãy đến Pets Care cung cấp dịch vụ mua sắm và chăm sóc thú cưng toàn diện" />
    <meta property="og:image" content="{{ asset('assets/images/logo/logo.png') }}" />

    <meta property="twitter:card" content="Pets Care | Chúng tôi luôn đồng hành cùng bạn" />
    <meta property="twitter:title" content="Pets Care | Chúng tôi luôn đồng hành cùng bạn" />
    <meta property="twitter:description" content="Hãy đến Pets Care cung cấp dịch vụ mua sắm và chăm sóc thú cưng toàn diện" />
    <meta property="twitter:image" content="{{ asset('assets/images/logo/logo.png') }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Vendor CSS (Icon Font) -->

    <!--
<link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css" />
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/vendor/simple-line-icons.min.css" />
<link rel="stylesheet" href="assets/css/vendor/themify-icons-min.css" />
 -->

    <!-- Plugins CSS (All Plugins Files) -->

    <!--
<link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
<link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
<link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
<link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
<link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />
-->

    <!-- Main Style CSS -->

    <!-- <link rel="stylesheet" href="assets/css/style.css" />  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toast.css') }}">




</head>

<body>
    <!-- Header Section Start -->
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-name-primary">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Top Message Start -->
                    <div class="col-12 col-lg-6">
                        <div class="header-top-msg-wrapper">
                            <p class="header-top-message">Chào mừng đến với Pets Care !</p>
                        </div>
                    </div>

                    <!-- Header Top Message End -->

                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- Header Logo Start -->
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="header-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                        alt="Site Logo" style="height: 80px;width: 80px;" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="main-menu">
                                <ul>
                                    <li class="has-children">
                                        <a class="{{ Request::routeIs('home') ? 'active' : '' }}"
                                            href="{{ route('home') }}">Trang chủ</a>
                                    </li>
                                    <li class="has-children position-static">
                                        <a class="{{ Request::routeIs('san-pham.index') ? 'active' : '' }}"
                                            href="{{ route('san-pham.index') }}">Cửa hàng</a>

                                    </li>
                                    <li class="has-children">
                                        <a class="{{ Request::routeIs('services') | Request::routeIs('') ? 'active' : '' }}"
                                            href="#">Dịch vụ</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('dich-vu.index') }}">Các dịch vụ</a></li>
                                            <li><a href="{{ route('dich-vu.create') }}">Đặt lịch</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="{{ Request::routeIs('bai-viet.index') ? 'active' : '' }}"
                                            href="{{ route('bai-viet.index') }}">Blog</a>
                                    </li>

                                    <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                                    <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-lg-2 col-md-8 col-6">
                            <div class="header-actions">

                                <!-- Header Action Search Button Start -->
                                <div class="header-action-btn header-action-btn-search d-none d-md-flex">
                                    <div class="action-execute">
                                        <a class="action-search-open" href="javascript:void(0)"><i
                                                class="icon-magnifier icons"></i></a>
                                        <a class="action-search-close" href="javascript:void(0)"><i
                                                class="ti-close"></i></a>
                                    </div>
                                    <!-- Search Form and Button Start -->
                                    <form class="header-search-form" action="{{ route('san-pham.index') }}">
                                        <input type="text" class="header-search-input" name="search"
                                            placeholder="Nhập tên sản phẩm">
                                        @foreach (request()->query() as $key => $value)
                                            @if ($key != 'search')
                                                <input type="hidden" name="{{ $key }}"
                                                    value="{{ $value }}">
                                            @endif
                                        @endforeach
                                        <button class="header-search-button"><i
                                                class="icon-magnifier icons"></i></button>
                                    </form>
                                    <!-- Search Form and Button End -->
                                </div>
                                <!-- Header Action Search Button End -->

                                <!-- Header Action Button Start -->
                                <div class="header-action-btn header-action-btn-cart d-none d-sm-flex">
                                    <a class="cart-visible" href="javascript:void(0)">
                                        <i class="icon-handbag icons"></i>
                                        <span class="header-action-num">0</span>
                                    </a>

                                    <!-- Header Cart Content Start -->
                                    <div class="header-cart-content">

                                        <!-- Cart Procut Wrapper Start  -->
                                        <div class="cart-product-wrapper"></div>
                                        <!-- Cart Procut Wrapper -->

                                        <!-- Cart Product Total Start -->
                                        <div class="cart-product-total p-b-20 m-b-20 border-bottom">
                                            <span class="value">Tổng tiền</span>
                                            <span class="price" id="total-cart-money"></span>
                                        </div>
                                        <!-- Cart Product Total End -->

                                        <!-- Cart Product Button Start -->
                                        <div class="cart-product-btn m-t-20">
                                            <a href="{{ route('cart') }}"
                                                class="btn btn-outline-light btn-hover-primary w-100">Xem giỏ hàng</a>
                                            <a href="{{ route('thanh-toan.index') }}"
                                                class="btn btn-outline-light btn-hover-primary w-100 m-t-20">Thanh
                                                toán</a>
                                        </div>
                                        <!-- Cart Product Button End -->

                                    </div>
                                    <!-- Header Cart Content End -->

                                </div>
                                <div class="header-action-btn header-action-btn-cart d-flex d-sm-none">
                                    <a href="{{ route('cart') }}">
                                        <i class="icon-handbag icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>
                                </div>
                                <!-- Header Action Button End -->

                                <!-- Header My Account Button Start -->
                                @if (Auth::check())
                                    <a href="{{ route('thong-tin-ca-nhan.index') }}"
                                        class="header-action-btn header-action-btn-wishlist">
                                        <img class="rounded-circle w-50 header-profile-user"
                                            src="{{ Auth::user()->image }}" alt="Header Avatar">
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="header-action-btn header-action-btn-wishlist">
                                        <i class="icon-user icons"></i>
                                    </a>
                                @endif

                                <!-- Header My Account Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)"
                                    class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
                                    <i class="icon-menu"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

    </div>
    <!-- Header Section End -->
