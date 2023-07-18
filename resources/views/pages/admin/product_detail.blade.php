@extends('layouts.admin.master')
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
                                    Dịch vụ đang xử lí
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
                                            <th class="w-25">Sku</th>
                                            <td>
                                                <a href="#" class="fw-medium">{{ $product->sku }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <td>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ $product->image_main }}" alt="" width="100"
                                                        height="100" />
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giá</th>
                                            <td>
                                                {{ $product->price }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giá giảm</th>
                                            <td>
                                                {{ $product->discount_price }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Số lượng</th>
                                            <td>
                                                {{ $product->quantity }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Mô tả ngắn</th>
                                            <td>
                                                {{ $product->description_summary }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nội dung</th>
                                            <td>
                                                {!! $product->description_detail !!}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Trạng thái</th>
                                            <td>
                                                @if ($product->status == true)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Disabled</span>
                                                @endif
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
