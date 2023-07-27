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
                                            <h5 class="card-title mb-0">Quản Lý Banner</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm Banner</button>
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
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col">Ảnh</th>
                                                    <th scope="col">Giới thiệu</th>
                                                    <th scope="col">Tiêu đề</th>
                                                    <th scope="col">Phân loại</th>
                                                    <th scope="col">Trạng thái</th>
                                                    <th scope="col" style="width: 150px">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($banner as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $item->img_banner }}" alt=""
                                                                    width="100" height="100" />
                                                            </div>
                                                        </td>
                                                        <td>{!! $item->introduction !!}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->banner_type }}</td>
                                                        <td>
                                                            @if ($item->status == true)
                                                                <span class="badge bg-success">Active</span>
                                                            @else
                                                                <span class="badge bg-danger">Disabled</span>
                                                            @endif
                                                        </td>

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
                                                                    <a href="javascript:deleteBanner({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('banner.destroy', ['banner' => $item->id]) }}"
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
                                            {{ $banner->links() }}
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
                                            <form action="{{ route('banner.store') }}" method="post"
                                                enctype="multipart/form-data" class="tablelist-form " autocomplete="off">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row g-4">
                                                        <div class="mb-0">
                                                            <label for="basiInput" class="form-label">Tiêu đề</label>
                                                            <input type="text" class="form-control"
                                                                id="basiInput"name="title">
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="img_banner" class="form-label">Thêm hình
                                                                ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button" onclick="uploadImageAdd()">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img" name="img_banner"
                                                                    value="Chưa có ảnh nào được chọn...">
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="exampleFormControlTextarea5"
                                                                class="form-label">Trạng
                                                                thái</label>
                                                            <select class="form-select"
                                                                aria-label=".form-select-sm example" name="status">
                                                                <option value="1">Active</option>
                                                                <option value="0">Disabled</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="exampleFormControlTextarea5"
                                                                class="form-label">Loại
                                                                banner</label>
                                                            <select class="form-select"
                                                                aria-label=".form-select-sm example" name="banner_type">
                                                                <option value="SLIDER">SLIDER</option>
                                                                <option value="BANNER_SALE">BANNER_SALE</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-0">
                                                            <label for="formFile" class="form-lable">Nội dung</label>
                                                            <textarea id="editor" name="introduction"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Hủy</button>
                                                                <button type="submit" class="btn btn-success"
                                                                    id="add-btn">Thêm banner</button>
                                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($banner as $item)
                                <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light p-3">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form action="{{ route('banner.update', ['banner' => $item->id]) }}"
                                                method="post" enctype="multipart/form-data" class="tablelist-form"
                                                autocomplete="off">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="mb-0">
                                                            <label for="basiInput" class="form-label">Tiêu đề</label>
                                                            <input type="text" class="form-control" id="basiInput"
                                                                name="title" value="{{ $item->title }}">
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="image_main" class="form-label">Thêm hình
                                                                ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button" id="image_main"
                                                                    onclick="uploadImage({{ $item->id }})"
                                                                    id="image_main">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img{{ $item->id }}"
                                                                    name="img_banner" value="{{ $item->img_banner }}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="exampleFormControlTextarea5"
                                                                class="form-label">Trạng
                                                                thái</label>
                                                            <select class="form-select"
                                                                aria-label=".form-select-sm example" name="status">
                                                                @if ($item->status == true)
                                                                    <option selected value="1">Active</option>
                                                                    <option value="0">Disabled</option>
                                                                @else
                                                                    <option value="1">Active</option>
                                                                    <option selected value="0">Disabled</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-0">
                                                            <label for="exampleFormControlTextarea5"
                                                                class="form-label">Loại
                                                                banner</label>
                                                            <select class="form-select"
                                                                aria-label=".form-select-sm example" name="banner_type"
                                                                value="{{ $item->banner_type }}">
                                                                @if ($item->banner_type == 'SLIDER')
                                                                    <option selected value="SLIDER">SLIDER</option>
                                                                    <option value="BANNER_SALE">BANNER_SALE</option>
                                                                @else
                                                                    <option value="SLIDER">SLIDER</option>
                                                                    <option selected value="BANNER_SALE">BANNER_SALE
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 mt-3">
                                                            <label for="formFile" class="form-lable">Nội dung</label>
                                                            <textarea id="editor{{ $item->id }}" name="introduction">{{ $item->introduction }}</textarea>
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
    @foreach ($banner as $item)
        <script>
            ClassicEditor
                .create(document.querySelector('#editor{{ $item->id }}'), {
                    ckfinder: {
                        uploadUrl: '{{ route('home') }}/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endforeach
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
    </script>
    <script>
        function uploadImageAdd() {
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
        }
    </script>
    <script>
        function deleteBanner(id) {
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
