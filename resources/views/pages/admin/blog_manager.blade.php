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
                            <div class="card-header">
                                <h5 class="card-title mb-0">Tất cả bài viết</h5>
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
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                        value="option" />
                                                </div>
                                            </th>
                                            <th data-ordering="false">Tiêu đề</th>
                                            <th data-ordering="false">Hình ảnh</th>
                                            <th>Slug</th>
                                            <th>Mô tả</th>
                                            <th>Nội dung</th>
                                            <th data-ordering="false">Danh mục</th>                                           
                                            <th>Người đăng</th>
                                            <th>Số lượng bình luận</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $item)
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                        value="option1" />
                                                </div>
                                            </th>
                                            <td>{{$item->title}}</td>
                                            <td>
                                                <div class="flex-shrink-0">
                                                    <img src="{{$item->img_post}}" alt=""
                                                        width="100" height="100" />
                                                </div>
                                            </td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->content}}</td>
                                            <td>{{$item->category_id}}</td>
                                            <td>{{$item->user_post_id}}</td>
                                            <td>{{$item->comment_count}}</td>
                                            <td>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <a href="javascript:void(0);" class="link-primary fs-15"><i
                                                            class="ri-eye-line"></i></a>
                                                    <a href="{{route('post.edit', ['post' => $item->id])}}" class="link-success fs-15"><i
                                                            class="ri-edit-2-line"></i></a>
                                                    <a href="javascript:void(0);" class="link-danger fs-15"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
