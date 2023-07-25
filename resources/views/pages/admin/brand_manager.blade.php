@extends('layouts.admin.master')
@section('title')
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
                                            <h5 class="card-title mb-0">Tất cả thương hiệu</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm thương hiệu</button>
                                            <button type="button" class="btn btn-info"><i
                                                    class="ri-file-download-line align-bottom me-1"></i> Import</button>
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
                                                    <th scope="col" style="width: 10px">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox"
                                                                id="checkAll" value="option" />
                                                        </div>
                                                    </th>

                                                    <th data-ordering="false">Tên thương hiệu</th>
                                                    <th data-ordering="false">Ảnh thương hiệu</th>
                                                    <th data-ordering="false">Quốc gia</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($brands as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input fs-15" type="checkbox"
                                                                    name="checkAll" value="option1" />
                                                            </div>
                                                        </th>

                                                        <td>{{ $item->name }}</td>
                                                        <td>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img src="{{ $item->image_brand }}" alt=""
                                                                        class="avatar-xs rounded-circle">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-danger">{{ $item->nation }}</span>
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
                                                                    <a href="javascript:deleteBrand({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('brands.destroy', ['brand' => $item->id]) }}"
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
                                            {{ $brands->links() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light p-3">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form action="{{ route('brands.store') }}" method="POST"
                                                enctype="multipart/form-data" class="tablelist-form" autocomplete="off">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Tên thương
                                                                hiệu</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" onchange="ChangeToSlug()">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Quốc gia</label>
                                                            <input type="text" name="nation" class="form-control"
                                                                id="basiInput">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="basiInput" class="form-label">Slug</label>
                                                            <input type="text" name="slug" class="form-control"
                                                                id="slug">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button" id="inputGroupFileAddon03">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img" name="image_brand"
                                                                    value="Chưa có ảnh nào được chọn...">
                                                            </div>
                                                        </div>
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
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($brands as $item)
                                    <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="{{ route('brands.update', ['brand' => $item->id]) }}"
                                                    method="post" enctype="multipart/form-data" class="tablelist-form"
                                                    autocomplete="off">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="mb-3">
                                                                <label for="basiInput" class="form-label">Tên thương
                                                                    hiệu</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    id="name{{ $item->id }}"
                                                                    value="{{ $item->name }}"
                                                                    onchange="ChangeToSlugEdit({{ $item->id }})">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basiInput" class="form-label">Quốc gia</label>
                                                                <input type="text" name="nation" class="form-control"
                                                                    id="basiInput" value="{{ $item->nation }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basiInput" class="form-label">Slug</label>
                                                                <input type="text" name="slug" class="form-control"
                                                                    id="slug{{ $item->id }}"
                                                                    value="{{ $item->slug }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">Thêm hình
                                                                    ảnh</label>
                                                                <div class="input-group">
                                                                    <button class="btn btn-outline-primary shadow-none"
                                                                        onclick="uploadImage({{ $item->id }})"
                                                                        type="button" id="inputGroupFileAddon03">Thêm
                                                                        ảnh</button>
                                                                    <input type="text" class="form-control"
                                                                        id="ckfinder-product_img{{ $item->id }}"
                                                                        name="image_brand"
                                                                        value="{{ $item->image_brand }}">
                                                                </div>
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
    <script type="text/javascript">
        function ChangeToSlug() {
            var slug;
            //Lấy text từ thẻ input title 
            slug = document.getElementById("name").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }

    function ChangeToSlugEdit(id) {
        var slug;
        //Lấy text từ thẻ input title 
        slug = document.getElementById("name" + id).value;
        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('slug' + id).value = slug;
        }
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
    </script>
    <script>
        function deleteBrand(id) {
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
