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
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
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
                                                <td>{{ $item->id }}</td>
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
                                                <td>
                                                    @if ($item->is_admin == true)
                                                        <span class="badge badge-soft-primary">Admin</span>
                                                    @else
                                                        <span class="badge badge-soft-danger">User</span>
                                                    @endif
                                                </td>
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
                                                        <a href="{{ route('user.edit', ['user' => $item->id]) }}"
                                                            class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                        <a href="javascript:deleteUser({{ $item->id }});"
                                                            class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                                        <form id="delete_form_{{ $item->id }}"
                                                            action="{{ route('user.destroy', ['user' => $item->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
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
    @section('js')
        <script>
            function deleteUser(id) {
                Swal.fire({
                    title: "Bạn có chắc muốn xóa?",
                    text: "Dữ liệu sẽ bị xóa và không khôi phục lại được.",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                    cancelButtonClass: "btn btn-danger w-xs mt-2",
                    confirmButtonText: "Có, xóa nó",
                    cancelButtonText: "Hủy",
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function(t) {
                    if (t.value) {
                        document.getElementById('delete_form_' + id).submit();
                        // window.location.reload();
                    }

                });
            }
        </script>
    @endsection
