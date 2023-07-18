@extends('layouts.client.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <!-- Hero/Intro Slider Start -->

    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slider as $item)
                    <div class="hero-slide-item swiper-slide">
                        <div class="hero-slide-bg">
                            <img src="{{ $item->img_banner }}" alt="Slider Image" />
                        </div>
                        <div class="container">
                            <div class="hero-slide-content text-start">
                                <h5 class="sub-title">{{ $item->title }}</h5>
                                {{-- <h2 class="title m-0">Vitamins For all Pets</h2> --}}
                                <p class="ms-0">{{ $item->introduction }}</p>
                                <a href="{{ route('shop') }}" class="btn btn-dark btn-hover-primary">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slider1-2.png" alt="Slider Image" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            <a href="shop.html" class="btn btn-dark btn-hover-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div> --}}

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-lg-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i
                        class="icon-arrow-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i
                        class="icon-arrow-right"></i></div>
                <!-- Swiper Navigation End -->
            </div>
        </div>
        <!-- Hero/Intro Slider End -->

        <div class="section section-padding">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 m-b-n30">

                    <div class="col m-b-30" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Single CTA Wrapper Start -->
                        <div class="single-cta-wrapper">

                            <!-- CTA Icon Start -->
                            <div class="cta-icon">
                                <i class="ti-truck"></i>
                            </div>
                            <!-- CTA Icon End -->

                            <!-- CTA Content Start -->
                            <div class="cta-content">
                                <h4 class="title">Miễn phí giao hàng</h4>
                                <p>Miễn phí giao hàng khu vực nội thành cho các đơn hàng trên 500K</p>
                            </div>
                            <!-- CTA Content End -->

                        </div>
                        <!-- Single CTA Wrapper End -->
                    </div>

                    <div class="col m-b-30" data-aos="fade-up" data-aos-duration="1100">
                        <!-- Single CTA Wrapper Start -->
                        <div class="single-cta-wrapper">

                            <!-- CTA Icon Start -->
                            <div class="cta-icon">
                                <i class="ti-headphone-alt"></i>
                            </div>
                            <!-- CTA Icon End -->

                            <!-- CTA Content Start -->
                            <div class="cta-content">
                                <h4 class="title">Hỗ trợ trực tuyến</h4>
                                <p>Đường dây hỗ trợ hệ thống cửa hàng Pets Care trực tuyến 24/7</p>
                            </div>
                            <!-- CTA Content End -->

                        </div>
                        <!-- Single CTA Wrapper End -->
                    </div>

                    <div class="col m-b-30" data-aos="fade-up" data-aos-duration="1200">
                        <!-- Single CTA Wrapper Start -->
                        <div class="single-cta-wrapper">

                            <!-- CTA Icon Start -->
                            <div class="cta-icon">
                                <i class="ti-bar-chart"></i>
                            </div>
                            <!-- CTA Icon End -->

                            <!-- CTA Content Start -->
                            <div class="cta-content">
                                <h4 class="title">Chính sách hoàn tiền</h4>
                                <p>Hoàn tiền cho các sản phẩm không đúng tiêu chuẩn, chính sách của cửa hàng</p>
                            </div>
                            <!-- CTA Content End -->

                        </div>
                        <!-- Single CTA Wrapper End -->
                    </div>

                </div>
            </div>
        </div>

        <!-- Product Section Start -->
        <div class="section position-relative">
            <div class="container">

                <!-- Section Title & Tab Start -->
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Tab Start -->
                    <div class="col-12">
                        <ul class="product-tab-nav nav justify-content-center m-b-n15 p-b-40 title-border-bottom">
                            <li class="nav-item m-b-15"><a class="nav-link active" data-bs-toggle="tab"
                                    href="#tab-product-all">Sản phẩm mới</a></li>
                            <li class="nav-item m-b-15"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-product-featured">Sản phẩm giảm giá</a></li>
                        </ul>
                    </div>
                    <!-- Tab End -->
                </div>
                <!-- Section Title & Tab End -->

                <!-- Products Tab Start -->
                <div class="row" data-aos="fade-up" data-aos-duration="1100">
                    <div class="col-12">
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab-product-all">
                                <div class="row m-b-n40">

                                    <!-- Product Start -->
                                    @foreach ($topnew as $item)
                                        <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">

                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="fit-image" src="{{ $item->image_main }}"
                                                            alt="Product" />
                                                    </a>

                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view{{ $item->id }}"
                                                            title="Quickview"><i class="fa-regular fa-eye"></i></a>
                                                        <a href="javascript:addCart({{ $item->id }})"
                                                            class="action cart" title="Cart"><i
                                                                class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->


                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a href="single-product.html">{{ $item->name }}</a>
                                                    </h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">{{ number_format($item->price) }}</span>

                                                    </span>
                                                </div>

                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Product End -->



                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-product-featured">
                                <div class="row m-b-n40">

                                    <!-- Product Start -->
                                    @foreach ($topsale as $item)
                                        <div class="col-12 col-sm-6 col-lg-3 product-wrapper m-b-40">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img class="fit-image" src="{{ $item->image_main }}"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="sale">Giảm giá</span>
                                                    </span>
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view{{ $item->id }}"><i
                                                                class="fa-regular fa-eye"></i></a>
                                                        <a href="javascript:addCart({{ $item->id }})"
                                                            class="action cart" title="Cart"><i
                                                                class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a
                                                            href="single-product.html">{{ $item->name }}</a></h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span
                                                            class="new">{{ number_format($item->discount_price) }}</span>
                                                        <span class="old">{{ number_format($item->price) }}</span>
                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Product End -->



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Products Tab End -->
            </div>
        </div>
        <!-- Product Section End -->

        <!-- Banner Section Start -->
        <div class="section section-margin">

            <div class="container">
                <!-- Banners Start -->
                <div class="row m-b-n30">

                    <!-- Banner Start -->
                    @foreach ($banner_sale as $item)
                        <div class="col-md-6 col-12 m-b-30" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ route('shop') }}" class="banner">
                                <img class="fit-image" src="{{ $item->img_banner }}" alt="Banner Image" />
                            </a>
                        </div>
                    @endforeach
                    <!-- Banner End -->


                </div>
                <!-- Banners End -->
            </div>

        </div>
        <!-- Banner Section End -->

        <!-- Product Deal Section Start -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Section Title Start -->
                        <div class="section-title text-center">
                            <h2 class="title" data-aos="fade-up" data-aos-duration="1000">Giảm giá trong tuần</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Latest Blog Carousel Start -->
                        <div class="product-deal-carousel arrow-outside-container">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">

                                    @foreach ($topsale as $item)
                                        <div class="swiper-slide">
                                            <!-- Single Product Deal Start -->

                                            <div class="single-deal-product row m-b-n30">
                                                <!-- Deal Thumb Start -->
                                                <div class="deal-thumb col-md-6 m-b-30" data-aos="fade-up"
                                                    data-aos-duration="1200">
                                                    <a href="single-product.html">
                                                        <img class="fit-image" src="{{ $item->image_main }}"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <!-- Deal Thumb End -->
                                                <!-- Deal Content Start -->

                                                <div class="product-deal-content col-md-6 m-b-30" data-aos="fade-up"
                                                    data-aos-duration="1400">
                                                    <h5 class="title m-b-15"><a
                                                            href="single-product.html">{{ $item->name }}</a>
                                                    </h5>
                                                    <span class="rating m-b-15">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">{{ number_format($item->price) }}</span>
                                                        <span class="old">{{ number_format($item->price) }}</span>
                                                    </span>
                                                    <p>{{ $item->description_summary }}</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper"
                                                            data-countdown="{{ $item->discount_end }}"></div>
                                                    </div>
                                                    <a href="{{ route('cart') }}"
                                                        class="btn btn-primary btn-hover-dark">Mua ngay</a>
                                                </div>

                                                <!-- Deal Content End -->
                                            </div>
                                            <!-- Single Product Deal End -->
                                        </div>
                                    @endforeach
                                </div>


                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-deal-button-next swiper-button-next swiper-nav-button"><i
                                        class="ti-angle-right"></i></div>
                                <div class="swiper-deal-button-prev swiper-button-prev swiper-nav-button"><i
                                        class="ti-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                        <!-- Latest Blog Carousel End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Product Deal Section End -->

        <!-- Testimonial Section Start -->
        <div class="section bg-name-bright section-padding section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Testimonial Carousel Start -->
                        <div class="testimonial-carousel">

                            <!-- Testimonial Gallery Top Start -->
                            <div class="swiper-container testimonial-gallery-top" data-aos="fade-up"
                                data-aos-duration="1000">
                                <div class="swiper-wrapper">

                                    <!-- Single Swiper Slide Start -->
                                    <div class="swiper-slide">

                                        <!-- Testimonial Content Start -->
                                        <div class="testimonial-content text-center">
                                            <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor
                                                incididunt
                                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercita
                                                ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </div>
                                        <!-- Testimonial Content End -->

                                    </div>
                                    <!-- Single Swiper Slide End -->

                                    <!-- Single Swiper Slide Start -->
                                    <div class="swiper-slide">

                                        <!-- Testimonial Content Start -->
                                        <div class="testimonial-content text-center">
                                            <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc
                                                scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed
                                                venenatis
                                                orci augue nec sapien. Cum sociis natoque</p>
                                        </div>
                                        <!-- Testimonial Content End -->

                                    </div>
                                    <!-- Single Swiper Slide End -->
                                </div>

                            </div>
                            <!-- Testimonial Gallery Top End -->

                            <!-- Testimonial Gallery Thumb Start -->
                            <div class="swiper-container testimonial-gallery-thumbs" data-aos="fade-up"
                                data-aos-duration="1500">
                                <div class="swiper-wrapper">

                                    <!-- Single Swiper Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Thumb Start -->
                                        <div class="testimonial-thumb text-center">
                                            <img src="assets/images/testimonial/1.png" alt="Testimonial Image">
                                            <h3 class="thumb-title">Jonathon Jhon</h3>
                                            <h6 class="thumb-subtitle">Customer</h6>
                                        </div>
                                        <!-- Testimonial Thumb End -->
                                    </div>
                                    <!-- Single Swiper Slide End -->

                                    <!-- Single Swiper Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Thumb Start -->
                                        <div class="testimonial-thumb text-center">
                                            <img src="assets/images/testimonial/2.png" alt="Testimonial Image">
                                            <h3 class="thumb-title">Cristal Jerry</h3>
                                            <h6 class="thumb-subtitle">Customer</h6>
                                        </div>
                                        <!-- Testimonial Thumb End -->
                                    </div>
                                    <!-- Single Swiper Slide End -->

                                </div>

                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- Testimonial Gallery Thumb End -->

                        </div>
                        <!-- Testimonial Carousel End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- Blog Section Start -->
        <div class="section section-margin-bottom">
            <div class="container">

                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Bài viết của chúng tôi</h2>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 m-b-n40">

                    <div class="col m-b-40" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Single Blog Start -->
                        <div class="single-blog-wrapper">

                            <!-- Blog Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="blog-details.html">
                                    <img class="fit-image" src="assets/images/blog/medium-size/1.jpg" alt="Blog Image">
                                </a>
                            </div>
                            <!-- Blog Thumb End -->

                            <!-- Blog Content Start -->
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><span>By</span><a href="#/">Admin</a></li>
                                        <li><span>27, Jan, 2021</span></li>
                                    </ul>
                                </div>
                                <h2 class="blog-title"><a href="blog-details.html">How to take care of your fish</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut...</p>
                                <a class="more-link" href="blog-details.html">Read More</a>
                            </div>
                            <!-- Blog Content End -->

                        </div>
                        <!-- Single Blog End -->
                    </div>

                    <div class="col m-b-40" data-aos="fade-up" data-aos-duration="1300">
                        <!-- Single Blog Start -->
                        <div class="single-blog-wrapper">

                            <!-- Blog Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="blog-details.html">
                                    <img class="fit-image" src="assets/images/blog/medium-size/2.jpg" alt="Blog Image">
                                </a>
                            </div>
                            <!-- Blog Thumb End -->

                            <!-- Blog Content Start -->
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><span>By</span><a href="#/">Admin</a></li>
                                        <li><span>12, Feb, 2021</span></li>
                                    </ul>
                                </div>
                                <h2 class="blog-title"><a href="blog-details.html">Find the male and female fish</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut...</p>
                                <a class="more-link" href="blog-details.html">Read More</a>
                            </div>
                            <!-- Blog Content End -->

                        </div>
                        <!-- Single Blog End -->
                    </div>

                    <div class="col m-b-40" data-aos="fade-up" data-aos-duration="1600">
                        <!-- Single Blog Start -->
                        <div class="single-blog-wrapper">

                            <!-- Blog Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="blog-details.html">
                                    <img class="fit-image" src="assets/images/blog/medium-size/3.jpg" alt="Blog Image">
                                </a>
                            </div>
                            <!-- Blog Thumb End -->

                            <!-- Blog Content Start -->
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><span>By</span><a href="#/">Admin</a></li>
                                        <li><span>20, March, 2021</span></li>
                                    </ul>
                                </div>
                                <h2 class="blog-title"><a href="blog-details.html">Tips for taking care of dogs</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut...</p>
                                <a class="more-link" href="blog-details.html">Read More</a>
                            </div>
                            <!-- Blog Content End -->

                        </div>
                        <!-- Single Blog End -->
                    </div>

                </div>

            </div>
        </div>
        <!-- Blog Section End -->
    @endsection

    <!-- Modal Start  -->
    @foreach ($topsale as $item)
        <div class="modalquickview modal fade" id="quick-view{{ $item->id }}" tabindex="-1"
            aria-labelledby="quick-view" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="btn close" data-bs-dismiss="modal">×</button>
                    <div class="row">
                        <div class="col-md-6 col-12">

                            <!-- Product Details Image Start -->
                            <div class="modal-product-carousel">

                                <!-- Single Product Image Start -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <a class="swiper-slide" href="#">
                                            <img class="w-100" src="{{ $item->image_main }}" alt="Product">
                                        </a>
                                        @foreach ($item->image_list as $img)
                                            <a class="swiper-slide" href="#">
                                                <img class="w-100" src="{{ $img->image_collection }}"
                                                    alt="Product">
                                            </a>
                                        @endforeach
                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <!-- <div class="swiper-pagination d-md-none"></div> -->
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-product-button-next swiper-button-next"><i
                                            class="ti-arrow-right"></i>
                                    </div>
                                    <div class="swiper-product-button-prev swiper-button-prev"><i
                                            class="ti-arrow-left"></i>
                                    </div>
                                    <!-- Next Previous Button End -->
                                </div>
                                <!-- Single Product Image End -->

                            </div>
                            <!-- Product Details Image End -->

                        </div>
                        <div class="col-md-6 col-12 overflow-hidden position-relative">

                            <!-- Product Summery Start -->
                            <div class="product-summery position-relative">

                                <!-- Product Head Start -->

                                <div class="product-head m-b-15">
                                    <h2 class="product-title">{{ $item->name }}</h2>
                                </div>
                                <!-- Product Head End -->

                                <!-- Rating Start -->
                                <span class="rating justify-content-start m-b-10">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <!-- Rating End -->

                                <!-- Price Box Start -->
                                <div class="price-box m-b-10">
                                    <span class="regular-price">{{ number_format($item->price) }}</span>
                                    <span
                                        class="old-price"><del>{{ number_format($item->discount_price) }}</del></span>
                                </div>
                                <!-- Price Box End -->

                                <!-- SKU Start -->
                                <div class="sku m-b-15">
                                    <span class="inventroy-title"> <strong>Mã sản phẩm:</strong></span>
                                    <span class="inventory-varient">{{ $item->sku }}</span>
                                </div>
                                <!-- SKU End -->

                                <!-- Description Start -->
                                <p class="desc-content m-b-25">T{{ $item->description_summary }}</p>
                                <!-- Description End -->

                                <!-- Product Inventory Start -->
                                <div class="product-inventroy m-b-15">
                                    <span class="inventroy-title"> <strong>Còn lại:</strong></span>
                                    <span class="inventory-varient">{{ $item->quantity }}</span>
                                </div>
                                <!-- Product Inventory End -->

                                <!-- Quantity Start -->
                                <div class="quantity d-flex align-items-center justify-content-start m-b-25">
                                    <span class="m-r-10"><strong>Số lượng: </strong></span>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"></div>
                                        <div class="inc qtybutton"></div>
                                    </div>
                                </div>
                                <!-- Quantity End -->

                                <!-- Cart Button Start -->
                                <div class="cart-btn action-btn m-b-30">
                                    <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                        <div class="add-to_cart">
                                            <a class="btn btn-primary btn-hover-dark rounded-0"
                                                href="javascript:addCartQuality({{ $item->id }})">Thêm vào giỏ hàng</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- Cart Button End -->

                            </div>
                            <!-- Product Summery End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal End  -->

    <!-- Modal Start  -->
    @foreach ($topnew as $item)
        <div class="modalquickview modal fade" id="quick-view{{ $item->id }}" tabindex="-1"
            aria-labelledby="quick-view" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="btn close" data-bs-dismiss="modal">×</button>
                    <div class="row">
                        <div class="col-md-6 col-12">

                            <!-- Product Details Image Start -->
                            <div class="modal-product-carousel">

                                <!-- Single Product Image Start -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <a class="swiper-slide" href="#">
                                            <img class="w-100" src="{{ $item->image_main }}" alt alt="Product">
                                        </a>
                                        @foreach ($item->image_list as $img)
                                            <a class="swiper-slide" href="#">
                                                <img class="w-100" src="{{ $img->image_collection }}"
                                                    alt="Product">
                                            </a>
                                        @endforeach
                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <!-- <div class="swiper-pagination d-md-none"></div> -->
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-product-button-next swiper-button-next"><i
                                            class="ti-arrow-right"></i>
                                    </div>
                                    <div class="swiper-product-button-prev swiper-button-prev"><i
                                            class="ti-arrow-left"></i>
                                    </div>
                                    <!-- Next Previous Button End -->
                                </div>
                                <!-- Single Product Image End -->

                            </div>
                            <!-- Product Details Image End -->

                        </div>
                        <div class="col-md-6 col-12 overflow-hidden position-relative">

                            <!-- Product Summery Start -->
                            <div class="product-summery position-relative">

                                <!-- Product Head Start -->

                                <div class="product-head m-b-15">
                                    <h2 class="product-title">{{ $item->name }}</h2>
                                </div>
                                <!-- Product Head End -->

                                <!-- Rating Start -->
                                <span class="rating justify-content-start m-b-10">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <!-- Rating End -->

                                <!-- Price Box Start -->
                                <div class="price-box m-b-10">
                                    <span class="regular-price">{{ number_format($item->price) }}</span>
                                    {{-- <span class="old-price"><del>{{$item->discount_price}}</del></span> --}}
                                </div>
                                <!-- Price Box End -->

                                <!-- SKU Start -->
                                <div class="sku m-b-15">
                                    <span class="inventroy-title"> <strong>Mã sản phẩm:</strong></span>
                                    <span class="inventory-varient">{{ $item->sku }}</span>
                                </div>
                                <!-- SKU End -->

                                <!-- Description Start -->
                                <p class="desc-content m-b-25">{{ $item->description_summary }}</p>
                                <!-- Description End -->

                                <!-- Product Inventory Start -->
                                <div class="product-inventroy m-b-15">
                                    <span class="inventroy-title"> <strong>Còn lại:</strong></span>
                                    <span class="inventory-varient">{{ $item->quantity }}</span>
                                </div>
                                <!-- Product Inventory End -->

                                <!-- Quantity Start -->
                                <div class="quantity d-flex align-items-center justify-content-start m-b-25">
                                    <span class="m-r-10"><strong>Số lượng: </strong></span>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" id="quantyCart_{{ $item->id }}" min="1" value="1" type="bumber">
                                        <div class="dec qtybutton"></div>
                                        <div class="inc qtybutton"></div>
                                    </div>
                                </div>
                                <!-- Quantity End -->

                                <!-- Cart Button Start -->
                                <div class="cart-btn action-btn m-b-30">
                                    <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                        <div class="add-to_cart">
                                            <a class="btn btn-primary btn-hover-dark rounded-0"
                                                href="javascript:addCartQuality({{ $item->id }})">Thêm vào giỏ hàng</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- Cart Button End -->

                            </div>
                            <!-- Product Summery End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @section('js')
        <script>
            function formatVietnamDong(amount) {
                return amount.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
            }

            function addCart(id) {
                $.ajax({
                    url: '{{ route('home') }}/api/products/' + id,
                    success: function(response) {
                        if (response.status == 200) {
                            let cartItems = [];
                            const existingCart = localStorage.getItem('cart');
                            if (existingCart) {
                                cartItems = JSON.parse(existingCart);
                                const existingProduct = cartItems.find(item => item.id === response.data.id);
                                if (existingProduct) {
                                    existingProduct.quantity += 1;
                                } else {
                                    cartItems.push(response.data);
                                }
                            } else {
                                cartItems.push(response.data);
                            }
                            localStorage.setItem('cart', JSON.stringify(cartItems));
                            Success('Thêm vào giỏ hàng thành công');
                            renderCart()
                        } else {
                            Error('Thêm thất bại');
                        }
                    },
                    error: function() {
                        Error('Thêm sản phẩm thất bại');
                    }
                });
            }

            function addCartQuality(id) {
                let quantity = $('#quantyCart_' + id).val();
                if (quantity < 1) {
                    Error('Số lượng phải lớn hơn 0');
                    return;
                }
                $.ajax({
                    url: '{{ route('home') }}/api/products/' + id,
                    success: function(response) {
                        if (response.status == 200) {
                            let cartItems = [];
                            const existingCart = localStorage.getItem('cart');
                            if (existingCart) {
                                cartItems = JSON.parse(existingCart);
                                const existingProduct = cartItems.find(item => item.id === response.data.id);
                                if (existingProduct) {
                                    existingProduct.quantity += parseInt(quantity);
                                } else {
                                    response.data.quantity = parseInt(quantity);
                                    cartItems.push(response.data);
                                }
                            } else {
                                response.data.quantity = parseInt(quantity);
                                cartItems.push(response.data);
                            }
                            localStorage.setItem('cart', JSON.stringify(cartItems));
                            Success('Thêm vào giỏ hàng thành công');
                            renderCart()
                        } else {
                            Error('Thêm thất bại');
                        }
                    },
                    error: function() {
                        Error('Thêm sản phẩm thất bại');
                    }
                });
            }

            function renderCart() {
                if (localStorage.getItem('cart')) {
                    const cartItems = JSON.parse(localStorage.getItem('cart'));

                    const cartWrapper = $('.cart-product-wrapper');

                    const cartHtmls = cartItems.map(item => {
                        return `
                                <div class="cart-product-inner p-b-20 m-b-20 border-bottom">
                                    <div class="single-cart-product">
                                        <div class="cart-product-thumb">
                                            <a href="single-product.html"><img src="${item.image_main}" alt="${item.name}"></a>
                                        </div>
                                        <div class="cart-product-content">
                                            <h3 class="title"><a href="single-product.html">${item.name}</a></h3>
                                            <div class="product-quty-price">
                                                <span class="cart-quantity">Qty: <strong> ${item.quantity} </strong></span>
                                                <span class="price">
                                                <span class="new">${formatVietnamDong(item.price)}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-product-remove">
                                        <a href="javascript:deleteCart(${item.id})"><i class="icon-close"></i></a>
                                    </div>
                                </div>`;
                    });

                    cartWrapper.html(cartHtmls);
                }

                totalCartMoney()
            }

            function deleteCart(id) {
                const cartItems = JSON.parse(localStorage.getItem('cart'));
                const newCartItems = cartItems.filter(item => item.id !== id);
                localStorage.setItem('cart', JSON.stringify(newCartItems));
                renderCart();
            }

            function totalCartMoney() {
                const cartItems = JSON.parse(localStorage.getItem('cart'));
                let total = 0;
                if (cartItems) {
                    cartItems.forEach(item => {
                        total += item.price * item.quantity;
                    });
                }
                document.getElementById('total-cart-money').innerHTML = formatVietnamDong(total);
            }

            renderCart()
            totalCartMoney()
        </script>
    @endsection
