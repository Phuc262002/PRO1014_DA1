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
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0"> Quản Lý Sản Phẩm</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm sản phẩm</button> --}}
                                            <a href="{{ route('product.create') }}" type="button"
                                                class="btn btn-success add-btn" id="create-btn"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm sản phẩm</a>
                                            {{-- <button type="button" class="btn btn-info"><i
                                                    class="ri-file-download-line align-bottom me-1"></i> Import</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-bottom-dashed border-bottom">
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
                                <form action="{{ route('product.index') }}">
                                    <div class="row g-3">
                                        <div class="col-xl-8">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Tìm kiếm sản phẩm"
                                                value="{{ $search }}"  name="search">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-4">
                                            <div class="row g-3">
                                                
                                                <!--end col-->
                                                <div class="col-sm-6">
                                                    <div>
                                                        <select class="form-control" data-plugin="choices" data-choices
                                                            data-choices-search-false name="status" id="idStatus">

                                                            <option {{ $status == 'ALL' ? 'selected' : '' }} value="ALL"selected>
                                                                Tất cả
                                                            </option>
                                                            <option {{ $status == 'ACTIVE' ? 'selected' : '' }}
                                                                value="ACTIVE">Active
                                                            </option>
                                                            <option {{ $status == 'INACTIVE' ? 'selected' : '' }}
                                                                value="INACTIVE">Disabled
                                                            </option>
                                                            {{-- <option value="Active">Hoạt động</option>
                                                            <option value="Block">Chặn</option> --}}
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-sm-6">
                                                    <div>
                                                        <button class="btn btn-primary w-100" type="submit"
                                                            onclick="SearchData();"> <i
                                                                class="ri-equalizer-fill me-2 align-bottom"></i>Áp dụng</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col" >
                                                        <div class="form-check">
                                                            
                                                        </div>
                                                    </th>
                                                    <th scope="col">Sku</th>
                                                    <th scope="col">Tên Sản Phẩm</th>
                                                    <th scope="col">Hình Ảnh</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Giá giảm</th>
                                                    <th scope="col">Số Lượng</th>
                                                    <th scope="col">Trạng Thái</th>
                                                    <th scope="col">Chức Năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                    
                                                            </div>
                                                        </th>
                                                        <td class="id"><a
                                                            href="{{ route('product.show', ['product' => $item->id]) }}"
                                                            onclick="ViewInvoice(this);"
                                                            data-id="{{ $item->sku }}"
                                                            class="fw-medium link-primary">{{ $item->sku }}</a>
                                                    </td>
                                                        {{-- <td><a href="#" class="fw-medium">{{ $item->sku }}</a> --}}
                                                        </td>
                                                        <td style="width: 700px;"><div class="d-inline-block text-wrap"
                                                            style="width: 600px;">{{ $item->name }}</div></td>
                                                        <td>
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $item->image_main }}" alt=""
                                                                    width="100" height="100" />
                                                            </div>
                                                        </td>
                                                        <td>{{ number_format($item->price) }} VNĐ</td>
                                                        <td>
                                                            @if ($item->discount_price > 0)
                                                                {{ number_format($item->discount_price) }} VNĐ
                                                            
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->quantity }}</td>
                                                        @if ($item->status == 1)
                                                            <td class="text-success">
                                                                <span class="badge bg-success">Active</span>
                                                            </td>
                                                            @else
                                                            <td class="text-danger">
                                                                <span class="badge bg-danger">Disabled</span>
                                                            </td>
                                                        @endif
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Xem thông tin">
                                                                    <a class="text-success d-inline-block remove-item-btn"
                                                                        href="{{ route('product.show', ['product' => $item->id]) }}">
                                                                        <i class="ri-eye-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Edit">
                                                                    <a href="{{ route('product.edit', ['product' => $item->id]) }}""
                                                                        class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a href="javascript:deleteProduct({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('product.destroy', ['product' => $item->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ customer We did
                                                    not find any customer for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            {{ $products->links() }}
                                        </div>
                                    </div>
                                </div>
                                {{-- @foreach ($users as $item)
                                    <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="{{ route('user.update', ['user' => $item->id]) }}"
                                                    method="post" enctype="multipart/form-data" class="tablelist-form"
                                                    autocomplete="off">
                                                    @csrf
                                                    @method ( 'put' )
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="fullnameInput" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="fullnameInput"
                                                                name="name" value="{{ $item->name }}"
                                                                placeholder="Enter your name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inlineFormInputGroupUsername">Email</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text">@</div>
                                                                <input type="text" class="form-control" disabled
                                                                    id="inlineFormInputGroupUsername" name="email"
                                                                    value="{{ $item->email }}" placeholder="email">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="mb-3">
                                                            <label for="inputState" class="form-label">Vai trò</label>
                                                            <select id="inputState" class="form-select" data-choices
                                                                name="is_admin" data-choices-sorting="true">
                                                                @if ($item->is_admin == true)
                                                                    <option selected value="1">Admin</option>
                                                                    <option value="0">User</option>
                                                                @else
                                                                    <option value="1">Admin</option>
                                                                    <option selected value="0">User</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputState" class="form-label">Xác thực</label>
                                                            <select id="inputState" class="form-select" data-choices
                                                                name="confirm" data-choices-sorting="true">
                                                                @if ($item->confirm == true)
                                                                    <option selected value="1">Đã xác thực</option>
                                                                    <option value="0">Chưa xác thực</option>
                                                                @else
                                                                    <option value="1">Đã xác thực</option>
                                                                    <option selected value="0">Chưa xác thực</option>
                                                                @endif
                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="inputState" class="form-label">Trạng thái</label>
                                                            <select id="inputState" class="form-select" data-choices
                                                                name="status" data-choices-sorting="true">
                                                                @if ($item->status == true)
                                                                    <option selected value="1">Hoạt động</option>
                                                                    <option value="0">Bị chặn</option>
                                                                @else
                                                                    <option value="1">Hoạt động</option>
                                                                    <option selected value="0">Bị chặn</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="image_main" class="form-label">Thêm hình
                                                                ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button" id="image_main" id="image_main">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img" name="image"
                                                                    value="{{ $item->image }}">
                                                            </div>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="mt-2">
                                                                    <div class="border rounded">
                                                                        <div class="d-flex p-2">
                                                                            <div class="flex-shrink-0 me-3">
                                                                                <div class="avatar-sm bg-light rounded">
                                                                                    <img data-dz-thumbnail
                                                                                        class="img-fluid rounded d-block"
                                                                                        src="{{ $item->image }}"
                                                                                        alt="Dropzone-Image" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-1">
                                                                                <div class="pt-1">
                                                                                    <h5 class="fs-14 mb-1  data-dz-name>
                                                                        {{ $item->image }}</h5>
                                                                    <p class="fs-13
                                                                                        text-muted mb-0" data-dz-size>
                                                                                        </p>
                                                                                        <strong class="error text-danger"
                                                                                            data-dz-errormessage></strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Hủy</button>
                                                            <button type="submit" class="btn btn-success"
                                                                id="add-btn">Cập
                                                                nhật</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                                <!-- Modal -->
                                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" id="deleteRecord-close"
                                                    data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-2 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                        colors="primary:#f7b84b,secondary:#f06548"
                                                        style="width:100px;height:100px"></lord-icon>
                                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                        <h4>Are you sure ?</h4>
                                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove
                                                            this record ?</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                    <button type="button" class="btn w-sm btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn w-sm btn-danger"
                                                        id="delete-record">Yes, Delete It!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('home') }}/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(document).ready(function() {
            $("#image_main").click(function() {
                CKFinder.modal({
                    chooseFiles: true,
                    width: 800,
                    height: 600,
                    onInit: function(finder) {
                        finder.on('files:choose', function(evt) {
                            var file = evt.data.files.first();
                            var output = document.getElementById(
                                'ckfinder-product_img');
                            output.value = file.getUrl();
                        });

                        finder.on('file:choose:resizedImage', function(evt) {
                            var output = document.getElementById(
                                'ckfinder-product_img');
                            output.value = evt.data.resizedUrl;
                        });
                    }
                });
            })
        });
    </script>
    <script>
        function deleteProduct(id) {
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
