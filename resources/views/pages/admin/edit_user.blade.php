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
                                    <form action="javascript:void(0);" class="row g-3">
                                        <div class="col-md-12">
                                            <label for="fullnameInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="fullnameInput"
                                                placeholder="Enter your name">
                                        </div>
                                        <div class="col-6">
                                            <label for="inlineFormInputGroupUsername">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                                    placeholder="email">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4"
                                                placeholder="Password">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Vai trò</label>
                                            <select id="inputState" class="form-select" data-choices
                                                data-choices-sorting="true">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="formFile" class="form-label">Thêm hình ảnh</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile03"
                                                    aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-none code-view">
                                    <pre class="language-markup" style="height: 375px;">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
@endsection
