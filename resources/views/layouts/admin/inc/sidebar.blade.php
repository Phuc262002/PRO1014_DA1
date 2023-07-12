<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
      <!-- Dark Logo-->
      <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
          <img src="assets/images/logo-sm.png" alt="" height="22" />
        </span>
        <span class="logo-lg">
          <img src="assets/images/logo-dark.png" alt="" height="17" />
        </span>
      </a>
      <!-- Light Logo-->
      <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
          <img src="assets/images/logo-sm.png" alt="" height="22" />
        </span>
        <span class="logo-lg">
          <img src="assets/images/logo-light.png" alt="" height="17" />
        </span>
      </a>
      <button
        type="button"
        class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
        id="vertical-hover"
      >
        <i class="ri-record-circle-line"></i>
      </button>
    </div>

    <div id="scrollbar">
      <div class="container-fluid">
        <div id="two-column-menu"></div>
        <ul class="navbar-nav" id="navbar-nav">
          <li class="nav-item">
            <a class="nav-link menu-link" href="index.html">
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
            <a
              class="nav-link menu-link"
              href="#sidebarAuth"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarAuth"
            >
              <i class="mdi mdi-account-circle-outline"></i>
              <span data-key="t-authentication">Quản lí tài khoản</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarAuth">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tài khoản quản trị
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse menu-dropdown" id="sidebarAuth">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tài khoản người dùng
                  </a>
                </li>
              </ul>
            </div>
            <div class="collapse menu-dropdown" id="sidebarAuth">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
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
            <a
              class="nav-link menu-link"
              href="#sidebarPages"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarPages"
            >
              <i class="bx bx-category-alt fs-22"></i>
              <span data-key="t-pages">Quản lí sản phẩm</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarPages">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả sản phẩm
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Thêm sản phẩm
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarPages1"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarPages"
            >
              <i data-feather="tag"></i>
              <span data-key="t-pages">Quản lí danh mục</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarPages1">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả danh mục
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Thêm danh mục
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarPages2"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarPages"
            >
              <i data-feather="star"></i>
              <span data-key="t-pages">Quản lí đánh giá</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarPages2">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả đánh giá
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarPages3"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarPages"
            >
              <i data-feather="briefcase"></i>
              <span data-key="t-pages">Quản lí thương hiệu</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarPages3">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả thương hiệu
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Thêm thương hiệu
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
            <a
              class="nav-link menu-link"
              href="#sidebarBlog"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarBlog"
            >
              <i data-feather="edit"></i>
              <span data-key="t-pages">Quản lí bài viết</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarBlog">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả bài viết
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Thêm bài viết
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarBlog1"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarBlog1"
            >
              <i data-feather="tag"></i>
              <span data-key="t-pages">Quản lí danh mục</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarBlog1">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả danh mục
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Thêm danh mục
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarCmt"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarCmt"
            >
              <i class="ri-message-3-line"></i>
              <span data-key="t-pages">Quản lí bình luận</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarCmt">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
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
            <a
              class="nav-link menu-link"
              href="#sidebarCart"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarBlog"
            >
              <i class="bx bx-shopping-bag fs-22"></i>
              <span data-key="t-pages">Quản lí đơn hàng</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarCart">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả đơn hàng
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Đơn hàng chưa xác nhận
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Đơn hàng giữ lại
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Đơn hàng đã chấp nhận
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Đơn hàng đã hoàn thành
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Đơn hàng đã hủy
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarSV"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarBlog"
            >
              <i class="bx bx-shopping-bag fs-22"></i>
              <span data-key="t-pages">Quản lí dịch vụ</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarSV">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-starter.html"
                    class="nav-link"
                    data-key="t-starter"
                  >
                    Tất cả dịch vụ
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Dịch vụ chưa xác nhận
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Dịch vụ giữ lại
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Dịch vụ đã chấp nhận
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Dịch vụ đã hoàn thành
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
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
            <a
              class="nav-link menu-link"
              href="#sidebarSettings"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarCmt"
            >
              <i data-feather="settings"></i>
              <span data-key="t-pages">Cài đặt</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarSettings">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Quản lí slider
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="pages-team.html"
                    class="nav-link"
                    data-key="t-team"
                  >
                    Quản lí banner
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