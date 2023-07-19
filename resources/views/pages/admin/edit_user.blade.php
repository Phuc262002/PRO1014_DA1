@extends('layouts.admin.master')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <!-- end page title -->

                <div class="row">


                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Tạo tài khoản</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post"
                                        enctype="multipart/form-data" class="row g-3">
                                        @csrf
                                        @method ( 'put' )
                                        <div class="col-md-6">
                                            <label for="fullnameInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="fullnameInput" name="name"
                                                value="{{ $user->name }}" placeholder="Enter your name">
                                        </div>
                                        <div class="col-6">
                                            <label for="inlineFormInputGroupUsername">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" disabled
                                                    id="inlineFormInputGroupUsername" name="email"
                                                    value="{{ $user->email }}" placeholder="email">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Vai trò</label>
                                            <select id="inputState" class="form-select" data-choices name="is_admin"
                                                data-choices-sorting="true">
                                                @if ($user->is_admin == true)
                                                    <option selected value="1">Admin</option>
                                                    <option value="0">User</option>
                                                @else
                                                    <option value="1">Admin</option>
                                                    <option selected value="0">User</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Xác thực</label>
                                            <select id="inputState" class="form-select" data-choices name="confirm"
                                                data-choices-sorting="true">
                                                @if ($user->confirm == true)
                                                    <option selected value="1">Đã xác thực</option>
                                                    <option value="0">Chưa xác thực</option>
                                                @else
                                                    <option value="1">Đã xác thực</option>
                                                    <option selected value="0">Chưa xác thực</option>
                                                @endif
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Trạng thái</label>
                                            <select id="inputState" class="form-select" data-choices name="status"
                                                data-choices-sorting="true">
                                                @if ($user->status == true)
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
                                                    name="image" value="{{ $user->image }}">
                                            </div>

                                            <ul class="list-unstyled mb-0">
                                                <li class="mt-2">
                                                    <div class="border rounded">
                                                        <div class="d-flex p-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded">
                                                                    <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                                        src="{{ $user->image }}" alt="Dropzone-Image" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="pt-1">
                                                                    <h5 class="fs-14 mb-1  data-dz-name>
                                                                        {{ $user->image }}</h5>
                                                                    <p class="fs-13
                                                                        text-muted mb-0" data-dz-size>
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
                                        <div class="col-lg-3 mt-3">
                                            <input type="hidden" id="save_action" name="save_action" value="save_and_back">
                                            <div class="btn-group" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <button class="btn btn-success shadow-none">Lưu và Quay lại</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a data-value="save_and_edit"
                                                                href="javascript:save_and_edit();"
                                                                class="dropdown-item">Lưu và Tiếp tục sửa</a></li>
                                                        <li><a data-value="save_and_new" href="javascript:save_and_new();"
                                                                class="dropdown-item">Lưu và Thêm mới</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="{{ route('user.index') }}" class="btn btn-danger shadow-none">Hủy
                                                bỏ</a>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
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
        @endsection
