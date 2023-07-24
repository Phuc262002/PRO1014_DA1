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
                    <h2 class="breadcrumb-title">Chi tiết đơn hàng của bạn</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li>Chi tiết đơn hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Shopping Cart Section Start -->
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

                <!-- Cart Table Start -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">

                        <!-- Table Head Start -->
                        <thead>
                            <tr>
                                <th class="pro-title">STT</th>
                                <th class="pro-thumbnail">Hình ảnh</th>
                                <th class="pro-title">Sản phẩm</th>
                                <th class="pro-price">Đơn giá</th>
                                <th class="pro-quantity">Số lượng</th>
                                <th class="pro-subtotal">Tổng cộng</th>
                            </tr>
                        </thead>
                        <!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody id="products-list">
                            @foreach ($detail_list as $key => $item)
                                <tr>
                                    <td scope="row">{{ $key + 1 }}</td>
                                    <td><img class="fit-image" src="{{ $item->product->image_main }}" alt="Product"></td>
                                    <td class="text-start">
                                        <span
                                            class="fw-medium">{{ $item->product->name }}</span>
                                        <p class="text-muted mb-0"></p>
                                    </td>
                                    <td>{{ number_format($item->price) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td class="text-end">
                                        {{ number_format($item->price * $item->quantity) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!-- Table Body End -->

                    </table>
                </div>
                <!-- Cart Table End -->

                <!-- Cart Button Start -->
                <div class="cart-button-section m-b-n20">

                    <!-- Cart Button left Side Start -->
                    <div class="cart-btn-lef-side m-b-20">
                        <a href="{{ route('don-hang-ca-nhan.index') }}" class="btn btn btn-gray-deep btn-hover-primary">
                        Quay lại</a>
                    </div>
                    <!-- Cart Button left Side End -->

                    <!-- Cart Button Right Side Start -->
                 
                    <!-- Cart Button Right Side End -->

                </div>
                <!-- Cart Button End -->

            </div>
        </div>

        <div class="row m-t-50">
            <div class="col-lg-6 me-0 ms-auto">

                <!-- Cart Calculation Area Start -->
                <div class="cart-calculator-wrapper">

                    <!-- Cart Calculate Items Start -->
                    <div class="cart-calculate-items">

                        <!-- Cart Calculate Items Title Start -->
                        <h3 class="title">Tổng giỏ hàng</h3>
                        <!-- Cart Calculate Items Title End -->

                        <!-- Responsive Table Start -->
                        
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Đơn giá</td>
                                    <td class="text-end">
                                        {{ number_format($order->pre_total) }}</td>
                                </tr>
                                @if ($order->coupon)
                                    <tr>
                                        <td>Mã giảm giá<br> <small
                                                class="text-muted">({{ $order->coupon->coupon_hash_id }})</small>
                                        </td>
                                        <td class="text-end">-
                                            {{ number_format($order->coupon->discount) }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>Phí vận chuyển</td>
                                    <td>0 đ</td>
                                </tr>
                                <tr class="total">
                                    <td scope="row">Tổng thanh toán</td>
                                    <td class="text-end">{{ number_format($order->total) }}</td>
                                </tr>
                            </table>
                        </div>
                        <!-- Responsive Table End -->

                    </div>
                    <!-- Cart Calculate Items End -->

                    <!-- Cart Checktout Button Start -->
                    <a href="{{ route('don-hang-ca-nhan.index') }}" class="btn btn btn-gray-deep btn-hover-primary m-t-30">
                        Quay lại</a>
                    <!-- Cart Checktout Button End -->

                </div>
                <!-- Cart Calculation Area End -->

            </div>
        </div>

    </div>
</div>
<!-- Shopping Cart Section End -->
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script>
        function printCode() {
            $("#printContent").printThis();
        }
    </script>
@endsection
