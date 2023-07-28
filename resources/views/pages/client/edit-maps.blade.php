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

            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">
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

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ route('thong-tin-ca-nhan.index') }}"><i class="fa fa-user"></i> Tài
                                        khoản</a>
                                    <a href="{{ route('don-hang-ca-nhan.index') }}"><i class="fa fa-cart-arrow-down"></i>
                                        Đơn hàng</a>
                                    <a href="{{ route('dich-vu-ca-nhan.index') }}"><i class="fa fa-cart-arrow-down"></i>
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

                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->

                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->


                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->

                                    <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Chỉnh sửa địa chỉ</h3>
                                            <div class="account-details-form">

                                                <form method="POST" enctype="multipart/form-data"
                                                    action="{{ route('dia-chi.update', ['dia_chi' => $inforUser->id]) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="display-name" class="required m-b-10">Tên hiển
                                                            thị</label>
                                                        <input type="text" id="display-name" placeholder="Tên hiển thị"
                                                            value="{{ $inforUser->fullname }}" name="fullname" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="email" class="required m-b-5">Địa chỉ</label>
                                                        <input type="text" id="email" placeholder="Địa chỉ"
                                                            value="{{ $inforUser->address }}" name="address" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="email" class="required m-b-5">Số điện thoại</label>
                                                        <input type="number" id="email" placeholder="Số điện thoại"
                                                            value="{{ $inforUser->phone }}" name="phone" />
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" id="select" name="is_default"
                                                            {{ $inforUser->is_default == 1 ? 'checked' : '' }} />
                                                        <label for="select" class="required m-b-5">Chọn làm địa chỉ mặc
                                                            định</label>
                                                    </div>
                                                    <div class="single-input-item w-100 single-item-button m-t-30">
                                                        <div class="row w-100">
                                                            <div class="col-3">
                                                                <button class="btn btn btn-primary btn-hover-dark rounded-4">
                                                                    Lưu thay đổi
                                                                </button>
                                                                    
                                                            </div>
                                                            <div class="col-3">
                                                                <a href="{{ route('dia-chi.index') }}"
                                                                    class="btn btn btn-danger btn-hover-dark rounded-4">
                                                                    Quay lại</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="single-input-item w-100 single-item-button m-t-30">
                                                    <div class="row w-100">
                                                        <div class="col-3">
                                                            <a href="javascript:deletePost({{ $inforUser->id }});"
                                                                class="link-danger fs-15">
                                                                <button class="btn btn btn-danger btn-hover-dark rounded-4">
                                                                    Xóa địa chỉ
                                                                </button>
                                                            </a>
                                                            <form id="delete_form_{{ $inforUser->id }}"
                                                                action="{{ route('dia-chi.destroy', ['dia_chi' => $inforUser->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function deletePost(id) {
            document.getElementById('delete_form_' + id).submit();
            // Swal.fire({
            //     title: "Bạn có chắc muốn xóa?",
            //     text: "Bạn có thể lấy lại bài Blog này ở thùng rác.",
            //     icon: "warning",
            //     showCancelButton: !0,
            //     confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
            //     cancelButtonClass: "btn btn-danger w-xs mt-2",
            //     confirmButtonText: "Có, xóa nó",
            //     cancelButtonText: "Hủy",
            //     buttonsStyling: !1,
            //     showCloseButton: !0,
            // }).then(function(t) {
            //     if (t.value) {
            //         document.getElementById('delete_form_' + id).submit();
            //     }
            // });
        }
    </script>
@endsection
