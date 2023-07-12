@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">THÊM DANH MỤC MỚI</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <label for="basiInput" class="form-label">Tên danh mục</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="radio" class="btn-check" name="options-outlined"
                                                    id="success-outlined" checked>
                                                <label class="btn btn-outline-success shadow-none"
                                                    for="success-outlined">Thêm
                                                    danh mục</label>
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

            </div> <!-- container-fluid -->

        </div><!-- End Page-content -->
    </div>
@endsection
