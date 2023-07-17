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
                            <div class="card-header">
                                <h5 class="card-title mb-0">Quản lí banner và slider</h5>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                        value="option" />
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
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                        value="option1" />
                                                </div>
                                            </th>
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
    @endsection
