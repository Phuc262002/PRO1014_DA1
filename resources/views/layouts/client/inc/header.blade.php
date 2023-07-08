<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Amber - Pet Care Bootstrap 5 Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">

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


    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toast.css')}}">




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
                            <p class="header-top-message">Welcome To our shop !</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="header-top-settings">
                            <ul class="nav">
                                <li class="curreny-wrap">
                                    <a href="#">USD</a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#">€ EUR</a></li>
                                        <li><a href="#">£ GBP</a></li>
                                        <li><a href="#">₹ INR</a></li>
                                        <li><a href="#">¥ JPY</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="header-logo">
                                <a href="/"><img src="{{url('assets/images/logo/logo.png')}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="main-menu">
                                <ul>
                                    <li class="has-children">
                                        <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children position-static">
                                        <a href="#">Shop</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-col">
                                                <h4 class="mega-menu-title">Shop Layout</h4>
                                                <ul class="m-b-n10">
                                                    <li><a href="shop">Shop Grid</a></li>
                                                    <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col">
                                                <h4 class="mega-menu-title">Product Layout</h4>
                                                <ul class="m-b-n10">
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                    <li><a href="single-product-variable.html">Single Product Variable</a></li>
                                                    <li><a href="single-product-countdown.html">Single Product Countdown</a></li>
                                                    <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                                    <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col">
                                                <h4 class="mega-menu-title">Other Pages</h4>
                                                <ul class="m-b-n10">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login.html">Login | Register</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col">
                                                <div class="megamenu-image">
                                                    <a href="shop.html">
                                                        <img class="fit-image" src="assets/images/header/mega-menu.png" alt="Megamenu Image">
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-lg-3 col-md-8 col-6">
                            <div class="header-actions">

                                <!-- Header Action Search Button Start -->
                                <div class="header-action-btn header-action-btn-search d-none d-md-flex">
                                    <div class="action-execute">
                                        <a class="action-search-open" href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                        <a class="action-search-close" href="javascript:void(0)"><i class="ti-close"></i></a>
                                    </div>
                                    <!-- Search Form and Button Start -->
                                    <form class="header-search-form" action="#">
                                        <input type="text" class="header-search-input" placeholder="Search Our Store">
                                        <button class="header-search-button"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                    <!-- Search Form and Button End -->
                                </div>
                                <!-- Header Action Search Button End -->

                                <!-- Header Action Button Start -->
                                <div class="header-action-btn header-action-btn-cart d-none d-sm-flex">
                                    <a class="cart-visible" href="javascript:void(0)">
                                        <i class="icon-handbag icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>

                                    <!-- Header Cart Content Start -->
                                    <div class="header-cart-content">

                                        <!-- Cart Procut Wrapper Start  -->
                                        <div class="cart-product-wrapper">

                                            <!-- Cart Product/Price Start -->
                                            <div class="cart-product-inner p-b-20 m-b-20 border-bottom">

                                                <!-- Single Cart Product Start -->
                                                <div class="single-cart-product">
                                                    <div class="cart-product-thumb">
                                                        <a href="single-product.html"><img src="assets/images/header/header-cart/1.png" alt="Cart Product"></a>
                                                    </div>
                                                    <div class="cart-product-content">
                                                        <h3 class="title"><a href="single-product.html">Basic Dog Trainning</a></h3>
                                                        <div class="product-quty-price">
                                                            <span class="cart-quantity">Qty: <strong> 1 </strong></span>
                                                            <span class="price">
															<span class="new">$70.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Product End -->

                                                <!-- Product Remove Start -->
                                                <div class="cart-product-remove">
                                                    <a href="#/"><i class="icon-close"></i></a>
                                                </div>
                                                <!-- Product Remove End -->

                                            </div>
                                            <!-- Cart Product/Price End -->

                                            <!-- Cart Product/Price Start -->
                                            <div class="cart-product-inner p-b-20 m-b-20 border-bottom">

                                                <!-- Single Cart Product Start -->
                                                <div class="single-cart-product">
                                                    <div class="cart-product-thumb">
                                                        <a href="single-product.html"><img src="assets/images/header/header-cart/2.png" alt="Cart Product"></a>
                                                    </div>
                                                    <div class="cart-product-content">
                                                        <h3 class="title"><a href="single-product.html">Wait, You Need This</a></h3>
                                                        <div class="product-quty-price">
                                                            <span class="cart-quantity">Qty: <strong> 1 </strong></span>
                                                            <span class="price">
															<span class="new">$80.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Cart Product End -->

                                                <!-- Product Remove Start -->
                                                <div class="cart-product-remove">
                                                    <a href="#/"><i class="icon-close"></i></a>
                                                </div>
                                                <!-- Product Remove End -->

                                            </div>
                                            <!-- Cart Product/Price End -->

                                        </div>
                                        <!-- Cart Procut Wrapper -->

                                        <!-- Cart Product Total Start -->
                                        <div class="cart-product-total p-b-20 m-b-20 border-bottom">
                                            <span class="value">Total</span>
                                            <span class="price">200$</span>
                                        </div>
                                        <!-- Cart Product Total End -->

                                        <!-- Cart Product Button Start -->
                                        <div class="cart-product-btn m-t-20">
                                            <a href="cart.html" class="btn btn-outline-light btn-hover-primary w-100">View cart</a>
                                            <a href="checkout.html" class="btn btn-outline-light btn-hover-primary w-100 m-t-20">Checkout</a>
                                        </div>
                                        <!-- Cart Product Button End -->

                                    </div>
                                    <!-- Header Cart Content End -->

                                </div>
                                <div class="header-action-btn header-action-btn-cart d-flex d-sm-none">
                                    <a href="cart.html">
                                        <i class="icon-handbag icons"></i>
                                        <span class="header-action-num">3</span>
                                    </a>
                                </div>
                                <!-- Header Action Button End -->

                                <!-- Header My Account Button Start -->
                                @if (Auth::check())
                                    <a href="{{route('logout')}}" class="header-action-btn header-action-btn-wishlist">
                                        <i class="icon-user icons"></i>
                                    </a>
                                @else
                                    <a href="{{route('login')}}" class="header-action-btn header-action-btn-wishlist">
                                        <i class="icon-user icons"></i>
                                    </a>
                                @endif

                                <!-- Header My Account Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
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