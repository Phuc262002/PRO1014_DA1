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
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">
                                    Bài viết chi tiết
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

                                    <tbody>
                                        <tr>
                                            <th>Tiêu đề</th>
                                            <td>
                                                {{ $post->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <td>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ $post->image_post }}" alt="" width="100"
                                                        height="100" />
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nội dung</th>
                                            <td>
                                                {{ $post->content }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Danh mục</th>
                                            <td>
                                                {{ $post->category_id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Lượt bình luận</th>
                                            <td>
                                                {{ $post->comment_count }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>slug </th>
                                            <td>
                                                {{ $post->slug }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Chức năng</th>
                                            <td>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <a href="{{ route('post.edit', ['post' => $post->id]) }}"
                                                        class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                    <a href="javascript:deletepost({{ $post->id }});"
                                                        class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                                    <form id="delete_form_{{ $post->id }}"
                                                        action="{{ route('post.destroy', ['post' => $post->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
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
    @section('js')
        <script>
            function deletePost(id) {
                Swal.fire({
                    title: "Bạn có chắc muốn xóa?",
                    text: "Bạn có thể lấy lại sản phẩm này ở thùng rác.",
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
