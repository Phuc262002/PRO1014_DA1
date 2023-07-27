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
                                            <h5 class="card-title mb-0">Quản lý danh mục bài viết</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm mã giảm giá</button>
                                            {{-- <a href="{{ route('category-product.create') }}"
                                                class="btn btn-success add-btn"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm danh mục bài viết</a> --}}
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
                                <form action="{{ route('category-blog.index') }}">
                                    <div class="row g-3">
                                        <div class="col-xxl-10 col-sm-12">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Tìm kiếm"
                                                    name="search" value="{{ $search }}">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                     

                                                <div class="col-xxl-2 col-sm-4">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-100"
                                                            onclick="SearchData();"> <i
                                                                class="ri-equalizer-fill me-2 align-bottom"></i>Áp dụng</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                         
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
                                                    <th scope="col" style="width: 46px">
                                                        <div class="form-check">

                                                            <label class="form-check-label" for="cardtableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Tên danh mục</th>
                                                    <th scope="col">Mô tả</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($categories as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">

                                                            </div>
                                                        </th>
                                                        <td class="id"><a
                                                                href=""
                                                                onclick="ViewInvoice(this);"
                                                                data-id="{{ $item->name }}"
                                                                class="fw-medium link-primary">{{ $item->name }}</a>
                                                        </td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>{{ $item->slug }}</td>
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
                                                                    <a href="javascript:deleteCategoryBlog({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('category-blog.destroy', ['category_blog' => $item->id]) }}"
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
                                            {{ $categories->links() }}
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
                                            <form action="{{ route('category-blog.store') }}" method="post"
                                                enctype="multipart/form-data" class="tablelist-form" autocomplete="off">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Tên danh mục</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" onchange="ChangeToSlug()">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="slug" class="form-label">Slug</label>
                                                        <input type="text" class="form-control" id="slug"
                                                            name="slug" slug>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="type_category" class="form-label">Thể loại</label>
                                                        <input type="text" class="form-control" id="type_category"
                                                            name="type_category" value="POST" readonly>
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="description" class="form-label">Mô tả</label>
                                                        <textarea class="w-100 form-control" id="description" cols="30" rows="5" name="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        <button type="submit" class="btn btn-success"
                                                            id="add-btn">Thêm danh mục bài viết</button>
                                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($categories as $item)
                                    <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form
                                                    action="{{ route('category-blog.update', ['category_blog' => $item->id]) }}"
                                                    method="post" enctype="multipart/form-data" class="tablelist-form"
                                                    autocomplete="off">
                                                    @csrf
                                                    @method ( 'put' )
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Tên tiêu đề
                                                                    Blog</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="{{ $item->name }}"
                                                                    onchange="ChangeToSlug()">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="slug" class="form-label">Slug</label>
                                                                <input type="text" class="form-control" id="slug"
                                                                    name="slug" value="{{ $item->slug }}"slug>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="type_category" class="form-label">Thể
                                                                    loại</label>
                                                                <input type="text" class="form-control"
                                                                    id="type_category" name="type_category"
                                                                    value="{{ $item->type_category }}" readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="description" class="form-label">Mô tả</label>
                                                                <textarea class="w-100 form-control" id="description" cols="30" rows="5" name="description">{{ $item->description }}</textarea>
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
    </script>
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
        function deleteCategoryBlog(id) {
            Swal.fire({
                title: "Bạn có chắc muốn xóa?",
                text: "Bạn có thể lấy lại danh mục Blog này ở thùng rác.",
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

                // t.value &&
                //     Swal.fire({
                //         title: "Đã xóa!",
                //         text: "Sản phẩm đã được xóa.",
                //         icon: "success",
                //         confirmButtonClass: "btn btn-primary w-xs mt-2",
                //         buttonsStyling: !1,
                //     });


            });
        }
    </script>
@endsection
