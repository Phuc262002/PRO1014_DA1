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
                                            <h5 class="card-title mb-0">Tất cả bài viết </h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            {{-- <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> --}}
                                            {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> Add Customer</button> --}}
                                            <a href="{{ route('post.create') }}" class="btn btn-success add-btn"
                                                id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Thêm bài
                                                viết</a>

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
                                        <div class="col-xl-8">
                                            <div class="search-box">
                                                <input type="text" class="form-control search bg-light border-light"
                                                    name="search" placeholder="Tìm kiếm tiêu đề"
                                                    value="{{ $search }}">
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
                                                            <option value="ALL"
                                                                {{ $status == 'UNCONFIRMED' ? 'selected' : '' }}>Trạng thái
                                                            </option>
                                                            <option value="ACTIVE"
                                                                {{ $status == 'UNCONFIRMED' ? 'selected' : '' }}>Hoạt động
                                                            </option>
                                                            <option value="INACTIVE"
                                                                {{ $status == 'UNCONFIRMED' ? 'selected' : '' }}>Bị chặn
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-sm-6">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-100"
                                                            onclick="SearchData();"> <i
                                                                class="ri-equalizer-fill me-2 align-bottom"></i>Áp
                                                            dụng</button>
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
                                                    <th data-ordering="false">Tiêu đề</th>
                                                    <th data-ordering="false">Hình ảnh</th>
                                                    <th data-ordering="false">Danh mục</th>
                                                    <th>Người đăng</th>
                                                    <th>Số lượng bình luận</th>
                                                    <th>Trạng thái</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($posts as $item)
                                                    <tr>
                                                        <td class="title"><a href="" onclick="ViewInvoice(this);"
                                                                data-id="{{ $item->title }}"
                                                                class="fw-medium link-primary">{{ $item->title }}</a>

                                                        <td>
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $item->img_post }}" alt=""
                                                                    width="100" height="100" />
                                                            </div>
                                                        </td>
                                                        <td>{{ $item->category->name }}</td>
                                                        <td>{{ $item->user_post->name }}</td>
                                                        <td>{{ $item->comment_count }}</td>

                                                        @if ($item->status == true)
                                                            <td class="text-success">
                                                                <span class="badge bg-success">Hoạt động</span>
                                                            </td>
                                                        @else
                                                            <td class="text-danger">
                                                                <span class="badge bg-danger">Bị chặn</span>
                                                            </td>
                                                        @endif

                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Xem thông tin">
                                                                    <a class="text-success d-inline-block remove-item-btn"
                                                                        href="{{ route('post.show', ['post' => $item->id]) }}">
                                                                        <i class="ri-eye-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Edit">
                                                                    <a href="{{ route('post.edit', ['post' => $item->id]) }}"
                                                                        class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a href="javascript:deletePost({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('post.destroy', ['post' => $item->id]) }}"
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
                                                <h5 class="mt-2">Xin lỗi! Không tìm thấy kết quả</h5>
                                                <p class="text-muted mb-0">Bạn vui lòng ấn áp dụng đề tìm kiếm trên toàn
                                                    hện thống.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            {{ $posts->links() }}
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
                                            <form class="tablelist-form" autocomplete="off">
                                                <div class="modal-body">
                                                    <input type="hidden" id="id-field" />

                                                    <div class="mb-3" id="modal-id" style="display: none;">
                                                        <label for="id-field1" class="form-label">ID</label>
                                                        <input type="text" id="id-field1" class="form-control"
                                                            placeholder="ID" readonly />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Customer
                                                            Name</label>
                                                        <input type="text" id="customername-field"
                                                            class="form-control" placeholder="Enter name" required />
                                                        <div class="invalid-feedback">Please enter a customer name.</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email-field" class="form-label">Email</label>
                                                        <input type="email" id="email-field" class="form-control"
                                                            placeholder="Enter email" required />
                                                        <div class="invalid-feedback">Please enter an email.</div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="phone-field" class="form-label">Phone</label>
                                                        <input type="text" id="phone-field" class="form-control"
                                                            placeholder="Enter phone no." required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-field" class="form-label">Joining Date</label>
                                                        <input type="date" id="date-field" class="form-control"
                                                            data-provider="flatpickr" data-date-format="d M, Y" required
                                                            placeholder="Select date" />
                                                        <div class="invalid-feedback">Please select a date.</div>
                                                    </div>

                                                    <div>
                                                        <label for="status-field" class="form-label">Status</label>
                                                        <select class="form-control" data-choices data-choices-search-false
                                                            name="status-field" id="status-field" required>
                                                            <option value="">Status</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Block">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        <button type="submit" class="btn btn-success"
                                                            id="add-btn">Thêm bài viết</button>
                                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- @foreach ($posts as $item)
                                    <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="{{ route('post.update', ['post' => $item->id]) }}"
                                                    method="post" enctype="multipart/form-data" class="tablelist-form"
                                                    autocomplete="off">
                                                    @csrf
                                                    @method ( 'put' )
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <label for="basiInput" class="form-label">Tiêu đề</label>
                                                            <input type="text" class="form-control" id="title"
                                                                name="title"
                                                                value="{{ $item->title }}"onchange="ChangeToSlug()">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="slug" class="form-label">Slug</label>
                                                            <input type="text" class="form-control" id="slug"
                                                                name="slug" value="{{ $item->slug }}">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="exampleFormControlTextarea5"
                                                                class="form-label">Thể loại</label>
                                                            <select class="form-select"
                                                                aria-label=".form-select-sm example" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    <option
                                                                        {{ $category->id == $post->category_id ? 'selected' : '' }}
                                                                        value="{{ $category->id }}">{{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="image_main" class="form-label">Thêm hình
                                                                ảnh</label>
                                                            <div class="input-group">
                                                                <button class="btn btn-outline-primary shadow-none"
                                                                    type="button" id="image_main" id="image_main">Thêm
                                                                    ảnh</button>
                                                                <input type="text" class="form-control"
                                                                    id="ckfinder-product_img" name="img_post"
                                                                    value="{{ $item->img_post }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="formFile" class="form-label">Mô tả ngắn</label>
                                                            <textarea class="w-100 form-control" id="description" cols="30" rows="5" name="description">{{ $item->description }}</textarea>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="formFile" class="form-label">Nội dung</label>
                                                            <textarea id="editor" name="content">{{ $item->content }}</textarea>
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

            </div>
        </div>
    @endsection
    @section('js')
        <script>
            function deletePost(id) {
                Swal.fire({
                    title: "Bạn có chắc muốn xóa?",
                    text: "Bạn có thể lấy lại bài Blog này ở thùng rác.",
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
                    }
                });
            }
        </script>
        <script>
            function deletePost(id) {
                Swal.fire({
                    title: "Bạn có chắc muốn xóa?",
                    text: "Bạn có thể lấy lại bài Blog này ở thùng rác.",
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
                    }
                });
            }
        </script>
    @endsection
