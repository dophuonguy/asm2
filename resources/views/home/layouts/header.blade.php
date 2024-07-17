<div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
      <a class="navbar-brand order-1" href="index.html">
        <img class="img-fluid" width="100px" src="{{asset("assets")}}/images/logo.png" alt="Reader | Hugo Personal Blog Template">
      </a>
      <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">
              Trang chủ
            </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Tin Tức <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="about-me.html">Chính trị - Xã Hội</a>

              <a class="dropdown-item" href="about-us.html">Đời sống - Dân sinh</a>

              <a class="dropdown-item" href="about-us.html">Nóng trên mạng</a>

            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Kinh Doanh <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

              <a class="dropdown-item" href="author.html">Doanh nhân</a>
              <a class="dropdown-item" href="author-single.html">Tài chính</a>
              <a class="dropdown-item" href="advertise.html">Bất động sản</a>
              <a class="dropdown-item" href="post-details.html">Khởi Nghiệp</a>
              <a class="dropdown-item" href="post-elements.html">Doanh nghiệp</a>
              <a class="dropdown-item" href="tags.html">Chứng khoán</a>
              <a class="dropdown-item" href="search-result.html">Tỉ giá</a>
              <a class="dropdown-item" href="search-not-found.html">Giá vàng</a>
              <a class="dropdown-item" href="privacy-policy.html">Tiền tiền tiền</a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Phản hồi</a>
          </li>

          <li class="nav-item dropdown">
            @if (Auth::check())
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              {{ Auth::user()->name }} <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a>
              <a class="dropdown-item" href="about-us.html">About Us</a>
            </div>
            @else
            <a class="nav-link" href="{{ route('login') }}" role="button"  aria-haspopup="true"
            aria-expanded="false"> Đăng nhập </a>
            @endif
          </li>
        </ul>
      </div>
      <div class="order-2 order-lg-3 d-flex align-items-center">

        <!-- search -->

        </button>
      </div>

    </nav>
  </div>