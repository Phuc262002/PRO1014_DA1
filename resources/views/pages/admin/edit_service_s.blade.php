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
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <form >
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                                <div class="input-group">
                                                    <button class="btn btn-outline-primary shadow-none" type="button"
                                                        id="inputGroupFileAddon03">Thêm ảnh</button>
                                                    <input type="text" class="form-control" id="ckfinder-product_img" name="product_img" readonly
                                                        value="Chọn ảnh...">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá bán</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="basiInput" class="form-label">Giá giảm</label>
                                                <input type="text" class="form-control" id="basiInput">
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <label for="formFile" class="form-label">Mô tả </label>
                                                <textarea class="w-100 form-control" id="" cols="30" rows="5"></textarea>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" checked>
                                            <label class="btn btn-outline-success shadow-none" for="success-outlined">Cập nhật dịch vụ</label>
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
