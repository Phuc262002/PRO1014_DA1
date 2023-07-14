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
                                <h4 class="card-title mb-0 flex-grow-1">
                                    Quản Lý Dịch vụ
                                </h4>
                                <form class="app-search d-none d-md-block">
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
                                                    <th scope="col">Mô Tả</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Giảm giá</th>
                                                    
                                                    <th scope="col">Chức Năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $item)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="responsivetableCheck01" />
                                                            <label class="form-check-label"
                                                                for="responsivetableCheck01"></label>
                                                        </div>
                                                    </th>
                                                    <td><a href="#" class="fw-medium">#{{$item->id}}</a></td>
                                                    <td>{{$item->name}}</td>
                                                    <td>
                                                        <div class="flex-shrink-0">
                                                            <img src="{{$item->image_service}}" alt=""
                                                                width="100" height="100" />
                                                        </div>
                                                    </td>
                                                    <td>{{$item->description}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{$item->discount_price}}</td>
                                                    <td>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <a href="javascript:void(0);" class="link-primary fs-15"><i
                                                                    class="ri-eye-line"></i></a>
                                                            <a href="{{route('service.edit', ['service' => $item->id])}}" class="link-success fs-15"><i
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
