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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">
                                    Quản Lý Sản Phẩm
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
                            <!-- end card header -->

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
                                                    <th scope="col" style="width: 46px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck" />
                                                            <label class="form-check-label" for="cardtableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Ảnh</th>
                                                    <th scope="col">Giới thiệu</th>
                                                    <th scope="col">Tiêu đề</th>
                                                    <th scope="col">Phân loại</th>
                                                    <th scope="col">Trạng thái</th>
                                                    <th scope="col" style="width: 150px">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($banner as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="cardtableCheck01" />
                                                                <label class="form-check-label"
                                                                    for="cardtableCheck01"></label>
                                                            </div>
                                                        </td>
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
                                                            <div class="hstack gap-3 flex-wrap">
                                                                <a href="{{ route('banner.edit', ['banner' => $item->id]) }}"
                                                                    class="link-success fs-15"><i
                                                                        class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:deleteBanner({{ $item->id }});"
                                                                    class="link-danger fs-15"><i
                                                                        class="ri-delete-bin-line"></i></a>
                                                                <form id="delete_form_{{ $item->id }}"
                                                                    action="{{ route('banner.destroy', ['banner' => $item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                                <div>
                                    {{ $banner->links() }}
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
@endsection

@section('js')
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
