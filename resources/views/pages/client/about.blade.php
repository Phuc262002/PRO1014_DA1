@extends('layouts.client.master')
@section('title')
    Pets Care - Về chúng tôi
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Về chúng tôi</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li>Về chúng tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row m-b-n30">
                <div class="col-md-6 pe-lg-5 p-r-15 m-b-30" data-aos="fade-up" data-aos-duration="1000">
                    <!-- About Thumb Start -->
                    <div class="about-thumb">
                        <img class="fit-image" src="assets/images/about/1.png" alt="About Image">
                    </div>
                    <!-- About Thumb End -->
                </div>
                <div class="col-md-6 align-self-center m-b-30" data-aos="fade-up" data-aos-duration="1500">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <h2 class="title">Giới Thiệu</h2>
                        <p>Phòng khám thú y mở cửa 24/24 tại TP.HCM Petcare sẽ hỗ trợ bạn chăm sóc thú cưng, trong những
                            trường hợp cấp bách cần điều trị xử lý kịp thời. Nếu bạn không thể đưa thú cưng tới phòng khám
                            được, chúng tôi có dịch vụ chăm sóc thú cưng tại nhà. Bất kì khi nào bạn cần thì hãy gọi ngay
                            cho chúng thôi theo số hotline 093123424 (trực 24/24) để được hỗ trợ nhanh nhất.</p>
                        <ul class="about-content-list">
                            <li><span><i class="ti-angle-double-right"></i></span> Có nhiều đoạn biến thể</li>
                            <li><span><i class="ti-angle-double-right"></i></span> Trái ngược với niềm tin phổ biến không
                                chỉ đơn giản là</li>
                            <li><span><i class="ti-angle-double-right"></i></span> Nhưng tôi phải giải thích cho bạn làm thế
                                nào tất cả những điều này</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-hover-dark">Liên hệ với chúng tôi</a>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Testimonial Section Start -->
    <div class="section bg-name-bright section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Testimonial Carousel Start -->
                    <div class="testimonial-carousel">

                        <!-- Testimonial Gallery Top Start -->
                        <div class="swiper-container testimonial-gallery-top" data-aos="fade-up" data-aos-duration="1000">
                            <div class="swiper-wrapper">

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Pets Care là mộ website thân thiện, dễ sử dụng. Tôi rất hài lòng về các sản phẩm và dịch vụ chăm sóc thú cưng và đặt biệt là đội ngũ hỗ trợ nhiệt tình.</p>
                                    </div>
                                    <!-- Testimonial Content End -->

                                </div>
                                <!-- Single Swiper Slide End -->
                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Giao diện dễ sử dụng.</p>
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
                                        <img src="https://lh3.googleusercontent.com/a/AAcHTtdXTtZeeIVJFtOaoPbgtmjoVgk04Kjec2mw_iDWPcKv1A=s96-c" alt="Testimonial Image">
                                        <h3 class="thumb-title">Nguyen Thi Nam (FE FPL HCM)</h3>
                                        <h6 class="thumb-subtitle">Khách hàng</h6>
                                    </div>
                                    <!-- Testimonial Thumb End -->
                                </div>
                                <!-- Single Swiper Slide End -->
                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Thumb Start -->
                                    <div class="testimonial-thumb text-center">
                                        <img src="{{asset('assets/images/member_avatar/3.png')}}" alt="Testimonial Image">
                                        <h3 class="thumb-title">Ton That An Khuong (FPL HCM)</h3>
                                        <h6 class="thumb-subtitle">Khách hàng</h6>
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

    <!-- Team section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row row-cols-md-5 row-cols-sm-2 row-cols-1 m-b-n30">

                <div class="col m-b-30" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team-wrapper">
                        <div class="thumb">
                            <a href="#">
                                <img class="fit-image" src="{{asset('assets/images/member_avatar/4.png')}}" alt="Team Image">
                            </a>
                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <a title="Facebook" href="https://www.facebook.com/profile.php?id=100016468116539"><i class="ti-facebook"></i></a>
                                <a title="Instagram" href="#/"><i class="ti-instagram"></i></a>
                            </div>
                            <!-- Social Shear End -->
                        </div>
                        <div class="content">
                            <h4 class="title">Huỳnh Tuấn Kiệt</h4>
                            <h4 class="subtitle">Member</h4>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>
                <div class="col m-b-30" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team-wrapper">
                        <div class="thumb">
                            <a href="#">
                                <img class="fit-image" src="{{asset('assets/images/member_avatar/3.png')}}" alt="Team Image">
                            </a>
                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <a title="Facebook" href="https://www.facebook.com/com.3975"><i class="ti-facebook"></i></a>
                                <a title="Instagram" href="#/"><i class="ti-instagram"></i></a>
                            </div>
                            <!-- Social Shear End -->
                        </div>
                        <div class="content">
                            <h4 class="title">Tôn Thất An Khương</h4>
                            <h4 class="subtitle">Member</h4>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>

                <div class="col m-b-30" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team-wrapper">
                        <div class="thumb">
                            <a href="#">
                                <img class="fit-image" src="{{asset('assets/images/member_avatar/1.png')}}" alt="Team Image">
                            </a>
                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <a title="Facebook" href="https://www.facebook.com/phucnh2610/"><i class="ti-facebook"></i></a>
                                <a title="Instagram" href="https://www.instagram.com/phucnh2610/"><i class="ti-instagram"></i></a>
                            </div>
                            <!-- Social Shear End -->
                        </div>
                        <div class="content">
                            <h4 class="title">Nguyễn Hoàng Phúc</h4>
                            <h4 class="subtitle">Leader</h4>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>

                <div class="col m-b-30" data-aos="fade-up" data-aos-duration="2000">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team-wrapper">
                        <div class="thumb">
                            <a href="#">
                                <img class="fit-image" src="{{asset('assets/images/member_avatar/2.png')}}" alt="Team Image">
                            </a>
                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <a title="Facebook" href="https://www.facebook.com/nhan2095"><i class="ti-facebook"></i></a>
                                <a title="Instagram" href="#/"><i class="ti-instagram"></i></a>
                            </div>
                            <!-- Social Shear End -->
                        </div>
                        <div class="content">
                            <h4 class="title">Nguyễn Trọng Nhân</h4>
                            <h4 class="subtitle">Member</h4>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>
                <div class="col m-b-30" data-aos="fade-up" data-aos-duration="2500">
                    <!-- Single Team Wrapper Start -->
                    <div class="single-team-wrapper">
                        <div class="thumb">
                            <a href="#">
                                <img class="fit-image" src="{{asset('assets/images/member_avatar/5.png')}}" alt="Team Image">
                            </a>
                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <a title="Facebook" href="#/"><i class="ti-facebook"></i></a>
                                <a title="Instagram" href="#/"><i class="ti-instagram"></i></a>
                            </div>
                            <!-- Social Shear End -->
                        </div>
                        <div class="content">
                            <h4 class="title">Trần Quang Trung</h4>
                            <h4 class="subtitle">Member</h4>
                        </div>
                    </div>
                    <!-- Single Team Wrapper End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Team section End -->
@endsection
