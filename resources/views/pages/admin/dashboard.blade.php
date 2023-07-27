@extends('layouts.admin.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-16 mb-1">Chào bạn, {{ Auth::user()->name }}!</h4>
                                            <p class="text-muted mb-0">
                                                Chuyện gì đang xảy ra hôm nay với các sản phẩm của bạn?
                                            </p>
                                        </div>
                                        <div class="mt-3 mt-lg-0">
                                            <form action="javascript:void(0);">
                                                <div class="row g-3 mb-0 align-items-center">
                                                </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-auto">
                                            <a href="{{ route('product.create') }}"
                                                class="btn btn-soft-success shadow-none">
                                                <i class="ri-add-circle-line align-middle me-1"></i>
                                                Thêm sản phẩm
                                            </a>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    </form>
                                </div>
                            </div>
                            <!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Tổng doanh thu
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                <span class="counter-value" data-target="{{ $revenue_ }}">0</span>
                                                VNĐ
                                            </h4>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-success rounded fs-3">
                                                <i class="bx bx-dollar-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Đơn hàng
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-danger fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                <span class="counter-value" data-target="{{ count($order) }}">0</span>
                                            </h4>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded fs-3">
                                                <i class="bx bx-shopping-bag"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Khách hàng
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                <span class="counter-value" data-target="{{ count($user) }}">0</span>
                                            </h4>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning rounded fs-3">
                                                <i class="bx bx-user-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Dịch vụ
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                                <span class="counter-value"
                                                    data-target="{{ count($book_service) }}">0</span>
                                            </h4>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-danger rounded fs-3">
                                                <i class="bx bx-aperture"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Doanh thu</h4>
                                    {{-- <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm shadow-none">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-primary btn-sm shadow-none">
                                                    1Y
                                                </button>
                                            </div> --}}
                                </div>
                                <!-- end card header -->

                                <div class="card-header p-0 border-0 bg-soft-light">
                                    <div class="row g-0 text-center">
                                        <div class="col-6 col-sm-4">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">
                                                    <span class="counter-value"
                                                        data-target="{{ count($order) }}">{{ count($order) }}</span>
                                                </h5>
                                                <p class="text-muted mb-0">Đơn hàng</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-4">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">
                                                    <span class="counter-value"
                                                        data-target="{{ $revenue_ }}">{{ number_format($revenue_) }}</span>
                                                </h5>
                                                <p class="text-muted mb-0">Doanh thu</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-4">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">
                                                    <span class="counter-value"
                                                        data-target="{{ count($order->where('status', 'CANCELED')) }}">{{ count($order->where('status', 'CANCELED')) }}</span>
                                                </h5>
                                                <p class="text-muted mb-0">Đã hủy</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <!--end col-->
                                    </div>
                                </div>
                                <!-- end card header -->

                                <div class="card-body p-0 pb-2">
                                    <div class="w-100">
                                        <div id="customer_impression_charts"
                                            data-colors='["--vz-success", "--vz-primary", "--vz-danger"]'
                                            class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">
                                        Top 10 sản phẩm bán chạy nhất
                                    </h4>
                                    {{-- <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                        </span><span class="text-muted">Today<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Today</a>
                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                        <a class="dropdown-item" href="#">Last 7 Days</a>
                                                        <a class="dropdown-item" href="#">Last 30 Days</a>
                                                        <a class="dropdown-item" href="#">This Month</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                </div>
                                <!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                            <tbody>
                                                @foreach ($top_10 as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm bg-light rounded p-1 me-2">
                                                                    <img src="{{ $item->product->image_main }}"
                                                                        alt="" class="img-fluid d-block" />
                                                                </div>
                                                                <div>
                                                                    <h5 class="fs-14 my-1">
                                                                        <a href="{{ route('san-pham.detail', ['slug' => $item->product->slug]) }}"
                                                                            class="d-inline-block text-truncate"
                                                                            style="width: 200px;">{{ $item->product->name }}</a>
                                                                    </h5>
                                                                    <span
                                                                        class="text-muted">{{ $item->product->created_at->format('d/m/Y') }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                {{ number_format($item->avg_price) }}</h5>
                                                            <span class="text-muted">Giá</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                {{ $item->total_amount }}</h5>
                                                            <span class="text-muted">Đơn hàng</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                {{ $item->product->quantity }}</h5>
                                                            <span class="text-muted">Kho</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 my-1 fw-normal">
                                                                {{ number_format($item->total_price) }}</h5>
                                                            <span class="text-muted">Doanh thu</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- <div
                                                class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                                <div class="col-sm">
                                                    <div class="text-muted">
                                                        Showing <span class="fw-semibold">5</span> of
                                                        <span class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto mt-3 mt-sm-0">
                                                    <ul
                                                        class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">
                                        Top 10 dịch vụ đặt lịch
                                    </h4>
                                    {{-- <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted">Report<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                </div>
                                <!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                            <tbody>
                                                @foreach ($top_10_service as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="{{ $item->service->image_service }}"
                                                                        alt="" class="avatar-sm p-2" />
                                                                </div>
                                                                <div>
                                                                    <h5 class="fs-14 my-1 fw-medium">
                                                                        <a href="{{ route('dich-vu.index') }}"
                                                                            class="text-reset">{{ $item->service->name }}</a>
                                                                    </h5>
                                                                    <span
                                                                        class="text-muted">{{ $item->service->created_at->format('d/m/Y') }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-inline-block text-truncate text-muted"
                                                                style="width: 200px;">{{ $item->service->description }}</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">
                                                                {{ number_format($item->total_time) }}</p>
                                                            <span class="text-muted">Đặt lịch</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">
                                                                {{ number_format($item->avg_price) }}</p>
                                                            <span class="text-muted">Giá</span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">
                                                                {{ number_format($item->total_price) }}</p>
                                                            <span class="text-muted">Doah thu</span>
                                                        </td>
                                                        {{-- <td>
                                                                    <h5 class="fs-14 mb-0">
                                                                        32%<i
                                                                            class="ri-bar-chart-fill text-success fs-16 align-middle ms-2"></i>
                                                                    </h5>
                                                                </td> --}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>

                                    {{-- <div
                                                class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                                <div class="col-sm">
                                                    <div class="text-muted">
                                                        Showing <span class="fw-semibold">5</span> of
                                                        <span class="fw-semibold">25</span> Results
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto mt-3 mt-sm-0">
                                                    <ul
                                                        class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                                                        <li class="page-item disabled">
                                                            <a href="#" class="page-link">←</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a href="#" class="page-link">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a href="#" class="page-link">→</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                </div>
                                <!-- .card-body-->
                            </div>
                            <!-- .card-->
                        </div>
                        <!-- .col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">
                                        Đơn hàng trong hôm nay
                                    </h4>
                                    {{-- <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-info btn-sm shadow-none">
                                                    <i class="ri-file-list-3-line align-middle"></i>
                                                    Generate Report
                                                </button>
                                            </div> --}}
                                </div>
                                <!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table
                                            class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col">Mã đơn hàng</th>
                                                    <th scope="col">Khách hàng</th>
                                                    <th scope="col">Số lượng sản phẩm</th>
                                                    <th scope="col">Voucher</th>
                                                    <th scope="col">Tổng dự tính</th>
                                                    <th scope="col">Tổng giá tiền</th>
                                                    <th scope="col">Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">{{ $item->order_hash_id }}</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="{{ $item->user->image }}" alt=""
                                                                        class="avatar-xs rounded-circle shadow" />
                                                                </div>
                                                                <div class="flex-grow-1">{{ $item->user->name }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ count($item->order_detail) }}</td>
                                                        <td>{{ $item->coupon != null ? $item->coupon->coupon_hash_id : '' }}
                                                            -
                                                            {{ $item->coupon != null ? number_format($item->coupon->discount) : '' }}
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-success">{{ number_format($item->pre_total) }}</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-success">{{ number_format($item->total) }}</span>
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 'PENDING')
                                                                <span
                                                                    class="badge bg-primary opacity-75">{{ $item->status }}</span>
                                                            @elseif($item->status == 'HOLDING')
                                                                <span class="badge bg-warning">{{ $item->status }}</span>
                                                            @elseif($item->status == 'ACCEPTED')
                                                                <span class="badge bg-info">{{ $item->status }}</span>
                                                            @elseif($item->status == 'COMPLETED')
                                                                <span class="badge bg-success">{{ $item->status }}</span>
                                                            @elseif($item->status == 'CANCELED')
                                                                <span class="badge bg-danger">{{ $item->status }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <!-- end tbody -->
                                        </table>
                                        <!-- end table -->
                                        @if (count($orders) == 0)
                                            <div class="noresult">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                        colors="primary:#121331,secondary:#08a88a"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Chưa có đơn hàng nào trong hôm nay!</h5>
                                                    <p class="text-muted mb-3">Load lại trang để cập nhập dữ liệu
                                                        mới nhất.</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- .card-->
                        </div>
                        <!-- .col-->
                    </div>
                    <!-- end row-->
                </div>
                <!-- end .h-100-->
            </div>
            <!-- end col -->

        </div>
    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentDate = new Date();

            flatpickr("#datepicker", {
                defaultDate: currentDate,
                dateFormat: "Y-m-d"
            });
        });
    </script>

    <script>
        function getChartColorsArray(e) {
            if (null !== document.getElementById(e)) {
                var t = document.getElementById(e).getAttribute("data-colors");
                if (t)
                    return (t = JSON.parse(t)).map(function(e) {
                        var t = e.replace(" ", "");
                        return -1 === t.indexOf(",") ?
                            getComputedStyle(
                                document.documentElement
                            ).getPropertyValue(t) || t :
                            2 == (e = e.split(",")).length ?
                            "rgba(" +
                            getComputedStyle(
                                document.documentElement
                            ).getPropertyValue(e[0]) +
                            "," +
                            e[1] +
                            ")" :
                            t;
                    });
                console.warn("data-colors atributes not found on", e);
            }
        }
        var options,
            chart,
            worldemapmarkers,
            overlay,
            linechartcustomerColors = getChartColorsArray("customer_impression_charts"),
            chartDonutBasicColors =
            (linechartcustomerColors &&
                ((options = {
                        series: [{
                                name: "Đơn hàng",
                                type: "area",
                                data: {!! $order_all_count_array_chart !!},
                            },
                            {
                                name: "Doanh thu",
                                type: "bar",
                                data: {!! $revenue_array_chart !!},
                            },
                            {
                                name: "Đã hủy",
                                type: "line",
                                data: {!! $order_canceled_count_array_chart !!},
                            },
                        ],
                        chart: {
                            height: 370,
                            type: "line",
                            toolbar: {
                                show: !1
                            }
                        },
                        stroke: {
                            curve: "straight",
                            dashArray: [0, 0, 8],
                            width: [2, 0, 2.2],
                        },
                        fill: {
                            opacity: [0.1, 0.9, 1]
                        },
                        markers: {
                            size: [0, 0, 0],
                            strokeWidth: 2,
                            hover: {
                                size: 4
                            },
                        },
                        xaxis: {
                            categories: {!! $date_array_chart !!},
                            axisTicks: {
                                show: !1
                            },
                            axisBorder: {
                                show: !1
                            },
                        },
                        grid: {
                            show: !0,
                            xaxis: {
                                lines: {
                                    show: !0
                                }
                            },
                            yaxis: {
                                lines: {
                                    show: !1
                                }
                            },
                            padding: {
                                top: 0,
                                right: -2,
                                bottom: 15,
                                left: 10
                            },
                        },
                        legend: {
                            show: !0,
                            horizontalAlign: "center",
                            offsetX: 0,
                            offsetY: -5,
                            markers: {
                                width: 9,
                                height: 9,
                                radius: 6
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 0
                            },
                        },
                        plotOptions: {
                            bar: {
                                columnWidth: "30%",
                                barHeight: "70%"
                            }
                        },
                        colors: linechartcustomerColors,
                        tooltip: {
                            shared: !0,
                            y: [{
                                    formatter: function(e) {
                                        return void 0 !== e ? e.toFixed(0) : e;
                                    },
                                },
                                {
                                    formatter: function(e) {
                                        return void 0 !== e ?
                                            formatVietnamDong(e) :
                                            formatVietnamDong(e);
                                    },
                                },
                                {
                                    formatter: function(e) {
                                        return void 0 !== e ?
                                            e.toFixed(0) :
                                            e;
                                    },
                                },
                            ],
                        },
                    }),
                    (chart = new ApexCharts(
                        document.querySelector("#customer_impression_charts"),
                        options
                    )).render()),
                getChartColorsArray("store-visits-source")),
            vectorMapWorldMarkersColors =
            (chartDonutBasicColors &&
                ((options = {
                        series: [44, 55, 41, 17, 15],
                        labels: ["Direct", "Social", "Email", "Other", "Referrals"],
                        chart: {
                            height: 333,
                            type: "donut"
                        },
                        legend: {
                            position: "bottom"
                        },
                        stroke: {
                            show: !1
                        },
                        dataLabels: {
                            dropShadow: {
                                enabled: !1
                            }
                        },
                        colors: chartDonutBasicColors,
                    }),
                    (chart = new ApexCharts(
                        document.querySelector("#store-visits-source"),
                        options
                    )).render()),
                getChartColorsArray("sales-by-locations")),
            swiper =
            (vectorMapWorldMarkersColors &&
                (worldemapmarkers = new jsVectorMap({
                    map: "world_merc",
                    selector: "#sales-by-locations",
                    zoomOnScroll: !1,
                    zoomButtons: !1,
                    selectedMarkers: [0, 5],
                    regionStyle: {
                        initial: {
                            stroke: "#9599ad",
                            strokeWidth: 0.25,
                            fill: vectorMapWorldMarkersColors[0],
                            fillOpacity: 1,
                        },
                    },
                    markersSelectable: !0,
                    markers: [{
                            name: "Palestine",
                            coords: [31.9474, 35.2272]
                        },
                        {
                            name: "Russia",
                            coords: [61.524, 105.3188]
                        },
                        {
                            name: "Canada",
                            coords: [56.1304, -106.3468]
                        },
                        {
                            name: "Greenland",
                            coords: [71.7069, -42.6043]
                        },
                    ],
                    markerStyle: {
                        initial: {
                            fill: vectorMapWorldMarkersColors[1]
                        },
                        selected: {
                            fill: vectorMapWorldMarkersColors[2]
                        },
                    },
                    labels: {
                        markers: {
                            render: function(e) {
                                return e.name;
                            },
                        },
                    },
                })),
                new Swiper(".vertical-swiper", {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    mousewheel: !0,
                    loop: !0,
                    direction: "vertical",
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: !1
                    },
                })),
            layoutRightSideBtn = document.querySelector(".layout-rightside-btn");

        layoutRightSideBtn &&
            (Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(
                    function(e) {
                        var t = document.querySelector(".layout-rightside-col");
                        e.addEventListener("click", function() {
                            t.classList.contains("d-block") ?
                                (t.classList.remove("d-block"), t.classList.add("d-none")) :
                                (t.classList.remove("d-none"),
                                    t.classList.add("d-block"));
                        });
                    }
                ),
                window.addEventListener("resize", function() {
                    var e = document.querySelector(".layout-rightside-col");
                    e &&
                        Array.from(
                            document.querySelectorAll(".layout-rightside-btn")
                        ).forEach(function() {
                            window.outerWidth < 1699 || 3440 < window.outerWidth ?
                                e.classList.remove("d-block") :
                                1699 < window.outerWidth && e.classList.add("d-block");
                        }),
                        "semibox" == document.documentElement.getAttribute("data-layout") &&
                        (e.classList.remove("d-block"), e.classList.add("d-none"));
                }),
                (overlay = document.querySelector(".overlay"))) &&
            document.querySelector(".overlay").addEventListener("click", function() {
                1 ==
                    document
                    .querySelector(".layout-rightside-col")
                    .classList.contains("d-block") &&
                    document
                    .querySelector(".layout-rightside-col")
                    .classList.remove("d-block");
            }),
            window.addEventListener("load", function() {
                var e = document.querySelector(".layout-rightside-col");
                e &&
                    Array.from(
                        document.querySelectorAll(".layout-rightside-btn")
                    ).forEach(function() {
                        window.outerWidth < 1699 || 3440 < window.outerWidth ?
                            e.classList.remove("d-block") :
                            1699 < window.outerWidth && e.classList.add("d-block");
                    }),
                    "semibox" == document.documentElement.getAttribute("data-layout") &&
                    1699 < window.outerWidth &&
                    (e.classList.remove("d-block"), e.classList.add("d-none"));
            });
    </script>
@endsection
