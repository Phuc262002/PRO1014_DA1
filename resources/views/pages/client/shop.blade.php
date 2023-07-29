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
                        <h2 class="breadcrumb-title">CỬA HÀNG</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Cửa Hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Shop Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper flex-column flex-md-row p-2 m-b-40 border">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left">

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i
                                        class="ti-layout-grid4-alt"></i></button>

                            </div>


                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">

                            <h4 class="title m-r-10">Lọc theo: </h4>

                            <form id="form_filter" action="{{ route('san-pham.index') }}">
                                <div class="shop-short-by">
                                    <select class="nice-select" name="filter" onchange="inputFilter()"
                                        aria-label=".form-select-sm example">
                                        <option value="filter_newest" {{ $filter == 'filter_newest' ? 'selected' : '' }}>Mới
                                            nhất</option>
                                        <option value="filter_oldest" {{ $filter == 'filter_oldest' ? 'selected' : '' }}>Cũ
                                            nhất</option>
                                        <option value="filter_Za" {{ $filter == 'filter_Za' ? 'selected' : '' }}>Giá giảm
                                            dần</option>
                                        <option value="filter_Az" {{ $filter == 'filter_Az' ? 'selected' : '' }}>Giá tăng
                                            dần</option>
                                    </select>
                                </div>
                                @foreach (request()->query() as $key => $value)
                                    @if ($key != 'filter')
                                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                    @endif
                                @endforeach
                            </form>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_3">

                        <!-- Single Product Start -->
                        @foreach ($product as $item)
                            <div class="col-lg-4 col-md-4 col-sm-6 product">
                                <div class="product-inner">
                                    <div class="thumb">
                                        <a href="{{ route('san-pham.detail', ['slug' => $item->slug]) }}" class="image">
                                            <img class="fit-image" src="{{ $item->image_main }}" alt="Product" />
                                            @if ($item->discount_price > 0)
                                                <div class="countdown-area">
                                                    <div class="countdown-wrapper"
                                                        data-countdown="{{ $item->discount_end }}"></div>
                                                </div>
                                            @endif
                                        </a>
                                        @if ($item->discount_price > 0)
                                            <span class="badges">
                                                <span class="sale">Giảm
                                                    {{ ceil(100 - ($item->discount_price / $item->price) * 100) }}%</span>
                                            </span>
                                        @endif
                                        <div class="action-wrapper">
                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view{{ $item->id }}"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <a href="javascript:addCart({{ $item->id }})" class="action cart"
                                                title="Cart"><i class="ti-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a
                                                href="{{ route('san-pham.detail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                        </h5>
                                        <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <span class="price">
                                            @if ($item->discount_price > 0)
                                                <span class="new">{{ number_format($item->discount_price) }}</span>
                                                <span class="old">{{ number_format($item->price) }}</span>
                                            @else
                                                <span class="new">{{ number_format($item->price) }}</span>
                                            @endif
                                        </span>
                                        <p>It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters.</p>
                                        <!-- Cart Button Start -->
                                        <div class="cart-btn action-btn">
                                            <div class="action-cart-btn-wrapper d-flex">
                                                <div class="add-to_cart">
                                                    <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add
                                                        to cart</a>
                                                </div>

                                                <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quickview"><i
                                                        class="ti-plus"></i></a>
                                            </div>
                                        </div>
                                        <!-- Cart Button End -->
                                    </div>
                                </div>
                            </div>
                        @endforeach



                        <!-- Single Product End -->



                    </div>
                    <!-- Shop Wrapper End -->

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper justify-content-center m-t-50">

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                            {{ $product->appends(request()->query())->links() }}
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                </div>
                <div class="col-lg-3 col-12">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget m-t-50 mt-lg-0">
                        <div class="widget_inner">
                            <div class="widget-list m-b-50">
                                <h3 class="widget-title m-b-30">Tìm kiếm</h3>
                                <form class="search-box" action="{{ route('san-pham.index') }}">
                                    @if ($search == null)
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Tìm kiếm sản phẩm" aria-label="Search Our Store">
                                        @foreach (request()->query() as $key => $value)
                                            @if ($key != 'search')
                                                <input type="hidden" name="{{ $key }}"
                                                    value="{{ $value }}">
                                            @endif
                                        @endforeach
                                    @else
                                        <input type="text" name="search" class="form-control"
                                            placeholder="Tìm kiếm sản phẩm" aria-label="Search Our Store"
                                            value="{{ $search }}">
                                        @foreach (request()->query() as $key => $value)
                                            @if ($key != 'search')
                                                <input type="hidden" name="{{ $key }}"
                                                    value="{{ $value }}">
                                            @endif
                                        @endforeach
                                    @endif
                                    <button class="search-icon" type="submit">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="widget-list m-b-50">
                                <h3 class="widget-title m-b-30">Loại sản phẩm</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a style="color: #{{ $category == '' ? 'f6ab49' : '' }};"
                                                href="?{{ (request()->has('category') ? '&' : '?') . http_build_query(array_merge(request()->except('category'), ['category' => ''])) }}">Tất
                                                cả sản phẩm</a></li>
                                        @foreach ($categories as $item)
                                            <li><a style="color: #{{ $category == $item->slug ? 'f6ab49' : '' }};"
                                                    href="?{{ (request()->has('category') ? '&' : '?') . http_build_query(array_merge(request()->except('category'), ['category' => $item->slug])) }}">{{ $item->name }}
                                                    ({{ count($item->product) }})</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->

    <!-- Modal Start  -->
    @foreach ($product as $item)
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
                                        <a class="swiper-slide"
                                            href="{{ route('san-pham.detail', ['slug' => $item->slug]) }}">
                                            <img class="w-100" src="{{ $item->image_main }}" alt="Product">
                                        </a>
                                        @foreach ($item->image_list as $img)
                                            <a class="swiper-slide"
                                                href="{{ route('san-pham.detail', ['slug' => $item->slug]) }}">
                                                <img class="w-100" src="{{ $img->image_collection }}" alt="Product">
                                            </a>
                                        @endforeach
                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <!-- <div class="swiper-pagination d-md-none"></div> -->
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-product-button-next swiper-button-next"><i
                                            class="ti-arrow-right"></i></div>
                                    <div class="swiper-product-button-prev swiper-button-prev"><i
                                            class="ti-arrow-left"></i></div>
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
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <!-- Rating End -->

                                <!-- Price Box Start -->
                                <div class="price-box m-b-10">
                                    @if ($item->discount_price > 0)
                                        <span class="regular-price">{{ number_format($item->discount_price) }}</span>
                                        <span class="old-price"><del>{{ number_format($item->price) }}</del></span>
                                    @else
                                        <span class="regular-price">{{ number_format($item->price) }}</span>
                                    @endif
                                </div>
                                <!-- Price Box End -->

                                <!-- SKU Start -->
                                <div class="sku m-b-15">
                                    <span class="inventroy-title"> <strong>Mã sản phẩm:</strong></span>
                                    <span>{{ $item->sku }}</span>
                                </div>
                                <!-- SKU End -->

                                <!-- Product Inventory Start -->
                                <div class="product-inventroy m-b-15">
                                    <span class="inventroy-title"> <strong>Còn lại:</strong></span>
                                    <span class="inventory-varient">{{ $item->quantity }}</span>
                                </div>
                                <!-- Product Inventory End -->

                                <!-- Description Start -->
                                <p class="desc-content m-b-25">{!! $item->description_summary !!}</p>
                                <!-- Description End -->

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

    <!-- Modal End  -->
@endsection
@section('js')
    <script>
        function inputFilter() {
            $('#form_filter').submit();
        }
    </script>
@endsection
