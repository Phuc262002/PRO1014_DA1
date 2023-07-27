@extends('layouts.client.master')
<link href="{{ asset('assets/css/services/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/services/reponsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/services/bootstrap.css') }}" rel="stylesheet">

@section('title')
    {{ $title }}
@endsection

@section('content')
    <!--.service_area-->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Dịch Vụ</h2>
                        <ul>
                            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li>Dịch vụ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="service_area">
        <div class="container">
            <!-- Breadcrumb Area End -->
            <div class="row">
                @foreach ($data_services as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service hvr-float-shadow">
                            <figure><a href="#"><img src="{{ $item->image_service }}" alt="Images"></a>
                            </figure>
                            <div class="service-text">
                                <div class="icon"><i class="{{ $item->icon }}"></i></div>
                                <h4><a href="#">{{ $item->name }}</a></h4>
                                <p>{{ $item->description }}</p>
                                <p><span class="price">
                                        @if ($item->discount_price > 0)
                                            <strong class="new">{{ number_format($item->discount_price) }} đ</strong>
                                            <del class="old">{{ number_format($item->price) }} đ</del>
                                        @else
                                            <span class="new">{{ number_format($item->price) }} đ</span>
                                        @endif
                                    </span></p>
                                <a href="{{ route('dich-vu.create') }}?service_id={{ $item->id }}"><button
                                        type="button" class="btn btn-warning">Đặt lịch</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/2.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-injection-needle"></i></div>
                            <h4><a href="services-detail.html">TIM THUỐC ĐỊNH KỲ CHO VẬT NUÔI</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.</p>
                               <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/3.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-health-care"></i></div>
                            <h4><a href="services-detail.html">TỈA LONG CHO VẬT NUÔI</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                                <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>

                       </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/4.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-sitting-dog"></i></div>
                            <h4><a href="services-detail.html">CHƠI VỚI THÚ CƯNG</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                                <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/7.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-home"></i></div>
                            <h4><a href="services-detail.html">CHƠI VỚI THÚ CƯNG</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                                <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/8.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-dog"></i></div>
                            <h4><a href="services-detail.html">PET SITTER</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                               <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/9.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-dog-1"></i></div>
                            <h4><a href="services-detail.html">DẪN THÚ CƯNG ĐI DẠO</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách   hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                               <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/10.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-doctor-stethoscope"></i></div>
                            <h4><a href="services-detail.html">CHĂM SÓC CHO THÚ CƯNG</a></h4>
                            <p>“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                               <a href="{{route('book-services')}}"><button  type="button" class="btn btn-warning">Đặt lịch</button></a>

                        </div>
                    </div>
                </div> --}}
            </div>


        </div>
    </section>

    <!--/service_area-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>

    <script src="{{ asset('assets/js/services/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/services/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/services/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/services/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/services/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/services/html5lightbox/html5lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/services/owl.js') }}"></script>
    <script src="{{ asset('assets/js/services/validate.js') }}"></script>
    <script src="{{ asset('assets/js/services/wow.js') }}"></script>

    <script src="{{ asset('assets/js/services/custom.js') }}"></script>
@endsection
