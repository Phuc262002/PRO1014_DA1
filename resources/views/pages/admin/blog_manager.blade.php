@extends('layouts.admin.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->

                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Tất cả bài viết</h4>
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
                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered dt-responsive nowrap table-striped align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 42px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="responsivetableCheck" />
                                                            <label class="form-check-label"
                                                                for="responsivetableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th data-ordering="false">Tiêu đề</th>
                                                    <th data-ordering="false">Hình ảnh</th>
                                                    <th>Mô tả</th>
                                                    <th data-ordering="false">Danh mục</th>
                                                    <th>Người đăng</th>
                                                    <th>Số lượng bình luận</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="responsivetableCheck01" />
                                                                <label class="form-check-label"
                                                                    for="responsivetableCheck01"></label>
                                                            </div>
                                                        </th>
                                                        <td>{{ $item->title }}</td>
                                                        <td>
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $item->img_post }}" alt=""
                                                                    width="100" height="100" />
                                                            </div>
                                                        </td>
                                                        <td>{!! $item->description !!}</td>
                                                        <td>{{ $item->category->name }}</td>
                                                        <td>{{ $item->user_post->name }}</td>
                                                        <td>{{ $item->comment_count }}</td>
                                                        <td>
                                                            <div class="hstack gap-3 flex-wrap">
                                                                <a href="javascript:void(0);" class="link-primary fs-15"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a href="{{ route('post.edit', ['post' => $item->id]) }}"
                                                                    class="link-success fs-15"><i
                                                                        class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:deletePost({{ $item->id }});"
                                                                    class="link-danger fs-15"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                                <form id="delete_form_{{ $item->id }}"
                                                                    action="{{ route('post.destroy', ['post' => $item->id]) }}"
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
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
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
