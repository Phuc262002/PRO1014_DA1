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
        <div class="container-lg">

            <div class="row">
                <div class="col-lg-16">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ route('thong-tin-ca-nhan.index') }}"><i class="fa fa-user"></i> Tài
                                        khoản</a>
                                    <a href="{{ route('don-hang-ca-nhan.index') }}"><i class="fa fa-cart-arrow-down"></i>
                                        Đơn hàng</a>
                                    <a href="{{ route('dich-vu-ca-nhan.index') }}"><i class="fa-solid fa-shield-dog"></i>
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
                                            <div class="row">
                                                <div class="col-xxl-9 col-sm-4">
                                                    <h3 class="title">Đơn hàng</h3>
                                                </div>
                                                <div class="col-xxl-3 col-sm-4">
                                                    <div class="input-light">
                                                        <form id="form_filter"
                                                            action="{{ route('don-hang-ca-nhan.index') }}">
                                                            <select class="form-control" data-choices
                                                                data-choices-search-false name="status" id="idStatus"
                                                                onchange="inputFilter()">
                                                                <option {{ $status == 'ALL' ? 'selected' : '' }}
                                                                    value="ALL" selected>Tất cả đơn hàng</option>
                                                                <option {{ $status == 'COMPLETED' ? 'selected' : '' }}
                                                                    value="COMPLETED">Đơn hàng hoàn thành</option>
                                                                <option {{ $status == 'ACCEPTED' ? 'selected' : '' }}
                                                                    value="ACCEPTED">Đơn hàng chấp nhận</option>
                                                                <option {{ $status == 'CANCELED' ? 'selected' : '' }}
                                                                    value="CANCELED">Đơn hàng hủy</option>
                                                                <option {{ $status == 'PENDING' ? 'selected' : '' }}
                                                                    value="PENDING">
                                                                    Chờ thanh toán</option>
                                                                <option {{ $status == 'HOLDING' ? 'selected' : '' }}
                                                                    value="HOLDING">
                                                                    Đơn hàng tạm giữ</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--end col-->


                                            </div>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Ngày</th>
                                                            <th>Số lượng</th>
                                                            {{-- <th>Mã giảm giá</th> --}}
                                                            <th>Tổng phải trả</th>
                                                            <th>Trạng thái</th>
                                                            <th>Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order as $item)
                                                            <tr>
                                                                <td>{{ $item->order_hash_id }}</td>
                                                                <td>{{ $item->created_at }}</td>
                                                                <td>{{ count($item->order_detail) }}</td>

                                                                <td>{{ number_format($item->total) }}</td>
                                                                {{-- <td>{{ $item->status }}</td> --}}
                                                                <td>
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

                                                                </td>
                                                                <td><a href="{{ route('hoa-don.index') }}?bill_id={{ $item->order_hash_id }}"
                                                                        class="btn btn btn-primary btn-hover-dark rounded-4">Hóa
                                                                        đơn</a>
                                                                    <a href="{{ route('don-hang-ca-nhan.bill_id', ['bill_id' => $item->order_hash_id]) }}"
                                                                        class="btn btn btn-primary btn-hover-dark rounded-4">Chi
                                                                        tiết hóa đơn</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="pagination-wrap hstack gap-2">
                                                    {{ $order->appends(request()->query())->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
@section('js')
    <script>
        function inputFilter() {
            $('#form_filter').submit();
        }
    </script>
@endsection
