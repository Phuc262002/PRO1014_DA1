@extends('layouts.client.master')
<link rel="stylesheet" href="{{asset('assets/css/book-services/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/book-services/style.css')}}">

@section('content')
<!-- Breadcrumb Area Start -->

<div class="section breadcrumb-area bg-name-bright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrapper">
                    <h2 class="breadcrumb-title">Đặt Lịch</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Trang Chủ</a></li>
                        <li>Đặt Lịch</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Main Content -->
<div class="section section-margin">
    <div class="container">

        <div class="row m-b-n50">
            <!-- Section Title Start -->
            <div class="contact-title p-b-15">
                <h2 class="title">Thông Tin</h2>
            </div>
            <!-- Section Title End -->
            <div class="booking-form">
                <form action="{{route ('dich-vu.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Họ và Tên </span>
                                <input name="name" class="form-control" type="text" placeholder="Họ và Tên ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Số điện thoại</span>
                                <input name="number" class="form-control" type="text" placeholder="Số điện thoại của bạn">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Ngày : </span>
                                <input class="form-control" type="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Giờ : </span>
                                <input class="form-control" type="time" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <span class="form-label">Tên Pet </span>
                                <input class="form-control" type="text" placeholder="Tên Pet của bạn ">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <span class="form-label">Dịch vụ</span>
                                <select class="form-control">
                                    @foreach ($name_services as $item)
                                            <option value="{{$item->id}}" {{$item->id == $service_id ? 'selected' : ''}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="form-label">Ghi chú  </span>
                            <textarea cols="30" rows="10" class="form-control textarea-item" name="message" placeholder="Nội dung ...."></textarea>
                            
                        </div>
                    </div>
                   
                    <div class="form-btn">
                        <button class="submit-btn">Đăng ký</button>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</div>

@endsection