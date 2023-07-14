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
                                <h4 class="card-title mb-0 flex-grow-1">THÊM SẢN PHẨM MỚI</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="live-preview">
                                    <form action="{{ route('product.update', ['product' => $id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="sku" class="form-label">Mã sản phẩm</label>
                                                <input type="text" class="form-control" id="sku" name="sku"
                                                    value="{{ $product->sku }}">
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
                                                <label for="price" class="form-label">Giá bán</label>
                                                <input type="text" class="form-control" id="price" name="price"
                                                    value="{{ $product->price }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="discount_price" class="form-label">Giá giảm</label>
                                                <input type="text" class="form-control" id="discount_price"
                                                    name="discount_price" value="{{ $product->discount_price }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="discount_end" class="form-label">Ngày kết thúc giảm
                                                        giá</label>
                                                    <input type="date" class="form-control" id="discount_end"
                                                        name="discount_end" name="di"
                                                        value="{{ $product->discount_end }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="quantity" class="form-label">Số lượng</label>
                                                <input type="text" class="form-control" id="quantity" name="quantity"
                                                    value="{{ $product->quantity }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image_main" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="image_main">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img"
                                                        name="image_main" readonly value="{{ $product->image_main }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="description_summary" class="form-label">Mô tả ngắn</label>
                                                <textarea class="w-100 form-control" id="description_summary" cols="30" rows="5"
                                                    name="description_summary">{{ $product->description_summary }}</textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-lable">Nội dung</label>
                                                <textarea id="editor" name="description_detail">{{ $product->description_detail }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mt-3">
                                            <button type="submit" class="btn btn-success shadow-none">Cập
                                                nhật
                                                sản phẩm</button>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>

            </div> <!-- container-fluid -->

        </div><!-- End Page-content -->
    </div>
@endsection
@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: 'assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                }
            })
            .catch(error => {
                console.error(error);
            });
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
    </script>
@endsection
