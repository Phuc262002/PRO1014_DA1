@extends('layouts.admin.master')
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
                                    Đơn hàng đã hủy
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
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Người mua</th>
                                            <th scope="col">Ngày mua</th>
                                            <th scope="col">Giảm giá</th>
                                            <th scope="col">Tổng tiền</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col" style="width: 150px">
                                                Chức năng
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <a href="#" class="fw-medium">#VL2110</a>
                                            </td>
                                            <td>William Elmore</td>
                                            <td>07 Oct, 2021</td>
                                            <td>$24.05</td>
                                            <td>$24.05</td>
                                            <td>
                                                <span class="badge bg-success">Paid</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <a href="javascript:void(0);" class="link-primary fs-15"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a href="javascript:void(0);" class="link-success fs-15"><i
                                                            class="ri-edit-2-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
