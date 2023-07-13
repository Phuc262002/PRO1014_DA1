@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">THÊM SẢN PHẨM MỚI</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Slug</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá bán</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá giảm</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">

                                                    <input type="file" class="form-control" id="inputGroupFile03"
                                                        aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Mô tả </label>
                                                <textarea class="w-100 form-control" id="" cols="30" rows="5"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="col-lg-6">
                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" checked>
                    <label class="btn btn-outline-success shadow-none" for="success-outlined">Thêm sản phẩm</label>
                </div>
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
@endsection
