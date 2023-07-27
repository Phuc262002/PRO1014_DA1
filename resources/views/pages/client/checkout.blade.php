@extends('layouts.client.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">THANH TOÁN</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Thanh toán</li>
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
                <div class="col-12">
                    <!-- Coupon Accordion Start -->
                    <div class="coupon-accordion">



                        <!-- Title Start -->
                        <h3 class="title">Phiếu Giảm Giá <span id="showcoupon">Nhấn vào đây để nhập mã của bạn</span></h3>
                        <!-- Title End -->

                        <!-- Checkout Coupon Start -->
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon d-flex">
                                        <input placeholder="Mã Giảm Giá" type="text" name="coupon_id" id="coupon_id">
                                        <input class="btn btn-primary btn-hover-dark rounded-0" value="Lưu"
                                            type="button" onclick="input_coupon()">
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
                    <form id="form_checkout" action="{{ route('thanh-toan.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="address_id" value="{{ $address_default->id }}">
                        <input type="hidden" name="cart" id="cart_product">
                        <input type="hidden" name="payment_id" id="payment_id">
                        <input type="hidden" name="pre_total" id="pre_total">
                        <input type="hidden" name="total" id="total">

                        <div class="checkbox-form">

                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Chi tiết thanh toán</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">



                                <!-- First Name Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Họ và Tên <span class="required">*</span></label>
                                        <input placeholder="Họ và Tên" type="text"
                                            value="{{ $address_default->fullname }}" readonly>
                                    </div>
                                </div>
                                <!-- First Name Input End -->

                                <!-- Phone Number Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Số Điện Thoại <span class="required">*</span></label>
                                        <input type="text" value="{{ $address_default->phone }}" readonly>
                                    </div>
                                </div>
                                <!-- Phone Number Input End -->


                                <!-- Email Address Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa Chỉ Email <span class="required">*</span></label>
                                        <input placeholder="Email..." type="email" value="{{ $user->email }}" readonly>
                                    </div>
                                </div>
                                <!-- Email Address Input End -->


                                <!-- Address Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa Chỉ <span class="required">*</span></label>
                                        <input placeholder="Đường" type="text" value="{{ $address_default->address }}"
                                            readonly>
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
                                <tbody id="cart_products_html"></tbody>
                                <!-- Table Body End -->

                                <!-- Table Footer Start -->
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Tổng đơn hàng</th>
                                        <td class="text-end pe-0"><span id="amount_pre" class="amount"></span>
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Giảm giá</th>
                                        <td class="text-end pe-0"><span id="discount_price" class="amount">0</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th class="text-start ps-0">Tổng giá trị đơn đặt hàng</th>
                                        <td class="text-end pe-0"><strong><span id="amount_final"
                                                    class="amount"></span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                                <!-- Table Footer End -->

                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="payment-accordion">
                                @foreach ($payment_list as $item)
                                    <div class="single-payment">
                                        <h5 class="panel-title m-b-15">
                                            <a class="collapse-off rounded" data-bs-toggle="collapse"
                                                href="#collapseExample-{{ $item->id }}" aria-expanded="false"
                                                aria-controls="collapseExample-{{ $item->id }}">
                                                {{ $item->payment_name }}
                                            </a>
                                        </h5>
                                        <div class="collapse {{ $item->id == 1 ? 'show' : '' }}"
                                            id="collapseExample-{{ $item->id }}">
                                            <div class="card card-body rounded mb-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="{{ $item->id }}" {{ $item->id == 1 ? 'checked' : '' }}
                                                        name="payment_id" id="payment_id{{ $item->id }}" onclick="inputPayment({{ $item->id }})"> 
                                                    <label class="form-check-label" for="payment_id{{ $item->id }}">
                                                        {{ $item->payment_name }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="card card-body rounded">
                                                <p>{!! $item->payment_name !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="order-button-payment">
                                <button class="btn btn-primary btn-hover-dark rounded-0 w-100" onclick="checkout()">Thanh
                                    Toán</button>
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

@section('js')
    <script>
        const cartProduct = localStorage.getItem('cart') ? localStorage.getItem('cart') : [];

        const cart = JSON.parse(cartProduct).map(item => {
            return `
            <tr class="cart_item">
                <td class="cart-product-name text-start ps-0">${item.name}<strong
                        class="product-quantity"> × ${item.quantity}</strong></td>
                <td class="cart-product-total text-end pe-0"><span class="amount">${formatVietnamDong(item.price * item.quantity)}</span>
                </td>
            </tr>
            `
        }).join('');

        let total = 0;
        if (cartProduct) {
            JSON.parse(cartProduct).forEach(item => {
                total += item.price * item.quantity;
            });
        }

        $('#cart_product').attr('value', cartProduct);
        $('#total').attr('value', total);
        $('#pre_total').attr('value', total);
        $('#payment_id').attr('value', 1);


        $('#cart_products_html').html(cart);
        $('#amount_pre').html(formatVietnamDong(total));
        $('#amount_final').html(formatVietnamDong(total));

        function inputPayment(id) {
            $('#payment_id').attr('value', id);
        }

        function checkout() {
            $('#form_checkout').submit();
        }

        function input_coupon() {
            const coupon_id = $('#coupon_id').val();
            if (coupon_id) {
                $.ajax({
                    url: "{{ route('coupons.index') }}?coupon_code=" + coupon_id,
                    success: function(data) {
                        if (data.status == 'success') {
                            Success(data.message);
                            $('#discount_price').html(formatVietnamDong(data.data.discount));
                            $('#amount_final').html(formatVietnamDong(((total - parseInt(data.data.discount)) < 0 ? 0 : (total - parseInt(data.data.discount)))));
                            $('#total').attr('value', ((total - parseInt(data.data.discount)) < 0 ? 0 : (total - parseInt(data.data.discount))));

                            $('#form_checkout').append(
                                `<input type="hidden" name="coupon_id" value="${data.data.id}">`
                            );
                        } else {
                            Error(data.message);
                        }
                    }
                });
            } else {
                Error('Vui lòng nhập mã giảm giá');
            }
        }
    </script>
    <script>
        @if (session('success'))
            localStorage.removeItem('cart');
            window.location.href = "{{ session('bill_link') }}";
        @endif
    </script>
@endsection
