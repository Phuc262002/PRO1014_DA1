@extends('layouts.client.master')
@section('title')
{{$title}}
@endsection
@section('content')
<div class="section breadcrumb-area bg-name-bright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrapper">
                    <h2 class="breadcrumb-title">Chi tiết bài viết</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Chi tiết bài viết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Blog Details Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto overflow-hidden">
                <!-- Blog Details Wrapper Start -->
                <div class="blog-details-wrapper">

                    <!-- Blog Details Content Start -->
                    <div class="blog-details-content">

                        <!-- Blog Image Start -->
                        <div class="blog-image">
                            <img src="{{$post->img_post}}" alt="Blog Image" class="fit-image">
                        </div>
                        <!-- Blog Image End -->

                        <!-- Blog details title & Meta Start -->
                        <div class="blog-details-title-meta">
                            <h2 class="title">{{$post->title}}</h2>
                            <ul class="blog-meta">
                                <li><img class="rounded-circle header-profile-user" width="30"
                                    src="{{ $post->user_post->image }}"
                                    alt="{{ $post->user_post->name }}"> <a href="#/">{{$post->user_post->name}}</a> <span>{{$post->created_at->format('d/m/Y')}}</span></li>
                            </ul>
                        </div>
                        <!-- Blog details title & Meta End -->

                        <!-- Content Start -->
                        <p>{!!$post->content!!}</p><!-- Content End -->

                        <!-- Blog Details Tags & Social Shear Start -->
                        <div class="blog-details-tag-social m-b-n20">

                            <!-- Blog Details Tags Start -->
                            <div class="blog-details-tag m-b-20">
                                <ul>
                                    <li><a href="#/">{{$post->category->name}}</a></li>
                                </ul>
                            </div>
                            <!-- Blog Details Tags End -->

                            <!-- Social Shear Start -->
                            <div class="social-share m-b-20">
                                <div class="widget-social">
                                    <span>Share: </span>
                                    <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                        </div>
                        <!-- Blog Details Tags & Social Shear End -->
                    </div>
                    <!-- Blog Details Content End -->

                    <!-- Blog Details Comments area Start -->
                    <div class="blog-details-comment-area m-b-n30">
                        <h2 class="blog-desc-title m-b-30 m-t-40">Comments</h2>
                        <div class="blog-details-comment-wrapper m-b-30">
                            <div class="thumb">
                                <img class="fit-image" src="assets/images/blog/small-size/95x95.jpg" alt="Blog Review">
                            </div>
                            <div class="content">
                                <h4 class="title">Catherin Betty</h4>
                                <ul class="meta">
                                    <li>27 Oct 2021</li>
                                </ul>
                                <p>Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit. Excepteur sint occaecat cupidatat.</p>
                            </div>
                        </div>

                        <div class="blog-details-comment-wrapper m-b-30">
                            <div class="thumb">
                                <img class="fit-image" src="assets/images/blog/small-size/95x95-2.jpg" alt="Blog Review">
                            </div>
                            <div class="content">
                                <h4 class="title">Alex Due</h4>
                                <ul class="meta">
                                    <li>27 Oct 2021</li>
                                </ul>
                                <p>Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit. Excepteur sint occaecat cupidatat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Details Comments area End -->

                    <!-- Comments Post Area Start -->
                    <div class="comment-post-area">
                        <h2 class="blog-desc-title m-b-30 p-t-40">Gửi bình luận</h2>
                        <form action="#">
                            <div class="row">

                                <!-- Name Input Start -->
                                
                                <!-- Email Input End -->

                                <!-- Message Input Start -->
                                <div class="col-12 col-custom">
                                    <div class="input-item m-b-20">
                                        <textarea cols="30" rows="10" name="comment" class="rounded-0 w-100 custom-textarea input-area" placeholder="Nội dung" spellcheck="false" data-gramm="false"></textarea>
                                    </div>
                                </div>
                                <!-- Message Input End -->

                                <!-- Submit Button Start -->
                                <div class="col-12 col-custom m-t-20">
                                    <button type="submit" class="btn btn-primary btn-hover-dark">Bình luận</button>
                                </div>
                                <!-- Submit Button End -->

                            </div>
                        </form>
                    </div>
                    <!-- Comments Post Area End -->

                </div>
                <!-- Blog Details Wrapper End -->
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Section End -->

@endsection