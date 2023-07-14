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
                                <div class="live-preview">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="name" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control" id="name" value="{{ $product->name }}"
                                                    onchange="ChangeToSlug()">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="text" class="form-control" id="slug" value="{{ $product->slug }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="exampleFormControlTextarea5" class="form-label">Danh mục thương
                                                    hiệu</label>
                                                <select class="form-select" aria-label=".form-select-sm example">
                                                    @foreach ($brands as $brand)
                                                        <option {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                                            {{ $brand->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="exampleFormControlTextarea5" class="form-label">Danh mục sản
                                                    phẩm</label>
                                                <select class="form-select" aria-label=".form-select-sm example">
                                                    @foreach ($categories as $category)
                                                        <option
                                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá bán</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    value="{{ $product->price }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá giảm</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    value="{{ $product->discount_price }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Số lượng</label>
                                                <input type="text" class="form-control" id="basiInput"
                                                    value="{{ $product->quantity }}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="inputGroupFileAddon03">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img"
                                                        name="product_img" readonly value="{{ $product->image_main }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Mô tả ngắn</label>
                                                <textarea class="w-100 form-control" id="" cols="30" rows="5">  {{ $product->description_summary }}</textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-lable">Nội dung</label>
                                                <div id="editor">{{ $product->description_detail }}</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="col-lg-6">
                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" checked>
                    <label class="btn btn-outline-success shadow-none" for="success-outlined">Thêm sản phẩm</label>
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
            $("#inputGroupFileAddon03").click(function() {
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