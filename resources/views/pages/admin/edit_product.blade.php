@extends('layouts.admin.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">CẬP NHẬP SẢN PHẨM</h4>
                            </div><!-- end card header -->
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
                                    <form id="form_edit" action="{{ route('product.update', ['product' => $id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="sku" class="form-label">Mã sản phẩm</label>
                                                <div class="input-group">
                                                    <input type="text" id="sku" name="sku"
                                                        value="{{ $product->sku }}" class="form-control"
                                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="button-addon2" onclick="generateRandomSKU()"><i
                                                            class="ri-refresh-line"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="name" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $product->name }}" onchange="ChangeToSlug()">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug"
                                                    value="{{ $product->slug }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="brand_id" class="form-label">Danh mục thương
                                                    hiệu</label>
                                                <select class="form-select" aria-label=".form-select-sm example"
                                                    name="brand_id">
                                                    @foreach ($brands as $brand)
                                                        <option {{ $brand->id == $product->brand_id ? 'selected' : '' }}
                                                            value="{{ $brand->id }}">
                                                            {{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="status" class="form-label">Trạng thái</label>
                                                <select class="form-select" aria-label=".form-select-sm example"
                                                    name="status">
                                                    <option {{ $product->status == true ? 'selected' : '' }}
                                                        value="1">
                                                        Active</option>
                                                    <option {{ $product->status == false ? 'selected' : '' }}
                                                        value="0">
                                                        Disabled</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="category_id" class="form-label">Danh mục sản
                                                    phẩm</label>
                                                <select class="form-select" aria-label=".form-select-sm example"
                                                    name="category_id">
                                                    @foreach ($categories as $category)
                                                        <option
                                                            {{ $category->id == $product->category_id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="quantity" class="form-label">Số lượng</label>
                                                <input type="number" min="0" class="form-control" id="quantity"
                                                    name="quantity" value="{{ $product->quantity }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="price" class="form-label">Giá bán</label>
                                                <input type="number" class="form-control" id="price" name="price"
                                                    min="0" value="{{ $product->price }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="discount_price" class="form-label">Giá giảm</label>
                                                <input type="number" class="form-control" id="discount_price"
                                                    min="0" name="discount_price"
                                                    value="{{ $product->discount_price }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="discount_end" class="form-label">Ngày kết thúc giảm
                                                        giá</label>
                                                    <input id="discount_end" name="discount_end" type="text"
                                                        class="form-control" data-provider="flatpickr"
                                                        data-date-format="Y.m.d" data-enable-time>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image_main" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="image_main">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img"
                                                        name="image_main" value="{{ $product->image_main }}">
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mt-2">
                                                        <div class="border rounded">
                                                            <div class="d-flex p-2">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <div class="avatar-sm bg-light rounded">
                                                                        <img data-dz-thumbnail
                                                                            class="img-fluid rounded d-block"
                                                                            src="{{ $product->image_main }}"
                                                                            alt="Dropzone-Image" />
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="pt-1">
                                                                        <h5 class="fs-14 mb-1" data-dz-name>
                                                                            {{ $product->image_main }}</h5>
                                                                        <p class="fs-13 text-muted mb-0" data-dz-size>
                                                                        </p>
                                                                        <strong class="error text-danger"
                                                                            data-dz-errormessage></strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image_list" class="form-label">Thêm bộ sưu tập</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="image_list" id="image_main">Thêm ảnh</button>
                                                    <input type="text" class="form-control"
                                                        id="ckfinder-product_img_list" name="image_main_list"
                                                        value="Chưa có ảnh nào được chọn...">
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    @foreach ($product->image_list as $key => $item)
                                                        <li class="mt-2">
                                                            <div class="border rounded">
                                                                <div class="d-flex p-2">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <div class="avatar-sm bg-light rounded">
                                                                            <img data-dz-thumbnail
                                                                                class="img-fluid rounded d-block"
                                                                                src="{{ $item->image_collection }}"
                                                                                alt="Dropzone-Image" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div class="pt-1">
                                                                            <h5 class="fs-14 mb-1" data-dz-name>
                                                                                {{ $item->image_collection }}</h5>
                                                                            <p class="fs-13 text-muted mb-0" data-dz-size>
                                                                            </p>
                                                                            <strong class="error text-danger"
                                                                                data-dz-errormessage></strong>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-3">
                                                                        <button data-dz-remove type="button"
                                                                            onclick="deleteImage({{ $key }})"
                                                                            class="btn btn-sm btn-danger">Xóa</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label for="description_summary" class="form-label">Mô tả ngắn</label>
                                            <textarea class="w-100 form-control" id="description_summary" cols="30" rows="5"
                                                name="description_summary">{{ $product->description_summary }}</textarea>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label for="formFile" class="form-lable">Nội dung</label>
                                            <textarea id="editor" name="description_detail">{{ $product->description_detail }}</textarea>
                                        </div>
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <input type="hidden" id="save_action" name="save_action" value="save_and_back">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button class="btn btn-success shadow-none">Lưu và Quay lại</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a data-value="save_and_edit" href="javascript:save_and_edit();"
                                                        class="dropdown-item">Lưu và Tiếp tục sửa</a></li>
                                                <li><a data-value="save_and_new" href="javascript:save_and_new();"
                                                        class="dropdown-item">Lưu và Thêm mới</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{ route('product.index') }}" class="btn btn-danger shadow-none">Hủy
                                        bỏ</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>

            </div> <!-- container-fluid -->

        </div><!-- End Page-content -->
    </div>
    @foreach ($product->image_list as $key => $item)
        <form action="{{ route('product.destroyImgCollection', ['id' => $id]) }}" method="POST"
            id="form_delete_{{ $key }}">
            @csrf
            @method('DELETE')
            <input type="hidden" name="image_collection" value="{{ $item->image_collection }}">
        </form>

        <script>
            function deleteImage(index) {
                document.getElementById('form_delete_' + index).submit();
            }
        </script>
    @endforeach
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
        function save_and_edit() {
            $('#save_action').val('save_and_edit');
            $('#form_edit').submit();
        }

        function save_and_new() {
            $('#save_action').val('save_and_new');
            $('#form_edit').submit();
        }
    </script>
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

        $(document).ready(function() {
            $("#image_list").click(function() {
                CKFinder.modal({
                    chooseFiles: true,
                    width: 800,
                    height: 600,
                    onInit: function(finder) {
                        finder.on('files:choose', function(evt) {
                            var file = evt.data.files;
                            var output = document.getElementById(
                                'ckfinder-product_img_list');

                            var list_image = file.map(element => {
                                return element.getUrl();
                            });

                            output.value = list_image.join(',');
                        });

                        finder.on('file:choose:resizedImage', function(evt) {
                            var output = document.getElementById(
                                'ckfinder-product_img_list');
                            output.value = evt.data.resizedUrl;
                        });
                    }
                });
            })
        });
    </script>
    <script>
        var datetimeInput = document.getElementById("discount_end");

        // Tạo một chuỗi datetime từ giá trị lấy từ cơ sở dữ liệu
        var datetimeString = "{{ $product->discount_end }}";

        // Chuyển đổi chuỗi datetime thành đối tượng Date
        var datetime = new Date(datetimeString);

        // Đặt giá trị datetime vào trường input
        datetimeInput._flatpickr.setDate(datetime);


        function generateRandomSKU() {
            var charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            var sku = '';

            for (var i = 0; i < 7; i++) {
                var randomIndex = Math.floor(Math.random() * charset.length);
                sku += charset[randomIndex];
            }

            document.getElementById('sku').value = 'SP_' + sku;
        }
    </script>
@endsection
