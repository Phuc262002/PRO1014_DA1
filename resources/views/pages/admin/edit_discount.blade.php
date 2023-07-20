@extends('layouts.admin.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Cập nhật mã giảm giá</h4>
                            </div><!-- end card header -->
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
                                <div class="live-preview">
                                    <form action="{{ route('coupon.update', ['coupon' => $coupon->id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="sku" class="form-label">Mã giảm giá</label>
                                                <div class="input-group">
                                                    <input type="text" id="coupon_hash_id" name="coupon_hash_id"
                                                        class="form-control" aria-label="Recipient's username"
                                                        aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="button-addon2" onclick="generateRandomCoupon()"><i
                                                            class="ri-refresh-line"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tên phiếu giảm giá</label>
                                                <input type="text" name="coupon_name" class="form-control"
                                                    value="{{ $coupon->coupon_name }}" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="discount" class="form-label">Giảm giá</label>
                                                <input type="text" name="discount" class="form-control"
                                                    value="{{ $coupon->discount }}" id="discount">
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="start_at" class="form-label">Ngày bắt đầu giảm
                                                        giá</label>
                                                    <input id="start_at" name="start_at" type="text"
                                                        class="form-control" data-provider="flatpickr"
                                                        value="{{ $coupon->start_at }}" data-date-format="Y.m.d"
                                                        data-enable-time>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="end_at" class="form-label">Ngày kết thúc giảm
                                                        giá</label>
                                                    <input id="end_at" name="end_at" type="text" class="form-control"
                                                        data-provider="flatpickr" value="{{ $coupon->end_at }}"
                                                        data-date-format="Y.m.d" data-enable-time>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mt-3">
                                            <input type="hidden" id="save_action" name="save_action" value="save_and_back">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button class="btn btn-success shadow-none">Lưu và Quay lại</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a data-value="save_and_edit" href="javascript:save_and_edit();"
                                                                class="dropdown-item">Lưu và Tiếp tục sửa</a></li>
                                                        <li><a data-value="save_and_new" href="javascript:save_and_new();"
                                                                class="dropdown-item">Lưu và Thêm mới</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="{{ route('coupon.index') }}" class="btn btn-danger shadow-none">Hủy
                                                bỏ</a>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div> <!-- container-fluid -->

        </div><!-- End Page-content -->
    </div>
@endsection
@section('js')
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
        function save_and_edit() {
            $('#save_action').val('save_and_edit');
            $('form').submit();
        }

        function save_and_new() {
            $('#save_action').val('save_and_new');
            $('form').submit();
        }
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
                            var output = document.getElementById(
                                'ckfinder-product_img');
                            output.value = file.getUrl();
                        });

                        finder.on('file:choose:resizedImage', function(evt) {
                            var output = document.getElementById(
                                'ckfinder-product_img');
                            output.value = evt.data.resizedUrl;
                        });
                    }
                });
            })
        });
    </script>
    <script>
        function generateRandomCoupon() {
            var charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            var sku = '';

            for (var i = 0; i < 7; i++) {
                var randomIndex = Math.floor(Math.random() * charset.length);
                sku += charset[randomIndex];
            }

            document.getElementById('coupon_hash_id').value = 'SP_' + sku;
        }
    </script>
@endsection
