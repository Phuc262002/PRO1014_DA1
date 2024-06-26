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
                        <h2 class="breadcrumb-title">Chi Tiết Sản Phẩm</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Chi Tiết Sản Phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Single Product Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img">

                        <!-- Single Product Image Start -->
                        <div class="single-product-img swiper-container product-gallery-top">
                            <div class="swiper-wrapper popup-gallery">

                                <a class="swiper-slide w-100" href="{{ $product->image_main }}">
                                    <img class="w-100" src="{{ $product->image_main }}" alt="Product">
                                </a>
                                @foreach ($product->image_list as $item)
                                    <a class="swiper-slide w-100" href="{{ $item->image_collection }}">
                                        <img class="w-100" src="{{ $item->image_collection }}" alt="Product">
                                    </a>
                                @endforeach

                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container product-gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ $product->image_main }}" alt="Product">
                                </div>
                                @foreach ($product->image_list as $item)
                                    <div class="swiper-slide">
                                        <img src="{{ $item->image_collection }}" alt="Product">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-next swiper-nav-button"><i class="ti-arrow-right"></i></div>
                            <div class="swiper-button-prev swiper-nav-button"><i class="ti-arrow-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Thumb End -->

                    </div>
                    <!-- Product Details Image End -->

                </div>

                <div class="col-lg-7">

                    <!-- Product Summery Start -->
                    <div class="product-summery position-relative">

                        <!-- Product Head Start -->
                        <div class="product-head m-b-15">
                            <h2 class="product-title">{{ $product->name }}</h2>
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
                            @if ($product->discount_price != 0)
                                <span class="regular-price">{{ number_format($product->discount_price) }}</span>
                                <span class="old-price"><del>{{ number_format($product->price) }}</del></span>
                            @else
                                <span class="regular-price">{{ number_format($product->price) }}</span>
                            @endif
                        </div>
                        <!-- Price Box End -->

                        <!-- SKU Start -->
                        <div class="sku m-b-15">
                            <span><strong>Mã sản phẩm: </strong>{{ $product->sku }}</span>
                        </div>
                        <div class="sku m-b-15">
                            <span><strong>Thương hiệu: </strong> <a href="{{route('san-pham.index')}}?brand={{ $product->brand->slug }}" class="btn btn-link text-primary p-0">{{ $product->brand->name }}</a></span>
                        </div>
                        <div class="sku m-b-15">
                            <span><strong>Loại sản phẩm: </strong> <a href="{{route('san-pham.index')}}?category={{ $product->category->slug }}" class="btn btn-link text-primary p-0">{{ $product->category->name }}</a></span>
                        </div>
                        <!-- SKU End -->

                        <!-- Product Inventory Start -->
                        <div class="product-inventroy m-b-15">
                            <span class="inventroy-title"> <strong>Còn lại: </strong></span>
                            <span class="inventory-varient">{{ $product->quantity }} sản phẩm </span>
                        </div>
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p class="desc-content m-b-25">{{ $product->description_summary }}</p>
                        <!-- Description End -->

                        <!-- Quantity Start -->
                        <div class="quantity d-flex align-items-center m-b-25">
                            <span class="m-r-10"><strong>Số Lượng: </strong></span>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" id="quantyCart_{{ $product->id }}" min="1"
                                    value="1" type="text">
                                <div class="dec qtybutton"></div>
                                <div class="inc qtybutton"></div>
                            </div>
                        </div>
                        <!-- Quantity End -->

                        <!-- Cart Button Start -->
                        <div class="cart-btn action-btn m-b-30">
                            <div class="action-cart-btn-wrapper d-flex">
                                <div class="add-to_cart">
                                    <a class="btn btn-primary btn-hover-dark rounded-0"
                                        href="javascript:addCartQuality({{ $product->id }})">Thêm Vào Giỏ
                                        Hàng</a>
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
    <!-- Single Product Section End -->

    <!-- Single Product Tab Start -->
    <div class="section section-padding bg-name-bright">
        <div class="container">
            <div class="row">

                <!-- Single Product Tab Start -->
                <div class="col-lg-12 single-product-tab">
                    <ul class="nav nav-tabs m-b-n15" id="myTab" role="tablist">
                        <li class="nav-item m-b-15">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab"
                                aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item m-b-15">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab"
                                aria-selected="false">Đánh giá</a>
                        </li>
                        <li class="nav-item m-b-15">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab"
                                aria-selected="false">Chính sách vận chuyển</a>
                        </li>
                    </ul>

                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="desc-content">
                                {!! $product->description_detail !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="product_tab_content m-t-40 p-3 border">

                                <!-- Start Single Review -->
                                <div class="single-review d-flex m-b-20">

                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/review/1.jpg">
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details">
                                        <div class="review_info m-b-10">

                                            <!-- Rating Start -->
                                            <span class="rating justify-content-start m-b-15">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <!-- Rating End -->

                                            <!-- Review Title & Date Start -->
                                            <div class="review-title-date d-flex">
                                                <h5 class="title">Admin - </h5><span> January 19, 2021</span>
                                            </div>
                                            <!-- Review Title & Date End -->

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex,
                                            vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus
                                            libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel.
                                            Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet
                                            quam tincidunt iaculis.</p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                                <!-- End Single Review -->

                                <!-- Rating Wrap Start -->
                                <div class="rating_wrap">
                                    <h5 class="rating-title m-b-10">Add a review </h5>
                                    <p class="m-b-10">Your email address will not be published. Required fields are marked
                                        *</p>
                                    <h6 class="rating-sub-title m-b-10">Your Rating</h6>

                                    <!-- Rating Start -->
                                    <span class="rating justify-content-start m-b-15">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <!-- Rating End -->

                                </div>
                                <!-- Rating Wrap End -->

                                <!-- Comments ans Replay Start -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 ">

                                            <!-- Comment form Start -->
                                            <form action="#" class="comment-form-area">
                                                <div class="row comment-input">

                                                    <!-- Input Name Start -->
                                                    <div class="col-md-6 comment-form-author m-b-15">
                                                        <label>Name</label>
                                                        <input type="text" required="required" name="Name">
                                                    </div>
                                                    <!-- Input Name End -->

                                                    <!-- Input Email Start -->
                                                    <div class="col-md-6 comment-form-emai m-b-15">
                                                        <label>Email</label>
                                                        <input type="text" required="required" name="email">
                                                    </div>
                                                    <!-- Input Email End -->

                                                </div>
                                                <!-- Comment Texarea Start -->
                                                <div class="comment-form-comment m-b-15">
                                                    <label>Comment</label>
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </div>
                                                <!-- Comment Texarea End -->

                                                <!-- Comment Submit Button Start -->
                                                <div class="comment-form-submit">
                                                    <button class="btn btn-primary btn-hover-dark border-0">Submit</button>
                                                </div>
                                                <!-- Comment Submit Button End -->

                                            </form>
                                            <!-- Comment form End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Comments ans Replay End -->

                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Shipping Policy Start -->
                            <div class="shipping-policy m-t-40 m-b-n15">
                                <h4 class="title m-b-20">Shipping policy for our store</h4>
                                <p class="m-b-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate</p>
                                <ul class="policy-list m-b-15">
                                    <li>1-2 business days (Typically by end of day)</li>
                                    <li><a href="#">30 days money back guaranty</a></li>
                                    <li>24/7 live support</li>
                                    <li>odio dignissim qui blandit praesent</li>
                                    <li>luptatum zzril delenit augue duis dolore</li>
                                    <li>te feugait nulla facilisi.</li>
                                </ul>
                                <p class="m-b-15">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                    doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                    est usus legentis in iis qui facit eorum</p>
                                <p class="m-b-15">claritatem. Investigationes demonstraverunt lectores legere me lius quod
                                    ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                    consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                                    claram, anteposuerit litterarum formas humanitatis per</p>
                                <p class="m-b-15">seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis
                                    videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                            <!-- Shipping Policy End -->
                        </div>
                    </div>

                </div>
                <!-- Single Product Tab End -->

            </div>
        </div>
    </div>
    <!-- Single Product Tab End -->

    <!-- Product Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">

                    <div class="product-carousel arrow-outside-container">
                        <div class="swiper-container">

                            <div class="swiper-wrapper">
                                @foreach ($same_product as $item)
                                    <div class="swiper-slide">
                                        <!-- Product Start -->
                                        <div class="product-wrapper">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="{{ route('san-pham.detail', ['slug' => $item->slug]) }}" class="image">
                                                        <img class="fit-image" src="{{ $item->image_main }}"
                                                            alt="Product" />
                                                    </a>
                                                    @if ($item->discount_price != 0)
                                                        <span class="badges">
                                                            <span class="sale">Giảm
                                                                {{ ceil(100 - ($item->discount_price / $item->price) * 100) }}%</span>
                                                        </span>
                                                    @endif
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                            data-bs-target="#quick-view{{ $item->id }}"
                                                            title="Quickview"><i class="fa-regular fa-eye"></i></a>
                                                        <a href="javascript:addCart({{ $item->id }})"
                                                            class="action cart" title="Cart"><i
                                                                class="ti-shopping-cart"></i></a>
                                                    </div>


                                                    @if ($item->discount_price > 0)
                                                        <div class="countdown-area">
                                                            <div class="countdown-wrapper"
                                                                data-countdown="{{ $item->discount_end }}"></div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a
                                                            href="{{ route('san-pham.detail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                                    </h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        @if ($item->discount_price > 0)
                                                            <span
                                                                class="new">{{ number_format($item->discount_price) }}</span>
                                                            <span class="old">{{ number_format($item->price) }}</span>
                                                        @else
                                                            <span class="new">{{ number_format($item->price) }}</span>
                                                        @endif
                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                        <!-- Product End -->
                                    </div>
                                @endforeach

                            </div>

                            <div class="swiper-pagination d-block d-md-none"></div>
                            <div class="swiper-button-prev swiper-nav-button d-none d-md-flex"><i
                                    class="ti-angle-left"></i></div>
                            <div class="swiper-button-next swiper-nav-button d-none d-md-flex"><i
                                    class="ti-angle-right"></i></div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Product Section End -->

    @foreach ($same_product as $item)
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
                                                <img class="w-100" src="{{ $img->image_collection }}" alt="Product">
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
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </span>
                                <!-- Rating End -->

                                <!-- Price Box Start -->
                                <div class="price-box m-b-10">
                                    <span class="regular-price">{{ number_format($item->price) }}</span>
                                    {{-- <span class="old-price"><del>{{$item->discount_price}}</del></span> --}}
                                </div>
                                <!-- Price Box End -->
                                <!-- SKU Start -->
                                <div class="sku m-b-5">
                                    <span><strong>Mã sản phẩm: </strong>{{ $item->sku }}</span>
                                </div>
                                <div class="sku m-b-5">
                                    <span><strong>Thương hiệu: </strong> <a
                                            href="{{ route('san-pham.index') }}?brand={{ $item->brand->slug }}"
                                            class="btn btn-link text-primary p-0">{{ $item->brand->name }}</a></span>
                                </div>
                                <div class="sku m-b-15">
                                    <span><strong>Loại sản phẩm: </strong> <a
                                            href="{{ route('san-pham.index') }}?category={{ $item->category->slug }}"
                                            class="btn btn-link text-primary p-0">{{ $item->category->name }}</a></span>
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
                                        <input class="cart-plus-minus-box" id="quantyCart_{{ $item->id }}"
                                            min="1" value="1" type="text">
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
                                                href="javascript:addCartQuality({{ $item->id }})">Thêm vào giỏ
                                                hàng</a>
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
@endsection
