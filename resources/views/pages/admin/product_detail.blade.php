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
                                    Sản phẩm chi tiết
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
                                            <th>Số lượng</th>
                                            <td>
                                                {{ $product->quantity }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giá</th>
                                            <td>
                                                {{ number_format($product->price) }} VNĐ
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giá giảm</th>
                                            <td>
                                                @if($product->discount_price > 0)
                                                    {{ number_format($product->discount_price) }} VNĐ
                                                @else
                                                    {{ number_format($product->discount_price) }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ngày kết thúc giảm giá</th>
                                            <td>
                                                {{ $product->discount_end }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Thương hiệu</th>
                                            <td>
                                                {{ $product->brand->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Slug</th>
                                            <td>
                                                {{ $product->slug }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Danh mục</th>
                                            <td>
                                                {{ $product->category->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Lượt đánh giá</th>
                                            <td>
                                                {{ $product->rating_count }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Lượt đánh giá trung bình</th>
                                            <td>
                                                {{ $product->average_rating }}
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
                                        <tr>
                                            <th>Chức năng</th>
                                            <td>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                                        class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                    <a href="javascript:deleteProduct({{ $product->id }});"
                                                        class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                                    <form id="delete_form_{{ $product->id }}"
                                                        action="{{ route('product.destroy', ['product' => $product->id]) }}"
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
            function deleteProduct(id) {
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
