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
                                <h4 class="card-title mb-0 flex-grow-1">Quản lí banner và slider</h4>
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 46px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck" />
                                                            <label class="form-check-label" for="cardtableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Ảnh</th>
                                                    <th scope="col">Giới thiệu</th>
                                                    <th scope="col">Tiêu đề</th>
                                                    <th scope="col">Trạng thái</th>
                                                    <th scope="col" style="width: 150px">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck01" />
                                                            <label class="form-check-label" for="cardtableCheck01"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                width="100" height="100" />
                                                        </div>
                                                    </td>
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
            </div>
        </div>



    </div>
@endsection
