@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">THÊM BLOG MỚI</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tiêu đề</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>

                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Slug</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="exampleFormControlTextarea5" class="form-label">Thể loại</label>
                                                <select class="form-select" aria-label=".form-select-sm example">
                                                    <option selected>Chọn thể loại</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="inputGroupFileAddon03">Button</button>
                                                    <input type="file" class="form-control" id="inputGroupFile03"
                                                        aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Nội dung</label>
                                                <div class="ckeditor-classic"></div>
                                            </div>

                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Nội dung</label>
                                                <div class="ckeditor-classic"></div>
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
                    <label class="btn btn-outline-success shadow-none" for="success-outlined">Thêm Blog</label>
                </div>
            </div> <!-- container-fluid -->

        </div><!-- End Page-content -->
    </div>
@endsection