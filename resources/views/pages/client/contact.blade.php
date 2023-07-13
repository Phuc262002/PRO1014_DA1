@extends('layouts.client.master')

@section('content')
<!-- Breadcrumb Area Start -->

    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Liên hệ với chúng tôi</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Trang Chủ</a></li>
                            <li>Liên hệ với chúng tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row m-b-n50">
                <div class="col-12 col-lg-6 m-b-50 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="1000">

                    <!-- Section Title Start -->
                    <div class="contact-title p-b-15">
                        <h2 class="title">Liên Lạc</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper contact-form">
                        <form action="https://htmlmail.hasthemes.com/rezaul/amber.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-area m-b-20">
                                                <input class="input-item" type="text" placeholder="Họ và Tên *" name="name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-area m-b-20">
                                                <input class="input-item" type="email" placeholder="Email.. *" name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area m-b-20">
                                                <input class="input-item" type="text" placeholder="Địa Chỉ *" name="subject">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area m-b-40">
                                                <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Nội dung ...."></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-hover-dark">Gửi phản hồi</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    <!-- Contact Form Wrapper End -->

                </div>
                <div class="col-12 col-lg-6 m-b-50 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Section Title Start -->
                    <div class="contact-title p-b-15">
                        <h2 class="title">Liên hệ</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p>Phòng khám thú y mở cửa 24/24 tại TP.HCM  Petcare sẽ hỗ trợ bạn chăm sóc thú cưng, trong những trường hợp cấp bách cần điều trị xử lý kịp thời. Nếu bạn không thể đưa thú cưng tới phòng khám được, chúng tôi có dịch vụ chăm sóc thú cưng tại nhà. Bất kì khi nào bạn cần thì hãy gọi ngay cho chúng thôi theo số hotline 093123424 (trực 24/24) để được hỗ trợ nhanh nhất.</p>
                        <address class="contact-block">
                            <ul>
                                <li><i class="fa fa-fax"></i> Địa chỉ email của bạn</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:123-123-456-789">123 123 456 789</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:demo@example.com">demo@example.com </a></li>
                            </ul>
                        </address>

                        <div class="working-time">
                            <h6 class="title">Giờ làm việc :</h6>
                            <p>Thứ 2 – Thứ 7:08AM – 22PM</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact us Section End -->
    <!-- Contact Map Start -->
    <div class="section">

        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.444049623341!2d106.62348867490896!3d10.853791489299727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b684ce076f3%3A0x4da1cf0078f423fa!2zRlBUIFBvbHl0ZWNobmljIEjhu5MgQ2jDrSBNaW5oIC0gVG_DoCBU!5e0!3m2!1sen!2s!4v1689148274286!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Google Map Area Start -->

    </div>
    <!-- Contact Map End -->
    @endsection