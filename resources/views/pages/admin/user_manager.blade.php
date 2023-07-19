@extends('layouts.admin.master')
@section('title')
    {{ $title }}
@endsection
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
                                <h5 class="card-title mb-0">Tất cả người dùng</h5>
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
                                            <th data-ordering="false">ID</th>
                                            <th data-ordering="false">Người dùng</th>
                                            <th data-ordering="false">Email</th>
                                            <th>Ngày tạo</th>
                                            <th data-ordering="false">Xác thực</th>
                                            <th>Vai trò</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1" />
                                                    </div>
                                                </th>
                                                <td>01</td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ $item->image }}" alt=""
                                                                class="avatar-xs rounded-circle">
                                                        </div>
                                                        <div class="flex-grow-1">{{ $item->name }}</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#!">{{ $item->email }}</a>
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    @if ($item->confirm == true)
                                                        <span class="badge badge-soft-info">Đã xác thực</span>
                                                    @else
                                                        <span class="badge badge-soft-warning">Chưa xác thực</span>
                                                    @endif
                                                </td>
                                                <td><span class="badge badge-soft-success">User</span>
                                                    @if ($item->status == true)
                                                <td class="text-success">
                                                    <span class="badge bg-success">Active</span>
                                                </td>
                                            @else
                                                <td class="text-danger">
                                                    <span class="badge bg-danger">Disabled</span>
                                                </td>
                                        @endif
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
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
