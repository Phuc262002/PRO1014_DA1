<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('home') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" height="40" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" height="80" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('home') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" height="40" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" height="80" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-widgets">Bảng điều khiển</span>
                    </a>
                </li>

                <!-- end Dashboard Menu -->

                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">TÀI KHOẢN</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span data-key="t-authentication">Quản lý tài khoản</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.admin_manager') }}" class="nav-link" data-key="t-starter">
                                    Tài khoản quản trị
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.user_manager') }}" class="nav-link" data-key="t-starter">
                                    Tài khoản người dùng
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.form_add_user') }}" class="nav-link" data-key="t-starter">
                                    Thêm tài khoản
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">SẢN PHẨM</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages5" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="bx bx-category-alt fs-22"></i>
                        <span data-key="t-pages">Quản lý sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages5">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('product.index') }}" class="nav-link" data-key="t-starter">
                                    Tất cả sản phẩm
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('product.create') }}" class="nav-link" data-key="t-team">
                                    Thêm sản phẩm
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages1" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i data-feather="tag"></i>
                        <span data-key="t-pages">Quản lý danh mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('category-product.index') }}" class="nav-link"
                                    data-key="t-starter">
                                    Tất cả danh mục
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('category-product.create') }}" class="nav-link" data-key="t-team">
                                    Thêm danh mục
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages3" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-pages">Quản lý thương hiệu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.brand_manager') }}" class="nav-link" data-key="t-starter">
                                    Tất cả thương hiệu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.form_add_brand') }}" class="nav-link" data-key="t-starter">
                                    Thêm thương hiệu
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">Dịch vụ</span>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarService" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCmt">
                        <i data-feather="life-buoy"></i>
                        <span data-key="t-pages">Dịch vụ</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarService">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('service.index') }}" class="nav-link" data-key="t-team">
                                    Quản lý dịch vụ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('service.create') }}" class="nav-link" data-key="t-team">
                                    Thêm dịch vụ
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">Bài viết</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBlog" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBlog">
                        <i data-feather="edit"></i>
                        <span data-key="t-pages">Quản lý bài viết</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBlog">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.blog_manager') }}" class="nav-link" data-key="t-starter">
                                    Tất cả bài viết
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.form_add_blog') }}" class="nav-link" data-key="t-team">
                                    Thêm bài viết
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBlog1" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBlog1">
                        <i data-feather="tag"></i>
                        <span data-key="t-pages">Quản lý danh mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarBlog1">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('category-blog.index') }}" class="nav-link" data-key="t-starter">
                                    Tất cả danh mục
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('category-blog.create') }}" class="nav-link" data-key="t-team">
                                    Thêm danh mục
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCmt" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCmt">
                        <i class="ri-message-3-line"></i>
                        <span data-key="t-pages">Quản lý bình luận</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCmt">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.comment_manager') }}" class="nav-link"
                                    data-key="t-starter">
                                    Bình luận mới nhất
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">Đơn hàng và dịch vụ</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCart" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBlog">
                        <i class="bx bx-shopping-bag fs-22"></i>
                        <span data-key="t-pages">Quản lý đơn hàng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCart">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.order_all') }}" class="nav-link" data-key="t-starter">
                                    Tất cả đơn hàng
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.order_pending') }}" class="nav-link" data-key="t-team">
                                    Đơn hàng chưa xác nhận
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.order_holding') }}" class="nav-link" data-key="t-team">
                                    Đơn hàng giữ lại
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.order_accepted') }}" class="nav-link" data-key="t-team">
                                    Đơn hàng đã chấp nhận
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.order_completed') }}" class="nav-link" data-key="t-team">
                                    Đơn hàng đã hoàn thành
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.order_canceled') }}" class="nav-link" data-key="t-team">
                                    Đơn hàng đã hủy
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSV" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarBlog">
                        <i class="bx bx-shopping-bag fs-22"></i>
                        <span data-key="t-pages">Quản lý dịch vụ</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSV">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.service_all') }}" class="nav-link" data-key="t-starter">
                                    Tất cả dịch vụ
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.service_pending') }}" class="nav-link" data-key="t-team">
                                    Dịch vụ chưa xác nhận
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.service_holding') }}" class="nav-link" data-key="t-team">
                                    Dịch vụ giữ lại
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.service_accepted') }}" class="nav-link" data-key="t-team">
                                    Dịch vụ đã chấp nhận
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.service_completed') }}" class="nav-link" data-key="t-team">
                                    Dịch vụ đã hoàn thành
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.service_canceled') }}" class="nav-link" data-key="t-team">
                                    Dịch vụ đã hủy
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span data-key="t-pages">Cài đặt</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSettings" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCmt">
                        <i data-feather="settings"></i>
                        <span data-key="t-pages">Cài đặt</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSettings">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('banner.index') }}" class="nav-link" data-key="t-team">
                                    Quản lý banner và slider
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.form_add_banner_slider') }}" class="nav-link"
                                    data-key="t-team">
                                    Thêm banner và slider
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
