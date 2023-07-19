@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">THÊM BANNER MỚI</h4>
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
                                    <form action="{{ route('banner.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tiêu đề</label>
                                                <input type="text" class="form-control" id="basiInput"name="title">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image_main" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="image_main" id="image_main">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img"
                                                        name="img_banner" value="Chưa có ảnh nào được chọn...">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="exampleFormControlTextarea5" class="form-label">Trạng
                                                    thái</label>
                                                <select class="form-select" aria-label=".form-select-sm example" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="exampleFormControlTextarea5" class="form-label">Loại
                                                    banner</label>
                                                <select class="form-select" aria-label=".form-select-sm example" name="banner_type">
                                                    <option value="SLIDER">SLIDER</option>
                                                    <option value="BANNER_SALE">BANNER_SALE</option>
                                                </select>
                                            </div>
                                        
                                            <div class="col-lg-12 mt-3">
                                                <label for="formFile" class="form-lable">Nội dung</label>
                                                <textarea id="editor" name="introduction"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mt-3">
                                            <input type="hidden" id="save_action" name="save_action"
                                                value="save_and_back">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button class="btn btn-success shadow-none">Lưu và Quay lại</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a data-value="save_and_edit"
                                                                href="javascript:save_and_edit();"
                                                                class="dropdown-item">Lưu và Tiếp tục sửa</a></li>
                                                        <li><a data-value="save_and_new" href="javascript:save_and_new();"
                                                                class="dropdown-item">Lưu và Thêm mới</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="{{ route('product.index') }}" class="btn btn-danger shadow-none">Hủy
                                                bỏ</a>
                                        </div>
                                    </div>
                                    

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
                    uploadUrl: '{{ route('home') }}/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                }
            })
            .catch(error => {
                console.error(error);
            });
</script>
<script>
    $(document).ready(function() {
        $("#image_main").click(function() {
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
@endsection

