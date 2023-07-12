@extends('layouts.client.master')

@section('content')

<!-- Header Section Start -->
<div class="header section">

    
    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    
                    <div class="col-lg-3 col-md-8 col-6">
                        <div class="header-actions">                           
                            <!-- Header Action Button Start -->
                            <div class="header-action-btn header-action-btn-cart d-none d-sm-flex">
                                <!-- Header Cart Content Start -->
                                <div class="header-cart-content">

                                    <!-- Cart Procut Wrapper Start  -->
                                    <div class="cart-product-wrapper">

                                        <!-- Cart Product/Price Start -->
                                        <div class="cart-product-inner p-b-20 m-b-20 border-bottom">

                                            <!-- Single Cart Product Start -->
                                            <div class="single-cart-product">
                                                <div class="cart-product-thumb">
                                                    <a href="single-product.html"><img src="assets/images/header/header-cart/1.png" alt="Cart Product"></a>
                                                </div>
                                                <div class="cart-product-content">
                                                    <h3 class="title"><a href="single-product.html">Basic Dog Trainning</a></h3>
                                                    <div class="product-quty-price">
                                                        <span class="cart-quantity">Qty: <strong> 1 </strong></span>
                                                        <span class="price">
                                                        <span class="new">$70.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Cart Product End -->

                                            <!-- Product Remove Start -->
                                            <div class="cart-product-remove">
                                                <a href="#/"><i class="icon-close"></i></a>
                                            </div>
                                            <!-- Product Remove End -->

                                        </div>
                                        <!-- Cart Product/Price End -->

                                        <!-- Cart Product/Price Start -->
                                        <div class="cart-product-inner p-b-20 m-b-20 border-bottom">

                                            <!-- Single Cart Product Start -->
                                            <div class="single-cart-product">
                                                <div class="cart-product-thumb">
                                                    <a href="single-product.html"><img src="assets/images/header/header-cart/2.png" alt="Cart Product"></a>
                                                </div>
                                                <div class="cart-product-content">
                                                    <h3 class="title"><a href="single-product.html">Wait, You Need This</a></h3>
                                                    <div class="product-quty-price">
                                                        <span class="cart-quantity">Qty: <strong> 1 </strong></span>
                                                        <span class="price">
                                                        <span class="new">$80.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Cart Product End -->

                                            <!-- Product Remove Start -->
                                            <div class="cart-product-remove">
                                                <a href="#/"><i class="icon-close"></i></a>
                                            </div>
                                            <!-- Product Remove End -->

                                        </div>
                                        <!-- Cart Product/Price End -->

                                    </div>
                                    <!-- Cart Procut Wrapper -->

                                    <!-- Cart Product Total Start -->
                                    <div class="cart-product-total p-b-20 m-b-20 border-bottom">
                                        <span class="value">Total</span>
                                        <span class="price">200$</span>
                                    </div>
                                    <!-- Cart Product Total End -->

                                    <!-- Cart Product Button Start -->
                                    <div class="cart-product-btn m-t-20">
                                        <a href="cart.html" class="btn btn-outline-light btn-hover-primary w-100">View cart</a>
                                        <a href="checkout.html" class="btn btn-outline-light btn-hover-primary w-100 m-t-20">Checkout</a>
                                    </div>
                                    <!-- Cart Product Button End -->

                                </div>
                                <!-- Header Cart Content End -->

                            </div>
                            <div class="header-action-btn header-action-btn-cart d-flex d-sm-none">
                                <a href="cart.html">
                                    <i class="icon-handbag icons"></i>
                                    <span class="header-action-num">3</span>
                                </a>
                            </div>
                            <!-- Header Action Button End -->

                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
                                <i class="icon-menu"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->

                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->

</div>
<!-- Header Section End -->

