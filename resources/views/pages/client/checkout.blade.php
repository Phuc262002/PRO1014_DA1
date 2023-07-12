@extends('layouts.client.master')

@section('content')
<!-- Breadcrumb Area Start -->
<div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">THỦ TỤC THANH TOÁN</h2>
                        <ul>
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li>THỦ TỤC THANH TOÁN</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Coupon Accordion Start -->
                    <div class="coupon-accordion">

                        

                        <!-- Title Start -->
                        <h3 class="title">Phiếu Giảm Giá  <span id="showcoupon">Nhấn vào đây để nhập mã của bạn</span></h3>
                        <!-- Title End -->

                        <!-- Checkout Coupon Start -->
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon d-flex">
                                        <input placeholder="Mã Giảm Giá" type="text">
                                        <input class="btn btn-primary btn-hover-dark rounded-0" value="Lưu" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- Checkout Coupon End -->

                    </div>
                    <!-- Coupon Accordion End -->
                </div>
            </div>
            <div class="row m-b-n20">
                <div class="col-lg-6 col-12 m-b-20">

                    <!-- Checkbox Form Start -->
                    <form action="#">
                        <div class="checkbox-form">

                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Chi tiết thanh toán</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">

                               

                                <!-- First Name Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Họ và Tên <span class="required">*</span></label>
                                        <input placeholder="Họ và Tên" type="text">
                                    </div>
                                </div>
                                <!-- First Name Input End -->


                                <!-- Phone Number Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Số Điện Thoại <span class="required">*</span></label>
                                        <input  type="text">
                                    </div>
                                </div>
                                <!-- Phone Number Input End -->
                               
                                
                                <!-- Email Address Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa Chỉ Email <span class="required">*</span></label>
                                        <input placeholder="Email..." type="email">
                                    </div>
                                </div>
                                <!-- Email Address Input End -->


                                <!-- Address Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa Chỉ <span class="required">*</span></label>
                                        <input placeholder="Đường" type="text">
                                    </div>
                                </div>
                                <!-- Address Input End -->

                              
                               
                            </div>                            
                        </div>
                    </form>
                    <!-- Checkbox Form End -->

                </div>

                <div class="col-lg-6 col-12 m-b-20">

                    <!-- Your Order Area Start -->
                    <div class="your-order-area border">

                        <!-- Title Start -->
                        <h3 class="title">Đơn hàng của bạn</h3>
                        <!-- Title End -->

                        <!-- Your Order Table Start -->
                        <div class="your-order-table table-responsive">
                            <table class="table">

                                <!-- Table Head Start -->
                                <thead>
                                    <tr class="cart-product-head">
                                        <th class="cart-product-name text-start">Sản Phẩm</th>
                                        <th class="cart-product-total text-end">Tổng Cộng</th>
                                    </tr>
                                </thead>
                                <!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-start ps-0"> Cám ăn cho người<strong class="product-quantity"> × 2</strong></td>
                                        <td class="cart-product-total text-end pe-0"><span class="amount">100.000 VNĐ</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-start ps-0"> Thịt heo cho heo<strong class="product-quantity"> × 4</strong></td>
                                        <td class="cart-product-total text-end pe-0"><span class="amount">20.000 VNĐ</span></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->

                                <!-- Table Footer Start -->
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Tổng đơn hàng</th>
                                        <td class="text-end pe-0"><span class="amount">120.000 VNĐ</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th class="text-start ps-0">Tổng số đơn đặt hàng</th>
                                        <td class="text-end pe-0"><strong><span class="amount">120.000 VNĐ</span></strong></td>
                                    </tr>
                                </tfoot>
                                <!-- Table Footer End -->

                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="payment-accordion">
                                <div class="single-payment">
                                    <h5 class="panel-title m-b-15">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Thanh Toán bằng Thẻ.
                                        </a>
                                    </h5>
                                    <div class="collapse show" id="collapseExample">
                                        <div class="card card-body rounded-0">
                                            <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền trong tài khoản của chúng tôi được thanh toán.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-payment">
                                    <h5 class="panel-title m-b-15">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-2" aria-expanded="false" aria-controls="collapseExample-2">
                                            Ví Điện Tử
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-2">
                                        <div class="card card-body rounded-0">
                                            <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền trong tài khoản của chúng tôi được thanh toán.
                                            </div>
                                    </div>
                                </div>
                                <div class="single-payment">
                                    <h5 class="panel-title m-b-15">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-3" aria-expanded="false" aria-controls="collapseExample-3">
                                            Ngân hàng.
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-3">
                                        <div class="card card-body rounded-0">
                                            <p>Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được giao cho đến khi tiền trong tài khoản của chúng tôi được thanh toán.
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <button class="btn btn-primary btn-hover-dark rounded-0 w-100">Thanh Toán</button>
                            </div>
                        </div>
                        <!-- Payment Accordion Order Button End -->
                    </div>
                    <!-- Your Order Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End --> 
@endsection