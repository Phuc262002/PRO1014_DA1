@extends('layouts.admin.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">
                                    Quản lý danh mục
                                </h4>
                                <div class="flex-shrink-0"></div>
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered dt-responsive nowrap table-striped align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 42px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="responsivetableCheck" />
                                                            <label class="form-check-label"
                                                                for="responsivetableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Tên danh mục</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="responsivetableCheck01" />
                                                            <label class="form-check-label"
                                                                for="responsivetableCheck01"></label>
                                                        </div>
                                                    </th>
                                                    <td><a href="#" class="fw-medium">#VZ2110</a></td>
                                                    <td>Cám heo</td>
                                                    <td>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <a href="javascript:void(0);" class="link-primary fs-15"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-success fs-15"><i
                                                                    class="ri-edit-2-line"></i></a>
                                                            <a href="javascript:void(0);" class="link-danger fs-15"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
