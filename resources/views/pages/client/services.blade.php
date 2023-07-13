@extends('layouts.client.master')
<link href="assets/css/services/style.css" rel="stylesheet">
<link href="assets/css/services/reponsive.css" rel="stylesheet">
<link href="assets/css/services/bootstrap.css" rel="stylesheet">


@section('content')
    <!--.service_area-->
    <div class="section breadcrumb-area bg-name-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Dịch Vụ</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Trang Chủ</a></li>
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
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/1.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-pawprint"></i></div>
                            <h4><a href="services-detail.html">NHẬN NUÔI THÚ CƯNG</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                                <button data-bs-toggle="modal" data-bs-target="#signupModals" type="button" class="btn btn-warning">Đặt lịch</button>
                        </div>
                    </div>
                    <div id="signupModals" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 overflow-hidden">
                                <div class="modal-header p-3">
                                    <h4 class="card-title mb-0">Sign Up</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-success  rounded-0 mb-0">
                                    <p class="mb-0">Up to <span class="fw-semibold">50% OFF</span>, Hurry up before the stock ends</p>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Enter your name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="checkTerms">
                                            <label class="form-check-label" for="checkTerms">I agree to the <span class="fw-semibold">Terms of Service</span> and Privacy Policy</label>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Sign Up Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service hvr-float-shadow">
                        <figure><a href="services-detail.html"><img src="assets/images/services/2.jpg" alt="Images"></a>
                        </figure>
                        <div class="service-text">
                            <div class="icon"><i class="flaticon-injection-needle"></i></div>
                            <h4><a href="services-detail.html">TIM THUỐC ĐỊNH KỲ CHO VẬT NUÔI</a></h4>
                            <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
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
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
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
                            <                     <p>‘“Các bé đến ở Khách Sạn ThiThi Pet khi về nhà còn mập mạp , sạch sẽ , do có <br> sự chăm sóc từ đội ngũ y Bác Sĩ tốt nhất . Có sự am hiểu về quá trình chăm sóc , nuôi dưỡng và chế độ ăn của từng bé “”
                                Lời nhận xét của hầu hết các khách hàng <br> khi gửi bé cún( chó , mèo ) tại dịch vụ trông giữ chó-mèo tại THITHI PET TPHCM.. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!--/service_area-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>

    <script src="assets/js/services/jquery.js"></script>
    <script src="assets/js/services/bootstrap.min.js"></script>
    <script src="assets/js/services/jquery.countTo.js"></script>
    <script src="assets/js/services/isotope.js"></script>
    <script src="assets/js/services/jquery.appear.js"></script>
    <script src="assets/js/services/html5lightbox/html5lightbox.js"></script>
    <script src="assets/js/services/owl.js"></script>
    <script src="assets/js/services/validate.js"></script>
    <script src="assets/js/services/wow.js"></script>

    <script src="assets/js/services/custom.js"></script>

@endsection
