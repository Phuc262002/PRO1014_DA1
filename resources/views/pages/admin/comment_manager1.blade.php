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
                                    Quản lý bình luận
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
                                        <th scope="col">Tên bài viết</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Người gửi</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col" style="width: 150px">
                                            Chức năng
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>William Elmore</td>
                                            <td>07 Oct, 2021</td>
                                            <td>07 Oct, 2021</td>
                                            <td>
                                                <span class="badge bg-success">Paid</span>
                                            </td>
                                            <td>
                                                <div class="hstack gap-3 flex-wrap">

                                                    <a href="javascript:void(0);" class=" link-success fs-15"
                                                        data-bs-toggle="modal" data-bs-target="#varyingcontentModal"
                                                        data-bs-whatever="@mdo"><i class="ri-edit-2-line"></i></a>




                                                    <a href="javascript:void(0);" class="link-danger fs-15"><i
                                                            class="ri-delete-bin-line"></i></a>

                                                    <div class="modal fade" id="varyingcontentModal" tabindex="-1"
                                                        aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="varyingcontentModalLabel">
                                                                        Bảng trạng thái</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Trạng thái:</label>
                                                                            <select class="form-select"
                                                                                aria-label=".form-select-sm example"
                                                                                name="status">
                                                                                <option value="1">Active</option>
                                                                                <option value="0">Disabled</option>
                                                                            </select>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Hủy</button>
                                                                    <button type="button" class="btn btn-primary">Xác
                                                                        nhận</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
