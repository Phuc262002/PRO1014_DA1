@extends('layouts.client.master')

@section('content')
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Tài khoản</h2>
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Tài khoản của tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- My Account Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{route('account')}}"><i class="fa fa-user"></i> Tài khoản</a>
                                    <a href="{{route('cart-detail')}}"><i class="fa fa-cart-arrow-down"></i> Đơn hàng</a>
                                    <a href="{{route('service-detail')}}"><i class="fa fa-cart-arrow-down"></i> Dịch vụ</a>
                                    <a href="{{route('maps')}}"><i class="fa fa-map-marker"></i> Địa chỉ</a>
                                    <a href="{{route('admin.dashboard')}}"><i class="fa fa-user"></i> Quản trị Admin</a>
                                    <a href="{{route('account')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <!-- Single Tab Content Start -->
                                
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Tài khoản</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="display-name" class="required m-b-10">Tên hiển
                                                            thị</label>
                                                        <input type="text" id="display-name" value="{{Auth::user()->name}}"
                                                            placeholder="Tên hiển thị" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="email" class="required m-b-5">Email</label>
                                                        <input type="email" id="email" placeholder="Email" readonly value="{{Auth::user()->email}}" />
                                                    </div>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="formFile" class="required m-b-5">Thêm hình ảnh</label>
                                                        <div class="input-group">
                                                            <button class="btn btn-outline-primary shadow-none" type="button"
                                                                id="inputGroupFileAddon03">Thêm ảnh</button>
                                                            <input type="text" class="form-control" id="ckfinder-product_img" name="product_img" readonly
                                                                    value="{{Auth::user()->image}}">
                                                        </div>
                                                    </div>

                                                    <fieldset>
                                                        <legend>Đổi mật khẩu</legend>
                                                        <div class="single-input-item m-b-15">
                                                            <label for="current-pwd" class="required m-b-10">Mật khẩu hiển
                                                                thị</label>
                                                            <input type="password" id="current-pwd"
                                                                placeholder="Mật khẩu hiển thị" />
                                                        </div>
                                                        <div class="row m-b-n15">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item m-b-15">
                                                                    <label for="new-pwd" class="required m-b-10">Mật khẩu
                                                                        mới</label>
                                                                    <input type="password" id="new-pwd"
                                                                        placeholder="Mật khẩu mới" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item m-b-15">
                                                                    <label for="confirm-pwd" class="required m-b-10">Nhập
                                                                        lại mật khẩu</label>
                                                                    <input type="password" id="confirm-pwd"
                                                                        placeholder="Nhập lại mật khẩu" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button m-t-30">
                                                        <button class="btn btn btn-primary btn-hover-dark rounded-0">Lưu
                                                            thay đổi</button>
                                                    </div>
                                                </form>
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


@endsection
@section('js')
<script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/admin/js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('assets/admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('assets/admin/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/admin/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/admin/js/app.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
<script src="{{ asset('assets/admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: 'assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $(document).ready(function() {
            $("#inputGroupFileAddon03").click(function() {
                CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById('ckfinder-product_img');
                        output.value = file.getUrl();
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById('ckfinder-product_img');
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
            })
        });
    </script>
@endsection
