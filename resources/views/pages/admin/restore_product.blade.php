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
                                    Quản Lý Sản Phẩm
                                </h4>
                                <div class="flex-shrink-0"></div>
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col"
                                                        style="
                                                        width: 42px;
                                                    ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="responsivetableCheck" />
                                                            <label class="form-check-label"
                                                                for="responsivetableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">
                                                        ID
                                                    </th>
                                                    <th scope="col">
                                                        Tên Sản Phẩm
                                                    </th>
                                                    <th scope="col">
                                                        Hình Ảnh
                                                    </th>
                                                    <th scope="col">
                                                        Thương Hiệu
                                                    </th>
                                                    <th scope="col">
                                                        Giá
                                                    </th>
                                                    <th scope="col">
                                                        Số Lượng
                                                    </th>
                                                    <th scope="col">
                                                        Trạng Thái
                                                    </th>
                                                    <th scope="col">
                                                        Chức Năng
                                                    </th>
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
                                                    <td>
                                                        <a href="#" class="fw-medium">#VZ2110</a>
                                                    </td>
                                                    <td>Cám heo</td>
                                                    <td>
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                width="100" height="100" />
                                                        </div>
                                                    </td>
                                                    <td>Gucci</td>
                                                    <td>$9.98</td>
                                                    <td>10.000</td>
                                                    <td class="text-success">
                                                        <i class="ri-checkbox-circle-line fs-17 align-middle"></i>
                                                        Paid
                                                    </td>
                                                    <td>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <a href="javascript:void(0);" class="link-success fs-15"><i
                                                                    class="ri-refresh-line"></i></a>
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
