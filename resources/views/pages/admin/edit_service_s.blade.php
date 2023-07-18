@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">CẬP NHẬT DỊCH VỤ</h4>
                            </div>
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
                                    <form action="{{route ('service.update',['service' => $service->id])}}" method = "POST"
                                        enctype="multipart/form-data">
                                        @csrf 
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tên dịch vụ</label>
                                                <input type="text" name="name" class="form-control" id="basiInput" value="{{$service->name}}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="inputGroupFileAddon03">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img" name="image_service" readonly
                                                        value="{{$service->image_service}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Icon</label>
                                                <input type="text" name="icon" class="form-control" id="basiInput" value="{{$service->icon}}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá dịch vụ</label>
                                                <input type="text" name="price" class="form-control" id="basiInput" value="{{$service->price}}">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá giảm</label>
                                                <input type="text" class="form-control" name="discount_price" id="basiInput"  value="{{$service->discount_price}}">
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Mô tả </label>
                                                <textarea class="w-100 form-control" name="description" id="" cols="30" rows="5">{{$service->description}}</textarea>
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
                                            <a href="{{ route('service.index') }}" class="btn btn-danger shadow-none">Hủy
                                                bỏ</a>
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
                        var output = document.getElementById('ckfinder-product_img');
                        output.value = file.getUrl();
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById('ckfinder-product_img');
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
            })
        });
    </script>
@endsection
