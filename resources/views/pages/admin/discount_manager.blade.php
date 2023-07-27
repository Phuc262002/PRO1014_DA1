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
                                            <h5 class="card-title mb-0"> Tất cả mã giảm giá</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions"
                                                onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                id="create-btn" data-bs-target="#showModal"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm mã giảm giá</button> --}}
                                            <a href="{{ route('coupon.create') }}" class="btn btn-success add-btn"><i
                                                    class="ri-add-line align-bottom me-1"></i>Thêm mã giảm giá</a>
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
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-8">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Tìm kiếm" name="search">
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
                                                            data-choices-search-false name="status"
                                                            id="idStatus">
                                                            <option value="ALL" selected>Tất cả</option>
                                                            <option value="VALIDATE">Còn hạn sử dụng</option>
                                                            <option value="INVALIDATE">Hết hạn sử dụng</option>
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
                                                    <th scope="col" style="width: 46px">
                                                        <div class="form-check">

                                                            <label class="form-check-label" for="cardtableCheck"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">Mã giảm giá</th>
                                                    <th scope="col">Tên phiếu giảm giá</th>
                                                    <th scope="col">Giảm giá</th>
                                                    <th scope="col">Ngày bắt đầu giảm giá</th>
                                                    <th scope="col">Ngày kết thúc giảm giá</th>
                                                    <th scope="col" style="width: 150px">
                                                        Chức năng
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($counpon as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">

                                                            </div>
                                                        </th>
                                                        <td class="id"><a href="javascript:void(0);"
                                                                onclick="ViewInvoice(this);" data-id="{{ $item->coupon_hash_id }}"
                                                                class="fw-medium link-primary">{{ $item->coupon_hash_id }}</a>
                                                        </td>
                                                        {{-- <td>{{ $item->coupon_hash_id }}</a></td> --}}
                                                        <td>{{ $item->coupon_name }}</td>
                                                        <td>{{ number_format($item->discount) }} VNĐ</td>
                                                        <td>{{ $item->start_at }}</td>
                                                        <td>{{ $item->end_at }}</td>

                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Edit">
                                                                    {{-- <a href="#showModal{{ $item->id }}"
                                                                        data-bs-toggle="modal"
                                                                        class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a> --}}
                                                                    <a href="{{ route('coupon.edit', ['coupon' => $item->id]) }}"
                                                                        class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a href="javascript:deleteCoupon({{ $item->id }});"
                                                                        class="link-danger fs-15"><i
                                                                            class="ri-delete-bin-line"></i></a>
                                                                    <form id="delete_form_{{ $item->id }}"
                                                                        action="{{ route('coupon.destroy', ['coupon' => $item->id]) }}"
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
                                            {{ $counpon->links() }}
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
                                            <form action="{{ route('coupon.store') }}" method="post"
                                                enctype="multipart/form-data" class="tablelist-form" autocomplete="off">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="sku" class="form-label">Mã giảm giá</label>
                                                        <div class="input-group">
                                                            <input type="text" id="coupon_hash_id"
                                                                name="coupon_hash_id" class="form-control"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-primary shadow-none"
                                                                type="button" id="button-addon2"
                                                                onclick="generateRandomCoupon()"><i
                                                                    class="ri-refresh-line"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email-field" class="form-label">Tên phiếu giảm
                                                            giá</label>
                                                        <input type="text" id="email-field" class="form-control"
                                                            name="coupon_name" placeholder="Nhập tên phiếu giảm giá"
                                                            required />

                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="phone-field" class="form-label">Giảm giá</label>
                                                        <input type="number" id="phone-field" class="form-control"
                                                            name="discount" placeholder="Nhập giảm giá" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date-field" class="form-label">Ngày kết thúc giảm
                                                            giá</label>
                                                        <input type="date" id="date-field" class="form-control"
                                                            name="start_at" data-provider="flatpickr"
                                                            data-date-format="d M, Y" required
                                                            placeholder="Nhập kết thúc giảm giá" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="date-field" class="form-label">Ngày bắt đầu giảm
                                                            giá</label>
                                                        <input type="text" id="date-field" class="form-control"
                                                            name="end_at" data-provider="flatpickr"
                                                            data-date-format="d m ,Y" required data-enable-time
                                                            placeholder="Nhập ngày giảm giá" />
                                                        <input id="end_at" name="end_at" type="text"
                                                            class="form-control" data-provider="flatpickr"
                                                            data-date-format="Y.m.d" data-enable-time>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        <button type="submit" class="btn btn-success"
                                                            id="add-btn">Thêm mã giảm giá</button>
                                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($counpon as $item)
                                    <div class="modal fade" id="showModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form action="{{ route('coupon.update', ['coupon' => $item->id]) }}"
                                                    method="post" enctype="multipart/form-data" class="tablelist-form"
                                                    autocomplete="off">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="mb-3">
                                                                <label for="sku" class="form-label">Mã giảm
                                                                    giá</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="coupon_hash_id"
                                                                        name="coupon_hash_id"
                                                                        value="{{ $item->coupon_hash_id }}"
                                                                        class="form-control"
                                                                        aria-label="Recipient's username"
                                                                        aria-describedby="button-addon2">
                                                                    <button class="btn btn-outline-primary shadow-none"
                                                                        type="button" id="button-addon2"
                                                                        onclick="generateRandomCoupon()"><i
                                                                            class="ri-refresh-line"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="basiInput" class="form-label">Tên phiếu giảm
                                                                    giá</label>
                                                                <input type="text" name="coupon_name"
                                                                    class="form-control" value="{{ $item->coupon_name }}"
                                                                    id="basiInput">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="discount" class="form-label">Giảm giá</label>
                                                                <input type="number" name="discount"
                                                                    class="form-control" value="{{ $item->discount }}"
                                                                    id="discount">
                                                            </div>
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label for="start_at" class="form-label">Ngày bắt đầu
                                                                        giảm
                                                                        giá</label>
                                                                    <input id="start_at" name="start_at" type="text"
                                                                        class="form-control" data-provider="flatpickr"
                                                                        value="{{ $item->start_at }}"
                                                                        data-date-format="Y.m.d" data-enable-time>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label for="end_at" class="form-label">Ngày kết thúc
                                                                        giảm
                                                                        giá</label>
                                                                    <input id="end_at" name="end_at" type="text"
                                                                        class="form-control" data-provider="flatpickr"
                                                                        value="{{ $item->end_at }}"
                                                                        data-date-format="Y.m.d" data-enable-time>
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
        function deleteCoupon(id) {
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
    <script>
        function generateRandomCoupon() {
            var charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            var coupon = '';

            for (var i = 0; i < 7; i++) {
                var randomIndex = Math.floor(Math.random() * charset.length);
                coupon += charset[randomIndex];
            }

            document.getElementById('coupon_hash_id').value = coupon;
        }
    </script>
@endsection
