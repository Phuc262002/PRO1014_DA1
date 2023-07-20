@extends('layouts.admin.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->

                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">
                                    Tất cả mã giảm giá
                                </h4>
                                <form class="app-search d-none d-md-block p-0">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm" autocomplete="off"
                                            id="search-options" value="" />
                                        <span class="mdi mdi-magnify search-widget-icon"></span>
                                        <span
                                            class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                            id="search-close-options"></span>
                                    </div>
                                </form>
                                <div class="flex-shrink-0"></div>
                            </div>
                            <div class="card-body">
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
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 46px">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="cardtableCheck" />
                                                    <label class="form-check-label" for="cardtableCheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col">Mã giảm giá</th>
                                            <th scope="col">Tên phiếu giảm giá</th>
                                            <th scope="col">Giảm giá</th>
                                            <th scope="col">Ngày bắt đầu giảm giá</th>
                                            <th scope="col">Ngày kết thúc giảm giá</th>
                                            <th scope="col" style="width: 150px">
                                                Chức năng
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($counpon as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="cardtableCheck01" />
                                                        <label class="form-check-label" for="cardtableCheck01"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="fw-medium">{{ $item->coupon_hash_id }}</a>
                                                </td>
                                                <td>{{ $item->coupon_name }}</td>
                                                <td>{{ $item->discount }}</td>
                                                <td>{{ $item->start_at }}</td>
                                                <td>{{ $item->end_at }}</td>

                                                <td>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <a href="{{ route('coupon.edit', ['coupon' => $item->id]) }}"
                                                            class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                        <a href="javascript:deleteCoupon({{ $item->id }});"
                                                            class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                                        <form id="delete_form_{{ $item->id }}"
                                                            action="{{ route('coupon.destroy', ['coupon' => $item->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
    @section('js')
        <script>
            function deleteCoupon(id) {
                Swal.fire({
                    title: "Bạn có chắc muốn xóa?",
                    text: "Dữ liệu sẽ bị xóa và không khôi phục lại được.",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                    cancelButtonClass: "btn btn-danger w-xs mt-2",
                    confirmButtonText: "Có, xóa nó",
                    cancelButtonText: "Hủy",
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function(t) {
                    if (t.value) {
                        document.getElementById('delete_form_' + id).submit();
                        // window.location.reload();
                    }

                    // t.value &&
                    //     Swal.fire({
                    //         title: "Đã xóa!",
                    //         text: "Sản phẩm đã được xóa.",
                    //         icon: "success",
                    //         confirmButtonClass: "btn btn-primary w-xs mt-2",
                    //         buttonsStyling: !1,
                    //     });


                });
            }
        </script>
    @endsection
