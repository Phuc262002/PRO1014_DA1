@extends('layouts.client.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">HÓA ĐƠN</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Hóa đơn</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-margin">
        <div class="main-content ">

            <div class="page-content" id="printContent">
                <div class="container-fluid">

                    <!-- start page title -->

                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card" id="demo">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-header border-bottom-dashed p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <img src="{{ asset('assets/images/logo/logo.png') }}"
                                                        class="card-logo card-logo-dark" alt="logo dark" height="100">
                                                    <div class="mt-sm-5 mt-4">
                                                        <h6 class="text-muted text-uppercase fw-semibold">Địa chỉ</h6>
                                                        <p class="text-muted mb-1" id="address-details">FPT Polytechnic Hồ
                                                            Chí Minh - Toà T</p>
                                                        <p class="text-muted mb-0" id="zip-code"><span>Zip-code:</span>
                                                            70000</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                                    <h6><span class="text-muted fw-normal">Mã số thuế: </span><span
                                                            id="legal-register-no">0102635866</span></h6>
                                                    <h6><span class="text-muted fw-normal">Email: </span><span
                                                            id="email">petscare@gmail.com</span></h6>
                                                    <h6><span class="text-muted fw-normal">Website:</span> <a
                                                            href="https://themesbrand.com/" class="link-primary"
                                                            target="_blank" id="website">www.petscare.com</a></h6>
                                                    <h6 class="mb-0"><span class="text-muted fw-normal">Liên hệ:
                                                        </span><span id="contact-no"> +(84) 081 234 6789</span></h6>
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
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Mã hóa đơn</p>
                                                    <h5 class="fs-14 mb-0">#<span
                                                            id="invoice-no">{{ $order->order_hash_id }}</span></h5>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Ngày</p>
                                                    <h5 class="fs-14 mb-0"><span
                                                            id="invoice-date">{{ $order->created_at->format('d/m/Y') }}</span>
                                                        <small class="text-muted"
                                                            id="invoice-time">{{ $order->created_at->format('H:i') }}</small>
                                                    </h5>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Trạng thái</p>
                                                    <span class="badges">
                                                        <span class="sale">
                                                            @if ($item->status == 'COMPLETED')
                                                                Đơn hoàn thành
                                                            @elseif ($item->status == 'ACCEPTED')
                                                                Đơn chấp nhận
                                                            @elseif ($item->status == 'CANCELED')
                                                                Đơn bị hủy
                                                            @elseif ($item->status == 'PENDING')
                                                                Đơn chờ thanh toán
                                                            @elseif ($item->status == 'HOLDING')
                                                                Đơn tạm giữ
                                                            @endif
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3 col-6">
                                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Tổng hóa đơn</p>
                                                    <h5 class="fs-14 mb-0"><span
                                                            id="total-amount">{{ number_format($order->total) }}</span></h5>
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
                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Địa chỉ thanh
                                                        toán</h6>
                                                    <p class="fw-medium mb-2" id="billing-name">{{ $order->user->name }}</p>
                                                    <p class="text-muted mb-1"><span>Email: </span><span
                                                            id="billing-phone-no">{{ $order->user->email }}</span></p>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6">
                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Địa chỉ vận
                                                        chuyển</h6>
                                                    <p class="fw-medium mb-2" id="shipping-name">
                                                        {{ $order->address->fullname }}</p>
                                                    <p class="text-muted mb-1" id="shipping-address-line-1">
                                                        {{ $order->address->address }}</p>
                                                    <p class="text-muted mb-1"><span>Phone: +</span><span
                                                            id="shipping-phone-no">(84) {{ $order->address->phone }}</span>
                                                    </p>
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
                                                <table
                                                    class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col" style="width: 50px;">#</th>
                                                            <th scope="col">Sản phẩm</th>
                                                            <th scope="col">Giá</th>
                                                            <th scope="col">Số lượng</th>
                                                            <th scope="col" class="text-end">Tổng tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="products-list">
                                                        @foreach ($order_detail_list as $key => $item)
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }}</th>
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
                                                </table>
                                                <!--end table-->
                                            </div>
                                            <div class="border-top border-top-dashed mt-2">
                                                <table
                                                    class="table table-borderless table-nowrap align-middle mb-0 ms-auto"
                                                    style="width:250px">
                                                    <tbody>
                                                        <tr>
                                                            <td>Tỗng tạm tính</td>
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
                                                            <td class="text-end">0 đ</td>
                                                        </tr>
                                                        <tr class="border-top border-top-dashed fs-15">
                                                            <th scope="row">Tổng thanh toán</th>
                                                            <th class="text-end">{{ number_format($order->total) }}</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end table-->
                                            </div>
                                            <div class="mt-3">
                                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Chi tiết thanh
                                                    toán:</h6>
                                                <p class="text-muted mb-1">Phương thức thanh toán: <span class="fw-medium"
                                                        id="payment-method">{{ $order->payment->payment_name }}</span></p>
                                                <p class="text-muted">Tổng thanh toán: <span class="fw-medium"
                                                        id=""></span><span
                                                        id="card-total-amount">{{ number_format($order->total) }}</span>
                                                </p>
                                            </div>
                                            <div class="mt-4">
                                                <div class="alert alert-info">
                                                    <p class="mb-0"><span class="fw-semibold">GHI CHÚ:</span>
                                                        <span id="note">Hóa dơn phải được thanh toán trong
                                                            vòng 7 ngày kể từ ngày nhận hóa đơn. Được thanh toán bằng tiền
                                                            mặt
                                                            hoặc thẻ tín dụng hoặc thanh toán chuyển khoản. Nếu hóa dơn
                                                            không được thanh toán trong vòng 7 ngày, hóa đơn sẽ bị hủy bỏ.
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="hstack gap-2 justify-content-end  mt-4">
                                                <a href="javascript:printCode()" class="btn btn-primary"><i
                                                        class="ri-printer-line align-bottom me-1"></i>In hóa đơn</a>
                                                <a href="{{ route('don-hang-ca-nhan.index') }}"
                                                    class="btn btn btn-danger btn-hover-dark rounded-4">
                                                    Quay lại</a>
                                                {{-- <div class="col-3">
                                                           
                                                        </div> --}}
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end col-->
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
        </div>
    </div><!-- end main content-->
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
