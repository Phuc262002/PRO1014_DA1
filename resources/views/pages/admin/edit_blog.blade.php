@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">CHỈNH SỬA BLOG</h4>
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
                                    <form id="form_edit" action="{{ route('post.update', ['post' => $post->id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tiêu đề</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                value="{{$post->title}}"onchange="ChangeToSlug()">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug" value="{{$post->slug}}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="exampleFormControlTextarea5" class="form-label">Thể loại</label>
                                                <select class="form-select" aria-label=".form-select-sm example"
                                                    name="category_id">
                                                    @foreach ($categories as $category)
                                                        <option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="inputState" class="form-label">Trạng thái</label>
                                                <select id="inputState" class="form-select" data-choices
                                                name="status" data-choices-sorting="true">
                                                
                                                                
                                                @if ($post->status == true)
                                                <option selected value="1">Hoạt động</option>
                                                <option value="0">Bị chặn</option>
                                            @else
                                                <option value="1">Hoạt động</option>
                                                <option selected value="0">Bị chặn</option>
                                            @endif


                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image_main" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="image_main" id="image_main">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img"
                                                        name="img_post" value="{{$post->img_post}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Mô tả ngắn</label>
                                                <textarea class="w-100 form-control" id="description" cols="30" rows="5" name="description">{{$post->description}}</textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Nội dung</label>
                                                <textarea id="editor" name="content">{{$post->content}}</textarea>
                                            </div>
                                            <div class="col-lg-3 mt-3">
                                                <input type="hidden" id="save_action" name="save_action"
                                                    value="save_and_back">
                                                <div class="btn-group" role="group"
                                                    aria-label="Button group with nested dropdown">
                                                    <button class="btn btn-success shadow-none">Lưu và Quay lại</button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button"
                                                            class="btn btn-success dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <li><a data-value="save_and_edit"
                                                                    href="javascript:save_and_edit();"
                                                                    class="dropdown-item">Lưu và Tiếp tục sửa</a></li>
                                                            <li><a data-value="save_and_new"
                                                                    href="javascript:save_and_new();"
                                                                    class="dropdown-item">Lưu và Thêm mới</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="{{ route('post.index') }}" class="btn btn-danger shadow-none">Hủy
                                                    bỏ</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
               
            </div> <!-- container-fluid -->

        </div><!-- End Page-content -->
    </div>
@endsection
@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{route('home')}}/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
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
            slug = document.getElementById("title").value;
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
    <script>
        function save_and_edit() {
            $('#save_action').val('save_and_edit');
            $('form').submit();
        }

        function save_and_new() {
            $('#save_action').val('save_and_new');
            $('form').submit();
        }
    </script>

@endsection
