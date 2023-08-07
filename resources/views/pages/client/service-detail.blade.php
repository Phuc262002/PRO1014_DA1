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
        <div class="container-xxl">
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
                <div class="col-lg-12">
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
                                                    <h3 class="title">Dịch vụ đã đặt</h3>
                                                </div>
                                                <div class="col-xxl-3 col-sm-4">
                                                    <div class="input-light">
                                                        <form id="form_filter"
                                                            action="{{ route('dich-vu-ca-nhan.index') }}">
                                                            <select class="form-control" data-choices
                                                                data-choices-search-false name="status" id="idStatus"
                                                                onchange="inputFilter()">
                                                                <option {{ $status == 'ALL' ? 'selected' : '' }}
                                                                    value="ALL" selected>Tất cả dịch vụ</option>
                                                                <option {{ $status == 'COMPLETED' ? 'selected' : '' }}
                                                                    value="COMPLETED">Dịch vụ hoàn thành</option>
                                                                <option {{ $status == 'ACCEPTED' ? 'selected' : '' }}
                                                                    value="ACCEPTED">Dịch vụ chấp nhận</option>
                                                                <option {{ $status == 'CANCELED' ? 'selected' : '' }}
                                                                    value="CANCELED">Dịch vụ hủy</option>
                                                                <option {{ $status == 'PENDING' ? 'selected' : '' }}
                                                                    value="PENDING">
                                                                    Chờ thanh toán</option>
                                                                <option {{ $status == 'HOLDING' ? 'selected' : '' }}
                                                                    value="HOLDING">
                                                                    Dịch vụ tạm giữ</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--end col-->


                                            </div>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered ">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Đơn hàng</th>
                                                            <th>Dịch vụ</th>
                                                            <th>Thú nuôi</th>
                                                            <th>Ngày đặt</th>
                                                            <th>Giờ đặt</th>
                                                            <th>Mô tả</th>
                                                            <th>Ghi chú của bạn</th>
                                                            <th>Ghi chú của Pets Care</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Trạng thái</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($service_book as $item)
                                                            <tr>
                                                                <td>{{ $item->book_service_hash_id }}</td>
                                                                <td>{{ $item->service->name }}</td>
                                                                <td>{{ $item->pet_name }}</td>
                                                                <td>{{ $item->book_date }}</td>
                                                                <td>{{ $item->book_time }}</td>
                                                                <td><div class="text-wrap text-start" style="width: 300px">{{ $item->service->description }}</div></td>
                                                                <td><div class="text-wrap text-start" style="width: 300px">{{ $item->description }}</div></td>
                                                                <td><div class="text-wrap text-start" style="width: 300px">{{ $item->admin_note }}</div></td>
                                                                <td>{{ $item->total_price }}</td>
                                                                <td>
                                                                    @if ($item->status == 'COMPLETED')
                                                                        Dịch vụ hoàn thành
                                                                    @elseif ($item->status == 'ACCEPTED')
                                                                        Dịch vụ chấp nhận
                                                                    @elseif ($item->status == 'CANCELED')
                                                                        Dịch vụ bị hủy
                                                                    @elseif ($item->status == 'PENDING')
                                                                        Dịch vụ chờ thanh toán
                                                                    @elseif ($item->status == 'HOLDING')
                                                                        Dịch vụ tạm giữ
                                                                    @endif

                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="pagination-wrap hstack gap-2">
                                                    {{ $service_book->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->

                                    <!-- Single Tab Content End -->
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
@section('js')
    <script>
        function inputFilter() {
            $('#form_filter').submit();
        }
    </script>
@endsection
