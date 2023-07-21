@extends('layouts.client.master')
<link rel="stylesheet" href="{{ asset('assets/css/book-services/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/book-services/style.css') }}">

@section('content')
    <!-- Breadcrumb Area Start -->

    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Đặt Lịch</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
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
                <div class="booking-form">
                    <form action="{{ route('dich-vu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        </div>
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Ngày : </span>
                                    <input  name="book_date" class="form-control" type="date" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Giờ : </span>
                                    <input  name="book_time" class="form-control" type="time" >
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Tên Pet </span>
                                    <input name="pet_name" class="form-control" type="text" placeholder="Tên Pet của bạn ">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Dịch vụ</span>
                                    <select  name="service_id" class="form-control">
                                        @foreach ($name_services as $item)
                                        @if(isset($service_id)){
                                             <option value="{{ $item->id }}"
                                                {{ $item->id == $service_id ? 'selected' : '' }}>{{ $item->name }}
                                            </option>   
                                        }@else {
                                            <option value="{{ $item->id }}"
                                                >{{ $item->name }}
                                            </option>   
                                        }
                                        @endif   
                                        @endforeach
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="form-label">Ghi chú </span>
                                <textarea cols="30" rows="10" class="form-control textarea-item" name="description" placeholder="Nội dung ...."></textarea>

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
