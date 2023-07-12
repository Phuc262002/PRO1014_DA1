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
                                <h5 class="card-title mb-0">Tất cả bài viết</h5>
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
                                            <th data-ordering="false">Tiêu đề</th>
                                            <th data-ordering="false">Hình ảnh</th>
                                            <th>Người đăng</th>
                                            <th data-ordering="false">Danh mục</th>
                                            <th>Mô tả</th>
                                            <th>Ngày cập nhật</th>
                                            <th>Số lượng bình luận</th>
                                            <th>Chức năng</th>
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
                                            <td>01</td>
                                            <td>
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        width="100" height="100" />
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#!">Post launch reminder/ post list</a>
                                            </td>
                                            <td>03 Oct, 2021</td>
                                            <td>
                                                <span class="badge badge-soft-info">Re-open</span>
                                            </td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-danger">High</span></td>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