<!-- Breadcrumb Area Start -->
<div class="section breadcrumb-area bg-name-bright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrapper">
                    <h2 class="breadcrumb-title">My Account</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- My Account Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <div class="row">

                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Download</a>
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                                <a href="login.html"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">

                                <!-- Single Tab Content Start -->

                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Pending</td>
                                                        <td>$3000</td>
                                                        <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>July 22, 2018</td>
                                                        <td>Approved</td>
                                                        <td>$200</td>
                                                        <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>June 12, 2019</td>
                                                        <td>On Hold</td>
                                                        <td>$990</td>
                                                        <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Downloads</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Haven - Free Real Estate PSD Template</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download m-r-5"></i> Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>TechWorld - Profolio Business Template</td>
                                                        <td>Sep 12, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download m-r-5"></i> Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Aya</strong></p>
                                            <p>1234 Market ##, Suite 900 <br>Lorem Ipsum, ## 12345</p>
                                            <p>Mobile: (123) 123-456789</p>
                                        </address>
                                        <a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-edit m-r-10"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item m-b-15">
                                                            <label for="first-name" class="required m-b-10">First Name</label>
                                                            <input type="text" id="first-name" placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item m-b-15">
                                                            <label for="last-name" class="required m-b-10">Last Name</label>
                                                            <input type="text" id="last-name" placeholder="Last Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item m-b-15">
                                                    <label for="display-name" class="required m-b-10">Display Name</label>
                                                    <input type="text" id="display-name" placeholder="Display Name" />
                                                </div>
                                                <div class="single-input-item m-b-15">
                                                    <label for="email" class="required m-b-5">Email Addres</label>
                                                    <input type="email" id="email" placeholder="Email Address" />
                                                </div>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item m-b-15">
                                                        <label for="current-pwd" class="required m-b-10">Current Password</label>
                                                        <input type="password" id="current-pwd" placeholder="Current Password" />
                                                    </div>
                                                    <div class="row m-b-n15">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item m-b-15">
                                                                <label for="new-pwd" class="required m-b-10">New Password</label>
                                                                <input type="password" id="new-pwd" placeholder="New Password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item m-b-15">
                                                                <label for="confirm-pwd" class="required m-b-10">Confirm Password</label>
                                                                <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item single-item-button m-t-30">
                                                    <button class="btn btn btn-primary btn-hover-dark rounded-0">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->

                            </div>
                        </div>
                        <!-- My Account Tab Content End -->

                    </div>
                </div>
                <!-- My Account Page End -->

            </div>
        </div>

    </div>
</div>
<!-- My Account Section End -->


<!-- Footer Section End -->

<!-- Modal Start  -->
<div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
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
                                    <img class="w-100" src="assets/images/products/large-product/1.png" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="assets/images/products/large-product/2.png" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="assets/images/products/large-product/3.png" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="assets/images/products/large-product/4.png" alt="Product">
                                </a>
                                <a class="swiper-slide" href="#">
                                    <img class="w-100" src="assets/images/products/large-product/5.png" alt="Product">
                                </a>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-md-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-product-button-next swiper-button-next"><i class="ti-arrow-right"></i></div>
                            <div class="swiper-product-button-prev swiper-button-prev"><i class="ti-arrow-left"></i></div>
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
                            <h2 class="product-title">Single Product Slider</h2>
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
                            <span class="regular-price">$70.00</span>
                            <span class="old-price"><del>$85.00</del></span>
                        </div>
                        <!-- Price Box End -->

                        <!-- SKU Start -->
                        <div class="sku m-b-15">
                            <span>SKU: 12345</span>
                        </div>
                        <!-- SKU End -->

                        <!-- Product Inventory Start -->
                        <div class="product-inventroy m-b-15">
                            <span class="inventroy-title"> <strong>Availability:</strong></span>
                            <span class="inventory-varient">12 Left in Stock</span>
                        </div>
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p class="desc-content m-b-25">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <!-- Description End -->

                        <!-- Quantity Start -->
                        <div class="quantity d-flex align-items-center justify-content-start m-b-25">
                            <span class="m-r-10"><strong>Qty: </strong></span>
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
                                    <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                            </div>
                        </div>
                        <!-- Cart Button End -->

                        <!-- Social Shear Start -->
                        <div class="social-share">
                            <div class="widget-social justify-content-center m-b-30">
                                <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                            </div>
                        </div>
                        <!-- Social Shear End -->

                        <!-- Payment Option Start -->
                        <div class="payment-option m-t-20 d-flex justify-content-start">
                            <span><strong>Payment: </strong></span>
                            <a href="#">
                                <img class="fit-image m-l-5" src="assets/images/payment/payment_large.png" alt="Payment Option Image">
                            </a>
                        </div>
                        <!-- Payment Option End -->

                    </div>
                    <!-- Product Summery End -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End  -->






<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script>

<!--Main JS-->
<script src="assets/js/main.js"></script>

@endsection