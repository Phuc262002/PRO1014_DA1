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
                                <div class="flex-shrink-0"></div>
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
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
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Tên Sản Phẩm</th>
                                                    <th scope="col">Hình Ảnh</th>
                                                    <th scope="col">Thương Hiệu</th>
                                                    <th scope="col">Loại sản phẩm</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Số Lượng</th>
                                                    <th scope="col">Mô tả</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Trạng Thái</th>
                                                    <th scope="col">Chức Năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="responsivetableCheck01" />
                                                                <label class="form-check-label"
                                                                    for="responsivetableCheck01"></label>
                                                            </div>
                                                        </th>
                                                        <td><a href="#" class="fw-medium">{{ $item->sku }}</a></td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $item->image_main }}" alt=""
                                                                    width="100" height="100" />
                                                            </div>
                                                        </td>
                                                        <td>{{ $item->brand->name }}</td>
                                                        <td>{{ $item->category->name }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->description_summary }}</td>
                                                        <td>{{ $item->slug }}</td>
                                                        @if ($item->status == true)
                                                            <td class="text-success">
                                                                <span class="badge bg-success">Active</span>
                                                            </td>
                                                        @else
                                                            <td class="text-success">
                                                                <span class="badge bg-success">Disabled</span>
                                                            </td>
                                                        @endif
                                                        <td>
                                                            <div class="hstack gap-3 flex-wrap">
                                                                <a href="javascript:void(0);" class="link-primary fs-15"><i
                                                                        class="ri-eye-line"></i></a>
                                                                <a href="{{ route('product.edit', ['product' => $item->id]) }}"
                                                                    class="link-success fs-15"><i
                                                                        class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="link-danger fs-15"><i
                                                                        class="ri-delete-bin-line"></i></a>
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
