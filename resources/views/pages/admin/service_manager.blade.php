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
                                            <h5 class="card-title mb-0">Quản lý dịch vụ</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm dịch vụ</button>
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
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Tìm kiếm">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-6">
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <div class="">
                                                        <input type="text" class="form-control" id="datepicker-range"
                                                            data-provider="flatpickr" data-date-format="d M, Y"
                                                            data-range-date="true" placeholder="Select date">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-sm-4">
                                                    <div>
                                                        <select class="form-control" data-plugin="choices" data-choices
                                                            data-choices-search-false name="choices-single-default"
                                                            id="idStatus">
                                                            <option value="">Status</option>
                                                            <option value="all" selected>All</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Block">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-sm-4">
                                                    <div>
                                                        <button type="button" class="btn btn-primary w-100"
                                                            onclick="SearchData();"> <i
                                                                class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
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
                                                    <th scope="col" style="width: 42px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="responsivetableCheck" />
                                                            <label class="form-check-label"
                                                                for="responsivetableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Tên dịch vụ</th>
                                                    <th scope="col">Hình Ảnh</th>
                                                    <th scope="col">Icon</th>
                                                    <th scope="col">Mô Tả</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Giảm giá</th>

                                                    <th scope="col">Chức Năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($services as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="responsivetableCheck01" />
                                                                <label class="form-check-label"
                                                                    for="responsivetableCheck01"></label>
                                                            </div>
                                                        </th>
                                                        <td>{{ $item->name }}</td>
                                                        <td>
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $item->image_service }}" alt=""
                                                                    width="100" height="100" />
                                                            </div>
                                                        </td>
                                                        <td>{{ $item->icon }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->discount_price }}</td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Edit">
                                                                    <a href="#showModal{{ $item->id }}"
                                                                        data-bs-toggle="modal"
                                                                        class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a href="javascript:deleteService({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('service.destroy', ['service' => $item->id]) }}"
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
                                            {{ $services->links() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light p-3">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form action="{{ route('service.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="mb-0">
                                                            <label for="basiInput" class="form-label">Tên dịch vụ</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="basiInput">
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button" id="inputGroupFileAddon03">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img" name="image_service"
                                                                    readonly value="Chọn ảnh...">
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="basiInput" class="form-label">Icon</label>
                                                            <input type="text" name="icon" class="form-control"
                                                                id="basiInput">
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="basiInput" class="form-label">Giá dịch vụ</label>
                                                            <input type="text" name="price" class="form-control"
                                                                id="basiInput">
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="basiInput" class="form-label">Giá giảm</label>
                                                            <input type="text" value="0" name="discount_price"
                                                                class="form-control" id="basiInput">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <label for="formFile" class="form-label">Mô tả </label>
                                                            <textarea class="w-100 form-control" name="description" id="" cols="30" rows="5"></textarea>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Hủy</button>
                                                                <button type="submit" class="btn btn-success"
                                                                    id="add-btn">Thêm danh mục sản phẩm</button>
                                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($services as $item)
                                    <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="{{ route('service.update', ['service' => $item->id]) }}"
                                                    method="post" enctype="multipart/form-data" class="tablelist-form"
                                                    autocomplete="off">
                                                    @csrf
                                                    @method ( 'put' )
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Tên dịch vụ</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="basiInput" value="{{ $item->name }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button"
                                                                    onclick="uploadImage({{ $item->id }})">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img{{ $item->id }}"
                                                                    name="image_service" readonly
                                                                    value="{{ $item->image_service }}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Icon</label>
                                                            <input type="text" name="icon" class="form-control"
                                                                id="basiInput" value="{{ $item->icon }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Giá dịch vụ</label>
                                                            <input type="text" name="price" class="form-control"
                                                                id="basiInput" value="{{ $item->price }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Giá giảm</label>
                                                            <input type="text" class="form-control"
                                                                name="discount_price" id="basiInput"
                                                                value="{{ $item->discount_price }}">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <label for="formFile" class="form-label">Mô tả </label>
                                                            <textarea class="w-100 form-control" name="description" id="" cols="30" rows="5">{{ $item->description }}</textarea>
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
                                @endforeach
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
        function uploadImage(id) {

            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(
                            'ckfinder-product_img' + id);
                        output.value = file.getUrl();
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById(
                            'ckfinder-product_img' + id);
                        output.value = evt.data.resizedUrl;
                    });
                }
            });

        };
        $(document).ready(function() {
            $("#inputGroupFileAddon03").click(function() {
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
        function deleteService(id) {
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
