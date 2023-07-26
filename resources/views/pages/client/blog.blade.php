@extends('layouts.client.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Blog</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Grid Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 m-b-n40">
                @foreach ($posts as $item)
                    <div class="col m-b-40">
                        <!-- Single Blog Start -->
                        <div class="single-blog-wrapper">

                            <!-- Blog Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="{{ route('bai-viet.detail', ['slug' => $item->slug]) }}">
                                    <img class="fit-image" src="{{ $item->img_post }}" alt="Blog Image">
                                </a>
                            </div>
                            <!-- Blog Thumb End -->

                            <!-- Blog Content Start -->

                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><span><img class="rounded-circle header-profile-user" width="30"
                                                    src="{{ $item->user_post->image }}"
                                                    alt="{{ $item->user_post->name }}"></span><a
                                                href="#">{{ $item->user_post->name }}</a></li>
                                        <li><span>{{ $item->created_at->format('d/m/Y') }}</span></li>
                                    </ul>
                                </div>
                                <h2 class="blog-title"><a
                                        href="{{ route('bai-viet.detail', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                </h2>
                                <p>{!! $item->description !!}</p>
                                <a class="more-link" href="{{ route('bai-viet.detail', ['slug' => $item->slug]) }}">Xem
                                    Thêm</a>
                            </div>
                            <!-- Blog Content End -->

                        </div>
                        <!-- Single Blog End -->
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-12 m-t-50">
                    <nav class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Grid Section End -->
@endsection
