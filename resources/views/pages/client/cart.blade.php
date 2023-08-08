@extends('layouts.client.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Đơn hàng của bạn</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Đơn hàng</li>
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
                                    <th class="pro-thumbnail">Hình ảnh</th>
                                    <th class="pro-title">Sản phẩm</th>
                                    <th class="pro-price">Đơn giá</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-subtotal">Tổng cộng</th>
                                    <th class="pro-remove">Xóa</th>
                                </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody id="cart-product"></tbody>
                            <!-- Table Body End -->

                        </table>
                    </div>
                    <!-- Cart Table End -->

                    <!-- Cart Button Start -->
                    <div class="cart-button-section m-b-n20">

                        <!-- Cart Button left Side Start -->
                        <div class="cart-btn-lef-side m-b-20">
                            <a href="{{ route('san-pham.index') }}" class="btn btn btn-gray-deep btn-hover-primary">Tiếp tục
                                mua
                                hàng</a>
                        </div>
                        <!-- Cart Button left Side End -->

                        <!-- Cart Button Right Side Start -->
                        <div class="cart-btn-right-right m-b-20">
                            <a href="javascript:deleteCartAll()" class="btn btn btn-gray-deep btn-hover-primary">Xóa giỏ
                                hàng</a>
                        </div>
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
                                        <td id="totalMoney"></td>
                                    </tr>
                                    <tr>
                                        <td>Phí vận chuyển</td>
                                        <td>0 đ</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Tổng cộng</td>
                                        <td id="totalMoneyFinal" class="total-amount">$300</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Responsive Table End -->

                        </div>
                        <!-- Cart Calculate Items End -->

                        <!-- Cart Checktout Button Start -->
                        <a onclick="redirectCheckout()" class="btn btn btn-gray-deep btn-hover-primary m-t-30">Xác nhận
                            thanh
                            toán</a>
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
    <script>
        function formatVietnamDong(amount) {
            return amount.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            });
        }

        function renderCart() {
            if (localStorage.getItem('cart')) {
                const cartItems = JSON.parse(localStorage.getItem('cart'));

                const cartWrapper = $('#cart-product');

                const cartHtmls = cartItems.map(item => {
                    return `<tr>
                                <td class="pro-thumbnail"><a href="{{ route('home') }}/san-pham/${item.slug}"><img class="fit-image"
                                            src="${item.image_main}" alt="Product" /></a></td>
                                <td class="pro-title"><a href="{{ route('home') }}/san-pham/${item.slug}">${item.name}</a></td>
                                <td class="pro-price"><span>${formatVietnamDong(item.price)}</span></td>
                                <td class="pro-quantity">
                                    <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" onchange="inputQuantityCart(${item.id}, this)" value="${item.quantity}" type="text">
                                            <div class="dec qtybutton" onclick="dec_qtybutton(${item.id})">-</div>
                                            <div class="inc qtybutton" onclick="inc_qtybutton(${item.id})">+</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="pro-subtotal"><span>${formatVietnamDong(item.price*item.quantity)}</span></td>
                                <td class="pro-remove"><a href="javascript:deleteCart(${item.id})"><i class="ti-trash"></i></a></td>
                            </tr>`;
                });

                cartWrapper.html(cartHtmls);
            } else {
                $('#cart-product').html('');
                $('.cart-product-wrapper').html('');
            }
            totalCartMoney()
        }

        function deleteCart(id) {
            const cartItems = JSON.parse(localStorage.getItem('cart'));
            const newCartItems = cartItems.filter(item => item.id !== id);
            localStorage.setItem('cart', JSON.stringify(newCartItems));
            renderCart();
            renderCartHeader();
        }

        function deleteCartAll() {
            localStorage.removeItem('cart');
            renderCart();
            renderCartHeader();
        }

        function inc_qtybutton(id) {
            $.ajax({
                url: '{{ route('home') }}/api/products/' + id,
                success: function(response) {
                    const cartItems = JSON.parse(localStorage.getItem('cart'));
                    const newCartItems = cartItems.map(item => {
                        if (item.id === id) {
                            if (item.quantity < response.data.in_stock) {
                                item.quantity += 1;
                            } else {
                                Error('Số lượng sản phẩm trong kho không đủ');
                            }
                        }
                        return item;
                    });
                    localStorage.setItem('cart', JSON.stringify(newCartItems));
                    renderCart();
                    renderCartHeader();

                },
                error: function(error) {
                    if (error.status == 429) {
                        Error('Ban đang ấn quá nhanh, vui lòng thử lại sau 1 phút.');
                    } else {
                        Error('Thêm sản phẩm thất bại');
                    }
                }
            });
        }

        function dec_qtybutton(id) {
            const cartItems = JSON.parse(localStorage.getItem('cart'));
            const newCartItems = cartItems.map(item => {
                if (item.id === id) {
                    if (item.quantity > 1) {
                        item.quantity -= 1;
                    }
                }
                return item;
            });
            localStorage.setItem('cart', JSON.stringify(newCartItems));
            renderCart();
            renderCartHeader();
        }

        function inputQuantityCart(id, event) {
            $.ajax({
                url: '{{ route('home') }}/api/products/' + id,
                success: function(response) {
                    const cartItems = JSON.parse(localStorage.getItem('cart'));
                    const newCartItems = cartItems.map(item => {
                        if (item.id === id) {
                            if ($(event).val() > 0) {
                                if ($(event).val() > response.data.in_stock) {
                                    item.quantity = response.data.in_stock;
                                    Error('Số lượng sản phẩm trong kho không đủ');
                                } else {
                                    item.quantity = parseInt($(event).val());
                                }
                            } else {
                                item.quantity = 1;
                                Error('Số lượng phải là số và lớn hơn 0');
                            }
                        }
                        return item;
                    });
                    localStorage.setItem('cart', JSON.stringify(newCartItems));
                    renderCart();
                    renderCartHeader();

                },
                error: function(error) {
                    if (error.status == 429) {
                        Error('Ban đang ấn quá nhanh, vui lòng thử lại sau 1 phút.');
                    } else {
                        Error('Thêm sản phẩm thất bại');
                    }
                }
            });

        }

        renderCart()
        totalCartMoney()
    </script>
@endsection
