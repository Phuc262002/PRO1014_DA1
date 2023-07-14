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
                                    <a href="{{route('account')}}"><i class="fa fa-user"></i> Tài khoản</a>
                                    <a href="{{route('cart-detail')}}"><i class="fa fa-cart-arrow-down"></i> Đơn
                                        hàng</a>
                                    <a href="{{route('service-detail')}}"><i class="fa fa-cart-arrow-down"></i> Dịch vụ</a>
                                    <a href="{{route('maps')}}"><i class="fa fa-map-marker"></i> Địa
                                        chỉ</a>
                                    <a href="{{route('account')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <!-- Single Tab Content Start -->

                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            

                                            <div id="layout-wrapper">
                                                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                                        <i class='bx bx-shopping-bag fs-22'></i>
                                                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                                                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                                                                        items</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-simplebar style="max-height: 300px;">
                                                            <div class="p-2">
                                                                <div class="text-center empty-cart" id="empty-cart">
                                                                    <div class="avatar-md mx-auto my-3">
                                                                        <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                                                            <i class='bx bx-cart'></i>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="mb-3">Your Cart is Empty!</h5>
                                                                    <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                                                                </div>
                                                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                                        <div class="flex-1">
                                                                            <h6 class="mt-0 mb-1 fs-14">
                                                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                                                                    T-Shirts</a>
                                                                            </h6>
                                                                            <p class="mb-0 fs-12 text-muted">
                                                                                Quantity: <span>10 x $32</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2">
                                                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                                                        </div>
                                                                        <div class="ps-2">
                                                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn shadow-none"><i class="ri-close-fill fs-16"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                    
                                                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                                        <div class="flex-1">
                                                                            <h6 class="mt-0 mb-1 fs-14">
                                                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                                                                            </h6>
                                                                            <p class="mb-0 fs-12 text-muted">
                                                                                Quantity: <span>5 x $18</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2">
                                                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                                                        </div>
                                                                        <div class="ps-2">
                                                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn shadow-none"><i class="ri-close-fill fs-16"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                    
                                                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                                        <div class="flex-1">
                                                                            <h6 class="mt-0 mb-1 fs-14">
                                                                                <a href="apps-ecommerce-product-details.html" class="text-reset">
                                                                                    Borosil Paper Cup</a>
                                                                            </h6>
                                                                            <p class="mb-0 fs-12 text-muted">
                                                                                Quantity: <span>3 x $250</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2">
                                                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                                                        </div>
                                                                        <div class="ps-2">
                                                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn shadow-none"><i class="ri-close-fill fs-16"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                    
                                                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                                        <div class="flex-1">
                                                                            <h6 class="mt-0 mb-1 fs-14">
                                                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                                                                    Styled T-Shirt</a>
                                                                            </h6>
                                                                            <p class="mb-0 fs-12 text-muted">
                                                                                Quantity: <span>1 x $1250</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2">
                                                                            <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                                                        </div>
                                                                        <div class="ps-2">
                                                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn shadow-none"><i class="ri-close-fill fs-16"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                    
                                                                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                                                        <div class="flex-1">
                                                                            <h6 class="mt-0 mb-1 fs-14">
                                                                                <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                                                                            </h6>
                                                                            <p class="mb-0 fs-12 text-muted">
                                                                                Quantity: <span>2 x $495</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="px-2">
                                                                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                                                        </div>
                                                                        <div class="ps-2">
                                                                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn shadow-none"><i class="ri-close-fill fs-16"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                                            <div class="d-flex justify-content-between align-items-center pb-3">
                                                                <h5 class="m-0 text-muted">Total:</h5>
                                                                <div class="px-2">
                                                                    <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                                                </div>
                                                            </div>
                                    
                                                            <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                                                                Checkout
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                    
                                                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                                            <div class="p-3">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                                                    </div>
                                                                    <div class="col-auto dropdown-tabs">
                                                                        <span class="badge badge-soft-light fs-13"> 4 New</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                    
                                                            <div class="px-2 pt-2">
                                                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                                                    <li class="nav-item waves-effect waves-light">
                                                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                                                            All (4)
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item waves-effect waves-light">
                                                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false">
                                                                            Messages
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item waves-effect waves-light">
                                                                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false">
                                                                            Alerts
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                    
                                                        </div>
                                    
                                                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                                                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                        <div class="d-flex">
                                                                            <div class="avatar-xs me-3">
                                                                                <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                                                    <i class="bx bx-badge-check"></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                                        Optimization <span class="text-secondary">reward</span> is
                                                                                        ready!
                                                                                    </h6>
                                                                                </a>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                        <div class="d-flex">
                                                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                                                </a>
                                                                                <div class="fs-13 text-muted">
                                                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                                        graph 🔔.</p>
                                                                                </div>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                        <div class="d-flex">
                                                                            <div class="avatar-xs me-3">
                                                                                <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                                                                    <i class='bx bx-message-square-dots'></i>
                                                                                </span>
                                                                            </div>
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                                                    </h6>
                                                                                </a>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                                                    <label class="form-check-label" for="all-notification-check03"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                                        <div class="d-flex">
                                                                            <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                                                </a>
                                                                                <div class="fs-13 text-muted">
                                                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                                                </div>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                                                    <label class="form-check-label" for="all-notification-check04"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="my-3 text-center view-all">
                                                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                                                    </div>
                                                                </div>
                                    
                                                            </div>
                                    
                                                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                                                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                                    <div class="text-reset notification-item d-block dropdown-item">
                                                                        <div class="d-flex">
                                                                            <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                                                </a>
                                                                                <div class="fs-13 text-muted">
                                                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                                                </div>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                                                                    <label class="form-check-label" for="messages-notification-check01"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="text-reset notification-item d-block dropdown-item">
                                                                        <div class="d-flex">
                                                                            <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                                                </a>
                                                                                <div class="fs-13 text-muted">
                                                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                                                        graph 🔔.</p>
                                                                                </div>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                                                                    <label class="form-check-label" for="messages-notification-check02"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="text-reset notification-item d-block dropdown-item">
                                                                        <div class="d-flex">
                                                                            <img src="assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                                                </a>
                                                                                <div class="fs-13 text-muted">
                                                                                    <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                                                    </p>
                                                                                </div>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                                                                    <label class="form-check-label" for="messages-notification-check03"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="text-reset notification-item d-block dropdown-item">
                                                                        <div class="d-flex">
                                                                            <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                                            <div class="flex-1">
                                                                                <a href="#!" class="stretched-link">
                                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                                                </a>
                                                                                <div class="fs-13 text-muted">
                                                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                                                </div>
                                                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="px-2 fs-15">
                                                                                <div class="form-check notification-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                                                                    <label class="form-check-label" for="messages-notification-check04"></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    
                                                                    <div class="my-3 text-center view-all">
                                                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                                                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>
                                    
                                                            <div class="notification-actions" id="notification-actions">
                                                                <div class="d-flex text-muted justify-content-center">
                                                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="dropdown ms-sm-3 header-item topbar-user">
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <h6 class="dropdown-header">Welcome Anna!</h6>
                                                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                                        <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                                        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                                                        <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                                        <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                                        <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </header>
                                    
                                    <!-- removeNotificationModal -->
                                    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Are you sure ?</h4>
                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                                                </div>
                                            </div>
                                    
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                        <!-- ============================================================== -->
                                        <!-- Start right Content here -->
                                        <!-- ============================================================== -->
                                        <div class="main-content">
                                    
                                            <div class="page-content">
                                                <div>
                                    
                                                    <div class="row justify-content-center">
                                                        <div class="">
                                                            <div class="card" id="demo">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="card-header border-bottom-dashed p-4">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1">
                                                                                    <div class="mt-sm-5 mt-4">
                                                                                        <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                                                                        <p class="text-muted mb-1" id="address-details">California, United States</p>
                                                                                        <p class="text-muted mb-0" id="zip-code"><span>Zip-code:</span> 90201</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                                                                    <h6><span class="text-muted fw-normal">Legal Registration No:</span><span id="legal-register-no">987654</span></h6>
                                                                                    <h6><span class="text-muted fw-normal">Email:</span><span id="email">velzon@themesbrand.com</span></h6>
                                                                                    <h6><span class="text-muted fw-normal">Website:</span> <a href="https://themesbrand.com/" class="link-primary" target="_blank" id="website">www.themesbrand.com</a></h6>
                                                                                    <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no"> +(01) 234 6789</span></h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end card-header-->
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12">
                                                                        <div class="card-body p-4">
                                                                            <div class="row g-3">
                                                                                <div class="col-lg-3 col-6">
                                                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Invoice No</p>
                                                                                    <h5 class="fs-14 mb-0">#VL<span id="invoice-no">25000355</span></h5>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-lg-3 col-6">
                                                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                                                                    <h5 class="fs-14 mb-0"><span id="invoice-date">23 Nov, 2021</span> <small class="text-muted" id="invoice-time">02:36PM</small></h5>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-lg-3 col-6">
                                                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                                                                    <span class="badge badge-soft-success fs-11" id="payment-status">Paid</span>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-lg-3 col-6">
                                                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                                                                    <h5 class="fs-14 mb-0">$<span id="total-amount">755.96</span></h5>
                                                                                </div>
                                                                                <!--end col-->
                                                                            </div>
                                                                            <!--end row-->
                                                                        </div>
                                                                        <!--end card-body-->
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12">
                                                                        <div class="card-body p-4 border-top border-top-dashed">
                                                                            <div class="row g-3">
                                                                                <div class="col-6">
                                                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                                                                    <p class="fw-medium mb-2" id="billing-name">David Nichols</p>
                                                                                    <p class="text-muted mb-1" id="billing-address-line-1">305 S San Gabriel Blvd</p>
                                                                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">(123) 456-7890</span></p>
                                                                                    <p class="text-muted mb-0"><span>Tax: </span><span id="billing-tax-no">12-3456789</span> </p>
                                                                                </div>
                                                                                <!--end col-->
                                                                                <div class="col-6">
                                                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Shipping Address</h6>
                                                                                    <p class="fw-medium mb-2" id="shipping-name">David Nichols</p>
                                                                                    <p class="text-muted mb-1" id="shipping-address-line-1">305 S San Gabriel Blvd</p>
                                                                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">(123) 456-7890</span></p>
                                                                                </div>
                                                                                <!--end col-->
                                                                            </div>
                                                                            <!--end row-->
                                                                        </div>
                                                                        <!--end card-body-->
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12">
                                                                        <div class="card-body p-4">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                                                    <thead>
                                                                                        <tr class="table-active">
                                                                                            <th scope="col" style="width: 50px;">#</th>
                                                                                            <th scope="col">Product Details</th>
                                                                                            <th scope="col">Rate</th>
                                                                                            <th scope="col">Quantity</th>
                                                                                            <th scope="col" class="text-end">Amount</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody id="products-list">
                                                                                        <tr>
                                                                                            <th scope="row">01</th>
                                                                                            <td class="text-start">
                                                                                                <span class="fw-medium">Sweatshirt for Men (Pink)</span>
                                                                                                <p class="text-muted mb-0">Graphic Print Men & Women Sweatshirt</p>
                                                                                            </td>
                                                                                            <td>$119.99</td>
                                                                                            <td>02</td>
                                                                                            <td class="text-end">$239.98</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">02</th>
                                                                                            <td class="text-start">
                                                                                                <span class="fw-medium">Noise NoiseFit Endure Smart Watch</span>
                                                                                                <p class="text-muted mb-0">32.5mm (1.28 Inch) TFT Color Touch Display</p>
                                                                                            </td>
                                                                                            <td>$94.99</td>
                                                                                            <td>01</td>
                                                                                            <td class="text-end">$94.99</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">03</th>
                                                                                            <td class="text-start">
                                                                                                <span class="fw-medium">350 ml Glass Grocery Container</span>
                                                                                                <p class="text-muted mb-0">Glass Grocery Container (Pack of 3, White)</p>
                                                                                            </td>
                                                                                            <td>$24.99</td>
                                                                                            <td>01</td>
                                                                                            <td class="text-end">$24.99</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">04</th>
                                                                                            <td class="text-start">
                                                                                                <span class="fw-medium">Fabric Dual Tone Living Room Chair</span>
                                                                                                <p class="text-muted mb-0">Chair (White)</p>
                                                                                            </td>
                                                                                            <td>$340.00</td>
                                                                                            <td>01</td>
                                                                                            <td class="text-end">$340.00</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table><!--end table-->
                                                                            </div>
                                                                            <div class="border-top border-top-dashed mt-2">
                                                                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Sub Total</td>
                                                                                            <td class="text-end">$699.96</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Estimated Tax (12.5%)</td>
                                                                                            <td class="text-end">$44.99</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Discount <small class="text-muted">(VELZON15)</small></td>
                                                                                            <td class="text-end">- $53.99</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Shipping Charge</td>
                                                                                            <td class="text-end">$65.00</td>
                                                                                        </tr>
                                                                                        <tr class="border-top border-top-dashed fs-15">
                                                                                            <th scope="row">Total Amount</th>
                                                                                            <th class="text-end">$755.96</th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                                <!--end table-->
                                                                            </div>
                                                                            <div class="mt-3">
                                                                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                                                                <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">Mastercard</span></p>
                                                                                <p class="text-muted mb-1">Card Holder: <span class="fw-medium" id="card-holder-name">David Nichols</span></p>
                                                                                <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">xxx xxxx xxxx 1234</span></p>
                                                                                <p class="text-muted">Total Amount: <span class="fw-medium" id="">$ </span><span id="card-total-amount">755.96</span></p>
                                                                            </div>
                                                                            <div class="mt-4">
                                                                                <div class="alert alert-info">
                                                                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                                                                        <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or
                                                                                            credit card or direct payment online. If account is not paid within 7
                                                                                            days the credits details supplied as confirmation of work undertaken
                                                                                            will be charged the agreed quoted fee noted above.
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                                                <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                                                                <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                                                                            </div>
                                                                        </div>
                                                                        <!--end card-body-->
                                                                    </div><!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end card-->
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                    
                                                </div><!-- container-fluid -->
                                            </div><!-- End Page-content -->
                                        </div><!-- end main content-->
                                    
                                    </div>
                                    <!-- END layout-wrapper -->
                                    
                                    <div class="customizer-setting d-none d-md-block">
                                        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                                            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Theme Settings -->
                                    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                                        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                                            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>
                                    
                                            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0">
                                            <div data-simplebar class="h-100">
                                                <div class="p-4">
                                                    <h6 class="mb-0 fw-semibold text-uppercase fs-12">Layout</h6>
                                                    <p class="text-muted">Choose your layout</p>
                                    
                                                    <div class="row gy-3">
                                                        <div class="col-4">
                                                            <div class="form-check card-radio">
                                                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                                                <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout01">
                                                                    <span class="d-flex gap-1 h-100">
                                                                        <span class="flex-shrink-0">
                                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-grow-1">
                                                                            <span class="d-flex h-100 flex-column">
                                                                                <span class="bg-light d-block p-1"></span>
                                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-check card-radio">
                                                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                                                <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout02">
                                                                    <span class="d-flex h-100 flex-column gap-1">
                                                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                                            <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                                                            <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                                                            <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                                                        </span>
                                                                        <span class="bg-light d-block p-1"></span>
                                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-check card-radio">
                                                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                                                <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout03">
                                                                    <span class="d-flex gap-1 h-100">
                                                                        <span class="flex-shrink-0">
                                                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                                                <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-shrink-0">
                                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-grow-1">
                                                                            <span class="d-flex h-100 flex-column">
                                                                                <span class="bg-light d-block p-1"></span>
                                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <h5 class="fs-13 text-center mt-2">Two Column</h5>
                                                        </div>
                                                        <!-- end col -->
                                    
                                                        <div class="col-4">
                                                            <div class="form-check card-radio">
                                                                <input id="customizer-layout04" name="data-layout" type="radio" value="semibox" class="form-check-input">
                                                                <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout04">
                                                                    <span class="d-flex gap-1 h-100">
                                                                        <span class="flex-shrink-0 p-1">
                                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-grow-1">
                                                                            <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                                                <span class="bg-light d-block p-1"></span>
                                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <h5 class="fs-13 text-center mt-2">Semi Box</h5>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                    
                                                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Color Scheme</h6>
                                                    <p class="text-muted">Choose Light or Dark Scheme.</p>
                                    
                                                    <div class="colorscheme-cardradio">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="layout-mode-light">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Light</h5>
                                                            </div>
                                    
                                                            <div class="col-4">
                                                                <div class="form-check card-radio dark">
                                                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm bg-dark" for="layout-mode-dark">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-soft-light d-block p-1"></span>
                                                                                    <span class="bg-soft-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="sidebar-visibility">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Visibility</h6>
                                                        <p class="text-muted">Choose show or Hidden sidebar.</p>
                                                
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-show" value="show">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-visibility-show">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0 p-1">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Show</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-check card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-hidden" value="hidden">
                                                                    <label class="form-check-label p-0 avatar-md w-100 px-2 shadow-sm" for="sidebar-visibility-hidden">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column pt-1 px-2">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Hidden</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="layout-width">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Layout Width</h6>
                                                        <p class="text-muted">Choose Fluid or Boxed layout.</p>
                                    
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="layout-width-fluid">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-check card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm px-2" for="layout-width-boxed">
                                                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Boxed</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="layout-position">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Layout Position</h6>
                                                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>
                                    
                                                        <div class="btn-group radio" role="group">
                                                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
                                    
                                                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                                                        </div>
                                                    </div>
                                                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Topbar Color</h6>
                                                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>
                                    
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-check card-radio">
                                                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                                                <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="topbar-color-light">
                                                                    <span class="d-flex gap-1 h-100">
                                                                        <span class="flex-shrink-0">
                                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-grow-1">
                                                                            <span class="d-flex h-100 flex-column">
                                                                                <span class="bg-light d-block p-1"></span>
                                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <h5 class="fs-13 text-center mt-2">Light</h5>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-check card-radio">
                                                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                                                <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="topbar-color-dark">
                                                                    <span class="d-flex gap-1 h-100">
                                                                        <span class="flex-shrink-0">
                                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-grow-1">
                                                                            <span class="d-flex h-100 flex-column">
                                                                                <span class="bg-dark d-block p-1"></span>
                                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="sidebar-size">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Size</h6>
                                                        <p class="text-muted">Choose a size of Sidebar.</p>
                                    
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-default">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Default</h5>
                                                            </div>
                                    
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-compact">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                                                            </div>
                                    
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-small">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                                                            </div>
                                    
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-small-hover">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="sidebar-view">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar View</h6>
                                                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>
                                    
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-view-default">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Default</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                                                    <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-view-detached">
                                                                        <span class="d-flex h-100 flex-column">
                                                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                                                <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                                                            </span>
                                                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                                                <span class="flex-shrink-0">
                                                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Detached</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="sidebar-color">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Color</h6>
                                                        <p class="text-muted">Choose a color of Sidebar.</p>
                                    
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Light</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                                                    <span class="d-flex gap-1 h-100">
                                                                        <span class="flex-shrink-0">
                                                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                                                <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                            </span>
                                                                        </span>
                                                                        <span class="flex-grow-1">
                                                                            <span class="d-flex h-100 flex-column">
                                                                                <span class="bg-light d-block p-1"></span>
                                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </button>
                                                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                    
                                                        <div class="collapse" id="collapseBgGradient">
                                                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">
                                    
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="sidebar-img">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Images</h6>
                                                        <p class="text-muted">Choose a image of Sidebar.</p>
                                    
                                                        <div class="d-flex gap-2 flex-wrap img-switch">
                                                            <div class="form-check sidebar-setting card-radio">
                                                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                                                    <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                                                        <i class="ri-close-fill fs-20"></i>
                                                                    </span>
                                                                </label>
                                                            </div>
                                    
                                                            <div class="form-check sidebar-setting card-radio">
                                                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                                                    <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                                                </label>
                                                            </div>	
                                    
                                                            <div class="form-check sidebar-setting card-radio">
                                                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                                                    <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                                                </label>
                                                            </div>
                                                            <div class="form-check sidebar-setting card-radio">
                                                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                                                    <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                                                </label>
                                                            </div>
                                                            <div class="form-check sidebar-setting card-radio">
                                                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                                                    <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                    
                                                    <div id="preloader-menu">
                                                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Preloader</h6>
                                                        <p class="text-muted">Choose a preloader.</p>
                                                    
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                        <!-- <div id="preloader"> -->
                                                                        <div id="status" class="d-flex align-items-center justify-content-center">
                                                                            <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                                                <span class="visually-hidden">Loading...</span>
                                                                            </div>
                                                                        </div>
                                                                        <!-- </div> -->
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Enable</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-check sidebar-setting card-radio">
                                                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                                                        <span class="d-flex gap-1 h-100">
                                                                            <span class="flex-shrink-0">
                                                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                                                </span>
                                                                            </span>
                                                                            <span class="flex-grow-1">
                                                                                <span class="d-flex h-100 flex-column">
                                                                                    <span class="bg-light d-block p-1"></span>
                                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <h5 class="fs-13 text-center mt-2">Disable</h5>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <!-- end preloader-menu -->
                                    
                                                </div>
                                            </div>
                                    
                                        </div>
                                        <div class="offcanvas-footer border-top p-3 text-center">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                                                </div>
                                                <div class="col-6">
                                                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->

                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    

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
    <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/1.png"
                                            alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/2.png"
                                            alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/3.png"
                                            alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/4.png"
                                            alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-product/5.png"
                                            alt="Product">
                                    </a>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="ti-arrow-right"></i>
                                </div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="ti-arrow-left"></i>
                                </div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head m-b-15">
                                <h2 class="product-title">Single Product Slider</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Rating Start -->
                            <span class="rating justify-content-start m-b-10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <!-- Rating End -->

                            <!-- Price Box Start -->
                            <div class="price-box m-b-10">
                                <span class="regular-price">$70.00</span>
                                <span class="old-price"><del>$85.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- SKU Start -->
                            <div class="sku m-b-15">
                                <span>SKU: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                            <div class="product-inventroy m-b-15">
                                <span class="inventroy-title"> <strong>Availability:</strong></span>
                                <span class="inventory-varient">12 Left in Stock</span>
                            </div>
                            <!-- Product Inventory End -->

                            <!-- Description Start -->
                            <p class="desc-content m-b-25">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don't look even slightly believable.</p>
                            <!-- Description End -->

                            <!-- Quantity Start -->
                            <div class="quantity d-flex align-items-center justify-content-start m-b-25">
                                <span class="m-r-10"><strong>Qty: </strong></span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart Button Start -->
                            <div class="cart-btn action-btn m-b-30">
                                <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                    <div class="add-to_cart">
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to
                                            cart</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <!-- Cart Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <div class="widget-social justify-content-center m-b-30">
                                    <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option m-t-20 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="#">
                                    <img class="fit-image m-l-5" src="assets/images/payment/payment_large.png"
                                        alt="Payment Option Image">
                                </a>
                            </div>
                            <!-- Payment Option End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection